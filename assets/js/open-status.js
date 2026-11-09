/**
 * The live lines of the food themes, in the shop's time zone:
 * - "Open now status" paragraphs, from the hours shown just before each one,
 *   with the shop's closed dates (holidays) counted as closed;
 * - "Order cut-off" paragraphs, from the order-ahead rules the checkout uses;
 * - the earliest pickup day on a product with a notice period;
 * - "Schedule" lists, each item starting with a time, marked done and next.
 *
 * Open now fills each paragraph from the hours shown just
 * before it. The hours are the owner's own table (or
 * rows of day and time paragraphs), so this reads what the page shows; a row
 * it cannot read leaves the paragraph empty, and empty is hidden. Nothing is
 * guessed.
 *
 * Reads days as "Monday", "Mon–Thu", "Lundi / Monday", "Daily", and times as
 * "6:30 AM – 2:00 PM", "8:00 – 18:00" or "Closed". Generated into the theme
 * from tools/skeleton-food/; edit it there.
 */
(function () {
	'use strict';
	var cfg = window['steepedOpenStatus'];
	var DAYS = [ 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday' ];
	if ( ! cfg ) {
		return;
	}

	function dayIndex( word ) {
		if ( word.length < 3 ) {
			return -1;
		}
		for ( var i = 0; i < 7; i++ ) {
			if ( DAYS[ i ].indexOf( word ) === 0 ) {
				return i;
			}
		}
		return -1;
	}

	// The weekdays a row covers, or null.
	function daysOf( text ) {
		var t = text.toLowerCase();
		if ( /\b(daily|every day|everyday)\b/.test( t ) ) {
			return [ 0, 1, 2, 3, 4, 5, 6 ];
		}
		var found = ( t.match( /[a-z]+/g ) || [] ).map( dayIndex ).filter( function ( i ) {
			return i >= 0;
		} );
		if ( ! found.length ) {
			return null;
		}
		if ( 2 === found.length && /[–—-]|\bto\b/.test( t ) ) {
			var out = [];
			for ( var d = found[ 0 ]; ; d = ( d + 1 ) % 7 ) {
				out.push( d );
				if ( d === found[ 1 ] ) {
					return out;
				}
			}
		}
		return found;
	}

	// One time: minutes after midnight, and the text as written.
	var TIME = /(\d{1,2})(?:[:.h](\d{2}))?\s*([ap])?\.?\s*m?\.?/i;
	function minutes( m, inheritPm ) {
		var h = parseInt( m[ 1 ], 10 );
		var min = m[ 2 ] ? parseInt( m[ 2 ], 10 ) : 0;
		var ap = ( m[ 3 ] || inheritPm || '' ).toLowerCase();
		if ( h > 23 || min > 59 || ( ap && h > 12 ) ) {
			return null;
		}
		if ( 'p' === ap && h < 12 ) {
			h += 12;
		}
		if ( 'a' === ap && 12 === h ) {
			h = 0;
		}
		return h * 60 + min;
	}

	// The opening and closing of one row's time cell, "closed", or null.
	function hoursOf( text ) {
		var t = text.split( ' · ' )[ 0 ].trim();
		var parts = t.split( /\s*(?:–|—|-|\bto\b)\s*/ );
		if ( 2 !== parts.length ) {
			return /closed|fermé|cerrado|geschlossen|chiuso|fechado/i.test( t ) ? 'closed' : null;
		}
		var a = parts[ 0 ].match( TIME );
		var b = parts[ 1 ].match( TIME );
		if ( ! a || ! b ) {
			return null;
		}
		var close = minutes( b );
		// "1 – 9 PM": the first time takes the second's PM when that keeps it earlier.
		var carry = ! a[ 3 ] && b[ 3 ] && parseInt( a[ 1 ], 10 ) < parseInt( b[ 1 ], 10 ) ? b[ 3 ] : '';
		var open = minutes( a, carry );
		if ( null === open || null === close ) {
			return null;
		}
		return { open: open, close: close <= open ? close + 1440 : close, openText: parts[ 0 ].trim(), closeText: parts[ 1 ].trim() };
	}

	// The week from the element before the paragraph, or null if any row is unreadable.
	function weekFrom( box ) {
		var rows = box.querySelectorAll( 'tr' ).length ? box.querySelectorAll( 'tr' ) : box.children;
		var week = [];
		for ( var r = 0; r < rows.length; r++ ) {
			var cells = rows[ r ].querySelectorAll( 'td, th' ).length ? rows[ r ].querySelectorAll( 'td, th' ) : rows[ r ].children;
			if ( cells.length < 2 ) {
				return null;
			}
			var days = daysOf( cells[ 0 ].textContent );
			var hours = hoursOf( cells[ 1 ].textContent );
			if ( ! days || ! hours ) {
				return null;
			}
			days.forEach( function ( d ) {
				week[ d ] = hours;
			} );
		}
		return week.length ? week : null;
	}

	// Weekday and minutes in the shop's time zone.
	function shopNow() {
		var now = new Date();
		if ( cfg.tz ) {
			try {
				var p = {};
				new Intl.DateTimeFormat( 'en-US', { timeZone: cfg.tz, weekday: 'short', hour: '2-digit', minute: '2-digit', hourCycle: 'h23' } )
					.formatToParts( now ).forEach( function ( x ) {
						p[ x.type ] = x.value;
					} );
				var ymd = new Intl.DateTimeFormat( 'en-CA', { timeZone: cfg.tz, year: 'numeric', month: '2-digit', day: '2-digit' } ).format( now );
				return { day: dayIndex( p.weekday.toLowerCase() ), min: ( parseInt( p.hour, 10 ) % 24 ) * 60 + parseInt( p.minute, 10 ), date: ymd };
			} catch ( e ) {}
		}
		var shifted = new Date( now.getTime() + cfg.offset * 60000 );
		return { day: shifted.getUTCDay(), min: shifted.getUTCHours() * 60 + shifted.getUTCMinutes(), date: shifted.toISOString().slice( 0, 10 ) };
	}

	function dayName( d ) {
		// 2023-01-01 was a Sunday.
		return new Date( Date.UTC( 2023, 0, 1 + d, 12 ) ).toLocaleDateString( document.documentElement.lang || undefined, { weekday: 'long', timeZone: 'UTC' } );
	}

	// The shop-calendar date i days from now, as YYYY-MM-DD.
	function dateIn( now, i ) {
		var d = new Date( now.date + 'T12:00:00Z' );
		d.setUTCDate( d.getUTCDate() + i );
		return d.toISOString().slice( 0, 10 );
	}
	var closedDates = cfg.closed || [];
	function closedOn( now, i ) {
		return closedDates.indexOf( dateIn( now, i ) ) >= 0;
	}

	function sentence( week, now ) {
		var today = closedOn( now, 0 ) ? 'closed' : week[ now.day ];
		var yesterday = closedOn( now, -1 ) ? 'closed' : week[ ( now.day + 6 ) % 7 ];
		// Still open from last night's late hours.
		if ( yesterday && 'closed' !== yesterday && yesterday.close > 1440 && now.min < yesterday.close - 1440 ) {
			return [ 'open', cfg.until.replace( '%s', yesterday.closeText ) ];
		}
		if ( today && 'closed' !== today ) {
			if ( now.min >= today.open && now.min < today.close ) {
				return [ 'open', cfg.until.replace( '%s', today.closeText ) ];
			}
			if ( now.min < today.open ) {
				return [ 'closed', cfg.today.replace( '%s', today.openText ) ];
			}
		}
		for ( var i = 1; i <= 7; i++ ) {
			var d = ( now.day + i ) % 7;
			var h = closedOn( now, i ) ? 'closed' : week[ d ];
			if ( h && 'closed' !== h ) {
				return [ 'closed', 1 === i ? cfg.tomorrow.replace( '%s', h.openText ) : cfg.day.replace( '%1$s', dayName( d ) ).replace( '%2$s', h.openText ) ];
			}
		}
		return null;
	}

	// "14:00" as minutes, or null.
	function hm( text ) {
		var m = /^(\d{1,2}):(\d{2})$/.exec( String( text || '' ).trim() );
		return m && +m[ 1 ] < 24 && +m[ 2 ] < 60 ? +m[ 1 ] * 60 + +m[ 2 ] : null;
	}
	function clock( min ) {
		return new Date( Date.UTC( 2001, 0, 1, Math.floor( min / 60 ), min % 60 ) ).toLocaleTimeString( document.documentElement.lang || undefined, { hour: 'numeric', minute: '2-digit', timeZone: 'UTC' } );
	}
	// ISO weekday (1 Monday .. 7 Sunday) of the day i days from now.
	function isoDay( now, i ) {
		return ( ( now.day + i ) % 7 ) || 7;
	}
	// Days from today to the first day an order placed now can be ready,
	// exactly as the checkout's day list works it out: the notice in whole
	// days (or hours, rounded up), one more after the cut-off, then the next
	// day that is neither a closed weekday nor a closed date. null: no rules.
	function firstDay( now, leadHours ) {
		var a = cfg.ahead;
		if ( ! a ) {
			return null;
		}
		var cut = hm( a.cutoff );
		var i = Math.max( a.lead, Math.ceil( ( leadHours || 0 ) / 24 ) ) + ( null !== cut && now.min >= cut ? 1 : 0 );
		for ( var n = 0; n < 60; n++, i++ ) {
			if ( a.closedDays.indexOf( isoDay( now, i ) ) < 0 && ! closedOn( now, i ) ) {
				return i;
			}
		}
		return null;
	}
	function when( now, i ) {
		return 0 === i ? cfg.wordToday : 1 === i ? cfg.wordTmrw : cfg.wordOn.replace( '%s', dayName( ( now.day + i ) % 7 ) );
	}

	var now = shopNow();

	document.querySelectorAll( '.is-style-order-cutoff' ).forEach( function ( el ) {
		var i = firstDay( now, 0 );
		if ( null === i ) {
			return;
		}
		var cut = hm( cfg.ahead.cutoff );
		var openToday = cfg.ahead.closedDays.indexOf( isoDay( now, 0 ) ) < 0 && ! closedOn( now, 0 );
		el.textContent = null !== cut && openToday && now.min < cut
			? cfg.orderBy.replace( '%1$s', clock( cut ) ).replace( '%2$s', when( now, i ) )
			: cfg.orderNow.replace( '%s', when( now, i ) );
		el.setAttribute( 'data-state', 'set' );
	} );

	document.querySelectorAll( '[data-lead-hours] time' ).forEach( function ( t ) {
		var i = firstDay( now, parseInt( t.closest( '[data-lead-hours]' ).getAttribute( 'data-lead-hours' ), 10 ) );
		if ( null === i ) {
			return;
		}
		t.dateTime = dateIn( now, i );
		t.textContent = new Date( dateIn( now, i ) + 'T12:00:00Z' ).toLocaleDateString( document.documentElement.lang || undefined, { weekday: 'short', day: 'numeric', month: 'short', timeZone: 'UTC' } );
		t.closest( '[data-lead-hours]' ).removeAttribute( 'hidden' );
	} );

	// Schedule: each item starts with a time ("6:30 AM Breads", "10:00 · Focaccia").
	// Done once its time has passed today, next for the first one still to come.
	// On a closed day nothing is marked.
	document.querySelectorAll( '.is-style-schedule' ).forEach( function ( list ) {
		var items = Array.prototype.slice.call( list.querySelectorAll( ':scope > li' ) );
		var closedToday = closedOn( now, 0 ) || ( cfg.ahead && cfg.ahead.closedDays.indexOf( isoDay( now, 0 ) ) >= 0 );
		var nextSet = false;
		items.forEach( function ( li ) {
			var m = li.textContent.trim().match( /^(\d{1,2})(?:[:.h](\d{2}))?\s*([ap])?\.?\s*m?\.?/i );
			var at = m ? minutes( m ) : null;
			if ( null === at || closedToday ) {
				return;
			}
			var state = at <= now.min ? 'done' : nextSet ? '' : 'next';
			if ( 'next' === state ) {
				nextSet = true;
			}
			if ( state ) {
				li.setAttribute( 'data-state', state );
				li.setAttribute( 'data-label', 'done' === state ? cfg.done : cfg.next );
			}
		} );
	} );

	document.querySelectorAll( '.is-style-open-status' ).forEach( function ( el ) {
		var box = el.previousElementSibling;
		var week = box && weekFrom( box );
		var said = week && sentence( week, now );
		if ( said ) {
			el.setAttribute( 'data-state', said[ 0 ] );
			el.textContent = said[ 1 ];
		}
	} );
}());

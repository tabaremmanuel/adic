;(function($, document, window) {
	'use strict';
	var defaults = {
		label: 'Menu',
		action: 'PushRight',
		adTo: 'before',
		adToEl: 'body',
		closeClick: true,
		custom: false,
		dataMenu: '.genesis-nav-menu', 
	};
	$.fn.cmknav = function( options ) {
		var settings = $.extend( {}, defaults, options ),
		menuLabel  = '<a href="#" tabindex="0" class="cmk-nav-toggle" data-cmk-menu="'+ settings.dataMenu +'">'+ settings.label +'</a>';


		if ( settings.custom === true ) {
			(settings.adTo === 'before') ? $( settings.adToEl ).before( menuLabel ) : $( settings.adToEl ).after( menuLabel );
			$( settings.dataMenu ).addClass('cmk-' + settings.action);
		} else {
			(settings.adTo === 'before') ? this.before( menuLabel ) : this.after( menuLabel );
			$( settings.dataMenu ).addClass('cmk-' + settings.action);
		}
		$(document).on('click', 'a.cmk-nav-toggle', function(e) {
			var target = $(this).data('cmk-menu');
			$(this).toggleClass('active');
			$( target ).toggleClass('menu-opened');
			$('body').toggleClass( settings.action );
			if ( ! $(this).hasClass('active') ) $( settings.dataMenu ).find('.menu-item-has-children').removeClass('sub-opened');
			return false;
		});

		$( settings.dataMenu ).find('.menu-item-has-children').each( function() {
			var sub = $('<span class="subdown"></span>');

			$(this).append( sub );

			sub.on('click', function(e) {
				e.preventDefault();
				_nav_toggle( $(this) );
			});
		});
		
		if ( settings.closeClick === true ) {
			$( settings.dataMenu ).find('a').click( function( el ) {

				var link = $(this).attr('href');

				if ( link == '#' || !link ) {
					_nav_toggle( $(this) );
					el.preventDefault;
				} else {
					$('body').removeClass( settings.action );
					$( settings.dataMenu ).removeClass('menu-opened');
					$('.cmk-nav-toggle').removeClass('active');
				}
			});
		}
	};
})(jQuery, document, window);

function _nav_toggle(dis) {
	if ( dis.parent().hasClass('sub-opened') ) { 
		//this.parent().children('.menu-item-has-children').removeClass('sub-opened');					
		dis.parent().toggleClass('sub-opened');
	} else {
		dis.parent().parent().children('.menu-item-has-children').removeClass('sub-opened');
		dis.parent().addClass('sub-opened');
	}
}
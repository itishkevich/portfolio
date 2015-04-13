;(function($) {	'use strict';	// Device detect	var isDevice = /ipad|iphone|ipod|android|blackberry|webos|windows phone/i.test(navigator.userAgent.toLowerCase());	// Main Nav	function mainNav() {		var navIcon = $('.b-icon-nav'),			flyout = $('.b-nav-flyout');		navIcon.on('click', function () {			if (navIcon.hasClass('m-active')) {				navIcon.removeClass('m-active');				flyout.removeClass('fadeInRight').addClass('fadeOutRight');			}			else {				navIcon.addClass('m-active');				flyout.removeClass('fadeOutRight').addClass('fadeInRight');			}			return false;		});		$(document).on('click', function(e) {			if ($(e.target).parents().filter(flyout).is(':visible') != 1 && navIcon.hasClass('m-active')) {				navIcon.removeClass('m-active');				flyout.removeClass('fadeInRight').addClass('fadeOutRight');			}		});		$(window).on('resize', function(){			navIcon.removeClass('m-active');			flyout.removeClass('fadeInRight fadeOutRight');		});	}	// Initialization all functions	$(function () {		mainNav();	});})(jQuery);
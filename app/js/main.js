;(function($) {	'use strict';	var app = {		init: function () {			app.setUpListeners();			app.initModules();		},		initModules: function (){			nav.init();			forms.init();			popup.init();		},		setUpListeners: function () {			$(window).on('load resize', function(){				app.absoluteCenter($('.b-login-form'), true);			});		},		absoluteCenter: function(el, footer, popup) {			var $html = $('html'),				$body = $('body'),				centeredEl = el,				leftPos = 0,				topPos = 0,				footerHeight = 0,				pos = 'absolute';			if(footer === true) {				footerHeight = $('.b-footer-push').outerHeight();			}			if(popup === true) {				pos = 'fixed';			}			if(!$html.hasClass('ie8')) {				$(centeredEl).css({					position: pos				});			}			leftPos = ((($(window).width()) - $(centeredEl).outerWidth())/2);			topPos = (($(window).height() - footerHeight - $(centeredEl).outerHeight())/2);			if(topPos > 10) {				if(!$html.hasClass('ie8')) {					$(centeredEl).css({						left: leftPos,						top: topPos					});				}			} else {				if(popup === true) {					$(centeredEl).css({						position: 'absolute',						left: leftPos,						top: 10					});					$html.animate({scrollTop:0}, 'fast');					$body.animate({scrollTop:0}, 'fast');				} else {					$(centeredEl).removeAttr('style');				}			}		}	};	var nav = {		$navIcon:  $('.b-icon-nav'),		$flyout: $('.b-nav-flyout'),		init : function () {			nav.setUpListeners()		},		setUpListeners: function () {			nav.$navIcon.on('click touchstart', nav.toggleNav);			$(document).on('click touchstart', nav.hideNav);			$(window).on('resize', nav.resizeNav);		},		toggleNav: function () {			if (nav.$navIcon.hasClass('m-active')) {				nav.hideNav();			} else {				nav.showNav();			}			return false;		},		showNav: function () {			nav.$navIcon.addClass('m-active');			nav.$flyout.removeClass('fadeOutRight').addClass('fadeInRight');		},		hideNav: function () {			if (nav.$navIcon.hasClass('m-active')) {				nav.$navIcon.removeClass('m-active');				nav.$flyout.removeClass('fadeInRight').addClass('fadeOutRight');			}		},		resizeNav: function () {			nav.hideNav();			nav.$flyout.removeClass('fadeOutRight');		}	};	var popup = {		$overlay: $('.l-overlay'),		$lightbox: $('.b-lightbox'),		init: function () {			popup.setUpListeners();		},		setUpListeners: function () {			$('.js-add-project').on('click touchstart', popup.openPopup);			popup.$lightbox.find('.b-icon-close').on('click touchstart', popup.hidePopup);			popup.$overlay.on('click touchstart', popup.hidePopup);			$(window).on('resize load', function(){				app.absoluteCenter(popup.$lightbox, false, true);			});		},		openPopup: function () {			forms.formClear();			app.absoluteCenter(popup.$lightbox, false, true);			popup.$overlay.add(popup.$lightbox).show();		},		hidePopup: function (e) {			e.preventDefault ? e.preventDefault() : e.returnValue;			popup.$overlay.add(popup.$lightbox).hide().removeAttr('style');		}	};	var forms = {		init: function () {			forms.setUpListeners();			forms.iePlaceholder();		},		setUpListeners: function () {			var $form = $('form');			$('.b-input-file').on('change', forms.fileUpload);			$form.on('reset', forms.formClear);			$form.on('submit', forms.formSubmit);			$form.on('keydown', '.required', forms.formHideError);			$(document).on('click', '.b-icon-msg-close', forms.formHideMsg);		},		iePlaceholder: function () {			if(!('placeholder' in document.createElement('input'))){				$('[placeholder]').on('focus', function() {					var $input = $(this);					if ($input.val() === $input.attr('placeholder')) {						$input.val('');					}				}).on('blur', function() {					var $input = $(this);					if ($input.val() === '' || $input.val() === $input.attr('placeholder')) {						$input.val($input.attr('placeholder'))					}				}).blur().parents('form').submit(function() {					$(this).find('[placeholder]').each(function() {						var $input = $(this);						if ($input.val() === $input.attr('placeholder')) {							$input.val('');						}					})				});				setTimeout(function(){$('[placeholder]').trigger("blur");}, 100);			}		},		formValidation: function ($form) {			var $inputList = $form.find('.required'),				valid = true;			$.each($inputList, function(){				var $input = $(this),					$inputField = $(this).parents('.b-form-field'),					$inputVal = $input.val(),					$placeholder = $input.attr('placeholder'),					emailFilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;				if ($inputVal.length === 0 || $inputVal === $placeholder ||				($input.attr('name') === 'email' && !emailFilter.test($inputVal))) {					$inputField.addClass('m-error');					valid = false;				}			});			return valid;		},		formSubmit: function (e) {			e.preventDefault ? e.preventDefault() : e.returnValue;			var $form = $(this),				$sbtBtn = $form.find('input[type="submit"]'),				$rstBtn = $form.find('input[type="reset"]');			if (forms.formValidation($form) === true) {				forms.formClear();				$form.prepend(forms.formMsgSuccess());				$sbtBtn.add($rstBtn).attr('disabled', 'disabled');			}		},		formMsgSuccess: function () {			var msgTitle ='Поздравляем!',				msgBody = 'Ваш запрос отправлен.',				msgClass = 'm-success',				msg = '<div class="b-form-msg '+ msgClass +'">' +					'<div class="b-form-msg-title">'+ msgTitle +'' +							'<span class="b-icon-msg-close"></span>' +						'</div>' +					'	<div class="b-form-msg-body">'+ msgBody +'</div>' +					'</div>';			return msg;		},		formHideMsg: function(e) {			e.preventDefault ? e.preventDefault() : e.returnValue;			$(this).parents('.b-form-msg').remove();		},		formHideError: function() {			$(this).parents('.b-form-field').removeClass('m-error');		},		formClear: function() {			var $form = $('form');			$form.find('.b-form-msg').remove();			$form.find('input[type="text"], textarea').val('');			$form.find('.b-form-field').removeClass('m-error');			$form.find('.btn-holder input').removeAttr('disabled');			forms.iePlaceholder();		},		formReset: function(e) {			e.preventDefault ? e.preventDefault() : e.returnValue;			forms.formClear();		},		fileUpload: function () {			var filename = $(this).val().split('\\').pop();			$(this).next().find('.b-input').val(filename);			$(this).parents('.b-form-field').removeClass('m-error');		}	};	app.init();})(jQuery);
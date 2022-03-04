//=========================================
// global component クラス名表示
//=========================================
$(function () {
	$(".c-gl-box").each(function (index) {
		if ($(this).data("name") !== undefined) {
			$(this).prepend(
				'<div class="c-gl-box__no">' + $(this).data("name") + "</div>"
			);
		}
	});
});

//=========================================
// global component リンク
//=========================================
$(function () {
	$(".c-gl-box").each(function (index) {
		if ($(this).data("href") !== undefined) {
			$(this).on('click', function () {
				location.href = $(this).data("href");
			});
		}
	});
});
//////////////////////////////////////////////////////////
// Recruit Search
//////////////////////////////////////////////////////////
$(document).ready(function () {
	$(".c-table1 tr th:first-child").click(function () {
		$(this).toggleClass("open");
		$(".c-table1 tr td").toggleClass("active");
	});

	$(".c-table1__btn").click(function (e) {
		e.preventDefault();
		$(".c-input input:checkbox").removeAttr("checked");
	});
});
//=========================================
// global component 滑り台
//=========================================
$(function () {
	// Slide 1 - ゆっくりと流れる画像
	$('.c-slide1').slick({
		speed: 5000,
		autoplay: true,
		autoplaySpeed: 0,
		centerMode: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		variableWidth: true,
		infinite: true,
		initialSlide: 1,
		arrows: false,
		dots: false
	});
	// Slide 2
	$('.c-slide2').slick({
		centerMode: true,
		arrows: true,
		dots: true,
		centerPadding: '150px',
	})
	// Slide 3
	$('.c-slide3__1').slick({
		fade: false,
		arrows: true,
		asNavFor: '.c-slide3__2,.c-slide3__3'
	})
	$('.c-slide3__2').slick({
		asNavFor: '.c-slide3__1,.c-slide3__3',
		arrows: false,
		centerMode: true,
		dots: false,
		focusOnSelect: true,
		slidesToShow: 1,
		fade: true
	})
	$('.c-slide3__3').slick({
		fade: false,
		arrows: true,
		asNavFor: '.c-slide3__1,.c-slide3__2',
		autoplay: true,
		speed: 500,
		cssEase: 'linear',
		slidesToShow: 5,
		slidesToScroll: 1
	})
	// Slide 5
	function toggleSlide(items, index) {
		index = index % items.length;
		items.removeClass("is-current");
		items.addClass("is-hide");
		items.eq(index).removeClass('is-hide');
		items.eq(index).addClass('is-current');
		setTimeout(function () {
			toggleSlide(items, index + 1)
		}, 5000);
	}

	toggleSlide($('.c-slide5__slide'), 0);
});

//=========================================
// c-mv10 slide image
//=========================================
$(function () {
	$('.c-mv10__image').slick({
		dots: false,
		arrows: false,
		autoplay: true,
		infinite: true,
		speed: 3000,
		fade: true,
		cssEase: 'linear'
	});
});

//=========================================
// global component アニメーション
//=========================================
$(function () {
	setTimeout(() => {
		$(".c-animation-view1").addClass("is-scroll");
		$(".c-animation-view2").addClass("is-scroll");
		$(".c-animation-view3").addClass("is-active");
		$(".c-animation-view4, .c-animation-view5, .c-animation-view6, .c-animation-view8").addClass("is-animation");
	}, 1000);
});
if ($("body").hasClass("page-slide")) {
	$(function () {
		var o = $(".c-slide4__item"),
			s = $(".c-slide4__nav li"),
			e = 0,
			t = 6000,
			a = 0,
			r = 0,
			l = 0,
			d = s.length - 1;

		function setItem() {
			o.eq(e).addClass("is-current");
			s.eq(e).addClass("is-current");
			a = setInterval(animationLoop, t);
		}

		function animationLoop() {
			var clickHideNumber = $(".c-slide4__item.is-current").attr("id").replace("visualNumber_", "");
			l = 1;
			0 === r && (e === d ? e = 0 : e++);
			s.removeClass("is-current");
			s.eq(e).addClass("is-current");
			o.animate({
				opacity: 0
			}, {
				duration: 1000,
				queue: false
			});
			o.eq(e).animate({
				opacity: 1
			}, 1000);
			o.removeClass("is-current");
			o.eq(e).addClass("is-current");
			1 === r ?
				o.eq(clickHideNumber - 1).addClass("is-hide") :
				o.eq(e - 1).addClass("is-hide"),
				setTimeout(function () {
					o.removeClass("is-hide");
					$('.c-slide4__item:not(".is-current")').addClass("is-def");
				}, 900),
				setTimeout(function () {
					o.removeClass("is-def"),
						1 === r && (r = 0),
						l = 0
				}, 900)
		}
		$(".c-slide4__nav li").on("click", function () {
			var clickHideNumber = $(".c-slide4__item.is-current").attr("id").replace("visualNumber_", "");
			!$(this).hasClass("is-current") && 1 !== l && (r = 1, e = $(this).data("index") - 1);
			clickHideNumber;
			clearInterval(a);
			animationLoop();
			a = setInterval(animationLoop, t);
		});
		setItem();
	});
}
//=========================================
// global component vertical fixed navigation
//=========================================
$(function () {
	var contentSections = $('.c-section'),
		navigationItems = $('#navigation1 a');

	updateNavigation();
	$(window).on('scroll', function () {
		updateNavigation();
	});

	//smooth scroll to the section
	navigationItems.on('click', function (event) {
		event.preventDefault();
		smoothScroll($(this.hash));
	});

	//smooth scroll to second section
	$('.c-scrolldown').on('click', function (event) {
		event.preventDefault();
		smoothScroll($(this.hash));
	});

	function updateNavigation() {
		contentSections.each(function () {
			// var _this = $(this);
			var $this = $(this);
			var activeSection = $('#navigation1 a[href="#' + $this.attr('id') + '"]').data('number') - 1;
			if (($this.offset().top - $(window).height() / 2 < $(window).scrollTop()) && ($this.offset().top + $this.height() - $(window).height() / 2 > $(window).scrollTop())) {
				navigationItems.eq(activeSection).addClass('is-selected');
			} else {
				navigationItems.eq(activeSection).removeClass('is-selected');
			}
		});
	}

	function smoothScroll(target) {
		$('body,html').animate({
			'scrollTop': target.offset().top
		},
			600
		);
	}
});

//=========================================
// 002-scroll fix navigation
//=========================================
$(function () {
	$('.page-navigation002 .c-gl-box').scroll(function () {
		if ($(this).scrollTop() > 340) {
			$('.c-navi2').addClass('fixed');
			$('.page-navigation002 .page-navigation002__text').css('margin-top', $('.c-navi2').outerHeight());
		} else {
			$('.c-navi2').removeClass('fixed');
			$('.page-navigation002 .page-navigation002__text').removeAttr('style');
		}
	});
});
//=========================================
// 003-scroll fix navigation
//=========================================
$(function () {
	$('.page-navigation003 .c-gl-box').scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('.c-header3').addClass('fixed');
			$('.c-header3 h1').hide();
		} else {
			$('.c-header3').removeClass('fixed');
			$('.c-header3 h1').show();
		}
	});
});
//=========================================
// 004-scroll fix navigation
//=========================================
$(function () {
	var shrinkHeader = 1;
	$('.page-navigation004 .c-gl-box').scroll(function () {
		var scroll = $('.page-navigation004 .c-gl-box').scrollTop();
		console.log(scroll);
		if (scroll >= shrinkHeader) {
			$('.c-header4').addClass('shrink');
		} else {
			$('.c-header4').removeClass('shrink');
		}
	});
});
//=========================================
// 007-mega menu
//=========================================
$(function () {
	var targetli = $(".c-navi7 > ul > li");
	targetli.mouseover(function () {
		var _height = $(this).find('.c-submenu').height();
		if ($(this).hasClass('c-navi7sub')) {
			$(".c-navi7__background").addClass("is-open");
			$(".c-navi7__background").height(_height);
		}
	});
	targetli.mouseout(function () {
		if ($(this).hasClass('c-navi7sub')) {
			$(".c-navi7__background").removeClass("is-open");
			$(".c-navi7__background").height('1px');
		}
	});
});
//=========================================
// 011-mega menu
//=========================================
$(function () {
	var _targetli = $(".c-navi11 > ul >li");
	_targetli.mouseover(function (event) {
		var dataMenu = $(this).data('megamenu');
		$(".c-navi11__content").outerHeight(0);
		if ($(this).hasClass('c-navi11__mega')) {
			$(this).addClass('is-hover');
			var megaHeight = $('.c-navi11__content[data-megamenu="' + dataMenu + '"] .c-navi11__inner').outerHeight();
			$(".c-navi11__content[data-megamenu='" + dataMenu + "']").height(megaHeight);
		}
	});
	_targetli.mouseout(function (event) {
		var dataMenu = $(this).data('megamenu');
		var _contarget = $(".c-navi11__content[data-megamenu='" + dataMenu + "']");
		$(this).removeClass('is-hover');
		_contarget.outerHeight(0);
		_contarget.mouseover(function () {
			var megaHeight = $('.c-navi11__content[data-megamenu="' + dataMenu + '"] .c-navi11__inner').outerHeight();
			$(this).height(megaHeight);
			$('.c-navi11 > ul >li[data-megamenu="' + dataMenu + '"]').addClass('is-hover');
		});
		_contarget.mouseout(function () {
			$(this).outerHeight(0);
			_targetli.removeClass('is-hover');
		});
	});
})

// Animation view 7 
$(function () {
	$('.c-animation-view7__slide').slick({
		autoplay: true,
		infinite: true,
		speed: 1500,
		fade: true,
		cssEase: 'linear',
		arrows: false,
		dots: false
	});

	$('.c-animation-view9 button').on('click', function () {
		var txt = $(this).attr("data-rewrite");
		$(this).addClass("is-animation");
		$(this).addClass("is-loading");
		setTimeout(() => {
			$(this).find("span").html(txt);
		}, 1000);
	})
	var index1 = 0;
	setInterval(function () {
		let item = $(".c-slide6__item");
		$(item).eq(index1).addClass("on");
		$(item).eq(index1 - 1).removeClass("on").addClass("off");
		setTimeout(function () {
			$(item).eq(index1 - 1).removeClass("off");
			$(item).removeClass("off");
		}, 2000);
		index1 += 1;
		if (index1 > 3) index1 = 0;
		// console.log(index1);
	}, 5000);
});

// animation card 9
$(function () {
	var RollOverClass = function () {
		var time = 0.65;
		var ease = Power4.easeOut;
		var SP_BREAKPOINT = 767;

		function onCreate() {
			$(document).ready(function ($) {
				$(".c-card9__img").hover(onRollOver, onRollOut);
			});
		}

		function onRollOver() {
			if (getWindowSize() <= SP_BREAKPOINT) return;
			var t1 = $(".c-card9__icon1", $(this));
			var t2 = $(".c-card9__icon2", $(this));
			TweenMax.killTweensOf(t1);
			TweenMax.killTweensOf(t2);
			TweenMax.set(t1, {
				x: "0%"
			});
			TweenMax.set(t2, {
				x: "-100%"
			});
			TweenMax.to(t1, time, {
				x: "100%",
				ease: ease
			});
			TweenMax.to(t2, time, {
				x: "0%",
				ease: ease
			});
		}

		function onRollOut() {
			if (getWindowSize() <= SP_BREAKPOINT) return;
			var t1 = $(".c-card9__icon1", $(this));
			var t2 = $(".c-card9__icon2", $(this));
			TweenMax.killTweensOf(t1);
			TweenMax.killTweensOf(t2);
			TweenMax.set(t1, {
				x: "-100%"
			});
			TweenMax.set(t2, {
				x: "0%"
			});
			TweenMax.to(t1, time, {
				x: "0%",
				ease: ease
			});
			TweenMax.to(t2, time, {
				x: "100%",
				ease: ease
			});
		}

		function getWindowSize() {
			var r = (window.devicePixelRatio) ? window.devicePixelRatio : 1;
			var w = window.innerWidth;
			var h = window.innerHeight;
			return {
				w: w,
				h: h,
				r: r
			};
		}
		$(onCreate);
		return this;
	}
	var rollOverCl = new RollOverClass();
});

// animation card 29
$(function () {
	var $card29 = $('.c-card29__item1');
	$card29.on({
		'mouseenter.robotpj.c-card29__img': function () {
			$(this).addClass('-hover');
		},
		'mouseleave.robotpj.c-card29__img': function () {
			$(this).removeClass('-hover');
		}
	});
});

// Open Search || c-search5
(function (window) {
	'use strict';
	var openCtrl = document.getElementById('c-search5'),
		closeCtrl = document.getElementById('search5__close'),
		searchContainer = document.querySelector('.search5'),
		wrapper = document.body,
		inputSearch = searchContainer.querySelector('.search5__input');
	function init() {
		initEvents();
	}
	function initEvents() {
		openCtrl.addEventListener('click', openSearch);
		closeCtrl.addEventListener('click', closeSearch);
		document.addEventListener('keyup', function (ev) {
			if (ev.keyCode == 27) {
				closeSearch();
			}
		});
	}
	function openSearch() {
		searchContainer.classList.add('search--open');
		// wrapper.classList.add('darken');
		inputSearch.focus();
	}
	function closeSearch() {
		searchContainer.classList.remove('search--open');
		// wrapper.classList.remove('darken');
		inputSearch.blur();
		inputSearch.value = '';
	}
	init();
})(window);

// Open Search || c-search6
$(function () {
	var close = document.getElementsByClassName("c-search6__close")[0];
	$(".c-search6__click").click(function () {
		$(".c-search6__inner").addClass("formOpen");
		// $('article').addClass('searchOpen');
	});
	close.onclick = function () {
		$(".c-search6__inner").removeClass("formOpen");
		// $('article').removeClass('searchOpen');
	}
});

// Open Search || c-search9
$(function () {
	$("#search_icon").on('click', function (e) {
		e.preventDefault();
		$('#searchBox').slideDown(300).addClass('searchOpen9'); $('.c-search9__box').addClass('searchOpen9');
	});
	$("#js-searchClose").on('click', function () {
		$('#searchBox').slideUp(300).removeClass('searchOpen9'); $('.c-search9__box').removeClass('searchOpen9');
	});
});

// google search || c-search14
$(function () {
	$('.c-search14 input').focusin(function (e) { $('.c-search14__form').css("width", "240px"); }).focusout(function (e) { $('.c-search14__form').css("width", "160px"); });
});

// Function Search || c-search16
$(function () {
	$(".c-search16__input").click(function () {
		$(".c-search16__form").toggleClass('activeSearch');
	});
});

// Function Search || c-search19
$(function () {
	$(".c-search19__search").click(function () {
		if ($(".c-search19__input").hasClass('serch_open')) {
			$(".c-search19__input").removeClass("serch_open");
			$("#searchsubmit").css({ "display": "none" });
		} else {
			$(".c-search19__input").addClass("serch_open");
			$("#searchsubmit").css({ "display": "block" });
			$('.c-search19__input').eq(0).focus();
			$('.c-search19__input').select();
		}
	});
});

// Function Search || c-search23
$(function () {
	$('.c-search23').on('click', function () {
		$(this).addClass('search--show');
		$(this).find('.c-search23__field').focus();
	});
	$(document).on('click', function (e) {
		if (!$(e.target).closest('.c-search23').length) {
			if ($('.c-search23').is(":visible")) {
				$('.c-search23').removeClass('search--show');
				$('.c-search23').find('.c-search23__field').blur();
			}
		}
	});
});

// Function Search || c-search26
$(function () {
	$('.c-search26__icon').on("click", function () {
		if ($('.c-search26__form').css('display') == 'none') {
			$('.c-search26__form').velocity({ opacity: 1, marginTop: 0 }, {
				display: 'block',
				duration: 200,
				easing: 'easeOutCubic',
				complete: function () {
					$('c-search26__txt', this).focus();
				}
			});
		} else {
			$('.c-search26__form').velocity({ opacity: 0, marginTop: -5 }, { display: 'none', duration: 200, easing: 'easeOutCubic' });
		}
	});
});

// Function Search || c-search30
// $(function () {
// 	$(".c-search30__input").focus(function () {
// 		$(this).parent().addClass('focused');
// 	});
// });


// ========================================================================
// ========================================================================


$(function () {
	function resizeGridItem(item) {
		var grid = $(".c-list45")[0];
		var rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
		var rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
		var rowSpan = Math.ceil((item.querySelector('.c-list45__content').getBoundingClientRect().height + rowGap) / (rowHeight + rowGap));
		item.style.gridRowEnd = "span " + rowSpan;
	}

	function resizeAllGridItems() {
		var allItems = $(".c-list45__item");
		for (let x = 0; x < allItems.length; x++) {
			resizeGridItem(allItems[x]);
		}
	}

	function resizeInstance(instance) {
		item = instance.elements[0];
		resizeGridItem(item);
	}

	window.onload = resizeAllGridItems();
	window.addEventListener("resize", resizeAllGridItems);
});

$('.c-animation-view9 button').on('click', function () {
	var txt = $(this).attr("data-rewrite");
	$(this).addClass("is-animation");
	$(this).addClass("is-loading");
	setTimeout(() => {
		$(this).find("span").html(txt);
	}, 1000);
})
var index1 = 0;
setInterval(function () {
	let item = $(".c-slide6__item");
	$(item).eq(index1).addClass("on");
	$(item).eq(index1 - 1).removeClass("on").addClass("off");
	setTimeout(function () {
		$(item).eq(index1 - 1).removeClass("off");
		$(item).removeClass("off");
	}, 2000);
	index1 += 1;
	if (index1 > 3) index1 = 0;
}, 5000);


$(window).scroll(function () {
	var scroll = $(window).scrollTop();
	var flag = $('.c-animation-view10').offset().top;
	var flag1 = $('.c-animation-view9').offset().top;
	if (scroll > flag) {
		$('.c-animation-view11').addClass('is-show');
	} else if (scroll > flag1) {
		$('.c-animation-view10').addClass('is-animation');
	}
});
"use strict";

$(function () {
    var topSlider = $('#jsTopSlider');
    var topSliderCounter = $('.top-slider-counter');
    var newsSlider = $('#jsNewsSlider');
    var gallery = $('#jsGallery');
    var menuToggle = $('#jsMenuToggle');
    var header = $('#header');
    var body = $('body');
    var history = $('#jsHistoryCtrl');
    var lifeCat = $('#jsLifeCat');
    var nav = $('#jsNav');

    function debounce(f, ms) {
        var timer = null;
        return function () {
            var _this = this;

            for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
                args[_key] = arguments[_key];
            }

            var onComplete = function onComplete() {
                f.apply(_this, args);
                timer = null;
            };

            if (timer) {
                clearTimeout(timer);
            }

            timer = setTimeout(onComplete, ms);
        };
    } // const lh = lifeCat.outerHeight();
    // console.log(lh);


    if (document.documentElement.clientWidth > 760) {
        lifeCat.css('height', 65);
        $('.header-search-toggle').on('click', function (e) {
            e.preventDefault();
            $(this).closest('.header-search').addClass('header-search--open').closest('.header-options').addClass('search-open');
        });
    } else {
        if (lifeCat.find('li').length > 4) {
            lifeCat.css('height', 275);
        }
    }

    $('#jsSearchForm').on('submit', function (e) {
        e.preventDefault();
        var keyword = $(this).find('.form-control').val();
        window.location.href = '/'+$('html').attr('lang')+'/search/?query=' + keyword;
    });
    var debProcess = debounce(lifeCatHandler, 300);
    lifeCat.on('click', '.life-categories-toggle', function (e) {
        e.preventDefault();
        debProcess(); // lifeCat.slideToggle(500);
        // lifeCat.toggleClass('life-categories--open');
    }).on('click', 'li', function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
    });

    function lifeCatHandler() {
        console.log('hoba');

        if (lifeCat.hasClass('life-categories--open')) {
            lifeCat.animate({
                height: 65
            }, 300);
            lifeCat.removeClass('life-categories--open');
        } else {
            var lh = lifeCat.find('ul').outerHeight() + 10;
            lifeCat.animate({
                height: lh
            }, 300);
            lifeCat.addClass('life-categories--open');
        }
    }

    $('#modal-contacts').on('input', 'input, textarea', function (e) {
        if (e.target.value.length > 0) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    }).on('click', function () {
        $(this).removeClass('open');
        body.removeClass('overflow');
    }).on('click', '.modal-dialog', function (e) {
        e.stopPropagation();
    });
    $('[data-modal]').on('click', function (e) {
        e.preventDefault();
        $('.modal-contacts.open').removeClass('open');
        var id = $(this).data('modal');
        $(id).addClass('open');
        body.addClass('overflow');
    });
    $('[data-modal-close]').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.open').removeClass('open');
        body.removeClass('overflow');
    });
    nav.on('click', '.sub', function (e) {
        if (document.documentElement.clientWidth < 769) {
            e.preventDefault();
            $(this).find('nav').slideToggle(300);
        } else {
            $(this).toggleClass('open');
        }
    }).on('click', '.sub ul a', function (e) {
        e.stopPropagation();
    });

    if (history.length && document.documentElement.clientWidth < 550) {
        var scrollPos = 0;
        $(window).on('scroll', function () {
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;

            if (scrolled < scrollPos) {
                history.addClass('show');
            } else {
                history.removeClass('show');
            }

            scrollPos = scrolled;
        });
    }

    var allSlides = topSlider.find('.top-slide').length;
    topSliderCounter.find('.all').html(allSlides).end().find('.curr').text(1);
    topSlider.slick({
        // arrows: false,
        autoplay: true,
        prevArrow: $('.top-slider-prev'),
        nextArrow: $('.top-slider-next')
    }).on('afterChange', function (e, slick, slide) {
        topSliderCounter.find('.curr').html(slide + 1);
    });
    newsSlider.slick({
        // arrows: false,
        variableWidth: true,
        slidesToShow: 1,
        centerMode: true,
        appendArrows: $('.news-slider-arrows'),
        speed: 800,
        autoplay: true,
        infinite: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                arrows: false,
                variableWidth: false,
                centerMode: false,
                infinite: true
            }
        }, {
            breakpoint: 540,
            settings: {
                arrows: false,
                variableWidth: false,
                centerMode: false,
                infinite: true
            }
        }]
    });
    gallery.slick({
        arrows: false,
        autoplay: true,
        mobileFirst: true,
        centerMode: true,
        centerPadding: '20px',
        responsive: [{
            breakpoint: 760,
            settings: {
                centerMode: false,
                slidesToShow: 2
            }
        }, {
            breakpoint: 1000,
            settings: {
                centerMode: false,
                slidesToShow: 3
            }
        }]
    });
    menuToggle.on('click', function () {
        body.toggleClass('overflow');
        header.toggleClass('header-nav--open');
    });
    $.fancybox.defaults.toolbar = false;
    $.fancybox.defaults.gutter = 50;
    $.fancybox.defaults.baseClass = 'modal';
    $.fancybox.defaults.slideClass = 'modal-slide'; // $.fancybox.defaults.baseTpl = '<div class="fancybox-container" role="dialog" tabindex="-1">' +
    // '<div class="fancybox-bg"></div>' +
    // '<div class="fancybox-inner">' +
    // '<div class="modal-container">' +
    //   '<div class="fancybox-caption"></div>' +
    //   '<div class="fancybox-stage"></div>' +
    //   '<div class="fancybox-navigation">' +
    //     '{{arrows}}' +
    //     '<div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div>' +
    //   '</div>' +
    //  '</div>' +
    //  '<div class="fancybox-toolbar">{{buttons}}</div>' +
    // "</div>" +
    // "</div>";
});
//# sourceMappingURL=bundle.js.map
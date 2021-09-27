(function () {
    var app = {
    initAos: function () {
    setTimeout(function () {
    AOS.init();
    }, 1000);
    },
    
    initNavigation: function () {
    var $nav = jQuery('#nav, #nav2');
    if ($nav.length > 0) $nav.navTabDoubleTap();
    },
    
    
    
    initDetectScroll: function () {
    if (
    jQuery(window).width() > 991 &&
    jQuery(window).scrollTop() > 56
    )  {
    jQuery("header.header").addClass("show-fixed");
    } else  {
    jQuery("header.header").removeClass("show-fixed");
    }
    },
    
    
        initBurgerMenu: function () {
        jQuery('.burger-menu').on('click', function (e) {
        e.preventDefault();
        if (jQuery(this).hasClass('is-open')) {
        jQuery(this).removeClass('is-active');
        jQuery('.bm-view').removeClass('is-open');
        jQuery('body').removeClass('is-open');
        } else {
        jQuery(this).addClass('is-active');
        jQuery('.bm-view').addClass('is-open');
        jQuery('body').addClass('is-open');
        }
        });
        jQuery('.bm-drop, .bm-close').on('click', function (e) {
        e.preventDefault();
        jQuery('.bm-view').removeClass('is-open');
        jQuery('.bm-btn').removeClass('is-active');
        jQuery('body').removeClass('is-open');
        });
        },
    
    
    
    
    
    
        initBanner: function () {
        //code here
        },
    
        initQuickSearch: function () {
        //code here
        },
    
        initProperties: function () {
        //code here
        },
    
        initAreas: function () {
        //code here
        },
    
    
    };
    
    jQuery(document).ready(function () {
    app.initNavigation();
    
        app.initBurgerMenu();
    
    
    
        app.initBanner();
    
    
        app.initQuickSearch();
    
    
        app.initProperties();
    
    
        app.initAreas();
    
    
    });
    
    jQuery(window).on('scroll', function () {
    app.initDetectScroll();
    });
    
    jQuery(window).on('load', function () {
    
        setTimeout(function ()  {
            jQuery("a.introPopupTrigger").trigger("click");
            jQuery(".aios-popup-body").addClass("intro-popup-body");
        }, 5000);
    
    });
    
    jQuery(window).on('resize', function () {});
    })();
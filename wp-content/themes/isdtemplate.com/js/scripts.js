(function () {
    var app = {
        initAos: function () {
            setTimeout(function () {
                AOS.init();
            }, 1000);
        },

        initDetectScroll: function () {
            if (
                jQuery(window).width() > 991 &&
                jQuery(window).scrollTop() > 56
            ) {
                jQuery("header.header").addClass("show-fixed");
            } else {
                jQuery("header.header").removeClass("show-fixed");
            }
        },

        initNavigation: function () {
            var $nav = jQuery("#nav");
            if ($nav.length > 0) $nav.navTabDoubleTap();
        },
        initFeaturedProperties: function () {
            /* Put featured properties code here */
        },
        initFeaturedCommunities: function () {
            /* Put featured communities code here */
        },
        initTestimonials: function () {
            /* Put testimonials code here */
        },
        initQuickSearch: function () {
            /* Put quick search code here */
        },
        initCustomFunction: function () {
            /* See the pattern? Create more functions like this if needed. */
        },
    };

    jQuery(document).ready(function () {
        app.initAos();
        app.initNavigation();
        app.initFeaturedProperties();
        app.initFeaturedCommunities();
        app.initTestimonials();
        app.initQuickSearch();
    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () {});
})();

(function () {
    var app = {
        initAos: function () {
            setTimeout(function () {
                AOS.init();
            }, 1000);
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

    jQuery(window).on("load", function () {});
})();

(function () {
    var app = {
        initAos: function () {
            setTimeout(function () {
                AOS.init();
            }, 1000);
        },

        initNavigation: function () {
            var $nav = jQuery("#nav, #nav2");
            if ($nav.length > 0) $nav.navTabDoubleTap();
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

        initSlideshow: function () {
            //code here
        },

        initWelcome: function () {
            //code here
        },
    };

    jQuery(document).ready(function () {
        app.initAos();
        app.initNavigation();

        app.initSlideshow();

        app.initWelcome();
    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () {});

    jQuery(window).on("resize", function () {});
})();

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
            if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
                jQuery("header.header").addClass("show-fixed");
            } else {
                jQuery("header.header").removeClass("show-fixed");
            }
        },

        initSlideshow: function () {
            //code here
        },

        initQuickSearch: function () {
            //code here
        },

        initWelcome: function () {
            //code here
        },

        initProperties: function () {
            //code here

            var sectionSlick = ".properties-slick";
            $(sectionSlick).slick({
                slidesToShow: 5,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: false,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: false,
                rows: 1,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".hp-properties img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },

        initCommunities: function () {
            //code here
        },

        initCta: function () {
            //code here
        },

        initVideos: function () {
            //code here

            var sectionSlick = ".videos-slick";
            $(sectionSlick).slick({
                slidesToShow: 6,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: false,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: false,
                rows: 1,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".hp-videos img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },
    };

    jQuery(document).ready(function () {
        app.initAos();
        app.initNavigation();

        jQuery("#scroll-down").sideNavigation();

        app.initSlideshow();

        app.initQuickSearch();

        app.initWelcome();

        app.initProperties();

        app.initCommunities();

        app.initCta();

        app.initVideos();
    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () { });

    jQuery(window).on("resize", function () { });
})();

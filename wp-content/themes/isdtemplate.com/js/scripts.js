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

        initBurgerMenu: function () {
            jQuery(".burger-menu").on("click", function (e) {
                e.preventDefault();
                if (jQuery(this).hasClass("is-open")) {
                    jQuery(this).removeClass("is-active");
                    jQuery(".bm-view").removeClass("is-open");
                    jQuery("body").removeClass("is-open");
                } else {
                    jQuery(this).addClass("is-active");
                    jQuery(".bm-view").addClass("is-open");
                    jQuery("body").addClass("is-open");
                }
            });
            jQuery(".bm-drop, .bm-close").on("click", function (e) {
                e.preventDefault();
                jQuery(".bm-view").removeClass("is-open");
                jQuery(".bm-btn").removeClass("is-active");
                jQuery("body").removeClass("is-open");
            });
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

        initQuickSearch: function () {
            //code here
        },

        initProperties: function () {
            //code here
            var propertiesSlick = ".properties-slick";
            $(propertiesSlick).slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: false,
                autoplay: false,
                arrows: false,
                pauseOnHover: true,
                draggable: true,
                prevArrow: '<span class="ai-font-arrow-g-p slick-prev"></span>',
                nextArrow: '<span class="ai-font-arrow-g-n slick-next"></span>',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
        },

        initCommunities: function () {
            //code here
            jQuery(".communities-slick").slick({
                dots: false,
                infinite: true,
                slidesToShow: 3,
                speed: 1000,
                autoplay: false,
                autoplaySpeed: 4000,
                rows: 2,
                arrows: false,
                draggable: true,
                prevArrow: '<span class="ai-font-arrow-b-p slick-prev"></span>',
                nextArrow: '<span class="ai-font-arrow-b-n slick-next"></span>',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
        },

        initAreas: function () {
            //code here
        },
    };

    jQuery(document).ready(function () {
        app.initNavigation();

        app.initBurgerMenu();

        app.initQuickSearch();

        app.initProperties();

        app.initCommunities();

        app.initAreas();
    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () {
        setTimeout(function () {
            jQuery("a.introPopupTrigger").trigger("click");
            jQuery(".aios-popup-body").addClass("intro-popup-body");
        }, 5000);
    });

    jQuery(window).on("resize", function () {});
})();

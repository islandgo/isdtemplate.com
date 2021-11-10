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

        initIntroAnimation: function () {
            if (
                !jQuery("body").hasClass(
                    "user-navigated-from-a-page-on-the-site"
                )
            ) {
                jQuery(".intro-video video").on("ended", function () {
                    setTimeout(function () {
                        jQuery("body").addClass("intro-ended");
                    }, 1000);
                });
            } else {
                jQuery(".intro-video").hide();
                setTimeout(function () {
                    jQuery("body").addClass("intro-ended");
                }, 1000);
            }

            jQuery(".intro-video-close-wrap a").click(function () {
                jQuery(".intro-video").fadeOut();
                setTimeout(function () {
                    jQuery("body").addClass("intro-ended");
                }, 1000);
            });
        },

        initSlideshow: function () {
            //code here
        },

        initQuickSearch: function () {
            //code here
        },

        initContact: function () {
            //code here
        },

        initCommunities: function () {
            //code here

            var sectionSlick = ".communities-slick";
            $(sectionSlick).slick({
                slidesToShow: 3,
                slideToScroll: 1,
                dots: false,
                autoplay: false,
                arrows: false,
                prevArrow: '<span class="ai-font-arrow-g-p slick-prev"></span>',
                nextArrow: '<span class="ai-font-arrow-g-n slick-next"></span>',
                rows: 2,
                pauseOnHover: true,
                focusOnSelect: true,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
        },
    };

    jQuery(document).ready(function () {
        app.initAos();
        app.initNavigation();
        app.initIntroAnimation();

        app.initSlideshow();

        app.initQuickSearch();

        app.initContact();

        app.initCommunities();
    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () {});

    jQuery(window).on("resize", function () {});
})();

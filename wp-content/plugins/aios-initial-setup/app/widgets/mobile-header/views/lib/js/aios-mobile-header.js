!function(i){i.prototype.aiosMobileHeader=function(e){e=i.extend({height:!1},e),this.each(function(i,o){!function(i,e){var i=jQuery(i),o="_aiosmobilepackheaderanchoroffset"+Math.random(),n=!0,a=/_aiosmobilepackheaderanchoroffset(\d|\.)*$/g;function t(){jQuery(window).on("hashchange",function(){!function(){if(location.hash.length>0&&-1==location.hash.search(o)&&h()){var n=e.height?e.height:i.height();jQuery(window).scrollTop(jQuery(window).scrollTop()-n),location.hash+=o}}()}),window.setTimeout(function(){!function(){if(location.hash.length>0&&n&&h()){var i=location.hash.replace(a,"");location.hash=i,n=!1}}()},1)}function h(){return i.is(":visible")}t(),s=i.find(".amh-header-phone-list-trigger"),r=i.find(".amh-header-phone-list"),c=i.find(".amh-navigation-trigger"),s.click(function(){r.hasClass("visible")?(r.slideUp(),r.removeClass("visible")):(jQuery(".aios-mobile-pack-navigation-trigger-active").length>0&&i.find(".amh-navigation-trigger").trigger("click"),r.stop().slideDown(),r.addClass("visible"))}),c.click(function(){r.slideUp(),r.removeClass("visible")});var s,r,c}(jQuery(o),e)})}}(jQuery);

require("./bootstrap");

const stickyHeader = () => {
    $(window).scroll(function() {
        var sticky = $("header"),
            scroll = $(window).scrollTop();
        var fullPath = location.pathname + location.search + location.hash;

        if (scroll >= 40) {
            sticky.addClass("fixed");
            $(".nav-link").css("font-weight", "400");
        } else {
            // $(".svg-cart path").css({ fill: "#5B5B5B" });
            sticky.removeClass("fixed");
        }

        // if (scroll >= 40 && fullPath == "/") {
        //     $(".svg-cart path").css({ fill: "#fff" });
        // }
    });
};

$("#toggle").click(function() {
    $(this).toggleClass("active");
    // $(".navbar-collapse").removeClass("navbar-collapse");
    $(".navbar-collapse").toggleClass("mb-view");
    $(".navbar-collapse").toggleClass("show");
    $("body").toggleClass("ov");
});
// $(window).scroll(function() {
//     var sticky = $('header'), scroll = $(window).scrollTop();

//     if (scroll >= 40) {
//         sticky.addClass('fixed'); }
//     else {
//         sticky.removeClass('fixed');
//     }
// });

$(document).ready(function() {
    if (document.location.pathname.indexOf("/meal-boxes/") == 0) {
        document.body.className = "meal-box";
    }
});

var fullPath = location.pathname + location.search + location.hash;
// console.log("fullPath ", fullPath);
if (fullPath == "/") {
    $("body").addClass("landing");
    $("nav").removeClass("bg-white");
    $("nav").removeClass("shadow-sm");
    stickyHeader();
} else {
    stickyHeader();
}
// if(( window.location.hostname) ) {
//     $(window).scroll(function() {

//         if (scroll >= 40) {
//             $("nav").css("background-color", "#fff");
//             console.log("yay")
//         }
//     });
// }

if (window.location.href.indexOf("recipes") > -1) {
    $("header#header").css("position", "fixed!important");
    $("span.meal-tab-slider").css({ width: "399.692px !important", left: 0 });
    class StickyNavigation {
        constructor() {
            this.currentId = null;
            this.currentTab = null;
            this.tabContainerHeight = 100;
            let self = this;
            $(".meal-tab").click(function() {
                self.onTabClick(event, $(this));
            });
            $(window).scroll(() => {
                this.onScroll();
            });
            $(window).resize(() => {
                this.onResize();
            });
        }

        onTabClick(event, element) {
            event.preventDefault();
            let scrollTop =
                $(element.attr("href")).offset().top -
                this.tabContainerHeight +
                1;
            $("html, body").animate({ scrollTop: scrollTop }, 700);
        }

        onScroll() {
            this.checkTabContainerPosition();
            this.findCurrentTabSelector();
        }

        // onResize() {
        //     if(this.currentId) {
        //         this.setSliderCss();
        //     }
        // }

        checkTabContainerPosition() {
            let offset =
                $(".meal-tabs").offset().top +
                $(".meal-tabs").height() -
                this.tabContainerHeight;
            // console.log("offset ", offset);
            // console.log($('.meal-tabs').offset().top)//0
            // console.log($('.meal-tabs').height())
            // console.log(this.tabContainerHeight)
            if ($(window).scrollTop() > offset) {
                // $(".meal-tabs-container").addClass("meal-tabs-container--top");
                console.log("off1");
            } else {
                // $(".meal-tabs-container").removeClass(
                //     "meal-tabs-container--top"
                // );
                console.log("off2");
                $("span.meal-tab-slider").css({ width: "399.692px", left: 0 });
            }
        }

        findCurrentTabSelector(element) {
            let newCurrentId;
            let newCurrentTab;
            let self = this;
            $(".meal-tab").each(function() {
                let id = $(this).attr("href");
                let offsetTop = $(id).offset().top - self.tabContainerHeight;
                let offsetBottom =
                    $(id).offset().top +
                    $(id).height() -
                    self.tabContainerHeight;
                if (
                    $(window).scrollTop() > offsetTop &&
                    $(window).scrollTop() < offsetBottom
                ) {
                    newCurrentId = id;
                    newCurrentTab = $(this);
                }
            });
            if (this.currentId != newCurrentId || this.currentId === null) {
                this.currentId = newCurrentId;
                this.currentTab = newCurrentTab;
                this.setSliderCss();
            }
        }

        setSliderCss() {
            let width = 0;
            let left = 0;
            if (this.currentTab) {
                width = this.currentTab.css("width");
                left = this.currentTab.offset().left;
            }
            $(".meal-tab-slider").css("width", width);
            $(".meal-tab-slider").css("left", left);
        }
    }

    $(window).scroll(function() {
        var sticky = $("header"),
            scroll = $(window).scrollTop();

        sticky.removeClass("fixed");
        sticky.addClass("top");
    });

    new StickyNavigation();
}

// $(document).ready(function(){
//     if(window.location == window.location.hostname) {
//     }
//     // console.log(window.location.hostname)
//     // console.log(location.href)
//     var base_url = window.location.origin;

//     if(base_url) {
//         $("body").addClass("landing")

//     }
// })

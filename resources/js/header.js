require('./bootstrap');

$(window).scroll(function() {
    var sticky = $('header'), scroll = $(window).scrollTop();
     
    if (scroll >= 40) { 
        sticky.addClass('fixed'); }
    else { 
        sticky.removeClass('fixed');
    }
});


 if (window.location.href.indexOf("recipes") > -1) {

    class StickyNavigation {
	
        constructor() {
            this.currentId = null;
            this.currentTab = null;
            this.tabContainerHeight = 100;
            let self = this;
            $('.meal-tab').click(function() { 
                self.onTabClick(event, $(this)); 
            });
            $(window).scroll(() => { this.onScroll(); });
            $(window).resize(() => { this.onResize(); });
        }
        
        onTabClick(event, element) {
            event.preventDefault();
            let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
            $('html, body').animate({ scrollTop: scrollTop }, 700);
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
            let offset = $('.meal-tabs').offset().top + $('.meal-tabs').height() - this.tabContainerHeight;
            // console.log($('.meal-tabs').offset().top)//0
            // console.log($('.meal-tabs').height())
            // console.log(this.tabContainerHeight)
            if($(window).scrollTop() > offset) {
                $('.meal-tabs-container').addClass('meal-tabs-container--top');
            } 
            else {
                $('.meal-tabs-container').removeClass('meal-tabs-container--top');
            }
        }
        
        findCurrentTabSelector(element) {
            let newCurrentId;
            let newCurrentTab;
            let self = this;
            $('.meal-tab').each(function() {
                let id = $(this).attr('href');
                let offsetTop = $(id).offset().top - self.tabContainerHeight;
                let offsetBottom = $(id).offset().top + $(id).height() - self.tabContainerHeight;
                if($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
                    newCurrentId = id;
                    newCurrentTab = $(this);
                }
            });
            if(this.currentId != newCurrentId || this.currentId === null) {
                this.currentId = newCurrentId;
                this.currentTab = newCurrentTab;
                this.setSliderCss();
            }
        }
        
        setSliderCss() {
            let width = 0;
            let left = 0;
            if(this.currentTab) {
                width = this.currentTab.css('width');
                left = this.currentTab.offset().left;
            }
            $('.meal-tab-slider').css('width', width);
            $('.meal-tab-slider').css('left', left);
        }
        
    }

    $(window).scroll(function() {
        var sticky = $('header'), scroll = $(window).scrollTop();

        sticky.removeClass('fixed');
        sticky.addClass('top');
    
    });
    
    new StickyNavigation();
    
}
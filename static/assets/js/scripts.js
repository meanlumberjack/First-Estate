/*
 * jQuery FlexSlider v1.6
 * http://flex.madebymufffin.com
 *
 * Copyright 2011, Tyler Smith
 * Free to use under the MIT license.
 *
 */
(function(a){a.flexslider=function(c,b){var d=c;d.init=function(){d.vars=a.extend({},a.flexslider.defaults,b);d.data("flexslider",true);d.container=a(".slides",d);d.slides=a(".slides > li",d);d.count=d.slides.length;d.animating=false;d.currentSlide=d.vars.slideToStart;d.eventType=("ontouchstart" in document.documentElement)?"touchstart":"click";if(d.vars.controlsContainer!=""){d.controlsContainer=a(d.vars.controlsContainer).eq(a(".slides").index(d.container));d.containerExists=d.controlsContainer.length>0}if(d.vars.manualControls!=""){if(d.containerExists){d.manualControls=a(d.vars.manualControls,d.controlsContainer)}else{d.manualControls=a(d.vars.manualControls,d)}d.manualExists=d.manualControls.length>0}if(d.vars.randomize&&d.count>1){d.slides.sort(function(){return(Math.round(Math.random())-0.5)});d.container.empty().append(d.slides)}if(d.vars.animation.toLowerCase()=="slide"&&d.count>1){d.css({overflow:"hidden"});d.container.append(d.slides.filter(":first").clone().addClass("clone")).prepend(d.slides.filter(":last").clone().addClass("clone"));d.container.width(((d.count+2)*d.width())+2000);d.newSlides=a(".slides > li",d);setTimeout(function(){d.newSlides.width(d.width()).css({"float":"left"}).show()},100);d.container.css({marginLeft:(-1*(d.currentSlide+1))*d.width()+"px"})}else{d.slides.hide().eq(d.currentSlide).fadeIn(400)}if(d.vars.controlNav&&d.count>1){if(d.manualExists){d.controlNav=d.manualControls}else{var e=a('<ol class="flex-control-nav"></ol>');var f=1;for(var g=0;g<d.count;g++){e.append("<li><a>"+f+"</a></li>");f++}if(d.containerExists){a(d.controlsContainer).append(e);d.controlNav=a(".flex-control-nav li a",d.controlsContainer)}else{d.append(e);d.controlNav=a(".flex-control-nav li a",d)}}d.controlNav.eq(d.currentSlide).addClass("active");d.controlNav.bind(d.eventType,function(i){i.preventDefault();if(!(a(this).hasClass("active")||d.animating)){d.controlNav.removeClass("active");a(this).addClass("active");var h=d.controlNav.index(a(this));d.flexAnimate(h);if(d.vars.pauseOnAction){clearInterval(d.animatedSlides)}}})}if(d.vars.directionNav&&d.count>1){if(d.containerExists){a(d.controlsContainer).append(a('<ul class="flex-direction-nav"><li><a class="prev" href="#">'+d.vars.prevText+'</a></li><li><a class="next" href="#">'+d.vars.nextText+"</a></li></ul>"));d.directionNav=a(".flex-direction-nav li a",d.controlsContainer)}else{d.append(a('<ul class="flex-direction-nav"><li><a class="prev" href="#">'+d.vars.prevText+'</a></li><li><a class="next" href="#">'+d.vars.nextText+"</a></li></ul>"));d.directionNav=a(".flex-direction-nav li a",d)}d.directionNav.bind(d.eventType,function(h){h.preventDefault();if(d.animating){return}else{if(a(this).hasClass("next")){var i=(d.currentSlide==d.count-1)?0:d.currentSlide+1}else{var i=(d.currentSlide==0)?d.count-1:d.currentSlide-1}if(d.vars.controlNav){d.controlNav.removeClass("active");d.controlNav.eq(i).addClass("active")}d.flexAnimate(i);if(d.vars.pauseOnAction){clearInterval(d.animatedSlides)}}})}if(d.vars.keyboardNav&&d.count>1&&a("ul.slides").length==1){a(document).keyup(function(h){if(d.animating){return}else{if(h.keyCode!=39&&h.keyCode!=37){return}else{if(h.keyCode==39){var i=(d.currentSlide==d.count-1)?0:d.currentSlide+1}else{if(h.keyCode==37){var i=(d.currentSlide==0)?d.count-1:d.currentSlide-1}}if(d.vars.controlNav){d.controlNav.removeClass("active");d.controlNav.eq(i).addClass("active")}d.flexAnimate(i);if(d.vars.pauseOnAction){clearInterval(d.animatedSlides)}}}})}if(d.vars.slideshow){d.animatedSlides;if(d.vars.pauseOnHover&&d.vars.slideshow){d.hover(function(){clearInterval(d.animatedSlides)},function(){d.animatedSlides=setInterval(d.animateSlides,d.vars.slideshowSpeed)})}if(d.count>1){d.animatedSlides=setInterval(d.animateSlides,d.vars.slideshowSpeed)}}if(d.vars.touchSwipe&&"ontouchstart" in document.documentElement&&d.count>1){d.each(function(){var h,i=20;isMoving=false;function l(){this.removeEventListener("touchmove",j);h=null;isMoving=false}function j(p){if(isMoving){var m=p.touches[0].pageX,n=h-m;if(Math.abs(n)>=i){l();if(n>0){var o=(d.currentSlide==d.count-1)?0:d.currentSlide+1}else{var o=(d.currentSlide==0)?d.count-1:d.currentSlide-1}if(d.vars.controlNav){d.controlNav.removeClass("active");d.controlNav.eq(o).addClass("active")}d.flexAnimate(o);if(d.vars.pauseOnAction){clearInterval(d.animatedSlides)}}}}function k(m){if(m.touches.length==1){h=m.touches[0].pageX;isMoving=true;this.addEventListener("touchmove",j,false)}}if("ontouchstart" in document.documentElement){this.addEventListener("touchstart",k,false)}})}if(d.vars.animation.toLowerCase()=="slide"&&d.count>1){d.sliderTimer;a(window).resize(function(){d.newSlides.width(d.width());d.container.width(((d.count+2)*d.width())+2000);clearTimeout(d.sliderTimer);d.sliderTimer=setTimeout(function(){d.flexAnimate(d.currentSlide)},300)})}};d.flexAnimate=function(e){if(!d.animating){d.animating=true;if(d.vars.animation.toLowerCase()=="slide"){if(d.currentSlide==0&&e==d.count-1){d.container.animate({marginLeft:"0px"},d.vars.animationDuration,function(){d.container.css({marginLeft:(-1*d.count)*d.slides.filter(":first").width()+"px"});d.animating=false;d.currentSlide=e})}else{if(d.currentSlide==d.count-1&&e==0){d.container.animate({marginLeft:(-1*(d.count+1))*d.slides.filter(":first").width()+"px"},d.vars.animationDuration,function(){d.container.css({marginLeft:-1*d.slides.filter(":first").width()+"px"});d.animating=false;d.currentSlide=e})}else{d.container.animate({marginLeft:(-1*(e+1))*d.slides.filter(":first").width()+"px"},d.vars.animationDuration,function(){d.animating=false;d.currentSlide=e})}}}else{d.css({minHeight:d.slides.eq(d.currentSlide).height()});d.slides.eq(d.currentSlide).fadeOut(d.vars.animationDuration,function(){d.slides.eq(e).fadeIn(d.vars.animationDuration,function(){d.animating=false;d.currentSlide=e});d.css({minHeight:"inherit"})})}}};d.animateSlides=function(){if(d.animating){return}else{var e=(d.currentSlide==d.count-1)?0:d.currentSlide+1;if(d.vars.controlNav){d.controlNav.removeClass("active");d.controlNav.eq(e).addClass("active")}d.flexAnimate(e)}};d.init()};a.flexslider.defaults={animation:"fade",slideshow:true,slideshowSpeed:7000,animationDuration:500,directionNav:true,controlNav:true,keyboardNav:true,touchSwipe:true,prevText:"Previous",nextText:"Next",randomize:false,slideToStart:0,pauseOnAction:true,pauseOnHover:false,controlsContainer:"",manualControls:""};a.fn.flexslider=function(b){return this.each(function(){if(a(this).data("flexslider")!=true){new a.flexslider(a(this),b)}})}})(jQuery);

<!-- Hook up the FlexSlider -->
$(window).load(function() {
  $('.flexslider').flexslider({
        //animation: "fade",                //Select your animation type (fade/slide/show)
        //slideshow: false,                 //Should the slider animate automatically by default? (true/false)
        slideshowSpeed: 7000,               //Set the speed of the slideshow cycling, in milliseconds
        //animationDuration: 500,           //Set the speed of animations, in milliseconds
        directionNav: false,                 //Create navigation for previous/next navigation? (true/false)
        controlNav: true,                   //Create navigation for paging control of each slide? (true/false)
        keyboardNav: true,                  //Allow for keyboard navigation using left/right keys (true/false)
        touchSwipe: true,                   //Touch swipe gestures for left/right slide navigation (true/false)
        prevText: "Previous",               //Set the text for the "previous" directionNav item
        nextText: "Next",                   //Set the text for the "next" directionNav item
        //randomize: false,                 //Randomize slide order on page load? (true/false)
        //slideToStart: 0,                  //The slide that the slider should start on. Array notation (0 = first slide)
        pauseOnAction: true,                //Pause the slideshow when interacting with control elements, highly recommended. (true/false)
        pauseOnHover: true,                 //Pause the slideshow when hovering over slider, then resume when no longer hovering (true/false)
        //controlsContainer: "",            //Advanced property: Can declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.
        //manualControls: ""                //Advanced property: Can declare custom control navigation. Example would be ".flex-control-nav li a" or "#tabs-nav li", etc. The number of elements in your controlNav should match the number of slides/tabs (obviously).
  });
});

/* END FlexSlider */
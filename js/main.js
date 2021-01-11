/*!
 * main
 * 
 * @package   themebetter-ent
 * @author    haozi
 * @link      https://themebetter.com
 * @copyright themebetter(Trademark)
 * 
 */


// A simple JS library that detects mobile devices. https://github.com/kaimallea/isMobile
!function(a){var b=/iPhone/i,c=/iPod/i,d=/iPad/i,e=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,f=/Android/i,g=/(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,h=/(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,i=/IEMobile/i,j=/(?=.*\bWindows\b)(?=.*\bARM\b)/i,k=/BlackBerry/i,l=/BB10/i,m=/Opera Mini/i,n=/(CriOS|Chrome)(?=.*\bMobile\b)/i,o=/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,p=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),q=function(a,b){return a.test(b)},r=function(a){var r=a||navigator.userAgent,s=r.split("[FBAN");return"undefined"!=typeof s[1]&&(r=s[0]),this.apple={phone:q(b,r),ipod:q(c,r),tablet:!q(b,r)&&q(d,r),device:q(b,r)||q(c,r)||q(d,r)},this.amazon={phone:q(g,r),tablet:!q(g,r)&&q(h,r),device:q(g,r)||q(h,r)},this.android={phone:q(g,r)||q(e,r),tablet:!q(g,r)&&!q(e,r)&&(q(h,r)||q(f,r)),device:q(g,r)||q(h,r)||q(e,r)||q(f,r)},this.windows={phone:q(i,r),tablet:q(j,r),device:q(i,r)||q(j,r)},this.other={blackberry:q(k,r),blackberry10:q(l,r),opera:q(m,r),firefox:q(o,r),chrome:q(n,r),device:q(k,r)||q(l,r)||q(m,r)||q(o,r)||q(n,r)},this.seven_inch=q(p,r),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet,"undefined"==typeof window?this:void 0},s=function(){var a=new r;return a.Class=r,a};"undefined"!=typeof module&&module.exports&&"undefined"==typeof window?module.exports=r:"undefined"!=typeof module&&module.exports&&"undefined"!=typeof window?module.exports=s():"function"==typeof define&&define.amd?define("isMobile",[],a.isMobile=s()):a.isMobile=s()}(this);



/*!
 * glidejs
 * Version: 2.0.9
 * Glide is a responsive and touch-friendly jQuery slider. Based on CSS3 transitions with fallback to older broswers. It's simple, lightweight and fast.
 * Author: Jędrzej Chałubek <jedrzej.chalubek@gmail.com>
 * Site: http://http://glide.jedrzejchalubek.com/
 * Licensed under the MIT license
 */

!function(a,b,c,d){var e=function(a,b){function c(){}var d;return c.prototype.make=function(c){return b.Run.canProcess()?(d="undefined"!=typeof c?parseInt(c):0,this[a.options.type](),this):b.Arrows.disable()},c.prototype.after=function(b){return setTimeout(function(){b()},a.options.animationDuration+20)},c.prototype.slider=function(){var c=a[a.size]*(a.current-1),e=b.Clones.shift-a.paddings;b.Run.isStart()?(e=a.options.centered?Math.abs(e):0,b.Arrows.disable("prev")):b.Run.isEnd()?(e=a.options.centered?Math.abs(e):Math.abs(2*e),b.Arrows.disable("next")):(e=Math.abs(e),b.Arrows.enable()),a.track.css({transition:b.Transition.get("all"),transform:b.Translate.set(a.axis,c-e-d)})},c.prototype.carousel=function(){var c,e=a[a.size]*a.current;c=a.options.centered?b.Clones.shift-a.paddings:b.Clones.shift,b.Run.isOffset("<")&&(e=0,b.Run.flag=!1,this.after(function(){a.track.css({transition:b.Transition.clear("all"),transform:b.Translate.set(a.axis,a[a.size]*a.length+c)})})),b.Run.isOffset(">")&&(e=a[a.size]*a.length+a[a.size],b.Run.flag=!1,this.after(function(){a.track.css({transition:b.Transition.clear("all"),transform:b.Translate.set(a.axis,a[a.size]+c)})})),a.track.css({transition:b.Transition.get("all"),transform:b.Translate.set(a.axis,e+c-d)})},c.prototype.slideshow=function(){a.slides.css("transition",b.Transition.get("opacity")).eq(a.current-1).css("opacity",1).siblings().css("opacity",0)},new c},f=function(a,b){function c(){}return c.prototype.instance=function(){return{current:function(){return a.current},go:function(a,c){b.Run.pause(),b.Run.make(a,c),b.Run.play()},jump:function(a,c){b.Transition.jumping=!0,b.Animation.after(function(){b.Transition.jumping=!1}),b.Run.make(a,c)},move:function(a){b.Transition.jumping=!0,b.Animation.make(a),b.Transition.jumping=!1},start:function(c){b.Run.running=!0,a.options.autoplay=parseInt(c),b.Run.play()},play:function(){return b.Run.play()},pause:function(){return b.Run.pause()},destroy:function(){b.Run.pause(),b.Clones.remove(),b.Helper.removeStyles([a.track,a.slides]),b.Bullets.remove(),a.slider.removeData("glide_api"),b.Events.unbind(),b.Touch.unbind(),b.Arrows.unbind(),b.Bullets.unbind(),a.destroyed=!0,delete a.slider,delete a.track,delete a.slides,delete a.width,delete a.length},refresh:function(){b.Run.pause(),a.collect(),a.setup(),b.Clones.remove().init(),b.Bullets.remove().init(),b.Build.init(),b.Run.make("="+parseInt(a.options.startAt),b.Run.play())}}},new c},g=function(b,c){function d(){this.build(),this.bind()}return d.prototype.build=function(){this.wrapper=b.slider.find("."+b.options.classes.arrows),this.items=this.wrapper.children()},d.prototype.disable=function(a){var d=b.options.classes;return a?void this.items.filter("."+d["arrow"+c.Helper.capitalise(a)]).unbind("click.glide touchstart.glide").addClass(d.disabled).siblings().bind("click.glide touchstart.glide",this.click).bind("mouseenter.glide",this.hover).bind("mouseleave.glide",this.hover).removeClass(d.disabled):this.disableBoth()},d.prototype.disableBoth=function(){this.items.unbind("click.glide touchstart.glide").addClass(b.options.classes.disabled)},d.prototype.enable=function(){this.bind(),this.items.removeClass(b.options.classes.disabled)},d.prototype.click=function(b){b.preventDefault(),c.Events.disabled||(c.Run.pause(),c.Run.make(a(this).data("glide-dir")),c.Animation.after(function(){c.Run.play()}))},d.prototype.hover=function(a){if(!c.Events.disabled)switch(a.type){case"mouseleave":c.Run.play();break;case"mouseenter":c.Run.pause()}},d.prototype.bind=function(){this.items.on("click.glide touchstart.glide",this.click).on("mouseenter.glide",this.hover).on("mouseleave.glide",this.hover)},d.prototype.unbind=function(){this.items.off("click.glide touchstart.glide").off("mouseenter.glide").off("mouseleave.glide")},new d},h=function(a,b){function c(){this.init()}return c.prototype.init=function(){this[a.options.type](),this.active(),b.Height.set()},c.prototype.isType=function(b){return a.options.type===b},c.prototype.isMode=function(b){return a.options.mode===b},c.prototype.slider=function(){b.Transition.jumping=!0,a.slides[a.size](a[a.size]),a.track.css(a.size,a[a.size]*a.length),this.isMode("vertical")&&b.Height.set(!0),b.Animation.make(),b.Transition.jumping=!1},c.prototype.carousel=function(){b.Transition.jumping=!0,b.Clones.shift=a[a.size]*b.Clones.items.length/2-a[a.size],a.slides[a.size](a[a.size]),a.track.css(a.size,a[a.size]*a.length+b.Clones.getGrowth()),this.isMode("vertical")&&b.Height.set(!0),b.Animation.make(),b.Clones.append(),b.Transition.jumping=!1},c.prototype.slideshow=function(){b.Transition.jumping=!0,b.Animation.make(),b.Transition.jumping=!1},c.prototype.active=function(){a.slides.eq(a.current-1).addClass(a.options.classes.active).siblings().removeClass(a.options.classes.active)},new c},i=function(b,c){function d(){this.init(),this.bind()}return d.prototype.init=function(){return this.build(),this.active(),this},d.prototype.build=function(){this.wrapper=b.slider.children("."+b.options.classes.bullets);for(var c=1;c<=b.length;c++)a("<button>",{class:b.options.classes.bullet,"data-glide-dir":"="+c}).appendTo(this.wrapper);this.items=this.wrapper.children()},d.prototype.active=function(){this.items.eq(b.current-1).addClass("active").siblings().removeClass("active")},d.prototype.remove=function(){return this.items.remove(),this},d.prototype.click=function(b){b.preventDefault(),c.Events.disabled||(c.Run.pause(),c.Run.make(a(this).data("glide-dir")),c.Animation.after(function(){c.Run.play()}))},d.prototype.hover=function(a){if(!c.Events.disabled)switch(a.type){case"mouseleave":c.Run.play();break;case"mouseenter":c.Run.pause()}},d.prototype.bind=function(){this.wrapper.on("click.glide touchstart.glide","button",this.click).on("mouseenter.glide","button",this.hover).on("mouseleave.glide","button",this.hover)},d.prototype.unbind=function(){this.wrapper.off("click.glide touchstart.glide","button").off("mouseenter.glide","button").off("mouseleave.glide","button")},new d},j=function(a,b){function c(){this.items=[],this.shift=0,this.init()}var d,e=[0,1];return c.prototype.init=function(){return this.map(),this.collect(),this},c.prototype.map=function(){var a;for(d=[],a=0;a<e.length;a++)d.push(-1-a,a)},c.prototype.collect=function(){var b,c;for(c=0;c<d.length;c++)b=a.slides.eq(d[c]).clone().addClass(a.options.classes.clone),this.items.push(b)},c.prototype.append=function(){var b,c;for(b=0;b<this.items.length;b++)c=this.items[b][a.size](a[a.size]),d[b]>=0?c.appendTo(a.track):c.prependTo(a.track)},c.prototype.remove=function(){var a;for(a=0;a<this.items.length;a++)this.items[a].remove();return this},c.prototype.getGrowth=function(){return a.width*this.items.length},new c},k=function(a,b){function c(){for(var c in b)this[c]=new b[c](a,this)}return new c},l=function(c,d){function e(){this.disabled=!1,this.prevented=!1,this.keyboard(),this.hoverpause(),this.resize(),this.bindTriggers(),this.bindAnchors(),this.bindImages()}var f=a("[data-glide-trigger]");return e.prototype.keyboard=function(){c.options.keyboard&&a(b).on("keyup.glide",function(a){39===a.keyCode&&d.Run.make(">"),37===a.keyCode&&d.Run.make("<")})},e.prototype.hoverpause=function(){c.options.hoverpause&&c.track.on("mouseover.glide",function(){d.Run.pause(),d.Events.trigger("mouseOver")}).on("mouseout.glide",function(){d.Run.play(),d.Events.trigger("mouseOut")})},e.prototype.resize=function(){a(b).on("resize.glide."+c.uuid,d.Helper.throttle(function(){c.destroyed||(d.Transition.jumping=!0,c.setup(),d.Build.init(),d.Run.make("="+c.current,!1),d.Run.play(),d.Transition.jumping=!1)},c.options.throttle))},e.prototype.bindTriggers=function(){f.length&&f.off("click.glide touchstart.glide").on("click.glide touchstart.glide",this.handleTrigger)},e.prototype.handleTrigger=function(b){b.preventDefault();var c=a(this).data("glide-trigger").split(" ");if(!this.disabled)for(var d in c){var e=a(c[d]).data("glide_api");e.pause(),e.go(a(this).data("glide-dir"),this.activeTrigger),e.play()}},e.prototype.bindAnchors=function(){c.track.on("click.glide","a",function(a){this.prevented&&a.preventDefault()}.bind(this))},e.prototype.bindImages=function(){c.track.on("dragstart.glide","img",function(a){this.prevented&&a.preventDefault()}.bind(this))},e.prototype.detachClicks=function(b){return c.track.find("a").each(function(b,c){a(c).attr("data-href",a(c).attr("href")).removeAttr("href")}),this},e.prototype.attachClicks=function(b){return c.track.find("a").each(function(b,c){a(c).attr("href",a(c).attr("data-href")).removeAttr("data-href")}),d.Animation.after(function(){this.prevented=!1}.bind(this)),this},e.prototype.preventClicks=function(){return this.prevented=!0,this},e.prototype.call=function(a){return"undefined"!==a&&"function"==typeof a&&a(this.getParams()),this},e.prototype.trigger=function(a){return c.slider.trigger(a+".glide",[this.getParams()]),this},e.prototype.getParams=function(){return{index:c.current,length:c.slides.length,current:c.slides.eq(c.current-1),slider:c.slider,swipe:{distance:d.Touch.distance||0}}},e.prototype.unbind=function(){c.track.off("click.glide","a").off("dragstart.glide","img").off("keyup.glide").off("mouseover.glide").off("mouseout.glide"),f.off("click.glide touchstart.glide"),a(b).off("keyup.glide").off("resize.glide."+c.uuid)},e.prototype.disable=function(){return this.disabled=!0,this},e.prototype.enable=function(){return this.disabled=!1,this},new e},m=function(a,b){function c(){a.options.autoheight&&a.wrapper.css({transition:b.Transition.get("height")})}return c.prototype.get=function(){var b="y"===a.axis?2*a.paddings:0;return a.slides.eq(a.current-1).height()+b},c.prototype.set=function(b){return!(!a.options.autoheight&&!b)&&a.wrapper.height(this.get())},new c},n=function(a,b){function c(){}return c.prototype.byAxis=function(b,c){return"y"===a.axis?c:b},c.prototype.capitalise=function(a){return a.charAt(0).toUpperCase()+a.slice(1)},c.prototype.now=Date.now||function(){return(new Date).getTime()},c.prototype.throttle=function(a,b,c){var d,e,f,g=this,h=null,i=0;c||(c={});var j=function(){i=c.leading===!1?0:g.now(),h=null,f=a.apply(d,e),h||(d=e=null)};return function(){var k=g.now();i||c.leading!==!1||(i=k);var l=b-(k-i);return d=this,e=arguments,l<=0||l>b?(h&&(clearTimeout(h),h=null),i=k,f=a.apply(d,e),h||(d=e=null)):h||c.trailing===!1||(h=setTimeout(j,l)),f}},c.prototype.removeStyles=function(a){for(var b=0;b<a.length;b++)a[b].removeAttr("style")},new c},o=function(a,b){function c(){this.running=!1,this.flag=!1,this.play()}return c.prototype.play=function(){var b=this;if(this.canProcess())return(a.options.autoplay||this.running)&&"undefined"==typeof this.interval&&(this.interval=setInterval(function(){b.pause(),b.make(">"),b.play()},this.getInterval())),this.interval},c.prototype.getInterval=function(){return parseInt(a.slides.eq(a.current-1).data("glide-autoplay"))||a.options.autoplay},c.prototype.pause=function(){return(a.options.autoplay||this.running)&&this.interval>=0&&(this.interval=clearInterval(this.interval)),this.interval},c.prototype.isStart=function(){return 1===a.current},c.prototype.isEnd=function(){return a.current===a.length},c.prototype.isOffset=function(a){return this.flag&&this.direction===a},c.prototype.make=function(c,d){var e=this;if(this.direction=c.substr(0,1),this.steps=c.substr(1)?c.substr(1):0,!this.canProcess())return this.stop();switch(a.options.hoverpause||this.pause(),d!==!1&&b.Events.disable().call(a.options.beforeTransition).trigger("beforeTransition"),this.direction){case">":this.isEnd()?(a.current=1,this.flag=!0):">"===this.steps?a.current=a.length:a.current=a.current+1;break;case"<":this.isStart()?(a.current=a.length,this.flag=!0):"<"===this.steps?a.current=1:a.current=a.current-1;break;case"=":a.current=parseInt(this.steps)}b.Height.set(),b.Bullets.active(),b.Animation.make().after(function(){b.Build.active(),d!==!1&&b.Events.enable().call(d).call(a.options.afterTransition).trigger("afterTransition"),a.options.hoverpause||e.play()}),b.Events.call(a.options.duringTransition).trigger("duringTransition")},c.prototype.stop=function(){this.pause()},c.prototype.canProcess=function(){return a.slides.length>1},new c},p=function(b,c){function d(){this.dragging=!1,b.options.touchDistance&&b.track.on({"touchstart.glide":a.proxy(this.start,this)}),b.options.dragDistance&&b.track.on({"mousedown.glide":a.proxy(this.start,this)})}var e;return d.prototype.unbind=function(){b.track.off("touchstart.glide mousedown.glide").off("touchmove.glide mousemove.glide").off("touchend.glide touchcancel.glide mouseup.glide mouseleave.glide")},d.prototype.start=function(d){c.Events.disabled||this.dragging||(e="mousedown"===d.type?d.originalEvent:d.originalEvent.touches[0]||d.originalEvent.changedTouches[0],c.Transition.jumping=!0,this.touchStartX=parseInt(e.pageX),this.touchStartY=parseInt(e.pageY),this.touchSin=null,this.dragging=!0,b.track.on({"touchmove.glide mousemove.glide":c.Helper.throttle(a.proxy(this.move,this),b.options.throttle),"touchend.glide touchcancel.glide mouseup.glide mouseleave.glide":a.proxy(this.end,this)}),c.Events.detachClicks().call(b.options.swipeStart).trigger("swipeStart"),c.Run.pause())},d.prototype.move=function(a){if(!c.Events.disabled&&this.dragging){e="mousemove"===a.type?a.originalEvent:a.originalEvent.touches[0]||a.originalEvent.changedTouches[0];var d=parseInt(e.pageX)-this.touchStartX,f=parseInt(e.pageY)-this.touchStartY,g=Math.abs(d<<2),h=Math.abs(f<<2),i=Math.sqrt(g+h),j=Math.sqrt(c.Helper.byAxis(h,g));if(this.touchSin=Math.asin(j/i),this.distance=c.Helper.byAxis(e.pageX-this.touchStartX,e.pageY-this.touchStartY),180*this.touchSin/Math.PI<45&&c.Animation.make(c.Helper.byAxis(d,f)),c.Events.preventClicks().call(b.options.swipeMove).trigger("swipeMove"),c.Build.isMode("vertical")){if(c.Run.isStart()&&f>0)return;if(c.Run.isEnd()&&f<0)return}if(!(180*this.touchSin/Math.PI<45))return;a.stopPropagation(),a.preventDefault(),b.track.addClass(b.options.classes.dragging)}},d.prototype.end=function(a){if(!c.Events.disabled&&this.dragging){var d;e="mouseup"===a.type||"mouseleave"===a.type?a.originalEvent:a.originalEvent.touches[0]||a.originalEvent.changedTouches[0];var f=c.Helper.byAxis(e.pageX-this.touchStartX,e.pageY-this.touchStartY),g=180*this.touchSin/Math.PI;c.Transition.jumping=!1,c.Build.isType("slider")&&(c.Run.isStart()&&f>0&&(f=0),c.Run.isEnd()&&f<0&&(f=0)),d="mouseup"===a.type||"mouseleave"===a.type?b.options.dragDistance:b.options.touchDistance,f>d&&g<45?c.Run.make("<"):f<-d&&g<45?c.Run.make(">"):c.Animation.make(),c.Animation.after(function(){c.Events.enable(),c.Run.play()}),this.dragging=!1,c.Events.attachClicks().disable().call(b.options.swipeEnd).trigger("swipeEnd"),b.track.removeClass(b.options.classes.dragging).off("touchmove.glide mousemove.glide").off("touchend.glide touchcancel.glide mouseup.glide mouseleave.glide")}},new d},q=function(a,b){function c(){this.jumping=!1}return c.prototype.get=function(b){return this.jumping?this.clear("all"):b+" "+a.options.animationDuration+"ms "+a.options.animationTimingFunc},c.prototype.clear=function(b){return b+" 0ms "+a.options.animationTimingFunc},new c},r=function(a,b){function c(){}var d={x:0,y:0,z:0};return c.prototype.set=function(a,b){return d[a]=parseInt(b),"translate3d("+-1*d.x+"px, "+-1*d.y+"px, "+-1*d.z+"px)"},new c},s=function(b,c){var d={autoplay:4e3,type:"carousel",mode:"horizontal",startAt:1,hoverpause:!0,keyboard:!0,touchDistance:80,dragDistance:120,animationDuration:400,animationTimingFunc:"cubic-bezier(0.165, 0.840, 0.440, 1.000)",throttle:16,autoheight:!1,paddings:0,centered:!0,classes:{base:"glide",wrapper:"glide__wrapper",track:"glide__track",slide:"glide__slide",arrows:"glide__arrows",arrow:"glide__arrow",arrowNext:"next",arrowPrev:"prev",bullets:"glide__bullets",bullet:"glide__bullet",clone:"clone",active:"active",dragging:"dragging",disabled:"disabled"},beforeInit:function(a){},afterInit:function(a){},beforeTransition:function(a){},duringTransition:function(a){},afterTransition:function(a){},swipeStart:function(a){},swipeEnd:function(a){},swipeMove:function(a){}};this.options=a.extend({},d,c),this.uuid=Math.floor(1e3*Math.random()),this.current=parseInt(this.options.startAt),this.element=b,this.collect(),this.setup(),this.destroyed=!1,this.options.beforeInit({index:this.current,length:this.slides.length,current:this.slides.eq(this.current-1),slider:this.slider});var s=new k(this,{Helper:n,Translate:r,Transition:q,Arrows:g,Bullets:i,Run:o,Animation:e,Clones:j,Height:m,Build:h,Events:l,Touch:p,Api:f});return s.Events.call(this.options.afterInit),s.Api.instance()};s.prototype.collect=function(){var a=this.options,b=a.classes;this.slider=this.element.addClass(b.base+"--"+a.type).addClass(b.base+"--"+a.mode),this.track=this.slider.find("."+b.track),this.wrapper=this.slider.find("."+b.wrapper),this.slides=this.track.find("."+b.slide).not("."+b.clone)},s.prototype.setup=function(){var a={horizontal:["width","x"],vertical:["height","y"]};this.size=a[this.options.mode][0],this.axis=a[this.options.mode][1],this.length=this.slides.length,this.paddings=this.getPaddings(),this[this.size]=this.getSize()},s.prototype.getPaddings=function(){var a=this.options.paddings;if("string"==typeof a){var b=parseInt(a,10),c=a.indexOf("%")>=0;return c?parseInt(this.slider[this.size]()*(b/100)):b}return a},s.prototype.getSize=function(){return this.slider[this.size]()-2*this.paddings},a.fn.glide=function(b){return this.each(function(){a.data(this,"glide_api")||a.data(this,"glide_api",new s(a(this),b))})}}(jQuery,window,document);




/*!
 * jQuery resizeend - A jQuery plugin that allows for window resize-end event handling.
 * 
 * Copyright (c) 2015 Erik Nielsen
 * 
 * Licensed under the MIT license:
 *    http://www.opensource.org/licenses/mit-license.php
 * 
 * Project home:
 *    http://312development.com
 * 
 * Version:  0.2.0
 * 
 */
!function(a){var b=window.Chicago||{utils:{now:Date.now||function(){return(new Date).getTime()},uid:function(a){return(a||"id")+b.utils.now()+"RAND"+Math.ceil(1e5*Math.random())},is:{number:function(a){return!isNaN(parseFloat(a))&&isFinite(a)},fn:function(a){return"function"==typeof a},object:function(a){return"[object Object]"===Object.prototype.toString.call(a)}},debounce:function(a,b,c){var d;return function(){var e=this,f=arguments,g=function(){d=null,c||a.apply(e,f)},h=c&&!d;d&&clearTimeout(d),d=setTimeout(g,b),h&&a.apply(e,f)}}},$:window.jQuery||null};if("function"==typeof define&&define.amd&&define("chicago",function(){return b.load=function(a,c,d,e){var f=a.split(","),g=[],h=(e.config&&e.config.chicago&&e.config.chicago.base?e.config.chicago.base:"").replace(/\/+$/g,"");if(!h)throw new Error("Please define base path to jQuery resize.end in the requirejs config.");for(var i=0;i<f.length;){var j=f[i].replace(/\./g,"/");g.push(h+"/"+j),i+=1}c(g,function(){d(b)})},b}),window&&window.jQuery)return a(b,window,window.document);if(!window.jQuery)throw new Error("jQuery resize.end requires jQuery")}(function(a,b,c){a.$win=a.$(b),a.$doc=a.$(c),a.events||(a.events={}),a.events.resizeend={defaults:{delay:250},setup:function(){var b,c=arguments,d={delay:a.$.event.special.resizeend.defaults.delay};a.utils.is.fn(c[0])?b=c[0]:a.utils.is.number(c[0])?d.delay=c[0]:a.utils.is.object(c[0])&&(d=a.$.extend({},d,c[0]));var e=a.utils.uid("resizeend"),f=a.$.extend({delay:a.$.event.special.resizeend.defaults.delay},d),g=f,h=function(b){g&&clearTimeout(g),g=setTimeout(function(){return g=null,b.type="resizeend.chicago.dom",a.$(b.target).trigger("resizeend",b)},f.delay)};return a.$(this).data("chicago.event.resizeend.uid",e),a.$(this).on("resize",a.utils.debounce(h,100)).data(e,h)},teardown:function(){var b=a.$(this).data("chicago.event.resizeend.uid");return a.$(this).off("resize",a.$(this).data(b)),a.$(this).removeData(b),a.$(this).removeData("chicago.event.resizeend.uid")}},function(){a.$.event.special.resizeend=a.events.resizeend,a.$.fn.resizeend=function(b,c){return this.each(function(){a.$(this).on("resizeend",b,c)})}}()});





(function(r){r.fn.qrcode=function(h){var s;function u(a){this.mode=s;this.data=a}function o(a,c){this.typeNumber=a;this.errorCorrectLevel=c;this.modules=null;this.moduleCount=0;this.dataCache=null;this.dataList=[]}function q(a,c){if(void 0==a.length)throw Error(a.length+"/"+c);for(var d=0;d<a.length&&0==a[d];)d++;this.num=Array(a.length-d+c);for(var b=0;b<a.length-d;b++)this.num[b]=a[b+d]}function p(a,c){this.totalCount=a;this.dataCount=c}function t(){this.buffer=[];this.length=0}u.prototype={getLength:function(){return this.data.length},
write:function(a){for(var c=0;c<this.data.length;c++)a.put(this.data.charCodeAt(c),8)}};o.prototype={addData:function(a){this.dataList.push(new u(a));this.dataCache=null},isDark:function(a,c){if(0>a||this.moduleCount<=a||0>c||this.moduleCount<=c)throw Error(a+","+c);return this.modules[a][c]},getModuleCount:function(){return this.moduleCount},make:function(){if(1>this.typeNumber){for(var a=1,a=1;40>a;a++){for(var c=p.getRSBlocks(a,this.errorCorrectLevel),d=new t,b=0,e=0;e<c.length;e++)b+=c[e].dataCount;
for(e=0;e<this.dataList.length;e++)c=this.dataList[e],d.put(c.mode,4),d.put(c.getLength(),j.getLengthInBits(c.mode,a)),c.write(d);if(d.getLengthInBits()<=8*b)break}this.typeNumber=a}this.makeImpl(!1,this.getBestMaskPattern())},makeImpl:function(a,c){this.moduleCount=4*this.typeNumber+17;this.modules=Array(this.moduleCount);for(var d=0;d<this.moduleCount;d++){this.modules[d]=Array(this.moduleCount);for(var b=0;b<this.moduleCount;b++)this.modules[d][b]=null}this.setupPositionProbePattern(0,0);this.setupPositionProbePattern(this.moduleCount-
7,0);this.setupPositionProbePattern(0,this.moduleCount-7);this.setupPositionAdjustPattern();this.setupTimingPattern();this.setupTypeInfo(a,c);7<=this.typeNumber&&this.setupTypeNumber(a);null==this.dataCache&&(this.dataCache=o.createData(this.typeNumber,this.errorCorrectLevel,this.dataList));this.mapData(this.dataCache,c)},setupPositionProbePattern:function(a,c){for(var d=-1;7>=d;d++)if(!(-1>=a+d||this.moduleCount<=a+d))for(var b=-1;7>=b;b++)-1>=c+b||this.moduleCount<=c+b||(this.modules[a+d][c+b]=
0<=d&&6>=d&&(0==b||6==b)||0<=b&&6>=b&&(0==d||6==d)||2<=d&&4>=d&&2<=b&&4>=b?!0:!1)},getBestMaskPattern:function(){for(var a=0,c=0,d=0;8>d;d++){this.makeImpl(!0,d);var b=j.getLostPoint(this);if(0==d||a>b)a=b,c=d}return c},createMovieClip:function(a,c,d){a=a.createEmptyMovieClip(c,d);this.make();for(c=0;c<this.modules.length;c++)for(var d=1*c,b=0;b<this.modules[c].length;b++){var e=1*b;this.modules[c][b]&&(a.beginFill(0,100),a.moveTo(e,d),a.lineTo(e+1,d),a.lineTo(e+1,d+1),a.lineTo(e,d+1),a.endFill())}return a},
setupTimingPattern:function(){for(var a=8;a<this.moduleCount-8;a++)null==this.modules[a][6]&&(this.modules[a][6]=0==a%2);for(a=8;a<this.moduleCount-8;a++)null==this.modules[6][a]&&(this.modules[6][a]=0==a%2)},setupPositionAdjustPattern:function(){for(var a=j.getPatternPosition(this.typeNumber),c=0;c<a.length;c++)for(var d=0;d<a.length;d++){var b=a[c],e=a[d];if(null==this.modules[b][e])for(var f=-2;2>=f;f++)for(var i=-2;2>=i;i++)this.modules[b+f][e+i]=-2==f||2==f||-2==i||2==i||0==f&&0==i?!0:!1}},setupTypeNumber:function(a){for(var c=
j.getBCHTypeNumber(this.typeNumber),d=0;18>d;d++){var b=!a&&1==(c>>d&1);this.modules[Math.floor(d/3)][d%3+this.moduleCount-8-3]=b}for(d=0;18>d;d++)b=!a&&1==(c>>d&1),this.modules[d%3+this.moduleCount-8-3][Math.floor(d/3)]=b},setupTypeInfo:function(a,c){for(var d=j.getBCHTypeInfo(this.errorCorrectLevel<<3|c),b=0;15>b;b++){var e=!a&&1==(d>>b&1);6>b?this.modules[b][8]=e:8>b?this.modules[b+1][8]=e:this.modules[this.moduleCount-15+b][8]=e}for(b=0;15>b;b++)e=!a&&1==(d>>b&1),8>b?this.modules[8][this.moduleCount-
b-1]=e:9>b?this.modules[8][15-b-1+1]=e:this.modules[8][15-b-1]=e;this.modules[this.moduleCount-8][8]=!a},mapData:function(a,c){for(var d=-1,b=this.moduleCount-1,e=7,f=0,i=this.moduleCount-1;0<i;i-=2)for(6==i&&i--;;){for(var g=0;2>g;g++)if(null==this.modules[b][i-g]){var n=!1;f<a.length&&(n=1==(a[f]>>>e&1));j.getMask(c,b,i-g)&&(n=!n);this.modules[b][i-g]=n;e--; -1==e&&(f++,e=7)}b+=d;if(0>b||this.moduleCount<=b){b-=d;d=-d;break}}}};o.PAD0=236;o.PAD1=17;o.createData=function(a,c,d){for(var c=p.getRSBlocks(a,
c),b=new t,e=0;e<d.length;e++){var f=d[e];b.put(f.mode,4);b.put(f.getLength(),j.getLengthInBits(f.mode,a));f.write(b)}for(e=a=0;e<c.length;e++)a+=c[e].dataCount;if(b.getLengthInBits()>8*a)throw Error("code length overflow. ("+b.getLengthInBits()+">"+8*a+")");for(b.getLengthInBits()+4<=8*a&&b.put(0,4);0!=b.getLengthInBits()%8;)b.putBit(!1);for(;!(b.getLengthInBits()>=8*a);){b.put(o.PAD0,8);if(b.getLengthInBits()>=8*a)break;b.put(o.PAD1,8)}return o.createBytes(b,c)};o.createBytes=function(a,c){for(var d=
0,b=0,e=0,f=Array(c.length),i=Array(c.length),g=0;g<c.length;g++){var n=c[g].dataCount,h=c[g].totalCount-n,b=Math.max(b,n),e=Math.max(e,h);f[g]=Array(n);for(var k=0;k<f[g].length;k++)f[g][k]=255&a.buffer[k+d];d+=n;k=j.getErrorCorrectPolynomial(h);n=(new q(f[g],k.getLength()-1)).mod(k);i[g]=Array(k.getLength()-1);for(k=0;k<i[g].length;k++)h=k+n.getLength()-i[g].length,i[g][k]=0<=h?n.get(h):0}for(k=g=0;k<c.length;k++)g+=c[k].totalCount;d=Array(g);for(k=n=0;k<b;k++)for(g=0;g<c.length;g++)k<f[g].length&&
(d[n++]=f[g][k]);for(k=0;k<e;k++)for(g=0;g<c.length;g++)k<i[g].length&&(d[n++]=i[g][k]);return d};s=4;for(var j={PATTERN_POSITION_TABLE:[[],[6,18],[6,22],[6,26],[6,30],[6,34],[6,22,38],[6,24,42],[6,26,46],[6,28,50],[6,30,54],[6,32,58],[6,34,62],[6,26,46,66],[6,26,48,70],[6,26,50,74],[6,30,54,78],[6,30,56,82],[6,30,58,86],[6,34,62,90],[6,28,50,72,94],[6,26,50,74,98],[6,30,54,78,102],[6,28,54,80,106],[6,32,58,84,110],[6,30,58,86,114],[6,34,62,90,118],[6,26,50,74,98,122],[6,30,54,78,102,126],[6,26,52,
78,104,130],[6,30,56,82,108,134],[6,34,60,86,112,138],[6,30,58,86,114,142],[6,34,62,90,118,146],[6,30,54,78,102,126,150],[6,24,50,76,102,128,154],[6,28,54,80,106,132,158],[6,32,58,84,110,136,162],[6,26,54,82,110,138,166],[6,30,58,86,114,142,170]],G15:1335,G18:7973,G15_MASK:21522,getBCHTypeInfo:function(a){for(var c=a<<10;0<=j.getBCHDigit(c)-j.getBCHDigit(j.G15);)c^=j.G15<<j.getBCHDigit(c)-j.getBCHDigit(j.G15);return(a<<10|c)^j.G15_MASK},getBCHTypeNumber:function(a){for(var c=a<<12;0<=j.getBCHDigit(c)-
j.getBCHDigit(j.G18);)c^=j.G18<<j.getBCHDigit(c)-j.getBCHDigit(j.G18);return a<<12|c},getBCHDigit:function(a){for(var c=0;0!=a;)c++,a>>>=1;return c},getPatternPosition:function(a){return j.PATTERN_POSITION_TABLE[a-1]},getMask:function(a,c,d){switch(a){case 0:return 0==(c+d)%2;case 1:return 0==c%2;case 2:return 0==d%3;case 3:return 0==(c+d)%3;case 4:return 0==(Math.floor(c/2)+Math.floor(d/3))%2;case 5:return 0==c*d%2+c*d%3;case 6:return 0==(c*d%2+c*d%3)%2;case 7:return 0==(c*d%3+(c+d)%2)%2;default:throw Error("bad maskPattern:"+
a);}},getErrorCorrectPolynomial:function(a){for(var c=new q([1],0),d=0;d<a;d++)c=c.multiply(new q([1,l.gexp(d)],0));return c},getLengthInBits:function(a,c){if(1<=c&&10>c)switch(a){case 1:return 10;case 2:return 9;case s:return 8;case 8:return 8;default:throw Error("mode:"+a);}else if(27>c)switch(a){case 1:return 12;case 2:return 11;case s:return 16;case 8:return 10;default:throw Error("mode:"+a);}else if(41>c)switch(a){case 1:return 14;case 2:return 13;case s:return 16;case 8:return 12;default:throw Error("mode:"+
a);}else throw Error("type:"+c);},getLostPoint:function(a){for(var c=a.getModuleCount(),d=0,b=0;b<c;b++)for(var e=0;e<c;e++){for(var f=0,i=a.isDark(b,e),g=-1;1>=g;g++)if(!(0>b+g||c<=b+g))for(var h=-1;1>=h;h++)0>e+h||c<=e+h||0==g&&0==h||i==a.isDark(b+g,e+h)&&f++;5<f&&(d+=3+f-5)}for(b=0;b<c-1;b++)for(e=0;e<c-1;e++)if(f=0,a.isDark(b,e)&&f++,a.isDark(b+1,e)&&f++,a.isDark(b,e+1)&&f++,a.isDark(b+1,e+1)&&f++,0==f||4==f)d+=3;for(b=0;b<c;b++)for(e=0;e<c-6;e++)a.isDark(b,e)&&!a.isDark(b,e+1)&&a.isDark(b,e+
2)&&a.isDark(b,e+3)&&a.isDark(b,e+4)&&!a.isDark(b,e+5)&&a.isDark(b,e+6)&&(d+=40);for(e=0;e<c;e++)for(b=0;b<c-6;b++)a.isDark(b,e)&&!a.isDark(b+1,e)&&a.isDark(b+2,e)&&a.isDark(b+3,e)&&a.isDark(b+4,e)&&!a.isDark(b+5,e)&&a.isDark(b+6,e)&&(d+=40);for(e=f=0;e<c;e++)for(b=0;b<c;b++)a.isDark(b,e)&&f++;a=Math.abs(100*f/c/c-50)/5;return d+10*a}},l={glog:function(a){if(1>a)throw Error("glog("+a+")");return l.LOG_TABLE[a]},gexp:function(a){for(;0>a;)a+=255;for(;256<=a;)a-=255;return l.EXP_TABLE[a]},EXP_TABLE:Array(256),
LOG_TABLE:Array(256)},m=0;8>m;m++)l.EXP_TABLE[m]=1<<m;for(m=8;256>m;m++)l.EXP_TABLE[m]=l.EXP_TABLE[m-4]^l.EXP_TABLE[m-5]^l.EXP_TABLE[m-6]^l.EXP_TABLE[m-8];for(m=0;255>m;m++)l.LOG_TABLE[l.EXP_TABLE[m]]=m;q.prototype={get:function(a){return this.num[a]},getLength:function(){return this.num.length},multiply:function(a){for(var c=Array(this.getLength()+a.getLength()-1),d=0;d<this.getLength();d++)for(var b=0;b<a.getLength();b++)c[d+b]^=l.gexp(l.glog(this.get(d))+l.glog(a.get(b)));return new q(c,0)},mod:function(a){if(0>
this.getLength()-a.getLength())return this;for(var c=l.glog(this.get(0))-l.glog(a.get(0)),d=Array(this.getLength()),b=0;b<this.getLength();b++)d[b]=this.get(b);for(b=0;b<a.getLength();b++)d[b]^=l.gexp(l.glog(a.get(b))+c);return(new q(d,0)).mod(a)}};p.RS_BLOCK_TABLE=[[1,26,19],[1,26,16],[1,26,13],[1,26,9],[1,44,34],[1,44,28],[1,44,22],[1,44,16],[1,70,55],[1,70,44],[2,35,17],[2,35,13],[1,100,80],[2,50,32],[2,50,24],[4,25,9],[1,134,108],[2,67,43],[2,33,15,2,34,16],[2,33,11,2,34,12],[2,86,68],[4,43,27],
[4,43,19],[4,43,15],[2,98,78],[4,49,31],[2,32,14,4,33,15],[4,39,13,1,40,14],[2,121,97],[2,60,38,2,61,39],[4,40,18,2,41,19],[4,40,14,2,41,15],[2,146,116],[3,58,36,2,59,37],[4,36,16,4,37,17],[4,36,12,4,37,13],[2,86,68,2,87,69],[4,69,43,1,70,44],[6,43,19,2,44,20],[6,43,15,2,44,16],[4,101,81],[1,80,50,4,81,51],[4,50,22,4,51,23],[3,36,12,8,37,13],[2,116,92,2,117,93],[6,58,36,2,59,37],[4,46,20,6,47,21],[7,42,14,4,43,15],[4,133,107],[8,59,37,1,60,38],[8,44,20,4,45,21],[12,33,11,4,34,12],[3,145,115,1,146,
116],[4,64,40,5,65,41],[11,36,16,5,37,17],[11,36,12,5,37,13],[5,109,87,1,110,88],[5,65,41,5,66,42],[5,54,24,7,55,25],[11,36,12],[5,122,98,1,123,99],[7,73,45,3,74,46],[15,43,19,2,44,20],[3,45,15,13,46,16],[1,135,107,5,136,108],[10,74,46,1,75,47],[1,50,22,15,51,23],[2,42,14,17,43,15],[5,150,120,1,151,121],[9,69,43,4,70,44],[17,50,22,1,51,23],[2,42,14,19,43,15],[3,141,113,4,142,114],[3,70,44,11,71,45],[17,47,21,4,48,22],[9,39,13,16,40,14],[3,135,107,5,136,108],[3,67,41,13,68,42],[15,54,24,5,55,25],[15,
43,15,10,44,16],[4,144,116,4,145,117],[17,68,42],[17,50,22,6,51,23],[19,46,16,6,47,17],[2,139,111,7,140,112],[17,74,46],[7,54,24,16,55,25],[34,37,13],[4,151,121,5,152,122],[4,75,47,14,76,48],[11,54,24,14,55,25],[16,45,15,14,46,16],[6,147,117,4,148,118],[6,73,45,14,74,46],[11,54,24,16,55,25],[30,46,16,2,47,17],[8,132,106,4,133,107],[8,75,47,13,76,48],[7,54,24,22,55,25],[22,45,15,13,46,16],[10,142,114,2,143,115],[19,74,46,4,75,47],[28,50,22,6,51,23],[33,46,16,4,47,17],[8,152,122,4,153,123],[22,73,45,
3,74,46],[8,53,23,26,54,24],[12,45,15,28,46,16],[3,147,117,10,148,118],[3,73,45,23,74,46],[4,54,24,31,55,25],[11,45,15,31,46,16],[7,146,116,7,147,117],[21,73,45,7,74,46],[1,53,23,37,54,24],[19,45,15,26,46,16],[5,145,115,10,146,116],[19,75,47,10,76,48],[15,54,24,25,55,25],[23,45,15,25,46,16],[13,145,115,3,146,116],[2,74,46,29,75,47],[42,54,24,1,55,25],[23,45,15,28,46,16],[17,145,115],[10,74,46,23,75,47],[10,54,24,35,55,25],[19,45,15,35,46,16],[17,145,115,1,146,116],[14,74,46,21,75,47],[29,54,24,19,
55,25],[11,45,15,46,46,16],[13,145,115,6,146,116],[14,74,46,23,75,47],[44,54,24,7,55,25],[59,46,16,1,47,17],[12,151,121,7,152,122],[12,75,47,26,76,48],[39,54,24,14,55,25],[22,45,15,41,46,16],[6,151,121,14,152,122],[6,75,47,34,76,48],[46,54,24,10,55,25],[2,45,15,64,46,16],[17,152,122,4,153,123],[29,74,46,14,75,47],[49,54,24,10,55,25],[24,45,15,46,46,16],[4,152,122,18,153,123],[13,74,46,32,75,47],[48,54,24,14,55,25],[42,45,15,32,46,16],[20,147,117,4,148,118],[40,75,47,7,76,48],[43,54,24,22,55,25],[10,
45,15,67,46,16],[19,148,118,6,149,119],[18,75,47,31,76,48],[34,54,24,34,55,25],[20,45,15,61,46,16]];p.getRSBlocks=function(a,c){var d=p.getRsBlockTable(a,c);if(void 0==d)throw Error("bad rs block @ typeNumber:"+a+"/errorCorrectLevel:"+c);for(var b=d.length/3,e=[],f=0;f<b;f++)for(var h=d[3*f+0],g=d[3*f+1],j=d[3*f+2],l=0;l<h;l++)e.push(new p(g,j));return e};p.getRsBlockTable=function(a,c){switch(c){case 1:return p.RS_BLOCK_TABLE[4*(a-1)+0];case 0:return p.RS_BLOCK_TABLE[4*(a-1)+1];case 3:return p.RS_BLOCK_TABLE[4*
(a-1)+2];case 2:return p.RS_BLOCK_TABLE[4*(a-1)+3]}};t.prototype={get:function(a){return 1==(this.buffer[Math.floor(a/8)]>>>7-a%8&1)},put:function(a,c){for(var d=0;d<c;d++)this.putBit(1==(a>>>c-d-1&1))},getLengthInBits:function(){return this.length},putBit:function(a){var c=Math.floor(this.length/8);this.buffer.length<=c&&this.buffer.push(0);a&&(this.buffer[c]|=128>>>this.length%8);this.length++}};"string"===typeof h&&(h={text:h});h=r.extend({},{render:"canvas",width:256,height:256,typeNumber:-1,
correctLevel:2,background:"#ffffff",foreground:"#000000"},h);return this.each(function(){var a;if("canvas"==h.render){a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();var c=document.createElement("canvas");c.width=h.width;c.height=h.height;for(var d=c.getContext("2d"),b=h.width/a.getModuleCount(),e=h.height/a.getModuleCount(),f=0;f<a.getModuleCount();f++)for(var i=0;i<a.getModuleCount();i++){d.fillStyle=a.isDark(f,i)?h.foreground:h.background;var g=Math.ceil((i+1)*b)-Math.floor(i*b),
j=Math.ceil((f+1)*b)-Math.floor(f*b);d.fillRect(Math.round(i*b),Math.round(f*e),g,j)}}else{a=new o(h.typeNumber,h.correctLevel);a.addData(h.text);a.make();c=r("<table></table>").css("width",h.width+"px").css("height",h.height+"px").css("border","0px").css("border-collapse","collapse").css("background-color",h.background);d=h.width/a.getModuleCount();b=h.height/a.getModuleCount();for(e=0;e<a.getModuleCount();e++){f=r("<tr></tr>").css("height",b+"px").appendTo(c);for(i=0;i<a.getModuleCount();i++)r("<td></td>").css("width",
d+"px").css("background-color",a.isDark(e,i)?h.foreground:h.background).appendTo(f)}}a=c;jQuery(a).appendTo(this)})}})(jQuery);






$(document).ready(function(){


	window.themebetter_ent = window.themebetter_ent || {}

    themebetter_ent.bd = $('body')

    themebetter_ent.shareimage = themebetter_ent.shareimage || ''
	themebetter_ent.shareimagethumb = themebetter_ent.shareimagethumb ? Number(themebetter_ent.shareimagethumb) : 1
	themebetter_ent.fullgallery = themebetter_ent.fullgallery ? Number(themebetter_ent.fullgallery) : 1
	themebetter_ent.fullimage = themebetter_ent.fullimage ? Number(themebetter_ent.fullimage) : 1

	themebetter_ent.click = 'click'



	$('.themebetter-ent-nav-on').on(themebetter_ent.click, function(){
		themebetter_ent.bd.toggleClass('themebetter-ent-nav-active')
	})

	$('.themebetter-ent-nav-mask').on(themebetter_ent.click, function(){
		themebetter_ent.bd.removeClass('themebetter-ent-nav-active')
	})



	$('[etap="all_lists"]').on(themebetter_ent.click, function(){
		$(this).parent().next('ul').slideToggle(400)
	})




	$('.homeslide').glide({
        type: 'carousel',
		animationDuration: 500,
        startAt: 1,
        afterInit: function (data) {
			$('.homeslide li').height('auto')
		}
    })

    


    // GALLERY
    
    if( themebetter_ent.fullgallery || themebetter_ent.fullimage ){

	    themebetter_ent.gallerybox_api = null
	    themebetter_ent.gallerybox_close = function(){

	        themebetter_ent.gallerybox_api && themebetter_ent.gallerybox_api.refresh()

	        $('.gallerybox').remove()
	        
	        $('.g___actived').removeClass('g___actived')
	    }

	    themebetter_ent.gallerybox_init = function(items){
	        themebetter_ent.bd.append('\
	            <div class="gallerybox">\
	                <div class="glide">\
	                    <div class="glide__arrows">\
	                        <button class="glide__arrow prev" data-glide-dir="<"><i class="fa">&#xe60d;</i></button>\
	                        <button class="glide__arrow next" data-glide-dir=">"><i class="fa">&#xe60f;</i></button>\
	                    </div>\
	                    <div class="glide__wrapper">\
	                        <ul class="glide__track">'+ items +'</ul>\
	                    </div>\
	                    <div class="glide__bullets"></div>\
	                </div>\
	                <div class="gallerybox-close" onclick="javascript:themebetter_ent.gallerybox_close();"><i class="fa">&#xe60c;</i></div>\
	            </div>\
	        ')

	        gallerybox_auto()
	    }


	    $('.gallery img').addClass('gallery-image')


	    if( themebetter_ent.fullgallery ){

		    $('.gallery-size-large.gallerylink-file a, .gallery-size-medium.gallerylink-file a, .gallery-size-thumbnail.gallerylink-file a').on(themebetter_ent.click, function(event){

		        event.preventDefault()

		        var p = $(this).parent().parent()
		        var item_index = p.index()+1

		        var items = ''
		        p.parent().children().each(function(){
		            var desc = ''
		            if( $(this).find('.gallery-caption').length ){
		                desc = '<div class="gallerybox-itemdesc">'+ $(this).find('.gallery-caption').html() +'</div>'
		            }
		            items += '<li class="glide__slide"><div class="gallerybox-item"><img src="'+ $(this).find('a').attr('href') +'"></div>'+ desc +'</li>'
		        })

		        themebetter_ent.gallerybox_init(items)

		        $('.gallerybox-item').height( $(window).height() )

		        var gallerybox_slider = $('.gallerybox .glide').glide({
		            type: 'slider',
		            startAt: item_index,
		            touchDistance: 2
		        })

		        themebetter_ent.gallerybox_api = gallerybox_slider.data('glide_api')

		    })

		}

		if( themebetter_ent.fullimage ){

		    $('.article-content img:not(.gallery-image)').on(themebetter_ent.click, function(event){

		        if( $(this).parent()[0].tagName !== 'A' ){

		            var item_index = 1
		            var items = ''
		            
		            $(this).addClass('g___actived')

		            $('.article-content img:not(.gallery-image)').each(function(e){
		                var _this = $(this)

		                if( _this.hasClass('g___actived') ){
		                    item_index = e+1
		                }

		                var desc = ''
		                if( _this.next('.wp-caption-text').length ){
		                    desc = '<div class="gallerybox-itemdesc">'+ _this.next('.wp-caption-text').html() +'</div>'
		                }

		                items += '<li class="glide__slide"><div class="gallerybox-item"><img data-w="'+ _this.width() +'" data-h="'+ _this.height() +'" src="'+ _this.attr('src') +'"></div>'+ desc +'</li>'
		            })

		            themebetter_ent.gallerybox_init(items)

		            $('.gallerybox-item').height( $(window).height() )

		            var gallerybox_slider = $('.gallerybox .glide').glide({
		                type: 'slider',
		                startAt: item_index,
		                touchDistance: 2
		            })

		            themebetter_ent.gallerybox_api = gallerybox_slider.data('glide_api')

		        }

		    })

		}


		function gallerybox_auto(){
			if( $('.gallerybox').length ){
	        	var win_h = $(window).height()
	            $('.gallerybox-item').height( win_h )
	            $('.gallerybox-item').each(function(){
	            	var _img = $(this).find('img'), _img_w = _img.data('w'), _img_h = _img.data('h')
	            	if( win_h <= _img_h ){
	            		_img.height( win_h )
	            		_img.width( _img.height() * _img_w / _img_h )
	            	}else{
	            		_img.width('')
	            		_img.height('')
	            	}
	            })
	        }
		}

		
	    $(window).resizeend(function() {
	        gallerybox_auto()
	    })

	    if( themebetter_ent.fullgallery ){

		    var gallery_slider = $('.gallery .glide').glide({
		        type: 'slider',
		        startAt: 1,
		        autoheight: true,
		        touchDistance: 2
		    })

		}

	}

    



	// VIDEO IFRAME
	
	video_ok()
	$(window).resizeend(function(event) {
	    video_ok()
	});

	function video_ok(){
		var cw = $('.article-content').width()
	    $('.article-content embed, .article-content video, .article-content iframe').each(function(){
	        var w = $(this).attr('width')||0,
	            h = $(this).attr('height')||0
	        if( cw && w && h ){
	            $(this).css('width', cw<w?cw:w)
	            $(this).css('height', $(this).width()/(w/h))
	        }
	    })
	}




    // ROLLBAR
	themebetter_ent.bd.append('<div class="rollbar"><div class="rollbar-item" etap="to_top"><i class="fa">&#xe60e;</i></div></div>')

	var scroller = $('.rollbar')
	$(window).scroll(function() {
	    var h = document.documentElement.scrollTop + document.body.scrollTop
	    h > 200 ? scroller.fadeIn() : scroller.fadeOut();
	})



	$('[etap="to_top"]').on(themebetter_ent.click, function(){
		$('html,body').animate({
            scrollTop: 0
        }, 300)
	})




    // SHARE IMAGE
    if( themebetter_ent.shareimage ){
        if( !themebetter_ent.shareimagethumb && $('.article-content img:first').length ){
            themebetter_ent.shareimage = $('.article-content img:first').attr('src')
        }
        themebetter_ent.bd.prepend('<div id="shareimage"><img src="'+ themebetter_ent.shareimage +'"></div>')
    }



    // SHARE
	var share = {
        url: document.URL,
        pic: themebetter_ent.shareimage,
        title: document.title || '',
        desc: $('meta[name="description"]').length ? $('meta[name="description"]').attr('content') : ''    
    }


    $('.share-weixin').each(function(){
	    if( !$(this).find('.share-popover').length ){
			$(this).append('<span class="share-popover"><span class="share-popover-inner" id="weixin-qrcode"></span></span>')
			$('#weixin-qrcode').qrcode({
				width: 80,
				height: 80,
				text: $(this).data('url')
			})
		}
	})


	$('[etap="share"]').on(themebetter_ent.click, function(){

		var dom = $(this)
	    var to = dom.data('share')
	    var url = ''

	    switch(to){
	        case 'qq':
	            url = 'http://connect.qq.com/widget/shareqq/index.html?url='+share.url+'&desc='+share.desc+'&summary='+share.title+'&site=zeshlife&pics='+share.pic
	            break;

	        case 'weibo':
	            url = 'http://service.weibo.com/share/share.php?title='+share.title+'&url='+share.url+'&source=bookmark&pic='+share.pic
	            break;

	        case 'douban':
	            url = 'http://www.douban.com/share/service?image='+share.pic+'&href='+share.url+'&name='+share.title+'&text='+share.desc
	            break;

	        case 'qzone':
	            url = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+share.url+'&title='+share.title+'&desc='+share.desc
	            break;

	        case 'tqq':
	            url = 'http://share.v.t.qq.com/index.php?c=share&a=index&url='+share.url+'&title='+share.title
	            break;

	        case 'renren':
	            url = 'http://widget.renren.com/dialog/share?srcUrl='+share.pic+'&resourceUrl='+share.url+'&title='+share.title+'&description='+share.desc
	            break;

	    }

	    if( !dom.attr('href') && !dom.attr('target') ){
	    	dom.attr('href', url).attr('target', '_blank')
	    }
	})
	
	
	
	/*让文章内图片链接在新窗口打开*/
	var mydomain = location.hostname;
	$("a[href^='http://" + mydomain + "/wp-content/uploads'],[href^='http://']:not([href*= '"+ mydomain +"'])").attr("target", "_blank");
	
	//判断访问终端
	var browser={
		versions:function(){
			var u = navigator.userAgent, app = navigator.appVersion;
			return {
				trident: u.indexOf('Trident') > -1, //IE内核
				presto: u.indexOf('Presto') > -1, //opera内核
				webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
				gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
				mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
				ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
				android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
				iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
				iPad: u.indexOf('iPad') > -1, //是否iPad
				webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
				weixin: u.indexOf('MicroMessenger') > -1, //是否微信 （2015-01-22新增）
				qq: u.match(/\sQQ/i) == " qq" //是否QQ
			};
		}(),
	}
	//判断是否输出面包屑导航，移动端下把站名替换为首页
	if($('div').is('.breadcrumbs')){
		//判断是否移动端
		if(browser.versions.mobile||browser.versions.android||browser.versions.ios){
			$(".breadcrumbs_first").html('首页');
		}
    }
})
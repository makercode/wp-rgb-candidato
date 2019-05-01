/*
 *  Remodal - v0.6.4
 *  Flat, responsive, lightweight, easy customizable modal window plugin with declarative state notation and hash tracking.
 *  http://vodkabears.github.io/remodal/
 *
 *  Made by Ilya Makarov
 *  Under MIT License
 */
!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],function(c){return b(a,c)}):"object"==typeof exports?b(a,require("jquery")):b(a,a.jQuery||a.Zepto)}(this,function(a,b){"use strict";function c(a){var b,c,d,e,f=a.css("transition-duration")||a.css("-webkit-transition-duration")||a.css("-moz-transition-duration")||a.css("-o-transition-duration")||a.css("-ms-transition-duration")||"0s",g=a.css("transition-delay")||a.css("-webkit-transition-delay")||a.css("-moz-transition-delay")||a.css("-o-transition-delay")||a.css("-ms-transition-delay")||"0s";for(f=f.split(", "),g=g.split(", "),e=0,c=f.length,b=Number.NEGATIVE_INFINITY;c>e;e++)d=parseFloat(f[e])+parseFloat(g[e]),d>b&&(b=d);return 1e3*d}function d(){if(b(document.body).height()<=b(window).height())return 0;var a,c,d=document.createElement("div"),e=document.createElement("div");return d.style.visibility="hidden",d.style.width="100px",document.body.appendChild(d),a=d.offsetWidth,d.style.overflow="scroll",e.style.width="100%",d.appendChild(e),c=e.offsetWidth,d.parentNode.removeChild(d),a-c}function e(){var a,c,e=b("html"),f=m+"-is-locked";e.hasClass(f)||(c=b(document.body),a=parseInt(c.css("padding-right"),10)+d(),c.css("padding-right",a+"px"),e.addClass(f))}function f(){var a,c,e=b("html"),f=m+"-is-locked";e.hasClass(f)&&(c=b(document.body),a=parseInt(c.css("padding-right"),10)-d(),c.css("padding-right",a+"px"),e.removeClass(f))}function g(a){var b,c,d,e,f={};for(a=a.replace(/\s*:\s*/g,":").replace(/\s*,\s*/g,","),b=a.split(","),e=0,c=b.length;c>e;e++)b[e]=b[e].split(":"),d=b[e][1],("string"==typeof d||d instanceof String)&&(d="true"===d||("false"===d?!1:d)),("string"==typeof d||d instanceof String)&&(d=isNaN(d)?d:+d),f[b[e][0]]=d;return f}function h(a,d){var e,f,g,h=this;h.settings=b.extend({},n,d),h.$body=b(document.body),h.$overlay=b("."+m+"-overlay"),h.$overlay.length||(h.$overlay=b("<div>").addClass(m+"-overlay"),h.$body.append(h.$overlay)),h.$bg=b("."+m+"-bg"),h.$closeButton=b('<a href="#"></a>').addClass(m+"-close"),h.$wrapper=b("<div>").addClass(m+"-wrapper"),h.$modal=a,h.$modal.addClass(m),h.$modal.css("visibility","visible"),h.$modal.append(h.$closeButton),h.$wrapper.append(h.$modal),h.$body.append(h.$wrapper),h.$confirmButton=h.$modal.find("."+m+"-confirm"),h.$cancelButton=h.$modal.find("."+m+"-cancel"),e=c(h.$overlay),f=c(h.$modal),g=c(h.$bg),h.td=Math.max(e,f,g),h.$wrapper.on("click."+m,"."+m+"-close",function(a){a.preventDefault(),h.close()}),h.$wrapper.on("click."+m,"."+m+"-cancel",function(a){a.preventDefault(),h.$modal.trigger("cancel"),h.settings.closeOnCancel&&h.close("cancellation")}),h.$wrapper.on("click."+m,"."+m+"-confirm",function(a){a.preventDefault(),h.$modal.trigger("confirm"),h.settings.closeOnConfirm&&h.close("confirmation")}),b(document).on("keyup."+m,function(a){27===a.keyCode&&h.settings.closeOnEscape&&h.close()}),h.$wrapper.on("click."+m,function(a){var c=b(a.target);c.hasClass(m+"-wrapper")&&h.settings.closeOnAnyClick&&h.close()}),h.index=b[l].lookup.push(h)-1,h.busy=!1}function i(a,c){var d,e,f=location.hash.replace("#","");if("undefined"==typeof c&&(c=!0),f){try{e=b("[data-"+l+"-id="+f.replace(new RegExp("/","g"),"\\/")+"]")}catch(g){}e&&e.length&&(d=b[l].lookup[e.data(l)],d&&d.settings.hashTracking&&d.open())}else c&&j&&!j.busy&&j.settings.hashTracking&&j.close()}var j,k,l="remodal",m=a.remodalGlobals&&a.remodalGlobals.namespace||l,n=b.extend({hashTracking:!0,closeOnConfirm:!0,closeOnCancel:!0,closeOnEscape:!0,closeOnAnyClick:!0},a.remodalGlobals&&a.remodalGlobals.defaults);h.prototype.open=function(){if(!this.busy){var a,c=this;c.busy=!0,c.$modal.trigger("open"),a=c.$modal.attr("data-"+l+"-id"),a&&c.settings.hashTracking&&(k=b(window).scrollTop(),location.hash=a),j&&j!==c&&(j.$overlay.hide(),j.$wrapper.hide(),j.$body.removeClass(m+"-is-active")),j=c,e(),c.$overlay.show(),c.$wrapper.show(),setTimeout(function(){c.$body.addClass(m+"-is-active"),c.$wrapper.scrollTop(0),setTimeout(function(){c.busy=!1,c.$modal.trigger("opened")},c.td+50)},25)}},h.prototype.close=function(a){if(!this.busy){var c=this;c.busy=!0,c.$modal.trigger({type:"close",reason:a}),c.settings.hashTracking&&c.$modal.attr("data-"+l+"-id")===location.hash.substr(1)&&(location.hash="",b(window).scrollTop(k)),c.$body.removeClass(m+"-is-active"),setTimeout(function(){c.$overlay.hide(),c.$wrapper.hide(),f(),c.busy=!1,c.$modal.trigger({type:"closed",reason:a})},c.td+50)}},b[l]={lookup:[]},b.fn[l]=function(a){var c,d;return this.each(function(e,f){d=b(f),null==d.data(l)?(c=new h(d,a),d.data(l,c.index),c.settings.hashTracking&&d.attr("data-"+l+"-id")===location.hash.substr(1)&&c.open()):c=b[l].lookup[d.data(l)]}),c},b(document).ready(function(){b(document).on("click","[data-"+l+"-target]",function(a){a.preventDefault();var c=a.currentTarget,d=c.getAttribute("data-"+l+"-target"),e=b("[data-"+l+"-id="+d+"]");b[l].lookup[e.data(l)].open()}),b(document).find("."+m).each(function(a,c){var d=b(c),e=d.data(l+"-options");e?("string"==typeof e||e instanceof String)&&(e=g(e)):e={},d[l](e)})}),b(window).bind("hashchange."+m,i)});
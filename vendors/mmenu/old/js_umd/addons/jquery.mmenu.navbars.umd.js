(function ( factory ) {
    if ( typeof define === 'function' && define.amd )
    {
        // AMD. Register as an anonymous module.
        define( [ 'jquery' ], factory );
    }
    else if ( typeof exports === 'object' )
    {
        // Node/CommonJS
        factory( require( 'jquery' ) );
    }
    else
    {
        // Browser globals
        factory( jQuery );
    }
}( function ( jQuery ) {


/*	
 * jQuery mmenu navbar addon
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 */
!function(e){var n="mmenu",t="navbars",a="navbar";e[n].addons[t]={setup:function(){var c=this,l=this.opts[t];this.conf[t],i=e[n].glbl,"undefined"!=typeof l&&(l instanceof Array||(l=[l]),e.each(l,function(o){var d=l[o];"boolean"==typeof d&&d&&(d={}),"object"!=typeof d&&(d={}),"undefined"==typeof d.content&&(d.content=["prev","title","next"]),d=e.extend(!0,{},e[n].defaults[a],d);var f=f=d.position||"top",h=e('<div class="'+s.navbar+" "+s.navbar+"-"+f+'" />');if(d.content instanceof Array){for(var v=e("<div />"),p=0,u=!1,m=!1,b=0,C=d.content.length;C>b;b++){switch(d.content[b]){case"prev":case"next":case"close":case"title":u=!0}switch(d.content[b]){case"prev":m=!0}switch(d.content[b]){case"prev":case"next":case"close":h.addClass(s.hasbtns),v.append('<a class="'+s[d.content[b]]+" "+s.btn+'" href="#"></a>');break;case"title":p++,v.append('<a class="'+s.title+'"></a>');break;default:d.content[b]instanceof e||(d.content[b]=e(d.content[b])),c.__findAddBack(d.content[b],"a").each(function(){p++,v.append(e(this))})}}p>1&&h.addClass(s.navbar+"-"+p),v=v.html()}else var v=d.content;if(h.prependTo(c.$menu).append(v),c.$menu.addClass(s.hasnavbar+"-"+f),m&&(c.$menu.addClass(s.hasnavbar),c.bind("init",function(e){e.removeClass(s.hasnavbar)})),u){var x=h.find("."+s.title),k=h.find("."+s.prev),y=h.find("."+s.next),A=h.find("."+s.close),N=function(e){e=e||c.$menu.children("."+s.current);var n=e.find("."+c.conf.classNames[t].panelTitle+"-"+f),a=e.find("."+c.conf.classNames[t].panelPrev+"-"+f),i=e.find("."+c.conf.classNames[t].panelNext+"-"+f),l=e.data(r.parent),o=n.html(),h=a.attr("href"),v=i.attr("href"),p=!1,u=a.html(),m=i.html();switch(o||(o=e.children("."+s.navbar).children("."+s.title).html()),o||(o=d.title),h||(h=e.children("."+s.navbar).children("."+s.prev).attr("href")),d.titleLink){case"anchor":var p=l?l.children("a").not("."+s.next).attr("href"):!1;break;case"panel":var p=h}x[p?"attr":"removeAttr"]("href",p),x[o?"removeClass":"addClass"](s.hidden),x.html(o),k[h?"attr":"removeAttr"]("href",h),k[h||u?"removeClass":"addClass"](s.hidden),k.html(u),y[v?"attr":"removeAttr"]("href",v),y[v||m?"removeClass":"addClass"](s.hidden),y.html(m)};if(c.bind("openPanel",N),c.bind("init",function(){N.call(c,c.$menu.children("."+s.current))}),c.opts.offCanvas){var $=function(e){A.attr("href","#"+e.attr("id"))};$.call(c,i.$page),c.bind("setPage",$)}}}))},add:function(){s=e[n]._c,r=e[n]._d,c=e[n]._e,s.add("close hasbtns")},clickAnchor:function(){}},e[n].defaults[a]={position:"top",title:"Menu",titleLink:"panel"},e[n].configuration.classNames[t]={panelTitle:"Title",panelNext:"Next",panelPrev:"Prev"};var s,r,c,i}(jQuery);
}));
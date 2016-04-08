<!DOCTYPE html>
<html dir="ltr" lang="en">
 <!--<![endif]-->
 <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electronics online store</title>
    <!--<base href="http://livedemo00.template-help.com/opencart_52995/"/>-->
    <meta name="description" content="Electronics online store"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<script type="text/javascript">
       //<![CDATA[
       try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"5f174d0b4b8f52035bd0a8461ce7639d",petok:"f03e08a2b808c3e242a1e646260cb96bdd088aba-1460080082-86400",zone:"template-help.com",rocket:"0",apps:{"abetterbrowser":{"ie":"7"},"ga_key":{"ua":"UA-7078796-5","ga_bs":"2"}},sha2test:0}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="http://ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
       //]]>
    </script>-->
    <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(e,t){function n(){}function r(e){function t(e){return e&&e instanceof n?e:e?a(e,i,o):o()}function s(n,r,o){e&&e(n,r,o);for(var i=t(o),a=l(n),u=a.length,f=0;u>f;f++)a[f].apply(i,r);var s=c[w[n]];return s&&s.push([h,n,r,i]),i}function p(e,t){g[e]=l(e).concat(t)}function l(e){return g[e]||[]}function d(e){return f[e]=f[e]||r(s)}function v(e,t){u(e,function(e,n){t=t||"feature",w[n]=t,t in c||(c[t]=[])})}var g={},w={},h={on:p,emit:s,get:d,listeners:l,context:t,buffer:v};return h}function o(){return new n}var i="nr@context",a=e("gos"),u=e(1),c={},f={},s=t.exports=r();s.backlog=c},{1:12,gos:"7eSDFh"}],ee:[function(e,t){t.exports=e("QJf3ax")},{}],3:[function(e,t){function n(e,t){return function(){r(e,[(new Date).getTime()].concat(i(arguments)),null,t)}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit"],u=["addPageAction"],c="api-";o(a,function(e,t){newrelic[t]=n(c+t,"api")}),o(u,function(e,t){newrelic[t]=n(c+t)}),t.exports=newrelic,newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),r("err",[e,(new Date).getTime()])}},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,t){t.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,t){function n(e,t,n){if(r.call(e,t))return e[t];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[t]=o,o}var r=Object.prototype.hasOwnProperty;t.exports=n},{}],handle:[function(e,t){t.exports=e("D5DuLP")},{}],D5DuLP:[function(e,t){function n(e,t,n,o){r.buffer([e],o),r.emit(e,t,n)}var r=e("ee").get("handle");t.exports=n,n.ee=r},{ee:"QJf3ax"}],XL7HBI:[function(e,t){function n(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");t.exports=n},{gos:"7eSDFh"}],id:[function(e,t){t.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,t){function n(){if(!v++){var e=d.info=NREUM.info,t=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&t){u(p,function(t,n){e[t]||(e[t]=n)});var n="https"===s.split(":")[0]||e.sslForHttp;d.proto=n?"https://":"http://",a("mark",["onload",i()],null,"api");var r=f.createElement("script");r.src=d.proto+e.agent,t.parentNode.insertBefore(r,t)}}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()],null,"api")}function i(){return(new Date).getTime()}var a=e("handle"),u=e(1),c=window,f=c.document;NREUM.o={ST:setTimeout,XHR:c.XMLHttpRequest,REQ:c.Request,EV:c.Event,PR:c.Promise,MO:c.MutationObserver},e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-885.min.js"},l=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),d=t.exports={offset:i(),origin:s,features:{},xhrWrappable:l};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()],null,"api");var v=0},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,t){t.exports=e("G9z0Bl")},{}],12:[function(e,t){function n(e,t){var n=[],o="",i=0;for(o in e)r.call(e,o)&&(n[i]=t(o,e[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;t.exports=n},{}],13:[function(e,t){function n(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(0>o?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=n},{}]},{},["G9z0Bl"]);</script>
    <link href="images/catalog/favicon.png" rel="icon"/>
    <script src="<?= get_bloginfo("template_url"); ?>/js/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="<?= get_bloginfo("template_url"); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <script src="<?= get_bloginfo("template_url"); ?>/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="<?= get_bloginfo("template_url"); ?>/css/camera.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_bloginfo("template_url"); ?>/css/fancybox/jquery.fancybox.css" media="screen"/>
    <link href="<?= get_bloginfo("template_url"); ?>/css/stylesheet/livesearch.css" rel="stylesheet">
    <link href="<?= get_bloginfo("template_url"); ?>/css/stylesheet/owl-carousel.css" rel="stylesheet">
    <link href="<?= get_bloginfo("template_url"); ?>/css/stylesheet/photoswipe.css" rel="stylesheet">
    <link href="<?= get_bloginfo("template_url"); ?>/css/jquery.bxslider/jquery.bxslider.css" rel="stylesheet">
    <link href="<?= get_bloginfo("template_url"); ?>/css/stylesheet/material-design.css" rel="stylesheet">
    <link href="<?= get_bloginfo("template_url"); ?>/css/stylesheet/stylesheet.css" rel="stylesheet">
    <script src="<?= get_bloginfo("template_url"); ?>/js/camera/camera.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/common.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/tmstickup.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/jquery.unveil.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/jquery.bxslider/jquery.bxslider.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/elavatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/superfish.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/jquery.ui.totop.js"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/owl.carousel.min.js"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/greensock/jquery.gsap.min.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/greensock/TimelineMax.min.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/greensock/TweenMax.min.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/greensock/jquery.scrollmagic.min.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/photo-swipe/klass.min.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/photo-swipe/code.photoswipe.jquery-3.0.5.js" type="text/javascript"></script>
    <script src="<?= get_bloginfo("template_url"); ?>/js/photo-swipe/code.photoswipe-3.0.5.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'>
       <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img
          src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
          height="42" width="820"
          alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
       </a>
    </div>
    <![endif]-->
    <script type="text/javascript">
       /* <![CDATA[ */
       var _gaq = _gaq || [];
       _gaq.push(['_setAccount', 'UA-7078796-5']);
       _gaq.push(['_trackPageview']);
       
       (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
       })();
       
       (function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
       /* ]]> */
    </script>
 </head>
 <body class="common-home">
    <div class="swipe">
       <div class="swipe-menu">
          <ul>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/account" title="My Account"><i class="fa fa-user"></i>
                <span>My Account</span></a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/register"><i class="fa fa-user"></i> Register</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/login"><i class="fa fa-lock"></i>Login</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/wishlist" id="wishlist-total2" title="Wish List (0)"><i class="fa fa-heart"></i> <span>Wish List (0)</span></a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=checkout/cart" title="Shopping Cart"><i class="fa fa-shopping-cart"></i> <span>Shopping Cart</span></a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=checkout/checkout" title="Checkout"><i class="fa fa-share"></i>
                <span>Checkout</span></a>
             </li>
          </ul>
          <ul class="foot">
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/information&amp;information_id=4">About Us</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/information&amp;information_id=6">Delivery Information</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/information&amp;information_id=3">Privacy Policy</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a>
             </li>
          </ul>
          <ul class="foot foot-1">
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/contact">Contact Us</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/return/insert">Returns</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/sitemap">Site Map</a>
             </li>
          </ul>
          <ul class="foot foot-2">
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer">Brands</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/voucher">Gift Vouchers</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=affiliate/account">Affiliates</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/special">Specials</a>
             </li>
          </ul>
          <ul class="foot foot-3">
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/order">Order History</a>
             </li>
             <li>
                <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/newsletter">Newsletter</a>
             </li>
          </ul>
       </div>
    </div>
    <div id="page">
       <div class="shadow"></div>
       <div class="toprow-1">
          <a class="swipe-control" href="#"><i class="fa fa-align-justify"></i></a>
       </div>
       <header class="header">
          <div class="container">
             <div class="box-right">
                <ul class="social-list">
                   <li>
                      <a class="fa fa-facebook" href="http://www.facebook.com/"></a>
                   </li>
                   <li>
                      <a class="fa fa-twitter" href="http://twitter.com/"></a>
                   </li>
                   <li>
                      <a class="fa fa-google-plus" href="http://plus.google.com/"></a>
                   </li>
                   <li>
                      <a class="fa fa-youtube" href="http://www.youtube.com/"></a>
                   </li>
                </ul>
                <div class="pull-right box-language">
                   <form action="http://livedemo00.template-help.com/opencart_52995/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="language">
                      <div class="btn-group pull-right">
                         <span class="dropdown-toggle" data-toggle="dropdown">
                         <img class="hidden" src="<?= get_bloginfo("template_url"); ?>/images/flags/gb.png" alt="English" title="English">
                         en <span class="hidden-xs hidden-sm hidden-md hidden">Language</span> <i class="fa fa-angle-down"></i></span>
                         <ul class="dropdown-menu pull-right">
                            <li><a href="en"><img class="hidden" src="<?= get_bloginfo("template_url"); ?>/images/flags/gb.png" alt="English" title="English"/> English</a></li>
                            <li><a href="de"><img class="hidden" src="<?= get_bloginfo("template_url"); ?>/images/flags/de.png" alt="Deutsch" title="Deutsch"/> Deutsch</a></li>
                            <li><a href="ru"><img class="hidden" src="<?= get_bloginfo("template_url"); ?>/images/flags/ru.png" alt="Русский" title="Русский"/> Русский</a></li>
                         </ul>
                      </div>
                      <input type="hidden" name="code" value=""/>
                      <input type="hidden" name="redirect" value="http://livedemo00.template-help.com/opencart_52995/index.php?route=common/home"/>
                   </form>
                </div>
                <div class="box-currency">
                   <form action="http://livedemo00.template-help.com/opencart_52995/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="currency">
                      <div class="btn-group">
                         <span class="dropdown-toggle" data-toggle="dropdown">
                         $ <span class="hidden-xs hidden-sm hidden-md hidden">Currency</span> <i class="fa fa-angle-down"></i>
                         </span>
                         <ul class="dropdown-menu  pull-right">
                            <li><button class="currency-select" type="button" name="EUR">€ Euro</button></li>
                            <li><button class="currency-select" type="button" name="GBP">£ Pound Sterling</button></li>
                            <li><button class="currency-select" type="button" name="USD">$ US Dollar</button></li>
                         </ul>
                      </div>
                      <input type="hidden" name="code" value=""/>
                      <input type="hidden" name="redirect" value="http://livedemo00.template-help.com/opencart_52995/index.php?route=common/home"/>
                   </form>
                </div>
             </div>
          </div>
          <div class="container">
             <div class="row">
                <div class="col-sm-3 col-xs-6">
                   <div id="logo" class="logo">
                      <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=common/home"><img src="<?= get_bloginfo("template_url"); ?>/images/catalog/logo.png" title="Electronics online store" alt="Electronics online store" class="img-responsive"/></a>
                   </div>
                </div>
                <div class="col-sm-6 col-xs-6">
                   <div id="search" class="search">
                      <input type="text" name="search" value="" placeholder="Search"/>
                      <button type="button" class="button-search">Search</button>
                      <div class="clear"></div>
                   </div>
                </div>
                <div class="col-sm-3">
                   <div class="phone hidden-xs">
                      <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/contact"><i class="flaticon-phone370"></i></a>
                      <span>800-2345-6789</span>
                   </div>
                </div>
             </div>
          </div>
          <div class="container">
             <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                   <nav id="top" class="top_panel">
                      <div id="top-links" class="nav">
                         <ul class="list-inline">
                            <li class="first">
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=common/home"><i class="flaticon-home149"></i><span class="hidden-sm">Home</span></a>
                            </li>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><i class="flaticon-bookmark45"></i> <span class="hidden-sm">Wish List (0)</span></a>
                            </li>
                            <li class="dropdown">
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/account" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="flaticon-account4"></i>
                               <span class="hidden-sm">My Account</span> <span class="caret hidden-sm"></span></a>
                               <ul class="dropdown-menu dropdown-menu-left">
                                  <li>
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/register">Register</a>
                                  </li>
                                  <li>
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/login">Login</a>
                                  </li>
                               </ul>
                            </li>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=checkout/cart" title="Shopping Cart">
                               <i class="flaticon-shopping232"></i> <span class="hidden-sm">Shopping Cart</span></a>
                            </li>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=checkout/checkout" title="Checkout"><i class="flaticon-check51"></i> <span class="hidden-sm">Checkout</span></a>
                            </li>
                         </ul>
                         <div class="box-cart">
                            <div id="cart" class="cart">
                               <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">
                               <i class="flaticon-shopping232"></i>
                               <span id="cart-total" class="cart-total">0 item(s) - $0.00</span>
                               <span id="cart-total2" class="cart-total2 visible-xs">0</span> <span id="cart-total3" class="cart-total3 hidden-xs">0 item(s)</span> <span class="fa fa-angle-down"></span>
                               </button>
                               <ul class="dropdown-menu pull-right">
                                  <li>
                                     <p class="text-center">Your shopping cart is empty!</p>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </nav>
                </div>
             </div>
          </div>
       </header>
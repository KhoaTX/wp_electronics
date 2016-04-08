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
       <div class="container">
          <div class="row">
             <div class="col-sm-3">
                <div id="menu-gadget" class="menu-gadget">
                   <div id="menu-icon">Categories</div>
                   <ul class="menu">
                      <li>
                         <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=33">TV &amp; Video</a>
                      </li>
                      <li>
                         <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=25">Mobile</a>
                         <ul>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=32">Aenean viverra</a>
                            </li>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=31">Nullam iaculis</a>
                            </li>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=30">Phasellus vel</a>
                            </li>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=28" class="parent">Praesent imperdiet</a>
                               <ul>
                                  <li>
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=36">Aliquam eget</a>
                                  </li>
                                  <li>
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=35">Lorem ipsum</a>
                                  </li>
                               </ul>
                            </li>
                            <li>
                               <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=29">Praesent sodales</a>
                            </li>
                         </ul>
                      </li>
                      <li>
                         <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=34">Computing</a>
                      </li>
                      <li>
                         <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=18">Cameras &amp; Camcorders</a>
                      </li>
                      <li>
                         <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=37">Household Items</a>
                      </li>
                      <li>
                         <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=20">Kitchen Appliances</a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <div class="header_modules"></div>
       <div id="container">
          <div class="container">
             <div class="row">
                <aside id="column-left" class="col-sm-3 ">
                   <div class="box category">
                      <div class="box-heading">
                         <h3><i class="flaticon-show5"></i>Categories</h3>
                      </div>
                      <div class="box-content">
                         <div class="box-category">
                            <ul class="menu">
                               <li>
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=33">TV &amp; Video</a>
                               </li>
                               <li>
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=25">Mobile</a>
                                  <ul>
                                     <li>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=32">Aenean viverra</a>
                                     </li>
                                     <li>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=31">Nullam iaculis</a>
                                     </li>
                                     <li>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=30">Phasellus vel</a>
                                     </li>
                                     <li>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=28" class="parent">Praesent imperdiet</a>
                                        <ul>
                                           <li>
                                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=36">Aliquam eget</a>
                                           </li>
                                           <li>
                                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=35">Lorem ipsum</a>
                                           </li>
                                        </ul>
                                     </li>
                                     <li>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=29">Praesent sodales</a>
                                     </li>
                                  </ul>
                               </li>
                               <li>
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=34">Computing</a>
                               </li>
                               <li>
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=18">Cameras &amp; Camcorders</a>
                               </li>
                               <li>
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=37">Household Items</a>
                               </li>
                               <li>
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/category&amp;path=20">Kitchen Appliances</a>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <script>
                      jQuery(document).ready(function(){
                      jQuery('.box-category .menu').find('li>ul').before('<i class="fa fa-angle-right"></i>');
                        jQuery('.box-category .menu li i').on("click", function(){
                         if (jQuery(this).hasClass('fa-angle-down')) { jQuery(this).removeClass('fa-angle-down').parent('li').find('> ul').slideToggle(); }
                          else {
                           jQuery(this).addClass('fa-angle-down').parent('li').find('> ul').slideToggle();
                          }
                        });
                      });
                   </script>
                   <div class="box specials">
                      <div class="box-heading">
                         <h3>Specials</h3>
                      </div>
                      <div class="box-content">
                         <div class="product-layout">
                            <div class="specials-scroll">
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-52-76x55.png" alt="Aliquam dolor tellus" title="Aliquam dolor tellus" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $150.00 </span>
                                           <span class="price-old">
                                           $200.00 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33">
                                           Aliquam dolor tellus </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                        <div class="rating">
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=28">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png" alt="Aliquam eget" title="Aliquam eget" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $80.00 </span>
                                           <span class="price-old">
                                           $100.00 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=28">
                                           Aliquam eget </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                        <div class="rating">
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png" alt="Consectetur adipiscing" title="Consectetur adipiscing" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $60.00 </span>
                                           <span class="price-old">
                                           $100.00 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">
                                           Consectetur adipiscing </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                        <div class="rating">
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=30">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-76x55.png" alt="Dolor sit amet" title="Dolor sit amet" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $80.00 </span>
                                           <span class="price-old">
                                           $100.00 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=30">
                                           Dolor sit amet </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                        <div class="rating">
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=44">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-34-76x55.png" alt="Donec non posuere" title="Donec non posuere" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $90.00 </span>
                                           <span class="price-old">
                                           $1,000.00 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=44">
                                           Donec non posuere </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=41">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-76x55.png" alt="Lorem euismod" title="Lorem euismod" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $90.00 </span>
                                           <span class="price-old">
                                           $100.00 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=41">
                                           Lorem euismod </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=42">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-22-76x55.png" alt="Lorem ipsum" title="Lorem ipsum" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $90.00 </span>
                                           <span class="price-old">
                                           $100.00 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=42">
                                           Lorem ipsum </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                        <div class="rating">
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                               <div>
                                  <div class="product-thumb transition equal-height-767">
                                     <div class="sale">Sale</div>
                                     <div class="image">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">
                                        <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-76x55.png" alt="Mauris gravida" title="Mauris gravida" class="img-responsive"/>
                                        </a>
                                     </div>
                                     <div class="caption">
                                        <div class="price">
                                           <span class="price-new">
                                           $150.00 </span>
                                           <span class="price-old">
                                           $199.99 </span>
                                        </div>
                                        <div class="name">
                                           <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">
                                           Mauris gravida </a>
                                        </div>
                                        <div class="description">
                                        </div>
                                        <div class="rating">
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                           <span class="fa fa-stack">
                                           <i class="fa fa-star fa-stack-2x"></i>
                                           <i class="fa fa-star-o fa-stack-2x"></i>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="cart-button"></div>
                                     <div class="clear"></div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <script>
                      if ($('.specials-scroll').length > 0) {
                          var slider = $('.specials-scroll');
                          if ($(window).width() > 767) {
                              slider.bxSlider({
                                  mode: 'vertical',
                                  slideWidth: 270,
                                  minSlides: 3,
                                  maxSlides: 3,
                                  moveSlides: 1,
                                  pager: false,
                                  slideMargin: 30,
                                  controls: true
                              });
                          } else{
                              if (!slider.hasClass('activated')){
                                  slider.owlCarousel({
                                      items:3,
                                      margin: 30,
                                      smartSpeed: 450,
                                      dots: false,
                                      nav: true,
                                      loop: true,
                                      navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
                                      responsive: {
                                          0: {items: 1},
                                          370: {items: 2},
                                          570: {items: 3}
                                      }
                                  });
                                  slider.addClass('activated');
                              }
                          }
                      }
                   </script> 
                   <div class="box bestsellers">
                      <div class="box-heading">
                         <h3>Bestsellers</h3>
                      </div>
                      <div class="box-content">
                         <div class="bestseller-slider">
                            <div class="product-layout">
                               <div class="product-thumb transition .equal-height-767-2">
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47"><img alt="Consectetur adipiscing" title="Consectetur adipiscing" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png" src="<?= get_bloginfo("template_url"); ?>/<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-76x55.png"/></a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        <span class="price-new">$60.00</span> <span class="price-old">$100.00</span>
                                     </div>
                                     <h4>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">Consectetur adipiscing</a>
                                     </h4>
                                     <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                     </div>
                                  </div>
                                  <div class="cart-button"></div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div class="product-layout">
                               <div class="product-thumb transition .equal-height-767-2">
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49"><img alt="Mauris gravida" title="Mauris gravida" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-76x55.png"/></a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        <span class="price-new">$150.00</span> <span class="price-old">$199.99</span>
                                     </div>
                                     <h4>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">Mauris gravida</a>
                                     </h4>
                                     <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                     </div>
                                  </div>
                                  <div class="cart-button"></div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div class="product-layout">
                               <div class="product-thumb transition .equal-height-767-2">
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33"><img alt="Aliquam dolor tellus" title="Aliquam dolor tellus" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-52-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-52-76x55.png"/></a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        <span class="price-new">$150.00</span> <span class="price-old">$200.00</span>
                                     </div>
                                     <h4>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=33">Aliquam dolor tellus</a>
                                     </h4>
                                     <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                     </div>
                                  </div>
                                  <div class="cart-button"></div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div class="product-layout">
                               <div class="product-thumb transition .equal-height-767-2">
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=48"><img alt="Praesent imperdiet" title="Praesent imperdiet" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-19-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-19-76x55.png"/></a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        $100.00 
                                     </div>
                                     <h4>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=48">Praesent imperdiet</a>
                                     </h4>
                                     <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                     </div>
                                  </div>
                                  <div class="cart-button"></div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div class="product-layout">
                               <div class="product-thumb transition .equal-height-767-2">
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=35"><img alt="Aenean viverra" title="Aenean viverra" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-46-76x55.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-46-76x55.png"/></a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        $100.00 
                                     </div>
                                     <h4>
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=35">Aenean viverra</a>
                                     </h4>
                                     <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                     </div>
                                  </div>
                                  <div class="cart-button"></div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <script>
                      if ($('.bestseller-slider').length > 0) {
                          var slider =  $(".bestseller-slider");
                          if ($(window).width() > 767) {
                              slider.bxSlider({
                                  mode: 'vertical',
                                  slideWidth: 270,
                                  minSlides: 3,
                                  maxSlides: 3,
                                  moveSlides: 1,
                                  pager: false,
                                  slideMargin: 30,
                                  controls: true
                              });
                          }else{
                              if (!slider.hasClass('activated')){
                                  slider.owlCarousel({
                                      items:3,
                                      margin: 30,
                                      smartSpeed: 450,
                                      dots: false,
                                      nav: true,
                                      loop: true,
                                      navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
                                      responsive: {
                                          0: {items: 1},
                                          370: {items: 2},
                                          570: {items: 3}
                                      }
                                  });
                                  slider.addClass('activated');
                              }
                          }
                      }
                   </script>
                </aside>
                <div id="content" class="col-sm-9">
                   <script>
                      jQuery(function(){
                      	jQuery('#camera_wrap_0').camera({
                      		navigation: true,
                      		playPause: false,
                      		thumbnails: false,
                      		navigationHover: false,
                      		barPosition: 'top',
                      		loader: false,
                      		time: 3000,
                      		transPeriod:800,
                      		alignment: 'center',
                      		autoAdvance: true,
                      		mobileAutoAdvance: true,
                      		barDirection: 'leftToRight', 
                      		barPosition: 'bottom',
                      		easing: 'easeInOutExpo',
                      		fx: 'simpleFade',
                      		height: '39.6551724137931%',
                      		minHeight: '250px',
                      		hover: true,
                      		pagination: false,
                      		loaderColor			: '#1f1f1f', 
                      		loaderBgColor		: 'transparent',
                      		loaderOpacity		: 1,
                      		loaderPadding		: 0,
                      		loaderStroke		: 3,
                      		});
                      });
                   </script>
                   <div class="fluid_container">
                      <div class="camera_container">
                         <div id="camera_wrap_0">
                            <div title="slide-1" data-thumb="images/catalog/slide-1-870x345.jpg" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/slide-1-870x345.jpg">
                               <div class="camera_caption fadeIn">
                                  <h2>iPhone 6</h2>
                                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.</p>
                                  <a href="index.php?route=product/product&product_id=43">Shop now!</a>
                               </div>
                            </div>
                            <div title="slide-2" data-thumb="images/catalog/slide-2-870x345.jpg" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/slide-2-870x345.jpg">
                               <div class="camera_caption fadeIn">
                                  <h2>Smart TV</h2>
                                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.</p>
                                  <a href="index.php?route=product/product&product_id=35">Shop now!</a> 
                               </div>
                            </div>
                            <div title="slide-3" data-thumb="images/catalog/slide-3-870x345.jpg" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/slide-3-870x345.jpg">
                               <div class="camera_caption fadeIn">
                                  <h2>iPad</h2>
                                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.</p>
                                  <a href="index.php?route=product/product&product_id=30">Shop now!</a> 
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="clear"></div>
                   </div>
                   <div id="banner0" class="banners row">
                      <div class="col-sm-6 banner-1">
                         <div class="banner-box">
                            <a class="clearfix" href="index.php?route=product/product&amp;product_id=49">
                               <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/banner-1-420x213.png" alt="banner-1" class="img-responsive"/>
                               <div class="s-desc">
                                  <h2>TV & Video</h2>
                                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.</p>
                                  <p class="link">Shop now!</p>
                               </div>
                            </a>
                         </div>
                      </div>
                      <div class="col-sm-6 banner-1">
                         <div class="banner-box">
                            <a class="clearfix" href="index.php?route=product/product&amp;product_id=43">
                               <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/banner-2-420x213.png" alt="banner-1" class="img-responsive"/>
                               <div class="s-desc">
                                  <h2>Home appliances</h2>
                                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.</p>
                                  <p class="link">Shop now!</p>
                               </div>
                            </a>
                         </div>
                      </div>
                   </div>
                   <div class="box latest">
                      <div class="box-heading">
                         <h3>Latest</h3>
                      </div>
                      <div class="box-content">
                         <div class="latest-scroll">
                            <div>
                               <div class="product-thumb transition maxheight1">
                                  <div class="quick_info">
                                     <div id="quickview_latest_1" class="quickview-style">
                                        <div>
                                           <div class="left col-sm-4">
                                              <div class="quickview_image image">
                                                 <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49"><img alt="Mauris gravida" title="Mauris gravida" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-230x210.png"/></a>
                                              </div>
                                           </div>
                                           <div class="right col-sm-8">
                                              <h2>Mauris gravida</h2>
                                              <div class="inf">
                                                 <p class="product_model model">Model: SAM1</p>
                                                 <div class="price">
                                                    <span class="price-new">$150.00</span> <span class="price-old">$199.99</span>
                                                 </div>
                                              </div>
                                              <div class="cart-button">
                                                 <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('49');">
                                                 <i class="flaticon-shopping232"></i>
                                                 </button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('49');"><i class="fa fa-heart"></i></button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('49');"><i class="fa fa-exchange"></i></button>
                                              </div>
                                              <div class="clear"></div>
                                              <div class="rating">
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              </div>
                                           </div>
                                           <div class="col-sm-12">
                                              <div class="quickview_description description">
                                                 <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                                 <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                    calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                    satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                    on quality of different goods of popular brands. Many of our clients were surprised by the
                                                    incredible assortment of products in our store. You know, we have many devoted customers
                                                    all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                    success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                    present clients, they are so whimsical, but our products are very flexible and reliable. 
                                                 </p>
                                                 <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                    satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                    We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                    scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                    and our products have a great number of options that can really help you. You’ll be amazed
                                                    with its simplicity and durability.
                                                 </p>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="new_pr">New</div>
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">
                                     <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-49-230x210.png" alt="Mauris gravida" title="Mauris gravida" class="img-responsive"/>
                                     </a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        <span class="price-new">
                                        $150.00 </span>
                                        <span class="price-old">
                                        $199.99 </span>
                                     </div>
                                     <div class="name">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=49">
                                        Mauris gravida </a>
                                     </div>
                                     <div class="description">
                                        Comfort is a very important thing nowadays because it is a condition of satisfaction and.. 
                                     </div>
                                  </div>
                                  <div class="cart-button">
                                     <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('49');">
                                     <i class="flaticon-shopping232"></i>
                                     </button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('49');"><i class="flaticon-favorite22"></i></button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('49');"><i class="flaticon-attachment19"></i></button>
                                     <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_latest_1">
                                     <i class="flaticon-tick7"></i>
                                     </a>
                                  </div>
                                  <div class="rating">
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                  </div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div>
                               <div class="product-thumb transition maxheight1">
                                  <div class="quick_info">
                                     <div id="quickview_latest_2" class="quickview-style">
                                        <div>
                                           <div class="left col-sm-4">
                                              <div class="quickview_image image">
                                                 <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=48"><img alt="Praesent imperdiet" title="Praesent imperdiet" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-19-230x210.png"/></a>
                                              </div>
                                           </div>
                                           <div class="right col-sm-8">
                                              <h2>Praesent imperdiet</h2>
                                              <div class="inf">
                                                 <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>
                                                 <p class="product_model model">Model: product 20</p>
                                                 <div class="price">
                                                    $100.00 
                                                 </div>
                                              </div>
                                              <div class="cart-button">
                                                 <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('48');">
                                                 <i class="flaticon-shopping232"></i>
                                                 </button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><i class="fa fa-heart"></i></button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><i class="fa fa-exchange"></i></button>
                                              </div>
                                              <div class="clear"></div>
                                              <div class="rating">
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              </div>
                                           </div>
                                           <div class="col-sm-12">
                                              <div class="quickview_description description">
                                                 <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                                 <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                    calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                    satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                    on quality of different goods of popular brands. Many of our clients were surprised by the
                                                    incredible assortment of products in our store. You know, we have many devoted customers
                                                    all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                    success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                    present clients, they are so whimsical, but our products are very flexible and reliable. 
                                                 </p>
                                                 <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                    satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                    We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                    scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                    and our products have a great number of options that can really help you. You’ll be amazed
                                                    with its simplicity and durability.
                                                 </p>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="new_pr">New</div>
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=48">
                                     <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-19-230x210.png" alt="Praesent imperdiet" title="Praesent imperdiet" class="img-responsive"/>
                                     </a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        $100.00 
                                     </div>
                                     <div class="name">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=48">
                                        Praesent imperdiet </a>
                                     </div>
                                     <div class="description">
                                        Comfort is a very important thing nowadays because it is a condition of satisfaction and.. 
                                     </div>
                                  </div>
                                  <div class="cart-button">
                                     <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('48');">
                                     <i class="flaticon-shopping232"></i>
                                     </button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><i class="flaticon-favorite22"></i></button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><i class="flaticon-attachment19"></i></button>
                                     <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_latest_2">
                                     <i class="flaticon-tick7"></i>
                                     </a>
                                  </div>
                                  <div class="rating">
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                  </div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div>
                               <div class="product-thumb transition maxheight1">
                                  <div class="quick_info">
                                     <div id="quickview_latest_3" class="quickview-style">
                                        <div>
                                           <div class="left col-sm-4">
                                              <div class="quickview_image image">
                                                 <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47"><img alt="Consectetur adipiscing" title="Consectetur adipiscing" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-230x210.png"/></a>
                                              </div>
                                           </div>
                                           <div class="right col-sm-8">
                                              <h2>Consectetur adipiscing</h2>
                                              <div class="inf">
                                                 <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=7">libero convallis</a></p>
                                                 <p class="product_model model">Model: Product 21</p>
                                                 <div class="price">
                                                    <span class="price-new">$60.00</span> <span class="price-old">$100.00</span>
                                                 </div>
                                              </div>
                                              <div class="cart-button">
                                                 <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('47');">
                                                 <i class="flaticon-shopping232"></i>
                                                 </button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i></button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');"><i class="fa fa-exchange"></i></button>
                                              </div>
                                              <div class="clear"></div>
                                              <div class="rating">
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              </div>
                                           </div>
                                           <div class="col-sm-12">
                                              <div class="quickview_description description">
                                                 <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                                 <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                    calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                    satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                    on quality of different goods of popular brands. Many of our clients were surprised by the
                                                    incredible assortment of products in our store. You know, we have many devoted customers
                                                    all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                    success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                    present clients, they are so whimsical, but our products are very flexible and reliable. 
                                                 </p>
                                                 <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                    satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                    We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                    scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                    and our products have a great number of options that can really help you. You’ll be amazed
                                                    with its simplicity and durability.
                                                 </p>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="new_pr">New</div>
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">
                                     <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-10-230x210.png" alt="Consectetur adipiscing" title="Consectetur adipiscing" class="img-responsive"/>
                                     </a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        <span class="price-new">
                                        $60.00 </span>
                                        <span class="price-old">
                                        $100.00 </span>
                                     </div>
                                     <div class="name">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=47">
                                        Consectetur adipiscing </a>
                                     </div>
                                     <div class="description">
                                        Comfort is a very important thing nowadays because it is a condition of satisfaction and.. 
                                     </div>
                                  </div>
                                  <div class="cart-button">
                                     <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('47');">
                                     <i class="flaticon-shopping232"></i>
                                     </button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><i class="flaticon-favorite22"></i></button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');"><i class="flaticon-attachment19"></i></button>
                                     <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_latest_3">
                                     <i class="flaticon-tick7"></i>
                                     </a>
                                  </div>
                                  <div class="rating">
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                  </div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div>
                               <div class="product-thumb transition maxheight1">
                                  <div class="quick_info">
                                     <div id="quickview_latest_4" class="quickview-style">
                                        <div>
                                           <div class="left col-sm-4">
                                              <div class="quickview_image image">
                                                 <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=46"><img alt="Suspendisse imperdiet" title="Suspendisse imperdiet" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-55-230x210.png"/></a>
                                              </div>
                                           </div>
                                           <div class="right col-sm-8">
                                              <h2>Suspendisse imperdiet</h2>
                                              <div class="inf">
                                                 <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=10">Fusce vestibulum</a></p>
                                                 <p class="product_model model">Model: Product 19</p>
                                                 <div class="price">
                                                    $1,000.00 
                                                 </div>
                                              </div>
                                              <div class="cart-button">
                                                 <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('46');">
                                                 <i class="flaticon-shopping232"></i>
                                                 </button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('46');"><i class="fa fa-heart"></i></button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('46');"><i class="fa fa-exchange"></i></button>
                                              </div>
                                              <div class="clear"></div>
                                              <div class="rating">
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              </div>
                                           </div>
                                           <div class="col-sm-12">
                                              <div class="quickview_description description">
                                                 <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                                 <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                    calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                    satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                    on quality of different goods of popular brands. Many of our clients were surprised by the
                                                    incredible assortment of products in our store. You know, we have many devoted customers
                                                    all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                    success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                    present clients, they are so whimsical, but our products are very flexible and reliable. 
                                                 </p>
                                                 <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                    satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                    We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                    scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                    and our products have a great number of options that can really help you. You’ll be amazed
                                                    with its simplicity and durability.
                                                 </p>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="new_pr">New</div>
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=46">
                                     <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-55-230x210.png" alt="Suspendisse imperdiet" title="Suspendisse imperdiet" class="img-responsive"/>
                                     </a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        $1,000.00 
                                     </div>
                                     <div class="name">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=46">
                                        Suspendisse imperdiet </a>
                                     </div>
                                     <div class="description">
                                        Comfort is a very important thing nowadays because it is a condition of satisfaction and.. 
                                     </div>
                                  </div>
                                  <div class="cart-button">
                                     <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('46');">
                                     <i class="flaticon-shopping232"></i>
                                     </button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('46');"><i class="flaticon-favorite22"></i></button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('46');"><i class="flaticon-attachment19"></i></button>
                                     <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_latest_4">
                                     <i class="flaticon-tick7"></i>
                                     </a>
                                  </div>
                                  <div class="rating">
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                  </div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div>
                               <div class="product-thumb transition maxheight1">
                                  <div class="quick_info">
                                     <div id="quickview_latest_5" class="quickview-style">
                                        <div>
                                           <div class="left col-sm-4">
                                              <div class="quickview_image image">
                                                 <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=45"><img alt="Phasellus vel scelerisque" title="Phasellus vel scelerisque" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-37-230x210.png"/></a>
                                              </div>
                                           </div>
                                           <div class="right col-sm-8">
                                              <h2>Phasellus vel scelerisque</h2>
                                              <div class="inf">
                                                 <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>
                                                 <p class="product_model model">Model: Product 18</p>
                                                 <div class="price">
                                                    <span class="price-new">$150.00</span> <span class="price-old">$200.00</span>
                                                 </div>
                                              </div>
                                              <div class="cart-button">
                                                 <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('45');">
                                                 <i class="flaticon-shopping232"></i>
                                                 </button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><i class="fa fa-heart"></i></button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('45');"><i class="fa fa-exchange"></i></button>
                                              </div>
                                              <div class="clear"></div>
                                              <div class="rating">
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              </div>
                                           </div>
                                           <div class="col-sm-12">
                                              <div class="quickview_description description">
                                                 <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                                 <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                    calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                    satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                    on quality of different goods of popular brands. Many of our clients were surprised by the
                                                    incredible assortment of products in our store. You know, we have many devoted customers
                                                    all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                    success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                    present clients, they are so whimsical, but our products are very flexible and reliable. 
                                                 </p>
                                                 <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                    satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                    We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                    scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                    and our products have a great number of options that can really help you. You’ll be amazed
                                                    with its simplicity and durability.
                                                 </p>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="new_pr">New</div>
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=45">
                                     <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-37-230x210.png" alt="Phasellus vel scelerisque" title="Phasellus vel scelerisque" class="img-responsive"/>
                                     </a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        <span class="price-new">
                                        $150.00 </span>
                                        <span class="price-old">
                                        $200.00 </span>
                                     </div>
                                     <div class="name">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=45">
                                        Phasellus vel scelerisque </a>
                                     </div>
                                     <div class="description">
                                        Comfort is a very important thing nowadays because it is a condition of satisfaction and.. 
                                     </div>
                                  </div>
                                  <div class="cart-button">
                                     <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('45');">
                                     <i class="flaticon-shopping232"></i>
                                     </button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><i class="flaticon-favorite22"></i></button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('45');"><i class="flaticon-attachment19"></i></button>
                                     <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_latest_5">
                                     <i class="flaticon-tick7"></i>
                                     </a>
                                  </div>
                                  <div class="rating">
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                     <span class="fa fa-stack">
                                     <i class="fa fa-star fa-stack-2x"></i>
                                     <i class="fa fa-star-o fa-stack-2x"></i>
                                     </span>
                                  </div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                            <div>
                               <div class="product-thumb transition maxheight1">
                                  <div class="quick_info">
                                     <div id="quickview_latest_6" class="quickview-style">
                                        <div>
                                           <div class="left col-sm-4">
                                              <div class="quickview_image image">
                                                 <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=44"><img alt="Donec non posuere" title="Donec non posuere" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-34-230x210.png"/></a>
                                              </div>
                                           </div>
                                           <div class="right col-sm-8">
                                              <h2>Donec non posuere</h2>
                                              <div class="inf">
                                                 <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>
                                                 <p class="product_model model">Model: Product 17</p>
                                                 <div class="price">
                                                    <span class="price-new">$90.00</span> <span class="price-old">$1,000.00</span>
                                                 </div>
                                              </div>
                                              <div class="cart-button">
                                                 <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('44');">
                                                 <i class="flaticon-shopping232"></i>
                                                 </button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('44');"><i class="fa fa-heart"></i></button>
                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('44');"><i class="fa fa-exchange"></i></button>
                                              </div>
                                              <div class="clear"></div>
                                              <div class="rating">
                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              </div>
                                           </div>
                                           <div class="col-sm-12">
                                              <div class="quickview_description description">
                                                 <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                                 <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                    calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                    satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                    on quality of different goods of popular brands. Many of our clients were surprised by the
                                                    incredible assortment of products in our store. You know, we have many devoted customers
                                                    all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                    success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                    present clients, they are so whimsical, but our products are very flexible and reliable. 
                                                 </p>
                                                 <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                    satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                    We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                    scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                    and our products have a great number of options that can really help you. You’ll be amazed
                                                    with its simplicity and durability.
                                                 </p>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="new_pr">New</div>
                                  <div class="image">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=44">
                                     <img src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-34-230x210.png" alt="Donec non posuere" title="Donec non posuere" class="img-responsive"/>
                                     </a>
                                  </div>
                                  <div class="caption">
                                     <div class="price">
                                        <span class="price-new">
                                        $90.00 </span>
                                        <span class="price-old">
                                        $1,000.00 </span>
                                     </div>
                                     <div class="name">
                                        <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=44">
                                        Donec non posuere </a>
                                     </div>
                                     <div class="description">
                                        Comfort is a very important thing nowadays because it is a condition of satisfaction and.. 
                                     </div>
                                  </div>
                                  <div class="cart-button">
                                     <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('44');">
                                     <i class="flaticon-shopping232"></i>
                                     </button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('44');"><i class="flaticon-favorite22"></i></button>
                                     <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('44');"><i class="flaticon-attachment19"></i></button>
                                     <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_latest_6">
                                     <i class="flaticon-tick7"></i>
                                     </a>
                                  </div>
                                  <div class="clear"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <script>
                      if ($('.latest-scroll').length > 0) {
                          $('.latest-scroll').owlCarousel({
                              smartSpeed: 450,
                              dots: false,
                              nav: true,
                              loop: true,
                              navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
                              responsive:{
                                  0:{items:1},
                                  480:{items:2,margin:20},
                                  992:{items: 3,margin: 30}
                              }
                          });
                      
                          $(".quickview").fancybox({
                              maxWidth: 800,
                              maxHeight: 600,
                              fitToView: false,
                              width: '70%',
                              height: '70%',
                              autoSize: false,
                              closeClick: false,
                              openEffect: 'elastic',
                              closeEffect: 'elastic',
                          });
                      }
                   </script>
                   <div class="box featured">
                      <div class="box-heading">
                         <h3>Featured</h3>
                      </div>
                      <div class="box-content">
                         <div class="featured-scroll">
                            <div class="product-thumb transition maxheight2">
                               <div class="quick_info">
                                  <div id="quickview_1" class="quickview-style">
                                     <div>
                                        <div class="left col-sm-4">
                                           <div class="quickview_image image">
                                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=35"><img alt="Aenean viverra" title="Aenean viverra" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-46-230x210.png"/></a>
                                           </div>
                                        </div>
                                        <div class="right col-sm-8">
                                           <h2>Aenean viverra</h2>
                                           <div class="inf">
                                              <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">Donec eu</a></p>
                                              <p class="product_model model">Model: Product 8</p>
                                              <div class="price">
                                                 $100.00 
                                              </div>
                                           </div>
                                           <div class="cart-button">
                                              <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('35');">
                                              <i class="flaticon-shopping232"></i>
                                              </button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('35');"><i class="fa fa-heart"></i></button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('35');"><i class="fa fa-exchange"></i></button>
                                           </div>
                                           <div class="clear"></div>
                                           <div class="rating">
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                           </div>
                                        </div>
                                        <div class="col-sm-12">
                                           <div class="quickview_description description">
                                              <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                              <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                 calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                 satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                 on quality of different goods of popular brands. Many of our clients were surprised by the
                                                 incredible assortment of products in our store. You know, we have many devoted customers
                                                 all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                 success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                 present clients, they are so whimsical, but our products are very flexible and reliable. 
                                              </p>
                                              <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                 satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                 We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                 scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                 and our products have a great number of options that can really help you. You’ll be amazed
                                                 with its simplicity and durability.
                                              </p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="image">
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=35"><img alt="Aenean viverra" title="Aenean viverra" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-46-230x210.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-46-230x210.png"/></a>
                               </div>
                               <div class="caption">
                                  <div class="price">
                                     $100.00 
                                  </div>
                                  <div class="name">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=35">Aenean viverra</a>
                                  </div>
                                  <div class="description">
                                     Comfort is a very important thing nowadays because it is a condition of satisfaction and..
                                  </div>
                               </div>
                               <div class="cart-button">
                                  <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('35');">
                                  <i class="flaticon-shopping232"></i>
                                  </button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('35');"><i class="flaticon-favorite22"></i></button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('35');"><i class="flaticon-attachment19"></i></button>
                                  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_1">
                                  <i class="flaticon-tick7"></i>
                                  </a>
                               </div>
                               <div class="rating">
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                               </div>
                            </div>
                            <div class="product-thumb transition maxheight2">
                               <div class="quick_info">
                                  <div id="quickview_2" class="quickview-style">
                                     <div>
                                        <div class="left col-sm-4">
                                           <div class="quickview_image image">
                                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=42"><img alt="Lorem ipsum" title="Lorem ipsum" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-22-230x210.png"/></a>
                                           </div>
                                        </div>
                                        <div class="right col-sm-8">
                                           <h2>Lorem ipsum</h2>
                                           <div class="inf">
                                              <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>
                                              <p class="product_model model">Model: Product 15</p>
                                              <div class="price">
                                                 <span class="price-new">$90.00</span> <span class="price-old">$100.00</span>
                                              </div>
                                           </div>
                                           <div class="cart-button">
                                              <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42');">
                                              <i class="flaticon-shopping232"></i>
                                              </button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                           </div>
                                           <div class="clear"></div>
                                           <div class="rating">
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                           </div>
                                        </div>
                                        <div class="col-sm-12">
                                           <div class="quickview_description description">
                                              <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                              <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                 calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                 satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                 on quality of different goods of popular brands. Many of our clients were surprised by the
                                                 incredible assortment of products in our store. You know, we have many devoted customers
                                                 all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                 success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                 present clients, they are so whimsical, but our products are very flexible and reliable. 
                                              </p>
                                              <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                 satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                 We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                 scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                 and our products have a great number of options that can really help you. You’ll be amazed
                                                 with its simplicity and durability.
                                              </p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="sale">Sale</div>
                               <div class="image">
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=42"><img alt="Lorem ipsum" title="Lorem ipsum" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-22-230x210.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-22-230x210.png"/></a>
                               </div>
                               <div class="caption">
                                  <div class="price">
                                     <span class="price-new">$90.00</span> <span class="price-old">$100.00</span>
                                  </div>
                                  <div class="name">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=42">Lorem ipsum</a>
                                  </div>
                                  <div class="description">
                                     Comfort is a very important thing nowadays because it is a condition of satisfaction and..
                                  </div>
                               </div>
                               <div class="cart-button">
                                  <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42');">
                                  <i class="flaticon-shopping232"></i>
                                  </button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="flaticon-favorite22"></i></button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="flaticon-attachment19"></i></button>
                                  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_2">
                                  <i class="flaticon-tick7"></i>
                                  </a>
                               </div>
                               <div class="rating">
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                               </div>
                            </div>
                            <div class="product-thumb transition maxheight2">
                               <div class="quick_info">
                                  <div id="quickview_3" class="quickview-style">
                                     <div>
                                        <div class="left col-sm-4">
                                           <div class="quickview_image image">
                                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=30"><img alt="Dolor sit amet" title="Dolor sit amet" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-230x210.png"/></a>
                                           </div>
                                        </div>
                                        <div class="right col-sm-8">
                                           <h2>Dolor sit amet</h2>
                                           <div class="inf">
                                              <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=9">Quisque sodales</a></p>
                                              <p class="product_model model">Model: Product 3</p>
                                              <div class="price">
                                                 <span class="price-new">$80.00</span> <span class="price-old">$100.00</span>
                                              </div>
                                           </div>
                                           <div class="cart-button">
                                              <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');">
                                              <i class="flaticon-shopping232"></i>
                                              </button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
                                           </div>
                                           <div class="clear"></div>
                                           <div class="rating">
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                           </div>
                                        </div>
                                        <div class="col-sm-12">
                                           <div class="quickview_description description">
                                              <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                              <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                 calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                 satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                 on quality of different goods of popular brands. Many of our clients were surprised by the
                                                 incredible assortment of products in our store. You know, we have many devoted customers
                                                 all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                 success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                 present clients, they are so whimsical, but our products are very flexible and reliable. 
                                              </p>
                                              <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                 satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                 We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                 scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                 and our products have a great number of options that can really help you. You’ll be amazed
                                                 with its simplicity and durability.
                                              </p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="sale">Sale</div>
                               <div class="image">
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=30"><img alt="Dolor sit amet" title="Dolor sit amet" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-230x210.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-230x210.png"/></a>
                               </div>
                               <div class="caption">
                                  <div class="price">
                                     <span class="price-new">$80.00</span> <span class="price-old">$100.00</span>
                                  </div>
                                  <div class="name">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=30">Dolor sit amet</a>
                                  </div>
                                  <div class="description">
                                     Comfort is a very important thing nowadays because it is a condition of satisfaction and..
                                  </div>
                               </div>
                               <div class="cart-button">
                                  <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');">
                                  <i class="flaticon-shopping232"></i>
                                  </button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="flaticon-favorite22"></i></button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="flaticon-attachment19"></i></button>
                                  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_3">
                                  <i class="flaticon-tick7"></i>
                                  </a>
                               </div>
                               <div class="rating">
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                               </div>
                            </div>
                            <div class="product-thumb transition maxheight2">
                               <div class="quick_info">
                                  <div id="quickview_4" class="quickview-style">
                                     <div>
                                        <div class="left col-sm-4">
                                           <div class="quickview_image image">
                                              <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=41"><img alt="Lorem euismod" title="Lorem euismod" class="img-responsive" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-230x210.png"/></a>
                                           </div>
                                        </div>
                                        <div class="right col-sm-8">
                                           <h2>Lorem euismod</h2>
                                           <div class="inf">
                                              <p class="quickview_manufacture manufacture manufacture">Brand: <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Lorem ipsum</a></p>
                                              <p class="product_model model">Model: Product 14</p>
                                              <div class="price">
                                                 <span class="price-new">$90.00</span> <span class="price-old">$100.00</span>
                                              </div>
                                           </div>
                                           <div class="cart-button">
                                              <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('41');">
                                              <i class="flaticon-shopping232"></i>
                                              </button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><i class="fa fa-heart"></i></button>
                                              <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('41');"><i class="fa fa-exchange"></i></button>
                                           </div>
                                           <div class="clear"></div>
                                           <div class="rating">
                                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                              <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                           </div>
                                        </div>
                                        <div class="col-sm-12">
                                           <div class="quickview_description description">
                                              <iframe src="<?= get_bloginfo("template_url"); ?>/http://www.youtube.com/embed/-ZrfXDeLBTU?rel=0&amp;controls=0&amp;showinfo=0" allowfullscreen="" frameborder="0" height="315" width="560"></iframe>
                                              <p><b>Comfort is a very important</b> thing nowadays because it is a condition of satisfaction and
                                                 calmness. It is clear that our way of life must be as comfortable as possible. Home electronics
                                                 satisfy our wishes and make our life more pleasant. We must admit that our way of life depends
                                                 on quality of different goods of popular brands. Many of our clients were surprised by the
                                                 incredible assortment of products in our store. You know, we have many devoted customers
                                                 all over the world, and this fact proves that we sell only quality commodities. Recipe of our
                                                 success is a fair price and premium quality. We understand that it is very complicated to amaze
                                                 present clients, they are so whimsical, but our products are very flexible and reliable. 
                                              </p>
                                              <p><b>Here you can find something more</b> than just home electronics; you can find real comfort and
                                                 satisfaction here! Our goods are the combination of perfect design and an ideal functionality.
                                                 We have a tremendous variety of different models. Nowadays clients’ claims become so
                                                 scrupulous that sometimes it is very hard to satisfy them. But we provide only real bestsellers
                                                 and our products have a great number of options that can really help you. You’ll be amazed
                                                 with its simplicity and durability.
                                              </p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="sale">Sale</div>
                               <div class="image">
                                  <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=41"><img alt="Lorem euismod" title="Lorem euismod" class="img-responsive lazy" data-src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-230x210.png" src="<?= get_bloginfo("template_url"); ?>/images/catalog/product-13-230x210.png"/></a>
                               </div>
                               <div class="caption">
                                  <div class="price">
                                     <span class="price-new">$90.00</span> <span class="price-old">$100.00</span>
                                  </div>
                                  <div class="name">
                                     <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=product/product&amp;product_id=41">Lorem euismod</a>
                                  </div>
                                  <div class="description">
                                     Comfort is a very important thing nowadays because it is a condition of satisfaction and..
                                  </div>
                               </div>
                               <div class="cart-button">
                                  <button class="btn btn-add" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('41');">
                                  <i class="flaticon-shopping232"></i>
                                  </button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><i class="flaticon-favorite22"></i></button>
                                  <button class="btn btn-icon" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('41');"><i class="flaticon-attachment19"></i></button>
                                  <a class="quickview quickview-latest btn" data-toggle="tooltip" title="Quick View" rel="group" href="#quickview_4">
                                  <i class="flaticon-tick7"></i>
                                  </a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <script>
                      if ($('.featured-scroll').length > 0) {
                          $('.featured-scroll').owlCarousel({
                              smartSpeed: 450,
                              dots: false,
                              nav: true,
                              loop: true,
                              navClass: ['owl-prev fa fa-angle-up', 'owl-next fa fa-angle-down'],
                              responsive:{
                                  0:{items:1},
                                  480:{items:2,margin:20},
                                  992:{items: 3,margin: 30}
                              }
                          });
                      
                          $(".quickview").fancybox({
                              maxWidth: 800,
                              maxHeight: 600,
                              fitToView: false,
                              width: '70%',
                              height: '70%',
                              autoSize: false,
                              closeClick: false,
                              openEffect: 'elastic',
                              closeEffect: 'elastic',
                          });
                      
                      }
                   </script>
                </div>
             </div>
          </div>
       </div>
       <div class="content_bottom">
          <div class="box_html About">
             <div class="container">
                <div class="row">
                   <div class="col-sm-6">
                      <h5>About</h5>
                      <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                   </div>
                   <div class="col-sm-6">
                      <h5>Events</h5>
                      <ul class="events">
                         <li>
                            <p> <a href="#"><span class="fa fa-truck"></span> Ctetur adipisicing.</a> Lorem ipsum dolor sit amet conse ctetur adipisicing elit. </p>
                         </li>
                         <li>
                            <p> <a href="#"><span class="fa fa-refresh"></span> Vostrud exercitation </a> Ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                         </li>
                         <li>
                            <p> <a href="#"><span class="fa fa-thumbs-o-up"> </span> Dolore eu fugiat nulla</a> Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <footer>
          <div class="container">
             <div class="row">
                <div class="col-sm-12">
                   <div class="footer-line"></div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4">
                   <div class="footer_box">
                      <h5>Information</h5>
                      <ul class="list-unstyled">
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
                   </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4">
                   <div class="footer_box">
                      <h5>Customer Service</h5>
                      <ul class="list-unstyled">
                         <li>
                            <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/contact">Contact Us</a>
                         </li>
                         <li>
                            <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/return/add">Returns</a>
                         </li>
                         <li>
                            <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=information/sitemap">Site Map</a>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4">
                   <div class="footer_box">
                      <h5>Extras</h5>
                      <ul class="list-unstyled">
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
                   </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4">
                   <div class="footer_box">
                      <h5>My Account</h5>
                      <ul class="list-unstyled">
                         <li>
                            <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/account">My Account</a>
                         </li>
                         <li>
                            <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/order">Order History</a>
                         </li>
                         <li>
                            <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/wishlist">Wish List</a>
                         </li>
                         <li>
                            <a href="http://livedemo00.template-help.com/opencart_52995/index.php?route=account/newsletter">Newsletter</a>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-lg-2 col-md-2 col-sm-4 border">
                   <div class="footer_box">
                      <h5>Follow Us</h5>
                      <ul class="list-unstyled social">
                         <li>
                            <a href="http://www.facebook.com/"><span class="fa fa-facebook"></span>Facebook </a>
                         </li>
                         <li>
                            <a href="http://www.twitter.com/"><span class="fa fa-twitter"></span>Twitter</a>
                         </li>
                         <li>
                            <a href="http://plus.google.com/"><span class="fa fa-google-plus"></span>Google +</a>
                         </li>
                         <li>
                            <a href="http://www.youtube.com/"><span class="fa fa-youtube"></span>YouTube</a>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="clear"></div>
             </div>
          </div>
          <div class="copyright">
             <div class="container">
                <div class="row">
                   <div class="col-sm-12">
                      <div class="footer-line"></div>
                   </div>
                </div>
                <img src="<?= get_bloginfo("template_url"); ?>/images/footer-logo.png" alt=""/>Powered By <a href="http://www.opencart.com">OpenCart</a><br/> Electronics online store &copy; 2016 
             </div>
          </div>
       </footer>
       <script src="<?= get_bloginfo("template_url"); ?>/js/livesearch.js" type="text/javascript"></script>
       <script src="<?= get_bloginfo("template_url"); ?>/js/script.js" type="text/javascript"></script>
    </div>
    <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
       f[z]=function(){
       (a.s=a.s||[]).push(arguments)};var a=f[z]._={
       },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
       f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
       0:+new Date};a.P=function(u){
       a.p[u]=new Date-a.p[0]};function s(){
       a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
       hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"http://",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
       return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
       b.src="<?= get_bloginfo("template_url"); ?>/javascript:false"}b.allowTransparency="true";v[j](b);try{
       b.contentWindow[g].open()}catch(w){
       c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
       var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
       b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
       loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
       /* custom configuration goes here (www.olark.com/documentation) */
       olark.identify('7830-582-10-3714');/*]]>*/
    </script>
    <noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
    <script type="text/javascript">/* CloudFlare analytics upgrade */</script>
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"72d7dcce33","applicationID":"1388850","transactionName":"ZV1TZ0FTVkFVWkwKXlwXZEFaHVdCUVdbAkNGZwQBCgsNHV1XXAZJHEhZQw==","queueTime":0,"applicationTime":336,"atts":"SRpQEQlJRU8=","errorBeacon":"bam.nr-data.net","agent":""}</script>
 </body>
 <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-N7VWVN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push( {'gtm.start': new Date().getTime(),event:'gtm.js'} );var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='http://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-N7VWVN');</script>  
</html>
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/home3-boxed.html   11 Nov 2019 12:24:28 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Shop Kun</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/favicon.png" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="assets/css/plugins.css">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/sweetalert.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"> </script>

</head>

<body class="template-index belle home3-boxed-layout">
<div id="pre-loader">
    <img src="assets/images/loader.gif" alt="Loading..." />
</div>
<div class="pageWrapper">
  <div class="layout-boxed">

    <?php require_once('header_footer/header.php'); ?>





  <?php require_once('dieuhuong.php'); ?>






<?php require_once('header_footer/footer.php'); ?>
<!-- Including Jquery -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery.cookie.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/instagram-feed.js"></script>
<!-- Including Javascript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/lazysizes.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/sweetalert2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.0/dist/sweetalert2.all.min.js"></script>
<!-- Photoswipe Gallery -->
<script src="assets/js/vendor/photoswipe.min.js"></script>
<script src="assets/js/vendor/photoswipe-ui-default.min.js"></script>
<!--Instagram Js-->
<script>
var userFeed = new Instafeed({
 get: 'user',
 userId: '8983165779',
 accessToken: '8983165779.1677ed0.f3242e4ff60b428a81c25d118e02f44f',
 resolution: 'low_resolution',
 sortBy: 'most-recent',
 limit: 8,
 template: '<div class="insta-img"><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div>',
});
userFeed.run();
</script>
<!--End Instagram Js-->
<!--For Newsletter Popup-->
<script>
jQuery(document).ready(function(){
 jQuery('.closepopup').on('click', function () {
   jQuery('#popup-container').fadeOut();
   jQuery('#modalOverly').fadeOut();
 });

 var visits = jQuery.cookie('visits') || 0;
 visits++;
 jQuery.cookie('visits', visits, { expires: 1, path: '/' });
 console.debug(jQuery.cookie('visits'));
 if ( jQuery.cookie('visits') > 1 ) {
 jQuery('#modalOverly').hide();
 jQuery('#popup-container').hide();
 } else {
   var pageHeight = jQuery(document).height();
   jQuery('<div id="modalOverly"></div>').insertBefore('body');
   jQuery('#modalOverly').css("height", pageHeight);
   jQuery('#popup-container').show();
 }
 if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
});

jQuery(document).mouseup(function(e){
 var container = jQuery('#popup-container');
 if( !container.is(e.target)&& container.has(e.target).length === 0)
 {
 container.fadeOut();
 jQuery('#modalOverly').fadeIn(200);
 jQuery('#modalOverly').hide();
 }
});
</script>
<!--End For Newsletter Popup-->
<script>
$(function(){
    var $pswp = $('.pswp')[0],
        image = [],
        getItems = function() {
            var items = [];
            $('.lightboximages a').each(function() {
                var $href   = $(this).attr('href'),
                    $size   = $(this).data('size').split('x'),
                    item = {
                        src : $href,
                        w: $size[0],
                        h: $size[1]
                    }
                    items.push(item);
            });
            return items;
        }
    var items = getItems();

    $.each(items, function(index, value) {
        image[index]     = new Image();
        image[index].src = value['src'];
    });
    $('.prlightbox').on('click', function (event) {
        event.preventDefault();

        var $index = $(".active-thumb").parent().attr('data-slick-index');
        $index++;
        $index = $index-1;

        var options = {
            index: $index,
            bgOpacity: 0.9,
            showHideOpacity: true
        }
        var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
        lightBox.init();
    });
});
</script>

</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
          <div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div>
        </div>
</body>

<!-- belle/home3-boxed.html   11 Nov 2019 12:24:38 GMT -->
</html>

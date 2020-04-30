<!DOCTYPE html>
<html>
<head>
    <title>City furniture</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Lavish Plot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="city/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="city/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="city/css/flexslider.css" type="text/css" media="screen" />
    <link href="city/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="city/css/lightbox.css">
    @if(App::isLocale('en'))
    <link href="city/css/style.css" rel="stylesheet" type="text/css" media="all" />
    @elseif(App::isLocale('ar'))
    <link href="city/css/style-ar.css" rel="stylesheet" type="text/css" media="all" />
    @endif
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!--//fonts-->

</head>
<body>
<!--banner start here-->
<div class="banner" id="home">
    <div class="agileinfo-dot">
        <div class="header">
            <div class="header-main">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a  href="/"><h1><img src="city/images/logo.jpg" id="sc-logo"></h1></a>
                        </div>
                        <!-- navbar-header -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <img src="city/images/logo.jpg" id="logo">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="scroll hvr-underline-from-center"><a href="index.html">@lang('home.home')</a></li>
                                <li><a class="scroll hvr-underline-from-center" href="#aboutt">@lang('home.about')</a></li>
                                <li><a class="scroll hvr-underline-from-center" href="#property">@lang('home.product')</a></li>
                                <li><a class="scroll hvr-underline-from-center" href="#contact">@lang('home.contact')</a></li>
                                @if(App::isLocale('en'))
                                <li><a class=" hvr-underline-from-center" href="{{url('/.ar')}}"><img src="city/images/egypt.jpg" id="lang"></a></li>
                                @elseif(App::isLocale('ar'))
                                    <li><a class="hvr-underline-from-center" href="{{url('/.en')}}"><img src="city/images/usa.png" id="lang"></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </nav>


                    <div class="clearfix"> </div>
                </div>
            </div>
            @yield('content')



        <!--footer-->
            <div class="copy">
                <p>© 2018 City furniture . All Rights Reserved | Design by <a href="http://online.knocktarget.com/business/">Knock target</a> </p>
            </div>
            <!--/footer -->

            <!-- js -->
            <script type="text/javascript" src="city/js/jquery-2.1.4.min.js"></script>


            <!-- FlexSlider -->
            <script defer src="city/js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(function(){
                });
                $(window).load(function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- FlexSlider -->
            <script src="city/js/lightbox-plus-jquery.min.js"> </script>
            <!-- required-js-files-->
            <script src="city/js/owl.carousel.js"></script>
            <script>
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items :3,
                        itemsDesktop : [768,2],
                        itemsDesktopSmall : [414,2],
                        lazyLoad : true,
                        autoPlay : true,
                        navigation :true,
                        navigationText :  false,
                        pagination : true,
                    });
                });
            </script>
            <!--//required-js-files-->
            <!-- clients-slider-script -->
            <script src="city/js/slideshow.min.js"></script>
            <script src="city/js/launcher.js"></script>
            <!-- //clients-slider-script -->

            <!-- start-smoth-scrolling -->
            <script type="text/javascript" src="city/js/move-top.js"></script>
            <script type="text/javascript" src="city/js/easing.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
            <script>
                $(function(){
                    $(this).scroll(function(){
                        if($(this).scrollTop() > 600){
                            $(".header-main").css("opacity","1");
                        }
                        else
                        {
                            $(".header-main").css("opacity","0.8");
                        }
                    });
                });
            </script>
            <!-- start-smoth-scrolling -->
            <!-- smooth scrolling -->
            <script type="text/javascript">
                $(document).ready(function() {
                    /*
                        var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                        };
                    */
                    $().UItoTop({ easingType: 'easeOutQuart' });
                });
            </script>


            <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
            <!-- //smooth scrolling -->
            <script src="city/js/bootstrap.js"></script>

</body>
</html>
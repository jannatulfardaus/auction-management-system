
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Online Auction System</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('/frontend/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('/frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section">
    
    @include('Frontend.partials.header')
    
    @yield('slider')
    </div>
    
	@yield('contents')
    
    @include('Frontend.partials.footer')

	<!-- section footer end -->
	


      <!-- Javascript files-->
      <script src="{{url('/Frontend/js/jquery.min.js')}}"></script>
<script src="{{url('/frontend/js/popper.min.js')}}"></script>
<script src="{{url('/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('/frontend/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{url('/frontend/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{url('/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{url('/frontend/js/custom.js')}}"></script>
<!-- javascript -->
<script src="{{url('/frontend/')}}js/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });


        $('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function (event) {

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function (event) {

                var yMove = event.originalEvent.touches[0].pageY;
                if (Math.floor(yClick - yMove) > 1) {
                    $(".carousel").carousel('next');
                } else if (Math.floor(yClick - yMove) < -1) {
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function () {
                $(this).off("touchmove");
            });
        });
</script>
</body>
</html>

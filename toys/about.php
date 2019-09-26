<?php
include "Header.php";
include "Footer.php"
?>

<!DOCTYPE html>
<html lang="zxx">
<head></head>
<body style="background: url(images/abut.jpg);background-repeat: no-repeat;background-size: 100% 350%">
<!--headder-->

<!--//headder-->
<!-- banner -->
<div class="page-banner2 one-img">
</div>
<!--//banner -->
<!-- short -->
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
            <li>
                <a href="index.html">Home</a>
                <span>/ /</span>
            </li>
            <li>About</li>
        </ul>
    </div>
</div>
<!-- //short-->
<!--About -->
<section class="about py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Us</h3><br>
        <div class="about-innergrid-agile text-center">
            <h4>Welcome To Rooms and Meals</h4><br><br>
            <p class="mb-3"> RoomsAndMeals's mission is to become a
                leading international brand which
                allows users to locate accommodation
                or a specific meal with a click of a button.
                We have a whole set of "out of the box"
                ideas to reach our mission and our vision is to;
                simplify and modernize how humans use to find a place to
                stay or to locate a place to enjoy a meal of their choice
            </p>
            <p class="mb-3">
                Visionary behind RoomsAndMeals is a final
                year Undergraduate Engineering Student who
                completed his internship attached to a fortune 500
                company project. Like all the trees which grow for
                great heights take longer time in order to have a strong
                root system to support the tree, RoomsAndMeals will be
                moving at a slower pace at the beginning, but we are
                expected to stretch our legs and reach great heights in years to come
            </p><br><br>
            <div class=" img-toy-w3l-top">
        </div><br><br>
        <div class="about-sub-inner text-center mt-lg-4 mt-3">
            <h4>
            </h4>
            <div class="row">
                <div class="social-icons col-lg-3 col-md-3 abut-gride ">
                    <li><a href="http://www.facebook.com"><img src='images/facebook.png' /></a></li><br><br>
                    <h6>  Rooms and Meals facebook Page</h6>
                </div>
                <div class="social-icons col-lg-3 col-md-3 abut-gride">
                    <li><a href="http://www.twitter.com"><img src='images/twitter.png' /></a></li><br><br>
                    <h6>  Rooms and Meals twitter Profile</h6>
                </div>
                <div class="social-icons col-lg-3 col-md-3 abut-gride">
                    <li><a href="http://www.instargram.com"><img src='images/instagram.png' /></a></li><br><br>
                    <h6>  Rooms and Meals instargram Profile</h6>
                </div>
                <div class="social-icons col-lg-3 col-md-3 abut-gride">
                    <li><a href="http://www.youtube.com"><img src='images/youtube.png' /></a></li><br><br>
                    <h6>  Rooms and Meals youtube channel</h6>

                </div>
            </div>
        </div>
    </div>
</section>
<!--//about -->
<!--Customers Review -->

<!--//Customers Review -->
<!--subscribe-address-->

<!--//subscribe-address-->

<!--//subscribe-->
<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- Footer Logo -->
            <div class="col-lg- footer_col"></div>

            <!-- Footer Menu -->
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg nav-tabs">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="">
                        <ul class="navbar-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="careers.php" class="nav-link">Careers</a>
                            </li>

                            <li class="nav-item">
                                <a href="terms.php" class="nav-link">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a href="about.php" class="nav-link">About Us</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Footer Contact -->

        </div>
    </div>
</footer>
<!-- //footer -->
<!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- //Modal 1-->
<!--js working-->
<script src='js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    toys.render();

    toys.cart.on('toys_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!--bootstrap working-->
<script src="js/bootstrap.min.js"></script>
<!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
</body>
</html>

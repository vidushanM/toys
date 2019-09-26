<?php
include "Header.php";
include "Footer.php"
?>

<!DOCTYPE html>
<html lang="zxx">
<head></head>
<body style="background: url(images/careers.jpg);background-repeat: no-repeat;background-size: 100% 100%">
<!--headder-->

<!--//headder-->
<!-- banner -->
<div class="page-banner1 one-img">
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
            <li>Careers</li>
        </ul>
    </div>
</div>
<!-- //short-->
<!--About -->
<section class="about py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Careers</h3>
        <br>
        <div class="about-innergrid-agile text-center">
            <h4>Welcome To Rooms And Meals</h4>
            <br><br>
            <p class="mb-3"> We are looking for talented, enthusiastic and passionate individuals who are determined
                to deliver results and grow with us and share in our success.
                We are looking for those individuals who are confident about
                realising our vision and execute our every mission with an unwavering
                commitment and utmost passion for excellence.
            </p>
            <p class="mb-3">At RoomsAndMeals.com, we provide our people the opportunity
                to explore their ability, while engaging in challenging and interesting
                functions. We believe in exercising freedom of thought, creativity,
                integrity, accountability and above all - teamwork.
            </p>
            <p class="mb-3">
            If you are passionate about being a part of our team of professionals, send in your resume to :
            </p>
        </div>
        <br><br>
        <h6 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Careers Form</h6>
        <div class="about-sub-inner text-center mt-lg-4 mt-3">
            <div class="contact-list-grid">
                <form action="#" method="post">
                    <div class=" agile-wls-contact-mid">
                        <div class="form-group contact-forms">
                            <input type="text" class="form-control" placeholder="Name"  pattern="[a-zA-Z\s]+" required>
                        </div>
                        <div class="form-group contact-forms">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group contact-forms">
                            <input type="tel" class="form-control" placeholder="Phone"  pattern="^\d{10}$" required>
                        </div>
                        <div class="form-group contact-forms">
                            <textarea class="form-control" rows="3" placeholder="remarks" required></textarea>
                        </div>
                        <button type="submit" value="submit" id="submit" class="btn btn-block sent-butnn">Send</button>
                    </div>
                </form>
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
            <div class="modal-body"></div>
            <div class="modal-footer"></div>
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

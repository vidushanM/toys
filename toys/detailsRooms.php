<?php
include "Header.php"
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Rooms and Meals</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content=""/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" href="css/shop.css" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

    <link href="css/style1.css" rel='stylesheet' type='text/css' media="all">

    <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>
<div class="inner_page-banner one-img">
</div>
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
            <li>
                <a href="index.html">Home</a>
                <span>/ /</span>
            </li>
            <li>Rooms</li>
        </ul>
    </div>
</div>
<section class="banner-bottom py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-shop pt-lg-4 pt-3">
            <div class="row">
                <div class="col-lg-4 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider1">
                            <ul class="slides">
                                <li data-thumb="images/v3.jpg">
                                    <div class="thumb-image"> <img src="images/v3.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                </li>
                                <li data-thumb="images/v1.jpg">
                                    <div class="thumb-image"> <img src="images/v1.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                </li>
                                <li data-thumb="images/v2.jpg">
                                    <div class="thumb-image"> <img src="images/v2.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                    <h3>Shangri-La Hotels</h3>
                    <p><span class="item_price">Rs 15000</span>
                        <del>Rs 19000</del>
                    </p>

                    <div class="color-quality">
                        <div class="row">
                            <label for="meeting-time">Check in time:</label>

                            <input type="datetime-local" id="meeting-time"
                                   name="meeting-time" value="2018-06-12T19:30"
                                   min="2019-06-07T00:00" max="2020-06-14T00:00">


                            <label for="meeting-time">Check out time:</label>
                            <input type="datetime-local" id="meeting-time"
                                   name="meeting-time" value="2019-06-12T19:30"
                                   min="2019-06-07T00:00" max="2020-06-14T00:00">
                        </div>
                    </div>

                    <div class="color-quality">
                        <div class="row">
                            <div class="color-quality-right">
                                <h5>Single bed rooms :</h5>
                                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="null">0</option>
                                    <option value="null">1</option>
                                    <option value="null">2</option>
                                    <option value="null">3</option>
                                </select>
                            </div>
                            <div class="color-quality-right">
                                <h5>Single bed rooms :</h5>
                                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="null">0</option>
                                    <option value="null">1</option>
                                    <option value="null">2</option>
                                    <option value="null">3</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="occasional">
                        <h5>Types :</h5>
                        <div class="colr ert">
                            <label class="custom-checkbox"><input type="checkbox" name="radio" checked=""><i></i>Free cancellation</label>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="occasion-cart">
                        <div class="toys single-item singlepage">
                            <form method="post">

                                <button type="submit">
                                    Send details
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="clearfix"> </div>

            </div>
        </div>
    </div>
</section>

<script src="js/jquery-2.2.3.min.js"></script>

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

<script src="js/jquery-ui.js"></script>
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider1').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->
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
<!-- //smooth-scrolling-of-move-up -->
<!--bootstrap working-->
<script src="js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
</body>
</html>
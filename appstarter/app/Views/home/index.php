<!DOCTYPE html>
<?php
/***
 * Created by Patrick
 *
 * 
 * E-Mail: admin@pkarungari.co.ke
 */
?>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $site_title ?? "Home - Swadakta";?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" href="<?php echo base_url("favicon.ico")?>">
        <!-- all additional css -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/elements.css")?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/color-variation.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/style.css") ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css") ?>">
        <!-- modernizr js -->
        <script src="<?php echo base_url("assets/js/vendor/modernizr-2.8.3.min.js") ?>"></script>
        <style>
        .scrollbar {


            overflow-y: scroll;
            /* Add the ability to scroll */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        </style>

    </head>

    <body class="scrollbar">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- prelaoder start -->

        <?php if ($wrapper)
        {
            echo '<div  id="preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>';
            }
            else
            {
                
            }
            ?>
        <!-- prelaoder end -->
        <!-- page wrapper start -->
        <div id="page-top" class="wrapper">
            <!-- header area start -->
            <header class="home-style-2 mb1-">
                <nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="1">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navigation" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand h-65 mh-65" href="<?php echo site_url('home') ?>
        "><img src=" <?php echo base_url("assets/img/logo/swad_logo.png")?> " alt="logo"
                                    class="mh-50 img-responsive"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li id="home" class=""><a href="<?php echo site_url('home') ?>
">Home</a></li>
                                <li id="services" class=""><a href="<?php echo site_url('services') ?>
">Services</a></li>
                                <li id="about"><a href="<?php echo site_url('about') ?>
">About</a></li>
                                <li id="contact"><a href="<?php echo base_url('contact') ?>
">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- header area end -->
            <div class="mt-1">
                <?php
                    bootstrap_alerts();
                    echo $_html_content;
                ?>
            </div>

            <!-- footer area start -->
            <footer id="footer-area" class="home-style-2">
                <div class="container">
                    <ul class="social list-inline text-center home-style-2">
                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                    </ul>
                    <div class="copyright text-center">
                        <p>Copyright @ 2021 <a href="http://pkarungari.co.ke/" target="_blank">Patrick Karungari</a>
                            All
                            rights
                            reserved.</p>
                    </div>
                </div>
            </footer>
            <!-- footer area end -->
        </div>
        <!-- page wrapper end -->
        <!-- All Js files-->

        <script src="<?php echo base_url("assets/js/vendor/jquery-1.12.4.min.js") ?>
"></script>
        <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>
"></script>
        <script src="<?php echo base_url("assets/js/slick.min.js") ?>
"></script>
        <script src="<?php echo base_url("assets/js/swiper.min.js") ?>
"></script>
        <script src="<?php echo base_url("assets/js/plugins.js") ?>
"></script>
        <script src="<?php echo base_url("assets/js/ajax-mail.js") ?>
"></script>
        <script src="<?php echo base_url("assets/js/ajax-subscribe.js") ?>
"></script>
        <!-- map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8hjTJwTaYk3q7ccXZ9SNl5F9Ey6UPEhg"></script>
        <script src="<?php echo base_url("assets/js/appai.map-2.js") ?>
"></script>
        <script src="<?php echo base_url("assets/js/main.js") ?>
"></script>
        <script>
        $(document).ready(function() {
            var urlBits = document.URL.split('/');
            var current = urlBits[urlBits.length - 1];
            $('a[href="' + current + '"').parent('li').removeClass('active');
            $('a[href="' + current + '"').parent('li').addClass('active');
        });
        </script>
    </body>

</html>

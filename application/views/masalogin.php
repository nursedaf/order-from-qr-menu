<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cafe Denizlim</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--		 Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">
    <script src="<?php echo base_url(); ?>js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=3.0'></script>

</head>

<body class="intro-fullscreen fixed-footer scroll-down yo-anim-enabled">
    <div class="content-wrapper">
        <!--content-->

        <?php $this->load->view('menu/menunav.php'); ?>
        <div class="section-intro" data-opacity-start="30" data-opacity-end="100" data-background="<?php echo base_url(); ?>img/demo/menu-bg.jpg">

            <div class="pre-content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="parallax-element-first"> <?php echo $this->session->userdata("masano"); ?> </h1>
                            <?php $masaKontrol = $this->HomeModel->getGeneral("masa", array("id" => $this->session->userdata("masaid"), "durum" => 1));
                            if ($masaKontrol) {
                                redirect('menu');
                            } else {
                              
                            } ?>

                            <p class="parallax-element-second"> Lütfen Bekleyin...</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="arrow1 arrow-section hidden-xs" href="#">
                <i class="fa fa-angle-down"></i>
            </a>
            <a class="arrow2 arrow-section hidden-xs" href="#">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
        <div class="section-space"></div>


        <div id="footer-spacer"></div>
        <footer id="footer" class="text-center">

            <a href="" class="to-the-top">
                <i class="fa fa-arrow-circle-o-up"></i>
            </a>

            <a href=<?php echo base_url("masano/masa/") . $this->session->userdata("masaid"); ?>>
                <h2>Cafe Denizlim</h2>
            </a>
            <div>
                <?php echo $this->session->userdata("masano"); ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center v-card">

                        <div class="col-sm-6 col-lg-3">
                            <div class="open-daily">
                                <span class="day">24 Saat Açık</span>
                                <span class="hours">Open 24 Hours</span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="simple-contact">
                                <span class="mobile"><a href="tel:+90546 264 74 34">+90546 264 74 34</a></span>
                                <span class="email"><a href="mailto:tunahan258@gmail.com.tr">tunahan258@gmail.com.tr</a></span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="simple-contact">
                                <span class="address">Otopark</span>
                                <span class="email"><a href="http://tunahanotopark.blogspot.com">tunahanotopark</a></span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="open-daily">
                                <span class="day">Social Media</span>
                                <span class="hours"><a href="https://www.facebook.com/cafedenizlim/">Facebook</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <div class="gallery-wrapper"></div>


    </div>
    <script src="<?php echo base_url(); ?>js/browser.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.ba-throttle-debounce.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.smooth-scroll.js"></script>
    <script src="<?php echo base_url(); ?>js/matchmedia.js"></script>
    <script src="<?php echo base_url(); ?>js/enquire.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.velocity.min.js"></script>
    <script src="<?php echo base_url(); ?>js/waypoints.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.backstretch.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.parallaxify.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.imagesloaded.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.unveil.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.fullPage.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.mixitup.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>

<!-- Mirrored from demo.yosoftware.com/html/berg/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Aug 2021 08:09:44 GMT -->

</html>
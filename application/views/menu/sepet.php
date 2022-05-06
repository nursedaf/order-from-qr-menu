<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Siparişleriniz</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--		 Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="<?php echo base_url(); ?>js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=3.0'></script>

</head>

<body class="show-nav yo-anim-enabled">
    <div class="content-wrapper">
        <!--content-->
        <?php $this->load->view('menu/menunav.php'); ?>

        <div class="section-intro section-intro-half" data-opacity-start="100" data-opacity-end="10" data-background="">

        </div>
        <div class="section-space"></div>

        <section id="cart" class="section-scroll main-section shop">

            <header class="section-header">
                <h2>Sepet</h2>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="cart-products">
                        <div class="container">
                            <div class="row cart-header">
                                <div class="col-xs-4 col-sm-5">
                                    <h5 class="product-name">Ürün Adı</h5>
                                </div>
                                <div class="col-xs-2">
                                    <h5 class="product-price">Birim Fiyat</h5>
                                </div>
                                <div class="col-xs-2">
                                    <h5 class="product-quantity">Adet</h5>
                                </div>
                                <div class="col-xs-2">
                                    <h5 class="product-subtotal">Toplam Fiyat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <?php
                        $toplam = 0;
                        if ($sepet) {
                            foreach ($sepet as $row) {
                                $urunBilgisi = $this->HomeModel->getGeneral("menu", array("id" => $row->urun_id));

                                $toplam = $toplam + ($urunBilgisi->fiyat * $row->adet);
                        ?>
                                <div class="row cart-item" id="roww<?php echo $row->sepet_id; ?>">
                                    <div class="col-xs-4 col-sm-5 product-name">
                                        <a href="" class="product-thumbnail"><img src="<?php echo base_url($urunBilgisi->foto); ?>" class="" alt=""></a>
                                        <a href="" class="name"><?php echo $urunBilgisi->ad; ?></a>

                                    </div>
                                    <div class="col-xs-2 product-position product-price">
                                        <span class="amount"><?php echo $urunBilgisi->fiyat; ?> TL</span>
                                    </div>
                                    <div class="col-xs-2 product-position product-quantity">
                                        <div class="quantity">
                                            <input type="text" step="1" name="qty<?php echo $row->urun_id; ?>" value="<?php echo $row->adet; ?>" title="Qty" class="input-text qty text" data-id="<?php echo $row->masano; ?>" data-urun="<?php echo $row->urun_id; ?>" data-type="qty" size="5">
                                        </div>
                                    </div>
                                    <div class="col-xs-2 product-position product-subtotal">
                                        <span class="amount qty<?php echo $row->urun_id; ?>"><?php echo number_format($urunBilgisi->fiyat * $row->adet, 2, ',', '.'); ?> TL</span>
                                    </div>
                                    <div class="col-xs-1 product-position product-remove">
                                        <a href="#" class="remove" data-djax-exclude="true" title="Remove this item" data-id="<?php echo $row->sepet_id; ?>" data-type="delete"><i class="icon-close"></i></a>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>


                        <?php if ($sepet) { ?>

                            <div class="row cart-subtotal">
                                <div class="col-xs-2 col-xs-offset-6 col-sm-offset-7 subtotal-txt">
                                    <span>Toplam:</span>
                                </div>
                                <div class="col-xs-2 subtotal">
                                    <span class="amount toplam"><?php echo number_format($toplam, 2, ',', '.'); ?> TL</span>
                                </div>
                            </div>
                            <div class="row cart-buttons">
                                <div class="col-xs-12">
                                    <a href="menu" class="btn btn-dark  continue-shopping">Sipariş vermeye devam et</a>
                                    <div class="product-btn">
                                        <a href="#" class="btn btn-default" data-id="<?php echo $row->masano; ?>" data-type="clear">Sepeti Temizle</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row cart-buttons">
                                <div class="col-xs-12">

                                    <div class="product-btn">
                                        <a href="" class="btn btn-color" data-id="<?php echo $row->masano; ?>" data-urun="<?php echo $row->urun_id; ?>" data-sepet="<?php echo $row->sepet_id; ?>" data-type="tamam">Sipariş Ver</a>
                                    </div>
                                </div>
                            </div>
                        <?php } else echo 'SEPETİNİZ BOŞ';  ?>
                    </div>
                </div>
            </div>

        </section>

        <div id="footer-spacer"></div>
        <footer id="footer" class="text-center">

            <a href="#" class="to-the-top">
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

    <script>
        $(document).on('change', '[data-type="qty"]', function() { //sepetteki ürün adedi değiştir

            var masano = $(this).data('id');
            var urun = $(this).data('urun');
            var qty = $("input[name='qty" + urun + "']").val();


            $.ajax({
                url: "<?php echo base_url('Menu/adet'); ?>",
                type: 'POST',
                //dataType: 'json',
                data: {
                    masano: masano,
                    qty: qty,
                    urun: urun,
                },
                success: function(data) {
                    data = JSON.parse(data);
                    $(".qty" + urun).html(data.urunToplami + " TL");
                    $(".toplam").html(data.toplam + " TL");
                }
            });

        });
    </script>
    <script>
        $(document).on('click', '[data-type="delete"]', function() { //sepetteki ürünü sil

            var id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url('Menu/delete'); ?>",
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(data) {
                    $("#roww" + id).remove();
                }
            });

        });
    </script>

    <script>
        $(document).on('click', '[data-type="clear"]', function() { //sepeti boşalt

            var id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url('Menu/clear'); ?>",
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(data) {
                    location.reload(true);
                }
            });

        });
    </script>

    <script>
        $(document).on('click', '[data-type="tamam"]', function() { //sepeti tamamla

            var id = $(this).data('id');
    
            $.ajax({
                url: "<?php echo base_url('Menu/tamam'); ?>",
                type: 'POST',
                data: {
                    id: id,
                    
                },
                success: function(data) {
                  window.location.href="https://cafedenizli.nursedaf.com/kafe3/hesap";
                }
            });

        });
    </script>

</body>


</html>
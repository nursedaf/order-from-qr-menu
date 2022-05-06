<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?php echo base_url(); ?>assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->

                    <?php echo $this->session->userdata("user")->ad; ?>
                    <!--end::Logo-->
                    <?php $this->load->view('templates/garsonnav.php'); ?>
                    <!--begin::Container-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="col-xl-4">
                                    <?php if ($this->session->flashdata('msg')) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo $this->session->flashdata('msg'); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">Aktif Siparişler</span>
                                    </h3>

                                    <div class="card-toolbar">
                                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                            <!--begin::Trigger Modal-->
                                            <a href="#" class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#exampleModalCustomScrollable">Yeni Ekle</a>
                                            <!--end::Trigger Modal-->
                                            <!--begin::Modal Content-->
                                            <div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Yeni Ekle
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php
                                                            $grup = $this->GarsonModel->urun("grup");
                                                            ?>
                                                            <div data-scroll="true" data-height="380">
                                                                <form class="form pt-9" action="<?php echo base_url('Garson/new'); ?>" method="POST">
                                                                    <div class="form-group">
                                                                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Masa No</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Masa Numarası" name="masano" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Kategori</label>
                                                                        <div class="col-lg-9 col-xl-6">

                                                                            <select class="form-control" id="grup">
                                                                                <option value="">Kategori Seç</option>
                                                                                <?php foreach ($grup as $g) : ?>
                                                                                    <option value="<?php echo $g->id; ?>"><?php echo $g->ad; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Ürün</label>
                                                                        <div class="col-lg-9 col-xl-6">

                                                                            <select class="form-control" id="menu" name="urun">
                                                                                <option value="">Ürün Seç</option>
                                                                                <!-- kategori seçildiğinde enabled olacak -->
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-xl-3 col-lg-3 text-right col-form-label">Adet</label>
                                                                        <div class="col-lg-9 col-xl-6">
                                                                            <input class="form-control form-control-lg form-control-solid" type="number" placeholder="adet" name="adet" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Vacgeç</button>
                                                                        <button type="submit" class="btn btn-primary font-weight-bold">Ekle</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Modal Content-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">

                                    <!--begin: Datatable-->

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Masa</th>
                                                <th scope="col">Durum</th>
                                                <th scope="col">Siparişi Durumu</th>
                                                <th scope="col">Masayı Kapat</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($masa as $row) { ?>

                                                <tr id="roww<?php echo $row->id; ?>">

                                                    <td><?php echo $row->masano; ?></td>
                                                    <?php $siparisBilgi = $this->GarsonModel->getGeneral("siparis", array("masa_no" => $row->id)); ?>
                                                    <td>
                                                        <select class="custom-select form-control" onchange="durumDegistir(this);" name="durum<?php echo $row->id; ?>">

                                                            <option <?php if (!$siparisBilgi) echo "selected"; ?> value="0">Yok</option>
                                                            <option <?php if ($siparisBilgi->durum == "1") echo "selected"; ?> value="1">Alındı</option>
                                                            <option <?php if ($siparisBilgi->durum == "2") echo "selected"; ?> value="2">Hazırlanıyor</option>
                                                            <option <?php if ($siparisBilgi->durum == "3") echo "selected"; ?> value="3">Masada</option>
                                                            <option <?php if ($siparisBilgi->durum == "4") echo "selected"; ?> value="4">İptal</option>
                                                        </select>

                                                    </td>
                                                    <td>
                                                        <!--begin::Trigger Modal-->
                                                        <a href="#" class="btn btn-outline-info btn-sm " aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#exampleModalCustomScrollable<?php echo $row->id; ?>">Detay</a>
                                                        <!--end::Trigger Modal-->
                                                        <!--begin::Modal Content-->
                                                        <div class="modal fade" id="exampleModalCustomScrollable<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">

                                                                <div class="modal-content">
                                                                    <div class="modal-header">

                                                                        <div>
                                                                            <span class="label label-light-primary font-weight-bold label-inline">Masa No:</span> <?php echo $row->masano; ?>
                                                                            <span class="label label-light-primary font-weight-bold label-inline">Garson: </span> <?php echo $this->session->userdata("user")->ad; ?>
                                                                            <span class="label label-light-primary font-weight-bold label-inline">Zaman: </span>

                                                                        </div>


                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <div data-scroll="true" data-height="300">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Ürün</th>
                                                                                        <th scope="col">Adet</th>
                                                                                        <th scope="col">Fiyat</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <?php $siparisBilgi = $this->GarsonModel->getAllGeneral("siparis", array("masa_no" => $row->id));

                                                                                foreach ($siparisBilgi as $s) {
                                                                                    $urunBilgi = $this->GarsonModel->getGeneral("menu", array("id" => $s->urun_id));
                                                                                ?>
                                                                                    <tbody>
                                                                                        <td><?php echo $urunBilgi->ad; ?></td>
                                                                                        <td><?php echo $s->adet; ?></td>
                                                                                        <td><?php echo $s->toplam; ?> TL</td>
                                                                                    </tbody>
                                                                                <?php  } ?>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div class="col-md-12">
                                                                            <div class="float-left">
                                                                                <span class="label label-light-primary font-weight-bold label-inline">SİPARİŞ NOTU:</span>
                                                                                <span>yok</span>
                                                                            </div>
                                                                            <div class="float-left">
                                                                                <span class="label label-light-primary font-weight-bold label-inline"> TOPLAM FİYAT: </span>
                                                                                <?php
                                                                                $toplam = 0;
                                                                                foreach ($siparisBilgi as $s) {
                                                                                    $toplam = $toplam + $s->toplam;
                                                                                }
                                                                                echo $toplam;
                                                                                ?>
                                                                                TL
                                                                            </div>
                                                                            <div class="navi-item my-2 float-right">
                                                                                <a href=""  class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#exampleModalCustomScrollable2">
                                                                                    <span class="navi-icon mr-4">
                                                                                        <i class="fa flaticon2-plus "></i>
                                                                                    </span>
                                                                                    <span class="navi-text font-weight-bolder font-size-lg">Ürün Ekle</span>
                                                                                </a>
                                                                                <!--begin::Modal Content-->
                                                                                <div class="modal fade" id="exampleModalCustomScrollable2" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="exampleModalLabel">Yeni Ekle
                                                                                                </h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <?php
                                                                                                $grup = $this->GarsonModel->urun("grup");
                                                                                                ?>
                                                                                                <div data-scroll="true" data-height="380">
                                                                                                    <form class="form pt-9" action="<?php echo base_url('Garson/new'); ?>" method="POST">
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Masa No</label>
                                                                                                            <div class="col-lg-9 col-xl-6">
                                                                                                                <input class="form-control form-control-lg form-control-solid" type="text" readonly name="masano" value="<?php echo $row->id; ?>" />
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group">
                                                                                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Kategori</label>
                                                                                                            <div class="col-lg-9 col-xl-6">

                                                                                                                <select class="form-control" id="grup2">
                                                                                                                    <option value="">Kategori Seç</option>
                                                                                                                    <?php foreach ($grup as $g) : ?>
                                                                                                                        <option value="<?php echo $g->id; ?>"><?php echo $g->ad; ?></option>
                                                                                                                    <?php endforeach; ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Ürün</label>
                                                                                                            <div class="col-lg-9 col-xl-6">

                                                                                                                <select class="form-control" id="menu2" name="urun">
                                                                                                                    <option value="">Ürün Seç</option>
                                                                                                                    <!-- kategori seçildiğinde enabled olacak -->
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group">
                                                                                                            <label class="col-xl-3 col-lg-3 text-right col-form-label">Adet</label>
                                                                                                            <div class="col-lg-9 col-xl-6">
                                                                                                                <input class="form-control form-control-lg form-control-solid" type="number" placeholder="adet" name="adet" />
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Vacgeç</button>
                                                                                                            <button type="submit" class="btn btn-primary font-weight-bold">Ekle</button>
                                                                                                        </div>

                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Modal Content-->
                                                    </td>
                                                    <td>
                                                        <i class="btn btn-light-warning btn-sm font-weight-bold mr-2" data-id="<?php echo $row->id; ?>" data-masa='kapat'>Kapat</i>
                                                    </td>
                                                </tr>

                                            <?php }
                                            //$urunBilgi = $this->HomeModel->getGeneral("menu", array("id" => $sepetUrun->urun_id)); 
                                            ?>

                                            <?php
                                            ?>

                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->

                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->

                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
        </div>
    </div>
    </div>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?php echo base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?php echo base_url(); ?>assets/js/pages/custom/education/school/students.js"></script>
    <!--end::Page Scripts-->
    <script>
        $(document).on('click', '[data-masa="kapat"]', function() {
            if (confirm('Masa Kapatılsın mı?')) {
                var id = $(this).data('id');
                $.ajax({
                    url: "<?php echo base_url('Garson/masakapat'); ?>",
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        $("#roww" + id).remove();
                    }
                });
            }
        });

        function durumDegistir(secilenbox) {
            var nameDurum = secilenbox.name;
            var valDurum = secilenbox.value;
            $.ajax({
                url: "<?php echo base_url('Garson/durumDegistir'); ?>",
                type: 'POST',
                data: {
                    id: nameDurum,
                    durum: valDurum
                },
                success: function(data) {
                    console.log(data);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#grup').on('change', function() {
                var category_id = this.value;

                $.ajax({
                    url: "<?php echo base_url('Garson/urun'); ?>",
                    type: "POST",
                    data: {
                        category_id: category_id
                    },
                    cache: false,
                    success: function(result) {
                        $("#menu").html(result);
                    }
                });
            });
        });

        $(document).ready(function() {
            $('#grup2').on('change', function() {
                var category_id = this.value;

                $.ajax({
                    url: "<?php echo base_url('Garson/urun'); ?>",
                    type: "POST",
                    data: {
                        category_id: category_id
                    },
                    cache: false,
                    success: function(result) {
                        $("#menu2").html(result);
                    }
                });
            });
        });
    </script>

</body>

</html>
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
                    <a href="<?php echo base_url(); ?>" class="brand-logo">
                        <img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-light.png" />
                    </a>
                    <!--end::Logo-->
                    <?php echo $this->session->userdata("user")->ad;?>
                    <?php $this->load->view('templates/adminnav.php'); ?>

                    <!--begin::Container-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Teachers-->

                            <!--begin::Content-->
                            <div class="flex-row-fluid ml-lg-8"></div>

                            <div class="col-xl-4">
                                <?php if ($this->session->flashdata('msg')) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                <?php } ?>

                                <!--begin::List Widget 3-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0">
                                        <h3 class="card-title font-weight-bolder text-dark">Garsonlar</h3>
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                <!--begin::Trigger Modal-->
                                                <a href="#" class="btn btn-warning btn-shadow font-weight-bold mr-2" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#exampleModalCustomScrollable">Yeni Ekle</a>
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
                                                                <div data-scroll="true" data-height="380">
                                                                    <form class="form pt-9" action="<?php echo base_url(); ?>Admin/new" method="POST">
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Ad</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Ad" name="kullanici_adi" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Yetki</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="1-2-3" name="yetki" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Şifre</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="şifre belirle" name="password" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Telefon</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <div class="input-group input-group-lg input-group-solid">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">
                                                                                            <i class="la la-phone"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="telefon" placeholder="Telefon" />
                                                                                </div>

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
                                    <div class="card-body pt-2">
                                        <!--begin::Item-->
                                        <?php foreach ($users as $row) {  ?>

                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="<?php echo base_url(); ?>assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="">
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg"><?php echo $row->ad; ?></a>
                                                </div>
                                                <!--end::Text-->
                                                <a href="#" class="btn btn-success font-weight-bolder font-size-sm" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#exampleModalCustomScrollable2<?php echo $row->id; ?>">Düzenle</a>
                                                <!--end::Trigger Modal-->

                                                <!--begin::Modal Content-->
                                                <div class="modal fade" id="exampleModalCustomScrollable2<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel" data-duzen="düzenle">Düzenle
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div data-scroll="true" data-height="420">
                                                                    <form class="form pt-9">
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Ad</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <input class="form-control form-control-lg form-control-solid" type="text" id="newad<?php echo $row->id; ?>" name="ad" value="<?php echo $row->ad; ?>" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Yetki</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <input class="form-control form-control-lg form-control-solid" type="text" id="newyetki<?php echo $row->id; ?>" name="yetki" value="<?php echo $row->yetki; ?>" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Şifre</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <input class="form-control form-control-lg form-control-solid" type="password" id="newsifre<?php echo $row->id; ?>" name="password" value="<?php echo $row->password; ?>" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Durum</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <input class="form-control form-control-lg form-control-solid" type="text" id="newdurum<?php echo $row->id; ?>" name="status" value="<?php echo $row->status; ?>" />
                                                                            </div>

                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-xl-3 col-lg-3 text-left col-form-label">Telefon</label>
                                                                            <div class="col-lg-9 col-xl-6">
                                                                                <div class="input-group input-group-lg input-group-solid">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">
                                                                                            <i class="la la-phone"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control form-control-lg form-control-solid" id="telef10<?php echo $row->id; ?>" name="telefon" value="<?php echo $row->telefon; ?>" />
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Vacgeç</button>
                                                                            <button type="button" onclick="tikla('<?php echo $row->id; ?>');" class="btn btn-primary font-weight-bold">Değişiklikleri Kaydet</button>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Modal Content-->
                                            </div>
                                        <?php } ?>
                                        <!--end::Item-->


                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::List Widget 3-->
                            </div>

                            <!--end::Content-->
                        </div>
                        <!--end::Teachers-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->


            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        function tikla(id) {

            var ad = document.getElementById('newad' + id).value;
            var yetki = document.getElementById('newyetki' + id).value;
            var password = document.getElementById('newsifre' + id).value;
            var status = document.getElementById('newdurum' + id).value;
            var telefon = document.getElementById('telef10' + id).value;

            $.ajax({
                url: "<?php echo base_url(); ?>Admin/update",
                type: 'POST',
                data: {
                    id: id,
                    ad: ad,
                    yetki: yetki,
                    password: password,
                    status: status,
                    telefon: telefon
                },
                success: function(data) {
                    $("#exampleModalCustomScrollable2" + id).modal('hide');
                }
            });
        }
    </script>

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
</body>

</html>
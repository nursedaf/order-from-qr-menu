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
                    <a href="index.php" class="brand-logo">
                        <img alt="Logo" src="<?php echo base_url(); ?>assets/media/logos/logo-light.png" />
                    </a>
                    <!--end::Logo-->
                    <?php echo $this->session->userdata("user")->ad;?>
                    <?php $this->load->view('templates/garsonnav.php'); ?>
                    <!--begin::Container-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">Masa Aç</span>
                                    </h3>
                                    <span>Açılmayı Bekleyen Masalar</span>
                                    <div class="card-toolbar">
                                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
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
                                                <th scope="col">Masa No</th>
                                                <th scope="col">Aç</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($masa as $row) { ?>

                                                <tr id="roww<?php echo $row->id; ?>">
                                                    <td><?php echo $row->masano; ?></td>
                                                    <td>
                                                        <i class="btn btn-light-warning btn-sm font-weight-bold mr-2" data-id="<?php echo $row->id; ?>" data-masa='ac'>Aç</i>
                                                    </td>
                                                </tr>

                                            <?php } ?>

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
        $(document).on('click', '[data-masa="ac"]', function() {
            var id = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url("Garson/masaac"); ?>",
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
</body>

</html>
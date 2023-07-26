<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head>
    <title>پنل مدیریت هتل</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{asset('admin-panel')}}/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('admin-panel')}}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('admin-panel')}}/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-panel')}}/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('admin-panel/assets/css/persian-datepicker.css')}}"/>
    <script src="{{asset('admin-panel/assets/js/persian-date.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin-panel/assets/js/persian-datepicker.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".input-date").pDatepicker({
                initialValue: false,
                format: 'YYYY/MM/DD',
            });
        });
    </script>
</head>
<!--end::Head-->


<!--begin::Body-->
<body id="kt_body">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">

    {{-- Sidebar --}}

    <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                        <!--begin::Heading-->
                        <h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1"></h1>
                        <!--end::Heading-->
                    </div>
                    <!--end::Page title=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex d-lg-none align-items-center ms-n3 me-2">
                        <!--begin::کناری mobile toggle-->
                        <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                    </svg>
                                </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::کناری mobile toggle-->
                        <!--begin::Logo-->
                        <a href="#" class="d-flex align-items-center">
                            <img alt="Logo" src="{{asset('common-assets/images/logo.png')}}" class="h-30px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::بالاbar-->
                    <div class="d-flex align-items-center flex-shrink-0">
                    </div>
                    <!--end::بالاbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->

            <!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-fluid" id="kt_content_container">
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                    <a href="#" class="mb-12 d-none d-sm-block">
                        <img alt="Logo" src="{{asset('common-assets/images/logo.png')}}" class="h-50px" />
                    </a>
                    <div class="row w-50">
                        <div class=" bg-body col-md-12 rounded shadow-sm p-10 p-lg-15 mx-auto">
                            <form class="login-form" novalidate="novalidate" id="kt_sign_in_form" action="#" method="post">
                                <div class="d-flex justify-content-center">
                                    <p class="text-dark title">ورود  به هتل</p>
                                </div>
                                <div class="row">
                                    <div class="col mt-20">
                                        <div class="fv-row mb-20">
                                            <label class="form-label fs-6 fw-bolder text-dark">ایمیل</label>
                                            <input class="form-control form-control-lg form-control-solid p-5" type="email" name="email" autocomplete="off"/>
                                        </div>
                                        <div class="fv-row mb-20">
                                            <div class="d-flex flex-stack mb-2">
                                                <label class="form-label fw-bolder text-dark fs-6 mb-0">کلمه عبور</label>
                                                 <a href="#" class="link-danger fs-6 fw-bolder">رمز خود را فراموش کردید؟</a>
                                            </div>
                                            <input class="form-control form-control-lg form-control-solid p-5" type="password" name="password" autocomplete="off" />
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg form-btn w-100 mb-5 p-5">
                                                <span class="indicator-label">ورود به سیستم</span>
                                                <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col d-none d-sm-block">
                                        <img src="{{asset('common-assets/images/login.jpg')}}" class="mx-auto" alt="Login" width="400px" height="400px">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row flex-stack">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <a href="https://rihanet.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">هتل داد</a>
                    </div>
                    <!--end::Copyright-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->

<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('admin-panel')}}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{asset('admin-panel')}}/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset('admin-panel')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page سفارشی Javascript(used by this page)-->
<script src="{{asset('admin-panel')}}/assets/js/custom/apps/ecommerce/catalog/categories.js"></script>
<script src="{{asset('admin-panel')}}/assets/js/widgets.bundle.js"></script>
<script src="{{asset('admin-panel')}}/assets/js/custom/widgets.js"></script>
<script src="{{asset('admin-panel')}}/assets/js/custom/apps/chat/chat.js"></script>
<script src="{{asset('admin-panel')}}/assets/js/custom/utilities/modals/users-search.js"></script>

<script src="https://unpkg.com/persian-date@1.1.0/dist/persian-date.min.js"></script>
<script src="https://unpkg.com/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>

<!--end::Page custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>

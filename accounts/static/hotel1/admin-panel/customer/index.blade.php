<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl" >
<!--begin::Head-->
<head>
    <title>پنل مدیریت هتل داد</title>
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
    <!--begin::کناری-->
        <div id="kt_aside" class="aside pt-7 pb-4 pb-lg-7 pt-lg-17" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
            <!--begin::Brو-->
            <div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="#">
                    <img alt="Logo" src="{{asset('common-assets/images/logo.png')}}" class="h-40px logo" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Brو-->
            <!--begin::کناری menu-->
            <div class="aside-menu flex-column-fluid ps-3 ps-lg-5 pe-1 mb-9" id="kt_aside_menu">
                <!--begin::کناری Menu-->
                <div class="w-100 hover-scroll-overlay-y pe-2 me-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_user, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="0">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-rounded fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                                <span class="menu-title">رزرو ها</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">اتاق ها</span>
                        <span class="menu-arrow"></span>
                    </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                        <span class="menu-title">انواع اتاق</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                        <span class="menu-title">لیست همه اتاق ها</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                                <span class="menu-title">گزارشات</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">مشتریان</span>
                    </span>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">مدیران</span>
                        <span class="menu-arrow"></span>
                    </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                        <span class="menu-title">نقش ها</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                        <span class="menu-title">لیست مدیران</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                        <span class="menu-title">گفتگو مدیران</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                                <span class="menu-title">تنظیمات</span>
                            </a>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::کناری Menu-->
            </div>
            <!--end::کناری menu-->
            <!--begin::Footer-->
            <div class="aside-footer flex-column-auto px-6 px-lg-9" id="kt_aside_footer">
                <!--begin::کاربر panel-->
                <div class="d-flex flex-stack ms-7">
                    <form action="#" method="post">
                        @csrf
                        <button class="btn btn-sm btn-icon btn-active-color-primary btn-icon-gray-600 btn-text-gray-600">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                            <span class="svg-icon svg-icon-1 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor" />
                            <path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor" />
                            <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
                        </svg>
                    </span>
                            <!--end::Svg Icon-->
                            <!--begin::Major-->
                            <span class="d-flex flex-shrink-0 fw-bolder">خروج از پنل</span>
                            <!--end::Major-->
                        </button>
                        <!--end::Link-->
                    </form>
                </div>
                <!--end::کاربر panel-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::کناری-->


        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                        <!--begin::Heading-->
                        <h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">رزروها</h1>
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
        <!--begin::دسته بندی-->
        <div class="card card-flush shadow-sm">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::جستجو-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                        </svg>
                    </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="جستجو" />
                    </div>
                    <!--end::جستجو-->
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Add customer-->
                    <a href="#" class="btn add-btn">رزرو جدید</a>
                <!--end::Add customer-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="#">
                    <!--begin::Table head-->
                    <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-150px">آیدی</th>
                        <th class="min-w-150px">مشتری</th>
                        <th class="min-w-150px">نوع اتاق</th>
                        <th class="min-w-150px">شماره موبایل</th>
                        <th class="min-w-150px">تاریخ ورود</th>
                        <th class="min-w-150px">تاریخ خروج</th>
                        <th class="text-end min-w-70px">عملیات</th>
                    </tr>
                    <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
{{--                    @foreach($customers as $customer)--}}
                    <tr>
                        <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <!--end::Checkbox-->
                        <td>
                            <div class="text-muted fs-7 fw-bolder">111</div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <div class="ms-5">
                                    <div class="text-muted fs-7 fw-bolder">علی</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="text-muted fs-7 fw-bolder">تک نفره</div>
                        </td>
                        <td>
                            <div class="text-muted fs-7 fw-bolder">09134570057</div>
                        </td>
                        <td>
                            <div class="text-muted fs-7 fw-bolder">1400/1/1</div>
                        </td>
                        <td>
                            <div class="text-muted fs-7 fw-bolder">1401/1/1</div>
                        </td>
                        <!--begin::عملیات=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="btn px-3 d-flex justify-content-start">ویرایش</a>
                                </div>
                                <div class="menu-item px-3">
                                    <button type="submit" class="btn px-3 d-flex justify-content-start" onclick="">حذف</button>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::عملیات=-->
                    </tr>
{{--                    @endforeach--}}
                    </tbody>
                    <!--end::Table body-->
                </table>
            <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::دسته بندی-->
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

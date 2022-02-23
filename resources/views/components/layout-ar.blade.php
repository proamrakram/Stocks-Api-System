<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>أسعار الاسهم</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard-rtl/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .textCenter {
            text-align: center;
        }

        .link {

            color: black;
        }

        a:link {
            /* text-decoration: none; */
            font-weight: bold;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            background-color: rgb(108, 248, 150);
        }
        .gainers {
            color: green;
        }

        .losers {
            color: red;
        }

        .activeLink {
            text-decoration: underline;
            background-color: rgb(98, 183, 248);
            font-size: 15px;
            font-weight: 200;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dropdown.css') }}">
    <link href="{{ asset('assets/dashboard/css/ar_dashboard.css') }}" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">اسم الشركة</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="عرض/إخفاء لوحة التنقل">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="بحث" aria-label="بحث">

        <div class=" dropdown nav-item text-nowrap">
            <a href="javascript:void(0)" class="dropbtn nav-link px-3">اللغة</a>
            <div class="dropdown-content">
                <a href="{{ route('ar_dashboard') }}">العربية</a>
                <a href="{{ route('dashboard_en') }}">الانجليزية</a>
            </div>
        </div>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="nav-link px-3" type="submit" style="all: unset; cursor:pointer; color:white;"
                        href="{{ route('logout') }}">تسجيل الخروج</button>
                </form>

            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'ar_dashboard')  activeLink @endif" aria-current="page"
                                href="{{ route('ar_dashboard') }}">
                                <span><img
                                        src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/25/000000/external-dashboard-marketing-xnimrodx-lineal-color-xnimrodx.png" /></span>
                                لوحة القيادة
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'ar_StocksView')  activeLink @endif" href="{{ route('ar_StocksView') }}">
                                <span><img src="https://img.icons8.com/fluency/25/000000/stocks-growth.png" /></span>
                                أسعار الاسهم
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'ar_CurrenciesView')  activeLink  @endif " href="{{ route('ar_CurrenciesView') }}">
                                <span><img
                                        src="https://img.icons8.com/external-soft-fill-juicy-fish/25/000000/external-currencies-money-soft-fill-soft-fill-juicy-fish.png" /></span>
                                أسعار العملات الورقية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'ar_cryptoCurrencies')  activeLink @endif " href="{{ route('ar_cryptoCurrencies') }}">
                                <span><img src="https://img.icons8.com/color/25/000000/bitcoin--v1.png" /></span>
                                أسعار العملات الرقمية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'reports_ar') active activeLink @endif" href="#">
                                <span><img
                                        src="https://img.icons8.com/external-soft-fill-juicy-fish/25/000000/external-online-digital-nomad-soft-fill-soft-fill-juicy-fish-10.png" /></span>
                                التقارير
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                التكاملات
                            </a>
                        </li> --}}
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>التقارير المحفوظة</span>
                        <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                الشهر الحالي
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                الربع الأخير
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                التفاعل الإجتماعي
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                مبيعات نهاية العام
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            {{ $slot }}
        </div>
    </div>


    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/dashboard/js/dashboard.js') }}"></script>
</body>

</html>

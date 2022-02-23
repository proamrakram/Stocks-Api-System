<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>أسعار الاسهم</title>
    <link href="{{ asset('assets/dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dropdown.css') }}">
    <link href="{{ asset('assets/dashboard/css/dashboard_Ar.css') }}" rel="stylesheet">

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
            text-decoration: none;
            font-weight: bold;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            background-color: aquamarine;
        }

        a:active {
            text-decoration: underline;
        }

        .gainers {
            color: green;
        }

        .losers {
            color: red;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/dropdown.css') }}">
    <link href="{{ asset('assets/dashboard/css/dashboard_Ar.css') }}" rel="stylesheet">
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
                <a href="{{ route('dashboard_ar') }}">العربية</a>
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
                            <a class="nav-link @if (Route::currentRouteName() == 'dashboard_ar') active @endif" aria-current="page"
                                href="{{ route('dashboard_ar') }}">
                                <span data-feather="home"></span>
                                لوحة القيادة
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'stocks_ar') active @endif" href="{{ route('stocks_ar') }}">
                                <span data-feather="file"></span>
                                أسعار الاسهم
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'products_ar') active @endif " href="#">
                                <span data-feather="shopping-cart"></span>
                                أسعار العملات الورقية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'customers_ar') active @endif " href="#">
                                <span data-feather="users"></span>
                                أسعار العملات الرقمية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::currentRouteName() == 'reports_ar') active @endif" href="#">
                                <span data-feather="bar-chart-2"></span>
                                التقارير
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                التكاملات
                            </a>
                        </li>
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



            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

                {{-- <h2>جدول الطلبات</h2> --}}
                <div class="table-responsive">
                    {{-- @if (middelware()) --}}

                    {{-- @endif --}}

                    <h1 style="margin-top: 10px;">
                        <pre style="text-align: right;" ><span style=" font-size: 20px; @if ($stock->change_percent > 0) color: green; @endif @if ($stock->change_percent < 0) color: red; @endif " >({{$stock->change_percent}})</span> <span style=" font-size: 25px; @if ($stock->change_percent > 0) color: green; @endif @if ($stock->change_percent < 0) color: red; @endif ">{{$stock->change}}</span> {{$stock->symbol}}</pre>
                    </h1>


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">سعر السهم</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">الرسم البياني</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">تاريخ الاسعار</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="futures-tab" data-bs-toggle="tab"
                                data-bs-target="#futures" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">العقود الاجلة</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-bordered">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" style="width: 150px;" >سعر الافتتاح</th>
                                        <td  style="width: 150px;">{{$stock->open}}</td>
                                        <th  style="width: 150px;">سعر الاغلاق الاخير</th>
                                        <td  style="width: 150px;">{{$stock->previous_close}}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" style="width: 150px;" >أعلى سعر</th>
                                        <td  style="width: 150px;">{{$stock->high}}</td>
                                         <th scope="row" style="width: 150px;" >أخر تحديث</th>
                                        <td  style="width: 150px;">{{$stock->latest_trading_day}}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" style="width: 150px;" >أدنى سعر</th>
                                        <td  style="width: 150px;">{{$stock->low}}</td>
                                        <th  style="width: 150px;">حجم التداول</th>
                                        <td  style="width: 150px;">{{$stock->volume}}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" style="width: 150px;" >معدل التغير</th>
                                        <td  style=" width: 150px; @if ($stock->change > 0) color: green; @endif @if ($stock->change < 0) color: red; @endif ">{{$stock->change}}</td>
                                        <th  style="width: 150px;">نسبة التغير</th>
                                        <td  style=" width: 150px; @if ($stock->change_percent > 0) color: green; @endif @if ($stock->change_percent < 0) color: red; @endif ">{{$stock->change_percent}}</td>
                                    </tr>
                                   <tr>
                                        <th scope="row" style="width: 150px;" >أخر تحديث</th>
                                        <td  style="width: 150px;">{{$stock->latest_trading_day}}</td>
                                    </tr>

                                </tbody>
                            </table>
{{--
                            <table class="table table-striped table-sm">
                            <thead>
                                <tr class="textCenter">
                                    <th scope="col">الرقم</th>
                                    <th scope="col">رمز السهم</th>
                                    <th scope="col">سعر السهم</th>
                                    <th scope="col">سعر الافتتاح</th>
                                    <th scope="col">سعر الاغلاق الاخير</th>
                                    <th scope="col">أعلى سعر</th>
                                    <th scope="col">أدنى سعر</th>
                                    <th scope="col">حجم التداول</th>
                                    <th scope="col">معدل التغير</th>
                                    <th scope="col">نسبة التغير</th>
                                    <th scope="col">أخر تحديث</th>
                                </tr>
                            </thead> --}}

                            {{-- <tbody>
                        @foreach ($stocks as $stock)
                        @php
                            $x = $x +1;
                        @endphp
                      <tr class="textCenter">
                        <td>{{ $x }}</td>
                        <td class="gainers"><a href="#">{{$stock->symbol}}</a></td>
                        <td>{{$stock->price}}</td>
                        <td>{{$stock->open}}</td>
                        <td>{{$stock->previous_close}}</td>
                        <td>{{$stock->high}}</td>
                        <td>{{$stock->low}}</td>
                        <td>{{$stock->volume}}</td>
                        <td class=" @if ($stock->change > 0) gainers @endif @if ($stock->change < 0) losers @endif " >{{$stock->change}}</td>
                        <td class=" @if ($stock->change_percent > 0) gainers @endif @if ($stock->change_percent < 0) losers @endif " >{{$stock->change_percent}}</td>
                        <td>{{$stock->latest_trading_day}}</td>
                         <td>
                            <form action="#" method="POST">
                                @csrf
                                <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="$">
                                <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="#">
                                <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="#">
                            </form>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                    </table> --}}
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Amir
                            dsvmds</div>
                        <div class="tab-pane fade" id="futures" role="tabpanel" aria-labelledby="contact-tab">Amir dvs
                        </div>
                    </div>

                </div>
            </main>
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

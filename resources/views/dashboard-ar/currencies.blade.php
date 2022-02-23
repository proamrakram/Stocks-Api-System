<x-layout-ar>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <link href="{{ asset('assets/dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/dashboard/css/dropdown.css')}}">
        <link href="{{ asset('assets/dashboard/css/dashboard_Ar.css') }}" rel="stylesheet">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">أسعار العملات الورقية</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">إضافة</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                هذا الأسبوع
              </button>
            </div>
          </div>


        {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}

        {{-- <h2>جدول الطلبات</h2> --}}
        <div class="table-responsive">
            {{-- @if (middelware()) --}}

            {{-- @endif --}}
            {{-- <h1 style="margin-top: 10px;" >أسعار العملات الورقية</h1> --}}
            <table class="table table-bordered">
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
                    {{-- <th scope="col">أخر تحديث</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach($stocksInfo as $stock)
                    @php
                        $x = $x +1;
                    @endphp
                  <tr class="textCenter">
                    <td>{{ $x }}</td>
                    <td class="gainers"><a target="_blank" href="#">{{$stock->shortName}}</a></td>
                    <td>{{$stock->regularMarketPrice}}</td>
                    <td>{{$stock->regularMarketOpen}}</td>
                    <td>{{$stock->regularMarketPreviousClose}}</td>
                    <td>{{$stock->regularMarketDayHigh}}</td>
                    <td>{{$stock->regularMarketDayLow}}</td>
                    <td>{{$stock->regularMarketVolume}}</td>
                    <td class=" @if ($stock->regularMarketChange > 0) gainers @endif @if ($stock->regularMarketChange < 0) losers @endif " >{{$stock->regularMarketChange}}</td>
                    <td class=" @if ($stock->regularMarketChangePercent > 0) gainers @endif @if ($stock->regularMarketChangePercent < 0) losers @endif " >{{$stock->regularMarketChangePercent}}</td>
                    {{--<td>{{$stock->latest_trading_day}}</td>
                     <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="$">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="#">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="#">
                        </form>
                    </td> --}}
                  </tr>
                  @endforeach

                </tbody>
              </table>
        </div>
        <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
        integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous">
    </script>
      </main>

    </x-layout-ar>

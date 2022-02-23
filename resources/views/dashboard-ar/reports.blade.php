<x-layout-ar>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">جدول التقارير</h1>
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

        {{-- <h2>جدول التقارير</h2> --}}
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">عنوان</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1,001</td>
                    <td>بيانات</td>
                    <td>عشوائية</td>
                    <td>تثري</td>
                    <td>الجدول</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,002</td>
                    <td>تثري</td>
                    <td>مبهة</td>
                    <td>تصميم</td>
                    <td>تنسيق</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,003</td>
                    <td>عشوائية</td>
                    <td>غنية</td>
                    <td>قيمة</td>
                    <td>مفيدة</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,003</td>
                    <td>معلومات</td>
                    <td>تثري</td>
                    <td>توضيحية</td>
                    <td>عشوائية</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,004</td>
                    <td>الجدول</td>
                    <td>بيانات</td>
                    <td>تنسيق</td>
                    <td>قيمة</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,005</td>
                    <td>قيمة</td>
                    <td>مبهة</td>
                    <td>الجدول</td>
                    <td>تثري</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,006</td>
                    <td>قيمة</td>
                    <td>توضيحية</td>
                    <td>غنية</td>
                    <td>عشوائية</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,007</td>
                    <td>تثري</td>
                    <td>مفيدة</td>
                    <td>معلومات</td>
                    <td>مبهة</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,008</td>
                    <td>بيانات</td>
                    <td>عشوائية</td>
                    <td>تثري</td>
                    <td>الجدول</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,009</td>
                    <td>تثري</td>
                    <td>مبهة</td>
                    <td>تصميم</td>
                    <td>تنسيق</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,010</td>
                    <td>عشوائية</td>
                    <td>غنية</td>
                    <td>قيمة</td>
                    <td>مفيدة</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,011</td>
                    <td>معلومات</td>
                    <td>تثري</td>
                    <td>توضيحية</td>
                    <td>عشوائية</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,012</td>
                    <td>الجدول</td>
                    <td>تثري</td>
                    <td>تنسيق</td>
                    <td>قيمة</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,013</td>
                    <td>قيمة</td>
                    <td>مبهة</td>
                    <td>الجدول</td>
                    <td>تصميم</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,014</td>
                    <td>قيمة</td>
                    <td>توضيحية</td>
                    <td>غنية</td>
                    <td>عشوائية</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                  <tr>
                    <td>1,015</td>
                    <td>بيانات</td>
                    <td>مفيدة</td>
                    <td>معلومات</td>
                    <td>الجدول</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            <input type="image" src="{{asset('assets/dashboard/images/edit-button.png')}}" alt="edit" height="20" width="20" formaction="{{route('edit', "id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/show.png')}}" alt="edit" height="20" width="20" formaction="{{route('show',"id")}}">
                            <input type="image" src="{{asset('assets/dashboard/images/delete.png')}}" alt="edit" height="20" width="20" formaction="{{route('delete',"id")}}">
                        </form>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
      </main>

</x-layout-ar>

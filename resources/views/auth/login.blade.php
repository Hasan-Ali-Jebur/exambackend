@extends("layouts.guest")
@section("content")
    <div class="account-pages" style="
background: url('{{asset("images/28466.jpg")}}') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class="text-center">
            <a href="" class="logo"><span>Exam<span>ControlPanel</span></span></a>
            <h5 class="text-muted m-t-0 font-600">جامعة النهرين - كلية الطب</h5>
        </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold m-b-0">الدخول الى النظام</h4>
            </div>
            <div class="panel-body">

                <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control @error("email") parsley-error @enderror"  placeholder="اسم المستخدم" id="email" type="email" name="email" value="{{old('email')}}" required autofocus >
                            @error("email")
                            <ul class="parsley-errors-list filled" id="parsley-id-4"><li class="parsley-required">{{$message}}</li></ul>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password"  placeholder="كلمة المرور" id="password"
                                   name="password"
                                   required autocomplete="current-password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <input id="remember" type="checkbox" name="remember">
                                <label for="remember">
                                    تذكر معلومات الجلسة
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">تسجيل دخول</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- end card-box-->


    </div>
    <!-- end wrapper page -->




    @endsection

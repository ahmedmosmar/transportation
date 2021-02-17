@extends('layouts/master')
@section('content')
   <div class="row login-form-row">
      <div class="col-md-4 col-sm-6 ">

      </div>
      <div class="col-md-4  col-sm-12  loginForm" >
         <p for="" class="login-form-lable-login">   تسجيل الدخول</p>
         <form method="POST" action="{{ route('login') }}" >
            @csrf
             
            {{-- <label for="user_name"> اسم المستخدم</label> --}}
            <input type="text" id="user_name" name="email" class="form-control" placeholder="اسم المستخدم" required="">
            {{-- <label for="passWord">  كلمة المرور</label> --}}
            <input type="password" id="passWord" name="password" class="form-control" placeholder="كلمة المرور " required="">
            <input type="submit" value="دخول" class="form-control">
         </form>
      </div>
      <div class="col-md-4 col-sm-6 ">
         
      </div>
   </div>
@endsection
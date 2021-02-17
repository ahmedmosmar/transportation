{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts/app')
@section('content')
   <div class="row login-form-row">
      <div class="col-md-4 col-sm-4 col-xs-4">

      </div>
      <div class="col-md-4  col-sm-4 col-xs-12 loginForm" >
         <p for="" class="login-form-lable-login">   تسجيل الدخول</p>
         <img src="{{asset('images/man.png')}}" 
         width="120pt" height="120pt"  class="img-circle gravity-image">
         {{-- <i class="fa fa-user fa-lg" style="  display: block;
         margin-left: auto;text-align: center;color: #008577;
         margin-right: auto;" ></i> --}}
         <form method="POST" action="{{ route('login') }}" >

           
            @csrf
             
            {{-- <label for="user_name"> اسم المستخدم</label> --}}
            <div class="input-container">
               <input type="text" id="user_name" name="user_name" class="form-control" placeholder="اسم المستخدم" required="">
               <i class="fa fa-user fa-lg icon"></i>
            </div>
            {{-- <label for="passWord">  كلمة المرور</label> --}}
            <div class="input-container">
              <input type="password" id="passWord" name="password" class="form-control" placeholder="كلمة المرور " required="">
              <i class="fa fa-lock fa-lg icon"></i>
            </div>
            <input type="submit" value="دخول" class="form-control">
         </form>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4">
         
      </div>
   </div>
@endsection

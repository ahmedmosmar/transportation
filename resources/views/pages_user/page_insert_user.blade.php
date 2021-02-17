@extends('layouts.master')

@section('content')

<div class="container-fluid img">
  <div class="panel panel-default">
        <div class="panel-heading text-center colorr">
          <i class="fa fa-user" style="color: #008577"></i>
       اضافة بيانات مشرف
          </div>
        <div class="panel-body">
          <div class="row " id="margin-form">
            <div class="col-md-10 col-sm-10">
            <div class="row">
          <form  action="{{'/pages_user'}}" method="post" role="form" enctype="multipart/form-data"  class="form-container">
           @csrf
      
            <div class="col-md-6 col-sm-12">
              <div class="form-group ">
                 <label for="user_name" class="col-md-6 col-form-label pull-right">{{ __('الاسم') }}</label>
              <input id="user_name" type="text"  class="form-control @error('user_name') is-invalid @enderror"
                     name="user_name"  required  autofocus>
                   
                </div>
             </div>

         

           <div class="col-md-6 col-sm-12 ">
             <div class="form-group ">
                  <label for="user_phone" class="col-md-6 col-form-label pull-right">{{ __('رقم التلفون') }}</label>
                   <input id="user_phone" type="text"  class="form-control @error('user_phone') is-invalid @enderror"
                   name="user_phone"  required autofocus>
                 
              </div>
             </div>

             <div class="col-md-6 col-sm-12 ">
               <div class="form-group ">
                    <label for="user_email" class="col-md-6 col-form-label pull-right">{{ __('البريد الالكتروني') }}</label>
                     <input id="user_email" type="email"  class="form-control @error('user_email') is-invalid @enderror"
                     name="user_email" value="{{ old('email') }}" required>
                  
                </div>
               </div>

               <div class="col-md-6 col-sm-12 ">
                <div class="form-group ">
                     <label for="user_type" class="col-md-6 col-form-label pull-right">{{ __(' نوع المستخدم') }}</label>
                      {{-- <input id="user_type" type="text"  class="form-control @error('user_type') is-invalid @enderror"
                      name="user_type"  required > --}}
                   <select name="user_type" id="" class="form-control">
                     <option value="مشرق">مشرف</option>
                   </select>
                 </div>
                </div>



                <div class="col-md-6 col-sm-12">
                  <label for="password" class="col-md-4 col-form-label pull-right">{{ __('كلمة المرور') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  
              </div>
          
              <div class="col-md-6 col-sm-12">
                  <label for="password-confirm" class="col-md-6 col-form-label pull-right">{{ __('تاكيد كلمة المرور ') }}</label>
          
                      <input id="password-confirm" type="password" class="form-control reset-select" name="password_confirmation" required autocomplete="new-password">
              
              </div>

               <div class="col-md-12 col-sm-12 ">
                <div class="form-group">
                       <button type="submit" id='button' >
                           {{ __('ادخال البيانات') }}
                       </button>
                   </div>
              </div>

          </form>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>


@endsection

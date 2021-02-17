@extends('layouts.master')

@section('content')


<div class="container-fluid img">
  <div class="panel panel-default">
        <div class="panel-heading text-center colorr">
          <i class="fa fa-user" style="color: #008577"></i>
       تعديل بيانات المستخدم
          </div>
        <div class="panel-body">
          <div class="row " id="margin-form">
            <div class="col-md-10 col-sm-10">
            <div class="row">
          <form  action="{{'/pages_user/'  . $data_user->user_id }}" method="post" role="form" enctype="multipart/form-data"  class="form-container">
           @csrf
           @method('PUT')
            <div class="col-md-6 col-sm-12">
              <div class="form-group ">
                 <label for="user_name" class="col-md-6 col-form-label pull-right">{{ __('الاسم') }}</label>
              <input id="user_name" type="text" value="{{$data_user->user_name}}" class="form-control @error('user_name') is-invalid @enderror"
                     name="user_name"  required  autofocus>
                   
                </div>
             </div>

         

           <div class="col-md-6 col-sm-12 ">
             <div class="form-group ">
                  <label for="user_phone" class="col-md-6 col-form-label pull-right">{{ __('رقم التلفون') }}</label>
                   <input id="user_phone" type="text" value="{{$data_user->user_phone}}" class="form-control @error('user_phone') is-invalid @enderror"
                   name="user_phone"  required autofocus>
                 
              </div>
             </div>

             <div class="col-md-6 col-sm-12 ">
               <div class="form-group ">
                    <label for="user_email" class="col-md-6 col-form-label pull-right">{{ __('البريد الالكتروني') }}</label>
                     <input id="user_email" type="email" value="{{$data_user->user_email}}" class="form-control @error('user_email') is-invalid @enderror"
                     name="user_email" value="{{ old('email') }}" required>
                  
                </div>
               </div>

               <div class="col-md-6 col-sm-12 ">
                <div class="form-group ">
                     <label for="user_type" class="col-md-6 col-form-label pull-right">{{ __(' نوع المستخدم') }}</label>
                      <input id="user_type" type="text" value="{{$data_user->user_type}}" class="form-control @error('user_type') is-invalid @enderror"
                      name="user_type" value="{{ old('email') }}" required >
                   
                 </div>
                </div>

               <div class="col-md-12 col-sm-12 ">
                <div class="form-group">
                       <button type="submit" id='button' >
                           {{ __('تعديل البيانات') }}
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

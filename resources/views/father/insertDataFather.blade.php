@extends('layouts.master')

@section('content')

<!--start the Insert  Form For FatherStudent Data/////////////////////-->
<div class="container-fluid img">
  <div class="panel panel-default">
        <div class="panel-heading text-center colorr">
          <i class="fa fa-users"></i>
    اضافة بيانات ولي الامر
          </div>
        <div class="panel-body">
          <div class="row " id="margin-form">
            <div class="col-md-10 col-sm-4">
            <div class="row">
          <form  action="/father" method="post" role="form" enctype="multipart/form-data"  class="form-container">
           @csrf
            <div class="col-md-6 col-sm-4">
              <div class="form-group ">
                 <label for="name" class="col-md-4 col-form-label pull-right">{{ __('الاسم') }}</label>
                     <input id="nameFather" type="text" class="form-control @error('name') is-invalid @enderror"
                     name="nameFather"  required autocomplete="name" autofocus>
                     <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-pencil"></i></button>
                    </span>
                </div>
             </div>

           <div class="col-md-6 col-sm-4 ">
             <div class="form-group ">
                  <label for="name" class="col-md-4 col-form-label pull-right">{{ __('العنوان') }}</label>
                      <input id="address" type="text" class="form-control @error('name') is-invalid @enderror"
                      name="addressFather"  required autocomplete="name" autofocus>
                      <span class="input-group-btn add-on">
                         <button class="btn btn-theme" type="button"><i class="fa fa-pencil"></i></button>
                     </span>
              </div>
           </div>

           <div class="col-md-6 col-sm-4 ">
             <div class="form-group ">
                  <label for="name" class="col-md-4 col-form-label pull-right">{{ __('رقم التلفون') }}</label>
                   <input id="phone" type="text" class="form-control @error('name') is-invalid @enderror"
                   name="fatherPhone"  required autocomplete="name" autofocus>
                   <span class="input-group-btn add-on">
                      <button class="btn btn-theme" type="button"><i class="fa fa-pencil"></i></button>
                  </span>
              </div>
             </div>

             <div class="col-md-6 col-sm-4 ">
               <div class="form-group ">
                    <label for="" class="col-md-4 col-form-label pull-right">{{ __('الايميل') }}</label>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                     name="emailFather" value="{{ old('email') }}" required autocomplete="email">
                     <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-pencil"></i></button>
                    </span>
                </div>
               </div>

               <div class="col-md-12 col-sm-4 ">
                <div class="form-group">
                       <button type="submit" class="button btn btn-round btn-success" >
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
<!--End the Insert  Form For FatherStudent Data/////////////////////-->

@endsection

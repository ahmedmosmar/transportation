@extends('layouts.master')

@section('content')

<div class="container-fluid img">
  <div class="panel panel-default">
        <div class="panel-heading text-center colorr">
          <i class="fa fa-car " style="color: #008577"></i>
       تعديل بيانات المحطة
          </div>
        <div class="panel-body">
          <div class="row " id="margin-form">
            <div class="col-md-10 col-sm-10">
            <div class="row">
          <form  action="{{'/pages_station/'  . $data_station->station_id }}" method="post" role="form" enctype="multipart/form-data"  class="form-container">
           @csrf
           @method('PUT')
            <div class="col-md-6 col-sm-12">
              <div class="form-group ">
                 <label for="station_name" class="col-md-6 col-form-label pull-right">{{ __('اسم المحطة') }}</label>
              <input id="station_name" type="text" value="{{$data_station->station_name}}" class="form-control @error('user_name') is-invalid @enderror"
                     name="station_name"  required  autofocus>
                   
                </div>
             </div>

         

           <div class="col-md-6 col-sm-12 ">
             <div class="form-group ">
                  <label for="station_desc" class="col-md-6 col-form-label pull-right">{{ __(' وصف للمحطة') }}</label>
                   <input id="station_desc" type="text" value="{{$data_station->station_desc}}" class="form-control @error('user_phone') is-invalid @enderror"
                   name="station_desc"  required autofocus>
                 
              </div>
             </div>

             <div class="col-md-6 col-sm-12 ">
               <div class="form-group ">
                    <label for="station_area" class="col-md-6 col-form-label pull-right">{{ __(' منطقة المحطة') }}</label>
                     <input id="station_area" type="text" value="{{$data_station->station_area}}" class="form-control @error('user_email') is-invalid @enderror"
                     name="station_area"  required>
                  
                </div>
               </div>

               <div class="col-md-6 col-sm-12 ">
                <div class="form-group ">
                     <label for="trans_type" class="col-md-6 col-form-label pull-right">{{ __(' نوع المركبة') }}</label>
                      <input id="trans_type" type="text" value="{{$data_station->trans_type}}" class="form-control @error('user_type') is-invalid @enderror"
                      name="trans_type"  required >
                   
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

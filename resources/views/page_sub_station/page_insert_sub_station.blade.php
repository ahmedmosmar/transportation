@extends('layouts.master')

@section('content')

<div class="container-fluid img">
  <div class="panel panel-default">
        <div class="panel-heading text-center colorr">
          <i class="fa fa-user" style="color: #008577"></i>
       اضافة بيانات خط سير
          </div>
        <div class="panel-body">
          <div class="row " id="margin-form">
            <div class="col-md-10 col-sm-10">
            <div class="row">
          <form  action="{{'/page_sub_station'}}" method="post" role="form" enctype="multipart/form-data"  class="form-container">
           @csrf
            <div class="col-md-6 col-sm-12">
              <div class="form-group ">
                 <label for="sub_station_name" class="col-md-6 col-form-label pull-right">{{ __('اسم خط السير') }}</label>
                  <input id="sub_station_name" type="text"  class="form-control @error('sub_station_name') is-invalid @enderror"
                     name="sub_station_name"  required  autofocus>
                </div>
             </div>

         

          

             <div class="col-md-6 col-sm-12 ">
               <div class="form-group ">
                  <label for="station_id" class="col-md-6 col-form-label pull-right">{{ __('اسم الموقف') }}</label>
                  <select name="station_id" id="station_id" class="form-control reset-select" >
                     @foreach ($station as $station)
                       <option value="{{$station->station_id}}">{{$station->station_name}}</option>
                     @endforeach
                  </select> 
                </div>
               </div>

               <div class="col-md-12 col-sm-12 ">
                 <div class="form-group ">
                     <label for="sub_station_desc" class="col-md-6 col-form-label pull-right">{{ __('وصف لخط السير') }}</label>
                    <textarea name="sub_station_desc" class="form-control" id="sub_station_desc" cols="30" rows="5"></textarea>  
                  </div>
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

@extends('layouts/master')
@section('content')

{{-- <div class="panel panel-default">
   <div class="panel-heading text-center">    بيانات</div>
     <div class="scroll">
     <div class="panel-body "> --}}
         <div class="row">
            <div class="col-md-12  col-sm-12 col-xs-12" style="text-align: center">
                <div class="row" style="margin-left: 70pt">
                <div class="col-md-10">

                
               <table class="table table-bordered tabledesign" dir="rtl" >
                  <thead >
                     <tr>
                     <th class="text-center" width="8%"> <label > <a href="{{'/page_sub_station/create'}}">
                        <i class="fa fa-plus fa-lg m_left  add_user_plus"></i></a> الرقم </label>  </th>
                        <th class="text-center" width="20%"> <label>اسم خط السير</label>  </th>
                        <th class="text-center" width="10%"> <label> وصف لخط السير</label></th>
                        <th class="text-center" width="10%"> <label> الموقف</label></th>
                        <th class="text-center" width="15%"> <label>العمليات</label></th>
                     </tr>
                  </thead>

               <tbody >
                  @foreach ($sub_stations as $sub_station)
                     <tr>
                       <td style="background: #f0f5f9">{{$sub_station->sub_station_id}}</td>
                        <td>{{$sub_station->sub_station_name}}</td>
                        <td>{{$sub_station->sub_station_desc}}</td>
                        <td>{{$sub_station->Station->station_name}}</td>
                   
                        {{-- {{'/pages_user/' . $user->user_id . '/edit'}} --}}
                        
                        <td><a href="{{ route('page_sub_station.edit',$sub_station->sub_station_id) }}">
                           <button  type="submit" class="col-md-5 col-sm-5 col-xs-6 btn btn-primary pull-right bold " >
                             <label for="" class="hidden-xs hidden-sm">تعديل</label> 
                              <i class="fa fa-pencil "></i></button> </a>
                              
                        <form  action="" method="post" >
                           @csrf
                           @method('DELETE')
                           <button  type="submit" class="col-md-5 col-sm-5 col-xs-6 btn btn-danger pull-left  confirm  bold" >
                              <label for="" class="hidden-xs hidden-sm">حذف</label> 
                              <i class="fa fa-trash-o "></i>
                           </button>
                           </form>
                        </td>
                     </tr>

                     @endforeach

                  </tbody>
              </table>
            </div>
          </div>
         </div>
     </div>
     {{-- </div>
   </div>
</div> --}}
      


@endsection
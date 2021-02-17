@extends('layouts/master')
@section('content')

{{-- <div class="panel panel-default">
   <div class="panel-heading text-center">    بيانات</div>
     <div class="scroll">
     <div class="panel-body "> --}}
         <div class="row ">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <table class="table table-bordered tabledesign" dir="rtl" >
                  <thead >
                     <tr>
                        <th class="text-center" width="2%"> <label >الرقم </label>  </th>
                        <th class="text-center" width="10%"> <label>اسم المحطة</label>  </th>
                        <th class="text-center" width="10%"> <label> وصف للمحطة</label></th>
                        <th class="text-center" width="10%"> <label> منطقة المحطة</label></th>
                      
                        <th class="text-center" width="7%"> <label> تاريخ الاضافة</label></th>
                        <th class="text-center" width="10%"> <label>العمليات</label></th>
                     </tr>
                  </thead>

               <tbody >
                  @foreach ($All_station as $station)
                      
                  
                     <tr>
                     <td style="background: #f0f5f9">{{$station->station_id}}</td>
                        <td>{{$station->station_name}}</td>
                        <td>{{$station->station_desc}}</td>
                        <td> {{$station->station_area}}</td>
                        <td>{{$station->created_at}}</td>
                        {{-- {{'/pages_user/' . $user->user_id . '/edit'}} --}}
                        {{-- {{ route('pages_station.edit',$station->user_id) }} --}}
                        <td><a href="{{'/pages_station/' . $station->station_id . '/edit'}}">
                           <button  type="submit" class="col-md-5 col-sm-5 col-xs-6 btn btn-primary pull-right bold " >
                             <label for="" class="hidden-xs hidden-sm">تعديل</label> 
                              <i class="fa fa-pencil "></i></button> </a>
                              
                        <form  action="{{route('pages_station.destroy', ['id' => $station->station_id])}}" method="post" >
                           @csrf
                           @method('DELETE')
                           <button  type="submit" class="col-md-5 col-sm-5 col-xs-6 btn btn-danger pull-left  confirm  bold" >
                              <label for="" class="hidden-xs hidden-sm">حذف</label> 
                              <i class="fa fa-trash-o"></i>
                           </button>
                           </form>
                        </td>
                     </tr>

                     @endforeach

                  </tbody>
            </table>
            </div>
         </div>
     {{-- </div>
   </div>
</div> --}}
      


@endsection
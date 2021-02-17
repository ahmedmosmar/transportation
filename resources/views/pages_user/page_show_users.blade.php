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
                     <th class="text-center" width="4%"> <label > <a href="{{'/pages_user/create'}}"><i class="fa fa-plus fa-lg m_left  add_user_plus"></i></a> الرقم </label>  </th>
                        <th class="text-center" width="10%"> <label>اسم المستخدم</label>  </th>
                        <th class="text-center" width="10%"> <label>نوع المستخدم</label></th>
                        <th class="text-center" width="10%"> <label>البريد الالكتروني</label></th>
                        <th class="text-center" width="7%"> <label>رقم التلفون</label></th>
                        <th class="text-center" width="10%"> <label>العمليات</label></th>
                     </tr>
                  </thead>

               <tbody >
                  @foreach ($All_users as $user)
                      
                  
                     <tr>
                     <td style="background: #f0f5f9">{{$user->user_id}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->user_type}}</td>
                        <td> {{$user->user_email}}</td>
                        <td>{{$user->user_phone}}</td>
                        {{-- {{'/pages_user/' . $user->user_id . '/edit'}} --}}
                        
                        <td><a href="{{ route('pages_user.edit',$user->user_id) }}">
                           <button  type="submit" class="col-md-5 col-sm-5 col-xs-6 btn btn-primary pull-right bold " >
                             <label for="" class="hidden-xs hidden-sm">تعديل</label> 
                              <i class="fa fa-pencil "></i></button> </a>
                              
                        <form  action="{{ route('pages_user.destroy',$user->user_id) }}" method="post" >
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
     {{-- </div>
   </div>
</div> --}}
      


@endsection
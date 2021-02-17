@extends('layouts/master')
@section('content')

{{-- <div class="panel panel-default">
   <div class="panel-heading text-center">    بيانات</div>
     <div class="scroll">
     <div class="panel-body "> --}}
         <div class="row ">
            <div class="col-md-12 col-sm-12 ">
               <table class="table table-bordered tabledesign" dir="rtl" >
                  <thead >
                     <tr>
                        <th class="text-center" width="2%"> <label >الرقم</label>  </th>
                        <th class="text-center" width="10%"> <label>الاسم</label>  </th>
                        <th class="text-center" width="10%"> <label>العنوان</label></th>
                        <th class="text-center" width="10%"> <label>البريد الالكتروني</label></th>
                        <th class="text-center" width="7%"> <label>العمليات</label></th>
                     </tr>
                  </thead>

               <tbody >
                     <tr>
                        <td style="background: #f0f5f9">1</td>
                        <td>احمد</td>
                        <td>الخرطوم</td>
                        <td> Ahmed@gmail.com</td>
                        <td><a href="">
                           <button  type="submit" class="btn btn-primary pull-right bold " >
                             <label for="" class="hidden-xs">تعديل</label> 
                              <i class="fa fa-pencil mr"></i></button> </a>
                              
                        <form  action="" method="post" >
                           @csrf
                           @method('DELETE')
                           <button  type="submit" class="btn btn-danger pull-left  confirm  bold" >
                              <label for="" class="hidden-xs">حذف</label> 
                              <i class="fa fa-trash-o mr"></i>
                           </button>
                           </form>
                        </td>
                     </tr>

                     <tr>
                        <td style="background: #f0f5f9">2</td>
                        <td>محمد</td>
                        <td>بحري</td>
                        <td>Moh@gmail.com</td>
                        <td><a href="">
                              <button  type="submit" class="btn btn-primary pull-right bold " >
                                <label for="" class="hidden-xs">تعديل</label> 
                                 <i class="fa fa-pencil mr"></i></button> </a>
                                 
                           <form  action="" method="post" >
                              @csrf
                              @method('DELETE')
                              <button  type="submit" class="btn btn-danger pull-left  confirm  bold" >
                                 <label for="" class="hidden-xs">حذف</label> 
                                 <i class="fa fa-trash-o mr"></i>
                              </button>
                           </form>
                        </td>
                     </tr>

                  </tbody>
            </table>
            </div>
         </div>
     {{-- </div>
   </div>
</div> --}}
      


@endsection
@extends('layouts.master')

@section('content')
<!--start the show   FatherStudent Data in the table/////////////////////-->


<div class="panel panel-default">
   <div class="panel-heading text-center">
     <i class="fa fa-male fa-lg"></i>
     بيانات  اولياء الامور
   </div>
     <div class="scroll">
     <div class="panel-body ">

      <div class="row ">
       <div class="col-md-12 col-sm-12 ">


         <table class="table table-bordered tabledesign" dir="rtl" >
          <thead >
           <tr>
            <th class="text-center" width="30%"> <label >الاسم</label>  </th>
            <th class="text-center" width="15%"> <label>العنوان</label>  </th>
            <th class="text-center" width="15%"> <label>رقم التلفون</label></th>
            <th class="text-center" width="20%"> <label>الايميل</label></th>
            <th class="text-center" width="5%"><label>عدد الابناء</label></th>
            <th class="text-center" width="15%"> <label>العمليات</label></th>
          </tr>
         </thead>
       <tbody>
   <!--Start foreach For Select Data Father /////////////////////////-->
         <?php foreach ($allfather as $father): ?>
        <tr>
         <td>{{$father->name}}</td>
         <td>{{$father->address}}</td>
         <td>{{$father->phone}}</td>
         <td>{{$father->email}}</td>
         <td>
           <?php
              $fatherID =  $father->id;
              $Sudents= DB::select("select * from students where father_id = $fatherID");
              echo  count($Sudents);
             ?>
           </td>
         <td>
           <a href="{{'/father/' . $father->id . '/edit'}}">
             <button  type="submit" class="btn btn-primary pull-right bold" >تعديل<i class="fa fa-pencil mr"></i></button>
           </a>

          <!--start Form For delete Data Father/////////////////////-->
           <form  action="{{route('father.destroy', ['id' => $father->id])}}" method="post" >
              @csrf
              @method('DELETE')
              <button  type="submit" class="btn btn-danger pull-left  confirm  bold" >حذف<i class="fa fa-trash-o mr"></i></button>
           </form>
            <!--start Form For delete Data Father/////////////////////-->

           </td>
          </tr>
        <?php endforeach; ?>
    <!-- End foreach For Select Data Father /////////////////////////-->
       </tbody>
     </table>

   </div>
   </div>
   </div>

</div>
</div>
<!--End the show   FatherStudent Data in the table/////////////////////-->
@endsection

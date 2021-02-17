

<!DOCTYPE html>
<html>
<head>
		<title>{{ env('APP_NAME','transportation')}}</title>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" >
		<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}" >
		<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/mystyle.css')}}">
		<link rel="stylesheet"  href="{{asset('css/font.awesome.5.2.0.nupky')}}">

		
		<link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
		<link href="{{asset('css/login_Forrm_style.css')}}" rel="stylesheet">
		{{-- <link href="{{asset('css/changa/Changa-Bold.ttf')}}" > --}}
		<link href="{{asset('css/changa/chang.ttf')}}" >
</head>


<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
	<div class="container-fluid display-table">
      <div class="row display-table-row">
	     <div class="col-lg-10 col-md-10 col-sm-10  col-xs-12 display-table-cell valign-top" id="myScrollspy">
	       <div class="row">
	          <header id="nav-header" class="clearfix" >
	
                <div class="col-md-7 ">
			        <nav class="navbar-default pull-right" 
			           style="background: #008577;margin-left: 20px;margin-top: 10px">
				         <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas"
							    data-target="#side-menu">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
                    </nav>
		         <div class="design-menu">
		   	        <ul class="pull-left " >
						@guest
				       @else  
				        	<li>
						       <a  href="{{ route('logout') }}" style=""
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();" >
									{{ __('تسجيل خروج') }}
									<i class="fa fa-sign-out fa-lg" ></i>
								</a>

								 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" style="color:red;">
									@csrf
								 </form>
				        	  </li>
				             @endguest
			             </ul>
		               </div>
	                </div>
	
						<div class="" style="margin-top: 20px;margin-right: 10px;font-weight: bold;color:aliceblue">
							<img src="{{asset('images/user.png')}}"
							width="30px" height="30px" class="img-circle pull-right" 
							 style="margin-left: 10px;margin-top: 3px;background-color: aliceblue">
							
							<p class="user-auth-desgin pull-right" >{{ Auth::user()->user_name }}</p>
						</div>
	
          </header>

       </div>
         	  {{-- <div class="text-center"> @include('includes.message')</div> --}}
     	      @yield('content')
      </div>

<div class=" col-lg-2 col-md-2 col-sm-2 col-xs-2
 hidden-xs display-table-cell valign-top" id="side-menu">
	 <h1 id="control-panel" class="hidden-sm hidden-xs"> لوحة التحكم </h1>
	 
	 {{-- <div class="hidden-md hidden-sm hidden-xs text-center">  <img src="{{asset('images/admin.png')}}"   id="user-image" ></div> --}}
	  <ul>
		<div class="scroll">
            <li class="link">
			<a href="{{'/pages_user'}}"> <span  class="hidden-sm hidden-xs">المستخدمين</span>
					<i class="fa fa-users fa-lg m_left"></i>
					{{-- <img src="{{asset('images/group_users.png')}}" 
					class="img-circle"	width="30px" height="30px" >	
					<i class="fa fa-car fa-lg m_left"></i> --}}

				</a>
			 </li>
			
		   	<li class="link ">
			   <a href="{{'/pages_station'}}">
				<span  class="hidden-sm hidden-xs">    المـــــواقف </span>
				{{-- <img src="{{asset('images/parking.png')}}" 
			     	class="img-circle" width="30px" height="30px" >	 --}}
					<i class="fa fa-car fa-lg m_left"></i>
				</a>
			</li>
  
			
			<li class="link ">
				<a href="#collapsem" data-toggle="collapse" aria-controls="ture" >

					<span class="hidden-sm hidden-xs">الخــــطوط  </span>
					<span><i class="fa fa-car fa-lg m_left"></i></span>
				   </a>

				   <ul class="collapse collapseable" id="collapsem">
					<li> <a href="{{'/page_sub_station/create'}}">     اضافة  خط سير  <i class="fa fa-pencil fa-lg m_left"></i></a> </li>
					<li> <a href="{{'/page_sub_station'}}">   عرض خطوط السير <i class="fa fa-car fa-lg m_left"></i></a> </li>
				</ul>
			</li>
			{{-- <li class="link ">
			<a href="{{'page_sub_station'}}">
				<span  class="hidden-sm hidden-xs">     الخــــطوط </span>
				   <i class="fa fa-car fa-lg m_left"></i>
				</a>
			</li> --}}
		
			<li class="link">
                 <a href="">
					   <span class="hidden-sm hidden-xs">   التحديثات </span>
					   {{-- <img src="{{asset('images/update.png')}}" 
					   class="img-circle"	width="30px" height="30px" > --}}
					<i class="fa fa-repeat fa-lg m_left"></i>

				 </a>
			</li>


				 <li class="link ">
				 <a href="#super" data-toggle="collapse" aria-controls="ture" >

					 <span class="hidden-sm hidden-xs">المشرفين  </span>
					 <span><i class="fa fa-users fa-lg m_left"></i></span>
					</a>

					<ul class="collapse collapseable" id="super">
					 <li> <a href="{{'/pages_user/create'}}">     اضافة  مشرفين  <i class="fa fa-pencil fa-lg m_left"></i></a> </li>
					 <li> <a href="{{'/pages_user'}}"> عرض  المشرفين <i class="fa fa-file fa-lg m_left"></i></a> </li>
				 </ul>
			 </li>
			{{-- <li class="link">
				<a href="">
					  <span class="hidden-sm hidden-xs">   المــشــرفين </span>
					  <i class="fa fa-users fa-lg m_left"></i>
	
				</a>
		   </li> --}}

     	  </div>
	   </ul>
     </div>
   </div>
</div>


 
		<script  src="{{asset('js/jquery.min.js')}}"></script>
		<script  src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

		<script  src="{{asset('js/jsdelivr.js')}}"></script>

		<script  src="{{asset('js/jsjs.js')}}"></script>

		<script src="{{asset('js/bootstrap.min.js')}}"></script>

		<script src="{{asset('js/common-scripts.js')}}"></script>
		<script src="{{asset('js/mybackend.js')}}"></script>
		<script src="{{asset('js/sweetalert.js')}}"></script>
		<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
		<script src="{{asset('js/jquery.nicescroll.js')}}"></script>

		
</body>
</html>
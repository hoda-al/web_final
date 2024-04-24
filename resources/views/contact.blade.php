<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>تواصل معانا</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/tender.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
      <style>
      .error
      {
       color:#FF0000;
      }
      </style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->




    <!-- Header -->
    @if (Route::has('login'))
    @auth
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">

              <li><a href="{{route('login')}}" >Sing Up</a></li>
            </ul>

          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </div>


      </div>
    </div>


    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"><h2>E-Tendering</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">


                  <a class="nav-link" href="{{url('/')}}">الرائيسي
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">حول المنصة</a>
                </li>
                <li class="nav-item">

                  @if (Route::has('register'))

                  <a class="nav-link" href="{{route('register')}}"> تسجيل مورد</a>
                @endif

                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('contact')}}">تواصل معانا</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">العطاءات</a>
                </li>
              </ul>

              <form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('logout') }} ">
                @csrf


              <div class="firs" id="responsive_frist">
                <a class="first_name" href="{{route('profile.edit')}}" id="profile"><i class="fa fa-user" aria-hidden="true"></i></a>
              </div>
            </form>

            </div>
          </div>
        </nav>
      </header>

    @else


    <div class="sub-header">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xs-12">
              <ul class="left-info">
                <li><a href="{{route('login')}}" >Sing Up</a></li>
              </ul>

            </div>
            <div class="col-md-4">
              <ul class="right-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>

          </div>


        </div>
      </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{route('index')}}"><h2>E-Tendering</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">


                <a class="nav-link" href="{{url('/')}}">الرائيسي
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">حول المنصة</a>
              </li>
              <li class="nav-item">

                @if (Route::has('register'))

                <a class="nav-link" href="{{route('register')}}"> تسجيل مورد</a>
              @endif

              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('contact')}}">تواصل معانا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">العطاءات</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @endauth
    @endif
    <!-- end header -->

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>تواصل معانا</h1>
            <span>نحن نسعد بتواصلكم معانا عبر وسائلنا </span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>الرقم الموحد</h4>
              <p>وقت الاستجابة  :   <span>20 ثانية  </span></p>
              <a href="#">091-880-9760</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>راسلنا</h4>
              <p>وقت الاستجابة  :   <span>يوم العمل  </span></p>
              <a href="#">info@E-tendering.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>الموقع</h4>
              <p>الانتقال الى الموقع الجغرافي</p>
              <a href="#">View on Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage text_align_center">
                  <h2>تواصل <em>معانا</em> </h2>
               </div>

               @if($message = Session::get('success'))

          <div class="alert alert-success alert-block text-center text-base">

            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert">×</button>
          </div>
          @endif

            </div>
            <div class="col-md-8 offset-md-2">
               <form id="request" class="main_form" action="{{route('contact')}}" method="POST">
                @csrf
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="cont_in " placeholder=" الاسم بالكامل " type="text" name=" full_name" value="{{old('full_name')}}"  >
                        @if ($errors->has('full_name'))
                       <span class="text-danger">
                            {{ $errors->first('full_name') }}
                        </span>
                        @endif
                     </div>

                     <div class="col-md-12">
                        <input class="cont_in" placeholder=" البريد الالكتروني" type="email" name="email" value="{{old('email')}}"  >
                        @if ($errors->has('email'))
                        <span class="text-danger">
                             {{ $errors->first('email') }}
                         </span>
                         @endif
                     </div>

                     <div class="col-md-12">
                        <input class="cont_in" placeholder=" رقم الهاتف" type="number" name="phone_number" value="{{old('phone_number')}}" >
                        @if ($errors->has('phone_number'))
                        <span class="text-danger">
                             {{ $errors->first('phone_number') }}
                         </span>
                         @endif
                     </div>

                     <div class="col-md-12">
                        <textarea id="message" rows="4" class="textarea2" placeholder="اكتب الرسالة . . ."  name="content_message" value="{{old('content_message')}}"></textarea>
                        @if ($errors->has('content_message'))
                        <span class="text-danger">
                             {{ $errors->first('content_message') }}
                         </span>
                         @endif
                    </div>

                     <div class="col-md-12">
                        <input type="submit" class="send_btnt" value="ارسال">
                     </div>



                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>


    <div class="partners contact-partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
              <div class="partner-item">
                <img src="{{asset('assets/images/client-01.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->


    <footer>
      <div class="container1">
        <div class="row1">
        <div class="col-12">
          <h5>E-Tendering</h5>
          <h4>المنصة الالكترونية للعطاءات </h4>
          <ul class="contact-nav">
          <li><a data-scroll href="{{route('index')}}"> الرائيسي </a></li>
          <li><a data-scroll href="{{route('about')}}"> حول المنصة</a></li>
          <li><a data-scroll href="#blog"> العطاءات </a></li>
          <li><a data-scroll href="{{route('contact')}}"> تواصل معانا </a></li>
          </ul>
          <h6>© 2024 - E-tendering ,All Right Reserved</h6>

          <ul class="social-icons">
            <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        </div>
      </div>
      </footer>


   <!-- Bootstrap core JavaScript -->
   <script src= "{{asset('vendor/jquery/jquery.min.js')}}"></script>
     <script src= "{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

     <!-- Additional Scripts -->
     <script src= "{{asset('assets\js\custom.js')}}"></script>
     <script src= "{{asset('assets\js\owl.js')}}"></script>
     <script src= "{{asset('assets\js\slick.js')}}"></script>
     <script src= "{{asset('assets\js\accordions.js')}}"></script>
     <script src= "{{asset('assets\js\jquery.singlePageNav.min.js')}}"></script>


  </body>
</html>

<script language = "text/Javascript">

cleared[0] = cleared[1] = cleared[2] = 0;
      function clearField(t){
      if(! cleared[t.id]){
          cleared[t.id] = 1;
          t.value='';
          t.style.color='#fff';
          }
      }


$(document).ready(function(){

 if($("#request").length > 0)
  {
    $('#request').validate({
      rules:{
        full_name : {
          required : true,
          maxlength : 50
        },
        email : {
          required : true,
          maxlength : 50,
          email : true
        },
        phone_number :{
            required : true,
          minlength : 10,

        },
        content_message : {
          required : true,

        }
      },
      messages : {
        name : {
          required : 'Enter Name Detail',
          maxlength : 'Name should not be more than 50 character'
        },
        email : {
          required : 'Enter Email Detail',
          email : 'Enter Valid Email Detail',
          maxlength : 'Email should not be more than 50 character'
        },
        phone_number :{
            required : 'Enter Email Detail',
          minlength : 'Email should not be more than 10 character',

        },
        content_message : {
          required : 'Enter Message Detail',

        }
      }
    });
  }

});
</script>

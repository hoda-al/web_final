<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>حول المنصة</title>

   <!-- Bootstrap core CSS -->
   <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

   <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />


   <!-- Additional CSS Files -->
   <link rel="stylesheet" href="{{asset('assets/css/tender.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/flex-slider.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

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
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('about')}}">حول المنصة</a>
                </li>
                <li class="nav-item">

                  @if (Route::has('register'))

                  <a class="nav-link" href="{{route('register')}}"> تسجيل مورد</a>
                @endif

                </li>
                <li class="nav-item">
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
              <li class="nav-item active">
                <a class="nav-link" href="{{route('about')}}">حول المنصة</a>
              </li>
              <li class="nav-item">

                @if (Route::has('register'))

                <a class="nav-link" href="{{route('register')}}"> تسجيل مورد</a>
              @endif

              </li>
              <li class="nav-item">
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
            <h1>من نحن</h1>
            <span>المنصة الالكترونية للعطاءات والمناقصات</span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                 <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>المنصة الالكترونية للعطاءات <em>والمناقصات</em></h2>
                    <p>هي منصة رائدة على الإنترنت توفر معلومات شاملة عن المناقصات <br> وتمكين الشركات في جميع أنحاء العالم من فتح فرص تجارية مربحة في ليبيا <br>
                       من خلال قاعدة بياناتنا الواسعة وواجهتنا سهلة الاستخدام ، نقوم بربط الشركات العالمية بفرص المناقصات القيمة في ليبيا ، مما يسهل التجارة الدولية ويعزز النمو الاقتصادي

                       <br><br>توفر بوابة المناقصات  الخاصة بنا معلومات عن المشتريات الإلكترونية والمناقصات العامة .</p>

                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                  <div class="video_bt">
                    <div class="play_icon"><img src="{{asset('assets/images/play.png')}}" alt="img here"></div>
                 </div>
                </div>
              </div>




              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="more-info about-info">
      <div class="container">
        <div class="row">


                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2> ماهي اهداف <em>المنصة</em></h2>
                    <h5><img src="assets/images/angle-double-left.png" alt="">  زيادة مستوى الشفافية في المنافسات الحكومية  </h5>
                    <h5><img src="assets/images/angle-double-left.png" alt="">  توحيد الإجراءات وتسهيلها  </h5>
                    <h5><img src="assets/images/angle-double-left.png" alt="">  زيادة المصداقية والسرية  </h5>
                    <h5><img src="assets/images/angle-double-left.png" alt="">  امكانية تقديم العطاءات من اي مكان  </h5>
                    <h5><img src="assets/images/angle-double-left.png" alt="">  زيادة مستوى الشفافية في المنافسات الحكومية  </h5>


                  </div>
                </div>

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





    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0;
      function clearField(t){
      if(! cleared[t.id]){
          cleared[t.id] = 1;
          t.value='';
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>

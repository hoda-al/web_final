<!DOCTYPE html>
<html lang="en" >

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="etender">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>E-Tendering</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">




    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/tender.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
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
            <a class="navbar-brand" href="index.html"><h2>E-Tendering</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">


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
          <a class="navbar-brand" href="index.html"><h2>E-Tendering</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">


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
    <!-- end headert -->



    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>E-Tendering</h6>
                  <h4>المنصة الالكترونية للعطاءات<br> والمناقصات</h4>
                  <p> المناقصات الليبية هي مزود معلومات المناقصات عبر الإنترنت  <br> تساعد الشركات في العثور على فرص عمل في ليبيا.</p>
                  <a href="{{route('about')}}" class="filled-button">حول المنصة</a>
                </div>
            </div>
          </div>
          <!-- // Item -->





        <!-------- Item ------->
        @if (Route::has('login'))
        @auth
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>E-Tendring</h6>
                  <h4>التسجيل <br> الحسابات &amp;</h4>
                  <p>   يقدم الموقع العديد من الخدمات للقطاعات العامة والشركات الخاصة <br> التي تهدف إلى رفع نسبة المشاركة في المنافسات والمشتريات الحكومية </p>
                </div>
            </div>
          </div>

          @else

          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>E-Tendring</h6>
                  <h4>التسجيل <br> الحسابات &amp;</h4>
                  <p>   يقدم الموقع العديد من الخدمات للقطاعات العامة والشركات الخاصة <br> التي تهدف إلى رفع نسبة المشاركة في المنافسات والمشتريات الحكومية </p>
                  <a href="{{route('login')}}" class="filled-button">تسجيل مورد</a>
                </div>
            </div>
          </div>

          @endauth
          @endif


          <!-- // Item -->





          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>E-Tendering</h6>
                  <h4>تواصل معانا</h4>
                  <p> نسعد بتواصلكم من خلال وسائل عدة تضمن سرعة <br> وصول مقترحاتكم وآرائكم والاستجابة معها بكل موثوقية وشفافية </p>
                  <a href="{{route('contact')}}" class="filled-button">تواصل معانا</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->




<!-------------------conect us------------------------->

@if (Route::has('login'))
@auth
<div class="request-form">
    <div class="container">
      <div class="row">


        <div class="col-md-8">
          <h4>هل تملك حساب في المنصة ؟</h4>
          <span>اذا كنت تملك حساب سابق في المنصة يمكنك تسجيل الدخول</span>
        </div>



      </div>
    </div>
  </div>

@else

<div class="request-form">
    <div class="container">
      <div class="row">


        <div class="col-md-8">
          <h4>هل تملك حساب في المنصة ؟</h4>
          <span>اذا كنت تملك حساب سابق في المنصة يمكنك تسجيل الدخول</span>
        </div>

        <div class="col-md-4">
            <a href="{{route('login')}}" class="border-button">تسجيل الدخول</a>
          </div>
      </div>
    </div>
  </div>

  @endauth
  @endif




    <!--------------------------------------who we are ------------------------------>
    <div class="more-info1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content1">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image1">
                    <img src="{{asset('assets/images/blog-img.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content1">
                    <span>من نحن</span>
                    <h2>المنصة الالكترونية للعطاءات <em>والمناقصات</em></h2>
                    <p> هي منصة رائدة على الإنترنت توفر معلومات شاملة عن المناقصات ، وتمكين الشركات من فتح فرص تجارية مربحة في ليبيا مما يسهل التجارة الدولية ويعزز النمو الاقتصادي</p>
                    <a href="{{route('about')}}" class="filled-button">المزيد</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!----------------------------------service----------------------------->
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>بماذا ساهمت <em>المنصة</em></h2>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/User-management-icon-1.svg" alt="">
              <div class="down-content">
                <p>تمكين الشركات من خلال الحصول على رؤية في الوقت المناسب بشأن المناقصات العامة في ليبيا</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/Dev-portal-icon.svg" alt="">
              <div class="down-content">
                <p > لاعلان عن العطاء وتحقيق اقصى قدرة لظهور العطاءات وزيادة الشفافية في المنافسات الحكومية</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/Reports-icon.svg" alt="">
              <div class="down-content">
                <p>
                  تقديم مساعدة شاملة في اعداد وثائق العطاء
                  وتسهيل الاجراءات وتوحيدها</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <!-----------------------------------------------الاحصائيات------------------------------------------->
    <div class="fun-facts">
      <div class="container">
        <div class="row">

          <div class="col-md-6">
            <div class="left-content">
              <span>منذ انطلاق المنصة</span>
              <h2>اهم الاحصائيات في <br><em> المنصة </em></h2>
            </div>
          </div>


          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">45</div>
                  <div class="count-title">مستخدم جهة حكومية</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1280</div>
                  <div class="count-title"> ملفات تقديم الطلب</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">578</div>
                  <div class="count-title"> المنافسات المطروحة </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">126</div>
                  <div class="count-title">مستخدم شركات</div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
<!--------------------------------------------------------------------------------------------------------------->


		   <!-- rigeter........................ -->


  <div class="body2">
    <div class="container">
      <input type="radio" name="dot" id="one" />
      <input type="radio" name="dot" id="two" />

      <div class="button">
        <label for="one" class="active one">للموؤسسات</label>
        <label for="two" class="two">لشركات</label>
      </div>

    <div class="main-card">

    <div class="content">

      <div class="card one">
        <div class="top">
          <div class="title">لوحة التحكم</div>

        </div>
        <div class="info">يمكنك الوصول إلى لوحة تحكم سهلة الاستخدام تتيح لك إدارة وتتبع العطاء المعلن عنه بسهولة.   </div>

      </div>

      <div class="card two">
        <div class="top">
          <div class="title"> تحميل مستندات</div>
        </div>
        <div class="info">  امكانية تحميل وثائق المناقصة مباشرة إلى منصتنا ، مما يلغي الحاجة إلى مشاركة المستندات بشكل منفصل   </div>


      </div>
      <div class="card three">
        <div class="top">
          <div class="title"> ادارة المناقصات </div>
        </div>

        <div class="info"> يمكنك إنشاء وحفظ مناقصة كمسودة ، وإجراء مراجعات قبل نشرها بمجرد نشرها ، تصبح مناقصتك مرئية لمقدمي العروض المحتملين. ". </div>

      </div>
    </div>






    <div class="content">

      <div class="card one">
        <div class="top">
          <div class="title"> انشاء حساب</div>

        </div>
        <div class="info">يوفر الموقع للموردين امكانية انشاء حساب الذي يمكن من خلاله ارسال طلبات الى الجهات الحكومية</div>
        <div class="details">
        </div>
      </div>

      <div class="card two">
        <div class="top">
          <div class="title">  واجهة سهلة الاستخدام</div>
        </div>
        <div class="info">  توفير واجهة سهلة الاستخدام تجعل من السهل على المستخدمين التنقل واستخدام المنصة. </div>


      </div>
      <div class="card three">
        <div class="top">
          <div class="title">  الاشعارات</div>
        </div>

        <div class="info">
         إعداد تنبيهات لتلقي الإخطارات كلما تم نشر مناقصة جديدة أو تحديث مناقصة موجود</div>

      </div>
    </div>






  </div>

  </div>
  </div>



    <!--------------------------------------------------------------------->


    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="1" alt="1">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="2" alt="2">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="3" alt="3">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="4" alt="4">
              </div>

              <div class="partner-item">
                <img src="assets/images/client-01.png" title="5" alt="5">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->




		  <!-------------------------------------- footer -------------------------------------------->


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
            <h6>© 2024 - E-tendering,All Right Reserved</h6>

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
    <script src= "{{asset('assets/js/custom.js')}}"></script>
    <script src= "{{asset('assets/js/owl.js')}}"></script>
    <script src= "{{asset('assets/js/slick.js')}}"></script>
    <script src= "{{asset('assets/js/accordions.js')}}"></script>

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

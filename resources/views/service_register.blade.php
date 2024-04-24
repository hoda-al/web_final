<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>خدمات التسجيل</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/tender.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
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

    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="{{route('singin')}}">Sing Up</a></li>
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
              <li class="nav-item ">
                <a class="nav-link" href="{{route('index')}}">الرائيسي
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('about')}}">حول المنصة</a>
              </li>
              <li class="nav-item active" >
                <a class="nav-link" href="{{route('register')}}"> التسجيل</a>
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

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>خدمات التسجيل</h1>
            <span>توفر المنصة انشاء حسابات للموردين والموؤسسات</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services" >
      <div class="container">
        <div class="row" id="tabs">

          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'><i class="fa fa-angle-left"></i> تسجيل جهة حكومية </a></li>
              <li><a href='#tabs-2'><i class="fa fa-angle-left"></i> تسجيل مورد </a></li>
            </ul>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <h4>  تسجيل موؤسسة / .ly </h4>
                <p>توفر  المنصة لوحة تحكم شاملة للشركات لإدارة مناقصاتها المعلن عنها ، مما يسمح لها باستهداف مقدمي العطاءات المحتملين والتفاعل معهم بشكل فعال.و توفر واجهة سهلة الاستخدام لتتبع وإدارة الاستجابات للمناقصات ، مما يضمن إدارة العطاءات بكفاءة </p>
                <a href="{{route('singin')}}" class="login-button">تسجيل</a>
              </article>

              <article id='tabs-2'>
                <h4> تسجيل مورد </h4>
                <p>تقدم العديد من الخدمات للقطاع الخاص التي تهدف إلى رفع نسبة المشاركة في المنافسات والمشتريات الحكومية، وزيادة دور المحتوى المحلي في التنمية الاقتصادية ورفع مساهمة المنشآت الصغيرة والمتوسطة</p>
                <a href="{{route('company')}}" class="login-button">تسجيل</a>
              </article>



            </section>
          </div>


        </div>
      </div>
    </div>


    <!----------------------------------content us------------------------>
    <main>
        <h1 style="color: #F8C01B;">Frequently Asked Questions</h1>
        <div class="topic">
          <div class="open">
            <h2 class="question">1. What is Lorem Ipsum?</h2>
            <span class="faq-t"></span>
          </div>
          <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...<a href="#">Read More</a></p>
        </div>
        <div class="topic">
          <div class="open">
            <h2 class="question">2. Best Lorem Ipsum?
            </h2><span class="faq-t"></span>
          </div>
          <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...<a href="#">Read More</a></p>
        </div>
        <div class="topic">
          <div class="open">
            <h2 class="question">3. Why do we do Lorem Ipsum?
            </h2><span class="faq-t"></span>
          </div>
          <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged....<a href="#">Read More</a></p>
        </div>
        <div class="topic">
          <div class="open">
            <h2 class="question">4. What are Lorem Ipsum?
            </h2><span class="faq-t"></span>
          </div>
          <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...<a href="#">Read More</a></p>
        </div>
        <div class="topic">
          <div class="open">
            <h2 class="question">5. What is Lorem Ipsum?
            </h2><span class="faq-t"></span>
          </div>
          <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...<a href="#">Read More</a></p>
        </div>
      </main>

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
          <li><a data-scroll href="{{route('service_register')}}"> التسجيل </a></li>
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

     <script src= "{{asset('assets\js\faq.js')}}"></script>




<script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


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

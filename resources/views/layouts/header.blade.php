

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
    <!-- end header -->

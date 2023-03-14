<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The RealSpark</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

</head>

<body>

  <!-- ======= Header ======= -->
  
  <header id="header" class="header mt-5">
    
    <div class="container">
      <p class="logo mb-5">RealSpark Business Solutions</p>
      <nav id="navbar" class="navbar">
        <ul class="mx-auto">
        <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/about')}}">about</a></li>
          <li><a href="{{url('/service')}}">Services</a></li>
          <li><a href="{{url('/contact')}}">Contact</a></li>
          <li><a href="register.html" class="button">Register</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->


  <!-- ==== Hero Section Start ==== -->

  <!-- <section id="hero">
    <div class="container d-none d-sm-block">
      <div class="row ">
        <div class=" col-12 text-center">
          <h1 class="hero-heading offset-2 col-8 mb-4">Explore RealSpark Business Solutions</h1>
          <p class="hero-para offset-2 col-8 mb-5">Helping You Become Great</p>
          <div class="hero-img">
            <img src="./assets/img/4f8f5a805e504f0c95afe05b01d26d77.webp" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid d-block d-sm-none">
      <div class="row  hero-mobile">
        <div class=" col-12 text-center">
          <div class="hero-img mb-5">
            <img src="./assets/img/4f8f5a805e504f0c95afe05b01d26d77.webp" alt="" class="img-fluid">
          </div>
          <h1 class="hero-heading offset-1 col-10 mb-3">Explore RealSpark Business Solutions</h1>
          <p class="hero-para offset-1 col-10">Helping You Become Great</p>
        </div>
      </div>
    </div>
  </section> -->


  <!-- ==== Service Section ==== -->

  <section id="about">
    <div class="container">
      <div class="row">
        <h1>About Us</h1>
        <p>Committed to Excellence</p>
      </div>
      <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <p class="desc mb-4">RealSpark Business Solutions offers the comprehensive capabilities and deep industry knowledge necessary to help you solve the most complex issues of your organization. Since opening our doors in 2000, we’re proud to say that each year we have a bigger list of returning and new clients.</p>
            <p class="desc">Want to experience the expertise of RealSpark Business Solutions for yourself? Get in touch with us today and let’s discuss what we can do for you.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- ==== Team section ==== -->
  <section id="team">
    <div class="container text-center">
        <div class="row content">
            <h1>The Team</h1>
            <p>Behind the Scenes</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($team as $teamitem)
            <div class="col-md-4">
             
              <div class="card">
                <img src="{{asset('uploads/highlights/'.$teamitem->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title name">{{$teamitem->name}}</h5>
                  <p class="card-text designation">{{$teamitem->designation}}</p>
                </div>
              </div>
             
            </div>
            @endforeach
            <!-- <div class="col">
              <div class="card">
                <img src="./assets/img/11062b_07e406264bb140e18cb59e272f67ea1c_mv2.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title name">Reese Whiteman</h5>
                  <p class="card-text designation">Small Business Consultant</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="./assets/img/11062b_8b5d14a2a1af4b0f98625e1ccedd1419_mv2.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title name">Jamie Lane</h5>
                  <p class="card-text designation">Associate Director</p>
                </div>
              </div>
            </div> -->
          </div>
    </div>
  </section>


  <!-- ==== footer Section ==== -->
  <section id="footer">
    <div class="row">
      <div class="footer text-center">
        <h4>RealSpark Business Solutions</h4>
        <p>immigration@therealspark.com</p>
        <div class="copy-right">
          <h4>©2022 by RealSpark Business Solutions.</h4>
        </div>
      </div>
    </div>
  </section>

  

    






















  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
  <script src="{{asset('assets/js/main.js')}}" crossorigin="anonymous"></script>

</body>

</html>
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
          <li><a href="{{url('/signup')}}" class="button">Sign Up</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->


  <!-- ==== Hero Section Start ==== -->
             @if(session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
              @endif

  <section id="hero">
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
            <img src="{{ asset('assets/img/4f8f5a805e504f0c95afe05b01d26d77')}}" alt="" class="img-fluid">
          </div>
          <h1 class="hero-heading offset-1 col-10 mb-3">Explore RealSpark Business Solutions</h1>
          <p class="hero-para offset-1 col-10">Helping You Become Great</p>
        </div>
      </div>
    </div>
  </section>


  <!-- ==== Service Section ==== -->

  <section id="service">
    <div class="container">
      <div class="row mb-5">
        <h1 class="text-center">Our Services</h1>
        <p class="text-center">Discover Our Expertise</p>
      </div>
      <div class="row service-img ">
        <div class="col-12 col-md-6 left-img">
          <div class="bg-image">
            <img src="./assets/img/5e960dc55c064a92aeb2aaa31d57cbcb.webp" class="img-fluid" />
            <div class="mask text-light d-flex justify-content-center flex-column">
              <h4 class="title">US Immigration Consultancy</h4>
                <p data-aos="fade-up" >E2 Treaty Investor Visa</p>
                <p data-aos="fade-up" >EB3 Immigrant Visa</p>
                <p data-aos="fade-up" >EB5 Business Visa</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 right-img">
          <div class="bg-image">
            <img src="./assets/img/5e960dc55c064a92aeb2aaa31d57cbcb.webp" class="img-fluid" />
            <div class="mask mask2 text-light d-flex justify-content-center flex-column">
              <h4 class="title">Business Planning</h4>
                <p data-aos="fade-up" >Expert Guidance</p>
                <p data-aos="fade-up" >Financial Advisors</p>
                <p data-aos="fade-up" >Franchise Opportunities</p>
                <p data-aos="fade-up" >Corporation Loans</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ==== Contact Section ==== -->
  <section id="contact">
    <div class="container">
      <div class="row img-row">
        <div class="col-12 col-md-6 content">
          <h2>Contact Us</h2>
          <p>immigration@therealspark.com</p>
        </div>
        <div class=" col-12 col-md-6">
          <div class="side-img">
            <img src="./assets/img/78662f2d91154979a66e2e42f5441790.webp" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Footer Section ==== -->
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

  

    






















  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up" aria-hidden="true"></i>
</a>

  <div id="preloader"></div>

  

  <!-- Template Main JS File -->
  
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/main.js')}}" crossorigin="anonymous"></script>

</body>

</html>
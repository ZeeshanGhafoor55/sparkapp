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
            <img src="./assets/img/0141bb700ad54cf2b0457ae50b0704c5.webp" class="img-fluid" />
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

  

    






















  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
  <script src="{{asset('assets/js/main.js')}}" crossorigin="anonymous"></script>

</body>

</html>
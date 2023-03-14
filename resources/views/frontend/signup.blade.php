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



 <!-- ===== Register ===== -->
 <section id="register">
  <div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="panel panel-primary">
              <div class="panel-heading text-center">Thank you for Sign Up!</div>
              <div class="panel-body">

                  <form action="{{url('/signup')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="form-group col-12 col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" class="form-control" name="fname" placeholder="Example: John">
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" class="form-control" name="lname" placeholder="Example: Doe" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12 col-md-6">
                        <label for="fname">DOB</label>
                        <input type="date" id="birthday" name="birthday" class="form-control" >
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <label for="lname">Phone#</label>
                        <input type="text" id="number" class="form-control" name="number" placeholder="Enter Mobile Number">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12 col-md-6">
                        <label for="states">Select your State</label>
                        <select id="states" class="form-control" name="state">
                          <option value="unknown">Unknown </option>
                          <option value="alabama">Alabama</option>
                          <option value="alaska">Alaska</option>
                          <option value="arizona">Arizona</option>
                          <option value="arkansas">Arkansas</option>
                          <option value="california">California</option>
                          <option value="colorado">Colorado</option>
                          <option value="connecticut">Connecticut</option>
                          <option value="delaware">Delaware</option>
                          <option value="florida">Florida</option>
                          <option value="georgia">Georgia</option>
                          <option value="hawaii">Hawaii</option>
                          <option value="idaho">Idaho</option>
                          <option value="illinois">Illinois</option>
                          <option value="indiana">Indiana</option>
                          <option value="iowa">Iowa</option>
                          <option value="kansas">Kansas</option>
                          <option value="kentucky">Kentucky</option>
                          <option value="louisiana">Louisiana</option>
                          <option value="maine">Maine</option>
                          <option value="maryland">Maryland</option>
                          <option value="massachusetts">Massachusetts</option>
                          <option value="michigan">Michigan</option>
                          <option value="minnesota">Minnesota</option>
                          <option value="mississippi">Mississippi</option>
                          <option value="missouri">Missouri</option>
                          <option value="montana">Montana</option>
                          <option value="nebraska">Nebraska</option>
                          <option value="nevada">Nevada</option>
                          <option value="new hampshire">New Hampshire</option>
                          <option value="new jersey">New Jersey</option>
                          <option value="new mexico">New Mexico</option>
                          <option value="new york">New York</option>
                          <option value="north carolina">North Carolina</option>
                          <option value="north dakota">North Dakota</option>
                          <option value="ohio">Ohio</option>
                          <option value="oklahoma">Oklahoma</option>
                          <option value="oregon">Oregon</option>
                          <option value="pennsylvania">Pennsylvania</option>
                          <option value="rhode island">Rhode Island</option>
                          <option value="south carolina">South Carolina</option>
                          <option value="south dakota">South Dakota</option>
                          <option value="tennessee">Tennessee</option>
                          <option value="texas">Texas</option>
                          <option value="utah">Utah</option>
                          <option value="vermont">Vermont</option>
                          <option value="virginia">Virginia</option>
                          <option value="washington">Washington</option>
                          <option value="west virginia">West Virginia</option>
                          <option value="wisconsin">Wisconsin</option>
                          <option value="wyoming">Wyoming</option>
                        </select>
                      </div>
                      <div class="form-group col-12 col-md-6">
                        <label for="gender">Your Gender</label>
                        <select id="gender" class="form-control" name="gender">
                          <option value="unknown">Unknown</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="fname">Profile Image</label>
                      <input type="file" id="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                      <label for="emailaddr">Email Address</label>
                      <input type="text" id="emailaddr" class="form-control" name="email" placeholder="Example: john.doe@gmail.com">
                    </div>
                    <input type="checkbox" id="check" name="check">
                    <label for="vehicle1">Please confirm fields</label><br>
                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-danger btn-lg" id="submitbtn" name="submit">Sign up!</button>
                    </div>
                  </form>
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
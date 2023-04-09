<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Hawi Foundation- Health With Humanity</title>

  <link rel="stylesheet" href="{{asset('../assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('../assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('../assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('../assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('../assets/css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="callto:+254702662388"><span class="mai-call text-primary"></span>+254702662388</a>
              <span class="divider">|</span>
              <a href="mailto:info@hawifoundation.org"><span class="mai-mail text-primary"></span> info@hawifoundation.org</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://web.facebook.com/Hawi254" target="_blank"><span class="mai-logo-facebook-f text-info"></span></a>
              <a href="https://twitter.com/HawiFoundation" target="_blank"><span class="mai-logo-twitter text-info"></span></a>
              <a href="https://www.linkedin.com/in/dr-sidhe-robert-29684580/?originalSubdomain=ke" target="_blank"><span class="mai-logo-linkedin text-info"></span></a>
              <a href="{{url('/#')}}" target="_blank"><span class="mai-logo-instagram text-danger"></span></a>
              <a href="https://www.youtube.com/@hawifoundation" target="_blank"><span class="mai-logo-youtube text-danger"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
          <img width="160em" height="400em" class="img-fluid" src="../assets/img/hfl.jpeg" alt="Image">
        </a>

        {{-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> --}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about_us')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/what_we_do')}}">Medical Electives</a>
            </li>
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" href="{{url('/hawi_hospital')}}">Our Clinic</a>-->
            <!--</li>-->
            <li class="nav-item">
              <a class="nav-link" href="{{url('/causes')}}">Causes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/our_events')}}">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/talk_to_us')}}">Contact</a>
            </li>
            <li class="nav-item">
             <a href="https://hawifoundation.org:2096/cpsess9920187552/3rdparty/roundcube/?_task=mail&_mbox=INBOX" target="_blank" class="btn btn-primary py-2 px-4 ms-3">Web Mails</a>
            </li>
            <li class="nav-item">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
  Donate
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Give Donation Today</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <script src="https://donorbox.org/widget.js" paypalExpress="true"></script><iframe src="https://donorbox.org/embed/hawi-medical-centre-5" name="donorbox" allowpaymentrequest="allowpaymentrequest" 
        seamless="seamless" frameborder="0" scrolling="no" height="500px" width="100%" style="max-width: 500px; min-width: 250px; max-height:none!important"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 
            </li>
            
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @yield('content')

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Hawi Foundation</h5>
          <ul class="footer-menu">
            <a class="navbar-brand" href="{{url('/#')}}">
              <img width="150em" height="350em" class="img-fluid" src="../assets/img/hfl.jpeg" alt="Image">
            </a>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Quick Links</h5>
          <ul class="footer-menu">
            <li><a href="{{url('/')}}">Home Page</a></li>
            <li><a href="{{url('/causes')}}">Why Us</a></li>
            <li><a href="{{url('/hospital')}}">Hawi Clinic</a></li>
            <li><a href="{{url('/talk_to_us')}}">Talk To Us</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Become our Patner</h5>
          <ul class="footer-menu">
            <li><a href="{{url('/get_involved')}}">Donor</a></li>
            <li><a href="{{url('/get_involved')}}">Volunteer</a></li>
            <li><a href="{{url('/get_involved')}}">Scholar</a></li>
            <li><a href="{{url('/#')}}">FAQ's</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Hawi Foundation, <br> P.O Box 75203-00200 <br> Nairobi-Kenya</p>
          <a href="callto:+254702662388" class="footer-link">+254702662388</a>
          <a href="mailto:info@hawifoundation.org" class="footer-link">info@hawifoundation.org</a>

        </div>
      </div>

      <hr>

       <p> 
        Copyright &copy; <script>document.write(new Date().getFullYear());</script>| <a href="http://mtaanitech-hub.co.ke"><span class="text-primary">Hawi Foundation</span></a> | All rights reserved.
      </p>
    </div>
  </footer>

<script src="{{asset('../assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('../assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('../assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('../assets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('../assets/js/theme.js')}}"></script>
  
</body>
</html>
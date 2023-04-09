@extends('layouts.template')
@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/hawi2.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Welcome To Hawi Foundation Clinic</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Make Appointment</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> 
    
    <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Why Hawi <br> Clinic?</h1>
            <p>Hawi Clinic have doctors and we practice health that transcends Humanity. We attribute our achievements to our ability to develop core doctrines over this
period of operations, which has been derived from our hands-on experience in the
medical practice both locally and internationally.
By running various elective placement programs such as medical, outreach, work
experience, sports and eco-tourism, HawiFoundation has been able to cater to the
various clients’ requests from medical students and professionals while
simultaneously meeting the medical needs of disadvantaged communities around the
world.</p>
<p>At Hawi clinic, we work with communities and institutions at our program destinations to provide
our clients with a unique opportunity to participate in various projects and trips so
that they receive a rewarding hands-on experience and have the opportunity to
positively impact the lives of people living in local communities.</p>

<p>We Offer Internships and International Health Placements:
We realize that the term “elective” program has different
inference depending on which part of the globe you are coming from. In some
countries this period of on the job training is referred to as “pre-clinical placement,”
“internship,” “international placement,” or “medical elective.”</p>

            <a href="{{url("/talk_to_us")}}" class="btn btn-primary">Talk To Our Doctor</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/hawi8.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/bg_02.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-logo-facebook"></span></a>
                <a href="#"><span class="mai-logo-linkedin"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Stein Albert</p>
              <span class="text-sm text-grey">Cardiology</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/bg_02.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-logo-facebook"></span></a>
                <a href="#"><span class="mai-logo-linkedin"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Alexa Melvin</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/bg_02.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-logo-facebook"></span></a>
                <a href="#"><span class="mai-logo-linkedin"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Our Clinical Services</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Dental Clinic</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_01.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Pharmacy</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_01.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">General Surgery</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_01.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Ragiology</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_02.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Nursing Services</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_02.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Maternity Services</h5>
              <div class="site-info">
                <div class="avatar mr-2">            
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_01.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Laboratory Screening</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_02.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Obstetric & Gynecology</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_01.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Inpatient/Outpatient`</h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/bg_01.jpg" alt="">
                  </div>
                  <span class="text-primary">Specialist: </span><span>Dr. Robert Sidhe</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> 
  <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

@endsection
@extends('layouts.template')
@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/hawi5.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url("/#")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>Trained</span> Medical Professionals</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>Excellent </span>Health Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>Quality </span>Inhouse Pharmacy</p>
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
        <h1>Who <br> We Are</h1>
        <p class="text-grey mb-4">Hawi Foundation is a medical humanitarian organization committed to providing universal healthcare
programs to the poor in villages and urban slums in Kenya. With a mission of bringing hope and healing
to affected communities, the Hawi Foundation works to provide preventive, curative and promotional
healthcare as well as socio-economic support to those in need in Kenya.</p>
        <p class="text-grey mb-4">Founded in 2014, Hawi Foundation is registered in United Sates of America and Kenya as not for profit
organization. Through our income from Medical electives and generous support from individuals,
businesses and foundations, Hawi Foundation has reached out to those in need in Kenya and beyond
with the goal of bridging the gap between healthcare services and those who need it most. We have so
far conducted 41 medical camps and 7 surgical camps in 17 counties across Kenya.</p>
<p class="text-grey mb-4">Hawi Foundation works alongside local healthcare providers and NGO’s to develop and sustain projects
that meet the medical and nutritional needs of the communities it serves. Its universal healthcare
programs are focused on curative healthcare, health promotion and disease prevention. This includes
hospital visits, mobile Clinic healthcare services and access to important medications, medical specialists
and Medical supplies.</p>
        <a href="{{url('/what_we_do')}}" class="btn btn-primary">What We Do</a>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
        <div class="img-place custom-img-1">
          <img src="{{url('/../assets/img/hawihse.jpeg')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</div> <!-- .bg-light -->

<!-- .page-section -->
<div class="page-section pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
        <div class="img-place custom-img-1">
          <img src="{{url('/../assets/img/hawi18.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 py-3 wow fadeInUp">
        <h1>Why <br> Hawi Foundation</h1>
        <p>At Hawi, We donate all our profits to Medical Charity and Health System strengthening to the poor
communities in Kenyan villages and Urban Slums. Don't you want to be part of that?. Service to
Humanity is Service to God. We not only make arrangements with regards to all aspects of your program
including travel arrangements, Health Insurance, secure residence and stay, but we
are also on hand to receive you personally and be your guide during the entire period
of the program.</p>
           <p>Our programs are tailor made to give you a wholesome experience to achieve your
desired exposure. As a result of our vast experience in this field, we have cordially
working relationships with program professionals in the institutions we will place
you. So you are assimilated in to a family of professional with open arms.</p>
<p>We know being a stranger in a foreign country can be a confounding experience, so at
HawiFoundation we have made it our mission to ensure you feel at home during your
entire stay. Our team has created bonds with local communities in all our destinations
and our clients are therefore accorded the highest level of good neighborliness during
their stay.</p>
        <a href="{{url('/get_involved')}}" class="btn btn-primary">Get Involved</a>
      </div>
    </div>
  </div>
</div> 
<!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Important To Note About Hawi</h1>
          <div class="text-lg">
            <p>HawiFoundation is a leading organizer of experiential travel in Africa. We go extra
miles to provide you with an end-to-end service Medical Internships, Work
experience, Teaching and Volunteer experience, educational exchanges as well as,
expedition trips to Africa.</p>
            <p>The Hawi foundation program covers a range of provisions among them Medical
electives, Medical Missions, outreach programs, Ecotourism as well as sports
electives. At the end of the day; No matter the program one is at, be rest assured of a
great hands-on experience and a life-time exposure!</p>
          </div>
        </div>

        <div class="page-section">
          <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Management Team</h1>
      
            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
              <div class="item">
                <div class="card-doctor">
                  <div class="header">
                    <img src="../assets/img/sidhe.jpg" alt="">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-mail"></span></a>
                    </div>
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">Dr. Sidhe Robert</p>
                    <span class="text-sm text-grey">Founder/Executive Director </span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card-doctor">
                  <div class="header">
                    <img src="../assets/img/opande.jpeg" alt="">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-mail"></span></a>
                    </div>
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">Mr Collins Opande MPH</p>
                    <span class="text-sm text-grey">Chief Technical Officer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card-doctor">
                  <div class="header">
                    <img src="../assets/img/dan.jpeg" alt="">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-mail"></span></a>
                    </div>
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">Dr Kiogora Mutwiri Dan</p>
                    <span class="text-sm text-grey">Programs Director.</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card-doctor">
                  <div class="header">
                    <img src="../assets/img/anne.jpeg" alt="">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-mail"></span></a>
                    </div>
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">Hon Anne Thumbi</p>
                    <span class="text-sm text-grey">Director Public Relations</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card-doctor">
                  <div class="header">
                    <img src="../assets/img/lyn.jpeg" alt="">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-mail"></span></a>
                    </div>
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">Lynne Miheso</p>
                    <span class="text-sm text-grey">Finance Director</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

@endsection
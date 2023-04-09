@extends('layouts.template')
@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/haw10.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Welcome To Hawi Foundation</span>
        <h1 class="display-4">Health With Humanity</h1>
        <a href="{{url('/get_involved')}}" class="btn btn-primary py-2 px-4 ms-3">Get Involved</a>
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
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>Charity Work</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>Electives & Internships</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>Volunteer Work</p>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>Community Projects</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Clinical Services</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>Health & Social Work</p>
            </div>
          </div>
        </div>
      </div>
    </div><br> 
    
    {{-- <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/hawi6.jpg);">
      <div class="container py-5 py-lg-0">
        <div class="row align-items-center">
          <div class="col-lg-4 wow zoomIn">
          </div>
          <div class="col-lg-8 wow fadeInRight">
            <ul>
              <li class="text-primary">Better Packages</li>
              <li class="text-primary">Placement</li>
              <li class="text-primary">Accomodation</li>
              <li class="text-primary">Food & Drinks</li>
              <li class="text-primary">Support Network</li>
              <li class="text-primary">Travelling</li>
        <a class="btn btn-dark ml-lg-3" href="{{url('/#')}}">Download FAQ's Here</a>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- .banner-home --> --}}
    
     <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp sidebar-title">Our Medical Mission Services</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/clinic1.jpeg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Field Surgery</h5>
              <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>We work with local health facilities for these surgeries.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/clinic2.jpeg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Consultation Room</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>Hawi field  consultation rooms.</p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/med3.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">General Surgery</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>Some conditions we pick during our medical camps and treat.</p>
              </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/med10.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Sonography</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>We do Sonography services during our camps.</p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/person/bg_01.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Field Phlebotomy for Laboratory</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>We have comprehensive Laboratory services in our camps.</p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/doctors/bg_02.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Our Patners</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>Project humanity</p>
              </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/med6.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Eye Screening</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>Our Field eye screening program</p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/hawi8.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Field Pharmacy</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>Patients receiving treatment during medical camp.</p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/med7.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title text-danger">Triage Session</h5>
              <div class="site-info">
                  <div class="site-info">
                  <span class="text-primary">Mission</span>
              <p>Based on any situation, the need and urgency of treatment is our priority.</p>
              </div>
              </div>
            </div>
          </div>
        </div>
        

      </div>
    </div>
  </div> 

    <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp sidebar-title">Principles of Management</h1>
      <div class="row mt-5">
        <div class="col-lg-3 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <p class="text-white bg-dark">Motto</p>
              </div>
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/motto.png" alt="">
              </a>
            </div>
            <div class="body">
              <div class="site-info">
                  <h5 class="text-primary">Our set of beliefs, ideals or ethical stance</h5>
              <p>Health With Humanity, Afya na Utu</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <p class="text-white bg-dark">Mision</p>
              </div>
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/vision.png" alt="">
              </a>
            </div>
            <div class="body">
              <div class="site-info">
              <h5 class="text-primary">Mision Statement</h5>
              <p>To reach out to the needy through state of art medical and surgical treatment across the region 
                as well as equipped emmergency response team. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <p class="text-white bg-dark">Vision</p>
              </div>
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/vvision.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <div class="site-info">
              <h5 class="text-primary">Vision Statement</h5>
              <p>To provide accesible, holistic, compassionate and evidence-based healthcare to the people of Kenya, 
                where healthcare is embraced as holistic experience for all.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <p class="text-white bg-dark">Values</p>
              </div>
              <a href="{{url('/#')}}" class="post-thumb">
                <img src="../assets/img/cvalue.png" alt="">
              </a>
            </div>
            <div class="body">
              <div class="site-info">
              <h5 class="text-primary">Core Values</h5>
              <ul>
                <li>Humanity</li>
                <li>Empathy</li>
                <li>Intergrity</li>
                <li>Compassion</li>
                <li>Collaboration</li>
                <li>Stewardship</li>
              </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp sidebar-title">Testimonials</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="body">
              <h5 class="mb-0 ">Mike Mbuvi Sonko</h5>
              <span class="text-sm text-primary">Former Governor, Nairobi County</span>
              <p><em>“I first heard about Hawi Foundation when they were running medical camps at Kibera Slums in Nairobi,I visited their camp impromptu, that was the beggining of our awesome experience with Hawi Foundation.As a Senator and then Governor of Nairobi,we partnered and we conducted free medical camps in 19 slums in Nairobi County. So many people were helped and with our partnership we pick more patients for further and specialist care.
              Community health volunteers were also activated in these slums under support by Hawi Foundation.“</em></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="body">
              <h5 class="mb-0 ">Purity Chepchirchir</h5>
              <span class="text-sm text-primary">Nandi County</span>
              <p><em>"As a member  of meteitei  community,I want to register my appreciation for Hawi Foundation  medical camp that was conducted  at Aic meteitei  Station and surgeries  at meteitei  subcounty  Hospital. 
              Many people benefited  especially  those who had no hope due to financial  constraints ,Hawi Foundation made sure that all people were reached and the equality  was there.The free treatment  and free surgeries  was the best thing  that my community were happy about it ..we built a forever  bond with Hawi family and they became our role model as youths."</em></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="body">
              <h5 class="mb-0 ">Bethsheba Kwamboka</h5>
              <span class="text-sm text-primary">Kisii County</span>
              <p><em>"I was assisted through the medical camp that was done at Maxwel Academy Campus in Ogembo. 
              I had Fibroids for many years and through Hawi Foundation I received treatemnt and surgery at Kisii Teaching and Referral Hospital.God bless them."</em></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="body">
              <h5 class="mb-0 ">Elizabeth Adhiambo Ojijo</h5>
              <span class="text-sm text-primary">Nurse, Mathare North Health Centre</span>
              <p><em>"I want to register my appreciation for the Hawi Foundation for giving hope to the adolescents and pediatrics on ART care including their caregivers at Mathare North Health center. First by giving food basket and watches to the young ones.
              These will help them in keeping time of their medication and the rate of suppression will now increase to achieve thr Tripple Zero.We are looking forward to more support especially on the area of our weekend Children HIV/ART Clinic."</em></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="body">
              <h5 class="mb-0 ">Caren Awino</h5>
              <span class="text-sm text-primary">Mechanical Engineer</span>
              <p><em>“In the journey with Hawi Foundation, I have actually seen health desires been converted in to realty. It’s a great Privilege to be a Part of this great foundation. The Philanthropic work creates a great Influence on Society and Changing Minds, health and endevours of people for a brighter future of every members of our scoiety
              .Hope you create MILESTONES ahead. Good Hawi Team.”</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp sidebar-title">Join Our Medical Mission</h1>
 <p class="text-center">When you chose your medical electives with us,you help send free treatment and free surgery to a poor family somewhere in Kenya. Join us today!</p>
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
              <option value="cardiology">Electives/Internships</option>
              <option value="dental">Medical Mission</option>
              <option value="neurology">Volunteer</option>
              <option value="orthopaedics">Donor</option>
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
@extends('layouts.template')
@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/hawi10.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url("/#")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Causes</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">What Inspired Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 01</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw11.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Free Medical Camp Clinic</a></h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 02</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw8.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Promotion of Quality Education</a></h5>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 03</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw12.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Hygiene & Sanitation Program</a></h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 04</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw4.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Rescuing The Homeless</a></h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 05</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw6.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Reduction of Diseases & Pandemics Cases</a></h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 06</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw13.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Need to Offer Charity Work</a></h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 07</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw7.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Need for Community Outreach Programs</a></h5>
                </div>
              </div>
            </div>
            
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <p class="bg-primary text-white">Case 08</p>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/haw5.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('/#')}}">Food Security Improvemnt</a></h5>
                </div>
              </div>
            </div>

          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">

            <!--<div class="sidebar-block">-->
            <!--  <h3 class="sidebar-title">Recent Blog</h3>-->
            <!--  <div class="blog-item">-->
            <!--    <a class="post-thumb" href="">-->
            <!--      <img src="../assets/img/blog/blog_1.jpg" alt="">-->
            <!--    </a>-->
            <!--    <div class="content">-->
            <!--      <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>-->
            <!--      <div class="meta">-->
            <!--        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>-->
            <!--        <a href="#"><span class="mai-person"></span> Admin</a>-->
            <!--        <a href="#"><span class="mai-chatbubbles"></span> 19</a>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="blog-item">-->
            <!--    <a class="post-thumb" href="">-->
            <!--      <img src="../assets/img/blog/blog_2.jpg" alt="">-->
            <!--    </a>-->
            <!--    <div class="content">-->
            <!--      <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>-->
            <!--      <div class="meta">-->
            <!--        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>-->
            <!--        <a href="#"><span class="mai-person"></span> Admin</a>-->
            <!--        <a href="#"><span class="mai-chatbubbles"></span> 19</a>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--  <div class="blog-item">-->
            <!--    <a class="post-thumb" href="">-->
            <!--      <img src="../assets/img/blog/blog_3.jpg" alt="">-->
            <!--    </a>-->
            <!--    <div class="content">-->
            <!--      <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>-->
            <!--      <div class="meta">-->
            <!--        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>-->
            <!--        <a href="#"><span class="mai-person"></span> Admin</a>-->
            <!--        <a href="#"><span class="mai-chatbubbles"></span> 19</a>-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->

            <div class="sidebar-block">
              <h3 class="sidebar-title">Our Areas of Focus</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Health</a>
                <a href="#" class="tag-cloud-link">Disease & Pandemics</a>
                <a href="#" class="tag-cloud-link">Food Security</a>
                <a href="#" class="tag-cloud-link">Hygiene & Sanitation</a>
                <a href="#" class="tag-cloud-link">Education</a>
                <a href="#" class="tag-cloud-link">Peace Keeping</a>
                <a href="#" class="tag-cloud-link">Gender Equality</a>
                <a href="#" class="tag-cloud-link">Talent & Skills Development</a>
              </div>
            </div>

          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

@endsection
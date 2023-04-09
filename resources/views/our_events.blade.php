@extends('layouts.template')
@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/haw15.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url("/#")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Happenings</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Organized Events</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <h3 class="sidebar-title">Upcoming Event</h3>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="../assets/img/person/bg_03.jpg" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-primary">By:</span> <a href="#">Hawi Foundation Admin</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <span class="text-primary">Date: </span><a href="#">22 Nov, 2023</a>
              </div>
              <span class="divider">|</span>
              <div>
                <span class="text-primary">Purpose: </span><a href="#">Fund Drive</a> 
              </div>
              <span class="divider">|</span>
            </div>
            <h2 class="post-title h1">Funding</h2>
            <div class="post-content">
<p>We are so excited to Launch our First Fundraiser to help us buy a Mobile Clinic Truck and also strengthen our in-house Medical Centres.</p>
<p>We shall have excoting activities like, Bicycle ride, Cultural shows, Story telling, Arts and painting..
Be ready!!</p>
            </div>
          </article> 
          <!-- .blog-details -->

        </div>
        <div class="col-lg-4">
          <div class="sidebar">

            <div class="sidebar-block">
              <h3 class="sidebar-title">Past Events</h3>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/hawi10.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Community Outreach</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> October 12, 2017</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/hawi12.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Free Medical Camp</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> August 12, 2019</a>
                  </div>
                </div>
              </div>

              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/hawi13.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Helping The Needy</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                  </div>
                </div>
              </div>

              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/hawi14.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">World Aids Day</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> December 01, 2020</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/hawi8.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Health Clinic Day</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> February 18, 2021</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
 
@endsection
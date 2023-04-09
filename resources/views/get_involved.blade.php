@extends('layouts.template')
@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/hawi17.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url("/#")}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Get Involved</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Join Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
<div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          
        </div>
      </div> 
      <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="../assets/img/hawi1.jpg" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-primary">By:</span> <a href="#">Hawi Foundation Admin</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <span class="text-primary">Date: </span><a href="#">15th Aug, 2020</a>
              </div>
              <span class="divider">|</span>
              <div>
                <span class="text-primary">Title: </span><a href="#">Donors and Volunteers</a> 
              </div>
            </div>
            <h2 class="post-title h1">Be Part Of The Team</h2>
            <div class="post-content">
              <p>If you want to reserve yourself a place on one of our electives placements then you can do so reaching out to us via the contact information page.</p>
              <p>We require a US$100 commitment from you in order to secure your place. Payments processing will be available after filling in the application form. Please note that we cannot begin to
organize your elective placement until we receive this payment. The remaining balance is then due on arrival.</p>
<p>As soon as we have received your deposit and confirmed your place on the program, we will
begin your registration. Your dedicated program manager will be in touch directly to introduce
themselves and begin your preparation.Should you Change your Mind. We shall do refund until
15 days to start of your electives.</p>
            </div>
            <div class="post-tags">
              <a href="#" class="tag-link">Application Fee</a>
              <a href="#" class="tag-link">Donation</a>
              <a href="#" class="tag-link">Volunteer</a>
              <a href="#" class="tag-link">Become a Scholar</a>
            </div>
          </article> <!-- .blog-details -->

          <div class="page-section">
            <div class="container">
              <h1 class="text-center wow fadeInUp">Billing Information</h1>
        
              <form class="main-form">
                <div class="row mt-5 ">
                  <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" placeholder="Full name">
                  </div>
                  <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" placeholder="Email address..">
                  </div>
                  <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" placeholder="Phone Number..">
                  </div>
                  <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" placeholder="Country..">
                  </div>
                  <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control">
                  </div>
                  <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="number" class="form-control" placeholder="How Much Can You Offer?">
                  </div>
                  <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="departement" id="departement" class="custom-select">
                      <option value="_blank">Payment Mode</option>
                      <option value="donor">Mpesa Paybill</option>
                      <option value="volunter">Bank Account</option>
                      <option value="scholar">Paypal Option</option>
                      <option value="others">Other Money Transfer Modes</option>
                    </select>
                  </div>
                  <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="3" placeholder="Donation Purpose.."></textarea>
                  </div>
                </div>
        
                <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
              </form>
            </div>
          </div> <!-- .page-section -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Why Get Involved?</h3>
              <ul class="categories">
                <li><a href="#">Projects Done <span>1500</span></a></li>
                <li><a href="#">Schloarships offered <span>35</span></a></li>
                <li><a href="#">Our Financial Goal <span>ksh. $1.5</span></a></li>
                <li><a href="#">Our Volunteers <span>42</span></a></li>
                <li><a href="#">Our Patners <span>95</span></a></li>
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Ways of Being Part of Us</h3>
              <ul class="categories">
                <li><a href="#">Through Donation </a></li>
                <li><a href="#">Voluntary Work </a></li>
                <li><a href="#">Charity Fund </a></li>
                <li><a href="#">Helping the needy </a></li>
                <li><a href="#">Crowd Funding </a></li>
                <li><a href="#">Share Knowledge </a></li>
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Payment Methods</h3>
              <div class="tagcloud">
                <div class="col-lg-12 wow ">
                  <a href="#"><img src="{{url('../assets/img/logo/mpesa.png')}}" alt=""></a>
                  <a href="#" class="ml-2"><img src="{{url('../assets/img/logo/banks2.png')}}" alt=""></a>
                </div>
              </div>
            </div>

          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/hawi13.jpg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <a href="#" class="ml-2"><img src="{{url('../assets/img/logo/paypal1.png')}}" alt=""></a>
          <a href="#" class="ml-2"><img src="{{url('../assets/img/logo/westu.jpg')}}" alt=""></a>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .banner-home -->  
@endsection
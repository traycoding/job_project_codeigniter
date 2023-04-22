<!--=================================
Banner -->
<section class="position-relative">
  <div class="banner bg-holder bg-overlay-black-20 text-dark" style="background-image: url(images/bg/banner-02.jpg);">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-9 text-start position-relative">
            <h1 class="text-dark">Drop <span class="text-primary"> Resume </span> & Get Your <span class="text-primary">Desire Job</span></h1>
            <p class="lead mb-4 mb-lg-5 fw-normal">Find Jobs, Employment & Career Opportunities</p>
          <div class="job-search-field">
            <div class="job-search-item">
              <form class="form row">
                <div class="col-lg-4">
                  <div class="form-group mb-3">
                    <div class="d-flex">
                      <label class="form-label">What</label>
                      <span class="ms-auto">e.g. job, company, title</span>
                    </div>
                    <div class="position-relative left-icon">
                      <input type="text" class="form-control" name="job_title" placeholder="Job title, skill or company">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group mb-3">
                    <div class="d-flex">
                      <label class="form-label">Where</label>
                      <span class="ms-auto">e.g. city, county or postcode</span>
                    </div>
                    <div class="position-relative left-icon">
                      <input type="text" class="form-control location-input" name="job_title" placeholder="Town, city or postcode">
                      <i class="far fa-compass"></i>
                      <a href="#">
                        <div class="detect">
                          <span class="d-none d-sm-block">Detect</span>
                          <i class="fas fa-crosshairs"></i>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <div class="form-group form-action mb-3">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i> Find Jobs</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="job-tag mt-4">
            <ul class="">
              <li class="text-primary">Trending Keywords :</li>
              <li><a href="#">Automotive,</a></li>
              <li><a href="#">Education,</a></li>
              <li><a href="#">Health and Care Engineering</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg  class="banner-shape" xmlns="http://www.w3.org/2000/svg" width="100%" height="100" viewBox="0 0 1920 100">
  <path class="cls-1" fill="#ffffff" d="M0,80S480,0,960,0s960,80,960,80v20H0V80Z"/></svg>
</section>
<!--=================================
Banner -->

<!--=================================
Browse-job -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="browse-job d-flex">
          <h3 class="mb-3">Browse Jobs</h3>
          <div class="justify-content-center flex-fill">
            <ul class="nav nav-tabs nav-tabs-02 justify-content-center d-flex mb-3 mb-md-0" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Location</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Companies</a>
              </li>
            </ul>
          </div>
          <div class="job-found mb-3">
            <span class="badge badge-lg bg-primary">24123</span>
            <h6 class="ms-3 mb-0">Job Found</h6>
          </div>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row mt-4 mt-md-5">
              <?php
                foreach($browse_categories as $category)
                {
                  ?>
                  <div class="col-md-4 border-end mb-3 mb-md-0">
                    <div class="category-style-02">
                      <ul class="list-unstyled mb-0">
                        <li><a href="#"><h6 class="category-title"><?= $category->name ?></h6> <span class="category-count">32761</span> </a></li>
                      </ul>
                    </div>
                  </div>
                <?php
                }
              ?>
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mt-4 mt-md-5">
              <?php
                foreach($browse_locations as $location)
                {
                  ?>
                  <div class="col-md-4 border-end mb-3 mb-md-0">
                    <div class="category-style-02">
                      <ul class="list-unstyled mb-0">
                        <li><a href="#"><h6 class="category-title"><?= $location->name ?></h6> <span class="category-count">32761</span> </a></li>
                      </ul>
                    </div>
                  </div>
                <?php
                }
              ?>
            </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row mt-4 mt-md-5">
              <?php
                foreach($browse_companies as $company)
                {
                  ?>
                  <div class="col-md-4 border-end mb-3 mb-md-0">
                    <div class="category-style-02">
                      <ul class="list-unstyled mb-0">
                        <li><a href="#"><h6 class="category-title"><?= $company->name ?></h6> <span class="category-count">32761</span> </a></li>
                      </ul>
                    </div>
                  </div>
                <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Browse-job -->

<!--=================================
Browse listing  -->
<section class="space-ptb bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="browse-job d-flex">
          <h3 class="mb-3">Browse Listing </h3>
          <div class="justify-content-center flex-fill">
            <ul class="nav nav-tabs nav-tabs-02 justify-content-center d-flex mb-3 mb-md-0" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="Jobs-tab" data-bs-toggle="tab" href="#Jobs" role="tab" aria-controls="Jobs" aria-selected="true">Latest Jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="Resumes-tab" data-bs-toggle="tab" href="#Resumes" role="tab" aria-controls="Resumes" aria-selected="false">Latest Resumes</a>
              </li>
            </ul>
          </div>
          <div class="job-found mb-3">
            <span class="badge badge-lg bg-primary">24123</span>
            <h6 class="ms-3 mb-0">Job Found</h6>
          </div>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade active show" id="Jobs" role="tabpanel" aria-labelledby="Jobs-tab">
            <div class="row">
              <?php

                foreach($latest_jobs as $latest_job){
                  ?>  
                     <div class="col-lg-12 mb-4 mb-sm-0">
                      <div class="job-list">
                        <div class="job-list-logo">
                          <img class="img-fluid" src="images/svg/17.svg" alt="">
                        </div>
                        <div class="job-list-details">
                          <div class="job-list-info">
                            <div class="job-list-title">
                              <h5 class="mb-0"><a href="job-detail.html"><?= $latest_job->company_name ?></a></h5>
                            </div>
                            <div class="job-list-option">
                              <ul class="list-unstyled">
                                <li>
                                  <span>via</span>
                                  <a href="employer-detail.html">Fast Systems Consultants</a>
                                </li>
                                <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                                <li><i class="fas fa-filter pe-1"></i>Automotive Jobs</li>
                                <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="job-list-favourite-time">
                          <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                          <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span>
                        </div>
                      </div>
                    </div>
                  <?php
                }

              ?>
            </div>
          </div>
          <div class="tab-pane fade" id="Resumes" role="tabpanel" aria-labelledby="Resumes-tab">
            <div class="row">
              <?php

                foreach($user_info as $user_information)
                  {?>
                  <div class="col-lg-12 mb-4 mb-sm-0">
                    <div class="job-list">
                      <div class="job-list-logo">
                        <img class="img-fluid" src="images/svg/14.svg" alt="">
                      </div>
                      <div class="job-list-details">
                        <div class="job-list-info">
                          <div class="job-list-title">
                            <h5 class="mb-0"><a href="job-detail.html"><?=$user_information->last_name. " " .$user_information->first_name?></a></h5>
                          </div>
                          <div class="job-list-option">
                            <ul class="list-unstyled">
                              <li>
                                <span>via</span>
                                <a href="employer-detail.html">Tan Electrics Ltd</a>
                              </li>
                              <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                              <li><i class="fas fa-filter pe-1"></i>Charity & Voluntary</li>
                              <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Full-time</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="job-list-favourite-time">
                        <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                        <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3M ago</span>
                      </div>
                    </div>
                  </div>
                <?php
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-12 justify-content-center d-flex mt-4 mt-md-5">
          <a class="btn btn-white btn-lg" href="#">View More Jobs</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Browse-job -->

<!--=================================
Job-list -->
<section class="space-ptb bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-02 text-center">
          <h2 class="text-white ">Easiest Way to Use</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="feature-step feature-step-01 text-center">
          <div class="step-number"><span>01</span></div>
          <div class="feature-info-icon step-01">
            <img class="img-fluid" src="images/step/01.png" alt="">
          </div>
          <div class="feature-info-content">
            <h5 class="text-primary">Browse Jobs</h5>
            <p class="text-white mb-0">Create an account and access your saved settings on any device.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="feature-step feature-step-01 text-center">
          <div class="step-number"><span>02</span></div>
          <div class="feature-info-icon step-02">
            <img class="img-fluid" src="images/step/02.png" alt="">
          </div>
          <div class="feature-info-content">
            <h5 class="text-primary">Find Your Vacancy</h5>
            <p class="text-white mb-0">Don't just find. Be found. Put your CV in front of great employers.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-step feature-step-01 text-center">
          <div class="step-number"><span>03</span></div>
          <div class="feature-info-icon step-03">
            <img class="img-fluid" src="images/step/03.png" alt="">
          </div>
          <div class="feature-info-content">
            <h5 class="text-primary">Submit Resume</h5>
            <p class="text-white mb-0">Your next career move starts here. Choose Job from thousands of companies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Job-list -->

<!--=================================
Companies -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-02 text-center">
          <h2>Top Companies</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php

        foreach($topCompanies as $company){
          ?>  
            <div class="col-lg-3 col-md-6">
              <div class="employers-grid mb-4 mb-lg-0">
                <div class="employers-list-logo">
                  <img class="img-fluid" src="images/svg/01.svg" alt="">
                </div>
                <div class=employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="employer-detail.html"><?= $company->name ?></a></h5>
                    </div>
                    <div class="employers-list-option">
                      <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt pe-1"></i><?= $company->address ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">25 Open Position</a>
                </div>
              </div>
            </div>
          <?php
        }

      ?>  
    </div>
  </div>
</section>
<!--=================================
Companies -->

<!--=================================
Testimonial-item-02 -->
<section class="bg-light space-ptb overflow-hidden">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="section-title-02 text-center">
          <h2>Clients Say About Us</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-7">
        <div class="owl-carousel testimonial-center owl-nav-bottom-center" data-nav-arrow="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoheight="true">
          <div class="item">
            <div class="testimonial-item-02">
              <div class="testimonial-content">
                <p><i class="fas fa-quote-left quotes"></i>The Jobber database has been one of our current sources for recruitment, backed by a very experienced team who would go out of their way to make sure that requests are taken ahead. </p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-avatar avatar avatar-lg">
                  <img class="img-fluid rounded-circle" src="images/avatar/01.jpg" alt="">
                </div>
                <div class="testimonial-name">
                  <h6 class="mb-1">Michael Bean</h6>
                  <span>Web Developer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item-02">
              <div class="testimonial-content">
                <p><i class="fas fa-quote-left quotes"></i>Portal is very user-friendly in terms of searching for resumes and job postings. Also, they have an excellent database to search for resumes. As far as services are involved, it's terrific! </p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-avatar avatar avatar-lg">
                  <img class="img-fluid rounded-circle" src="images/avatar/02.jpg" alt="">
                </div>
                <div class="testimonial-name">
                  <h6 class="mb-1">Anne Smith</h6>
                  <span>Project Manager</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item-02">
              <div class="testimonial-content">
                <p><i class="fas fa-quote-left quotes"></i>Jobber is an excellent job portal. We value the resumes received through this channel. Magic Search and Power search are handy tools. We are delighted with their service.</p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-avatar avatar avatar-lg">
                  <img class="img-fluid rounded-circle" src="images/avatar/04.jpg" alt="">
                </div>
                <div class="testimonial-name">
                  <h6 class="mb-1">Felica Queen</h6>
                  <span>Product Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Testimonial-item-02 -->

<!--=================================
Why You Choose -->
<section class="space-ptb">
  <div class="container">
    <div class="row align-self-center">
      <div class="col-xl-7 col-lg-6 col-md-12">
        <div class="row">
          <div class="col-lg-9">
            <div class="section-title-02">
              <h2>Why You Choose Job Among Other Job Site?</h2>
            </div>
          </div>
        </div>
        <div class="align-self-center">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="feature-info mb-4">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-team"></i>
                </div>
                <div class="feature-info-content">
                  <h5 class="text-black mb-3">Best talented people</h5>
                  <p>If success is a process with a number of defined steps.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="feature-info mb-4">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-chat"></i>
                </div>
                <div class="feature-info-content">
                  <h5 class="text-black mb-3">Easy to communicate</h5>
                  <p>Having clarity of purpose and a clear picture of what you desire.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="feature-info mb-lg-0 mb-4">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-job-3"></i>
                </div>
                <div class="feature-info-content">
                  <h5 class="text-black mb-3">Easy to find candidate</h5>
                  <p>Introspection is the trick. Understand what you want.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="feature-info mb-lg-0 mb-4">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-job-2"></i>
                </div>
                <div class="feature-info-content">
                  <h5 class="text-black mb-3">Global recruitment option</h5>
                  <p>There are basically six key areas to higher achievement.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-12">
        <div>
          <img class="img-fluid rounded" src="images/about/about-09.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Why You Choose -->

<!--=================================
Jobber-Counter -->
<section class="bg-dark">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="counter my-4">
          <div class="counter-icon">
            <i class="flaticon-curriculum"></i>
          </div>
          <div class="counter-content">
            <span class="timer text-white" data-to="1227" data-speed="10000">1227</span>
            <label class="mb-0 text-white">Jobs Posted</label>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter my-4">
          <div class="counter-icon">
            <i class="flaticon-resume"></i>
          </div>
          <div class="counter-content">
            <span class="timer mb-1 text-white" data-to="123" data-speed="10000">123</span>
            <label class="mb-0 text-white">Jobs Filled</label>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter my-4">
          <div class="counter-icon">
            <i class="flaticon-suitcase"></i>
          </div>
          <div class="counter-content">
            <span class="timer mb-1 text-white" data-to="170" data-speed="10000">170</span>
            <label class="mb-0 text-white">Companies</label>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="counter my-4">
          <div class="counter-icon">
            <i class="flaticon-users"></i>
          </div>
          <div class="counter-content">
            <span class="timer mb-1 text-white" data-to="127" data-speed="10000">127</span>
            <label class="mb-0 text-white">Members</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Jobber-Counter -->

<!--=================================
Blog -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-02 text-center">
          <h2>News, Tips & Articles</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/01.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-1" href="#">Recruitment</a>
              </div>
              <div class="blog-post-title">
                <h5><a href="#">How women can push for pay equality</a></h5>
              </div>
            </div>
            <div class="blog-post-footer pb-4 pb-lg-0">
              <div class="blog-post-time">
                <a href="#"><i class="far fa-clock"></i>20 Jan 2020</a>
              </div>
              <div class="blog-post-author">
                <span>By<a href="#"><img src="images/avatar/01.jpg" alt="">John Doe</a></span>
              </div>
              <div class="blog-post-time">
                <a href="#"><i class="far fa-comment"></i>(3)</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/02.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-1" href="#">Advice</a>
              </div>
              <div class="blog-post-title">
                <h5><a href="#">How to sell yourself in a job interview</a></h5>
              </div>
            </div>
            <div class="blog-post-footer pb-4 pb-lg-0">
              <div class="blog-post-time">
                <a href="#"><i class="far fa-clock"></i>25 March 2020</a>
              </div>
              <div class="blog-post-author">
                <span>By <a href="#"><img src="images/avatar/02.jpg" alt="">Alice Williams</a></span>
              </div>
              <div class="blog-post-time">
                <a href="#"><i class="far fa-comment"></i>(2)</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/03.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-category">
                <a class="mb-1" href="#">Career</a>
              </div>
              <div class="blog-post-title">
                <h5><a href="#">Job interview tips for older workers</a></h5>
              </div>
            </div>
            <div class="blog-post-footer pb-0">
              <div class="blog-post-time">
                <a href="#"><i class="far fa-clock"></i>30 March 2020</a>
              </div>
              <div class="blog-post-author">
                <span>By<a href="#"><img src="images/avatar/03.jpg" alt="">Paul Flavius</a></span>
              </div>
              <div class="blog-post-time">
                <a href="#"><i class="far fa-comment"></i>(5)</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Blog -->

<!--=================================
Feature-info -->
<section class="feature-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content text-white ps-sm-4 ps-0">
            <p>Jobseeker</p>
            <h5 class="text-white">Looking For Job?</h5>
          </div>
          <a class="ms-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
          <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content text-white ps-sm-4 ps-0">
            <p>Recruiter</p>
            <h5 class="text-white">Are You Recruiting?</h5>
          </div>
          <a class="ms-auto align-self-center" href="#">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Feature-info-->



<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

<!--=================================
Signin Modal Popup -->



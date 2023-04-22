

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Jobber - Job Board HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jobber - Job Board HTML5 Template</title>

    <!-- Favicon -->
    <link href="<?= $frontend_assets; ?>images/favicon.ico" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="<?= $frontend_assets; ?>css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="<?= $frontend_assets; ?>css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="<?= $frontend_assets; ?>css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="<?= $frontend_assets; ?>css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= $frontend_assets; ?>css/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Style -->
    <link rel="stylesheet" href="<?= $frontend_assets; ?>css/style.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>

<!--=================================
Header -->
<header class="header header-transparent">
    <nav class="navbar navbar-static-top navbar-expand-lg navbar-light header-sticky">
    <div class="container-fluid">
      <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class="navbar-brand" href="index.html">
        <img class="img-fluid" src="<?= $frontend_assets; ?>images/logo.svg" alt="logo">
      </a>
      <div class="navbar-collapse collapse justify-content-start">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown active">
            <a class="nav-link" href="<?= base_url('home'); ?>" i role="button" d aria-haspopup="true" aria-expanded="false">Home</a>
          </li>
          <li class="dropdown nav-item">
            <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu megamenu dropdown-menu-lg">
              <li>
                <div class="row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="<?= base_url() ?>about">About</a></li>
                      <li><a href="<?= base_url() ?>services">Services</a></li>
                      <li><a href="<?= base_url() ?>pricing">Pricing</a></li>
                      <li><a href="<?= base_url() ?>career">Career</a></li>
                      <li><a href="<?= base_url() ?>advertising">Advertising</a></li>
                      <li><a href="<?= base_url() ?>contact_us">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="<?= base_url() ?>blog">Blog</a></li>
                      <li><a href="<?= base_url() ?>blog_detail">Blog Detail</a></li>
                      <li><a href="<?= base_url() ?>post_a_job">Post a Job</a></li>
                      <li><a href="<?= base_url() ?>faq">Faq</a></li>
                      <li><a href="<?= base_url() ?>browse_categories">Browse Categories</a></li>
                      <li><a href="<?= base_url() ?>browse_locations">Browse Locations</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <!-- <li><a href="<?= base_url() ?>sign_in">Login</a></li> -->
                      <li><a href="<?= base_url() ?>sign_up">Register</a></li>
                      <li><a href="<?= base_url() ?>coming_soon">Coming soon</a></li>
                      <li><a href="<?= base_url() ?>404_error">404 Error</a></li>
                      <li><a href="<?= base_url() ?>terms_and_conditions">T&C</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="agency-logo pt-4">
                      <h6 class="mb-3 nav-title">Top Agency</h6>
                      <ul class="list-unstyled">
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                             <a href="#"> <img class="img-fluid" src="<?= $frontend_assets; ?>images/svg/07.svg" alt=""></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                             <a href="#"> <img class="img-fluid" src="<?= $frontend_assets; ?>images/svg/06.svg" alt=""></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                             <a href="#"> <img class="img-fluid" src="<?= $frontend_assets; ?>images/svg/05.svg" alt=""></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                             <a href="#"> <img class="img-fluid" src="<?= $frontend_assets; ?>images/svg/04.svg" alt=""></a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                             <a href="#"> <img class="img-fluid" src="<?= $frontend_assets; ?>images/svg/03.svg" alt=""></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Listing <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url() ?>job_grid">Job Grid</a></li>
              <li><a class="dropdown-item" href="<?= base_url() ?>job_listing">Job Listing</a></li>
              <li><a class="dropdown-item" href="<?= base_url() ?>job_detail">Job Detail</a></li>
              <li><a class="dropdown-item" href="<?= base_url() ?>job_listing_map">Job Listing Map</a></li>
            </ul>
          </li>
          <li class="dropdown nav-item mega-menu">
            <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown">Elements<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                  <div class="col-sm-6 col-lg-5 mb-3 mb-lg-0">
                    <h6 class="mb-3 nav-title">Search Types</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="search-style-under-banner.html">Search style under banner</a></li>
                      <li><a href="search-style-above-banner.html">Search style above banner</a></li>
                      <li><a href="search-style-below-banner.html">Search style below banner</a></li>
                      <li><a href="search-style-advanced.html">Advanced Search style</a></li>
                      <li><a href="search-style-classic.html">Search style classic</a></li>
                      <li><a href="search-style-with-filter.html">Search style with filter</a></li>
                      <li><a href="search-style-advanced-02.html">Advanced Search style 02 </a></li>
                      <li><a href="search-style-advanced-03.html">Advanced Search style 03 </a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                    <h6 class="mb-3 nav-title">Elements</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="element-feature-box.html">Feature box</a></li>
                      <li><a href="element-testimonials.html">Testimonials</a></li>
                      <li><a href="element-accordion.html">Accordion</a></li>
                      <li><a href="element-tabs.html">Tabs</a></li>
                      <li><a href="element-typography.html">Typography</a></li>
                      <li><a href="element-counter.html">counter</a></li>
                      <li><a href="element-countdown.html">Countdown</a></li>
                      <li><a href="element-category.html">Category</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="menu-banner bg-dark p-3 pt-4 text-center border-radius h-100 d-none d-lg-block">
                        <h5 class="text-primary mb-3 pt-2">Advertise your job with us</h5>
                        <span class="text-light"> Starting from</span>
                        <h3 class="text-white my-3">$99 <small class="fw-normal">/mo</small></h3>
                        <p class="text-primary p-2 small text-white">Save 30% for new customer</p>
                        <a class="btn btn-light btn-sm" href="post-a-job.html">Post a job now!</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <?php

            if($employer){
              // echo $employer;die();
              ?>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employer <i class="fas fa-chevron-down fa-xs"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?= base_url() ?>employer_grid">Employer Grid</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>employer_listing">Employer list</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>employer_detail">Employer detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>employer_listing_map">Employer Listing Map</a></li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">Dashboard <i class="fas fa-chevron-right fa-xs"></i></a>
                      <ul class="dropdown-menu left-side">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>employer">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>employer/my_profile">Profile</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>employer/change_password">Change Password </a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>employer/manage_candidates">Manage Candidates</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>/employer/manage_jobs">Manage Jobs</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>employer/post_new_job">Post New Job</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>employer/pricing">Pricing</a></li>
                      </ul>
                    </li>
                  </ul>
                </li> 
                </div>
                  <div class="add-listing">
                      <div class="login d-inline-block me-4">
                        <a href="<?php echo base_url();if($employer){echo 'employer/manage_jobs/'.$id;}else{echo 'sign_in';};?>"><i class="far fa-user pe-2"></i>
                          <?php
                            if($employer){
                              echo 'My account';
                            }
                            else{
                              echo 'Sign in';
                            }
                          ?>
                        </a>
                      </div>
                      <?php

                        if($employer){
                          ?>
                            <a class="btn btn-white btn-md" href="<?php echo base_url();?>employer/post_new_job"> <i class="fas fa-plus-circle"></i>Post a job</a>
                          <?php
                        }

                      ?>
                  </div>
                </div>
              <?php
            }
            if($candidate){
              ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Candidates <i class="fas fa-chevron-down fa-xs"></i>
                  </a>
                  <ul class="dropdown-menu">
                   <!--  <li><a class="dropdown-item" href="<?= base_url() ?>candidates_grid">Candidates Grid</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>candidates_listing">Candidates list</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>candidate_detail">Candidates detail</a></li>
                    <li><a class="dropdown-item" href="<?= base_url() ?>candidates_listing_map">Candidates Listing Map</a></li> -->
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">Candidates <i class="fas fa-chevron-right fa-xs"></i></a>
                      <ul class="dropdown-menu left-side">
                        <li><a class="dropdown-item" href="<?php echo base_url();?>candidates/dashboard">Dashboard</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>candidates/my_profile">Profile</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>candidates/change_password">Change Password </a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url();?>candidates/my_resume">My Resume</a></li>
                        <!-- <li><a class="dropdown-item" href="<?php echo base_url();?>candidates/manage_jobs">Manage Jobs</a></li> -->
                        <li><a class="dropdown-item" href="<?php echo base_url();?>candidates/saved_jobs/<?= $id ?>">Saved Jobs</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>candidates/pricing">Pricing</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>candidates/my_resume">My Resume <span class="badge bg-danger ms-2">CV</span></a></li>
                  </ul>
                </li> 

                </div>
                  <div class="add-listing">
                      <div class="login d-inline-block me-4">
                        <a href="<?php echo base_url();if($candidate){echo 'candidates/dashboard';}else{echo 'sign_in';};?>"><i class="far fa-user pe-2"></i>
                          <?php
                            if($candidate){
                              echo 'My account';
                            }
                          ?>
                        </a>
                      </div>
                  </div>
                </div>
      
              <?php
            }
          ?> 
          <?php

            if(!$employer && !$candidate){
              ?>
                </div>
                  <div class="add-listing">
                      <div class="login d-inline-block me-4">
                        <a href="<?php echo base_url('sign_in'); ?>"><i class="far fa-user pe-2"></i>
                          Sign In
                        </a>
                      </div>
                  </div>
                </div>
              <?php
            }

          ?>
  </nav>
</header>

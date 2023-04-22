<style type="text/css">
.pagination {
    border-radius: 4px;
    display: inline-block;
    background: white;
    padding :0 0px ;

}
ul{
  padding: 0;
  margin: 0;
}
.pagination li {
    display: inline-block;
    padding: 0;
    margin: 0;
}
.pagination > li > a {
    color: black;
    font-size: 14px;
    background: #fff;
    font-weight: 500;
    border-radius: 3px;
    padding: 12px 19px;
}

.pagination > li > a:hover{
    box-shadow: 0 0 5px rgba(0, 0, 0,);
    background: #3c95c3;
    color: #fff;
}
.pagination > li > .active {
    color: #fff;
    background-color:#3c95c3;
}
.pagination .page-item .page-link{
  color: #fff;
}
.pagination .page-item .page-link:hover{
  background: #3c95c3;
}
.page-link:focus {
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
}
</style>
<!--=================================
banner -->
<section class="header-inner header-inner-big bg-holder text-white" style="background-image: url(images/bg/banner-01.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="job-search-field">
          <div class="job-search-item">
            <form class="form row">
              <div class="col-lg-5">
                <div class="form-group left-icon mb-3">
                  <input type="text" class="form-control" name="job_title" placeholder="What?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group left-icon mb-3">
                  <input type="text" class="form-control" name="job_title" placeholder="Where?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <div class="form-group form-action">
                  <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i> Find Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
job-list -->
<section class="space-ptb">
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <!--=================================
      left-sidebar -->
      <div class="sidebar">
        <div class="widget">
          <div class="widget-title widget-collapse">
            <h6>Date Posted</h6>
            <a class="ms-auto" data-bs-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-chevron-down"></i> </a></div>
            <div class="collapse show" id="dateposted">
              <div class="widget-content">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted1">
                  <label class="form-check-label" for="dateposted1">Last hour</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted2">
                  <label class="form-check-label" for="dateposted2">Last 24 hour</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted3">
                  <label class="form-check-label" for="dateposted3">Last 7 days</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted4">
                  <label class="form-check-label" for="dateposted4">Last 14 days</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted5">
                  <label class="form-check-label" for="dateposted5">Last 30 days</label>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Specialism</h6>
              <a class="ms-auto" data-bs-toggle="collapse" href="#specialism" role="button" aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i> </a> </div>
              <div class="collapse show" id="specialism">
                <div class="widget-content">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism1">
                    <label class="form-check-label" for="specialism1">IT Contractor</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism2">
                    <label class="form-check-label" for="specialism2">Charity & Voluntary</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism3">
                    <label class="form-check-label" for="specialism3">Digital & Creative</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism4">
                    <label class="form-check-label" for="specialism4">Estate Agency</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism5">
                    <label class="form-check-label" for="specialism5">Graduate</label>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Job Type</h6>
                <a class="ms-auto" data-bs-toggle="collapse" href="#jobtype" role="button" aria-expanded="false" aria-controls="jobtype"> <i class="fas fa-chevron-down"></i> </a> </div>
                <div class="collapse show" id="jobtype">
                  <div class="widget-content">
                    <div class="form-check fulltime-job">
                      <input type="checkbox" class="form-check-input" id="jobtype1">
                      <label class="form-check-label" for="jobtype1">Full Time</label>
                    </div>
                    <div class="form-check parttime-job">
                      <input type="checkbox" class="form-check-input" id="jobtype2">
                      <label class="form-check-label" for="jobtype2">Part-Time</label>
                    </div>
                    <div class="form-check freelance-job">
                      <input type="checkbox" class="form-check-input" id="jobtype3">
                      <label class="form-check-label" for="jobtype3">Freelance</label>
                    </div>
                    <div class="form-check temporary-job">
                      <input type="checkbox" class="form-check-input" id="jobtype4">
                      <label class="form-check-label" for="jobtype4">Temporary</label>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="widget">
                <div class="widget-title widget-collapse">
                  <h6>Experience</h6>
                  <a class="ms-auto" data-bs-toggle="collapse" href="#experience" role="button" aria-expanded="false" aria-controls="experience"> <i class="fas fa-chevron-down"></i> </a> </div>
                  <div class="collapse show" id="experience">
                    <div class="widget-content">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience1">
                        <label class="form-check-label" for="experience1">Fresher</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience2">
                        <label class="form-check-label" for="experience2">Less than 1 year</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience3">
                        <label class="form-check-label" for="experience3">2 Year</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience4">
                        <label class="form-check-label" for="experience4">3 Year</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience5">
                        <label class="form-check-label" for="experience5">4 Year</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="widget">
                  <div class="widget-title widget-collapse">
                    <h6>Offered Salary</h6>
                    <a class="ms-auto" data-bs-toggle="collapse" href="#Offeredsalary" role="button" aria-expanded="false" aria-controls="Offeredsalary"> <i class="fas fa-chevron-down"></i> </a> </div>
                    <div class="collapse show" id="Offeredsalary">
                      <div class="widget-content">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary1">
                          <label class="form-check-label" for="Offeredsalary1">10k - 20k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary2">
                          <label class="form-check-label" for="Offeredsalary2">20k - 30k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary3">
                          <label class="form-check-label" for="Offeredsalary3">30k - 40k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary4">
                          <label class="form-check-label" for="Offeredsalary4">40k - 50k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary5">
                          <label class="form-check-label" for="Offeredsalary5">50k - 60k</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="widget">
                    <div class="widget-title widget-collapse">
                      <h6>Gender</h6>
                      <a class="ms-auto" data-bs-toggle="collapse" href="#gender" role="button" aria-expanded="false" aria-controls="gender"><i class="fas fa-chevron-down"></i></a> </div>
                      <div class="collapse show" id="gender">
                        <div class="widget-content">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="gender1">
                            <label class="form-check-label" for="gender1">Male</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="gender2">
                            <label class="form-check-label" for="gender2">Female</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="widget">
                      <div class="widget-title widget-collapse">
                        <h6>Qualification</h6>
                        <a class="ms-auto" data-bs-toggle="collapse" href="#qualification" role="button" aria-expanded="false" aria-controls="qualification"> <i class="fas fa-chevron-down"></i></a> </div>
                        <div class="collapse show" id="qualification">
                          <div class="widget-content">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="qualification1">
                              <label class="form-check-label" for="qualification1">Matriculation</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="qualification2">
                              <label class="form-check-label" for="qualification2">Intermediate</label>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="qualification3">
                              <label class="form-check-label" for="qualification3">Graduate</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="widget">
                        <div class="widget-add"> <img class="img-fluid" src="images/add-banner.png" alt=""></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <!--=================================
                    right-sidebar -->
                    <div class="row mb-4">
                       <div class="col-md-6">
                        <div class="section-title mb-3 mb-lg-4">
                          <h6 class="mb-0">Showing  <?= $pages.' - '.$total ?> pages of <span class="text-primary"><?=  $count  ?> jobs </span></h6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="job-filter-tag">
                        <ul class="list-unstyled">
                          <li><a href="#">Freelance <i class="fas fa-times-circle"></i> </a></li>
                          <li><a class="filter-clear" href="#">Reset Search <i class="fas fa-redo-alt"></i> </a></li>
                        </ul>
                      </div>
                      </div>
                    </div>
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                      <div class="job-alert-bt"> <a class="btn btn-md btn-dark" href="#"><i class="fa fa-envelope"></i>Get job alert </a> </div>
                      <div class="job-shortby ms-sm-auto d-flex align-items-center">
                        <form class="form-inline">
                          <div class="d-sm-flex align-items-center mb-0">
                            <label class="justify-content-start me-2 mb-2 mb-sm-0">sort by :</label>
                            <div class="short-by">
                              <select class="form-control basic-select">
                                <option>Newest</option>
                                <option>Oldest</option>
                              </select>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="row">
                      <?php

                        foreach($job_listings as $job_listing){
                          ?>

                            <div class="col-12">
                              <div class="job-list ">
                                <div class="job-list-logo">
                                  <img class="img-fluid" src="images/svg/01.svg" alt="">
                                </div>
                                <div class="job-list-details">
                                  <div class="job-list-info">
                                    <div class="job-list-title">
                                      <h5 class="mb-0"><a href="<?= base_url('job_detail/') ?>"><?= $job_listing->job_title ?></a></h5>
                                    </div>
                                    <div class="job-list-option">
                                      <ul class="list-unstyled">
                                        <li> <span>via</span> <a href="employer-detail.html">Fast Systems Consultants</a> </li>
                                        <li><i class="fas fa-map-marker-alt pe-1"></i><?= $job_listing->location_name ?></li>
                                        <li><i class="fas fa-filter pe-1"></i><?= $job_listing->sub_categoris_name ?></li>
                                        <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="<?= base_url('candidates/saved_jobs/').$id.'/?n='.$job_listing->job_id; ?>"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span> </div>
                              </div>
                            </div>

                          <?php
                        }

                      ?>
                    </div>
                    <div class="row">
                      <div class="col-12 text-center mt-4 mt-md-5">
                        
                          <?php echo $page_link?>
        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</section>
<!--=================================
job-list -->

<!--=================================
feature -->
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
feature -->



<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

<!--=================================
Signin Modal Popup -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="mb-0 text-center">Login to Your Account</h4>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="login-register">
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Log in as Candidate</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  data-bs-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Password*</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                        <label class="form-check-label" for="Remember-02">Remember Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f me-3 me-md-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter me-3 me-md-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google me-3 me-md-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in me-3 me-md-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!--=================================
Signin Modal Popup -->

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/select2/select2.full.js"></script>

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
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
          <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="images/avatar/04.jpg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3>Felica Queen</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
            <span class="progress-bar-number">85%</span>
          </div>
        </div>
        <div class="candidates-skills">
          <div class="candidates-skills-info">
            <h3 class="text-primary">85%</h3>
            <span class="d-block">Skills increased by job Title.</span>
          </div>
          <div class="candidates-required-skills ms-auto mt-sm-0 mt-3">
            <a class="btn btn-dark" href="#">Complete Required Skills</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Dashboard Nav -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sticky-top secondary-menu-sticky-top">
          <div class="secondary-menu">
            <ul class="list-unstyled mb-0">
             <li><a class="<?=($this->uri->segment(2)==false)?'active':''?>" href="<?= base_url(); ?>candidates/dashboard/">Dashboard</a></li>
              <li><a class="<?=($this->uri->segment(2)=='my_profile')?'active':''?>" href="<?= base_url(); ?>candidates/my_profile">My Profile</a></li>
              <li><a class="<?=($this->uri->segment(2)=='change_password')?'active':''?>" href="<?= base_url(); ?>candidates/change_password">Change Password</a></li>
              <li><a class="<?=($this->uri->segment(2)=='my_resume')?'active':''?>" class="<?=($this->uri->segment(2)=='my_profile')?'active':''?>" href="<?= base_url(); ?>candidates/my_resume">My Resume</a></li>
              <li><a class="<?=($this->uri->segment(2)=='saved_jobs')?'active':''?>" href="<?= base_url(); ?>candidates/saved_jobs/<?= $id ?>">Saved Jobs</a></li>
              <li><a class="<?=($this->uri->segment(2)=='pricing')?'active':''?>" href="<?= base_url(); ?>candidates/pricing">Pricing Plan</a></li>
              <li><a class="<?=($this->uri->segment(2)=='logout')?'active':''?>" href="<?= base_url('sign_in'); ?>">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Dashboard Nav -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box mb-0 pb-4">
          <div class="section-title-02 mb-4">
            <h4>Saved Jobs</h4>
          </div>
          <div class="row">
            <?php

              if($save_job){
                foreach($save_job as $save){
                ?>
                  <div class="col-12">
                    <div class="job-list ">
                      <div class="job-list-logo">
                        <img class="img-fluid" src="images/svg/01.svg" alt="">
                      </div>
                      <div class="job-list-details">
                        <div class="job-list-info">
                          <div class="job-list-title">
                            <h5 class="mb-0"><a href="job-detail.html"><?= $save->job_title ?></a></h5>
                          </div>
                          <div class="job-list-option">
                            <ul class="list-unstyled">
                              <li> <span>via</span> <a href="employer-detail.html">Fast Systems Consultants</a> </li>
                              <li><i class="fas fa-map-marker-alt pe-1"></i><?= $save->location_name ?></li>
                              <li><i class="fas fa-filter pe-1"></i><?= $save->catetories_name ?></li>
                              <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="fas fa-heart text-danger"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span> </div>
                    </div>
                  </div>
                <?php
              }

              }
              
            ?>
              <div class="row">
                      <div class="col-12 text-center mt-4 mt-md-5">
                        
                          <?php echo $page_link?>
        
                      </div>
                    </div>
        </div>
      </div>
    </div>
  </div>
</section>


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


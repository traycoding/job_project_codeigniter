
<style type="text/css">
  .error{
    color: red;
  }
</style>
<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="images/svg/01.svg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
               <h3>Fleet Improvements Pvt</h3>
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
            <ul>
              <li><a class="<?=($this->uri->segment(2)==false)?'active':''?>" href="<?= base_url(); ?>employer">Dashboard</a></li>
              <li><a class="<?=($this->uri->segment(2)=='my_profile')?'active':''?>" href="<?= base_url(); ?>employer/my_profile">My Profile</a></li>
              <li><a class="<?=($this->uri->segment(2)=='change_password')?'active':''?>" href="<?= base_url(); ?>employer/change_password">Change Password</a></li>
              <li><a class="<?=($this->uri->segment(2)=='manage_candidates')?'active':''?>" class="<?=($this->uri->segment(2)=='manage_candidates')?'active':''?>" href="<?= base_url(); ?>employer/manage_candidates">Manage Candidates</a></li>
              <li><a class="<?=($this->uri->segment(2)=='manage_jobs')?'active':''?>" href="<?= base_url(); ?>employer/manage_jobs/<?= $id ?>">Manage Jobs</a></li>
              <li><a class="<?=($this->uri->segment(2)=='post_new_job')?'active':''?>" href="<?= base_url(); ?>employer/post_new_job">Post New Jobs</a></li>
              <li><a class="<?=($this->uri->segment(2)=='pricing')?'active':''?>" href="<?= base_url(); ?>employer/pricing">Pricing Plan</a></li>
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

<!--=================================
My Profile -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form method="post" action="<?= base_url('employer/my_profile'); ?>" >
          <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4>Basic Information</h4>
            

            
             <?php

              if(isset($message)){
                ?>
                  <div class="alert alert-warning">
                    <?= $message ?>
                  </div>
                <?php
              }


    
            ?>

                

          
          </div>
          <div class="cover-photo-contact">
            <div class="cover-photo">
              <img class="img-fluid " src="images/bg/cover-bg.png" alt="">
              <i class="fas fa-times-circle"></i>
            </div>
            
          </div>
        
          <div class="row">
            <div class="form-group col-md-6 mb-3">
              <label class="form-label">User name</label>
              <input type="text" class="form-control" value="<?= $employer->username ?>" name="username">
               <?= form_error('username'); ?>
            </div>
            <div class="form-group col-md-6 mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" value="<?= $employer->email ?>" name="email">
               <?= form_error('email'); ?>
            </div>
            
            <div class="form-group col-md-6 mb-3 datetimepickers">
              <label class="form-label">Date of Founded</label>
              <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" value="<?= $employer->created_date ?>" data-target="#datetimepicker-01" name="date">
                <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                </div>
                <?php echo form_error('date'); ?>
              </div>
            </div>
            <div class="form-group col-md-6 mb-3">
              <label class="form-label">Phone</label>
              <input type="text" class="form-control" value="<?= $employer->mobile ?>" name="phone">
              <?php echo form_error('phone'); ?>
            </div>
            <!-- <div class="form-group col-md-6 mb-3">
              <label class="form-label">City</label>
              <input type="text" class="form-control" value="<?= $employer->city ?>">
            </div> -->
            <!-- <div class="form-group col-md-6 mb-3 mb-md-0">
              <label class="form-label">Website</label>
              <input type="text" class="form-control" value="example.com">
            </div> -->
            <div class="form-group col-md-12 mb-0">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="5"  name="description"><?= $employer->description ?></textarea>
              <?php echo form_error('description'); ?>
            </div>
          </div>
          
        </div>
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-3">
            <h4>Social Links</h4>
          </div>
          <div class="row">
            <div class="form-group col-md-6 mb-3">
              <label class="form-label">Facebook</label>
              <input type="text" class="form-control" value="<?= $employer->facebook ?>" name="facebook">
            </div>
            <div class="form-group col-md-6 mb-3">
              <label class="form-label">Twitter</label>
              <input type="text" class="form-control" value="<?= $employer->twitter ?>" name="twitter">
            </div>
            <div class="form-group col-md-12 mb-0">
              <label class="form-label">Linkedin</label>
              <input type="text" class="form-control" value="<?= $employer->Linkedin ?>" name="Linkedin">
            </div>
          </div>

        </div>
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-3">
            <h4>Address</h4>
          </div>
          <div class="row">
            <div class="form-group col-md-12 mb-3">
              <label class="form-label">Enter Your  location</label>
              <input type="text" class="form-control" value="<?= $employer->address ?>" placeholder="Enter Your  location" name="address">
              <?= form_error('address'); ?>
            </div>
          </div>
          <div class="location-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3027.6199313908783!2d-74.09468078428908!3d40.63826305005958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s214+West+Arnold+St.+New+York%2C+NY+10002!5e0!3m2!1sen!2sin!4v1559195958100!5m2!1sen!2sin" height="370" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <input type="submit" name="submit" value="save" class="btn btn-md btn-dark">
        </form>
      </div>
    </div>
  </div>
</section>
<!--=================================
My Profile -->

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

<!--=================================

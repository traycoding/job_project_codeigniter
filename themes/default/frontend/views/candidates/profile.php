

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
              <!-- <li><a class="<?=($this->uri->segment(2)=='manage_jobs')?'active':''?>" href="<?= base_url(); ?>candidates/manage_jobs">Manage Jobs</a></li> -->
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

<!--=================================
My Profile -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?= form_open_multipart('candidates/my_profile'); ?>
                    <div class="user-dashboard-info-box">
                    <div class="section-title-02 mb-2 d-grid">
                      <h4><?= lang('basic_information'); ?></h4>

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
                      <div class="upload-file">
                        <label for="formFile" class="form-label"><?= lang('upload_cover_photo'); ?></label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        <?= form_error('image'); ?>
                      </div>
                    </div>
                      <div class="row">
                        <div class="form-group mb-3 col-md-6">
                          <label class="form-label"><?= lang('your_name'); ?></label>
                          <input type="text" class="form-control" value="<?= $candidates->username ?>" name="username">
                          <?= form_error('username'); ?>
                        </div>
                        <div class="form-group mb-3 col-md-6">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" value="<?= $candidates->email ?>" name="email">
                          <?= form_error('email'); ?>
                        </div>
                        <div class="form-group mb-3 col-md-6 datetimepickers">
                          <label class="form-label"><?= lang('date_of_birth'); ?></label>
                          <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" value="<?= $candidates->date_of_birth ?>" data-target="#datetimepicker-01" name="date">
                            <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                          </div>
                          <?= form_error('date_of_birth'); ?>
                        </div>
                        <div class="form-group mb-3 col-md-6">
                          <label class="form-label">Phone</label>
                          <input type="text" class="form-control" value="<?= $candidates->mobile ?>" name="phone">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                          <label class="d-block mb-3"><?= lang('gender'); ?></label>
                            <div class="form-check form-check-inline">
                              <?php

                                if($candidates->gender=="Male"){
                                  ?>
                                    <input class="form-check-input" type="radio" name="customRadio" id="customRadio1" checked value="male">
                                  <?php
                                }
                                else{
                                  ?>
                                    <input class="form-check-input" type="radio" name="customRadio" id="customRadio1" value="male">
                                  <?php
                                }

                              ?>
                              <label class="form-check-label" for="customRadio1"><?= lang('male'); ?></label>
                            </div>
                            <div class="form-check form-check-inline">
                              
                              <?php

                                if($candidates->gender=="Female"){
                                  ?>
                                    <input class="form-check-input" type="radio" name="customRadio" id="customRadio1" checked value="female">
                                  <?php
                                }
                                else{
                                  ?>
                                    <input class="form-check-input" type="radio" name="customRadio" id="customRadio1" value="female">
                                  <?php
                                }

                              ?>
                              <label class="form-check-label" for="customRadio2"><?= lang('female'); ?></label>
                            </div>
                        </div>
                        <div class="form-group mb-3 col-md-6">
                          <label class="form-label"><?= lang('experience'); ?></label>
                          <input type="text" class="form-control" value="<?= $candidates->experiences ?>" name="experience">
                        </div>
                        <!-- <div class="form-group mb-3 col-md-6 select-border">
                          <label class="form-label">Job Title</label>
                          <select class="form-control basic-select">
                            <option value="value 01" selected="selected">Test Selector</option>
                            <option value="value 02">Needham, MA</option>
                            <option value="value 03">New Castle, PA</option>
                          </select>
                        </div> -->

                        <!-- <div class="form-group mb-3 col-md-6">
                          <label class="form-label">Salary</label>
                          <input type="text" class="form-control" value="$33,000">
                        </div> -->
                        <div class="form-group mb-0 col-md-12">
                          <label class="form-label"><?= lang('description'); ?></label>
                          <textarea class="form-control" rows="5" name="description"><?= $candidates->description ?></textarea>
                        </div>
                      </div>
                  </div>
                  <div class="user-dashboard-info-box">
                    <div class="section-title-02 mb-3">
                      <h4><?= lang('social_links'); ?></h4>
                    </div>
                      <div class="row">
                        <div class="form-group mb-3 col-md-6">
                          <label class="form-label"><?= lang('facebook'); ?></label>
                          <input type="text" class="form-control" value="<?= $candidates->facebook ?>" name="facebook">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                          <label class="form-label"><?= lang('twitter'); ?></label>
                          <input type="text" class="form-control" value="<?= $candidates->twitter ?>" name="twitter">
                        </div>
                        <div class="form-group mb-0 col-md-12">
                          <label class="form-label"><?= lang('linkedin'); ?></label>
                          <input type="text" class="form-control" value="<?= $candidates->linkedin ?>" name="linkedin">
                        </div>
                      </div>
                  </div>
                   <div class="user-dashboard-info-box">
                    <div class="form-group mb-0">
                      <h4 class="mb-3"><?= lang('address'); ?></h4>
                      <div class="form-group mb-3">
                        <label class="form-label"><?= lang('enter_your_locatioin'); ?></label>
                        <input type="text" class="form-control" value="<?= $candidates->address ?>" name="address">
                      </div>
                      <div class="company-address-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin"  height="400" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
         
         
          <input type="submit" name="submit" value="<?= lang('save_setting'); ?>" class="btn btn-primary btn-md">
        <?= form_close(); ?>
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

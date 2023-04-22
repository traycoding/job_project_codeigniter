<!--=================================
inner banner -->
<style type="text/css">
  .color{
    color: red;
  }
</style>
<?php
   $this->session->unset_userdata('id');
?>
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Login</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>"> Home </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Login </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Signin -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
          <div class="section-title">
           <h4 class="text-center">Login to Your Account</h4>
          </div>
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
              <?php if($this->session->flashdata('error1')): ?>
                      <div class="alert alert-warning">
                        <?= $this->session->flashdata('error1')?>
                      </div>
                     
              <?php endif ?>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4" method="post" action="<?= base_url(); ?>sign_in">
                <input type="hidden" name="cm" value="job_seekers">
                <div class="row">
                  <div class="mb-3 col-12">
                    <label class="form-label" for="Email2">Username / Email Address</label>
                    <input type="text" name="email" class="form-control" id="Email22">
                    <?= form_error('email') ?>
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="password2">Password*</label>
                    <div class="input">
                      <input type="password" name="password" class="form-control myInput" id="password32">
                      <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                      <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                    </div>
                    <?= form_error('password') ?>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <!-- <a class="btn btn-primary d-grid" href="<?= base_url('home'); ?>">Sign In</a> -->
                    <input type="submit" name="submit" class="btn btn-info" value="Sign In" style="width:100%;color: white;">
                  </div>
                  <div class="col-md-6">
                    <div class="mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="<?= base_url('sign_up'); ?>">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4" action="<?= base_url('sign_in'); ?>" method="post">
                <input type="hidden" name="cm" value="employers">
                <div class="row">
                  <div class="mb-3 col-12">
                    <label class="form-label" for="Email2">Username / Email Address</label>
                    <input type="text" name="email" class="form-control" id="Email2">
                    <?= form_error('email') ?>
                  </div>
                  
                  <div class="mb-3 col-12">
                    <label class="form-label" for="password2">Password *</label>
                    <div class="input">
                      <input type="password" name="password" class="form-control myInput" id="password2">
                      <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                      <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                      <?= form_error('password'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <!-- <a class="btn btn-primary d-grid" href="#">Sign In</a> -->
                    <input type="submit" class="btn btn-dark" name="submit" value="Sign In" style="width:100%;color:white;">
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                        <label class="form-check-label" for="Remember-02">Remember Password</label>
                      </div>
                      <p class="mt-1">Don't have account? <a href="<?= base_url('sign_up'); ?>">Sign Up here</a></p>
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
                    <a href="#"> <i class="fab fa-facebook-f me-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter me-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google me-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in me-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Signin -->

<!--=================================
feature-info -->
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
feature-info-->



<script>
  $(document).ready(function(){
    $('.showPass').click(function(){
      var Parent = $(this).parents('.input');
      var x = Parent.find('.myInput');
          if(x.attr('type')=='password'){
            x.attr('type','text');
            Parent.find('.show').css('display','block');
            Parent.find('.hide').css('display','none');
          }
          else{
            x.attr('type','password');
            Parent.find('.show').css('display','none');
            Parent.find('.hide').css('display','block');
          }
    });
  });
</script>

<style type="text/css">
  .input{
    position: relative;
  }
</style>

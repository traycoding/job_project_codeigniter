<style type="text/css">
  .error{
    color: red;
  }
</style>
<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary"><?= lang('register') ?></h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="<?= base_url('home');?>"><?= lang('home'); ?></a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span><?= lang('register'); ?> </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Register -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
         <div class="section-title">
          <h4 class="text-center"><?= lang('create_your_account'); ?></h4>
         </div>
          <fieldset>
            <legend class="px-2"><?= lang('choose_your_account_type'); ?> </legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" >
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0"><?= lang('candidate') ?></h6>
                      <p class="mb-0"><?= lang('i_want_to_descover_companies') ?></p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item ms-auto">
                <a class="nav-link" data-bs-toggle="tab" href="#employer" role="tab">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0"><?= lang('employer'); ?></h6>
                      <p class="mb-0"><?= lang('i_want_to_attract_the_best_talent') ?></p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
            <?php

              if(isset($success)){
                ?>
                  <div class="alert alert-warning">
                    <?= $success ?>
                  </div>
                <?php
              }

            ?>
          </fieldset>

          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4" action="<?= base_url('sign_up'); ?>" method="post">
                <input type="hidden" name="cm" value="job_seekers">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="Username"><?= lang('username') ?> *</label>
                    <input type="text" name="username" class="form-control" value="" id="username1">
                    <?= form_error('username'); ?>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label"><?= lang('email_address') ?> *</label>
                    <input type="text" class="form-control" name="email" id="email1">
                    <?= form_error('email'); ?>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label"><?= lang('password') ?> *</label>
                    <div class="input">
                      <input type="password" name="password" class="form-control myInput" id="password1">
                      <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                      <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                    </div>
                    <?= form_error('password'); ?>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2"><?= lang('confirm_password') ?> *</label>
                    <div class="input">
                      <input type="password" name="c_password" class="form-control myInput" id="c_password1">
                      <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                      <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                    </div>
                    <?= form_error('c_password'); ?>
                  </div>
                  <div class="form-group mt-0 mb-3 col-md-12">
                    <label class="form-label"><?= lang('job_description') ?></label>
                    <textarea class="form-control" rows="4" name="description"></textarea>
                    <?php echo form_error('description'); ?>
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="phone"><?= lang('phone') ?></label>
                    <input type="text" class="form-control" name="phone" id="phone1">
                  </div>
                  <?= form_error('phone'); ?>
                 
                  

                  <div class="mb-3 col-md-6">
                    <!-- <label class="form-label"><?= lang('status') ?> *</label>
                    <select class="form-control basic-select" name="selected" id="selector1">
                      <option value="">Acitve</option>
                      <option value="0">Inative</option>
                    </select> -->
                    <?= form_error('facebook'); ?>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label"><?= lang('facebook') ?> </label>
                    <div class="input">
                      <input type="text" name="facebook" class="form-control myInput" id="password1">
                    </div>
                    <?= form_error('facebook'); ?>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2"><?= lang('twitter') ?> </label>
                    <div class="input">
                      <input type="text" name="twitter" class="form-control myInput" id="c_password1">
                    </div>
                    <?= form_error('twitter'); ?>
                  </div>
                   <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2"><?= lang('linkedin') ?> </label>
                    <div class="input">
                      <input type="text" name="linkedin" class="form-control myInput" id="c_password1">
                    </div>
                    <?= form_error('linkedin'); ?>
                  </div>
                  <div class="mb-3 col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                      <label class="form-check-label" for="Remember-02">
                        <?= lang('you_accept_our_terms_and_conditions_and_privacy_policy'); ?>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                     <input type="submit" class="btn btn-primary" name="submit" value="Sign Up" style="width:100%;color:white;" id="submit1">
                  </div>
                  <div class="col-md-6 text-md-end mt-2 text-center">
                    <p><?= lang('already_registered'); ?>? <a href="<?= base_url('sign_in'); ?>"> Sign in here</a></p>
                  </div>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4" action="<?= base_url('sign_up'); ?>" method="post">
                <input type="hidden" name="cm" value="employers">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label"><?= lang('username') ?> *</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username') ?>">
                    <?php  echo form_error('username'); ?>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label"><?= lang('email_address') ?> *</label>
                    <input type="email" name="email"  class="form-control" id="email" value="<?= set_value('email') ?>">
                    <?php  echo form_error('email'); ?>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label"><?= lang('password') ?> *</label>
                   <div class="input">
                      <input type="password"  class="form-control myInput" name="password" id="password" value="<?= set_value('password') ?>">
                      <?= form_error('password') ?>
                      <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                      <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                   </div>
                  </div>

                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2"><?= lang('confirm_password') ?> *</label>
                    <div class="input">
                      <input type="password" name="c_password" class="form-control myInput" id="c_password" value="<?= set_value('c_password') ?>">
                      <?= form_error('c_password'); ?>
                      <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                      <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                    </div>
                  </div>
                  <div class="form-group mt-0 mb-3 col-md-12">
                    <label class="form-label"><?= lang('job_description') ?></label>
                    <textarea class="form-control" rows="4" name="description" ><?= set_value('description') ?></textarea>
                    <?php echo form_error('description'); ?>
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="phone"><?= lang('phone'); ?>*</label>
                    <input type="text" name="phone" class="form-control" id="phone">
                    <?= form_error('phone'); ?>
                  </div>
                  <!-- <div class="mb-3 col-md-6">
                    <label class="form-label"><?= lang('status') ?> *</label>
                    <select class="form-control basic-select" name="selected" id="selector1">
                      <option value="">Acitve</option>
                      <option value="0">Inative</option>
                    </select>
                    <?= form_error('facebook'); ?>
                  </div> -->
                  <div class="mb-3 col-md-12">
                    <label class="form-label"><?= lang('facebook') ?> </label>
                    <div class="input">
                      <input type="text" name="facebook" class="form-control myInput" id="password1">
                    </div>
                    <?= form_error('facebook'); ?>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2"><?= lang('twitter') ?> </label>
                    <div class="input">
                      <input type="text" name="twitter" class="form-control myInput" id="c_password1">
                    </div>
                    <?= form_error('twitter'); ?>
                  </div>
                   <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2"><?= lang('linkedin') ?> </label>
                    <div class="input">
                      <input type="text" name="linkedin" class="form-control myInput" id="c_password1">
                    </div>
                    <?= form_error('linkedin'); ?>
                  </div>
                  
                  <div class="mb-3 col-12 mt-3">
                    <div class="form-check">
                      <input class="form-check-input" name="check" type="checkbox" value="" id="accepts-02">
                      <label class="form-check-label" for="accepts-02">
                         <?= lang('you_accept_our_terms_and_conditions_and_privacy_policy'); ?>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                     <input type="submit" name="submit" class="btn btn-dark" value="Sign Up" style="width:100%;color:white;">
                  </div>
                  <div class="col-md-6 text-md-end mt-2 text-center">
                    <a href="<?= base_url('sign_in'); ?>"><?= lang('already_have_an_account'); ?>?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="mt-4">
            <fieldset>
              <legend class="px-2"><?= lang('login_or_sign_up_with'); ?></legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f me-4"></i><?= lang('login_with_facebook'); ?></a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter me-4"></i><?= lang('login_with_twitter'); ?></a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google me-4"></i><?= lang('login_with_google'); ?></a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in me-4"></i><?= lang('login_with_linkedin'); ?></a>
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
Register -->

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
            <p><?= lang('job_seekers'); ?></p>
            <h5 class="text-white"><?= lang('looking_for_job');?>?</h5>
          </div>
          <a class="ms-auto align-self-center" href="#"><?= lang('apply_now'); ?><i class="fas fa-long-arrow-alt-right"></i> </a>
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


<!-- <style type="text/css">
  .input{
    position: relative;
  }
  input{
    outline: none;
  }
  p{
    font-size: 11px;
    color: red;
    margin-top: 5px;
  }
</style>




<script type="text/javascript">
$(document).ready(function(){
  var username   = $('#username');
  var email      = $('#email');
  var password   = $('#password');
  var c_password = $('#c_password');
  var phone      = $('#phone');
  var hr         = $('#selector');
  $('#check_username').hide();
  username.keyup(function(){
    validateUsername();
  });
  function validateUsername() {
    let usernameValue = $("#username").val();
    if (usernameValue.length == "") {
      $("#check_username").show();
    } else if (usernameValue.length < 3 || usernameValue.length > 15) {
      $("#check_username").show();
      username.css('box-shadow','0 0 4px 0 red');
      $("#check_username").html("**length of username must be between 3 and 15");
    } else {
      $("#check_username").hide();
      username.css('box-shadow','0 0 4px 0px teal');
    }
  }
  password.keyup(function(){
    validatePassword();
  })

  function validatePassword() {
    let passwordValue = $("#password").val();
    if (passwordValue.length == "") {
      $("#passcheck").show();
    }
    if (passwordValue.length < 8 || passwordValue.length > 50) {
      $("#passcheck").show();
      $("#passcheck").html(
        "**length of your password must be between 8 and 50"
      );
      $("#passcheck").css("color", "red");
      password.css('box-shadow','0 0 4px red');
    } else {
      $("#passcheck").hide();
      password.css('box-shadow','0 0 4px 0 teal');
    }
  }





  //candidate

  var username1   =  $('#username1');
  var password1   =  $('#password1');
  var c_password1 =  $('#c_password1');
  var email1      =  $('#email1');
  var submit1     =  $('#submit1');
  var u1;
  var p1;
  var c_p1;
  var e1;
  var ph1;
  
  $('#username1').keyup(function(){
    validateUsername1();
  });

  function validateUsername1() {

    let usernameValue = $("#username1").val();
    if (usernameValue.length < 3 || usernameValue.length > 15) {
      $("#check_username1").show();
      $("#check_username1").html("**length of your username must be between 8 and 15");
      $("#check_username1").css("color", "red");
      username1.css('box-shadow','0 0 4px red');
      u1 = 0;
    } else {
      $("#check_username1").hide();
      username1.css('box-shadow','0 0 4px 0 teal');
      u1 = 1;
    }
  }

  password1.keyup(function(){
    validatePassword1();
  })
  function validatePassword1() {
    let passwordValue = $("#password1").val();
    if (passwordValue.length == "") {
      $("#passcheck1").show();
    }
    if (passwordValue.length < 8 || passwordValue.length > 50) {
      $("#passcheck1").show();
      $("#passcheck1").html(
        "**length of your password must be between 8 and 50"
      );
      $("#passcheck1").css("color", "red");
      password1.css('box-shadow','0 0 4px red');
    } else {
      $("#passcheck1").hide();
      password1.css('box-shadow','0 0 4px 0 teal');
    }
  }
  c_password1.keyup(function(){
    var passVal   =  password1.val();
    var c_passVal =  c_password1.val();

    if(passVal == c_passVal){
      c_password1.css('box-shadow','0 0 4px 0 teal');
      $('#c_passcheck1').hide();
    }
    else{
      c_password1.css('box-shadow','0 0 4px 0 red');
      $('#c_passcheck1').show();
       $("#c_passcheck1").html("**invailid confirm password");
    }

  })


  email1.keyup(function(){
    if(validationEmail1()==true){
      email1.css('box-shadow','0 0 4px 0 teal');
      $('#check_email1').hide();
    }
    else{
      email1.css('box-shadow','0 0 4px 0 red');
      $('#check_email1').html('** email unvailable');
      $('#check_email1').show();

    }
  })
  function validationEmail1(){
    var emailVal  =   email1.val();
    var reg       =   /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    if(reg.test(emailVal)){
      return true;
    }
    else{
      return false;
    }
  }
  var phone1   =   $('#phone1');
  
  phone1.keyup(function(){
    validatePhone1();
  })
  function validatePhone1(){
    phone1Val = phone1.val();
    if(phone1Val.length>9 &&  phone1Val.length<12 && $.isNumeric(phone1Val)){
      phone1.css('box-shadow','0 0 4px 0 teal');
      $('#check_phone1').hide();
    }
    else{
      phone1.css('box-shadow','0 0 4px 0 red');
      $('#check_phone1').html('**phone available');
      $('#check_phone1').show();
    }
  }
  var selector1  =  $('#selector1');
  selector1.change(function(){
    validateSelector();
  })
  function validateSelector(){
    var selector1Val = selector1.val();
    selector1.css('box-shadow','0 0 4px 0 teal');
  }

  $('#submit1').click(function(){
    if(u1 == 0){
      return false;
    }
    else{
      return true;
    }
  })

});
</script> -->
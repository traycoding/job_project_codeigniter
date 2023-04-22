<style type="text/css">
  .color{
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
              <li><a class="<?=($this->uri->segment(2)==false)?'active':''?>" href="<?= base_url(); ?>candidates/dashboard">Dashboard</a></li>
              <li><a class="<?=($this->uri->segment(2)=='my_profile')?'active':''?>" href="<?= base_url(); ?>candidates/my_profile">My Profile</a></li>
              <li><a class="<?=($this->uri->segment(2)=='change_password')?'active':''?>" href="<?= base_url(); ?>candidates/change_password">Change Password</a></li>
              <li><a class="<?=($this->uri->segment(2)=='my_resume')?'active':''?>" href="<?= base_url(); ?>candidates/my_resume">My Resume</a></li>
              <li><a class="<?=($this->uri->segment(2)=='saved_jobs')?'active':''?>" href="<?= base_url(); ?>candidates/saved_jobs/<?= $id ?>">Saved Jobs</a></li>
              <li><a class="<?=($this->uri->segment(2)=='pricing')?'active':''?>" href="<?= base_url(); ?>candidates/pricing">Pricing Plan</a></li>
              <li><a class="<?=($this->uri->segment(2)=='logout')?'active':''?>" href="<?= base_url('sign_in') ?>">Log Out</a></li>
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
Change Password -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4>Change Password</h4>
              <?php if($this->session->userdata('message')): ?>
                      <div class="alert alert-warning">
                        <?= $this->session->userdata('message','Password updated'); $this->session->unset_userdata('message'); ?>
                      </div>
              <?php endif ?>

          </div>
          <div class="row">
            <div class="col-12">
              <form class="row" action="<?= base_url('employer/change_password') ?>" method="post">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Current Password</label>
                  <div class="input">
                    <input type="password"  class="form-control myInput" value="<?= set_value('curr_pass') ?>" name="curr_pass">
                    <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                    <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                  </div>
                  <?= form_error('curr_pass'); ?>
                </div>
                <div class="form-group mb-3 col-md-12 .input">
                  <label class="form-label">New Password</label>
                   <div class="input">
                    <input type="password"  class="form-control myInput" name="new_pass" value="<?= set_value('new_pass'); ?>">
                    <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                    <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                  </div>
                  <?= form_error('new_pass'); ?>
                </div>
                <div class="form-group col-md-12 mb-0">
                  <label class="form-label">Confirm Password</label>
                  <div class="input">
                   <input type="password"  class="form-control myInput" name="confir_pass" value="<?= set_value('confir_pass'); ?>">
                    <i class="fa-solid fa-eye showPass show" style="position: absolute;right: 5px;top: 20px;cursor: pointer;display: none;"></i>
                    <i class="fa-sharp fa-solid fa-eye-slash showPass hide" style="position: absolute;right: 5px;top: 20px;cursor: pointer;"></i>
                  </div>
                  <?= form_error('confir_pass') ?>
                </div>
                <input type="submit" name="submit" value="Change Password" class="btn btn-primary " style="width: 200px;margin-left: 13px;margin-top: 20px;">
              </form>
            </div>
          </div>
        </div>
        <!-- <a class="btn btn-lg btn-primary" href="#">Change Password</a> -->
      </div>
    </div>
  </div>
</section>
<!--=================================
Change Password -->



<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
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
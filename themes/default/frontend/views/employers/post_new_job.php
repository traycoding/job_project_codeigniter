
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
Post New Job -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4 d-inline-block">
            <h4>Post a New Job</h4>
          </div>
          <div class="row">
                <div class="col-12">
                  <?= form_open_multipart('employer/post_new_job'); ?>
                    <div class="row">  
                      <div class="form-group mt-0 mb-3 col-md-12">
                        <label class="form-label"><?= lang('job_title') ?>*</label>
                        <input type="text" class="form-control"  name="job_title" value="<?= set_value('job_title') ?>" >
                        <?php  echo form_error('job_title') ?>
                      </div>
                      <div class="form-group mt-0 mb-3 col-md-12">
                        <label class="form-label"><?= lang('job_description') ?></label>
                        <textarea class="form-control" rows="4" name="job_description" ></textarea>

                        <?php echo form_error('job_description'); ?>
                      </div>
                      <div class="form-group mt-0 mb-3 col-md-6 datetimepickers">
                      <label class="form-label"><?= lang('job_expire_date'); ?>*</label>
                      <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                        <input type="datetime-local" class="form-control datetimepicker-input" placeholder="0000-00-00" data-target="#datetimepicker-01" name="job_expire_date" value="<?= set_value('job_expire_date') ?>">
                        <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                      </div>
                        <?php echo form_error('job_expire_date'); ?>
                    </div>
                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                      <label class="form-label"><?= lang('job_category'); ?>*</label>
                      <select class="form-control basic-select" name="job_category">
                        <!-- <option value="0" selected="selected">Please selected job category</option> -->
                        <?php
                          foreach($job_categories as $job_category){
                            ?>
                              <option value="<?= $job_category->job_category_id ?>"><?= $job_category->name ?></option>
                            <?php
                          }
                        ?>
                      </select>
                      <?php echo form_error('job_category') ?>
                    </div>
                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                      <label class="form-label"><?= lang('job_location'); ?>*</label>
                      <select class="form-control basic-select" name="job_location">
                        <!-- <option value="0" selected="selected">Please selected location</option> -->
                        <?php
                          foreach($job_locations as $job_location){
                            ?>
                              <option value="<?= $job_location->job_location_id ?>"><?= $job_location->name ?></option>
                            <?php
                          }
                        ?>
                        
                      </select>
                    </div>
                    <div class="form-group mt-0 col-md-6 mb-0">
                      <label class="form-label"><?= lang('salary') ?></label>
                      <input type="text" class="form-control" name="salary" value="<?= set_value('salary') ?>">
                      <?= form_error('salary') ?>
                    </div>


                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                      <label class="form-label"><?= lang('active') ?></label>
                      <select class="form-control basic-select" name="action">
                        <option value="1">Active</option>
                        <option value="0">Inacive</option>
                      </select>
                    </div>
                    <div class="form-group mt-0 col-md-6 mb-0">
                      <label class="form-label"><?= lang('image') ?>*</label>
                      <input type="file" class="form-control" value="" id="txt_file" style="" name="job_image">
                    </div>
                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                      <label class="form-label"><?= lang('phone','phone') ?></label>
                      <input type="text" class="form-control" name="phone" value="<?= set_value('phone') ?>">
                      <?= form_error('phone') ?>
                    </div>
                    <div class="form-group mt-0 col-md-6 mb-0">
                      <label class="form-label"><?= lang('facebook','facebook') ?></label>
                      <input type="text" class="form-control" name="facebook" value="<?= set_value('facebook') ?>">
                      <?= form_error('facebook') ?>
                    </div>
                    <div class="form-group mt-0 mb-3 col-md-6 select-border">
                      <label class="form-label"><?= lang('twitter','twitter') ?></label>
                      <input type="text" class="form-control" name="twitter" value="<?= set_value('twitter') ?>">
                      <?= form_error('twitter') ?>
                    </div>
                    <div class="form-group mt-0 col-md-6 mb-0">
                      <label class="form-label"><?= lang('linkedin','linkedin') ?></label>
                      <input type="text" class="form-control" name="linkedin" value="<?= set_value('linkedin') ?>">
                      <?= form_error('linkedin') ?>
                    </div>

                    <div class="user-dashboard-info-box">
                        <div class="form-group mb-0">
                          <h4 class="mb-4">Address</h4>
                          <div class="form-group mb-3">
                            <label class="form-label">Enter Your Location</label>
                            <input type="text" class="form-control" value="" placeholder="Enter Your location" name="address" value="<?= set_value('address') ?>">
                          </div>
                          <?= form_error('address') ?>
                          <div class="company-address-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin"  height="400" allowfullscreen></iframe>
                          </div>
                        </div>
                    </div>
                    <!-- <a class="btn btn-lg btn-primary" href="#" style="display:inline-block; width: 100px;">Save</a> -->
                    <input type="submit" name="submit" value="<?= lang('save') ?>" class="btn btn-dark" style="width: 100px;">
                  <?= form_close(); ?>
                </div>
          </div>
        </div>
        <!-- <div class="user-dashboard-info-box">
          <form>
            <div class="row">
              <div class="col-12">
                <h4 class="mb-3">File attachment</h4>
                <div class="upload-file mb-0">
                  <label for="formFile" class="form-label">Upload File</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
              </div>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  </div>
</section>
<!--=================================
Post New Job -->



<!--=================================s
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================

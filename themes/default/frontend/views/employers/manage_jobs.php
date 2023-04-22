

<style>
  .table1{
    width: 100%;
  }
  .table1 th,td{
    padding: 10px;
    border: none;
  }
  .table1 td{
    text-align: right;
  }
  .table1 tr td input{
   width: 100%;
   border: none;
   outline: none;
   text-align: center;
  }
  .table tr td img{
    width: 30px;
    height: 30px;
    object-fit: cover;
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
Manage Jobs -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box mb-0">
          <div class="user-dashboard-table table-responsive">
            <input type="hidden" name="" value="View Job" class="view1">
            <input type="hidden" name="" value="Edit Job" class="edit1">

            <table class="table table-bordered" id="employers">
              <thead class="bg-light">
                <tr >
                  <th scope="col">ID</th>
                  <th scope="col">Image</th>
                  <th scope="col">Job Title</th>
                  <th scope="col">Salary</th>
                  <th scope="col">Date available</th>
                  <th scope="col">Job Location</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach($manage_jobs as $manage_job){
                    ?>
                      <tr>
                        <input type="hidden" name="job_location_id" id="job_location_id" value="<?= $manage_job->location_id  ?>">
                        <th><?= $manage_job->job_id ?></th>
                        <td>
                          <img src="<?= $assets ?>images/frontend/<?= $manage_job->job_image ?>">
                        </td>
                        <th scope="row">
                          <?= $manage_job->job_title ?>
                        </th>
                        <td><?= $manage_job->salary ?></td>
                        <td><?= $manage_job->date_available ?></td>
                        <td><?= $manage_job->location_name ?></td>
                        <td>
                          <ul class="list-unstyled mb-0 d-flex">
                            <li>
                              <a href="<?= base_url('main/action').$manage_job->status ?>/<?= $manage_job->job_id.'/'.$id ?>" style="color:#777"><i class="<?= ($manage_job->status==1)?"fa-solid fa-eye":"fa-sharp fa-solid fa-eye-slash" ?>"></i></a>
                            </li>
                            <li>
                              <div class="btnEdit" data-bs-toggle="modal" data-bs-target="#myModal1" style="cursor:pointer;">
                                <i class="fas fa-pencil-alt"></i>
                              </div>
                            </li>
                            <!-- <li><a  class="text-info btnEdit" data-bs-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a></li> -->
                            <li>
                              <a href="#"  class="text-danger btnDelete" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="far fa-trash-alt"></i></a>
                            </li>
                          </ul>
                        </td>
                      </tr>
                    <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- The Modal -->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog" style="width:900px; position:relative; height: auto;">
    <div class="modal-content" style="width:900px; height: auto; position: absolute;left: 50%;transform: translateX(-50%); top: 50%;">
      <form action="<?= base_url('main/job_update/')?>" method="get">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title title">JOB DETAIL</h4>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
                <table class="table1">
                  <tr>
                    <th>ID</th>
                    <th>:</th>
                    <td>
                      <input type="text" name="job_id" id="txt_id" readonly style="color:red;">
                    </td>
                  </tr>
                  <tr>
                    <th>Job Title</th>
                    <th>:</th>
                    <td>
                      <!-- <input type="text" name="job_title"> -->
                      <input type="text" name="job_title" id="txt_email">
                    </td>
                  </tr>
                  <tr>
                    <th>Salary</th>
                    <th>:</th>
                    <td> 
                      <input type="text" name="salary" id="txt_salary">
                    </td>
                  </tr>
                  <tr>
                    <th>Date Available</th>
                    <th>:</th>
                    <td> 
                      <input type="text" name="date" id="txt_date">
                    </td>
                  </tr>
                  <tr>
                    <th>Location</th>
                    <th>:</th>
                    <td>
                      <!-- <input type="text" name="location" id="txt_location">  -->
                      <select class="form-control" name="location" id="txt_location">
                        <option value="1">Please Selected</option>
                        <?php

                          foreach($job_locations as $job_location){
                            ?>
                              <option value="<?= $job_location->job_location_id ?>"><?= $job_location->name ?></option>
                            <?php
                          }

                        ?>
                      </select>
                    </td>
                  </tr>

              </table>
              <label style="margin-bottom: 10px;"><?= lang('description') ?></label>
              <textarea class="form-control" cols="20" rows="6">dflkjsklfdjslfkj</textarea>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <!-- <button type="submit" class="btn btn-info  btnEdit" data-bs-dismiss="modal" style="color: white;">Update</button> -->
          <input type="submit" name="submit" value="Update"  class="btn btn-dark" data-bs-dismiss="modal" style="color:white;">
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="myTitle"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to delete this job ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href="<?= base_url('main/delete_job/') ?>" class="btn btn-danger yes">Yes</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>


 <script type="text/javascript">
  $(document).ready(function(){
   
    $('.btnEdit').click(function(){
      var Parent     = $(this).parents('tr');
      view(Parent);
    })

    function view(Parent){
      var id         = $.trim(Parent.find('th:eq(0)').text())
      var job_title  = $.trim(Parent.find('th:eq(1)').text());
      var salary     = $.trim(Parent.find('td:eq(1)').text());
      var date       = $.trim(Parent.find('td:eq(2)').text());
      var location   = $.trim(Parent.find('td:eq(3)').text());
      var valueOfoption = $.trim(Parent.find('input').val());

      $('.table1 tr td:eq(0) input').val(id);
      $('.table1 tr td:eq(1) input').val(job_title);
      $('.table1 tr td:eq(2) input').val(salary);
      $('.table1 tr td:eq(3) input').val(date);
      // $('.table1 tr td:eq(4) input').val(location);
      $('.table1 tr td:eq(4) option:selected').text(location);
      $('.table1 tr td:eq(4) option:selected').val(valueOfoption);

    };

    $('.btnDelete').click(function(){
      var Parent = $(this).parents('tr'); 
      var job_title = $.trim(Parent.find('th:eq(1)').text());
      var id        = $.trim(Parent.find('th:eq(0)').text());

      $('#myTitle').text(job_title);
      $('.yes').attr('href','<?= base_url('main/delete_job/') ?>'+id);
    })
  })
</script> 


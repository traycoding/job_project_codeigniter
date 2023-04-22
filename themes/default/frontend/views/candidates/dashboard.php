

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
              <li><a class="<?=($this->uri->segment(2)=='dashboard')?'active':''?>" href="<?= base_url(); ?>candidates/dashboard">Dashboard</a></li>
              <li><a class="<?=($this->uri->segment(2)=='my_profile')?'active':''?>" href="<?= base_url(); ?>candidates/my_profile">My Profile</a></li>
              <li><a class="<?=($this->uri->segment(2)=='change_password')?'active':''?>" href="<?= base_url(); ?>candidates/change_password">Change Password</a></li>
              <li><a class="<?=($this->uri->segment(2)=='my_resume')?'active':''?>" href="<?= base_url(); ?>candidates/my_resume">My Resume</a></li>
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
Candidates Dashboard -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row mb-3 mb-lg-5 mt-3 mt-lg-0">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="candidates-feature-info bg-dark">
                <div class="candidates-info-icon text-white">
                  <i class="fas fa-globe-asia"></i>
                </div>
                <div class="candidates-info-content">
                 <h6 class="candidates-info-title text-white">Total Applications</h6>
                </div>
                <div class="candidates-info-count">
                  <h3 class="mb-0 text-white">01</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="candidates-feature-info bg-success">
                <div class="candidates-info-icon text-white">
                  <i class="fas fa-thumbs-up"></i>
                </div>
                <div class="candidates-info-content">
                 <h6 class="candidates-info-title text-white">Shortlisted Applications</h6>
                </div>
                <div class="candidates-info-count">
                  <h3 class="mb-0 text-white">00</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="candidates-feature-info bg-danger">
                <div class="candidates-info-icon text-white">
                  <i class="fas fa-thumbs-down"></i>
                </div>
                <div class="candidates-info-content">
                 <h6 class="candidates-info-title text-white">Rejected Applications</h6>
                </div>
                <div class="candidates-info-count">
                  <h3 class="mb-0 text-white">00</h3>
                </div>
              </div>
            </div>
          </div>
        <div class="user-dashboard-info-box">
          <div id="chart">
          </div>
        </div>
        <div class="user-dashboard-info-box mb-0 pb-4">
          <div class="section-title">
            <h4>Recent Applied Jobs</h4>
          </div>
          <div class="row">
            <?php

              foreach($latest_jobs as $company){
                ?>
                  <div class="col-12">
                    <div class="job-list ">
                      <div class="job-list-logo">
                        <img class="img-fluid" src="images/svg/01.svg" alt="">
                      </div>
                      <div class="job-list-details">
                        <div class="job-list-info">
                          <div class="job-list-title">
                            <h5 class="mb-0"><a href="job-detail.html"><?= $company->company_name ?></a></h5>
                          </div>
                          <div class="job-list-option">
                            <ul class="list-unstyled">
                              <li> <span>via</span> <a href="employer-detail.html">Fast Systems Consultants</a> </li>
                              <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                              <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                              <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span> </div>
                    </div>
                  </div>
                <?php
              }

            ?>
          </div>
          <div class="row">
            <div class="col-12 text-center mt-4 mt-md-5">
              <ul class="pagination justify-content-center mb-md-4 mb-0">
                <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">25</a></li>
                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
              </ul>
            </div>
          </div>
        </div>
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
<!--=================================
Back To Top-->


<!--=================================
Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>


    <!-- map -->
    <script src="js/apexcharts/apexcharts.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

    <script>
        var options = {
            chart: {
                height: 350,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            colors: ['#ff8a00', '#001935'],

            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart"),
            options
        );

        chart.render();
    </script>

</body>

</html>

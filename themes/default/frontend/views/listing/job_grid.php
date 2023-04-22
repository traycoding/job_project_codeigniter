

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
job-grid -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--=================================
        right-sidebar -->
        <div class="row mb-4">
          <div class="col-12">
            <h6 class="mb-0">Showing <?= $pages ?> - <?= $total ?> of <span class="text-primary"><?= $count ?> Jobs</span></h6>
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
            <div class="filter-btn ms-sm-3 ms-auto"> <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapsefilter" role="button" aria-expanded="false" aria-controls="collapsefilter"><i class="fa fa-filter"></i>Show Filter </a>
           </div>
          </div>
        </div>
        <div class="collapse" id="collapsefilter">
          <div class="row  mb-4">
              <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <h6 class="mb-3">Date Posted</h6>
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
              <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <h6 class="mb-3">Specialism</h6>
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
              <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
                <h6 class="mb-3">Job Type</h6>
                <div class="widget">
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
              <div class="col-lg-3 col-sm-6">
                <h6 class="mb-3">Experience</h6>
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
          </div>
        </div>
        <div class="row">
          <?php

            foreach($job_grids as $job_grid){
              ?>
                <div class="col-md-6 col-lg-4">
                  <div class="job-list job-grid">
                    <div class="job-list-logo">
                      <img class="img-fluid" src="images/svg/01.svg" alt="">
                    </div>
                    <div class="job-list-details">
                      <div class="job-list-info">
                        <div class="job-list-title">
                          <h5 class="mb-0"><a href="job-detail.html"><?= $job_grid->job_title?></a></h5>
                        </div>
                        <div class="job-list-option">
                          <ul class="list-unstyled">
                            <li> <span>via</span> <a href="employer-detail.html">Fast Systems Consultants</a> </li>
                            <li><i class="fas fa-map-marker-alt pe-1"></i><?= $job_grid->location_name ?></li>
                            <li><i class="fas fa-filter pe-1"></i><?= $job_grid->sub_categoris_name ?></li>
                            <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="fas fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span> </div>
                  </div>
                </div>
              <?php
            }

          ?>  
        </div>
        <div class="row">
          <div class="col-12 text-center mt-4">
            <?= $page_link ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
job-grid -->

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


 <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/select2/select2.full.js"></script>

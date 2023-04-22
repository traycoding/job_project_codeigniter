

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
Manage Candidates -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive pb-4 mb-0">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Candidate Name</th>
                <th class="text-center">Status</th>
                <th class="action text-end">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="images/avatar/06.jpg" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Sara Lisbon</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pe-1"></i>Strategy & Consultancy</li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                  <span class="candidate-list-time order-1">Shortlisted</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="images/avatar/02.jpg" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Paul Flavius</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pe-1"></i>General Insurance</li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Ormskirk Rd, Wigan</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                  <span class="candidate-list-time order-1">Shortlisted</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="images/avatar/08.jpg" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Carolyn & Dan</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pe-1"></i>Recruitment Consultancy</li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Paris, Île-de-France</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                  <span class="candidate-list-time order-1">Shortlisted</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="images/avatar/05.jpg" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Felica Queen</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pe-1"></i>General Insurance</li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Union St, New Delhi</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                  <span class="candidate-list-time order-1">Shortlisted</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="images/avatar/04.jpg" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Melissa Doe</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pe-1"></i>Construction &amp; Property</li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                  <span class="candidate-list-time order-1">Shortlisted</span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
          </table>
        <div class="row">
          <div class="col-12 text-center mt-3 mb-4 mt-sm-3">
            <ul class="pagination justify-content-center mb-0">
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
Manage Candidates -->

   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>


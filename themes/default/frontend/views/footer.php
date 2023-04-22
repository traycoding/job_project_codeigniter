<!--=================================
Footer-->
<footer class="footer mt-0">
  <div class="container pb-4 pb-lg-5">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-link">
          <h5 class="text-dark mb-4">For Candidates</h5>
          <ul class="list-unstyled">
            <li><a href="<?= base_url() ?>job_listing">Browse Jobs</a></li>
            <li><a href="<?= base_url() ?>browse_categories">Browse Categories</a></li>
            <li><a href="#">Submit Resume</a></li>
            <li><a href="<?= base_url() ?>candidates">Candidate Dashboard</a></li>
            <li><a href="#">Job Alerts</a></li>
            <li><a href="#">My Bookmarks</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="footer-link">
          <h5 class="text-dark mb-4">For Employers</h5>
          <ul class="list-unstyled">
            <li><a href="<?= base_url() ?>candidates_listing">Browse Candidates</a></li>
            <li><a href="<?= base_url() ?>browse_categories">Browse Categories</a></li>
            <li><a href="<?= base_url() ?>employer">Employer Dashboard</a></li>
            <li><a href="<?= base_url() ?>post_a_job">Add Job</a></li>
            <li><a href="<?= base_url() ?>pricing">Job Packages</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <div class="footer-link">
          <h5 class="text-dark mb-4">Partner Sites</h5>
          <ul class="list-unstyled">
            <li><a href="#">Shortcodes</a></li>
            <li><a href="<?= base_url() ?>job_listing">Job Page</a></li>
            <li><a href="<?= base_url() ?>job_listing_map">Job Page Alternative </a></li>
            <li><a href="<?= base_url() ?>candidates/my_resume">Resume Page</a></li>
            <li><a href="<?= base_url() ?>blog">Blog</a></li>
            <li><a href="<?= base_url() ?>contact_us">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <div class="footer-contact-info bg-holder" style="background-image: url(<?= $frontend_assets; ?>images/google-map.png);">
          <h5 class="text-dark mb-4">Contact Us</h5>
          <ul class="list-unstyled mb-0">
            <li> <i class="fas fa-map-marker-alt text-primary"></i><span><?= $contact_us->address ?></span> </li>
            <li> <i class="fas fa-mobile-alt text-primary"></i><span><?= $contact_us->phone ?></span> </li>
            <li> <i class="far fa-envelope text-primary"></i><span><?= $contact_us->email ?></span> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="border-bottom"></div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-center text-md-start">
          <p class="mb-0"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> jobpending </a> All Rights Reserved </p>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="social d-flex justify-content-lg-end justify-content-center">
            <ul class="list-unstyled">
              <li class="facebook"><a href="#">FB</a></li>
              <li class="twitter"><a href="#">TW</a></li>
              <li class="linkedin"><a href="#">IN</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--=================================
Footer-->

<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>


   
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="<?= $frontend_assets; ?>js/jquery-3.6.0.min.js"></script>
    <script src="<?= $frontend_assets; ?>js/popper/popper.min.js"></script>
    <script src="<?= $frontend_assets; ?>js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="<?= $frontend_assets; ?>js/jquery.appear.js"></script>
    <script src="<?= $frontend_assets; ?>js/counter/jquery.countTo.js"></script>
    <script src="<?= $frontend_assets; ?>js/owl-carousel/owl-carousel.min.js"></script>
    <script src="<?= $frontend_assets; ?>js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="<?= $frontend_assets; ?>js/custom.js"></script>

    <!-- map -->
    <script src="<?= $frontend_assets; ?>js/map/handlebars.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBPohe84NhPXKlVEVXxOsR9HQJkBpa6Z0o"></script>
    <script src="<?= $frontend_assets; ?>js/map/snazzy-info-window.min.js"></script>
    <script src="<?= $frontend_assets; ?>js/map/map-script.js"></script> 
    <script type="text/javascript" src="<?= $frontend_assets; ?>js/core.js"></script>
    <script id="marker-content-template" type="text/x-handlebars-template">
      <div class="job-grid-map-img" style="background-image: url({{{bgImg}}})"></div>
        <div class="job-grid-map">
          <h6 class="job-grid-map-title">
          <a href="{{link}}">{{title}}</a>
          </h6>
          <div class="job-grid-map-content">{{{body}}}</div>
        </div>
    </script>
     <script type="text/javascript" src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <?php
      if (isset($table)) {
        switch($table){
          case "candidates":
          ?>
            <script type="text/javascript">
                $(document).ready(function(){
                  let table = new DataTable('#myTable');
                })
            </script>
          <?php
          break;
          case "employers" :
          ?>
            <script type="text/javascript">
                $(document).ready(function(){
                  let table = new DataTable('#employers');
                })
            </script>
          <?php
          break;
          case " ":
            return null;
          break;
        }
      }
      else{
        return false;
      }
     ?>
<style type="text/css">
  .input{
    position: relative;
  }
</style>
</body>
</html>



<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Contact Us</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="<?= base_url('home');?>"> Home </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Contact us </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
feature-info -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="feature-info feature-info-border p-4 text-center">
          <div class="feature-info-icon mb-3">
            <i class="flaticon-placeholder"></i>
          </div>
          <div class="feature-info-content">
            <h5 class="text-black">Address</h5>
            <span class="d-block"><?= $contact_us->address ?></span>
            <!-- <span>New York, NY 10002</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="feature-info feature-info-border p-4 text-center">
          <div class="feature-info-icon mb-3">
            <i class="flaticon-contact fa-flip-horizontal"></i>
          </div>
          <div class="feature-info-content">
            <h5 class="text-black">Phone Number</h5>
            <span class="d-block"><?= $contact_us->phone ?></span>
            <!-- <span>(456) 478-2589</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <div class="feature-info feature-info-border p-4 text-center">
          <div class="feature-info-icon mb-3">
            <i class="flaticon-approval"></i>
          </div>
          <div class="feature-info-content">
            <h5 class="text-black">Email</h5>
            <span class="d-block"><?= $contact_us->email ?></span>
            <!-- <span>gethelp@jobber.demo</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-info feature-info-border p-4 text-center">
          <div class="feature-info-icon mb-3">
            <i class="flaticon-curriculum"></i>
          </div>
          <div class="feature-info-content">
            <h5 class="text-black">Fax</h5>
            <span class="d-block">(123) <?= $contact_us->fax ?></span>
            <!-- <span>(456) 478-2589</span> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
feature-info -->

<!--=================================
Let’s Get In Touch -->
<section class="space-ptb pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-02 text-center">
          <h2>Let’s Get In Touch!</h2>
          <p>We have completed over a 1000+ projects for five hundred clients. Give us your next project.</p>
        </div>
      </div>
    </div>
    <form>
      <div class="row">
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" id="Username" placeholder="Enter Your Name">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" id="email" placeholder="Subject">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" id="Password" placeholder="Enter Your Email Address">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number">
        </div>
        <div class="form-group col-12 mb-0">
          <textarea rows="5" class="form-control" id="sector" placeholder="Subject"></textarea>
        </div>
        <div class="col-12 text-center mt-4">
          <a class="btn btn-primary" href="#">Send your message</a>
        </div>
      </div>
    </form>
  </div>
</section>

<section class="space-ptb pt-0">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex mb-md-0 mb-4">
          <i class="font-xlll text-primary flaticon-hand-shake"></i>
          <div class="feature-info-content ps-4">
            <h5>Chat To Us Online</h5>
            <p class="mb-0">Chat to us online if you have any question.</p>
            <a class="mt-2 mb-0 d-block" href="#">Click here to open chat</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex mb-md-0 mb-4">
          <i class="font-xlll text-primary flaticon-profiles"></i>
          <div class="feature-info-content ps-4">
            <h5>Call Us</h5>
            <p class="mb-0">Our support agent will work with you to meet your lending needs.</p>
            <h5 class="mt-2 mb-0"><?= $contact_us->phone ?></h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex">
          <i class="font-xlll text-primary flaticon-conversation-1"></i>
          <div class="feature-info-content ps-4">
            <h5>Read our latest news</h5>
            <p class="mb-0">Visit our Blog page and know more about news and career tips</p>
            <a class="mt-2 mb-0 d-block" href="#">Read Blog post </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Let’s Get In Touch -->

<!--=================================
feature info section -->
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
feature info section -->

<!--=================================


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

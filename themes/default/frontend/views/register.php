

<!--=================================
inner banner 
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Register</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Register </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Register 
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
         <div class="section-title">
          <h4 class="text-center">Create Your Account</h4>
         </div>
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" >
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">I want to discover companies.</p>
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
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">I want to attract the best talent.</p>
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
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="Username">Username *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Email Address *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Password *</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2">Confirm Password *</label>
                    <input type="password" class="form-control">
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="phone">Phone:</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="mb-3 col-md-12 select-border">
                    <label class="form-label" for="sector">Select Sector:</label>
                    <select class="form-control basic-select">
                      <option value="value 01" selected="selected">Accountancy</option>
                      <option value="value 02">Apprenticeships</option>
                      <option value="value 03">Banking</option>
                      <option value="value 04">Education</option>
                      <option value="value 05">Engineering</option>
                      <option value="value 06">Estate Agency</option>
                      <option value="value 07">IT & Telecoms</option>
                      <option value="value 08">Legal</option>
                    </select>
                  </div>
                  <div class="mb-3 col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                      <label class="form-check-label" for="Remember-02">
                        you accept our Terms and Conditions and Privacy Policy
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6 text-md-end mt-2 text-center">
                    <p>Already registered? <a href="#"> Sign in here</a></p>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Username *</label>
                    <input type="text" class="form-control" id="Username">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Email Address *</label>
                    <input type="text" class="form-control" id="email">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Password *</label>
                    <input type="password" class="form-control" id="Password">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="password2">Confirm Password *</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone">
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="sector">Select Sector</label>
                    <input type="text" class="form-control" id="sector">
                  </div>
                  <div class="mb-3 col-12 mt-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="accepts-02">
                      <label class="form-check-label" for="accepts-02">
                        you accept our Terms and Conditions and Privacy Policy
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6 text-md-end mt-2 text-center">
                    <a href="#">Already have an account?</a>
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
Register -->

<!--=================================
feature-info 
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


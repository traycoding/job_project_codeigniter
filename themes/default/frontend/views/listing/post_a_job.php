
<!--=================================
tab -->
<section class="space-ptb bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="section-title text-center">
        <h2 class="text-primary">Post a New Job</h2>
       </div>
      </div>
      <div class="col-md-8">
        <div class=" justify-content-center">
          <ul class="nav nav-tabs nav-tabs-03 justify-content-center d-sm-flex d-block text-center" id="myTab" role="tablist">
            <li class="flex-fill">
              <a class="nav-item active" id="Job-detail-tab" data-bs-toggle="tab" href="#Job-detail" role="tab" aria-controls="Job-detail" aria-selected="false">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-suitcase"></i>
                </div>
                <span>Job Detail</span>
              </a>
            </li>
            <li class="flex-fill">
              <a class="nav-item" id="Package-tab" data-bs-toggle="tab" href="#Package" role="tab" aria-controls="Package" aria-selected="false">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-debit-card"></i>
                </div>
                <span>Package &amp; Payments</span>
              </a>
            </li>
            <li class="flex-fill">
              <a class="nav-item" id="Confirm-tab" data-bs-toggle="tab" href="#Confirm" role="tab" aria-controls="Confirm" aria-selected="false">
                <div class="feature-info-icon mb-3">
                  <i class="flaticon-tick"></i>
                </div>
                <span>Confirmation</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade active show" id="Job-detail" role="tabpanel" aria-labelledby="Job-detail-tab">
    <section class="space-ptb">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <form class="row">
              <div class="form-group col-md-12 mb-3">
                <label class="mb-2">Job Title *</label>
                <input type="text" class="form-control" value="" placeholder="Enter a Title">
              </div>
              <div class="form-group col-md-12 mb-3">
                <label class="mb-2">Description *</label>
                <textarea class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="mb-2">Email Address *</label>
                <input type="email" class="form-control" value="" placeholder="Enter Email Address of Contact Person">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="mb-2">Username *</label>
                <input type="text" class="form-control" value="" placeholder="Username">
              </div>
              <div class="form-group col-md-4 mb-3">
                <label class="mb-2">Application Deadline</label>
                <input type="text" class="form-control" value="">
              </div>
              <div class="form-group col-md-4 select-border mb-3">
                <label class="mb-2">Job Sector *</label>
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
              <div class="form-group col-md-4 select-border mb-3">
                <label class="mb-2">Job Type *</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">Energy</option>
                  <option value="value 02">Human Resources</option>
                  <option value="value 03">IT & Telecoms</option>
                </select>
              </div>
              <div class="form-group col-md-12 select-border mb-3">
                <label class="mb-2">Job Apply Type</label>
                <select class="form-control basic-select">
                  <option value="value 01">Human Resources</option>
                  <option value="value 02">Energy</option>
                  <option value="value 03">IT & Telecoms</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="mb-2">Salary *</label>
              </div>
              <div class="form-group col-md-6 select-border mb-3">
                <select class="form-control basic-select">
                  <option value="value 01">10000</option>
                  <option value="value 02">25000</option>
                  <option value="value 03">35000</option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group mb-2">
                  <div class="input-group-prepend d-flex">
                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                  </div>
                  <input type="text" class="form-control" placeholder="Min">
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="input-group mb-2">
                  <div class="input-group-prepend d-flex">
                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                  </div>
                  <input type="text" class="form-control" placeholder="Max">
                </div>
              </div>
              <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                <label class="mb-2">State</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">Connecticut</option>
                  <option value="value 02">New York</option>
                  <option value="value 03">Louisiana</option>
                  <option value="value 04">Wisconsin</option>
                  <option value="value 05">Maryland</option>
                  <option value="value 06">Mississippi</option>
                  <option value="value 07">New Mexico</option>
                </select>
              </div>
              <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                <label class="mb-2">Currency position</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">U.S. Dollar (USD)</option>
                  <option value="value 02">European Euro (EUR)</option>
                  <option value="value 03">Japanese Yen (JPY)</option>
                  <option value="value 04">British Pound (GBP)</option>
                  <option value="value 05">Swiss Franc (CHF)</option>
                  <option value="value 06">Canadian Dollar (CAD)</option>
                  <option value="value 07">Australian Dollar</option>
                </select>
              </div>
              <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                <label class="mb-2">Thousand separator</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">Energy</option>
                  <option value="value 02">Human Resources</option>
                  <option value="value 03">IT & Telecoms</option>
                </select>
              </div>
              <div class="form-group col-md-3 mb-md-0 mb-3 select-border">
                <label class="mb-2">Number of decimals</label>
                <select class="form-control basic-select">
                  <option value="value 02">Human Resources</option>
                  <option value="value 01">Energy</option>
                  <option value="value 03">IT & Telecoms</option>
                </select>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-4 mt-lg-5">
          <div class="col-12">
            <h5 class="mb-4">Other Information</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <form class="row">
              <div class="form-group col-md-6 select-border mb-3">
                <label class="mb-2">Offered Salary</label>
                <select class="form-control basic-select">
                  <option value="value 02">Human Resources</option>
                  <option value="value 03">IT & Telecoms</option>
                  <option value="value 01">Energy</option>
                </select>
              </div>
              <div class="form-group col-md-6 select-border mb-3">
                <label class="mb-2">Career Level</label>
                <select class="form-control basic-select">
                  <option value="value 03">IT & Telecoms</option>
                  <option value="value 02">Human Resources</option>
                  <option value="value 01">Energy</option>
                </select>
              </div>
              <div class="form-group col-md-6 select-border mb-3">
                <label class="mb-2">Experience *</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">6M Experience</option>
                  <option value="value 02">9M Experience</option>
                  <option value="value 03">1Y Experience</option>
                  <option value="value 04">2Y Experience</option>
                  <option value="value 05">5Y Experience</option>
                </select>
              </div>
              <div class="form-group col-md-6 select-border mb-3">
                <label class="mb-2">Gender *</label>
                <select class="form-control basic-select">
                  <option value="value 03">Male</option>
                  <option value="value 01">Female</option>
                </select>
              </div>
              <div class="form-group col-md-6 select-border mb-md-0 mb-3">
                <label class="mb-2">Industry *</label>
                <select class="form-control basic-select">
                  <option value="value 02">Human Resources</option>
                  <option value="value 01">Energy</option>
                  <option value="value 03">IT & Telecoms</option>
                </select>
              </div>
              <div class="form-group col-md-6 select-border mb-md-0 mb-3">
                <label class="mb-2">Qualifications *</label>
                <select class="form-control basic-select">
                  <option value="value 01">Energy</option>
                  <option value="value 02">Human Resources</option>
                  <option value="value 03">IT & Telecoms</option>
                </select>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-4 mt-lg-5">
          <div class="col-12">
            <h5 class="mb-4">File Attachments</h5>
          </div>
        </div>
        <div class="input-group mb-3 choose-file">
          <input type="file" class="form-control" id="inputGroupFile02">
          <label class="input-group-text" for="inputGroupFile02">Choose file</label>
        </div>

        <div class="row mt-5">
          <div class="col-12">
            <h5 class="mb-4">Address / Location</h5>
          </div>
        </div>
        <form class="row align-items-end">
          <div class="form-group col-md-6 select-border mb-3">
            <label class="mb-2">Country</label>
            <select class="form-control basic-select">
              <option value="value 01" selected="selected">Armenia</option>
              <option value="AR">Argentina</option>
              <option value="AM">Armenia</option>
              <option value="AW">Aruba</option>
              <option value="AU">Australia</option>
              <option value="BS">Bahamas</option>
              <option value="BH">Bahrain</option>
              <option value="BD">Bangladesh</option>
              <option value="BB">Barbados</option>
              <option value="KH">Cambodia</option>
              <option value="CM">Cameroon</option>
              <option value="CA">Canada</option>
              <option value="DK">Denmark</option>
              <option value="DJ">Djibouti</option>
              <option value="DM">Dominica</option>
              <option value="ER">Eritrea</option>
              <option value="EE">Estonia</option>
              <option value="ET">Ethiopia</option>
              <option value="FJ">Fiji</option>
              <option value="FI">Finland</option>
              <option value="FR">France</option>
              <option value="GA">Gabon</option>
              <option value="GM">Gambia</option>
              <option value="GE">Georgia</option>
              <option value="HT">Haiti</option>
              <option value="HK">Hong Kong</option>
              <option value="HU">Hungary</option>
              <option value="IS">Iceland</option>
              <option value="IN">India</option>
              <option value="ID">Indonesia</option>
              <option value="JP">Japan</option>
              <option value="JE">Jersey</option>
              <option value="JO">Jordan</option>
              <option value="KZ">Kazakhstan</option>
              <option value="KE">Kenya</option>
              <option value="KI">Kiribati</option>
              <option value="LV">Latvia</option>
              <option value="LB">Lebanon</option>
              <option value="LS">Lesotho</option>
              <option value="MG">Madagascar</option>
              <option value="MW">Malawi</option>
              <option value="MY">Malaysia</option>
              <option value="NA">Namibia</option>
              <option value="NR">Nauru</option>
              <option value="NP">Nepal</option>
              <option value="OM">Oman</option>
              <option value="PK">Pakistan</option>
              <option value="PW">Palau</option>
              <option value="PE">Peru</option>
              <option value="QA">Qatar</option>
              <option value="RE">Réunion</option>
              <option value="RO">Romania</option>
              <option value="RW">Rwanda</option>
              <option value="LC">Saint Lucia</option>
              <option value="WS">Samoa</option>
              <option value="SM">San Marino</option>
              <option value="TH">Thailand</option>
              <option value="TL">Timor-Leste</option>
              <option value="TG">Togo</option>
              <option value="UG">Uganda</option>
              <option value="UA">Ukraine</option>
              <option value="UY">Uruguay</option>
              <option value="VU">Vanuatu</option>
              <option value="VN">Viet Nam</option>
              <option value="EH">Western Sahara</option>
              <option value="YE">Yemen</option>
              <option value="ZM">Zambia</option>
              <option value="ZW">Zimbabwe</option>
            </select>
          </div>
          <div class="form-group col-md-6 select-border mb-3">
            <label class="mb-2">State</label>
            <select class="form-control basic-select">
              <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="form-group col-md-12 select-border mb-3">
            <label class="mb-2">City</label>
            <select class="form-control basic-select">
              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Orissa">Orissa</option>
              <option value="Pondicherry">Pondicherry</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttaranchal">Uttaranchal</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="West Bengal">West Bengal</option>
            </select>
          </div>
          <div class="form-group col-xl-10 col-md-9 col-sm-8 mb-3">
            <label class="mb-2">Full Address *</label>
            <input type="text" class="form-control" value="">
          </div>
          <div class="col-xl-2 col-md-3 col-sm-4 mb-3">
            <a class="btn btn-outline-primary d-grid" href="#">Find on Map</a>
          </div>
          <div class="form-group col-md-4 mb-md-0 mb-3">
            <label class="mb-2">Latitude</label>
            <input type="text" class="form-control" value="">
          </div>
          <div class="form-group col-md-4 mb-md-0 mb-3">
            <label class="mb-2">Longitude</label>
            <input type="text" class="form-control" value="">
          </div>
          <div class="form-group col-md-4">
            <label class="mb-2">Zoom</label>
            <input type="text" class="form-control" value="">
          </div>
          <div class="form-group col-12 mt-4 mt-lg-5 mb-0">
            <div class="company-address-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin"  height="400" allowfullscreen></iframe>
            </div>
          </div>
          <div class="form-group col-12 mt-3 mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="accepts-01">
              <label class="form-check-label ps-1" for="accepts-01">You accept our Terms and Conditions and Privacy Policy</label>
            </div>
          </div>
          <div class="col-md-12">
            <a class="btn btn-primary" href="#">Post Job</a>
          </div>
        </form>
      </div>
    </section>
  </div>
  <div class="tab-pane fade show" id="Package" role="tabpanel" aria-labelledby="Package-tab">
    <section class="space-ptb">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h5 class="mb-4">Buy New Package</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
            <table class="table table-striped mb-0">
              <thead class="bg-light">
                <tr>
                  <th scope="col">Select</th>
                  <th scope="col">Title</th>
                  <th scope="col">Price</th>
                  <th scope="col">Total Jobs</th>
                  <th scope="col">Job Expiry</th>
                  <th scope="col">Package Expiry</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="pachage-01">
                      <label class="custom-control-label" for="pachage-01"></label>
                    </div>
                  </td>
                  <th>Golden</th>
                  <td>$90.00</td>
                  <td>15</td>
                  <td>30 Days</td>
                  <td>30 Days</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="pachage-02">
                      <label class="custom-control-label" for="pachage-02"></label>
                    </div>
                  </td>
                  <th>Premium</th>
                  <td>$159.00</td>
                  <td>25</td>
                  <td>60 Days</td>
                  <td>60 Days</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="pachage-03">
                      <label class="custom-control-label" for="pachage-03"></label>
                    </div>
                  </td>
                  <th>Silver</th>
                  <td>$50.00</td>
                  <td>10</td>
                  <td>20 Days</td>
                  <td>20 Days</td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="pachage-04">
                      <label class="custom-control-label" for="pachage-04"></label>
                    </div>
                  </td>
                  <th>Standard</th>
                  <td>Free</td>
                  <td>1</td>
                  <td>15 Days</td>
                  <td>15 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
          <div class="col-md-12 mt-4">
            <a class="btn btn-primary" href="#">Update Package</a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="tab-pane fade show" id="Confirm" role="tabpanel" aria-labelledby="Confirm-tab">
    <section class="space-ptb">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 mb-4">
            <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200" viewBox="0 0 60 60" version="1.1"><!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch --><title>036 - Device Cover</title><desc>Created with Sketch.</desc><defs/><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill="#ff8a00" fill-rule="nonzero"><path d="M36.608,26.522 L44.42,32.083 C44.7671643,32.330178 45.2328357,32.330178 45.58,32.083 L53.392,26.523 C55.0192795,25.3702451 55.9904167,23.5031892 56,21.509 L56,9.677 C56.000591,9.27883898 55.7649212,8.91826415 55.4,8.759 L45.4,4.439 C45.1472508,4.33000068 44.8607492,4.33000068 44.608,4.439 L34.608,8.759 C34.2430788,8.91826415 34.007409,9.27883898 34.008,9.677 L34.008,21.509 C34.0158969,23.5014219 34.9839074,25.3678205 36.608,26.522 Z M36,10.334 L45,6.446 L54,10.334 L54,21.509 C53.9910962,22.8566812 53.3323369,24.117224 52.231,24.894 L45,30.042 L37.769,24.894 C36.6675346,24.1173365 36.0087381,22.8567225 36,21.509 L36,10.334 Z"/><path d="M42.4,23.8 C42.8320438,24.1242308 43.4434866,24.0467489 43.781,23.625 L51.781,13.625 C52.1217114,13.1934254 52.0500699,12.5677379 51.6206245,12.2243466 C51.1911792,11.8809554 50.5650579,11.9487006 50.219,12.376 L42.819,21.619 L39.6,19.2 C39.3141875,18.9856406 38.9357266,18.9400436 38.6071797,19.0803848 C38.2786328,19.2207259 38.0499141,19.5256842 38.0071797,19.8803848 C37.9644453,20.2350853 38.1141875,20.5856406 38.4,20.8 L42.4,23.8 Z"/><path d="M5,60 L55,60 C57.7600532,59.9966939 59.9966939,57.7600532 60,55 L60,51 C60,50.4477153 59.5522847,50 59,50 L57,50 L57,28.669 C58.9092563,26.7741494 59.98827,24.1989035 60,21.509 L60,7.047 C60.000591,6.64883898 59.7649212,6.28826415 59.4,6.129 L45.4,0.082 C45.1474495,-0.0279576698 44.8605505,-0.0279576698 44.608,0.082 L30.608,6.129 C30.2430788,6.28826415 30.007409,6.64883898 30.008,7.047 L30.008,12 L6,12 C4.34314575,12 3,13.3431458 3,15 L3,50 L1,50 C0.44771525,50 6.76353751e-17,50.4477153 0,51 L0,55 C0.00330611633,57.7600532 2.23994685,59.9966939 5,60 Z M40,50 L9,50 L9,18 L30,18 L30,21.509 C30.0104682,24.797038 31.6077945,27.8777289 34.289,29.781 L43.965,36.669 C44.5844619,37.1102315 45.4155381,37.1102315 46.035,36.669 L51,33.135 L51,50 L40,50 Z M37.383,54 L31,54 L31,52 L38.382,52 L37.382,54 L37.383,54 Z M22.618,54 L21.618,52 L29,52 L29,54 L22.618,54 Z M53,31.711 L55,30.287 L55,50 L53,50 L53,31.711 Z M32,7.705 L45,2.089 L58,7.705 L58,21.505 C57.9926625,23.8066487 57.0139816,25.9982404 55.305,27.54 L55.29,27.552 C55.0554562,27.7660987 54.8087098,27.9664341 54.551,28.152 L45,34.951 L35.449,28.151 C33.294533,26.6235813 32.010049,24.1499534 32,21.509 L32,7.705 Z M5,15 C5,14.4477153 5.44771525,14 6,14 L30,14 L30,16 L9,16 C7.8954305,16 7,16.8954305 7,18 L7,50 L5,50 L5,15 Z M4,52 L19.382,52 L20.829,54.894 C21.165329,55.5739318 21.8594388,56.0030461 22.618,56 L37.382,56 C38.1391514,56.0039364 38.8328012,55.5774329 39.171,54.9 L40.618,52 L58,52 L58,54 L51,54 C50.4477153,54 50,54.4477153 50,55 C50,55.5522847 50.4477153,56 51,56 L57.816,56 C57.3937454,57.1943509 56.2667854,57.9947486 55,58 L5,58 C3.73321457,57.9947486 2.60625455,57.1943509 2.184,56 L9,56 C9.55228475,56 10,55.5522847 10,55 C10,54.4477153 9.55228475,54 9,54 L2,54 L2,52 L4,52 Z"/><path d="M13,56 L15,56 C15.5522847,56 16,55.5522847 16,55 C16,54.4477153 15.5522847,54 15,54 L13,54 C12.4477153,54 12,54.4477153 12,55 C12,55.5522847 12.4477153,56 13,56 Z"/><path d="M45,56 L47,56 C47.5522847,56 48,55.5522847 48,55 C48,54.4477153 47.5522847,54 47,54 L45,54 C44.4477153,54 44,54.4477153 44,55 C44,55.5522847 44.4477153,56 45,56 Z" /><path d="M12.707,24.707 L15.707,21.707 C16.0859722,21.3146211 16.0805524,20.6909152 15.6948186,20.3051814 C15.3090848,19.9194476 14.6853789,19.9140278 14.293,20.293 L11.293,23.293 C11.0330434,23.5440745 10.9287874,23.9158779 11.0203028,24.2655073 C11.1118183,24.6151368 11.3848632,24.8881817 11.7344927,24.9796972 C12.0841221,25.0712126 12.4559255,24.9669566 12.707,24.707 Z" /><path d="M13.707,30.707 L21.707,22.707 C22.0859722,22.3146211 22.0805524,21.6909152 21.6948186,21.3051814 C21.3090848,20.9194476 20.6853789,20.9140278 20.293,21.293 L12.293,29.293 C12.0330434,29.5440745 11.9287874,29.9158779 12.0203028,30.2655073 C12.1118183,30.6151368 12.3848632,30.8881817 12.7344927,30.9796972 C13.0841221,31.0712126 13.4559255,30.9669566 13.707,30.707 Z"/><path d="M26.293,22.293 L13.293,35.293 C13.0330434,35.5440745 12.9287874,35.9158779 13.0203028,36.2655073 C13.1118183,36.6151368 13.3848632,36.8881817 13.7344927,36.9796972 C14.0841221,37.0712126 14.4559255,36.9669566 14.707,36.707 L27.707,23.707 C28.0859722,23.3146211 28.0805524,22.6909152 27.6948186,22.3051814 C27.3090848,21.9194476 26.6853789,21.9140278 26.293,22.293 Z"/></g></g></svg>
            </div>
          <div class="col-sm-12">
            <h1 class="mb-4">Thank You For Submitting</h1>
            <h6 class="mb-2 text-light">Thank you for submitting, your job has been published. if you need help please contact us via </h6>
            <h6 class="mb-0 text-light">Email support@jobber.com</h6>
          </div>
          <div class="col-12 text-center mt-4 mt-sm-5">
            <a class="btn btn-outline-primary mb-3 mb-sm-0" href="#">Manage Jobs</a>
            <a class="btn btn-outline-primary mb-3 mb-sm-0" href="#">View Job</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!--=================================
feature-info-->

<!--=================================
feature-info-->
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
                    <label class="form-label" for="password2">Password *</label>
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

 <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="js/select2/select2.full.js"></script>

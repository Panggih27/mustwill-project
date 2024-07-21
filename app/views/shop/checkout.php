<body>
  <!-- Slider -->
  <section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h4>Checkout</h4>

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Checkout</li>
        </ol>
      </div>
    </div>
  </section>

  <!-- Content -->
  <div id="content">

    <!-- Shop Content -->
    <section class="shop-content pad-t-b-130">
      <div class="container">
        <!-- Checkout -->
        <div class="checkout-form">
          <div class="row">

            <!-- Click here to login -->
            <div class="col-sm-6">
              <div class="noti-check"> Welcome Back <a href="#." data-toggle="collapse" data-target="#login"> Click here to login </a>
                <div id="login" class="collapse">
                  <form>
                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section. </p>
                    <ul class="row">
                      <li class="col-sm-12">
                        <label>
                          <input type="text" placeholder="First Name *">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label>
                          <input type="password" placeholder="Password *">
                        </label>
                      </li>
                      <li class="col-sm-6">
                        <button type="submit" class="btn">LOGIN</button>
                      </li>
                      <li class="col-sm-6 text-right"> <a href="#." class="lst-pass">Lost your password?</a> </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>

            <!-- Coupon -->
            <div class="col-sm-6">
              <div class="noti-check"> Have a coupon? <a href="#." data-toggle="collapse" data-target="#coupon"> Click here to enter your code customer? </a>
                <div id="coupon" class="collapse">
                  <form>
                    <p>If you have coupon from our company, please drop it down into the input coupon field to can use it </p>
                    <ul class="row">
                      <li class="col-sm-12">
                        <label>
                          <input type="text" placeholder="Coupon Code">
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <button type="submit" class="btn">apply coupon</button>
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Checkout Form -->
            <div class="col-sm-6">
              <div class="heading-block left-head text-left">
                <h6>Billing Details</h6>
              </div>
              <form>
                <ul class="row">
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="First Name *">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Last Name *">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Company ( optional )">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Email Address *">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Phone *">
                    </label>
                  </li>
                  <!--<li class="col-sm-12">
                    <label>
                      <select class="selectpicker" data-live-search="true">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                      </select>
                    </label>
                  </li>-->
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Street Address *">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Apartment, suite, unit etc. ( optional )">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Town / City *">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="State / County *">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Postcode / ZIP * *">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <input type="text" placeholder="Apartment, suite, unit etc. ( optional )">
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <div class="checkbox">
                      <input id="checkbox1" type="checkbox">
                      <label for="checkbox1"> Create an account ? </label>
                    </div>
                  </li>
                </ul>
              </form>
            </div>

            <!-- Checkout Form -->
            <div class="col-sm-6">
              <div class="heading-block left-head text-left">
                <h6>Additional Information</h6>
              </div>
              <textarea placeholder="Notes about your order  ( optional )"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="heading-block left-head text-left">
                <h6>Your Order</h6>
              </div>
              <table class="table table-condensed">
                <thead>
                  <tr class="active">
                    <th>Product</th>
                    <th>total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Classic Phone Cover X 1</td>
                    <td>$169</td>
                  </tr>
                  <tr>
                    <td>White Clock X 1</td>
                    <td>$130</td>
                  </tr>
                  <tr>
                    <td>Subtotal</td>
                    <td>$299</td>
                  </tr>
                </tbody>
                <thead class="totl">
                  <tr>
                    <th>Total</th>
                    <th>$299</th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="col-sm-6">
              <div class="heading-block left-head text-left">
                <h6>Payment Details</h6>
              </div>
              <div class="checkbox">
                <input id="checkbox2" type="checkbox" checked>
                <label for="checkbox2"> Check Payments </label>
              </div>
              <div class="store-info">
                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
              </div>
              <div class="checkbox">
                <input id="checkbox3" type="checkbox" checked>
                <label for="checkbox3"> View Paypal </label>
              </div>
              <div class="store-info">
                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
              </div>
              <a href="#." class="btn btn-inverse"> Place Order</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content -->
</body>
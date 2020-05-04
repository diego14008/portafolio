<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fresh Food</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="e-commerce site well design with responsive view." />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/fonts.css" rel="stylesheet">
  <link href="assets/css/stylesheet.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">
  <link href="assets/css/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="assets/css/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
</head>

<body class="checkout col-2 left-col">
  <div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="image/loader.gif" alt="#" />
  </div>
  <?php include_once 'include/header.php'; ?>
  <?php include_once 'include/nav.php'; ?>
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Carrito de compras</a></li>
      <li><a href="checkout">Checkout</a></li>
    </ul>
    <div class="row">
      <div id="column-left" class="col-sm-3 hidden-xs column-left">
        <div class="column-block">
          <div class="column-block">
            <div class="columnblock-title">Categorias</div>
            <div class="category_block">
              <ul class="box-category treeview-list treeview">
                <li><a href="#" class="activSub">Desktops</a>
                  <ul>
                    <li><a href="#">PC</a></li>
                    <li><a href="#">MAC</a></li>
                  </ul>
                </li>
                <li><a href="#" class="activSub">Laptops &amp; Notebooks</a>
                  <ul>
                    <li><a href="#">Macs</a></li>
                    <li><a href="#">Windows</a></li>
                  </ul>
                </li>
                <li><a href="#" class="activSub">Components</a>
                  <ul>
                    <li><a href="#">Mice and Trackballs</a></li>
                    <li><a href="#" class="activSub">Monitors</a>
                      <ul>
                        <li><a href="#">test 1</a></li>
                        <li><a href="#">test 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Windows</a></li>
                  </ul>
                </li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Phones & PDAs</a></li>
                <li><a href="#">Cameras</a></li>
                <li><a href="#">MP3 Players</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-9" id="content">
        <h1>Proceso de compra</h1>
        <div id="accordion" class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="false">Step 1: Detalles de la entrega <i class="fa fa-caret-down"></i></a></h4>
            </div>
            <div id="collapse-shipping-address" role="heading" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              <div class="panel-body">
                <form id="form_pedido" class="form-horizontal">
                  <div class="radio">
                    <label>
                      <input type="radio" checked="checked" value="existing" name="shipping_address">
                      I want to use an existing address</label>
                  </div>
                  <div id="shipping-existing">
                    <select class="form-control" name="address_id">
                      <option selected="selected" value="4"></option>
                    </select>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" value="new" name="shipping_address">
                      I want to use a new address</label>
                  </div>
                  <br>
                  <div id="shipping-new" style="display: none;">
                    <div class="form-group required">
                      <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="" name="firstname">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-shipping-lastname" placeholder="Last Name" value="" name="lastname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="input-shipping-company" class="col-sm-2 control-label">Company</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-shipping-company" placeholder="Company" value="" name="company">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label for="input-shipping-address-1" class="col-sm-2 control-label">Address 1</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Address 1" value="" name="address_1">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="input-shipping-address-2" class="col-sm-2 control-label">Address 2</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-shipping-address-2" placeholder="Address 2" value="" name="address_2">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label for="input-shipping-city" class="col-sm-2 control-label">City</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="" name="city">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code" value="123456" name="postcode">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="input-shipping-country" name="country_id">
                          <option value=""> --- Please Select --- </option>
                          <option value="244">Aaland Islands</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Albania</option>
                          <option value="3">Algeria</option>
                          <option value="4">American Samoa</option>
                          <option value="5">Andorra</option>
                          <option value="6">Angola</option>
                          <option value="7">Anguilla</option>
                          <option value="8">Antarctica</option>
                          <option value="9">Antigua and Barbuda</option>
                          <option value="10">Argentina</option>
                          <option value="11">Armenia</option>
                          <option value="12">Aruba</option>
                          <option value="252">Ascension Island (British)</option>
                          <option value="13">Australia</option>
                          <option value="14">Austria</option>
                          <option value="15">Azerbaijan</option>
                          <option value="16">Bahamas</option>
                          <option value="17">Bahrain</option>
                          <option value="18">Bangladesh</option>
                          <option value="19">Barbados</option>
                          <option value="20">Belarus</option>
                          <option value="21">Belgium</option>
                          <option value="22">Belize</option>
                          <option value="23">Benin</option>
                          <option value="24">Bermuda</option>
                          <option value="25">Bhutan</option>
                          <option value="26">Bolivia</option>
                          <option value="245">Bonaire, Sint Eustatius and Saba</option>
                          <option value="27">Bosnia and Herzegovina</option>
                          <option value="28">Botswana</option>
                          <option value="29">Bouvet Island</option>
                          <option value="30">Brazil</option>
                          <option value="31">British Indian Ocean Territory</option>
                          <option value="32">Brunei Darussalam</option>
                          <option value="33">Bulgaria</option>
                          <option value="34">Burkina Faso</option>
                          <option value="35">Burundi</option>
                          <option value="36">Cambodia</option>
                          <option value="37">Cameroon</option>
                          <option value="38">Canada</option>
                          <option value="251">Canary Islands</option>
                          <option value="39">Cape Verde</option>
                          <option value="40">Cayman Islands</option>
                          <option value="41">Central African Republic</option>
                          <option value="42">Chad</option>
                          <option value="43">Chile</option>
                          <option value="44">China</option>
                          <option value="45">Christmas Island</option>
                          <option value="46">Cocos (Keeling) Islands</option>
                          <option value="47">Colombia</option>
                          <option value="48">Comoros</option>
                          <option value="49">Congo</option>
                          <option value="50">Cook Islands</option>
                          <option value="51">Costa Rica</option>
                          <option value="52">Cote D'Ivoire</option>
                          <option value="53">Croatia</option>
                          <option value="54">Cuba</option>
                          <option value="246">Curacao</option>
                          <option value="55">Cyprus</option>
                          <option value="56">Czech Republic</option>
                          <option value="237">Democratic Republic of Congo</option>
                          <option value="57">Denmark</option>
                          <option value="58">Djibouti</option>
                          <option value="59">Dominica</option>
                          <option value="60">Dominican Republic</option>
                          <option value="61">East Timor</option>
                          <option value="62">Ecuador</option>
                          <option value="63">Egypt</option>
                          <option value="64">El Salvador</option>
                          <option value="65">Equatorial Guinea</option>
                          <option value="66">Eritrea</option>
                          <option value="67">Estonia</option>
                          <option value="68">Ethiopia</option>
                          <option value="69">Falkland Islands (Malvinas)</option>
                          <option value="70">Faroe Islands</option>
                          <option value="71">Fiji</option>
                          <option value="72">Finland</option>
                          <option value="74">France, Metropolitan</option>
                          <option value="75">French Guiana</option>
                          <option value="76">French Polynesia</option>
                          <option value="77">French Southern Territories</option>
                          <option value="126">FYROM</option>
                          <option value="78">Gabon</option>
                          <option value="79">Gambia</option>
                          <option value="80">Georgia</option>
                          <option value="81">Germany</option>
                          <option value="82">Ghana</option>
                          <option value="83">Gibraltar</option>
                          <option value="84">Greece</option>
                          <option value="85">Greenland</option>
                          <option value="86">Grenada</option>
                          <option value="87">Guadeloupe</option>
                          <option value="88">Guam</option>
                          <option value="89">Guatemala</option>
                          <option value="256">Guernsey</option>
                          <option value="90">Guinea</option>
                          <option value="91">Guinea-Bissau</option>
                          <option value="92">Guyana</option>
                          <option value="93">Haiti</option>
                          <option value="94">Heard and Mc Donald Islands</option>
                          <option value="95">Honduras</option>
                          <option value="96">Hong Kong</option>
                          <option value="97">Hungary</option>
                          <option value="98">Iceland</option>
                          <option value="99">India</option>
                          <option value="100">Indonesia</option>
                          <option value="101">Iran (Islamic Republic of)</option>
                          <option value="102">Iraq</option>
                          <option value="103">Ireland</option>
                          <option value="254">Isle of Man</option>
                          <option value="104">Israel</option>
                          <option value="105">Italy</option>
                          <option value="106">Jamaica</option>
                          <option value="107">Japan</option>
                          <option value="257">Jersey</option>
                          <option value="108">Jordan</option>
                          <option value="109">Kazakhstan</option>
                          <option value="110">Kenya</option>
                          <option value="111">Kiribati</option>
                          <option value="113">Korea, Republic of</option>
                          <option value="253">Kosovo, Republic of</option>
                          <option value="114">Kuwait</option>
                          <option value="115">Kyrgyzstan</option>
                          <option value="116">Lao People's Democratic Republic</option>
                          <option value="117">Latvia</option>
                          <option value="118">Lebanon</option>
                          <option value="119">Lesotho</option>
                          <option value="120">Liberia</option>
                          <option value="121">Libyan Arab Jamahiriya</option>
                          <option value="122">Liechtenstein</option>
                          <option value="123">Lithuania</option>
                          <option value="124">Luxembourg</option>
                          <option value="125">Macau</option>
                          <option value="127">Madagascar</option>
                          <option value="128">Malawi</option>
                          <option value="129">Malaysia</option>
                          <option value="130">Maldives</option>
                          <option value="131">Mali</option>
                          <option value="132">Malta</option>
                          <option value="133">Marshall Islands</option>
                          <option value="134">Martinique</option>
                          <option value="135">Mauritania</option>
                          <option value="136">Mauritius</option>
                          <option value="137">Mayotte</option>
                          <option value="138">Mexico</option>
                          <option value="139">Micronesia, Federated States of</option>
                          <option value="140">Moldova, Republic of</option>
                          <option value="141">Monaco</option>
                          <option value="142">Mongolia</option>
                          <option value="242">Montenegro</option>
                          <option value="143">Montserrat</option>
                          <option value="144">Morocco</option>
                          <option value="145">Mozambique</option>
                          <option value="146">Myanmar</option>
                          <option value="147">Namibia</option>
                          <option value="148">Nauru</option>
                          <option value="149">Nepal</option>
                          <option value="150">Netherlands</option>
                          <option value="151">Netherlands Antilles</option>
                          <option value="152">New Caledonia</option>
                          <option value="153">New Zealand</option>
                          <option value="154">Nicaragua</option>
                          <option value="155">Niger</option>
                          <option value="156">Nigeria</option>
                          <option value="157">Niue</option>
                          <option value="158">Norfolk Island</option>
                          <option value="112">North Korea</option>
                          <option value="159">Northern Mariana Islands</option>
                          <option value="160">Norway</option>
                          <option value="161">Oman</option>
                          <option value="162">Pakistan</option>
                          <option value="163">Palau</option>
                          <option value="247">Palestinian Territory, Occupied</option>
                          <option value="164">Panama</option>
                          <option value="165">Papua New Guinea</option>
                          <option value="166">Paraguay</option>
                          <option value="167">Peru</option>
                          <option value="168">Philippines</option>
                          <option value="169">Pitcairn</option>
                          <option value="170">Poland</option>
                          <option value="171">Portugal</option>
                          <option value="172">Puerto Rico</option>
                          <option value="173">Qatar</option>
                          <option value="174">Reunion</option>
                          <option value="175">Romania</option>
                          <option value="176">Russian Federation</option>
                          <option value="177">Rwanda</option>
                          <option value="178">Saint Kitts and Nevis</option>
                          <option value="179">Saint Lucia</option>
                          <option value="180">Saint Vincent and the Grenadines</option>
                          <option value="181">Samoa</option>
                          <option value="182">San Marino</option>
                          <option value="183">Sao Tome and Principe</option>
                          <option value="184">Saudi Arabia</option>
                          <option value="185">Senegal</option>
                          <option value="243">Serbia</option>
                          <option value="186">Seychelles</option>
                          <option value="187">Sierra Leone</option>
                          <option value="188">Singapore</option>
                          <option value="189">Slovak Republic</option>
                          <option value="190">Slovenia</option>
                          <option value="191">Solomon Islands</option>
                          <option value="192">Somalia</option>
                          <option value="193">South Africa</option>
                          <option value="194">South Georgia &amp; South Sandwich Islands</option>
                          <option value="248">South Sudan</option>
                          <option value="195">Spain</option>
                          <option value="196">Sri Lanka</option>
                          <option value="249">St. Barthelemy</option>
                          <option value="197">St. Helena</option>
                          <option value="250">St. Martin (French part)</option>
                          <option value="198">St. Pierre and Miquelon</option>
                          <option value="199">Sudan</option>
                          <option value="200">Suriname</option>
                          <option value="201">Svalbard and Jan Mayen Islands</option>
                          <option value="202">Swaziland</option>
                          <option value="203">Sweden</option>
                          <option value="204">Switzerland</option>
                          <option selected="selected" value="205">Syrian Arab Republic</option>
                          <option value="206">Taiwan</option>
                          <option value="207">Tajikistan</option>
                          <option value="208">Tanzania, United Republic of</option>
                          <option value="209">Thailand</option>
                          <option value="210">Togo</option>
                          <option value="211">Tokelau</option>
                          <option value="212">Tonga</option>
                          <option value="213">Trinidad and Tobago</option>
                          <option value="255">Tristan da Cunha</option>
                          <option value="214">Tunisia</option>
                          <option value="215">Turkey</option>
                          <option value="216">Turkmenistan</option>
                          <option value="217">Turks and Caicos Islands</option>
                          <option value="218">Tuvalu</option>
                          <option value="219">Uganda</option>
                          <option value="220">Ukraine</option>
                          <option value="221">United Arab Emirates</option>
                          <option value="222">United Kingdom</option>
                          <option value="223">United States</option>
                          <option value="224">United States Minor Outlying Islands</option>
                          <option value="225">Uruguay</option>
                          <option value="226">Uzbekistan</option>
                          <option value="227">Vanuatu</option>
                          <option value="228">Vatican City State (Holy See)</option>
                          <option value="229">Venezuela</option>
                          <option value="230">Viet Nam</option>
                          <option value="231">Virgin Islands (British)</option>
                          <option value="232">Virgin Islands (U.S.)</option>
                          <option value="233">Wallis and Futuna Islands</option>
                          <option value="234">Western Sahara</option>
                          <option value="235">Yemen</option>
                          <option value="238">Zambia</option>
                          <option value="239">Zimbabwe</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group required">
                      <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="input-shipping-zone" name="zone_id">
                          <option value=""> --- Please Select --- </option>
                          <option selected="selected" value="3121">Al Hasakah</option>
                          <option value="3122">Al Ladhiqiyah</option>
                          <option value="3123">Al Qunaytirah</option>
                          <option value="3124">Ar Raqqah</option>
                          <option value="3125">As Suwayda</option>
                          <option value="3126">Dara</option>
                          <option value="3127">Dayr az Zawr</option>
                          <option value="3128">Dimashq</option>
                          <option value="3129">Halab</option>
                          <option value="3130">Hamah</option>
                          <option value="3131">Hims</option>
                          <option value="3132">Idlib</option>
                          <option value="3133">Rif Dimashq</option>
                          <option value="3134">Tartus</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="buttons clearfix">
                    <div class="pull-right">
                      <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-shipping-address" value="Continue">
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method" aria-expanded="false">Step 2: Payment Method <i class="fa fa-caret-down"></i></a></h4>
            </div>
            <div id="collapse-payment-method" role="heading" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              <div class="panel-body">
                <p>Please select the preferred payment method to use on this order.</p>
                <div class="radio">
                  <label>
                    <input type="radio" checked="checked" value="cod" name="payment_method">
                    Cash On Delivery </label>
                </div>
                <p><strong>Add Comments About Your Order</strong></p>
                <p>
                  <textarea class="form-control" rows="8" name="comment"></textarea>
                </p>
                <div class="buttons">
                  <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Terms &amp;
                        Conditions</b></a>
                    <input type="checkbox" value="1" name="agree">
                    &nbsp;
                    <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-payment-method" value="Continue">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Step 3: Productos <i class="fa fa-caret-down"></i></a></h4>
            </div>
            <div id="collapse-checkout-confirm" role="heading" class="panel-collapse collapse in" aria-expanded="true" style="">
              <div class="panel-body">
                <!-- <form enctype="multipart/form-data" method="post" action="#"> -->
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <td class="text-center">Foto</td>
                        <td class="text-left">Nombre</td>
                        <td class="text-left">Model</td>
                        <td class="text-left">Cantidad</td>
                        <td class="text-right">Precio unitario</td>
                        <td class="text-right">Total</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php for ($i = 1; $i < 3; $i++) : ?>
                        <tr>
                          <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="women's clothing" alt="women's clothing" src="image/2product50x59.jpg"></a></td>
                          <td class="text-left"><a href="product.html">women 's clothing</a></td>
                          <td class="text-left">product 11</td>
                          <td class="text-left">
                            <div style="max-width: 200px;" class="input-group btn-block">
                              <input type="text" class="form-control quantity" size="1" value="1" name="quantity">
                              <span class="input-group-btn">
                                <button class="btn btn-primary" title="" data-toggle="tooltip" type="submit" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                              </span></div>
                          </td>
                          <td class="text-right">$254.00</td>
                          <td class="text-right">$254.00</td>
                        </tr>
                      <?php endfor; ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="text-right" colspan="5"><strong>Sub-Total:</strong></td>
                        <td class="text-right">$1,000.00</td>
                      </tr>
                      <tr>
                        <td class="text-right" colspan="5"><strong>Flat Shipping Rate:</strong></td>
                        <td class="text-right">$5.00</td>
                      </tr>
                      <tr>
                        <td class="text-right" colspan="5"><strong>Total:</strong></td>
                        <td class="text-right">$1,005.00</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- </form> -->
              </div>
            </div>
          </div>
          <div class="buttons">
            <div class="pull-right">
              <input type="button" data-loading-text="Loading..." class="btn btn-primary" id="button-confirm" value="Confirman pedido">
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include_once 'include/footer.php'; ?>

  <script src="assets/js/jquery-2.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jstree.min.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/common.js"></script>
  <script src="assets/js/global.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/parally.js"></script>
  <script type="text/javascript">
    $('input[name=\'payment_address\']').on('change', function() {
      if (this.value == 'new') {
        $('#payment-existing').hide();
        $('#payment-new').show();
      } else {
        $('#payment-existing').show();
        $('#payment-new').hide();
      }
    });
  </script>
  <script type="text/javascript">
    $('input[name=\'shipping_address\']').on('change', function() {
      if (this.value == 'new') {
        $('#shipping-existing').hide();
        $('#shipping-new').show();
      } else {
        $('#shipping-existing').show();
        $('#shipping-new').hide();
      }
    });
  </script>
</body>

</html>
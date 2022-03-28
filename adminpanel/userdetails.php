<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>User Details!</title>
      <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <style>
  .mobileview{
              display:none;
          }
          .bar1, .chart1 { 
            width: 50%; 
            display: inline-block; 
             
        } 
          .donut1, 
            .donut2 { 
                width: 50%; 
               display:inline-block;
            } 
          


@media screen and (max-width: 600px) { 
    .mobileview{
                  display:inline;
              }
    
              .desktopview{
                  display:none;
              }
    
            .bar1, 
            .chart1 { 
                width: 70%; 
               
            } 
    
      .btn, .search,.home,.noti,.admin { 
                width: 19%;
                display:inline-block;
               
            } 
  .form-select, h6,p,label{
        font-size: 12px;
    }
    .btn-save{
        width:80%;
        height: 110%;
        display: block;
        font-size: 13 px;
    }
    .btn-code{
        width:100%;
        font-size: 11 px;
        height:110%;
    }
    .col-2,.col-4, .col-10{
        width:80%;
        display:block;
    }
    .card-text{
        font-size: 15px;
    }
    
    .banner{
         font-size: 20px;
     }      
      .col-xs-12{
          margin-bottom: 20px;
      }
       
      .username{
           font-size: 15px;
      }
    .email{
        font-size: 10px;
    }
    .col-5{
        width:100%;
    }
    .username{
        width:100%;
    }
        }
     
      </style>
      <style>

/* Toggle Styles */


#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled {
  padding-left: 250px;
}

#sidebar-wrapper {
  z-index: 1000; 
  position: fixed;
  left: 250px;
  width: 0;
  height: 93%;
  margin-left: -250px;
  overflow-y: auto;
  background: #000;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
}

.fixed-brand {
  width: auto;
}
/* Sidebar Styles */

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
  margin-top: 2px;
}

.sidebar-nav li {
  text-indent: 15px;
  line-height: 40px;
}

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #FAFAFA;
}

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
  border-left: red 2px solid;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
  color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}

.no-margin {
  margin: 0;
}

@media(min-width:768px) {
  #wrapper {
    padding-left: 250px;
  }
  .fixed-brand {
    width: 250px;
  }
  #wrapper.toggled {
    padding-left: 0;
  }
  #sidebar-wrapper {
    width: 250px;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }
  #wrapper.toggled-2 #sidebar-wrapper {
    width: 150px;
  }
  #wrapper.toggled-2 #sidebar-wrapper:hover {
    width: 250px;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
    padding-left: 250px;
  }
  #wrapper.toggled-2 #page-content-wrapper {
    position: relative;
    margin-right: 0;
    margin-left: -200px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }
}
      </style>
  </head>
    

  <body>
      
             <!-- header nav bar -->
      <?php include("adminheader.php"); ?>
      <br>
    <br>
       <!-- end header navbar -->
      <!-- sidenav -->
      <div id="wrapper" >
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="" style="background-color: #660033; text-align: left;">
  <?php include("adminsidebar.php"); ?>           
</div>
    
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper ">
        <div class="container-fluid mb-5 mx-auto">
        <div class="row ">      

<div class="mt-5 mb-3"><strong><i class="fas fa-user"></i>&nbsp;&nbsp;Users > Yash Mathur</strong></div> 
<br>    
            </div>
<div class="container border rounded-2" style="border:solid">
<div class="row my-3 ">
<div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 col-xxl-2">
    <img src="images/blank-profile.jpg" height="100%" width="100%"> 
</div>
   &nbsp;&nbsp;&nbsp; 
    <div class="card" style="width: 25rem;">
 
<table class="table mt-3">
  
  <tbody>
    <tr>
      <th scope="row">User Id</th>
      <td><div class="rounded-pill text-center" style="background-color:#660033; color:white; width:50px;">1</div></td>
    </tr>
    <tr>
      <th scope="row">Joined</th>
      <td><div class="rounded-pill text-center" style="background-color:#660033; color:white; ">21 November 2019</div></td>
      </tr>
    <tr>
      <th scope="row">Last Logged In</th>
      <td colspan="2"><div class="rounded-pill text-center" style="background-color:#660033; color:white; ">21 March 2021</div></td>
      </tr>
  </tbody>
</table>
</div>
    &nbsp;&nbsp;&nbsp;
    
    <div class="card" style="width: 25rem;">

  <table class="table mt-3">
  
  <tbody>
    <tr>
      <th scope="row">Friends</th>
      <td><div class="rounded-pill text-center" style="background-color:#660033; color:white; width:50px;">1</div></td>
    </tr>
    <tr>
      <th scope="row">Following</th>
      <td><div class="rounded-pill text-center" style="background-color:#660033; color:white; width:50px;">2</div></td>
      </tr>
    <tr>
      <th scope="row">Followers</th>
      <td colspan="2"><div class="rounded-pill text-center" style="background-color:#660033; color:white; width:50px; ">2</div></td>
      </tr>
  </tbody>
</table>
</div>
    </div>    
    
    <br>
    
    <!-- profile details -->

    
                  

  <div class="row">
<br>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
      <div class="card mb-3">
        <div class="card-header bg-white">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#Account" role="tab" aria-controls="description" aria-selected="true"><i class="fas fa-cog"></i>&nbsp; &nbsp;Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#Profile" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-user"></i>&nbsp; &nbsp;Profile</a>
            </li>
              <li class="nav-item">
              <a class="nav-link"  href="#Privacy" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-lock"></i>&nbsp; &nbsp;Privacy</a>
            </li>
               <li class="nav-item">
              <a class="nav-link"  href="#Security" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-shield-alt"></i>&nbsp; &nbsp;Security</a>
            </li>
            
          </ul>
        </div>
        <div class="card-body">
          
          
          
           <div class="tab-content my-3 ">
<div class="tab-pane active" id="Account" role="tabpanel">
                
                 
 <div class="row">
<div class="col-10">
<h6 class="card-text">Verified User </h6>
<p></p>
</div>
<div class="col-2">
<label class="switch">
<input type="checkbox" checked>
<span class="slider round"></span>
</label>
</div>
</div>                         

    
<br>

    
 <div class="row">
<div class="col-10">
<h6 class="card-text">Banned </h6>
<p></p>
</div>
<div class="col-2">
<label class="switch">
<input type="checkbox">
<span class="slider round"></span>
</label>
</div>
</div>
    
    
    <br>
    

<div class="row">
<div class="col-10">
<h6 class="card-text">Account Activated </h6>
   <p>Account activation disabled from your system Registration Settings
</p>
</div>
<div class="col-2">
<label class="switch">
<input type="checkbox" checked>
<span class="slider round"></span>
</label>
 
</div>
</div>
    
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>PayPal Secret Key</h6>
</div>
<div class="col-10">
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">Administrators</option>
  <option value="2">Moderators</option>
  <option value="3">Users</option>
</select>

</div>
</div>
    
    
    <br>
    
    
    <div class="row">
<div class="col-2">
<h6>User name</h6>
</div>
<div class="col-10">
<div class="input-group flex-nowrap">
  <span class="input-group-text email" id="addon-wrapping">https://newcommunity.teachyou.in/</span>
  <input type="text" class="form-control username" placeholder="yash" aria-label="Username" aria-describedby="addon-wrapping">
</div>

</div>
</div>
    
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>Email Address</h6>
</div>
<div class="col-10">
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="fas fa-envelope"></i></span>
  <input type="text" class="form-control username" placeholder="csdavid4@gmail.com" aria-label="Username" aria-describedby="addon-wrapping">
</div>

</div>
</div>
   
    
    <br>
    
    
    <div class="row">
<div class="col-10">
<h6 class="card-text">Email Verified </h6>

</div>
<div class="col-2">
<label class="switch">
<input type="checkbox" checked>
<span class="slider round"></span>
</label>
 
</div>
</div>
    
    <br>
    
    
    <div class="row">
<div class="col-2">
<h6>Password</h6>
</div>
<div class="col-10">
<div class="input-group flex-nowrap">
   
      <input type="password" class="form-control" id="inputPassword">
   
</div>

</div>
</div>
    
    
  <br>
    
    
    
<div class="row">
<div class="col-8">
</div>
<div class="col-4">
<button type="button" class="btn btn-save">Save Changes</button> 
</div>              
</div>
    
    
              
</div>
      
               
               
               
<div class="tab-pane" id="Profile" role="tabpanel" aria-labelledby="history-tab">  
<div class="container">
    <div class=" mt-2"> </div>
   <b>BASIC INFORMATION</b> 
     
    <br>
    <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>First name</p>
  <input type="text" class="form-control" placeholder="Yash" aria-label="Username" aria-describedby="basic-addon1">

        </div>
    <div class="col-5 mx-2 px-2">
    <p>Last Name</p>
  <input type="text" class="form-control" placeholder="Mathur" aria-label="Username" aria-describedby="basic-addon1">

    </div>
    </div>

    <br>
    
    
    <div class="row">
    <div class="col-5 mx-2 px-2">
        <p>I am</p>
<select class="form-select" aria-label="Default select example">
  <option value="1">Male</option>
  <option value="2">Female</option>
  <option value="3">Other</option>
</select>
        </div>
    <div class="col-5 mx-2 px-2">
    <p>Relationship status</p>
<select class="form-select" aria-label="Default select example">
    <option selected>select Relationship</option>
  <option value="1">Single</option>
  <option value="2">In s Relationship</option>
  <option value="3">Married</option>
    <option value="4">It's Complicated</option>
  <option value="5">Separated</option>
  <option value="6">Divorced </option>
<option value="7">Widowed</option>

</select>
    </div>
    </div>
    
    <br>
    
    <div class="row">
    
    <div class="col-5 mx-2 px-2">
        <p>Country</p>
<select class="form-select" aria-label="Default select example">
    <option value="none">Select Country</option> <option value="1">Afghanistan</option> <option value="2">Albania</option> <option value="3">Algeria</option> <option value="4">American Samoa</option> <option value="5">Andorra</option> <option value="6">Angola</option> <option value="7">Anguilla</option> <option value="8">Antarctica</option> <option value="9">Antigua and Barbuda</option> <option value="10">Argentina</option> <option value="11">Armenia</option> <option value="12">Aruba</option> <option value="13">Australia</option> <option value="14">Austria</option> <option value="15">Azerbaijan</option> <option value="16">Bahamas</option> <option value="17">Bahrain</option> <option value="18">Bangladesh</option> <option value="19">Barbados</option> <option value="20">Belarus</option> <option value="21">Belgium</option> <option value="22">Belize</option> <option value="23">Benin</option> <option value="24">Bermuda</option> <option value="25">Bhutan</option> <option value="26">Bolivia</option> <option value="27">Bosnia and Herzegovina</option> <option value="28">Botswana</option> <option value="29">Bouvet Island</option> <option value="30">Brazil</option> <option value="31">British Indian Ocean Territory</option> <option value="32">Brunei Darussalam</option> <option value="33">Bulgaria</option> <option value="34">Burkina Faso</option> <option value="35">Burundi</option> <option value="36">Cambodia</option> <option value="37">Cameroon</option> <option value="38">Canada</option> <option value="39">Cape Verde</option> <option value="40">Cayman Islands</option> <option value="41">Central African Republic</option> <option value="42">Chad</option> <option value="43">Chile</option> <option value="44">China</option> <option value="45">Christmas Island</option> <option value="46">Cocos (Keeling) Islands</option> <option value="47">Colombia</option> <option value="48">Comoros</option> <option value="49">Congo</option> <option value="50">Cook Islands</option> <option value="51">Costa Rica</option> <option value="52">Croatia (Hrvatska)</option> <option value="53">Cuba</option> <option value="54">Cyprus</option> <option value="55">Czech Republic</option> <option value="56">Denmark</option> <option value="57">Djibouti</option> <option value="58">Dominica</option> <option value="59">Dominican Republic</option> <option value="60">East Timor</option> <option value="61">Ecuador</option> <option value="62">Egypt</option> <option value="63">El Salvador</option> <option value="64">Equatorial Guinea</option> <option value="65">Eritrea</option> <option value="66">Estonia</option> <option value="67">Ethiopia</option> <option value="68">Falkland Islands (Malvinas)</option> <option value="69">Faroe Islands</option> <option value="70">Fiji</option> <option value="71">Finland</option> <option value="72">France</option> <option value="73">France, Metropolitan</option> <option value="74">French Guiana</option> <option value="75">French Polynesia</option> <option value="76">French Southern Territories</option> <option value="77">Gabon</option> <option value="78">Gambia</option> <option value="79">Georgia</option> <option value="80">Germany</option> <option value="81">Ghana</option> <option value="82">Gibraltar</option> <option value="83">Guernsey</option> <option value="84">Greece</option> <option value="85">Greenland</option> <option value="86">Grenada</option> <option value="87">Guadeloupe</option> <option value="88">Guam</option> <option value="89">Guatemala</option> <option value="90">Guinea</option> <option value="91">Guinea-Bissau</option> <option value="92">Guyana</option> <option value="93">Haiti</option> <option value="94">Heard and Mc Donald Islands</option> <option value="95">Honduras</option> <option value="96">Hong Kong</option> <option value="97">Hungary</option> <option value="98">Iceland</option> <option selected="" value="99">India</option> <option value="100">Isle of Man</option> <option value="101">Indonesia</option> <option value="102">Iran (Islamic Republic of)</option> <option value="103">Iraq</option> <option value="104">Ireland</option> <option value="105">Israel</option> <option value="106">Italy</option> <option value="107">Ivory Coast</option> <option value="108">Jersey</option> <option value="109">Jamaica</option> <option value="110">Japan</option> <option value="111">Jordan</option> <option value="112">Kazakhstan</option> <option value="113">Kenya</option> <option value="114">Kiribati</option> <option value="115">Korea, Democratic People's Republic of</option> <option value="116">Korea, Republic of</option> <option value="117">Kosovo</option> <option value="118">Kuwait</option> <option value="119">Kyrgyzstan</option> <option value="120">Lao People's Democratic Republic</option> <option value="121">Latvia</option> <option value="122">Lebanon</option> <option value="123">Lesotho</option> <option value="124">Liberia</option> <option value="125">Libyan Arab Jamahiriya</option> <option value="126">Liechtenstein</option> <option value="127">Lithuania</option> <option value="128">Luxembourg</option> <option value="129">Macau</option> <option value="130">Macedonia</option> <option value="131">Madagascar</option> <option value="132">Malawi</option> <option value="133">Malaysia</option> <option value="134">Maldives</option> <option value="135">Mali</option> <option value="136">Malta</option> <option value="137">Marshall Islands</option> <option value="138">Martinique</option> <option value="139">Mauritania</option> <option value="140">Mauritius</option> <option value="141">Mayotte</option> <option value="142">Mexico</option> <option value="143">Micronesia, Federated States of</option> <option value="144">Moldova, Republic of</option> <option value="145">Monaco</option> <option value="146">Mongolia</option> <option value="147">Montenegro</option> <option value="148">Montserrat</option> <option value="149">Morocco</option> <option value="150">Mozambique</option> <option value="151">Myanmar</option> <option value="152">Namibia</option> <option value="153">Nauru</option> <option value="154">Nepal</option> <option value="155">Netherlands</option> <option value="156">Netherlands Antilles</option> <option value="157">New Caledonia</option> <option value="158">New Zealand</option> <option value="159">Nicaragua</option> <option value="160">Niger</option> <option value="161">Nigeria</option> <option value="162">Niue</option> <option value="163">Norfolk Island</option> <option value="164">Northern Mariana Islands</option> <option value="165">Norway</option> <option value="166">Oman</option> <option value="167">Pakistan</option> <option value="168">Palau</option> <option value="169">Palestine</option> <option value="170">Panama</option> <option value="171">Papua New Guinea</option> <option value="172">Paraguay</option> <option value="173">Peru</option> <option value="174">Philippines</option> <option value="175">Pitcairn</option> <option value="176">Poland</option> <option value="177">Portugal</option> <option value="178">Puerto Rico</option> <option value="179">Qatar</option> <option value="180">Reunion</option> <option value="181">Romania</option> <option value="182">Russian Federation</option> <option value="183">Rwanda</option> <option value="184">Saint Kitts and Nevis</option> <option value="185">Saint Lucia</option> <option value="186">Saint Vincent and the Grenadines</option> <option value="187">Samoa</option> <option value="188">San Marino</option> <option value="189">Sao Tome and Principe</option> <option value="190">Saudi Arabia</option> <option value="191">Senegal</option> <option value="192">Serbia</option> <option value="193">Seychelles</option> <option value="194">Sierra Leone</option> <option value="195">Singapore</option> <option value="196">Slovakia</option> <option value="197">Slovenia</option> <option value="198">Solomon Islands</option> <option value="199">Somalia</option> <option value="200">South Africa</option> <option value="201">South Georgia South Sandwich Islands</option> <option value="202">Spain</option> <option value="203">Sri Lanka</option> <option value="204">St. Helena</option> <option value="205">St. Pierre and Miquelon</option> <option value="206">Sudan</option> <option value="207">Suriname</option> <option value="208">Svalbard and Jan Mayen Islands</option> <option value="209">Swaziland</option> <option value="210">Sweden</option> <option value="211">Switzerland</option> <option value="212">Syrian Arab Republic</option> <option value="213">Taiwan</option> <option value="214">Tajikistan</option> <option value="215">Tanzania, United Republic of</option> <option value="216">Thailand</option> <option value="217">Togo</option> <option value="218">Tokelau</option> <option value="219">Tonga</option> <option value="220">Trinidad and Tobago</option> <option value="221">Tunisia</option> <option value="222">Turkey</option> <option value="223">Turkmenistan</option> <option value="224">Turks and Caicos Islands</option> <option value="225">Tuvalu</option> <option value="226">Uganda</option> <option value="227">Ukraine</option> <option value="228">United Arab Emirates</option> <option value="229">United Kingdom</option> <option value="230">United States</option> <option value="231">United States minor outlying islands</option> <option value="232">Uruguay</option> <option value="233">Uzbekistan</option> <option value="234">Vanuatu</option> <option value="235">Vatican City State</option> <option value="236">Venezuela</option> <option value="237">Vietnam</option> <option value="238">Virgin Islands (British)</option> <option value="239">Virgin Islands (U.S.)</option> <option value="240">Wallis and Futuna Islands</option> <option value="241">Western Sahara</option> <option value="242">Yemen</option> <option value="243">Zaire</option> <option value="244">Zambia</option> <option value="245">Zimbabwe</option> 

</select>
    </div>
        
        <div class="col-5 mx-2 px-2">
        <p>Website</p>
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">

        </div>
    </div>
    
    <br>
    
    <div class="row">
         <p>Birth Date</p>
    <div class="col-3">
       
<select class="form-select" aria-label="Default select example">
   
  <option value="none">Select Month</option> <option value="1">Jan</option> <option value="2">Feb</option> <option value="3">Mar</option> <option value="4">Apr</option> <option value="5">May</option> <option value="6">Jun</option> <option value="7">Jul</option> <option value="8">Aug</option> <option selected="" value="9">Sep</option> <option value="10">Oct</option> <option value="11">Nov</option> <option value="12">Dec</option> 

</select>
        </div>
    <div class="col-3">
 
<select class="form-select" aria-label="Default select example">
    <option selected>select Date</option>
  <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option selected="" value="9">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option> <option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option> <option value="31">31</option>
</select>
        </div>
    <div class="col-3">
        
        <select class="form-select" aria-label="Default select example">
    <option selected>select Year</option>
 <option value="1905">1905</option> <option value="1906">1906</option> <option value="1907">1907</option> <option value="1908">1908</option> <option value="1909">1909</option> <option value="1910">1910</option> <option value="1911">1911</option> <option value="1912">1912</option> <option value="1913">1913</option> <option value="1914">1914</option> <option value="1915">1915</option> <option value="1916">1916</option> <option value="1917">1917</option> <option value="1918">1918</option> <option value="1919">1919</option> <option value="1920">1920</option> <option value="1921">1921</option> <option value="1922">1922</option> <option value="1923">1923</option> <option value="1924">1924</option> <option value="1925">1925</option> <option value="1926">1926</option> <option value="1927">1927</option> <option value="1928">1928</option> <option value="1929">1929</option> <option value="1930">1930</option> <option value="1931">1931</option> <option value="1932">1932</option> <option value="1933">1933</option> <option value="1934">1934</option> <option value="1935">1935</option> <option value="1936">1936</option> <option value="1937">1937</option> <option value="1938">1938</option> <option value="1939">1939</option> <option value="1940">1940</option> <option value="1941">1941</option> <option value="1942">1942</option> <option value="1943">1943</option> <option value="1944">1944</option> <option value="1945">1945</option> <option value="1946">1946</option> <option value="1947">1947</option> <option value="1948">1948</option> <option value="1949">1949</option> <option value="1950">1950</option> <option value="1951">1951</option> <option value="1952">1952</option> <option value="1953">1953</option> <option value="1954">1954</option> <option value="1955">1955</option> <option value="1956">1956</option> <option value="1957">1957</option> <option value="1958">1958</option> <option value="1959">1959</option> <option value="1960">1960</option> <option value="1961">1961</option> <option value="1962">1962</option> <option value="1963">1963</option> <option value="1964">1964</option> <option value="1965">1965</option> <option value="1966">1966</option> <option value="1967">1967</option> <option value="1968">1968</option> <option value="1969">1969</option> <option value="1970">1970</option> <option value="1971">1971</option> <option value="1972">1972</option> <option value="1973">1973</option> <option value="1974">1974</option> <option value="1975">1975</option> <option value="1976">1976</option> <option value="1977">1977</option> <option value="1978">1978</option> <option value="1979">1979</option> <option value="1980">1980</option> <option value="1981">1981</option> <option value="1982">1982</option> <option value="1983">1983</option> <option value="1984">1984</option> <option value="1985">1985</option> <option value="1986">1986</option> <option value="1987">1987</option> <option value="1988">1988</option> <option value="1989">1989</option> <option value="1990">1990</option> <option value="1991">1991</option> <option value="1992">1992</option> <option value="1993">1993</option> <option value="1994">1994</option> <option value="1995">1995</option> <option value="1996">1996</option> <option value="1997">1997</option> <option value="1998">1998</option> <option value="1999">1999</option> <option value="2000">2000</option> <option value="2001">2001</option> <option value="2002">2002</option> <option value="2003">2003</option> <option value="2004">2004</option> <option value="2005">2005</option> <option value="2006">2006</option> <option value="2007">2007</option> <option value="2008">2008</option> <option value="2009">2009</option> <option value="2010">2010</option> <option value="2011">2011</option> <option value="2012">2012</option> <option value="2013">2013</option> <option value="2014">2014</option> <option value="2015">2015</option>
</select>
        </div>
    </div><!-- birthday ends -->
    
    
    <br>
    
    <hr class="w-100"/>
    <br>
    <b>WORK</b>
    <div class="row">
    <div class="col-8">
        <p>Work Title</p>
         <input type="text" class="form-control" placeholder="Nothing New" aria-label="Username" aria-describedby="basic-addon1">
 
        </div>
    </div>
     <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Work Place</p>
  <input type="text" class="form-control" placeholder="Info corp" aria-label="Username" aria-describedby="basic-addon1">

        </div>
    <div class="col-5 mx-2 px-2">
    <p>Work Website</p>
  <input type="text" class="form-control" placeholder="Mathur" aria-label="Username" aria-describedby="basic-addon1">

    </div>
</div>
    
    
<br>
    
    <hr class="w-100"/>
    <br>
<b>LOCATION</b>
 <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Current City</p>
  <input type="text" class="form-control" placeholder="Noida" aria-label="Username" aria-describedby="basic-addon1">

        </div>
    <div class="col-5 mx-2 px-2">
    <p>Home Town</p>
  <input type="text" class="form-control" placeholder="ghaziabad" aria-label="Username" aria-describedby="basic-addon1">

    </div>   
</div> 
    
    
   <br>
    <hr class="w-100"/>
    <br> 
    
  

<b>EDUCATION</b>
    <div class="row">
    <div class="col-8">
        <p>School</p>
         <input type="text" class="form-control" placeholder="Nothing New" aria-label="Username" aria-describedby="basic-addon1">
 
        </div>
    </div>
    <br>
 <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Major</p>
  <input type="text" class="form-control" placeholder="MCA" aria-label="Username" aria-describedby="basic-addon1">

        </div>
    <div class="col-5 mx-2 px-2">
    <p>Class</p>
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">

    </div>   
</div>
    
    <br>
    <hr class="w-100"/>
    <br> 
    
<b>BASIC INFORMATION</b> 
     
    <br>
    <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Twitter Profile URL</p>
<div class="input-group mb-3">
  <span class="input-group-text bg-transparent" id="basic-addon1"><i class="fab fa-twitter fa-lg" style="color: #55ACEE"></i></span>
  <input type="text" class="form-control" placeholder="Twitter Profile ID" aria-label="Username"
    aria-describedby="basic-addon1" />
</div>
        </div>
    <div class="col-5 mx-2 px-2">
        <p>Youtube Profile URL</p>
<div class="input-group mb-3">
  <span class="input-group-text bg-transparent" id="basic-addon1"><i class="fab fa-twitter fa-lg" style="color: #55ACEE"></i></span>
  <input type="text" class="form-control" placeholder="Youtube Profile ID" aria-label="Username"
    aria-describedby="basic-addon1" />
</div>
        </div>
    </div>
    
    <br>
    
    <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Google + Profile URL</p>
<div class="input-group mb-3">
  <span class="input-group-text bg-transparent" id="basic-addon1"><i class="fab fa-google-plus fa-lg" style="color: #DC4A38"></i></span>
  <input type="text" class="form-control" placeholder="Google + Profile ID" aria-label="Username"
    aria-describedby="basic-addon1" />
</div>
        </div>
    <div class="col-5 mx-2 px-2">
        <p>Twitter Profile URL</p>
<div class="input-group mb-3">
  <span class="input-group-text bg-transparent" id="basic-addon1"><i class="fab fa-facebook fa-lg" style="color: #3B579D"></i></span>
  <input type="text" class="form-control" placeholder="Twitter Profile ID" aria-label="Username"
    aria-describedby="basic-addon1" />
</div>
        </div>
    </div>
    
    <br>
    
    <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Linked In Profile URL</p>
<div class="input-group mb-3">
  <span class="input-group-text bg-transparent" id="basic-addon1"><i class="fab fa-linkedin fa-lg" style="color: #1A84BC"></i></span>
  <input type="text" class="form-control" placeholder="Linked In Profile ID" aria-label="Username"
    aria-describedby="basic-addon1" />
</div>
        </div>
    <div class="col-5 mx-2 px-2">
        <p>Instagram Profile URL</p>
<div class="input-group mb-3">
  <span class="input-group-text bg-transparent" id="basic-addon1"><i class="fab fa-instagram fa-lg" style="color: #3f729b"></i></span>
  <input type="text" class="form-control" placeholder="Instagram Profile ID" aria-label="Username"
    aria-describedby="basic-addon1" />
</div>
        </div>
    </div>
    <br>
        
<div class="row">
<div class="col-5 col-xs-12 text-center" >
    <button type="button" class="btn btn-save">Reset</button>
</div>
<div class="col-5 text-center">
<button type="button" class="btn btn-save">Save Changes</button> 
</div>              
</div>    
    </div>
    </div><!-- profile tab ends -->
               
               
               
               
<div class="tab-pane" id="Privacy" role="tabpanel" aria-labelledby="history-tab">  
<div class="container">

<div class="row">
<div class="col-10">
<h6 class="card-text">Chat Enabled </h6>
 <p class="card-text" style="font-size:17px;">If chat disabled you will appear offline and will no see who is online too
 </p> 
</div>
<div class="col-2">
<label class="switch">
<input type="checkbox" checked>
<span class="slider round"></span>
</label>
</div>
</div>
<br>
    
    
    <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Who can post on your wall</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-newspaper"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
</select>
</div>
        </div>
    <div class="col-5 mx-2 px-2">
    <p>Who can see your birthdate</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-birthday-cake"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
    </select>
</div>
    </div>
 </div>   
    
    <br>
    
 <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Who can see your relationship</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-heart"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
</select>
</div>
        </div>
    <div class="col-5 mx-2 px-2">
    <p>Who can see your basic info</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
    </select>
</div>
    </div>
 </div> 
    
    <br>
    
    
<div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Who can see your work info</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-briefcase"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
</select>
</div>
        </div>
    <div class="col-5 mx-2 px-2">
    <p>Who can see your location info</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
    </select>
</div>
    </div>
 </div> 
    
    
    <br>
    
    
<div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Who can see your friends</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
</select>
</div>
        </div>
    <div class="col-5 mx-2 px-2">
    <p>Who can see your basic photos</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-images"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
    </select>
</div>
    </div>
    </div>
    
    
    <br>
    
    
    <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Who can see your liked pages</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-flag"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
</select>
</div>
        </div>
    <div class="col-5 mx-2 px-2">
    <p>Who can see your joined Groups</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-friends"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
    </select>
</div>
    </div>
 </div> 
    
    
    <br>
    
    
    <div class="row ">
    <div class="col-5 mx-2 px-2">
        <p>Who can see your joined events</p>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-week"></i></span>
  <select class="form-select" aria-label="Default select example">
  <option value="1">Everyone</option>
  <option value="2">Friends</option>
  <option value="3">Just Me</option>
</select>
</div>
        </div>

 </div> 
    
    <br>
    
    <div class="row">
<div class="col-5 col-xs-12 text-center" >
    <button type="button" class="btn btn-save">Reset</button>
</div>
<div class="col-5 text-center">
<button type="button" class="btn btn-save">Save Changes</button> 
</div>              
</div> 
    
    
    </div>    


</div>
               
               
               
<div class="tab-pane" id="Currency" role="tabpanel" aria-labelledby="history-tab">  

</div>

           
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                
              </div>
    
    
    </div>
        
  </div>
    

                
         
    
      <!-- end sidenav-->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
      
      <script type="text/javascript">
      $('#bologna-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
      </script>
            <script type="text/javascript">
          (function(document){
  var div = document.getElementById('headingOne');
  var icon = document.getElementById('icon');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-down';  
    } else{
      icon.className = 'fa fa-angle-down open';
    }

    open = !open;
  });
})
          (document);
      </script>
      <script type="text/javascript">
          (function(document){
  var div = document.getElementById('headingTwo');
  var icon = document.getElementById('icon2');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-down';  
    } else{
      icon.className = 'fa fa-angle-down open';
    }

    open = !open;
  });
})
          (document);
      </script>
      
      <script type="text/javascript">
          (function(document){
  var div = document.getElementById('headingThree');
  var icon = document.getElementById('icon3');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-down';  
    } else{
      icon.className = 'fa fa-angle-down open';
    }

    open = !open;
  });
})
          (document);
      </script>
      
      
      <script type="text/javascript">
          (function(document){
  var div = document.getElementById('headingFour');
  var icon = document.getElementById('icon4');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-down';  
    } else{
      icon.className = 'fa fa-angle-down open';
    }

    open = !open;
  });
})
          (document);
      </script>      
      
            <script type="text/javascript">
          (function(document){
  var div = document.getElementById('headingFive');
  var icon = document.getElementById('icon5');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-down';  
    } else{
      icon.className = 'fa fa-angle-down open';
    }

    open = !open;
  });
})
          (document);
      </script>   
      
      
                  <script type="text/javascript">
          (function(document){
  var div = document.getElementById('headingSix');
  var icon = document.getElementById('icon6');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-down';  
    } else{
      icon.className = 'fa fa-angle-down open';
    }

    open = !open;
  });
})
          (document);
      </script> 
      <script type="text/javascript">
          (function(document){
  var div = document.getElementById('headingSeven');
  var icon = document.getElementById('icon7');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-down';  
    } else{
      icon.className = 'fa fa-angle-down open';
    }

    open = !open;
  });
})
          (document);
      </script>
          <script type="text/javascript">
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
      </script>
      <script>
    $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
$("#menu-toggle-2").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled-2");
  $('#menu ul').hide();
});

function initMenu() {
  $('#menu ul').hide();
  $('#menu ul').children('.current').parent().show();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
      if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        return false;
      }
      if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
      }
    }
  );
}
$(document).ready(function() {
  initMenu();
});
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
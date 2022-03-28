<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>Payment settings</title>
      <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

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
  <div class="row">
      <div class="mt-5 mb-3"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > Payment</strong></div> 
<br>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header bg-white">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#Paypal" role="tab" aria-controls="description" aria-selected="true"><i class="far fa-list-alt"></i>&nbsp; &nbsp;Paypal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#Stripe" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-clipboard-list"></i>&nbsp; &nbsp;Stripe</a>
            </li>
              <li class="nav-item">
              <a class="nav-link"  href="#Bank" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-clipboard-list"></i>&nbsp; &nbsp;Bank Transfer</a>
            </li>
               <li class="nav-item">
              <a class="nav-link"  href="#Currency" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-clipboard-list"></i>&nbsp; &nbsp;Currency</a>
            </li>
            
          </ul>
        </div>
        <div class="card-body">
          
          
          
           <div class="tab-content mt-3">
<div class="tab-pane active" id="Paypal" role="tabpanel">
                
                 
 <div class="row">
<div class="col-10">
<h6 class="card-text">Paypal Enabled </h6>
<p>Enable payments via Paypal</p>
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
<h6 class="card-text">Paypal Mode </h6>
<p></p>
</div>
<div class="col-10">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Live</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Sandbox</label>
</div>
</div>
</div>   
    
    
    <br>
    

<div class="row">
<div class="col-2">
<h6>PayPal Client ID</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
</div>
    
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>PayPal Secret Key</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>

</div>
</div>
    
    
    
<div class="row">
<div class="col-8">
</div>
<div class="col-4">
<button type="button" class="btn btn-save">Save Changes</button> 
</div>              
</div>
    
    
              
</div>
      
               
               
               
<div class="tab-pane" id="Stripe" role="tabpanel" aria-labelledby="history-tab">  
     <div class="row">
<div class="col-10">
<h6 class="card-text">Credit Card Enabled </h6>
<p>Enable payments via Credit Card</p>
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
<h6 class="card-text">Alipay Enabled </h6>
<p>Enable payments via Alipay</p>
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
<h6 class="card-text">Stripe Mode </h6>
<p></p>
</div>
<div class="col-10">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Live</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Test</label>
</div>
</div>
</div>   
    
    
    <br>
    

<div class="row">
<div class="col-2">
<h6>Test Secret Key</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Stripe secret key that starts with sk_</p>
</div>
</div>
    
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>Test Publishable Key</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Stripe publishable key that starts with pk_</p>
</div>
</div>
    
  <br>
    
    
    <div class="row">
<div class="col-2">
<h6>Live Secret Key</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Stripe secret key that starts with sk_</p>
</div>
</div>
    
    
    <br>
    
    
    <div class="row">
<div class="col-2">
<h6>Live Publishable Key</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Stripe publishable key that starts with pk_</p>
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
               
               
               
               
               
<div class="tab-pane" id="Bank" role="tabpanel" aria-labelledby="history-tab">  
    
<div class="row">
<div class="col-10">
<h6 class="card-text">Bank Transfers Enabled </h6>
<p>Enable payments via Bank Transfers</p>
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
<h6>Bank Name</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Your Bank Name</p>
</div>
</div>
    
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>Bank Account Number</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Your Bank Account Number</p>
</div>
</div>
    
  <br>
    
    
    <div class="row">
<div class="col-2">
<h6>Bank Account Name</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Your Bank Account Name</p>
</div>
</div>
    
    
    <br>
    
    
    <div class="row">
<div class="col-2">
<h6>Bank Account Routing Code</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>Your Bank Account Routing Code or SWIFT Code</p>
</div>
</div>
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>Bank Account Country</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
<p>
Your Bank Account Country</p>
</div>
</div>    
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>Transfer Note</h6>
</div>
<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">      
<div class="form-floating">
<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
  In order to confirm the bank transfer, you will need to upload a receipt or take a screenshot of your transfer within 1 day from your payment date. If a bank transfer is made but no receipt is uploaded within this period, your order will be cancelled. We will verify and confirm your receipt within 3 working days from the date you upload it.          
</textarea>
 <br>
 <p>This note will be displayed to the user while upload his bank transfer receipt</p>
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
               
               
               
<div class="tab-pane" id="Currency" role="tabpanel" aria-labelledby="history-tab">  
            <div class="row">          
<div class="col-2">
<h6>Website Currency</h6>
</div>
<div class="col-10">                    
 <div class="form-select">
<select class="form-control" name="system_currency"> 
    <option value="2">Brazil Real (BRL)</option> 
    <option value="3">Canada Dollar (CAD)</option> 
    <option value="4">Czech Republic Koruna (CZK)</option>
    <option value="5">Denmark Krone (DKK)</option>
    <option value="6">Euro (EUR)</option> 
    <option value="7">Hong Kong Dollar (HKD)</option>
    <option value="8">Hungary Forint (HUF)</option>
    <option value="9">Israel Shekel (ILS)</option>
    <option value="10">Japan Yen (JPY)</option>
    <option value="11">Malaysia Ringgit (MYR)</option>
    <option value="12">Mexico Peso (MXN)</option>
    <option value="13">Norway Krone (NOK)</option> 
    <option value="14">New Zealand Dollar (NZD)</option>
    <option selected="" value="15">Philippines Peso (PHP)</option>
    <option value="16">Poland Zloty (PLN)</option>
    <option value="17">United Kingdom Pound (GBP)</option>
    <option value="18">Russia Ruble (RUB)</option>
    <option value="19">Singapore Dollar (SGD)</option>
    <option value="20">Sweden Krona (SEK)</option>
    <option value="21">Switzerland Franc (CHF)</option>
    <option value="22">Thailand Baht (THB)</option>
    <option value="23">Turkey Lira (TRY)</option>
    <option value="24">United States Dollar (USD)</option>
    <option value="25">Indian Rupee (INR)</option>
     </select>
</div>
<p>You can add, edit or delete currencies from Currencies</p>
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
      
      
      <script type="text/javascript" src="https://compuhost.tech/js/tooltip.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/bolgonalist.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/lineargraph.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/donut1.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/donut2.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/barchart.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/arrow1.js"></script>
                  
      <script type="text/javascript" src="https://compuhost.tech/js/sidebar.js"></script>
    
  </body>
</html>
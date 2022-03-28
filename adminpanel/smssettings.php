<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>SMS settings</title>
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
<div class="container-fluid">
<div class="row">
        <div class="mt-5 mx-2"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > SMS</strong></div> 
    <br></div>
      <div class="card ">
        <div class="card-header bg-white">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#smtp" role="tab" aria-controls="description" aria-selected="true">
                  <i class="fas fa-list-alt"></i>&nbsp; &nbsp;SMTP</a>
            </li>
            
          </ul>
        </div>
        <div class="card-body">
          
          
          
           <div class="tab-content mt-3">
            <div class="tab-pane active" id="smtp" role="tabpanel">
                
   
                <br>
                
                <div class="row">
             
             <div class="col-2">
                        <h6>Twilio Account SID</h6>
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
                        <h6>Twilio AUTH TOKEN</h6>
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
                        <h6>Twilio Phone Number</h6>
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
                        <h6>Test Phone Number</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    <p>Your phone number to test the SMS service i.e +12344567890<br>
A test SMS will be sent to this phone number when you test the connection</p>
                    </div>
                    
                </div>
                  
                
                
                <br>
                
                <div class="row">
                
                
                    <div class="col-6 text-center"><button type="button" class="btn btn-code"><i class="fas fa-bolt"></i>&nbsp;&nbsp;Test Connection</button> </div>
                <div class="col-6"><button type="button" class="btn btn-save">Save Changes</button></div>
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
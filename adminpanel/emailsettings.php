<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>email settings </title>
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
    <div class="mt-5 mb-3"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > Email</strong></div> 
<br></div>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header bg-white">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#smtp" role="tab" aria-controls="description" aria-selected="true">
                  <i class="fas fa-list-alt"></i>&nbsp; &nbsp;SMTP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#email" role="tab" aria-controls="history" aria-selected="false">
                  <i class="fas fa-envelope-open"></i>&nbsp; &nbsp;Email Notifications</a>
            </li>
            
          </ul>
        </div>
        <div class="card-body">
          
          
          
           <div class="tab-content mt-3">
            <div class="tab-pane active" id="smtp" role="tabpanel">
                
            <!-- website Public -->     
                
                <div class="row">
                <div class="col-10">
                    <h6 class="card-text">SMTP Emails </h6>

              <p class="card-text" style="font-size:17px;">Enable/Disable SMTP email system<br>
PHP mail() function will be used in case of disabled </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                <br>
                
                <!-- website Live -->
                
        <div class="row">
                <div class="col-10">
                    <h6 class="card-text">SMTP Require Authentication
 </h6>

              <p class="card-text" style="font-size:17px;">Enable/Disable SMTP authentication </p> 
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
                    <h6 class="card-text">SMTP SSL Encryption </h6>

              <p class="card-text" style="font-size:17px;">Enable/Disable SMTP SSL encryption<br>
TLS encryption will be used in case of disabled </p> 
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
                        <h6>SMTP Server</h6>
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
                        <h6>SMTP Port</h6>
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
                        <h6>SMTP Username</h6>
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
                        <h6>SMTP Password</h6>
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
                        <h6>Set From</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    <p>Set the From email address, For example: email@domain.com</p>
                    </div>
                    
                </div>
                  
                
                
                <br>
                
                <div class="row">
                
                
                    <div class="col-6 text-center"><button type="button" class="btn btn-code"><i class="fas fa-bolt"></i>&nbsp;&nbsp;Test Connection</button> </div>
                <div class="col-6"><button type="button" class="btn btn-save">Save Changes</button></div>
                </div>
                
                
    
              
            </div>
             
            <div class="tab-pane" id="email" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Email Notifications </h6>

              <p class="card-text" style="font-size:17px;">Enable/Disable email notifications system
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
                
                <div class="col-4">
                   <h6 class="card-text">Email User When</h6> 
                    </div>
                    <div class="col-8">
<div class="form-check">
                        
  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    Someone liked his post
  </label>
</div>
    <div class="form-check">
                        
  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    Someone commented on his post
  </label>
</div>
    <div class="form-check">
                        
  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    Someone shared his post
  </label>
</div>
    <div class="form-check">
                        
  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    Someone posted on his timeline
  </label>
</div>
    <div class="form-check">
                        
  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    Someone mentioned him
  </label>
</div>
    <div class="form-check">
                        
  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
    Someone visited his profile
  </label>
</div>
    <div class="form-check">
                        
  <input class="form-check-input " type="checkbox" value="" id="defaultCheck1" checked>
  <label class="form-check-label" for="defaultCheck1">
   Someone sent him or accepted his friend requset
  </label>
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
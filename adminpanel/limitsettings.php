<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>Limit settings!</title>
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
<div class="mt-5 mb-3 ml-2"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > Limit</strong></div> 
<br>    
            </div>
<div class="row">
    <div class="card">
    <div class="card-body ml-2">
        
        
<div class="row ">
<div class="col-2">
<h6>Data Heartbeat</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="5" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The update interval to check for new data (in seconds)</p>
</div>
</div>
        
        
<div class="row">
<div class="col-2">
<h6>Chat Heartbeat</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="10" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The update interval to check for new messages (in seconds)</p>
</div>
</div>
      
        
<div class="row">
<div class="col-2">
<h6>Offline After</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="10" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The amount of time to be considered online since the last user's activity (in seconds)<br>
The maximim value is one day = 86400 seconds</p>
</div>
</div>
        
<hr class="w-100 mx-auto"/>

<div class="row">
<div class="col-2">
<h6>Minimum Results</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="5" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Min number of results per request</p>
</div>
</div>
        
        
<div class="row">
<div class="col-2">
<h6>Maximum Results</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="10" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Max number of results per request</p>
</div>
</div>
        
        
<div class="row">
<div class="col-2">
<h6>Minimum Even Results</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="6" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Min even number of results per request</p>
</div>
</div>
        
        
<div class="row">
<div class="col-2">
<h6>Maximum Even Results</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="12" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Max even number of results per request</p>
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
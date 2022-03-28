<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      
    <title>Admin panel!</title>
      <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
       
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
    <div id="sidebar-wrapper" class="" style="background-color: #303030; text-align: left; font-family: Arial, sans-serif;">
  <?php include("adminsidebar.php"); ?>           
</div>
    
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper ">
<div class="container-fluid">
  <div class="row">
                  <div class="row mt-5">
                      <div class=" bar1">
                      <div id="bar-example" style="height: 300px;"></div>
                      </div>
                  <div class=" chart1">
                     <div id="myfirstchart"></div>
                    </div>
                  </div>
                 
                  
                <div class="row">
                  <div class="col-6 donut1" >
                     <div id="donut-example"></div>
                    </div>
                    
                    <div class="col-6 donut2" >
                     <div id="donut-example2"></div>
                    </div>
                    
                  </div>
                  <!-- div contents -->
                  <div class="row">
                      <div class="jumbotron mt-5">
<div class="row w-100 ">
        <div class="col-md-3 col-xs-12">
            <div class="card border-info mx-sm-1 p-3 total-users tablet" id="users">
                <div class="card border-info shadow text-info p-3 my-card " ><span class="fas fa-user" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4 >Total Users</h4></div>
                <div class="text-info text-center mt-2"><h1 >654</h1></div>
                <div class="text-info text-center mt-2"><a href="listusers.php" class="total_users btn pill" href="#">Manage Users</a></div>

            </div><br>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="card border-success mx-sm-1 p-3 tablet" id="online">
                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Online Users</h4></div>
                <div class="text-success text-center mt-2"><h1>22</h1></div>
                <div class="text-info text-center mt-2"><a href="listonline.php" class="online_users btn pill" href="#">Manage Online Users</a></div>

            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="card border-danger mx-sm-1 p-3 tablet" id="banned">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-exclamation-triangle" aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Banned Users</h4></div>
                <div class="text-danger text-center mt-2"><h1>42</h1></div>
                <div class="text-info text-center mt-2"><a href="listbanned.php" class="banned_users btn pill" href="#">Manage Banned Users</a></div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="card border-warning mx-sm-1 p-3 tablet" id="posts">
                <div class="card border-warning shadow text-warning p-3 my-card" ><span class="far fa-address-card" aria-hidden="true"></span></div>
                <div class="text-warning text-center mt-3"><h4>Posts</h4></div>
                <div class="text-warning text-center mt-2"><h1>346</h1></div>
                <div class="text-info text-center mt-2"><a href="postsettings.php" class="posts btn pill" href="#">Manage Posts</a></div>
            </div>
        </div>
    

     </div>
</div>
                  
                  </div>
                  
                  
                  <div class="row">
                      <div class="jumbotron ">
<div class="row w-100 ">
       
        <div class="col-md-3 col-xs-12">
            <div class="card border-success mx-sm-1 p-3 tablet" id="online">
                <div class="card border-success shadow text-success p-3 my-card"><span class="far fa-comments" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Comments</h4></div>
                <div class="text-success text-center mt-2"><h1>984</h1></div>
                <div class="text-info text-center mt-2"><a class="online_users btn pill" href="#">Manage Comments</a></div>

            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="card border-warning mx-sm-1 p-3 tablet" id="posts">
                <div class="card border-warning shadow text-warning p-3 my-card" ><span class="far fa-file-alt" aria-hidden="true"></span></div>
                <div class="text-warning text-center mt-3"><h4>Pages</h4></div>
                <div class="text-warning text-center mt-2"><h1>109</h1></div>
                <div class="text-info text-center mt-2"><a href="listpages.php" class="posts btn pill" href="#">Manage Pages</a></div>
            </div>
        </div>
        
     <div class="col-md-3 col-xs-12">
            <div class="card border-info mx-sm-1 p-3 total-users tablet" id="users">
                <div class="card border-info shadow text-info p-3 my-card" ><span class="fas fa-users" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4>Groups</h4></div>
                <div class="text-info text-center mt-2"><h1>65</h1></div>
                <div class="text-info text-center mt-2"><a href="listgroups.php" class="total_users btn pill" href="#">Manage groups</a></div>

            </div>
        </div>
    
    <div class="col-md-3 col-xs-12">
            <div class="card border-danger mx-sm-1 p-3 tablet" id="banned">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fas fa-calendar-week" aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Events</h4></div>
                <div class="text-danger text-center mt-2"><h1>42</h1></div>
                <div class="text-info text-center mt-2"><a class="banned_users btn pill" href="#">Manage Events</a></div>
            </div>
        </div>
    
    

     </div>
</div>
                  
                  </div>
                  
                  
                  
<div class="row " >
<div class="jumbotron mt-3">
<div class="row w-100 ">
       <div class="col-md-3"></div>
    
      <div class="col-md-3 col-xs-12">
            <div class="card border-info mx-sm-1 p-3 total-users tablet" id="users">
                <div class="card border-info shadow text-info p-3 my-card" ><span class="fas fa-envelope-square" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4>Messages</h4></div>
                <div class="text-info text-center mt-2"><h1>65</h1></div>
                <div class="text-info text-center mt-2"><a class="total_users btn pill" href="#">Manage Messages</a></div>

            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="card border-success mx-sm-1 p-3 tablet" id="online">
                <div class="card border-success shadow text-success p-3 my-card"><span class="far fa-bell" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Notifications</h4></div>
                <div class="text-success text-center mt-2"><h1>984</h1></div>
                <div class="text-info text-center mt-2"><a class="online_users btn pill" href="#">Manage Notifications</a></div>

            </div>
        </div>
    <div class="col-md-3"></div>
      
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

      <script type="text/javascript" src="https://compuhost.tech/js/lineargraph.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/donut1.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/donut2.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/barchart.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/arrow1.js"></script>
                  
      <script type="text/javascript" src="https://compuhost.tech/js/sidebar.js"></script>
    
  </body>
</html>
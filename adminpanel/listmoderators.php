<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>List Moderators!</title>
      <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <link rel="stylesheet" href="dist/sortable-tables.min.css">
<script src="dist/sortable-tables.min.js"></script>
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
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
   
    .card{
          border:none;
      }
    .banner{
         font-size: 20px;
     }
        
      .round-buttons{
        width:70%;
        height:40px;
        margin-bottom: 2px;
          text-align: center;
    }
    .col-4{
        width: 70%;
        margin-bottom: 2px;
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
        <div class="row">      

<div class="mt-5 mb-2"><strong><i class="fas fa-user"></i>&nbsp;&nbsp;User > Moderators</strong></div> 
<br>    
            </div>
    
<div class="card">
<div class="card-body">
<div class="row">
    <div class="row">
        <div class="col-4">

            <!--		Show Numbers Of Rows 		-->
          
             
      <div class="col-4"> <select class="form-control" name="state" id="maxRows" > 
          <option value="#" selected>Show rows</option>
                <option value="5000"> ALL </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
          <option value="5">5</option>
                <option value="10">10</option>
            </select></div> 
             
        
        </div>
        <div class="col-4"></div>
        <div class="col-4">
         <div class="sb-example-1">
         <div class="search">
            <input type="search" class="searchTerm form-control search-input" placeholder="What are you looking for?" data-table="list">
            <button type="btn" class="searchButton">
              <i class="fa fa-search"></i>
           </button>
         </div>
             <p style="font-size:12px;">Search by Username, First Name, Last Name, Email or Phone</p>
      </div>
    </div>
   </div>


 
</div>
    <br>
    
           <div class="row mx-auto" style="overflow-x:auto;">        
      <table border="1" class="table table-bordered table-striped table-hover supTable list" id="Tabla">
                <tr> 
                    <th onclick="sortTable('supTable', 0)">Id <div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 1)">Name &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 2)">User name &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 3)">Joined &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 4)">Activated &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 5)">Actions &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    
                </tr>
<tr >
 <td>1</td>
<td><a href="#" style="text-decoration: none; color:black;"><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo">&nbsp;</a>Yash Mathur</td>
<td><a href="#" style="text-decoration: none; color:black;"><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo">&nbsp;Yash</a></td>
<td>21 November 2019</td>
<td><button class="rounded-pill" style="background-color:#660033; color:white;">Yes</button></td>
<td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons"  data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
</a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
</tr>
                
<tr >
 <td>667</td>
<td><a href="#" style="text-decoration: none; color:black;"><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo">&nbsp;</a>Ravi Kumar</td>
<td><a href="#" style="text-decoration: none; color:black;"><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo">&nbsp;ravi_kumar_5f0683d8ba4eb</a></td>
<td>9 July 2020</td>
<td><button class="rounded-pill" style="background-color:#660033; color:white;">No</button></td>
<td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons"  data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
</a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
</tr>
            
          
<tr >
 <td>419</td>
<td><a href="#" style="text-decoration: none; color:black;"><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo">&nbsp;</a>Rakesh Poonawalla</td>
<td><a href="#" style="text-decoration: none; color:black;"><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo">&nbsp;Rakesh</a></td>
<td>9 May 2020</td>
<td><button class="rounded-pill" style="background-color:#660033; color:white;">Yes</button></td>
<td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons"  data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
</a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
</tr>

            </table>
        </div>
</div>
</div>

        
  </div>
    </div>
</div>                 

                
             
              
              


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   
   <script type="text/javascript" src="https://compuhost.tech/js/tooltip.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/bolgonalist.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/lineargraph.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/donut1.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/donut2.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/barchart.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/arrow1.js"></script>
                  
      <script type="text/javascript" src="https://compuhost.tech/js/sidebar.js"></script>
   
      <script type="text/javascript" src="https://compuhost.tech/js/sort_table.js"></script> 
        
      <script type="text/javascript" src="https://compuhost.tech/js/down_arrow.js"></script>
         
      <script type="text/javascript" src="https://compuhost.tech/js/search_rows.js"></script>
     
      <script type="text/javascript" src="https://compuhost.tech/js/show_rows.js"> </script>
  </body>
</html>
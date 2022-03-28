<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->


      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Admin > Events</title>
    <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <link rel="stylesheet" href="dist/sortable-tables.min.css">
 <script src="dist/sortable-tables.min.js"></script>
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
    <div id="sidebar-wrapper" class="" style="background-color: #660033; text-align: left;">
  <?php include("adminsidebar.php"); ?>           
</div>
    
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
<div class="container-fluid">
  <div class="row" style="margin-top: 20px">
<div class="my-2"><strong><i class="fas fa-calendar"></i>&nbsp;&nbsp;Events</strong></div>
<br>    

    
<div class="card" style="margin-top: 20px">
<div class="card-body">
<div class="row">
    <div class="row">
        <div class="col-4">

            <!--		Show Numbers Of Rows 		-->
          
      <div class="col-4 list-events-show-rows"> <select class="form-control" name="state" id="maxRows" >  
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
      </div>
    </div>
   </div>


 
</div>
    <br>
    
           <div class="row mx-2" style="overflow-x:auto;">        
      <table border="1" class="table table-bordered table-striped table-hover supTable list" id="Tabla">
                <tr> 
                    <th onclick="sortTable('supTable', 0)">Id &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 1)">Event &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 2)">Admin &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 3)">Privacy &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 4)">Interested &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 5)">Going &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 6)">Invited &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 7)">Actions &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    
                </tr>
<?php 

require 'admindb.php';
$query = "select * from events";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run) > 0;

if($row)
{
  $name ="";
  $lname= "";
  $pic="";
  while($row=mysqli_fetch_assoc($query_run))
  {
    $admin_id = $row['event_admin'];
    $query1 = "select * from users where user_id in (select event_admin from events where event_admin = $admin_id)";
    $query1_run = mysqli_query($conn, $query1);
    while($row1=mysqli_fetch_assoc($query1_run)){
      $fn = $row1['user_firstname'];
      $ln = $row1['user_lastname'];
      $admin_pic=$row1['user_picture'];
      $name = $fn ;
      $lname = $ln;
      $pic = $admin_pic;
    }
    ?>     
<tr >
 <td><?php echo $row['event_id']; ?></td>
 <td><a href="#!" class="general-info-t-link"><?php echo $row['event_title']; ?></a></td>
 <td><a href="#" style="text-decoration: none; color:black;"><img src="<?php echo $pic; ?>" class="user-profile-photo">&nbsp;<?php echo $name.' '.$lname; ?></a></td>
 <td><i class="fas fa-globe"></i>&nbsp;&nbsp;<?php echo $row['event_privacy']; ?></td>
 <td><?php echo $row['event_interested']; ?></td>
 <td><?php echo $row['event_going']; ?></td>
 <td><?php echo $row['event_invited']; ?></td>
<td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons mb-1 list-events-round-btn"  data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
</a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons list-events-round-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
</tr>
<?php
   }
}
else{
  echo "no event found";
}
          ?> 

            </table>
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
  </div>
</div>
              
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  
      <script type="text/javascript" src="https://compuhost.tech/js/tooltip.js"></script>
            
      <script type="text/javascript" src="https://compuhost.tech/js/sidebar.js"></script>
   
      <script type="text/javascript" src="https://compuhost.tech/js/sort_table.js"></script> 
      
    <script type="text/javascript" src="https://compuhost.tech/js/arrow1.js"></script>
        
      <script type="text/javascript" src="https://compuhost.tech/js/down_arrow.js"></script>
         
      <script type="text/javascript" src="https://compuhost.tech/js/search_rows.js"></script>
     
      <script type="text/javascript" src="https://compuhost.tech/js/show_rows.js"> </script>      
              
  </body>
</html>
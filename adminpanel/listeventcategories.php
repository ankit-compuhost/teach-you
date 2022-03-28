<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Admin > Events > Categories</title>
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
<div class="container-fluid mb-5 mx-auto">
  <div class="row" style="margin-top: 20px">

<div class="my-2"><strong><i class="fas fa-calendar"></i>&nbsp;&nbsp;Events&nbsp;<i class="fas fa-angle-right" style="font-size: 11px"></i>&nbsp;Categories</strong></div>
<div><a href="#!" type="button" class="btn btn-danger text-center add-cat-btn" data-bs-toggle="tooltip" data-bs-placement="top">Add New Category</a></div> 
<br>    

    
<div class="card">
<div class="card-body">
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
    <br>
    
           <div class="row mx-2" style="overflow-x:auto;">        
      <table border="1" class="table table-bordered table-striped table-hover supTable list" id="Tabla">
                <tr> 
                    <th onclick="sortTable('supTable', 0)">Id &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 1)">Title &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    <th onclick="sortTable('supTable', 2)">Actions &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
                    
                </tr>
                 <?php 

require 'admindb.php';
$query = "select * from events_categories";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run) > 0;

if($row)
{
  while($row=mysqli_fetch_assoc($query_run))
  {
    ?> 
                <tr class="nfc nfcWest">
                    <td><?php echo $row['category_id']; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons-eventc" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons-eventc" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
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

<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  
      <script type="text/javascript" src="https://compuhost.tech/js/tooltip.js"></script>
            
      <script type="text/javascript" src="https://compuhost.tech/js/sidebar.js"></script>
   
      <script type="text/javascript" src="https://compuhost.tech/js/sort_table.js"></script> 
        
      <script type="text/javascript" src="https://compuhost.tech/js/down_arrow.js"></script>
         
      <script type="text/javascript" src="https://compuhost.tech/js/search_rows.js"></script>
     
      <script type="text/javascript" src="https://compuhost.tech/js/show_rows.js"> </script>      
              
  </body>
</html>
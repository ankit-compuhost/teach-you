<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>List Users!</title>
      <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
  </head>
    

  <body>
      
             <!-- header nav bar -->
      <?php include("header.php"); ?>
      <br>
    <br>
       <!-- end header navbar -->
      <!-- sidenav -->
      <div class="container-fluid " style=" left:0px; margin-left:0; padding-left:0;">
          <div class="row">
         <!--     <div class="col-sm-1 col-md-1 col-xl-1 col-xxl-1"></div> -->
              
              
              <?php include("sidenav.php"); ?>
             
            
<!-- main Div  -->
              
              <div class="col-sm-8  col-md-8 col-lg-8 col-xl-8 col-xxl-8 mt-5" style="float: left; display:inline-block; width:78%; overflow:none;"  >
<div class="container">

<div class="my-2"><strong><i class="fas fa-flag"></i>&nbsp;&nbsp;Pages</strong></div> 
<br>    

    
<div class="card">
<div class="card-body">
<div class="row">
    <div class="row">
        <div class="col-3">
         <div class="sb-example-1">
         <div class="search">
            <input type="text" class="searchTerm" placeholder="What are you looking for?">
            <button type="btn" class="searchButton">
              <i class="fa fa-search"></i>
           </button>
         </div>
      </div>
    </div>
   </div>


    <p style="font-size:12px;">Search by Username, First Name, Last Name, Email or Phone</p>
</div>
    <br>
    
           <div class="row mx-2">        
    <table class="table table-bordered table-striped table-hover supTable" >
                
    <thead>
    <tr>
      <th onclick="sortTable('supTable', 0)" scope="col">Id &nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
      <th oonclick="sortTable('supTable', 1)" scope="col">Title&nbsp;&nbsp;<div class="fas fa-arrow-up rotate "></div></th>
          <th  scope="col">Actions</th>
    
    </tr>
  </thead>
        <tbody>
    <tr>		
        <th scope="row">1</th>
      <td>Tutor</td>      
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons"  data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
   <tr>			
      <th scope="row">2</th>
          <td>Play School</td>     
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<button type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</button></td>
    </tr>
        
     <tr>						
      <th scope="row">3</th>
      <td>Schools</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
    <tr>						
      <th scope="row">4</th>
      <td>College</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
    <tr>						
      <th scope="row">5</th>
      <td>Global College</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
    <tr>						
      <th scope="row">6</th>
      <td>Language Institute</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
    <tr>						
      <th scope="row">7</th>
      <td>Art</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
    <tr>						
      <th scope="row">8</th>
      <td>Craft</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
    <tr>						
      <th scope="row">9</th>
      <td>Dance</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
    <tr>						
      <th scope="row">10</th>
      <td>Film</td>         
        <td> <a href="userdetails.php" type="button" class="btn btn-danger rounded-circle text-center round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Actions"><i class="fas fa-pencil-alt"></i>&nbsp;
            </a>&nbsp;&nbsp;<a type="button" class="btn btn-danger rounded-circle round-buttons" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
            
            

  </tbody>
        
</table>
        </div>
</div>
</div>

        
  </div>
    </div>
</div>                 
</div>
                
             
              
              


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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   <script>
      
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
      </script>
      
      <script type="text/javascript">
function sortTable(tableClass, n) {
var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;

table = document.getElementsByClassName(tableClass)[0];
switching = true;
dir = "asc";
while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
                var cmpX=isNaN(parseInt(x.innerHTML))?x.innerHTML.toLowerCase():parseInt(x.innerHTML);
                var cmpY=isNaN(parseInt(y.innerHTML))?y.innerHTML.toLowerCase():parseInt(y.innerHTML);
cmpX=(cmpX=='-')?0:cmpX;
cmpY=(cmpY=='-')?0:cmpY;
        if (dir == "asc") {
            if (cmpX > cmpY) {
                shouldSwitch= true;
                break;
            }
        } else if (dir == "desc") {
            if (cmpX < cmpY) {
                shouldSwitch= true;
                break;
            }
        }
    }
    if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount ++;      
    } else {
        if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
        }
    }
}
}
</script>
      <script>
      $(".rotate").click(function () {
    $(this).toggleClass("down");
})
      </script>
      
      
  </body>
</html>
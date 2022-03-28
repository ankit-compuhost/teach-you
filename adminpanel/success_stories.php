<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Success Stories!</title>
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
      
<div class="container-fluid">
<h2 class="my-2">The Success Story Section</h2>
    <div class="row">
    <div class="col-6"><a href="admincp.php" class="btn btn-danger rounded-2 quotes"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Go Back</a></div>
    <div class="col-6 text-center"><a class="btn btn-primary rounded-2 quotes" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Stories</a></div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Success Stories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Heading</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
                        <div class="mb-3">
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-modal">Add Story</button>
      </div>
    </div>
  </div>
</div>
    <div  style="overflow-x:auto;">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Heading</th>
      <th scope="col">Description</th>
      <th scope="col">Date/Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo"></td>
      <td>Test</td>
      <td>test</td>
    <td>03-01-2021 05:57:07pm</td>
        <td><a type="button" class="btn btn-danger rounded-circle round-buttons-quotes" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
      
      <tr>
      <th scope="row">2</th>
      <td><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo"></td>
      <td>Joy</td>
      <td>joy</td>
    <td>03-01-2021 05:57:07pm</td>
        <td><a type="button" class="btn btn-danger rounded-circle round-buttons-quotes" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
      
      <tr>
      <th scope="row">3</th>
      <td><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo"></td>
      <td>Test</td>
      <td>test</td>
    <td>03-01-2021 05:57:07pm</td>
        <td><a type="button" class="btn btn-danger rounded-circle round-buttons-quotes" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
      
      <tr>
      <th scope="row">4</th>
      <td><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo"></td>
      <td>Test</td>
      <td>test</td>
    <td>03-01-2021 05:57:07pm</td>
        <td><a type="button" class="btn btn-danger rounded-circle round-buttons-quotes" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
      
      <tr>
      <th scope="row">5</th>
      <td><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo"></td>
      <td>Test</td>
      <td>test</td>
    <td>03-01-2021 05:57:07pm</td>
        <td><a type="button" class="btn btn-danger rounded-circle round-buttons-quotes" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
      
      <tr>
      <th scope="row">6</th>
      <td><img src="https://compuhost.tech/images/images/blank-profile.jpg" class="user-profile-photo"></td>
      <td>Test</td>
      <td>test</td>
    <td>03-01-2021 05:57:07pm</td>
        <td><a type="button" class="btn btn-danger rounded-circle round-buttons-quotes" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fas fa-trash-alt"></i>&nbsp;</a></td>
    </tr>
    
  </tbody>
</table>
        </div>
</div>
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
   
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
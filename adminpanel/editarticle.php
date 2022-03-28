<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/styles.css">
    <title>Hello, world!</title>
      <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <script src="https://compuhost.tech/js/photo_upload.js"></script>
      
      <script src="https://cdn.tiny.cloud/1/s3mi8l1wk3jqpk0n883srq2vu7e4qch8jdu318nltbv2jm29/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
      <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
 <style type="text/css">
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
       .back{
        display:block;
    }
 .goback{
         font-size: 10px;
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
    .col-2, .col-10{
        width:80%;
        display:block;
    }
    .col-4{
        width:100%;
    }
    .card-text{
        font-size: 15px;
    }
 
   
        }
     .banner{
         font-size: 20px;
     }      
       
     .tab-btn{ 
       border-bottom:white;
     } 
     .tab-btn a:active{
         border-bottom: 5px solid red;
     }
      </style>
      <style>


      </style>
      
  </head>
    

  <body>
      
             <!-- header nav bar -->
      <?php include("header.php"); ?>
      <br>
    <br>
       <!-- end header navbar -->
      <!-- sidenav -->
      <div id="wrapper" >
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="" style="background-color: #660033; text-align: left;">
  <?php include("sidebar.php"); ?>           
</div>
    
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper ">
<div class="container-fluid">
 <div class="row"><div class=" "></div> 
<br></div> 
    <div class="row mt-3">
        <p><i class="fas fa-edit"></i> &nbsp; <b>Edit Article</b>
        <button class="btn btn-danger rounded-pill goback" style="float:right;"><i class="fas fa-arrow-circle-left"></i> &nbsp; Go back</button>
            
    </p>
    </div>
<div class="card mt-3">
    
  <div class="card-body">
      
      
    <div class="row">
      <div class="col-2"><b>Name</b> </div>
        <div class="col-10"><input type="text" class="form-control" placeholder="Demo1" id="" required></div>
      </div>
      <br>
      
      <div class="row">
      <div class="col-2"><b>Content</b> </div>
        <div class="col-10">
          <textarea id="mytextarea" name="mytextarea">
            </textarea>
          </div>
      </div>
      <br>
      
      <div class="row">
      <div class="col-2"><b>Cover Photo</b> </div>
        <div class="col-10">
            <div class="image-upload-container">
      <div class="image-upload-one">
        <div class="center">
          <div class="form-input">
            <label for="file-ip-1">
              <img id="file-ip-1-preview" src="images/camera1.png">
              <button type="button" class="imgRemove" onclick="myImgRemove(1)"></button>
            </label>
            <input type="file"  name="img_one" id="file-ip-1" accept="image/*" onchange="showPreview(event, 1);">
          </div>
          <small class="small">Use the &#8634; icon to reset the image</small>
        </div>
      </div>
            </div>
          </div>
      </div>
      <br>
      
      <div class="row">
      <div class="col-2"><b>Category</b></div>
    <div class="col-10">
          <div class="form-select">
<select class="form-control" name="system_currency"> 
     <option>Select Category</option> <option value="1">Tutor</option> <option value="2">Play School</option> <option value="3">School</option> <option value="4">College</option> <option value="5">Global College</option> <option value="6">Language Institute</option> <option value="7">Art</option> <option value="8">Craft</option> <option value="9" selected="">Dance</option> <option value="11">Film</option> <option value="12">Fitness</option> <option value="13">Food</option> <option value="14">Health</option> <option value="15">Music</option> <option value="16">Other</option> <option value="17">Party</option> <option value="19">Sport</option> <option value="20">Theatre</option> <option value="21">Politics</option> <option value="22">Doctor</option> <option value="23">News</option> <option value="26">Real Estate</option> 
     </select>
</div>
          </div>
      </div>
      
      <br>
      <div class="row">
                
                
                    <div class="col-6 text-center"><button type="button" class="btn btn-code"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete Article</button> </div>
                <div class="col-6"><button type="button" class="btn btn-save">Save Changes</button></div>
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
      
      
      <script type="text/javascript">
      $('#bologna-list a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
      </script>
            
            <script type="text/javascript">
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
      </script>
      <script>
    $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
$("#menu-toggle-2").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled-2");
  $('#menu ul').hide();
});

function initMenu() {
  $('#menu ul').hide();
  $('#menu ul').children('.current').parent().show();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
      if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        return false;
      }
      if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
      }
    }
  );
}
$(document).ready(function() {
  initMenu();
});
    </script>
    <script>
       "use strict";
var underlineMenuItems = document.querySelectorAll("ul li");
underlineMenuItems[0].classList.add("active");
underlineMenuItems.forEach(function (item) {
    item.addEventListener("click", function () {
        underlineMenuItems.forEach(function (item) { return item.classList.remove("active"); });
        item.classList.add("active");
    });
})
      </script>
      
 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
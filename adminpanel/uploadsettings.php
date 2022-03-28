<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>Uploads Settings!</title>
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
 <div class="row"><div class="mt-5 mb-3"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > Upload</strong></div> 
<br></div> 
      <div class="card">
        <div class="card-header bg-white">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#general" role="tab" aria-controls="description" aria-selected="true"><i class="far fa-list-alt"></i>&nbsp; &nbsp;General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#amazon" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-clipboard-list"></i>&nbsp; &nbsp;Amazon</a>
            </li>
            
          </ul>
        </div>
        <div class="card-body">
          
          
          
           <div class="tab-content mt-3">
            <div class="tab-pane active" id="general" role="tabpanel">
                
            <!-- website Public -->     
                
                
                
                
            
               
<div class="tab-pane" id="general" role="tabpanel" aria-labelledby="history-tab">  
  
    <div class="card rounded-3" style="background-color:#660033; color:#ffffcc;">
  <div class="card-body">
   <i class="fas fa-exclamation-triangle"></i> Your server max upload size = 520M<br>
You can't upload files larger than 520M - To upload larger files, contact your hosting provider
  </div>

    </div> 
    

<br>

<div class="row">
<div class="col-2">
<h6>Uploads Directory</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="content/uploads" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The path of uploads local directory</p>
</div>
</div>
</div>
                
<br>

                
<div class="row">
<div class="col-2">
<h6>Uploads Prefix</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Teach You" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>Add a prefix to the uploaded files (No spaces or special characters only like 'mysite' or 'my_site')</p>
</div>
</div>
                
<hr class="w-100 mx-auto"/>
                
                
<div class="row">
<div class="col-2">
<h6>Maxi profile photo size</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="100000" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Maximum size of profile photo in kilobytes (1 M = 1024 KB)</p>
</div>
</div>
                
<br>
                
<div class="row">
<div class="col-2">
<h6>Max Cover photo Size </h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="100000" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>
100000
The Maximum size of cover photo in kilobytes (1 M = 1024 KB)</p>
</div>
</div>
               
<br>
                
<hr class="w-100 mx-auto"/>
                <br>
                
<div class="text-center"><b><i class="far fa-file-image"></i>&nbsp;&nbsp;Photo</b></div>
                
                <br>
<div class="row">
<div class="col-10">
<h6 class="card-text">Enable photo upload to share & upload photos to the site </h6>
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
<h6>Maximum Photo Size</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="100000" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Maximum size of uploaded photo in posts in kilobytes (1M = 1024KB)</p>
</div>
</div>
                
<br>
                
                
<div class="row">          
<div class="col-2">
<h6>Photo Quality</h6>
</div>
<div class="col-10">                    
 <div class="form-floating">
 <select class="fa form-select" id="floatingSelect" aria-label="Floating label select example">
<option value="fas fa-battery-full"><div>&#xf240;&nbsp;&nbsp;High Quality&nbsp;&nbsp;(High quality photos with low compression)</div></option>
<option value="fas fa-battery-half"><div>&#xf242;&nbsp;&nbsp;Medium Quality&nbsp;&nbsp;(Medium quality photos with medium compression)</div></option>
<option value="fas fa-battery-empty"><div>&#xf244;&nbsp;&nbsp;Low Quality&nbsp;&nbsp;(Low quality photos with high compression)</div></option>
</select>
<label for="floatingSelect">Select privacy settings</label>
</div>
</div>
</div>
                
                

<hr class="w-100 mx-auto"/>
                <br>
                
<div class="text-center"><b><i class="fas fa-music"></i>&nbsp;&nbsp;Audio</b></div>
                
                <br>
<div class="row">
<div class="col-10">
<h6 class="card-text">Enable audio upload to share & upload sounds to the site
</h6>
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
<h6>Maximum Audio Size</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="1000000000" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Maximum size of uploaded audio in posts in kilobytes (1M = 1024KB)</p>
</div>
</div>
                
<br>
                
    
<div class="row">
<div class="col-2">
<h6>Audio Extensions</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="mp3, wav, ogg, mp4" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>Allowed Audio extensions (separated with comma ',)</p>
</div>
</div>
              
                
                
<hr class="w-100 mx-auto"/>
                <br>
                
<div class="text-center"><b><i class="fas fa-video"></i>&nbsp;&nbsp;Video</b></div>
                
                <br>
<div class="row">
<div class="col-10">
<h6 class="card-text">Enable photo upload to share & upload Videos to the site </h6>
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
<h6>Maximum Video Size</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="1000000000" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Maximum size of uploaded video in posts in kilobytes (1M = 1024KB)</p>
</div>
</div>
                
<br>
                
    
<div class="row">
<div class="col-2">
<h6>Video Extensions</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="'mp4', webm, ogg,mp4,MOV,WMV,FLV,AVI,MKV,MPG,MPEG" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>Allowed video extensions (separated with comma ',)</p>
</div>
</div>
                
                
                
<hr class="w-100 mx-auto"/>
                <br>
                
<div class="text-center"><b><i class="fas fa-music"></i>&nbsp;&nbsp;Audio</b></div>
                
                <br>
<div class="row">
<div class="col-10">
<h6 class="card-text">Enable audio upload to share & upload sounds to the site
</h6>
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
<h6>Maximum Audio Size</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="1000000000" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Maximum size of uploaded audio in posts in kilobytes (1M = 1024KB)</p>
</div>
</div>
                
<br>
                
    
<div class="row">
<div class="col-2">
<h6>Audio Extensions</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="mp3, wav, ogg, mp4" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>Allowed Audio extensions (separated with comma ',)</p>
</div>
</div>
              
                
                
<hr class="w-100 mx-auto"/>
                <br>
                
<div class="text-center"><b><i class="fas fa-video"></i>&nbsp;&nbsp;File</b></div>
                
                <br>
<div class="row">
<div class="col-10">
<h6 class="card-text">Enable File upload to share & upload Videos to the site </h6>
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
<h6>Maximum file Size</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="1000000000" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>The Maximum size of uploaded file in posts in kilobytes (1M = 1024KB)</p>
</div>
</div>
                
<br>
                
    
<div class="row">
<div class="col-2">
<h6>File Extensions</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="txt, zip, pdf, xls, doc" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>Allowed file extensions (separated with comma ',)</p>
</div>
</div>
                
                
<br>
                
<div class="row mb-5">
<div class="col-8">
</div>
<div class="col-4">
<button type="button" class="btn btn-save">Save Changes</button> 
</div>       
</div>
                
                
               </div>
               
               
<div class="tab-pane" id="amazon" role="tabpanel" aria-labelledby="history-tab">  
  
    <div class="card rounded-3" style="background-color:#660033; color:#ffffcc;">
  <div class="card-body">
      <div class="row">
      <div class="col-1 text-center">
         <i class="fab fa-amazon fa-3x banner"></i>   
          </div>
    <div class="col-11 ">
    &nbsp;<b>Amazon S3 Storage</b> <br>
Before enabling Amazon S3, make sure you upload the whole 'uploads' folder to your bucket.<br>
Before disabling Amazon S3, make sure you download the whole 'uploads' folder to your server.      
    </div>
      </div>
      
      
      <br>
            
</div>
 </div>
    
<br>
<div class="row">
<div class="col-10">
<h6 class="card-text">Amazon S3 storage </h6>
<p class="card-text" style="font-size:17px;">Enable Amazon S3 storage/p> 
</div>
<div class="col-2">
<label class="switch">
<input type="checkbox">
<span class="slider round"></span>
</label>
</div>
</div>    
    <br>

    
<div class="row">          
<div class="col-2">
<h6>Country</h6>
</div>
<div class="col-10">                    
 <div class="form-select">
<select name="s3_region" class="form-control">
    <option value="us-east-2">US East (Ohio)</option>
    <option value="us-east-1">US East (N. Virginia)</option>
    <option value="us-west-1">US West (N. California)</option>
    <option value="us-west-2">US West (Oregon)</option>
    <option value="ap-south-1">Asia Pacific (Mumbai)</option>
    <option value="ap-northeast-3">Asia Pacific (Osaka-Local)</option>
    <option value="ap-northeast-2">Asia Pacific (Seoul)</option>
    <option value="ap-southeast-1">Asia Pacific (Singapore)</option>
    <option value="ap-southeast-2">Asia Pacific (Sydney)</option>
    <option value="ap-northeast-1">Asia Pacific (Tokyo)</option>
    <option value="ca-central-1">Canada (Central)</option>
    <option value="cn-north-1">China (Beijing)</option>
    <option value="cn-northwest-1">China (Ningxia)</option>
    <option value="eu-central-1">EU (Frankfurt)</option>
    <option value="eu-west-1">EU (Ireland)</option>
    <option value="eu-west-2">EU (London)</option>
    <option value="eu-west-3">EU (Paris)</option>
    <option value="sa-east-1">South America (São Paulo)</option>
     </select>

</div>
</div>
</div>    
    
    
    <br>
    
    
<div class="row">
<div class="col-2">
<h6>Bucket name</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="10" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>
Your Amazon S3 bucket name</p>
</div>
</div>
      
        
<div class="row">
<div class="col-2">
<h6>Access Key ID</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="10" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>Your Amazon S3 Access Key ID</p>
</div>
</div>
        


<div class="row">
<div class="col-2">
<h6>Access Key Secret</h6>
</div>
<div class="col-10">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="5" aria-label="Username" aria-describedby="basic-addon1">
</div>
 <p>Your Amazon S3 Access Key Secret</p>
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
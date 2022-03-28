<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>post settings </title>
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
    <div class="row ">
                  <div class="mt-5 ml-2"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > Posts</strong></div> 
<br></div>
           <br>   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Stories </h6>

              <p class="card-text" style="font-size:17px;">Turn the stories On and Off<br>
Stories are photos and videos that only last 24 hours</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                  
            <hr class="w-100 mx-auto"/>
                
                  
                             <br>   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Popular posts </h6>

              <p class="card-text" style="font-size:17px;">Turn the popular posts On and Off<br>
Popular posts are public posts ordered by most reactions, comments & shares</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                  
    <br>   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Discover Posts </h6>

              <p class="card-text" style="font-size:17px;">Turn the discover posts On and Off<br>
Discover posts are public posts ordered from most recent to old</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                  
                  <hr class="w-100 mx-auto"/>
                  
                  
                  
         <br>   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Memories </h6>

              <p class="card-text" style="font-size:17px;">Turn the memories On and Off<br>
Memories are posts from the same day on last year</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                  
                  
                  <hr class="w-100 mx-auto"/>
                  
                  
                  
         <br>   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Wall Posts </h6>

              <p class="card-text" style="font-size:17px;">Users can publish posts on their friends walls</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                  
                  
                  <hr class="w-100 mx-auto"/>
                  
                  
                  
         <br>   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Polls </h6>

              <p class="card-text" style="font-size:17px;">Turn the poll posts On and Off</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                  
                  <hr class="w-100 mx-auto"/>
                  
                  
                       <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">GIF </h6>

              <p class="card-text" style="font-size:17px;">Turn the gif posts On and Off</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>  
                  
                  
  <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Giphy API Key</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea"> </label>
</div>
                    <p>Check the documentation to learn how to get this key</p>
                    </div>
                    
                </div>
                  
                  
                                    <hr class="w-100 mx-auto"/>
                  
                  
                       <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Geolocation </h6>

              <p class="card-text" style="font-size:17px;">Turn the post Geolocation On and Off</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>  
                  
                  
  <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Geolocation Google Key</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea"> </label>
</div>
                    <p>Check the documentation to learn how to get this key</p>
                    </div>
                    
                </div>
                  
                  
                  
                                    <hr class="w-100 mx-auto"/>
                  
                  
                       <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Post Translation </h6>

              <p class="card-text" style="font-size:17px;">Turn the post translation On and Off</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>  
                  
                  
  <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Yandex Key</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
                    <p>Check the documentation to learn how to get this key</p>
                    </div>
                    
                </div>
                  
                  <hr class="w-100 mx-auto"/>
                  
                   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Social Media Share </h6>

              <p class="card-text" style="font-size:17px;">Turn the social media share for posts On and Off</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>  
                  
                  
                  <hr class="w-100 mx-auto"/>
                  
                  
                  
                  
                  
                   <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Smart Youtube Player </h6>

              <p class="card-text" style="font-size:17px;">Smart YouTube player will save a lot of bandwidth</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                <hr class="w-100 mx-auto"/>
                  
                  
                  
 <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Max Post Characters</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">5000</label>
</div>
                    <p>The Maximum allowed post characters length (0 for unlimited)</p>
                    </div>
                    
                </div>
                  
                  
                    <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Maximum Comment Characters</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">5000</label>
</div>
                    <p>The Maximum allowed comment characters length (0 for unlimited)</p>
                    </div>
                    
                </div>
                  
                  
                  
                    <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Max Posts/Hour</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">0</label>
</div>
                    <p>The Maximum number of posts that user can publish per hour (0 for unlimited)</p>
                    </div>
                    
                </div>
                  
                  
                    <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Maximum Comments/hour</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">0</label>
</div>
                    <p>The Maximum number of comments that user can publish per hour (0 for unlimited)</p>
                    </div>
                    
                </div>
                  
                  
                  
                  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Default Posts Privacy</h6>
                    </div>
                <div class="col-10">
                    

         <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="public"><b>&nbsp;&nbsp;Public</b>&nbsp;&nbsp;(Anyone can see this post)</option>
    <option value="private"><b>&nbsp;&nbsp;Private</b>&nbsp;&nbsp;(Only Post author friends can see this post)</option>
       <option value="onlyme"><b>&nbsp;&nbsp;Only me</b>&nbsp;&nbsp;(Only Post author can see this post)</option>

  </select>
  <label for="floatingSelect">Select privacy settings</label>
</div>
    </div>
                    
                  </div>
                
                <br>
                  
                  
                  <hr class="w-100 mx-auto"/>
                  
                  
                       <div class="row mx-2">
                <div class="col-10">
                    <h6 class="card-text">Trending Hashtags </h6>

              <p class="card-text" style="font-size:17px;">Turn the trending hashtags feature On and Of</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                  
                  <br>
                  
                                      <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Trending Interval</h6>
                    </div>
                <div class="col-10">
                    

         <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">24 Hours</option>
    <option value="2">Last week</option>
       <option value="3">Last Month</option>

  </select>
  <label for="floatingSelect">Select Trending Time</label>
</div>
<p>Select the interval of trending hashtags</p>
    </div>
                    
                  </div>  
                  
                  
                                      <br>  <div class="row mx-2">
             
             <div class="col-2">
                        <h6>Hashtag Limit</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="5" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    <p>How Many hashtags you want to display</p>
                    </div>
                    
                </div>
                  
                  
    <div class="row mb-5">
        <div class="col-8">
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-save">Save Changes</button> 
        </div>
               
    </div>
                  
              </div>
              
              
                         

          </div>
      </div>
    
      <!-- end sidenav-->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/bolgonalist.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/lineargraph.js"></script>

      <script type="text/javascript" src="https://compuhost.tech/js/donut1.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/donut2.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/barchart.js"></script>
      
      <script type="text/javascript" src="https://compuhost.tech/js/arrow1.js"></script>
                  
      <script type="text/javascript" src="https://compuhost.tech/js/sidebar.js"></script>
   
  </body>
</html>
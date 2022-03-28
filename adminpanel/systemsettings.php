<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>System settings</title>
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
  <div class="row">
      <div class="mt-5 mb-3"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > System</strong></div> 
<br>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header bg-white">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#general" role="tab" aria-controls="description" aria-selected="true"><i class="far fa-list-alt"></i>&nbsp; &nbsp;General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#features" role="tab" aria-controls="history" aria-selected="false"><i class="fas fa-clipboard-list"></i>&nbsp; &nbsp;Features</a>
            </li>
            
          </ul>
        </div>
        <div class="card-body">
          
          
          
           <div class="tab-content mt-3">
            <div class="tab-pane active" id="general" role="tabpanel">
                
            <!-- website Public -->     
                
                <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Website Public </h6>

              <p class="card-text" >Make the website public to allow non logged users to view website content </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                <br>
                
                <!-- website Live -->
                
        <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Website Live </h6>

              <p class="card-text" style="font-size:17px;">Turn the entire website On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <br>
                
                <!-- shutdown message -->
                
         <div class="row">
             
             <div class="col-2">
                        <h6>Shutdown Message</h6>
                    </div>
                <div class="col-10">
                    

              <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">The website is Under Maintenance. We will be back Soon. Thanks for your Patience </label>
</div>
                    <p>The text that is presented when the site is closed</p>
                    </div>
                    
                </div>

 <br>
               
        <!-- website Title -->
         <div class="row">
             
             <div class="col-2">
                        <h6>Website Title</h6>
                    </div>
                <div class="col-10">
                    

              <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Teach You #1 India's no 1 Math, English Online Private  Tutoring at home in Delhi, Noida,Ghaziabad.</label>
</div>
                    <p>Title of your website</p>
                    </div>
                    
                </div>
                
                
 <br>
                <!-- website Description -->
                
         <div class="row">
             
             <div class="col-2">
                        <h6>Website Description</h6>
                    </div>
                <div class="col-10">
                    

              <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Learn from the Best Tutors and Coaching Centers for Online, Home, Tuition, English, Math, and hundreds of other learning categories in Noida, Delhi, Ghaziabad.</label>
</div>
                    <p>Description of your website</p>
                    </div>
                    
                </div>
                
                
                                <br>
                
        <!-- website keywords -->
                
         <div class="row">
             
             <div class="col-2">
                        <h6>Website Keywords</h6>
                    </div>
                <div class="col-10">
                    

              <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2"> </label>
</div>
                    <p>Example: social, sngine, social site</p>
                    </div>
                    
                </div>
                
                                <br>
                
        <!-- website email -->
                
         <div class="row">
             
             <div class="col-2">
                        <h6>Website Email</h6>
                    </div>
                <div class="col-10">
                    

              <div class="form-floating">
   <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
  
</div>
                    <p>The contact email that all messages send to</p>
                    </div>
                    
                </div>
                
                                <br>
<hr class="w-75 mx-auto"/>
                
         <div class="row">
             
             <div class="col-2">
                        <h6>Datetime format</h6>
                    </div>
                <div class="col-10">
                    

         <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
    <option selected>Open this select menu</option>
    <option value="1">m/d/y H:i (example: 05/30/2020) 10:25</option>
    <option value="2">m/d/y H:i (example: 30/02/2020) 10:25</option>
   
  </select>
  
</div>
                    </div>
                    
                </div>
                
                <br>
                
    <div class="row">
        <div class="col-8">
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-save">Save Changes</button> 
        </div>
               
    </div>
              
            </div>
             
            <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Contact Us </h6>

              <p class="card-text" style="font-size:17px;">Turn the contact us page On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                
                               
               <br>
               <hr class="w-80 mx-auto"/>
               <br>
               
               
              
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Directory </h6>

              <p class="card-text" style="font-size:17px;">Enable the directory for better SEO results </p> 
            <p class="card-text" style="font-size:17px;">Make the website public to allow non logged users to view website content</p> 

                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                <hr class="w-75 mx-auto"/>
            
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Pages </h6>

              <p class="card-text" style="font-size:17px;">Users can create pages or only admins/moderators </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
               
               <br>
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Groups </h6>

              <p class="card-text" style="font-size:17px;">Users can create groups or only admins/moderators </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
               
               <br>
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Events </h6>

              <p class="card-text" style="font-size:17px;">Users can create events or only admins/moderators </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Blogs </h6>

              <p class="card-text" style="font-size:17px;">Allow users to create blogs </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">User Can Write Article? </h6>

              <p class="card-text" style="font-size:17px;">Users can write articles or only admins/moderators </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Market </h6>

              <p class="card-text" style="font-size:17px;">Allow users to sell/buy products </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Movies </h6>

              <p class="card-text" style="font-size:17px;">Turn the movies On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Games </h6>

              <p class="card-text" style="font-size:17px;">Turn the games On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
               
                
                <hr class="w-75 mx-auto"/>
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">DayTime Messages </h6>

              <p class="card-text" style="font-size:17px;">Turn the DayTime Messages (Good Morning, Afternoon, Evening) On and Off
 </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
               
               
                <hr class="w-75 mx-auto"/>
                
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Pokes </h6>

              <p class="card-text" style="font-size:17px;">Enable users to poke each others </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Gifts</h6>

              <p class="card-text" style="font-size:17px;">Enable users to send gifts to each others</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
                
                <hr class="w-75 mx-auto"/>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Profile Visit Notification </h6>

              <p class="card-text" style="font-size:17px;">Turn the profile visit notification On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Browser Notifications </h6>

              <p class="card-text" style="font-size:17px;">Turn the browser notifications On and Off</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Noty Notifications </h6>

              <p class="card-text" style="font-size:17px;">Turn the noty notifications On and Off (preview) </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
               
               
                <hr class="w-75 mx-auto"/>
                
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Cookie Consent </h6>

              <p class="card-text" style="font-size:17px;">Turn the cookie consent notification On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
               
               
               
                  <div class="tab-pane" id="features" role="tabpanel" aria-labelledby="history-tab">  
              <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Adblock Detector </h6>

              <p class="card-text" style="font-size:17px;">Turn the Adblock auto detector notification On and Off, (Note: Admin is exception)
Red block message will appear to make user disable adblock from his browser</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div><br>
                
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
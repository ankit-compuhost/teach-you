<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
      
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="https://compuhost.tech/css/admin.css">
    <title>Registration settings</title>
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
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
        <div class="mt-5 mb-3"><strong><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings > Registration</strong></div> 
<br></div>
      <div class="card">
        <div class="card-header bg-white">
          <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#general" role="tab" aria-controls="description" aria-selected="true"><i class="fas fa-sign-in-alt"></i>&nbsp; &nbsp;General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#sociallogin" role="tab" aria-controls="history" aria-selected="false"><i class="fab fa-facebook"></i>&nbsp; &nbsp;Social Login</a>
            </li>
              <li class="nav-item">
              <a class="nav-link"  href="#codes" role="tab" aria-controls="history" aria-selected="false">
                  <i class="fas fa-handshake"></i>&nbsp; &nbsp;Invitation codes</a>
            </li>
            
          </ul>
        </div>
          

        <div class="card-body">
           <div class="tab-content mt-3">
            <div class="tab-pane active" id="general" role="tabpanel">
                
            <!-- website Public -->     
                
                
                
                <br>
                
                 <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Registration Enabled </h6>

              <p class="card-text" style="font-size:17px;">Allow users to create accounts </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
              
                
                <!-- website Live -->
                <br>
                
        <div class="row">
                
                    
            <div class="col-4">
                    <h6 class="card-text">Registration Type </h6>

              
                    </div>
            
            <div class="col-8">
                        <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Free</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Subscription Only</label>
</div>
                <p class="card-text" style="font-size:17px;">Allow users to create accounts Free or via Subscriptions only
Make sure you have configured Pro Packages </p> 
                    </div>
                </div>
                <br>
                <hr class="w-100 mx-auto"/>
                
                
                
                <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Invitation Enabled </h6>

              <p class="card-text" style="font-size:17px;">This option is used to invite users by sending invitation code only by admin if the registration is turned off </p> 
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
                <div class="col-10">
                    <h6 class="card-text">Invite Friends Widget </h6>

              <p class="card-text" style="font-size:17px;">Enable users to invite their friends by sending invitation emails (registration must be enabled) </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                
                <br>  <div class="row">
             
             <div class="col-2">
                        <h6>Invitations/day</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="5" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    <p>Number of invitations allowed to each user per day (0 for unlimited)</p>
                    </div>
                    
                </div>
                  
                
                <hr class="w-100 mx-auto"/>
                
                
                
                 <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Pro Packages Enabled </h6>

              <p class="card-text" style="font-size:17px;">Enable pro packages to be used as upgrading plans or for <br>subscriptions
Make sure you have configured Payments Settings</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>  
                  
                  
  <br>  <div class="row">
             
             <div class="col-2">
                        <h6>Users Can Buy Packages From Wallet Balance</h6>
                    </div>
                <div class="col-10">
                    

<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
                    <p>Enable users to buy packages from their wallet balance<br>
Make sure you have enabled Ads System</p>
                    </div>
                    
                </div>
                  
                  <hr class="w-100 mx-auto"/>
                  
                
                <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Activation Enabled </h6>

              <p class="card-text" style="font-size:17px;">Enable account activation to send activation code to user's email/phone</p> 
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
                
                    
            <div class="col-4">
                    <h6 class="card-text">Registration Type </h6>

              
                    </div>
            
            <div class="col-8">
                        <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Email</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">SMS</label>
</div>
                <p class="card-text" style="font-size:17px;">Select Email or SMS activation to send activation code to user's email/phone
Make sure you have configured SMS Settings</p> 
                    </div>
                </div>
                <br>
                <hr class="w-100 mx-auto"/>
                
                
                
                
                <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Activation Enabled </h6>

              <p class="card-text" style="font-size:17px;">Enable account activation to send activation code to user's email/phone</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
              
                
                <!-- website Live -->
                <br>
                
                
        <div class="row">
                
                    
            <div class="col-4">
                    <h6 class="card-text">Two Factor Authentication Via </h6>

              
                    </div>
            
            <div class="col-8">
                        <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Email</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">SMS</label>
</div>
                <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Google Authenticator</label>
</div>
                <p class="card-text" style="font-size:17px;">Select Email, SMS or Google Authenticator to send log in code to user
Make sure you have configured SMS Settings</p> 
                    </div>
                </div>
                <br>
                <hr class="w-100 mx-auto"/>
                
                
         <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Activation Enabled </h6>

              <p class="card-text" style="font-size:17px;">Enable account activation to send activation code to user's email/phone</p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
             
           <hr class="w-100 mx-auto"/>
                
                
                <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Age Restriction </h6>

              <p class="card-text" style="font-size:17px;">Enable/Disable age restriction </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                
                <br>  <div class="row">
             
             <div class="col-2">
                        <h6>Min Age</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="13" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    <p>The minimum age required to register (in years)</p>
                    </div>
                    
                </div>
                  
                
                <hr class="w-100 mx-auto"/>
                
                
                      
                
                <div class="row">
                <div class="col-10">
                    <h6 class="card-text">Getting Started </h6>

              <p class="card-text" style="font-size:17px;">Enable/Disable getting started page after registration </p> 
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
                <div class="col-10">
                    <h6 class="card-text">Delete Accounts </h6>

              <p class="card-text" style="font-size:17px;">Allow users to delete their account
 </p> 
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
                <div class="col-10">
                    <h6 class="card-text">Download User Information </h6>

              <p class="card-text" style="font-size:17px;">Allow users to download their account information from settings page
 </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                
                                <hr class="w-100 mx-auto"/>
                
                
         <br>  <div class="row">
             
             <div class="col-2">
                        <h6>Max accounts/IP</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="0" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    <p>The Maximum number of accounts allowed to register per IP (0 for unlimited)</p>
                    </div>
                    
                </div>
                  
             
                <hr class="w-100 mx-auto"/>
                
                
        <br>  <div class="row">
             
             <div class="col-2">
                        <h6>Max Friends/User</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="5" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    <p>The Maximum number of friends allowed per User (0 for unlimited)</p>
                    </div>
                    
                </div>
                  
           <div class="row">
        <div class="col-8">
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-save">Save Changes</button> 
        </div>
               
    </div>
                
          </div>
               
               
               <!-- social login -->
               
               
               
            <div class="tab-pane" id="sociallogin" role="tabpanel" aria-labelledby="history-tab">  
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
            
                                     
                                     
               <hr class="w-100 mx-auto"/>
               
               
                 <div class="row">
                     <div class="text-center"><strong>Facebook</strong></div>
                <div class="col-10">
                
          <p class="card-text" style="font-size:17px;"><img src="https://compuhost.tech/images/facebook.png" class="responsive" style="height:60%; width:8%" />&nbsp;&nbsp;Turn registration/login via Facebook On and Off </p> 
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
                        <h6>Facebook App Id</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="998654377323003" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>    
                                     
                                     
        <br>
                                     
        <div class="row">
             
             <div class="col-2">
                        <h6>Facebook App Secret</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="daf8cbc367811e81caca21159ffd4d6d" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>  
                                     
                                     
        <hr class="w-100 mx-auto"/>
                
                                     
                                     
                                     
<!--twitter-->
                <div class="row">
                     <div class="text-center"><strong>Twitter</strong></div>
                <div class="col-10">
                
          <p class="card-text" style="font-size:17px;"><img src="https://compuhost.tech/images/twitter.png" style="height:50%; width:6%"/>&nbsp;&nbsp;Turn registration/login via Twitter On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" >
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                                     
                                     
        <br>
                                     
            <div class="row">
             
             <div class="col-2">
                        <h6>Twitter App Id</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="998654377323003" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>    
                                     
                                     
        <br>
                                     
        <div class="row">
             
             <div class="col-2">
                        <h6>Twitter App Secret</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="daf8cbc367811e81caca21159ffd4d6d" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>  
                                     
                                     
        <hr class="w-100 mx-auto"/>
                
                    <!-- Insta -->
                                     
                            <div class="row">
                     <div class="text-center"><strong>Instagram</strong></div>
                <div class="col-10">
                
          <p class="card-text" style="font-size:17px;"><img src="https://compuhost.tech/images/insta.png" style="height:50%; width:6%"/>&nbsp;&nbsp;Turn registration/login via Instagram On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" >
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                                     
                                     
        <br>
                                     
            <div class="row">
             
             <div class="col-2">
                        <h6>Instagram App Id</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>    
                                     
                                     
        <br>
                                     
        <div class="row">
             
             <div class="col-2">
                        <h6>Instagram App Secret</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>  
                                     
                                     
        <hr class="w-100 mx-auto"/>
                                     
                                     
                                     
                <!-- linked in -->
                                     
                                     
                        <div class="row">
                     <div class="text-center"><strong>Linked In</strong></div>
                <div class="col-10">
                
          <p class="card-text" style="font-size:17px;"><img src="https://compuhost.tech/images/linkedin.png" style="height:45%; width:5%"/>&nbsp;&nbsp;Turn registration/login via Linkedin On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" >
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                                     
                                     
        <br>
                                     
            <div class="row">
             
             <div class="col-2">
                        <h6>Linkedin App Id</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>    
                                     
                                     
        <br>
                                     
        <div class="row">
             
             <div class="col-2">
                        <h6>Linkedin App Secret</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>  
                                     
                                     
        <hr class="w-100 mx-auto"/>
                                     
                                     
                                     
            <!-- vk  -->
                                     
                                <div class="row">
                     <div class="text-center"><strong>Vkontakte</strong></div>
                <div class="col-10">
                
          <p class="card-text" style="font-size:17px;"><img src="https://compuhost.tech/images/vk.png" style="height:50%; width:6%"/>&nbsp;&nbsp;Turn registration/login via Vkontakte On and Off </p> 
                    </div>
                    <div class="col-2">
                        <label class="switch">
                                    <input type="checkbox" >
                                    <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                                     
                                     
        <br>
                                     
            <div class="row">
             
             <div class="col-2">
                        <h6>Vkontakte App Id</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div>    
                                     
                                     
        <br>
                                     
        <div class="row">
             
             <div class="col-2">
                        <h6>Vkontakte App Secret</h6>
                    </div>
                <div class="col-10">
                    

<div class="input-group mb-3">
  
  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
</div>
                    
                    </div>
                    
                </div> 
                                     
                                     
                                                              
                <div class="row">
        <div class="col-8">
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-save">Save Changes</button> 
        </div>
               
    </div>
    
                                     
            </div>
               
               <!-- invitation code-->
                              
            <div class="tab-pane" id="codes" role="tabpanel" aria-labelledby="history-tab"> 
                
<div class="card rounded-pill" style="background-color:#660033; color:#ffffcc;">
  <div class="card-body">
   <i class="fas fa-exclamation-triangle"></i> 	This system is used to invite users if the registration is turned off
  </div>
</div>
                <br><br>
                <div class="row">
                
                <div class="col-3"></div>
                    <div class="col-6 text-center"><button type="button" class="btn btn-code"><i class="far fa-handshake"></i> &nbsp;&nbsp;Generate new code</button> </div>
                <div class="col-3"></div>
                </div>
                <hr class="w-100 mx-auto"/>
                <br>
       <div class="row">        
    <table class="table table-striped">
                
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Invitation Code</th>
      <th scope="col">Valid</th>
      <th scope="col">Created</th>
    <th scope="col">Actions</th>
    </tr>
  </thead>
        <tbody>
    <tr>
      <th scope="row">2</th>
      <td>Yes</td>
      <td>g9KN5GGE</td>
      <td>26 February 2021</td>
        <td> <button type="button" class="btn btn-danger rounded-circle round-buttons"><i class="fas fa-pencil-alt"></i></button>
          <button type="button" class="btn btn-danger rounded-circle round-buttons"><i class="fas fa-trash-alt"></i></button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Yes</td>
      <td>alebvTUA</td>
      <td>26 February 2021</td>
        <td> <button type="button" class="btn btn-danger rounded-circle round-buttons"><i class="fas fa-pencil-alt"></i></button>
          <button type="button" class="btn btn-danger rounded-circle round-buttons"><i class="fas fa-trash-alt"></i></button></td>
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
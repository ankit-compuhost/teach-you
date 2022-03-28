<!-- Custom Styling -->
<style>

.word-btn {
  background-color: #660033;
  border-radius: 19px;
  padding: 12px 34px;
  font-size: 16px;
  font-weight: 500;
}

.word-modal-title {
  font-weight: 600;
}

</style>
<!-- end -->



<div id="sidebar-wrapper" class="pt-2 mt-2 ml-2" style="background-color: #303030; ">
  <div class="card-header sidebar-text text-center " style="background-color: #595959;">
    SYSTEM
  </div>

<div class="accordion" id="accordionExample" >
  <div class="accordion-item">
  <nav class="nav flex-column">
  <a class="ThisClass nav-link active sidebar-text sidebar-custom text-center" aria-current="page" href="admincp.php">
      <i class="fas fa-tachometer-alt "></i>&nbsp;&nbsp;Dashboard</a>
     
  
    <p class="accordion-header" id="headingOne">
      <a class="accordion-button text-center collapse settings" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none;display:block;" id="headingOne">
         <i class="fas fa-cogs"></i>  &nbsp;Settings &nbsp;&nbsp;
          <i id="icon" class="fas fa-angle-down"></i>
      </a>
    </p>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="text-align:left;">
      <div class="accordion-body ">
          
    <li><a href="systemsettings.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne"><i class="fas fa-cogs"></i>&nbsp;System Settings</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="postsettings.php" id="headingOne"><i class="far fa-comment-alt"></i>&nbsp;Posts Settings</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="registrationsettings.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Registration settings</a></li>
          
      <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="emailsettings.php"><i class="fas fa-envelope-open"></i>&nbsp;Email Settings</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="smssettings.php"><i class="fas fa-mobile-alt" ></i>&nbsp;SMS Settings</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="chatsettings.php"><i class="far fa-comment"></i>&nbsp;Chat settings</a></li>
          
      <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="uploadsettings.php"><i class="fas fa-upload"></i>&nbsp;Uploads Settings</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="securitysettings.php"><i class="fas fa-shield-alt"></i>&nbsp;Security Settings</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="paymentsettings.php"><i class="fas fa-credit-card"></i>&nbsp;Payments settings</a></li>
          
      <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="limitsettings.php"><i class="fas fa-tachometer-alt"></i>&nbsp;Limits Settings</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne" href="analyticssettings.php"><i class="fas fa-chart-pie"></i>&nbsp;Analytics Settings</a></li>
      </div>
    </div>
  </nav>
  </div>
 

    





                  <!--Modules-->
     
               
    
  <div class="card-header sidebar-text  text-center" style="background-color: #595959;">
    MODULES
  </div>
        
 <nav class="nav flex-column">
     
     <div class="accordion-item">
     <!-- users accordion -->
     <p class="accordion-header " id="headingTwo">
      <a class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-decoration:none;display:block;" id="headingTwo">
       <i class="fas fa-user"></i>&nbsp;&nbsp;Users &nbsp;&nbsp;
          <i id="icon2" class="fas fa-angle-down"></i>
      </a>
    </p>
     
      <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="background-color:#303030;">
      <div class="accordion-body " >
          
    <li><a href="listusers.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingOne">&nbsp;List Users</a></li>
          
    <li><a href="listadmins.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="postsettings.php" id="headingOne">&nbsp;List Admins</a></li>
          
    <li><a href="listmoderators.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingTwo" href="registrationsettings.php">&nbsp;List Moderators</a></li>
          
      <li><a href="listonline.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingTwo">&nbsp;List Online</a></li>
          
          <li><a href="listbanned.php"class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingTwo">
              &nbsp;List Banned</a></li>
          

      </div>
    </div>
</div>
      

      
     
     
          <div class="accordion-item">
     <p class="accordion-header" id="headingThree">
      <a class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="text-decoration:none;display:block;" id="headingThree">
      <i class="far fa-file-alt"></i>&nbsp;&nbsp;Pages &nbsp;&nbsp;
          <i id="icon3" class="fas fa-angle-down"></i>
      </a>
    </p>
     
      <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="background-color:#303030;">
      <div class="accordion-body " >
          
    <li><a href="listpages.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingThree">&nbsp;List Pages</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="pagecategory.php" id="headingThree">&nbsp;List Categories</a></li>

      </div>
    </div>
</div>
     
     <!-- groups accordion -->
     
               <div class="accordion-item">
     <p class="accordion-header" id="headingFour">
      <a class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="text-decoration:none;display:block;" id="headingFour">
       <i class="fas fa-users"></i>&nbsp;&nbsp;Groups &nbsp;&nbsp;
          <i id="icon4" class="fas fa-angle-down"></i>
      </a>
    </p>
     
      <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample" style="background-color:#303030;">
      <div class="accordion-body " >
          
    <li><a href="listgroups.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingFour">&nbsp;List Groups</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="groupcategory.php" id="headingFour">&nbsp;List Categories</a></li>

      </div>
    </div>
</div>
     
     
     
    <div class="accordion-item">
     <p class="accordion-header" id="headingFive">
      <a class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="text-decoration:none;display:block;" id="headingFive">
       <i class="fas fa-calendar-week"></i>&nbsp;&nbsp;Events &nbsp;&nbsp;
          <i id="icon5" class="fas fa-angle-down"></i>
      </a>
    </p>
     
      <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive" data-bs-parent="#accordionExample" style="background-color:#303030;">
      <div class="accordion-body " >
          
    <li><a href="listevents.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingFive">&nbsp;List Events</a></li>

<li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="listeventcategories.php" id="headingFive">&nbsp;List Categories</a></li>

      </div>
    </div>
</div>
     
     
     

     <div class="accordion-item">
     <p class="accordion-header" id="headingSeven">
      <a class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven" style="text-decoration:none;display:block;" id="headingSeven">
       <i class="fas fa-calendar-week"></i>&nbsp;&nbsp;Articles &nbsp;&nbsp;
          <i id="icon5" class="fas fa-angle-down"></i>
      </a>
    </p>
     
      <div id="collapseSeven" class="accordion-collapse collapse " aria-labelledby="headingSeven" data-bs-parent="#accordionExample" style="background-color:#303030;">
      <div class="accordion-body " >
          
    <li><a href="listarticles.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingSeven">&nbsp;List Articles</a></li>

<li><a href="articlecategory.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="listeventcategories.php" id="headingSeven">&nbsp;List Categories</a></li>

      </div>
    </div>
</div>
     
     
<a href="topics.php" class="ThisClass nav-link active sidebar-text sidebar-custom text-center" aria-current="page" href="#"><i class="fas fa-quote-left"></i>&nbsp;&nbsp;Topics</a>
  
<a href="#!" class="ThisClass nav-link active sidebar-text sidebar-custom text-center" aria-current="page" data-bs-toggle="modal" data-bs-target="#wordModal"><i class="fab fa-wordpress-simple"></i>&nbsp;&nbsp;Word Of The Day</a>
<a class="ThisClass nav-link active navbar-text sidebar-text sidebar-custom" aria-current="page" href="question_day.php"><i class="far fa-question-circle"></i>&nbsp;&nbsp;Question Of The Day</a>
  <a href="whatshappening.php" class="ThisClass nav-link active sidebar-text sidebar-custom text-center" aria-current="page" href="#"><i class="fas fa-question"></i>&nbsp;&nbsp;What's Happening</a>
  <a href="success_stories.php" class="ThisClass nav-link active sidebar-text sidebar-custom text-center" aria-current="page" href="#"><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Success stories</a>
  <a href="trending_news.php" class="ThisClass nav-link active sidebar-text sidebar-custom text-center" aria-current="page" href="#"><i class="far fa-newspaper"></i>&nbsp;&nbsp;Trending news</a>

</nav>


    
    
    
<!-- accordion -->
                 
    
    
    
    
    
    
    
    
    <!--Tools-->
  <div class="card-header sidebar-text  text-center" style="background-color: #595959;">
    TOOLS
  </div>
  <nav class="nav flex-column">
  <a class="ThisClass nav-link active sidebar-text sidebar-custom text-center" aria-current="page" href="#"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;Reports</a>
      
    <a class="ThisClass nav-link active sidebar-text sidebar-custom text-center"  href="#"><i class="fas fa-skull-crossbones"></i>&nbsp;&nbsp;Banned</a>
      
      
      
          <div class="accordion-item">
     <p class="accordion-header" id="headingSix">
      <a class="accordion-button text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" style="text-decoration:none;display:block;" id="headingSix">
       <i class="fas fa-user-check"></i>&nbsp;&nbsp;Verification &nbsp;&nbsp;
          <i id="icon6" class="fas fa-angle-down"></i>
      </a>
    </p>
     
      <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix" data-bs-parent="#accordionExample" style="background-color:#303030;">
      <div class="accordion-body " >
           <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="postsettings.php" id="headingSix">&nbsp;List Requests</a></li>
          
    <li><a href="systemsettings.php" class="dropdown-item navbar-custom navbar-text verticalLine" type="button" id="headingSix">&nbsp;List Verified Users</a></li>
          
    <li><a class="dropdown-item navbar-custom navbar-text verticalLine" type="button" href="postsettings.php" id="headingSix">&nbsp;List Verified Pages</a></li>

      </div>
    </div>
</div>
      
</nav>
   
</div>           
</div>


<!-- Word of the day -->
<div class="modal fade" id="wordModal" tabindex="-1" aria-labelledby="wordModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down modal-fullscreen-md-down">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title word-modal-title">Word of the Day</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="word-modal-form">
          <div class="mb-3">
            <label for="word-title" class="col-form-label">Title</label>
            <input type="text" class="form-control" id="word-title" placeholder="Title">
          </div>
          <div class="mb-3">
            <label for="word-des-text" class="col-form-label">Description</label>
            <textarea class="form-control" id="word-des-text"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger word-btn" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger word-btn" id="modal-update-btn">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
var exampleModal = document.getElementById('wordModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
});

document.getElementById('modal-update-btn').addEventListener('click', function(){
  alert("Word of the Day Updated successfully!");
  document.getElementById('word-modal-form').submit();
});
</script>

<!-- End: Word of the day -->
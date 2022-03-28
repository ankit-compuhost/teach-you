<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Getting Started</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://compuhost.tech/css/styles.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>
<body class="page-body-content">
      
<!-- header nav bar -->
<?php include("header.php"); ?>

<!-- Page Content -->
<div class="d-flex flex-column justify-content-center align-items-center">
    <div id="getting-started-header-div" class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="getting-started-title mt-5">Getting Started</h2>
        <p>This information will let us know more about you</p>
    </div>
    <div id="getting-started-info-card">
        <div id="getting-started-btn-panel">
            <a id="step-1-btn" class="step-1-btn active-step-btn btn col-lg-3">
                <h4 class="step-1-btn-heading">Step 1</h4>
                Upload your photo
            </a>
            <a id="step-2-btn" class="step-1-btn btn col-lg-3">
                <h4 class="step-1-btn-heading">Step 2</h4>
                Update your info
            </a>
            <a id="step-3-btn" class="step-1-btn btn col-lg-3">
                <h4 class="step-1-btn-heading">Step 3</h4>
                Add Friends
            </a>
        </div>
        <div id="getting-started-form">
            <form id="step-1-form" method="post" action="getting-started.php">
                <span class="getting-satrted-form-heading">Welcome User</span>
                <p class="mb-4 getting-satrted-form-des">Let's start with your photo</p>
                <div class="page-profile-img-border getting-started-form-img-border">
                    <img id="page-profile-img" class="page-profile-img getting-started-form-img" src="images/blank-profile-pic.png" alt="profile-img">
                    <label for="getting-started-img-upload">
                        <i class="fas fa-camera getting-started-cam"></i>
                    </label>
                    <input id="getting-started-img-upload" type="file" class="getting-started-cam-input" />
                </div>
            </form>
            <form id="step-2-form" method="post" action="getting-started.php" class="hide-form">
                <span class="getting-satrted-form-heading">Update your info</span>
                <p class="mb-4 getting-satrted-form-des">Share your information with our community</p>
                <div class="getting-started-other-info">
                    <span class="getting-started-other-info-title mb-4">OTHER INFORMATION</span>
                    <br />
                    <label class="form-label getting-started-other-info-input-label">Contact Number</label>
                    <input type="text" class="form-control getting-started-other-info-input mb-5" />
                </div>
                <div class="getting-started-other-info">
                    <span class="getting-started-other-info-title mb-4">LOCATION</span>
                    <br />
                    <label class="form-label getting-started-other-info-input-label">Country</label>
                    <select class="form-select getting-started-location-dropdown mb-3">
                        <option selected>Select Country</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                    </select>
                    <label class="form-label getting-started-other-info-input-label">Current City</label>
                    <label class="form-label getting-started-other-info-input-label hometown-label">Hometown</label>
                    <br />
                    <input type="text" class="form-control getting-started-location-input mb-5" />
                    <input type="text" class="form-control getting-started-location-input mb-5" />
                </div>
                <div>
                    <button id="getting-started-save-changes-btn" class="btn btn-danger next-step-btn mt-2">
                        <i class="fas fa-check-circle"></i>
                        Save Changes
                    </button>
                </div>
            </form>
            <div id="step-3-form" class="hide-form">
                <span class="getting-satrted-form-heading">Add Friends</span>
                <p class="mb-4 getting-satrted-form-des">Get latest activities from our popular users</p>
                <div class="getting-started-friends-list mt-4">
                    <div class="col-lg-3 page-card friends-card-1 getting-started-friends-card mb-4">
					    <a href="#!" class="page-card-header">
						    <img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="profile-img">
						    <br />
						    <span class="page-card-title">Mayank Wadhwa</span>
					    </a>
					    <div>
						    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-plus"></i>&nbsp;Add Friend</a>
					    </div>
				    </div>
                    <div class="col-lg-3 page-card friends-card-1 getting-started-friends-card mb-4">
					    <a href="#!" class="page-card-header">
						    <img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="profile-img">
						    <br />
						    <span class="page-card-title">Mayank Wadhwa</span>
					    </a>
					    <div>
						    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-plus"></i>&nbsp;Add Friend</a>
					    </div>
				    </div>
                    <div class="col-lg-3 page-card friends-card-1 getting-started-friends-card mb-4">
					    <a href="#!" class="page-card-header">
						    <img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="profile-img">
						    <br />
						    <span class="page-card-title">Mayank Wadhwa</span>
					    </a>
					    <div>
						    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-plus"></i>&nbsp;Add Friend</a>
					    </div>
				    </div>
                    <div class="col-lg-3 page-card friends-card-1 getting-started-friends-card mb-4">
					    <a href="#!" class="page-card-header">
						    <img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="profile-img">
						    <br />
						    <span class="page-card-title">Mayank Wadhwa</span>
					    </a>
					    <div>
						    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-plus"></i>&nbsp;Add Friend</a>
					    </div>
				    </div>
                    <div class="col-lg-3 page-card friends-card-1 getting-started-friends-card mb-4">
					    <a href="#!" class="page-card-header">
						    <img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="profile-img">
						    <br />
						    <span class="page-card-title">Mayank Wadhwa</span>
					    </a>
					    <div>
						    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-plus"></i>&nbsp;Add Friend</a>
					    </div>
				    </div>
                    <div class="col-lg-3 page-card friends-card-1 getting-started-friends-card mb-4">
					    <a href="#!" class="page-card-header">
						    <img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="profile-img">
						    <br />
						    <span class="page-card-title">Mayank Wadhwa</span>
					    </a>
					    <div>
						    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-plus"></i>&nbsp;Add Friend</a>
					    </div>
				    </div>
                </div>
                <div>
                    <button id="step-3-finish-btn" class="btn btn-danger next-step-btn mt-2">
                        <i class="fas fa-check-circle"></i>
                        Finish
                    </button>
                </div>
            </div>
        </div>
        <div>
            <button id="next-step-btn" class="btn btn-danger next-step-btn mt-2">
                Next Step
                <i class="fas fa-arrow-circle-right"></i>
            </button>
        </div>
    </div>
</div>

<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://compuhost.tech/js/tooltip.js"></script>
<script src="https://compuhost.tech/js/app.js"></script>

</body>
</html>
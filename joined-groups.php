<?php
include("include/functions.php");
include("include/nodirect-access.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Joined Groups</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  	<link rel="stylesheet" href="https://compuhost.co.in/teachyou/css/styles.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>
<body class="page-body-content">
      
<!-- header nav bar -->
<?php include("header.php"); ?>
<br>
<br>
<!-- end header navbar -->
<!-- sidenav -->
<div id="wrapper" >
	<!-- Sidebar -->
    <div id="sidebar-wrapper" class="" style="background-color: #303030; text-align: left; font-family: Arial, sans-serif;">
      <?php include("sidebar.php"); ?>           
  </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row"><div class="mt-3 mb-3"></div> 
			<br />
		</div> 
      	<div class="card page-main-content" style="border: none">
			<ul class="nav">
  				<li class="nav-item">
    				<a class="nav-link nav-link-tab" href="groups.php">Groups</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link active-tab nav-link-tab" href="joined-groups.php">Joined Groups</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link nav-link-tab" href="my-groups.php">My Groups</a>
  				</li>
			</ul>
			<div>
				<a href="#!" type="button" class="btn btn-danger text-center create-page-btn create-grp-btn" aria-current="page" data-bs-toggle="modal" data-bs-target="#pageModal" data-bs-placement="top"><i class="fas fa-plus-circle"></i>&nbsp;Create Group</a>
			</div>
			<br />
			<div class="container">
				<div class="row mobile-page-row-view" data-aos="fade-left" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="400">
					<div class="col-lg-3 page-card mb-4">
						<a href="single-group.php" class="page-card-header">
							<img class="page-card-img mb-4" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Digital Marketing</span>
						</a>
						<br />
						<div>
							<a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-check"></i>&nbsp;Joined</a>
						</div>
					</div>
          <div class="col-lg-3 page-card mb-4">
						<a href="single-group.php" class="page-card-header">
							<img class="page-card-img mb-4" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Best Friends</span>
						</a>
						<br />
						<div>
							<a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-check"></i>&nbsp;Joined</a>
						</div>
					</div>
          <div class="col-lg-3 page-card mb-4">
						<a href="single-group.php" class="page-card-header">
							<img class="page-card-img mb-4" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Marvel Memes</span>
						</a>
						<br />
						<div>
							<a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-3" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-check"></i>&nbsp;Joined</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Create New Group Modal -->
<div class="modal fade" id="pageModal" tabindex="-1" aria-labelledby="pageModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
        		<h4 class="modal-title page-modal-title">Create New Group</h4>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        		<form>
          			<div class="mb-3">
            			<label for="page-name" class="col-form-label">Name Your Group</label>
            			<input type="text" class="form-control" id="page-name">
          			</div>
                <div class="mb-3">
            			<label for="page-cat" class="col-form-label">Select Privacy</label>
						      <select id="page-cat" class="form-select group-modal-privacy-menu" aria-label="Default select example">
  							    <option selected value="public">&#xf0ac; Public Group</option>
                    <option value="closed">&#xf13e; Closed Group</option>
                    <option value="secret">&#xf023; Secret Group</option>
						      </select>
          			</div>
					<div class="mb-3">
            			<label for="page-cat" class="col-form-label">Category</label>
						<select id="page-cat" class="form-select" aria-label="Default select example">
  							<option selected>Select Category</option>
  							<option value="Tutor">Tutor</option>
  							<option value="Play School">Play School</option>
  							<option value="School">School</option>
							<option value="College">College</option>
							<option value="Global College">Global College</option>
							<option value="Language">Language</option>
						</select>
          			</div>
          			<div class="mb-3">
            			<label for="page-summary" class="col-form-label">Summary</label>
            			<textarea class="form-control" id="page-summary"></textarea>
          			</div>
          			<div class="modal-footer">
            			<button type="button" class="btn btn-outline-dark page-modal-btn" data-bs-dismiss="modal">Cancel</button>
            			<button type="button" class="btn btn-outline-dark page-modal-btn">Submit</button>
          			</div>
        		</form>
      		</div>
    	</div>
  	</div>
</div>

<script>
var exampleModal = document.getElementById('pageModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
});
</script>

<!-- End: Group Modal -->
    

<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://compuhost.co.in/teachyou/js/tooltip.js"></script>                  
<script type="text/javascript" src="https://compuhost.co.in/teachyou/js/sidebar.js"></script>

</body>
</html>
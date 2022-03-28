<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Friend Requests</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  	<link rel="stylesheet" href="https://shopbooksnow.online/css/styles.css">
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
		<div class="row"><div class="mb-3"></div> 
			<br />
		</div> 
      	<div class="card page-main-content" style="border: none">
			<ul class="nav">
  				<li class="nav-item">
    				<a class="nav-link nav-link-tab" href="friends-youmayknow.php">You May Know</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link nav-link-tab" href="friends.php">Friends</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link active-tab nav-link-tab" href="friend-requests.php">Friend Requests</a>
  				</li>
			</ul>
			<br />
			<div class="container">
				<div class="row mobile-page-row-view mt-4" data-aos="fade-left" data-aos-offset="500" data-aos-duration="700">
					<div class="col-lg-3 page-card friends-card-1 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Mayank Wadhwa</span>
                            <br />
                            <i class="friends-card-profession-info"><span class="friends-card-brackets">[</span> Partner <span class="friends-card-brackets">]</span></i>
						</a>
						<div>
							<a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
                    <div class="col-lg-3 page-card friends-card-2 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">ABHAY SHANKAR</span>
						</a>
						<div>
                            <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
					<div class="col-lg-3 page-card friends-card-2 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Ritika Prakash</span>
						</a>
						<div>
                            <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
					<div class="col-lg-3 page-card friends-card-2 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Vikas Jain</span>
						</a>
						<div>
                            <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
					<div class="col-lg-3 page-card friends-card-2 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Yatharth Tripathi</span>
						</a>
						<div>
                            <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
					<div class="col-lg-3 page-card friends-card-2 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Ritika Nagpal</span>
						</a>
						<div>
                            <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
					<div class="col-lg-3 page-card friends-card-2 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Vikas Jain</span>
						</a>
						<div>
                            <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
					<div class="col-lg-3 page-card friends-card-1 mb-4">
						<a href="#!" class="page-card-header">
							<img class="page-card-img friends-card-img" src="images/page-sample-img.png" alt="page-img">
							<br />
							<span class="page-card-title">Gagan Verma</span>
                            <br />
                            <i class="friends-card-profession-info"><span class="friends-card-brackets">[</span> Accounts Teacher <span class="friends-card-brackets">]</span></i>
						</a>
						<div>
                            <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn mt-2" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-friends"></i>&nbsp;Accept</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
	AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://shopbooksnow.online/js/tooltip.js"></script>                  
<script type="text/javascript" src="https://shopbooksnow.online/js/sidebar.js"></script>

</body>
</html>
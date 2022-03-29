<?php
$page = pathinfo(__FILE__, PATHINFO_FILENAME);
include("include/functions.php");
include('controllers/' . $page . '.php');
include("include/nodirect-access.php");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Group</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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

<div class="mobile-article">
  <div id="wrapper" class="mt-5">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="" style="background-color: #303030; text-align: left; font-family: Arial, sans-serif;">
      <?php include("sidebar.php"); ?>           
    </div>
    <!-- /#sidebar-wrapper -->
  </div>
</div>

<!-- Main Page Content -->
<div id="page-content-wrapper ">
<div class="container-fluid ">
<div id="page-profile-info" class="grp-profile-info">
    <div class="page-profile-img-border">
        <img id="page-profile-img" class="page-profile-img" src="<?= $group['group_picture']; ?>" alt="<?= $group['group_title']; ?>">
    </div>
    <a href="single-group.php" class="page-profile-title"><?= $group['group_title']; ?></a>
    <br />
    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn page-profile-appreciate-btn grp-profile-appreciate-btn mt-1" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-user-plus"></i>&nbsp;<?= empty($isGroup) ? 'Join' : 'Joined'; ?></a>
    <br />
    <a href="#!" type="button" class="btn btn-danger text-center page-appreciate-btn page-profile-flag-btn grp-profile-flag-btn mt-4" data-bs-toggle="tooltip" data-bs-placement="top"><i class="fas fa-flag"></i></a>
</div>

<!-- ********************* -->

<!-- ********************* -->

<div id="page-profile-summary-section" class="group-profile-summary-section">
    <span class="page-profile-summary-title group-profile-summary-title">Summary</span>
    <div id="page-profile-summary-des-section" class="group-profile-summary-des-section">
        <span class="page-profile-summary-des">
            <?= $group['group_description']; ?>
        </span>
    </div>
    <span class="page-profile-summary-footer"><i class="fas fa-globe"></i>&nbsp;&nbsp;<?= ucfirst($group['group_privacy']); ?></span>
    <br />
    <span class="page-profile-summary-footer"><i class="fas fa-users"></i></span>
    <a href="#!" class="page-profile-summary-admin"><?= $totalMembers['total']; ?> Members</a>
    <br />
    <span class="page-profile-summary-footer"><i class="fas fa-tag"></i>&nbsp;&nbsp;<?= $category['category_name']; ?></span>
    <br />
    <span class="page-profile-summary-footer"><i class="fas fa-user"></i>&nbsp;&nbsp;Created By</span>
    <a href="#!" class="page-profile-summary-admin"><?= $user['user_firstname'].' '.$user['user_lastname'] ?></a>
    <br />
    <hr>
    <span class="page-profile-summary-footer group-profile-summary-images"><i class="fas fa-images"></i></span>
    <a href="#!" class="page-profile-summary-admin group-profile-summary-images">Photos</a>
    <br />
    <img id="page-profile-img-2" class="page-profile-img group-profile-summary-img mt-3 mb-2" src="images/page-sample-img.png" alt="group-img">
</div>
</div>
</div>



<!-- Image Modal -->
<div id="page-profile-img-modal" class="page-profile-img-modal">
  <span class="page-profile-img-close">&times;</span>
  <img class="page-profile-img-modal-content" id="page-profile-img-img01">
</div>

<!-- Image Modal Script -->
<script>
var modal = document.getElementById("page-profile-img-modal");
var img = document.getElementById("page-profile-img");
var img_2 = document.getElementById("page-profile-img-2");
var modalImg = document.getElementById("page-profile-img-img01");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}
img_2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}
var span = document.getElementsByClassName("page-profile-img-close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});
</script>
<!-- End Image Modal -->

<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://shopbooksnow.online/js/tooltip.js"></script>
<script type="text/javascript" src="https://shopbooksnow.online/js/sidebar.js"></script>

</body>
</html>
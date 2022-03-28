<?php
$page = pathinfo(__FILE__, PATHINFO_FILENAME);
include("include/functions.php");
include('controllers/' . $page . '.php');
include("include/nodirect-access.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://shopbooksnow.online/css/styles.css">
    <title>New Article!</title>
    <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://shopbooksnow.online/js/photo_upload.js"></script>
    <script src="https://cdn.tiny.cloud/1/s3mi8l1wk3jqpk0n883srq2vu7e4qch8jdu318nltbv2jm29/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
    <script type="text/javascript" src="js/tinymce_init.js"></script>


</head>


<body>

<!-- header nav bar -->
<?php include("header.php"); ?>
<br>
<br>
<!-- end header navbar -->
<!-- sidenav -->
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class=""
         style="background-color: #303030; text-align: left; font-family: Arial, sans-serif;">
        <?php include("sidebar.php"); ?>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper ">
        <div class="container-fluid">
            <div class="row">
                <div class=" "></div>
                <br></div>
            <div class="row mt-3">
                <p><i class="fas fa-edit"></i> &nbsp; <b>New Article</b>
                    <button class="btn btn-danger rounded-pill desk-back" style="float:right;"><i
                                class="fas fa-arrow-circle-left"></i> &nbsp; Go back
                    </button>
                    <button class="btn btn-danger rounded-pill mob-back" style="float:right;"><i
                                class="fas fa-arrow-circle-left"></i></button>


                </p>
            </div>
            <div class="card mt-3">
                <?= $success; ?>
                <?= $error; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="token" value="<?= !empty($_SESSION['token']) ? $_SESSION['token'] : ""; ?>">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-2"><b>Name</b></div>
                            <div class="col-10"><input type="text" class="form-control" name="title" placeholder="Enter Name" id="" value="<?= !empty($error) ? $_POST['title'] : ""; ?>" ></div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-2"><b>Content</b></div>
                            <div class="col-10">
                                <textarea id="mytextarea" name="text"  ><?= !empty($error) ? $_POST['text'] : ""; ?></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-2"><b>Cover Photo</b></div>
                            <div class="col-10">
                                <div class="image-upload-container">
                                    <div class="image-upload-one">
                                        <div class="center">
                                            <div class="form-input">
                                                <label for="file-ip-1">
                                                    <img id="file-ip-1-preview" src="images/camera1.png">
                                                    <button type="button" class="imgRemove"
                                                            onclick="myImgRemove(1)"></button>
                                                </label>
                                                <input  type="file" name="cover" id="file-ip-1" accept="image/*"
                                                       onchange="showPreview(event, 1);">
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
                                    <select class="form-control" name="category_id" >
                                        <option>Select Category</option>
                                        <?php
                                        foreach ($blogCategories as $val) {
                                            ?>
                                            <option <?= !empty($error) ? ($_POST['category_id'] == $val['category_id'] ? 'selected="selected"' : "")  : ""; ?> value="<?= $val['category_id']; ?>"><?= $val['category_name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">


                            <div class="col-6 text-center"></div>
                            <div class="col-6">
                                <button type="button" class="btn del btn-code"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Delete
                                    Article
                                </button>
                                <input type="submit" name="submit" class="btn save btn-save" value="Save Changes" >
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- end sidenav-->


<!-- Optional JavaScript; choose one of the two! -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tinymce.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tinymce_init.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tooltip.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/bolgonalist.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/sidebar.js"></script>

</body>
</html>
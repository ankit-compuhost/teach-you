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
    <title>Individual Article</title>
    <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


</head>


<body>

<!-- header nav bar -->
<?php include("header.php"); ?>
<br>


<div class="desktop-article">
    <div class="container-fluid ">
        <div class="row mt-5">
            <div class="col-3 text-center side-info mt-3">
                <div>
                    <img src="<?= checkProfilePic(!empty($currentUser['user_picture']) ? $currentUser['user_picture'] : null); ?>"
                         alt="Avatar"
                         style="border-radius: 50%; width:30%; height:70%;"></div>
                <br>
                <p><strong><?= $user['user_firstname'] . ' ' . $user['user_lastname']; ?></strong></p>
                <div>
                    <?php
                    if ($_SESSION['user_id'] == $user['user_id']) {
                        ?>
                        <a href="<?= base_url("edit-article/" . $article['slug'] . ".php"); ?>"
                           class="btn border-none btn-ede"><i class="fas fa-edit"> </i>Edit</a>
                        <button class="btn border-none btn-ede"
                                onclick="window.location='<?= base_url("article/" . $article['slug'] . ".php?post_id=" . $article['post_id']) ?>'">
                            <i class="fas fa-trash"></i></button>
                    <?php } ?>
                    <button class="btn border-none btn-ede"><i class="fas fa-eye">&nbsp;<?= $article['views']; ?></i>
                    </button>
                </div>
            </div>
            <div class="col-6 ">
                <div class="container-fluid  mb-3 shadow p-3  rounded article-color" style="backgrond-color: #e6e6e6;">
                    <div class="mt-2  mb-3"><h5><?= $article['title']; ?></h5></div>
                    <div class="text-center">
                        <img src="<?= SITE_URL . $article['cover']; ?>" alt="<?= $article['title']; ?>"
                             style="width: 100%; height:20rem; align:center"></div>


                    <p style="font-size: 15px;" class="mt-3"><?= $article['text']; ?></p>
                    <div>
                        <button type="button" class="btn  btn-star"><i class="far fa-star"> <?= $post['likes']; ?></i>
                        </button>
                        <button type="button" class="btn  btn-star"><i
                                    class="far fa-comment"> <?= $post['comments']; ?></i></button>
                        <button type="button" class="btn  btn-star"><i
                                    class="far fa-share-square"> <?= $post['shares']; ?></i></button>
                    </div>

                </div>
                <div class="row ml-4">
                    <div class="col-1">
                        <img src="images/blank-profile.jpg"
                             style="border-radius: 50%; width:2rem; height:2rem; float:right; right:10;"></div>
                    <div class="col-11 " style="">
                        <div style="float:left; margin-left:-4px; font-size: 13px;"><b>Yash Jaiswal</b>
                            <br>hello
                            <p style="font-size:10px;">8 weeks ago</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-3 mt-2 mx-auto" style="width:25%;">
                STUDY MORE
                <hr class="w-100"/>
                <div class="text-center">
                    <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                    <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                        #EducationPower</p>

                </div>

                <div class="text-center">
                    <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                    <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                        #EducationPower</p>

                </div>

                <div class="text-center">
                    <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                    <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                        #EducationPower</p>

                </div>

                <div class="text-center">
                    <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                    <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                        #EducationPower</p>

                </div>

                <div class="text-center">
                    <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                    <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                        #EducationPower</p>

                </div>
            </div>

        </div>

    </div>

</div>

<div class="mobile-article">

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
            <div class="container-fluid ">
                <div class="row mt-3">
                    <div class="col-3  mt-5">
                        <div><img src="https://shopbooksnow.online/images/blank-profile.jpg" class="article-ind-image"
                                  alt="Avatar" style="border-radius: 50%; width:30%; height:70%;"></div>
                        <br>
                        <div class="col-sm-12 ind-article-name text-center"><strong>YashJaiswal</strong></div>

                        <div class="btn-group">
                            <a href="editarticle.php" class="btn border-none btn-ede" style="width:50%"><i
                                        class="fas fa-edit"> </i> &nbsp;Edit</a>
                            <button class="btn border-none btn-ede"><i class="fas fa-trash"></i></button>
                            <button class="btn border-none btn-ede"><i class="fas fa-eye">&nbsp;19</i></button>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="container-fluid  mb-3 shadow p-3  rounded article-color"
                             style="backgrond-color: #e6e6e6;">
                            <div class="mt-2  mb-3"><h5>Demo1</h5></div>
                            <div class="text-center">
                                <img src="images/afro.jpg" alt="demo1" style="width: 100%; height:10rem; align:center">
                            </div>


                            <p style="font-size: 15px;" class="mt-3">Demo1</p>
                            <div>
                                <button type="button" class="btn  btn-star"><i class="far fa-star"> 1</i></button>
                                <button type="button" class="btn  btn-star"><i class="far fa-comment"> 1</i></button>
                                <button type="button" class="btn  btn-star"><i class="far fa-share-square">2</i>
                                </button>
                            </div>

                        </div>
                        <div class="row ml-4">
                            <div class="col-1">
                                <img src="images/blank-profile.jpg"
                                     style="border-radius: 50%; width:2rem; height:2rem; margin-left: 5px ;"></div>
                            <div class="col-11 " style="">
                                <div style="float:left; margin-left:20px; font-size: 13px;"><b>Yash Jaiswal</b>
                                    <br>hello
                                    <p style="font-size:10px;">8 weeks ago</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-3 mt-2 mx-auto" style="width:100%;">
                        STUDY MORE
                        <hr class="w-100"/>
                        <div class="text-center">
                            <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                            <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                                #EducationPower</p>

                        </div>

                        <div class="text-center">
                            <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                            <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                                #EducationPower</p>

                        </div>

                        <div class="text-center">
                            <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                            <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                                #EducationPower</p>

                        </div>

                        <div class="text-center">
                            <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                            <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                                #EducationPower</p>

                        </div>

                        <div class="text-center">
                            <img src="images/coding.jpg" class="study_more_articles mb-1"/>
                            <p style="font-size:12px;"><b>Goddess Of Learning and Knowledge</b><br>
                                #EducationPower</p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- end sidenav-->


<!-- Optional JavaScript; choose one of the two! -->


<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="js/tinymce.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tooltip.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/bolgonalist.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/sidebar.js"></script>

</body>
</html>
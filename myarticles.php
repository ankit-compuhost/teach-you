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
    <title> My Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="https://shopbooksnow.online/css/styles.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


</head>
<body style="background-color: #F0F0F0;">

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
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row ">
                <br/>
            </div>
            <div class="card page-main-content article-card " style="border:none;">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link  nav-link-tab" href="article.php">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active-tab nav-link-tab" href="myarticles.php">My Articles</a>
                    </li>
                </ul>
                <div>
                    <a href="newarticle.php" type="button"
                       class="btn btn-danger text-center create-article-btn desk-back"><i
                                class="fas fa-plus-circle"></i>&nbsp;Create Article</a>
                    <a href="newarticle.php" type="button"
                       class="btn btn-danger text-center create-article-btn mob-back"><i class="fas fa-plus-circle"></i></a>
                </div>
                <br/>
                <div class="container">
                    <div class="row ">
                        <?php
                        if (!empty($allArticle)) {
                            foreach ($allArticle as $val) {
                                $post = getArticleById($val['post_id']);
                                $user = !empty($post['user_id']) ? getUserFullNameById($post['user_id']) : "";
                                ?>
                                <div class="col-4 article-card" data-aos="fade-up">
                                    <div class="card article-color shadow p-3 mb-5 rounded">
                                        <div class="card-body ">
                                            <div class="dropdown dropstart ">
                                                <a class="btn btn-dots" type="button" id="dropdownMenuButton1"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <ul class="dropdown-menu drop-font"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="editarticle.php"><i
                                                                    class="fas fa-pencil-alt"></i> &nbsp;Edit Article
                                                        </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                    class="fas fa-trash-alt"></i>&nbsp;Delete
                                                            Post</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                    class="fas fa-comment-slash"></i>&nbsp;Turn
                                                            Off Say Something</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fas fa-link"></i>&nbsp;Open
                                                            post in new tab</a></li>

                                                </ul>
                                            </div>
                                            <div class="text-center">
                                                <img src="<?= checkProfilePic(!empty($user['user_picture']) ? $user['user_picture'] : null); ?>"
                                                     alt="Avatar"
                                                     class="article-card-image"
                                                     style="border-radius: 50%; width:20%; height:20%;">
                                                <br>
                                                <p style="font-size: 15px;"><strong><a href="#" style="text-decoration: none; color:black;"><?= !empty($user['user_firstname']) ? $user['user_firstname'] . ' ' . $user['user_lastname'] : ""; ?></a></strong> - added a new article <i
                                                            class="fas fa-globe"></i></p>
                                                <img src="<?= $val['cover']; ?>"
                                                     alt="Avatar"
                                                     style=" width:90%; height:9rem;">
                                                <br><br>
                                                <p style="font-size: 15px;"><b>
                                                <a href="article/<?= $val['slug'].".php"; ?>" ><?= $val['title']; ?></a>
                                                </b></p>
                                                <p style="font-size: 15px;">
                                                    <?php
                                                    $desc = strip_tags($val['text']);
                                                    $short_text = substr($desc, 0, 100);
                                                    echo strip_tags(html_entity_decode($short_text));
                                                    ?>
                                                </p>
                                            </div>
                                            <button type="button" class="btn  btn-star"><i class="far fa-star"> <?= !empty($post['likes']) ? $post['likes'] : 0; ?></i>
                                            </button>
                                            <button type="button" class="btn  btn-star"><i class="far fa-comment"> <?= !empty($post['comments']) ? $post['comments'] : 0; ?></i>
                                            </button>
                                            <button type="button" class="btn  btn-star"><i class="far fa-share-square"> <?= !empty($post['shares']) ? $post['shares'] : 0; ?></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "You've not posted any article yet.";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="https://shopbooksnow.online/js/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tooltip.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/bolgonalist.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/sidebar.js"></script>

</body>
</html>
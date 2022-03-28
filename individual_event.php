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
    <title>Individual Event</title>
    <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


</head>


<body>

<!-- header nav bar -->
<?php include("header.php"); ?>


<div class="desktop-article">

    <div class="container ">

        <div class="row mt-5">

            <div class="row mt-5">
                <div class="col-1 rounded-3  date ">
                    <div class="my-2"><b><?= date("M", strtotime($event['event_start_date'])) ?>
                            <br><?= date("d", strtotime($event['event_start_date'])) ?></b></div>
                </div>
                <div class="col-11 ">
                    <div class="event-heading"><strong><?= $event['event_title']; ?></strong></div>
                    <div>
                        <i class="fas fa-clock"></i>&nbsp;<?= date("M d h:i a", strtotime($event['event_start_date'])) ?>
                        to <?= date("M d h:i a", strtotime($event['event_end_date'])) ?></div>
                </div>
            </div>

        </div>
        <br><br>
        <div class="row mb-5">
            <div class="col-8">

                <div class="parent">
                    <img src="<?= base_url($event['event_cover']); ?>"></div>
                <br><br>
                <div class="card shadow article-color">
                    <div class="card-body">
                        <div><img src="https://shopbooksnow.online/images/blank-profile.jpg" alt="Avatar"
                                  style="border-radius: 50%; width:3%; height:8%;"> &nbsp;&nbsp;<span
                                    class="text-muted">What’s Going On...  #Hashtag @Memories @Video(MP4 File Format)</span>
                        </div>
                        <div class="btn btn-danger rounded-pill btn-post">Post</div>
                    </div>
                </div>

                <br>

                <div class="card shadow article-color">
                    <div class="card-body">
                        <div class="dropdown dropstart ">
                            <a class="btn btn-dots" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu drop-font" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="editarticle.php"><i class="fas fa-thumbtack"></i>
                                        &nbsp;Pin Post</a></li>
                                <li><a class="dropdown-item" href="editarticle.php"><i class="fas fa-pencil-alt"></i>
                                        &nbsp;Edit Article </a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>&nbsp;Delete Post</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-comment-slash"></i>&nbsp;Turn Off
                                        Say Something</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-link"></i>&nbsp;Open post in new
                                        tab</a></li>

                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-1">

                                <img src="https://shopbooksnow.online/images/blank-profile.jpg" alt="Avatar"
                                     style="border-radius: 50%; width:130%; height:70%;"> &nbsp;&nbsp;
                            </div>

                            <div class="col-11">
                                <span><b>Teach You</b></span>
                                <br><span class="text-muted" style="font-size:13px;">updated event cover &nbsp; <i
                                            class="fas fa-calendar"></i>&nbsp;International Yoga Festival - <i
                                            class="fas fa-cog"></i></span>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="http://compuhost.tech/images/int%20edu%20fair.jpg"
                                 style="width:70%; height:250px;"/>
                        </div>

                        <div>
                            <button type="button" class="btn  btn-star"><i class="far fa-star"> 1</i></button>
                            <button type="button" class="btn  btn-star"><i class="far fa-comment"> 1</i></button>
                            <button type="button" class="btn  btn-star"><i class="far fa-share-square"></i></button>
                        </div>
                    </div>
                </div>
                <div>

                </div>

            </div>


            <div class="col-4 mx-auto">
                &nbsp;&nbsp; Summary
                <hr class="w-100 mx-auto"/>
                <p class="text-center" style="font-size:12px;"><?= $event['event_description']; ?></p>
                <hr class="w-100 mx-auto"/>
                <div><p style="font-size:14px;"><i class="fas fa-clock"></i>&nbsp;&nbsp;<b><?= date("M d", strtotime($event['event_start_date'])) ?> - <?= date("M d", strtotime($event['event_end_date'])) ?></b><br>
                        <span style="font-size:11px;">&nbsp;&nbsp;<?= date("M d h:i a", strtotime($event['event_start_date'])) ?> to <?= date("M d h:i a", strtotime($event['event_end_date'])) ?></span></p></div>
                <div><b><i class="fas fa-user"></i> &nbsp;&nbsp; Posted By Teach You</b></div>
                <div><b><i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp; <?= $event['event_location']; ?></b></div>
                <hr class="w-100 mx-auto"/>
                <div style="font-size:14px;"><b><i class="fas fa-user"></i> &nbsp;&nbsp; <?= $isInterested['total']; ?> Interested</b></div>
                <div style="font-size:14px;"><b><i class="fas fa-hand-paper"></i> &nbsp;&nbsp; <?= $isGoing['total']; ?> Going</b></div>
            </div>
        </div>
    </div>
</div>


<!-- code for mobile view -->
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
            <div class="container ">

                <div class="row mt-5 head-time-data ">

                    <div class="mt-3">
                        <div class="event-heading text-center" style="font-size:25px;"><strong>International Education
                                Fairs In India</strong></div>
                        <div class="event-date-info" style="width:80%;">
                            <div class="col-1 rounded-3  date mt-5">
                                <div class="my-2"><b>Mar<br>27</b></div>
                            </div>
                            <div class="time-info"><i class="fas fa-clock"></i>&nbsp;Mar 27 02:00 PM to Mar 30 06:00 PM
                            </div>
                        </div>
                    </div>

                </div>
                <br><br>

                <div class="col-4 mx-auto mb-4">
                    &nbsp;&nbsp; Summary
                    <hr class="w-100 mx-auto"/>
                    <div class="">
                        <p class="text-center summary-info" style="font-size:15px;">The International Education Fairs in
                            India take place in Delhi, Mumbai and Bangalore; the three economic power houses of the
                            Indian subcontinent. You will have access to the world’s second largest student population
                            (166 million) that is increasingly looking overseas for study opportunities.</p>
                        <hr class="w-75 mx-auto"/>
                        <div class="summary-info"><p style="font-size:14px;"><i class="fas fa-clock"></i>&nbsp;&nbsp;<b>Mar
                                    27 - Mar 30</b><br>
                                <span class="summary-info" style="font-size:11px;">&nbsp;&nbsp;Mar 27 02:00 PM to Mar 30 06:00 PM</span>
                            </p></div>
                        <div class="summary-info "><b><i class="fas fa-user"></i> &nbsp;&nbsp; Posted By Teach You</b>
                        </div>
                        <div class="summary-info mt-1"><b><i class="fas fa-map-marker-alt"></i> &nbsp;&nbsp; Delhi</b>
                        </div>
                        <hr class="w-100 mx-auto"/>
                        <div class="summary-info" style="font-size:14px;"><b><i class="fas fa-user"></i> &nbsp;&nbsp; 1
                                Interested</b></div>
                        <div class="summary-info mt-1" style="font-size:14px;"><b><i class="fas fa-hand-paper"></i>
                                &nbsp;&nbsp; 1 Going</b></div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-8" style="width:100%;">

                        <div class="parent">
                            <img src="images/int%20edu%20fair.jpg"></div>
                        <br><br>
                        <div class="card shadow article-color">
                            <div class="card-body">
                                <div><img src="https://shopbooksnow.online/images/blank-profile.jpg" alt="Avatar"
                                          style="border-radius: 50%; width:10%; height:15%;"> &nbsp;&nbsp;<span
                                            class="text-muted">What’s Going On...  #Hashtag @Memories @Video(MP4 File Format)</span>
                                </div>
                                <br><br>
                                <div class="btn btn-danger rounded-pill btn-post">Post</div>
                            </div>
                        </div>

                        <br>

                        <div class="card shadow article-color">
                            <div class="card-body">
                                <div class="dropdown dropstart ">
                                    <a class="btn btn-dots" type="button" id="dropdownMenuButton1"
                                       data-bs-toggle="dropdown" aria-expanded="false" style="top:1px; left:10px;">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu drop-font" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="editarticle.php"><i
                                                        class="fas fa-thumbtack"></i> &nbsp;Pin Post</a></li>
                                        <li><a class="dropdown-item" href="editarticle.php"><i
                                                        class="fas fa-pencil-alt"></i> &nbsp;Edit Article </a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>&nbsp;Delete
                                                Post</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-comment-slash"></i>&nbsp;Turn
                                                Off Say Something</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-link"></i>&nbsp;Open post
                                                in new tab</a></li>

                                    </ul>
                                </div>
                                <br>
                                <div class="row event-profile">
                                    <div class="event-maker-image">

                                        <img src="https://shopbooksnow.online/images/blank-profile.jpg" alt="Avatar"
                                             style="border-radius: 50%; width:90%; height:80%;"> &nbsp;&nbsp;
                                    </div>

                                    <div class="event-maker-detail">
                                        <span><b>Teach You</b></span>
                                        <br><span class="text-muted" style="font-size:13px;">updated event cover &nbsp; <i
                                                    class="fas fa-calendar"></i>&nbsp;International Yoga Festival - <i
                                                    class="fas fa-cog"></i></span>
                                    </div>
                                </div>
                                <div class="text-center mb-2">
                                    <img src="http://compuhost.tech/images/int%20edu%20fair.jpg"
                                         style="width:70%; height:auto;"/>
                                    <br>
                                </div>

                                <div>
                                    <button type="button" class="btn  btn-star"><i class="far fa-star"> 1</i></button>
                                    <button type="button" class="btn  btn-star"><i class="far fa-comment"> 1</i>
                                    </button>
                                    <button type="button" class="btn  btn-star"><i class="far fa-share-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div>

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

<script type="text/javascript" src="https://shopbooksnow.online/js/tinymce.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tinymce_init.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tooltip.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/bolgonalist.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/sidebar.js"></script>


</body>
</html>
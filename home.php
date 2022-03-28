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
    <title> Home</title>
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
        <div class="container-fluid mt-1">
            <div class="row ">
                <br/>
                <p style="font-size: 14px;"><b>Services</b>&nbsp;&nbsp;<img
                            src="https://shopbooksnow.online/images/information.png" class="information "
                            data-bs-toggle="tooltip" data-bs-placement="top" data-container="body"
                            title="Looking for tutors, schools or colleges? click on the icons below."></p>
            </div>

            <div class="card shadow mb-2 rounded sticky-top list-card" style="">
                <div class="card-body">

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/classroom.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body" title="Tutors">&nbsp;</a>

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/playschool.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body"
                                                       title="Play Schools">&nbsp;</a>

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/bus.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body" title="Schools">&nbsp;</a>

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/school.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body" title="Colleges">&nbsp;</a>

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/world.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body"
                                                       title="Global Colleges">&nbsp;</a>

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/languages.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body"
                                                       title="Lang. Institutes">&nbsp;</a>

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/s.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body"
                                                       title="Scholarships">&nbsp;</a>

                    <a onclick="" target="_blank"><img src="https://shopbooksnow.online/images/others.png"
                                                       style="width: 35px;margin-right: 15px;" data-bs-toggle="tooltip"
                                                       data-bs-placement="top" data-container="body" title="Others">&nbsp;</a>
                </div>
            </div>
            <div style="position:relative; left:15px;top:7px;" class="btn stories">
                <p style="font-size: 14px;"><b>Stories</b></p>
                <div class="stories_man"><img src="https://shopbooksnow.online/images/blank_profile_male.jpg"
                                              style="border-radius: 50%; width:45px; height:auto;"></div>
                <div class="stories_plus"><i class="fas fa-plus-circle"></i></div>

            </div>
            <br><br>

            <div class="card shadow " style="background-color: #F0F0F0">
                <div class="card-body">
                    <div><img src="https://shopbooksnow.online/images/blank_profile_male.jpg" alt="Avatar"
                              style="border-radius: 50%; width:3%; height:5%;"> &nbsp;&nbsp;<span class="text-muted"
                                                                                                  style="font-size: 13px;">What’s Going On...  #Hashtag @Memories @Video(MP4 File Format)</span>
                    </div>
                    <br>
                    <div class="btn btn-danger rounded-pill btn-post">Post</div>
                </div>
            </div>
            <br>
            <div class="card shadow mb-1 rounded " style="background-color: #F0F0F0; width:80%; ">
                <nav class="nav my-2">
                    <a class="nav-link active" aria-current="page" href="#"
                       style="text-decoration: none;color:black; font-size: 13px;"><img
                                src="https://shopbooksnow.online/images/meeting.png" style="width:20px; height:20px;">&nbsp;&nbsp;Discussion</a>
                    <a class="nav-link " aria-current="page" href="#"
                       style="text-decoration: none;color:black; font-size: 13px;"><img
                                src="https://shopbooksnow.online/images/book.png" style="width:20px; height:20px;">&nbsp;&nbsp;Articles</a>
                    <a class="nav-link " aria-current="page" href="#"
                       style="text-decoration: none;color:black; font-size: 13px;"><img
                                src="https://shopbooksnow.online/images/calendar.png" style="width:20px; height:20px;">&nbsp;&nbsp;Events</a>
                    <div class="dropdown ">
                        <button class="btn btn-danger rounded-pill dropdown-toggle" style="font-size: 14px;opacity:0.9;"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Add
                        </button>
                        <ul class="dropdown-menu shadow" aria-labelledby="dropdownMenuButton1"
                            style="font-size: 13px; min-width: 60px !important;">
                            <li><a class="dropdown-item" href="#">Add New Article</a></li>
                            <li><a class="dropdown-item" href="#">Add New Events</a></li>
                            <li><a class="dropdown-item" href="#">Add New Topics</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="card shadow article-color">
                        <div class="card-body">
                            <div class="dropdown dropstart ">
                                <a class="btn btn-dots" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                   aria-expanded="false" style="top:1px; left:10px;">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu drop-font" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="editarticle.php"><i class="fas fa-thumbtack"></i>
                                            &nbsp;Pin Post</a></li>
                                    <li><a class="dropdown-item" href="editarticle.php"><i
                                                    class="fas fa-pencil-alt"></i> &nbsp;Edit Article </a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>&nbsp;Delete
                                            Post</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-comment-slash"></i>&nbsp;Turn
                                            Off Say Something</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-link"></i>&nbsp;Open post in
                                            new tab</a></li>

                                </ul>
                            </div>
                            <br>
                            <div class="row event-profile">
                                <div class="event-maker-image">

                                    <img src="https://shopbooksnow.online/images/blank-profile.jpg" alt="Avatar"
                                         style="border-radius: 50%; width:50px; height:50px;"> &nbsp;&nbsp;
                                </div>

                                <div class="event-maker-detail">
                                    <span><b>Teach You</b></span>
                                    <br><span class="text-muted" style="font-size:13px;">updated event cover &nbsp; <i
                                                class="fas fa-calendar"></i>&nbsp;International Yoga Festival - <i
                                                class="fas fa-cog"></i></span>
                                </div>
                            </div>
                            <div class="text-center mb-2">
                                <img src="http://shopbooksnow.online/images/int%20edu%20fair.jpg"
                                     style="width:70%; height:auto;"/>
                                <br>
                            </div>

                            <div>
                                <button type="button" class="btn   "><i class="far fa-star mr-2"> 1</i></button>
                                <button type="button" class="btn  "><i class="far fa-comment"> 1</i></button>
                                <button type="button" class="btn  "><i class="far fa-share-square"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <p><b>Topic</b></p>
                    <div class="card article-color shadow">

                        <div><p style="width:98%; position:relative; left:15px;top:15px; font-size: 14px;">EdTech
                                Disruption Amidst Covid: Is Online Learning Better than Classroom Learning?</p>
                            <br>
                            <img src="images/afro.png" class="m-3" alt="img">
                            <hr class="w-75 mx-auto"/>
                        </div>
                        <div><p style="width:98%; position:relative; left:15px;top:15px; font-size: 14px;">EdTech
                                Disruption Amidst Covid: Is Online Learning Better than Classroom Learning?</p>
                            <br>
                            <img src="images/afro.png" class="m-3" alt="img">
                            <hr class="w-75 mx-auto"/>
                        </div>
                        <div><p style="width:98%; position:relative; left:15px;top:15px; font-size: 14px;">EdTech
                                Disruption Amidst Covid: Is Online Learning Better than Classroom Learning?</p>
                            <br>
                            <img src="images/afro.png" class="m-3" alt="img">
                            <hr class="w-75 mx-auto"/>
                        </div>
                        <div><p style="width:98%; position:relative; left:15px;top:15px; font-size: 14px;">EdTech
                                Disruption Amidst Covid: Is Online Learning Better than Classroom Learning?</p>
                            <br>
                            <img src="images/afro.png" class="m-3" alt="img">
                            <hr class="w-75 mx-auto"/>
                        </div>
                        <div><p style="width:98%; position:relative; left:15px;top:15px; font-size: 14px;">EdTech
                                Disruption Amidst Covid: Is Online Learning Better than Classroom Learning?</p>
                            <br>
                            <img src="images/afro.png" class="m-3" alt="img">
                            <hr class="w-75 mx-auto"/>
                        </div>
                        <div><p style="width:98%; position:relative; left:15px;top:15px; font-size: 14px;">EdTech
                                Disruption Amidst Covid: Is Online Learning Better than Classroom Learning?</p>
                            <br>
                            <img src="images/afro.png" alt="img">
                            <hr class="w-75 mx-auto"/>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="https://shopbooksnow.online/js/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/tooltip.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/bolgonalist.js"></script>

<script type="text/javascript" src="https://shopbooksnow.online/js/sidebar.js"></script>

</body>
</html>
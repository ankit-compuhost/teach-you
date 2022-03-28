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
    <title>My Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="https://compuhost.co.in/teachyou/css/styles.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://kit.fontawesome.com/009c1b5ccd.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


    <!-- End of Custom Styling -->

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
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="mt-3 mb-3"></div>
                <br/>
            </div>
            <div class="card page-main-content" style="border:none;">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-tab" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  nav-link-tab" href="goingevents.php">Going</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  nav-link-tab" href="interestedevents.php">Interested</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active-tab nav-link-tab" href="myevents.php">My Events</a>
                    </li>
                </ul>
                <div>
                    <button href="newarticle.php" type="button"
                            class="btn btn-danger text-center create-event-btn desk-back" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus-circle"></i>&nbsp;Create
                        Event
                    </button>
                    <button href="newarticle.php" type="button"
                            class="btn btn-danger text-center create-event-btn mob-back" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-plus-circle"></i>
                    </button>


                    <?php include("common/view-create-event.php") ?>
                </div>
                <br/>
                <div class="container">


                    <div class="row">
                        <?php
                        if ($allEvents) {
                            foreach ($allEvents as $val) {
                                ?>
                                <div class="col-6 event-card" data-aos="flip-down">
                                    <div class="card mb-3 shadow p-3 mb-5 rounded event-card"
                                         style="background-color:#F0F0F0;">
                                        <div class="row g-0">
                                            <div class="col-md-6">
                                                <div>
                                                    <img src="<?= base_url(!empty($val['event_cover']) ? $val['event_cover'] : ""); ?>"
                                                         alt="data"
                                                         class="event-card-image" style="width:15rem; height: 100%;">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <p class="text-center"><b><a
                                                                    href="event/<?= $val['slug'] . ".php"; ?>"><?= $val['event_title']; ?></a></b>
                                                        <br>
                                                        <?= substr($val['event_description'], 0, 100)."..."; ?>
                                                    </p>
                                                    <p class="card-text"></p>
                                                    <br>
                                                    <div class="text-center ">
                                                        <button onclick="window.location='<?= base_url($page . ".php") . "?event_id=" . $val['event_id']; ?>&event_action=going'"
                                                                class="btn btn-danger btn-sm rounded-pill going"><i
                                                                    class="fas fa-hand-paper"></i>&nbsp;Going
                                                        </button>&nbsp;
                                                        <button onclick="window.location='<?= base_url($page . ".php") . "?event_id=" . $val['event_id']; ?>&event_action=interested'"
                                                                class="btn btn-danger btn-sm rounded-pill interested"><i
                                                                    class="fas fa-user"></i>&nbsp;Interested
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "No Event Found";
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
<script type="text/javascript" src="https://compuhost.co.in/teachyou/js/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="https://compuhost.co.in/teachyou/js/tooltip.js"></script>

<script type="text/javascript" src="https://compuhost.co.in/teachyou/js/bolgonalist.js"></script>

<script type="text/javascript" src="https://compuhost.co.in/teachyou/js/sidebar.js"></script>

</body>
</html>
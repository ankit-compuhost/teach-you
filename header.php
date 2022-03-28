<?php
$currentUser = getLoggedInUserByEmail($_SESSION['email']);
?>

<header class="desktopview">
    <nav class="navbar navbar-expand-lg fixed-top"
         style="padding-bottom: 3px; padding-top:3px; background-color: #940128; color: white;">
        <div class="container-fluid ">
            <a class="navbar-brand navbar-font mx-4 px-4 " href="#" style="width:10%; float:left; color: white;">TY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-text me-5 pl-5" style="width:25%;">
                <a href="#!" onclick="toggleSidebar()">
      <span style="height:50%; position:relative; top:12px;"> 
        
     <div class="bar-icon "></div>
     <div class="bar-icon-mid my-1"></div>
     <div class="bar-icon "></div>
     </span>
                </a>

                <div class="welcome" style=" color: white;">Welcome to TeachYou</div>
            </div>


            <div class="collapse navbar-collapse ml-5 pl-5 justify-content-between " id="navbarNavDropdown">

                <!-- search bar -->


                <form class="d-flex" style="width:40%;">
                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search"
                           style="height:30px;">

                </form>

                <!-- bell icon -->


                <ul class="navbar-nav " style="width:25%;top:50px;">

                    <li class="nav-item">
                        <a class="navClass text-light-color nav-link navbar-text mr-5 " href="#"
                           style="height:100%;"><img src="<?= base_url("images/home.png"); ?>" class="home-icon"></a>
                    </li>


                    <li class="nav-item dropdown mr-5 pr-5">
                        <a class="navClass nav-link  navbar-text " href="#" id="navbarDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false" style="height:100%;">
                            <img src="<?= base_url("images/bell.png"); ?>" class="bell-icon"/>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start mr-5 pr-5 bell-dropdown-area"
                            aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Profile activity 1</a></li>
                            <li><a class="dropdown-item" href="#">A visited your profile</a></li>

                        </ul>
                    </li>

                    <!-- home icon -->


                    <!-- admin profile -->
                    <li class="nav-item dropdown mr-5 pr-5">
                        <a class="navClass nav-link dropdown-toggle navbar-text " href="#" id="navbarDropdownMenuLink"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= checkProfilePic(!empty($currentUser['user_picture']) ? $currentUser['user_picture'] : null); ?>" style="width:22px; height:22px; border-radius: 50%;"/>
                            <?= $currentUser['user_firstname']; ?>

                        </a>
                        <!-- admin icon click -->

                        <ul class="dropdown-menu dropstart mr-5 pr-5 user-dropdown-area"
                            aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="adminprofile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="admincp.php">Admin Panel</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Keyboard Shortcuts</a></li>
                            <li><a class="dropdown-item" href="#">Night Mode</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled " href="#" style="font-color: #660033;" tabindex="-1"
                           aria-disabled="true"></a>
                    </li>
                </ul>
            </div>
        </div>


    </nav>
</header>

<!-- mobile view -->
<header class="mobileview">
    <nav class="navbar navbar-custom fixed-top" style="padding-bottom: 5px; padding-top:5px;background-color:#940128; ">
        <div class="container">
            <div class="row ">
                <div class="btn ">
                    <button class="navbar-toggle collapsed navbar-text" data-toggle="collapse" id="menu-toggle"
                            style="background-color:#940128; border:none; outline:none;">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>


                <div class="home nav-item">
                    <a class="navClass text-light-color nav-link navbar-text mt-2" href="#" style="color: white;"><img
                                src="images/home.png" class="home-icon"></a>
                </div>


                <div class="noti nav-item dropdown">
                    <a class="navClass nav-link  navbar-text mt-2 mr-1" href="#" id="navbarDropdownMenuLink"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/bell.png" class="bell-icon"/>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                        aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Profile activity 1</a></li>
                        <li><a class="dropdown-item" href="#">someone just visited your profile</a></li>

                    </ul>
                </div>

                <div class="search">
                    <button class=" btn btn-outline mt-2" type="submit" style="color:white;"><i
                                class="fas fa-search"></i></button>
                </div>


                <div class="admin nav-item dropdown">
                    <a class="navClass nav-link dropdown-toggle navbar-text mt-2 mr-1" href="#"
                       id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/blank_profile_male.jpg" style="width:22px; height:22px; border-radius: 50%;"/>

                    </a>
                    <!-- admin icon click -->

                    <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="adminprofile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="admincp.php">Admin Panel</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Keyboard Shortcuts</a></li>
                        <li><a class="dropdown-item" href="#">Night Mode</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Toogle Sidebar Script -->

<script type="text/javascript">

    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    if (isMobile) {
    } else {
        loadScriptFile('https://shopbooksnow.online/js/sidebar-toggle-desktop.js');
    }

    function loadScriptFile(src) {
        const $script = $('<script>');
        $script.attr('type', 'text/javascript');
        $script.attr('src', src);
        $script.appendTo('head');
    }

</script>
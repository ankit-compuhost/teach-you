<?php
$page = pathinfo(__FILE__, PATHINFO_FILENAME);
include("include/functions.php");
include('controllers/' . $page . '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachYou#1 India's no 1 Online & Home Tutor providers in Noida</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://shopbooksnow.online/css/styles.css">

</head>
<body>
<!-- Banner -->
<div id="banner">

    <!-- Navbar -->
    <nav class="navbar navbar-land navbar-expand-lg">
        <div class="container-fluid">
            <div>
                <a href="#!">
                    <img src="images/logo-light.png" class="navbar-brand navbar-brand-land" alt="logo">
                </a>
            </div>
        </div>
    </nav>

    <!-- Banner Info -->
    <div data-aos="fade-right" data-aos-duration="700" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h2>Connecting you with
            <br/>
            your Learning needs</h2>
    </div>

    <!-- Login Panel -->
    <div class="wobble-card" id="login-panel">
        <div id="form">
            <form id="login-form" method="post"
                  action="" <?= isset($_POST['reg_user']) ? 'style="display:none"' : 'style="display:block"'; ?> >
                <h3 class="login-title">Login</h3>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control login-input" aria-describedby="emailHelp"
                           placeholder="Email ID" value="<?php if (isset($_COOKIE["email"])) {
                        echo $_COOKIE["email"];
                    } ?>"/>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control login-input" placeholder="Password"
                           value="<?php if (isset($_COOKIE["password"])) {
                               echo $_COOKIE["password"];
                           } ?>"/>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" value="1"
                           class="form-check-input login-checkbox" <?php if (isset($_COOKIE["email"])) { ?> checked <?php } ?> />
                    <label class="form-check-label login-checkbox-label" for="exampleCheck1">Remember Me</label>
                    <a class="forgot-link" href="#">Forgot Password?</a>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" name="login_user" class="btn btn-danger btn-lg login-btn grow"><span
                                class="login-text">LOGIN</span></button>
                </div>
                <div class="login-panel-footer">
                    <?php include('errors.php'); ?>
                    <p class="login-footer-text">or login with</p>
                    <p>
                        <a href="#" class="fb-link">
                            <img class="grow" src="images/fb-icon.png" alt="fb-icon">
                        </a>
                        <a href="#">
                            <img class="grow" src="images/google-icon.png" alt="google-icon">
                        </a>
                    </p>
                    <p class="login-footer-des">
                        <span class="not-registered">Not registered?</span>
                        <a id="register-link" class="create-account">Create an account</a>
                    </p>
                </div>
            </form>
            <form id="register-form" class="hide-form" method="post"
                  action="" <?= isset($_POST['reg_user']) ? 'style="display:block"' : 'style="display:none"'; ?> >
                <h3 class="login-title">Register</h3>
                <div class="mb-3">
                    <input type="text" class="form-control login-input" placeholder="First Name" name="first_name"
                           value="<?php echo $first_name; ?>"/>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control login-input" placeholder="Last Name" name="last_name"
                           value="<?php echo $last_name; ?>"/>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control login-input" aria-describedby="emailHelp"
                           placeholder="Email ID" name="email" value="<?php echo $email; ?>"/>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control login-input" placeholder="Password" name="password"/>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-danger btn-lg login-btn grow" name="reg_user"><span
                                class="login-text">SIGN UP</span></button>
                </div>
                <div class="login-panel-footer">
                    <?php include('errors.php'); ?>
                    <p class="login-footer-text">or register with</p>
                    <p>
                        <a href="#" class="fb-link">
                            <img class="grow" src="images/fb-icon.png" alt="fb-icon">
                        </a>
                        <a href="#">
                            <img class="grow" src="images/google-icon.png" alt="google-icon">
                        </a>
                    </p>
                    <p class="login-footer-des">
                        <span class="not-registered">Have an account?</span>
                        <a id="login-link" class="create-account">Login now</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Home Section -->
<div id="home-section">
    <h1 class="home-heading" data-aos="zoom-in-up" data-aos-duration="700">Home</h1>
    <div class="container">
        <div class="row">
            <div class="home-card col-lg-3" data-aos="flip-left" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Discussion</span>
            </div>
            <div class="home-card col-lg-3" data-aos="flip-left" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Articles</span>
            </div>
            <div class="home-card col-lg-3" data-aos="flip-left" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Events</span>
            </div>
            <div class="home-card col-lg-3" data-aos="flip-left" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Topics</span>
            </div>
        </div>
        <div class="row">
            <div class="home-card col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Pages</span>
            </div>
            <div class="home-card col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Groups</span>
            </div>
            <div class="home-card col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Quiz & Games</span>
            </div>
            <div class="home-card col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="home-icon grow" src="images/tutors.png" alt="home-icon">
                <br/>
                <span class="home-title">Scholarship</span>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div id="services-section">
    <h1 class="services-heading" data-aos="zoom-in" data-aos-duration="700">Our Services</h1>
    <div class="container services-container">
        <div class="row">
            <div class="services-card col-lg-4 shake" data-aos="flip-up" data-aos-duration="700">
                <div class="card-title">Tutors</div>
                <br/>
                <img class="services-icon grow" src="images/tutors.png" alt="services-icon"/>
                <br/>
                <div class="services-des">
                    If your child is struggling in academics and you’re just not sure how to help then turn to
                    professional tutoring services.
                </div>
                <a class="btn btn-outline-danger services-btn grow"><span class="read-more">READ MORE</span> ...</a>
            </div>
            <div class="services-card col-lg-4 shake" data-aos="flip-up" data-aos-duration="700">
                <div class="card-title">Play Schools</div>
                <br/>
                <img class="services-icon grow" src="images/schools.png" alt="services-icon"/>
                <br/>
                <div class="services-des">
                    Going to a play school is a small step for a giant exposure in a child’s life.
                </div>
                <a class="btn btn-outline-danger services-btn grow"><span class="read-more">READ MORE</span> ...</a>
            </div>
            <div class="services-card col-lg-4 shake" data-aos="flip-up" data-aos-duration="700">
                <div class="card-title">Schools</div>
                <br/>
                <img class="services-icon grow" src="images/play-schools.png" alt="services-icon"/>
                <br/>
                <div class="services-des">
                    Choosing the right school
                    <br/>
                    for your child can be a very complicated and confusing process.
                </div>
                <a class="btn btn-outline-danger services-btn grow"><span class="read-more">READ MORE</span> ...</a>
            </div>
        </div>
        <div class="row">
            <div class="services-card col-lg-4 shake" data-aos="flip-down" data-aos-duration="700">
                <div class="card-title">Colleges</div>
                <br/>
                <img class="services-icon grow" src="images/colleges.png" alt="services-icon"/>
                <br/>
                <div class="services-des">
                    Higher education is the most critical and important investment in every student’s future.
                </div>
                <a class="btn btn-outline-danger services-btn grow"><span class="read-more">READ MORE</span> ...</a>
            </div>
            <div class="services-card col-lg-4 shake" data-aos="flip-down" data-aos-duration="700">
                <div class="card-title">Global Colleges</div>
                <br/>
                <img class="services-icon grow" src="images/global-colleges.png" alt="services-icon"/>
                <br/>
                <div class="services-des">
                    Global colleges give students
                    <br/>
                    an international exposure and platform to reach heights of success in their careers.
                </div>
                <a class="btn btn-outline-danger services-btn grow"><span class="read-more">READ MORE</span> ...</a>
            </div>
            <div class="services-card col-lg-4 shake" data-aos="flip-down" data-aos-duration="700">
                <div class="card-title">Language</div>
                <br/>
                <img class="services-icon grow" src="images/language.png" alt="services-icon"/>
                <br/>
                <div class="services-des">
                    Due to the increasing competition being fluent in international languages has become more important
                    <br/>
                    than ever.
                </div>
                <a class="btn btn-outline-danger services-btn grow"><span class="read-more">READ MORE</span> ...</a>
            </div>
        </div>
    </div>
    <svg class="svg-1" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
        <path class="svg-1-path" d="M0, 100 C150, 200 350, 0 500, 100 L500, 00 L0, 0 Z"></path>
    </svg>
</div>

<!-- About Section -->
<div id="about-section">
    <img class="about-img" src="images/about-img.svg" alt="about-img" data-aos="fade-right" data-aos-offset="300"
         data-aos-easing="ease-in-sine">
    <div class="about-body">
        <p class="about-heading" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">About Us</p>
        <p class="about-des" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
            TeachYou is an online platform for everyone to communicate with each other,<br>
            where people all over India and even outside India can connect with you.<br>
            You can publish your articles, create your page, post daily feed like<br>
            knowledge, pictures and even videos, create groups or even talk<br>
            to them in person.There is a section for quiz and games as well!<br><br>
            TeachYou Services is the perfect platform for students and the parents to find<br>
            all information about tutors, play schools, schools, colleges, global colleges,<br>
            language institutes and much more. Our vision is to create a sophisticated<br>
            online marketplace where people will share knowledge and ideas.<br>
            Through our unique service offerings we aspire to create an online<br>
            network of teachers, education experts and students. We believe this<br>
            is amongst the first steps to create a culture of lifelong learning.
        </p>
    </div>
</div>

<!-- Blog Section -->
<div id="blog-section">
    <h2 class="blog-heading" data-aos="zoom-out-down" data-aos-duration="700">LATEST ARTICLES</h2>
    <div class="conatiner">
        <div class="row blog-row-1">
            <div id="blog-1" class="col-lg-3" data-aos="flip-left" data-aos-duration="700">
                <img class="blog-1-img" src="images/blog-img-1.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
            <div id="blog-2" class="col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="blog-2-img" src="images/blog-img-2.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
            <div id="blog-1" class="col-lg-3" data-aos="flip-left" data-aos-duration="700">
                <img class="blog-1-img" src="images/blog-img-1.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
            <div id="blog-2" class="col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="blog-2-img" src="images/blog-img-2.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
        </div>
        <div class="row blog-row-2">
            <div id="blog-1" class="col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="blog-1-img" src="images/blog-img-1.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
            <div id="blog-2" class="col-lg-3 blog-2-change" data-aos="flip-left" data-aos-duration="700">
                <img class="blog-2-img" src="images/blog-img-2.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
            <div id="blog-1" class="col-lg-3" data-aos="flip-right" data-aos-duration="700">
                <img class="blog-1-img" src="images/blog-img-1.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
            <div id="blog-2" class="col-lg-3 blog-2-change" data-aos="flip-left" data-aos-duration="700">
                <img class="blog-2-img" src="images/blog-img-2.jpg" alt="blog-img">
                <h5 class="blog-1-title">Blog Title</h5>
                <p>
                    <span class="blog-1-author">By Author Name</span>
                </p>
                <p class="blog-1-des">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
                <a href="#!" class="blog-1-link">Read More</a>
            </div>
        </div>
    </div>
</div>

<div id="footer-division" data-aos="fade-up" data-aos-duration="1000">

    <!-- Footer SVG -->
    <svg height="100%" width="100%" id="svg-2" viewBox="0 0 1440 500" xmlns="http://www.w3.org/2000/svg"
         class="transition duration-300 ease-in-out delay-150">
        <path d="M 0,500 C 0,500 0,250 0,250 C 153.33333333333331,298.5333333333333 306.66666666666663,347.06666666666666 461,334 C 615.3333333333334,320.93333333333334 770.6666666666667,246.26666666666665 934,222 C 1097.3333333333333,197.73333333333335 1268.6666666666665,223.86666666666667 1440,250 C 1440,250 1440,500 1440,500 Z"
              stroke="none" stroke-width="0" fill="#e0eaebff"
              class="transition-all duration-300 ease-in-out delay-150"></path>
    </svg>

    <!-- Footer Section -->
    <footer id="footer-section" class="text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="footer-title">About Us</h5>
                    <p class="footer-des">
                        TeachYou is an online platform for everyone to communicate with each other,
                        <br/>
                        where people all over India and even outside India can connect with you.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="footer-title">Useful Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="useful-links-li">
                            <a href="#!" class="useful-links">Vision/Mission</a>
                        </li>
                        <li class="useful-links-li">
                            <a href="#!" class="useful-links">Terms</a>
                        </li>
                        <li class="useful-links-li">
                            <a href="#!" class="useful-links">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="footer-title mb-0">Follow Us</h5>
                    <img class="footer-fb grow" src="images/fb-icon.png" alt="fb-icon">
                    <img class="footer-insta grow" src="images/insta-icon.png" alt="insta-icon">
                </div>
            </div>
        </div>

        <!-- Copyright Section-->
        <div class="p-3 copyright-content">
            <span class="copyright-text">
                Copyright @ 2021 TeachYou All Rights Reserved
            </span>
            <a href="#!">
                <img class="google-play-icon" src="images/google-play-icon.png" alt="google-play-icon">
            </a>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>

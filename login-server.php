<?php
include("models/index-models.php");

//Initialising variables
$first_name = "";
$last_name = "";
$email = "";
$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $device = mysqli_real_escape_string($conn, $_SERVER['HTTP_USER_AGENT']);
    $ip = mysqli_real_escape_string($conn, $_SERVER['REMOTE_ADDR']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($first_name)) {
        array_push($errors, "First Name is required");
    }
    if (empty($last_name)) {
        array_push($errors, "Last Name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user = checkUserExistsByEmail($email);

    if ($user) { // if user exists
        if ($user['user_email'] === $email) {
            array_push($errors, "User already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password); //encrypt the password before saving in the database
        $userName = generateUsername($first_name, $last_name);
        $userData = [
            'user_name' => $userName,
            'user_firstname' => $first_name,
            'user_lastname' => $last_name,
            'user_email' => $email,
            'user_password' => $password
        ];
        $userId = createUser($userData);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $userId;
        header('location: home.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $results = loginUser($email, $password);
        if (!empty($results)) {
            $_SESSION['user_id'] = $results['user_id'];
            $_SESSION['email'] = $email;
            // $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        } else {
            array_push($errors, "The email/password you entered does not belong to any account");
        }
    }
}

// Remember Me
if (!empty($_POST['remember'])) {
    setcookie("email", $_POST["email"], time() + (30 * 24 * 60 * 60));
    setcookie("password", $_POST["password"], time() + (30 * 24 * 60 * 60));
} else {
    setcookie("email", "");
    setcookie("password", "");
}

?>
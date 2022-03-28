<?php
include("db.php");

/**
 * @param string $email
 * @param string $password
 * @return array|false|string[]|null
 */
function loginUser(string $email = "", string $password = "")
{
    global $conn;
    $query = "SELECT * FROM users WHERE user_email='".mysqli_real_escape_string($conn, $email)."' AND user_password='".mysqli_real_escape_string($conn, $password)."'";
    $results = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($results);
}

/**
 * @param array $userData
 * @return int|string|void
 */
function createUser($userData = [])
{
    global $conn;
    $str = "";
    foreach ($userData as $key => $val) {
        $str .= " $key='" . mysqli_real_escape_string($conn, $val) . "', ";
    }
    $str = substr($str, 0, strlen($str) - 2);
    $query = "INSERT INTO users SET " . $str;
    if (mysqli_query($conn, $query)) {
        $id = mysqli_insert_id($conn);
    } else {
        $id = 0;
    }
    return $id;
}

/**
 * @param string $email
 * @return array|false|string[]|null
 */
function checkUserExistsByEmail(string $email = "")
{
    global $conn;
    $user_check_query = "SELECT * FROM users WHERE user_email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);

    return mysqli_fetch_assoc($result);
}

?>
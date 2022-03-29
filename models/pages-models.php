<?php
include("db.php");


/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getPgeById(int $id = 0)
{
    global $conn;
    $query = "SELECT * FROM pages WHERE `page_id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $pageId
 * @return array|false|string[]|null
 */
function getAppreciateCount(int $pageId = 0)
{
    global $conn;
    $query = "SELECT count(page_id) as total FROM `pages_likes` WHERE `page_id`='" . mysqli_real_escape_string($conn, $pageId) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @return array
 */
function getAllPages(): array
{
    global $conn;
    $page_query = "SELECT * FROM pages ORDER BY page_id DESC";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
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
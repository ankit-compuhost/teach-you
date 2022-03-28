<?php
include("db.php");

/**
 * @param int $id
 * @param string $type
 * @return array|false|string[]|null
 */
function getArticleById(int $id = 0, string $type = "")
{
    global $conn;
    $query = "SELECT * FROM posts WHERE `post_type`='article' AND `post_id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @return array
 */
function getAllArticle()
{
    global $conn;
    $page_query = "SELECT * FROM posts_articles ORDER BY post_id DESC";
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
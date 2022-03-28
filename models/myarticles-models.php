<?php
include("db.php");

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getArticleById(int $id = 0)
{
    global $conn;
    $query = "SELECT * FROM posts WHERE `post_id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param array $postIds
 * @return array
 */
function getAllArticleByPostIds(array $postIds = []): array
{
    global $conn;
    $postIds = implode(",", $postIds);
    $page_query = "SELECT * FROM posts_articles WHERE post_id IN ($postIds) ORDER BY post_id DESC";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * @param int $userId
 * @param string $postType
 * @return array
 */
function getAllPostByUserIds(int $userId = 0, string $postType = ""): array
{
    global $conn;
    $query = "SELECT post_id, user_id FROM posts WHERE post_type='" . mysqli_real_escape_string($conn, $postType) . "' AND user_id=$userId";
    $result = mysqli_query($conn, $query);

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
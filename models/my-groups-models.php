<?php
include("db.php");

/**
 * @param int $postId
 */
function deletePost(int $postId = 0)
{
    global $conn;

    $article = getArticleById($postId);
    @unlink("./" . $article['cover']);

    $page_query = "DELETE FROM posts_articles WHERE post_id='" . mysqli_real_escape_string($conn, $postId) . "'";
    $result = mysqli_query($conn, $page_query) or die(mysqli_error($conn));

    $page_query = "DELETE FROM posts_articles WHERE post_id='" . mysqli_real_escape_string($conn, $postId) . "'";
    $result = mysqli_query($conn, $page_query) or die(mysqli_error($conn));
}

/**
 * @param int $id
 * @param string $type
 * @return array|false|string[]|null
 */
function getEventsById(int $id = 0, string $type = "")
{
    global $conn;
    $query = "SELECT * FROM events WHERE `post_type`='events' AND `event_id`='" . mysqli_real_escape_string($conn, $id) . "' ORDER BY event_id DESC";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $userId
 * @return array
 */
function getAllGroups(int $userId = 0): array
{
    global $conn;
    $page_query = "SELECT group_id, group_title, group_picture FROM groups WHERE `group_admin`=".$userId." ORDER BY group_id DESC";
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
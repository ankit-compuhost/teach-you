<?php
include("db.php");

/**
 * @param int $postId
 */
function updateViewCount(int $postId = 0)
{
    global $conn;

    $query = "UPDATE posts_articles SET `views`=(`views`+1) WHERE post_id='" . mysqli_real_escape_string($conn, $postId) . "'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
}

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
 * @param int $eventId
 * @return array|false|string[]|null
 */
function getEventTotal(int $eventId = 0, string $type = "")
{
    global $conn;
    $page_query = "SELECT count(id) as total FROM events_members WHERE event_id='" . mysqli_real_escape_string($conn, $eventId) . "' AND $type=1";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param string $slug
 * @return array|false|string[]|null
 */
function getEventBySlug(string $slug = "")
{
    global $conn;
    $page_query = "SELECT * FROM events WHERE slug='" . mysqli_real_escape_string($conn, $slug) . "'";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getArticleById(int $id = 0)
{
    global $conn;
    $query = "SELECT * FROM posts_articles WHERE `post_id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getPostById(int $id = 0)
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
    $page_query = "SELECT * FROM posts_articles WHERE post_id IN ($postIds)";
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
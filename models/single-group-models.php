<?php
include("db.php");


/**
 * @param string $slug
 * @return array|false|string[]|null
 */
function getGroupBySlug(string $slug = "")
{
    global $conn;
    $page_query = "SELECT * FROM `groups` WHERE slug='" . mysqli_real_escape_string($conn, $slug) . "'";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getGroupLikesByUserId(int $id = 0, int $userId = 0)
{
    global $conn;
    $query = "SELECT * FROM groups_members WHERE `group_id`='" . mysqli_real_escape_string($conn, $id) . "' AND `user_id`='" . mysqli_real_escape_string($conn, $userId) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $pageId
 * @return array|false|string[]|null
 */
function getGroupTotal(int $groupId = 0)
{
    global $conn;
    $page_query = "SELECT count(id) as total FROM groups_members WHERE `approved`=1 AND group_id='" . mysqli_real_escape_string($conn, $groupId) . "' AND (user_id !='' OR user_id !=0)";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_assoc($result);
}

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
 * @param string $slug
 * @return array|false|string[]|null
 */
function getPageBySlug(string $slug = "")
{
    global $conn;
    $page_query = "SELECT * FROM pages WHERE slug='" . mysqli_real_escape_string($conn, $slug) . "'";
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
function getPageById(int $id = 0)
{
    global $conn;
    $query = "SELECT * FROM pages WHERE `page_id`='" . mysqli_real_escape_string($conn, $id) . "'";
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
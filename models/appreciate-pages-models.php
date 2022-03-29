<?php
include("db.php");

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getPageLikesByUserId(int $id = 0, int $userId = 0)
{
    global $conn;
    $query = "SELECT * FROM pages_likes WHERE `page_id`='" . mysqli_real_escape_string($conn, $id) . "' AND `user_id`='" . mysqli_real_escape_string($conn, $userId) . "'";
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
    $page_query = "SELECT p.* FROM  `pages` as p INNER JOIN `pages_likes` as pl ON p.page_id=pl.page_id GROUP BY p.page_id ORDER BY p.page_id DESC";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>
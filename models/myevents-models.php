<?php
include("db.php");

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getEventsById(int $id = 0)
{
    global $conn;
    $query = "SELECT * FROM events WHERE `post_id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param array $postIds
 * @return array
 */
function getAllEventsByPostIds(array $postIds = []): array
{
    global $conn;
    $postIds = implode(",", $postIds);
    $page_query = "SELECT * FROM events WHERE post_id IN ($postIds) ORDER BY post_id DESC";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * @param int $userId
 * @param array $postType
 * @return array
 */
function getAllEventsByUserIds(int $userId = 0, array $postType = []): array
{
    global $conn;
    $str = "";
    foreach ($postType as $val) {
        $str .= "'" . mysqli_real_escape_string($conn, $val) . "'" . ",";
    }
    $str = substr($str, 0, -1);
    $query = "SELECT * FROM events WHERE event_privacy IN (" . $str . ") AND `event_admin`=$userId ORDER BY event_id DESC";
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
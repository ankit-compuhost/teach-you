<?php
include("db.php");

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getGroupMemberByUserId(int $id = 0, int $userId = 0)
{
    global $conn;
    $query = "SELECT * FROM groups_members WHERE `group_id`='" . mysqli_real_escape_string($conn, $id) . "' AND `user_id`='" . mysqli_real_escape_string($conn, $userId) . "'";
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
    $page_query = "SELECT group_id, group_title, group_picture, slug FROM groups WHERE `group_admin`=".$userId." ORDER BY group_id DESC";
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
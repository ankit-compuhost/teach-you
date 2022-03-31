<?php
include("db.php");


/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getGroupMemberByUserId(int $id = 0, int $userId = 0)
{
    global $conn;
    $query = "SELECT * FROM groups_members WHERE `approved`='1' AND `group_id`='" . mysqli_real_escape_string($conn, $id) . "' AND `user_id`='" . mysqli_real_escape_string($conn, $userId) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getGroupsById(int $id = 0)
{
    global $conn;
    $query = "SELECT * FROM `groups` WHERE `group_id`='" . mysqli_real_escape_string($conn, $id) . "' ORDER BY group_id DESC";
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
    $page_query = "SELECT g.* FROM `groups` as g INNER JOIN groups_members as gm ON g.group_id=gm.group_id WHERE gm.user_id='" . $userId . "' AND gm.approved='1' GROUP BY g.group_id ORDER BY group_id DESC";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>
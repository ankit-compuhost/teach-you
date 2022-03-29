<?php
include("db.php");

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
 * @return array
 */
function getAllGroups(): array
{
    global $conn;
    $page_query = "SELECT g.* FROM `groups` as g INNER JOIN groups_members as gm ON g.group_id=gm.group_id GROUP BY g.group_id ORDER BY group_id DESC";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>
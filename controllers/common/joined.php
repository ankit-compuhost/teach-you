<?php
if (!empty($_GET['group_action'])) {
    $membersPost['group_id'] = $_GET['group_id'];
    $membersPost['user_id'] = $_SESSION['user_id'];
    $checkGroup = checkTableValue("groups", ["group_id"], ["group_id" => $_GET['group_id']]);
    if (!empty($checkGroup)) {
        $checkExists = checkTableValue("groups_members", ["id", "group_id", "user_id"], ["group_id" => $_GET['group_id'], "user_id" => $_SESSION['user_id']]);
        switch ($_GET['group_action']) {
            case "joined":
                if (empty($checkExists)) {
                    create("groups_members", $membersPost);
                } else {
                    $membersPost['id'] = $checkExists['id'];
                    if (!empty($checkExists['id']) && $_GET['group_action'] == "joined") {
                        delete("groups_members", "id", $checkExists["id"]);
                    }
                }
                break;
            default:
                break;
        }

        header("location: $page.php");
    }
}
?>
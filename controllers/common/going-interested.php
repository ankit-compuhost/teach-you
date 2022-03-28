<?php
if (!empty($_GET['event_action'])) {
    $eventsMembersPost['event_id'] = $_GET['event_id'];
    $eventsMembersPost['user_id'] = $_SESSION['user_id'];
    $checkEvent = checkTableValue("events", ["event_id"], ["event_id" => $_GET['event_id']]);
    if (!empty($checkEvent)) {
        $checkExists = checkTableValue("events_members", ["id", "event_id", "is_going", "is_interested"], ["event_id" => $_GET['event_id'], "user_id" => $_SESSION['user_id']]);
        switch ($_GET['event_action']) {
            case "going":
                $eventsMembersPost['is_going'] = empty($checkExists['is_going']) ? '1' : '0';
                break;
            case "interested":
                $eventsMembersPost['is_interested'] = empty($checkExists['is_interested']) ? '1' : '0';
                break;
            default:
                break;
        }
        //echo "<pre>";print_r($checkExists);die;
        if (empty($checkExists)) {
            create("events_members", $eventsMembersPost);
        } else {
            $eventsMembersPost['id'] = $checkExists['id'];
            if (!empty($checkExists['is_going']) && empty($checkExists['is_interested']) && $_GET['event_action'] == "going") {
                delete("events_members", "id", $checkExists["id"]);
            } else if (empty($checkExists['is_going']) && !empty($checkExists['is_interested']) && $_GET['event_action'] == "interested") {
                delete("events_members", "id", $checkExists["id"]);
            } else {
                update("events_members", $eventsMembersPost, "id");
            }
        }
        header("location: $page.php");
    }
}
?>
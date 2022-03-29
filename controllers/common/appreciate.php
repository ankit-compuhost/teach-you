<?php
if (!empty($_GET['page_action'])) {
    $pagesMembersPost['page_id'] = $_GET['page_id'];
    $pagesMembersPost['user_id'] = $_SESSION['user_id'];
    $checkEvent = checkTableValue("pages", ["page_id"], ["page_id" => $_GET['page_id']]);
    if (!empty($checkEvent)) {
        $checkExists = checkTableValue("pages_likes", ["id", "page_id", "user_id"], ["page_id" => $_GET['page_id'], "user_id" => $_SESSION['user_id']]);
        switch ($_GET['page_action']) {
            case "appreciate":
                if (empty($checkExists)) {
                    create("pages_likes", $pagesMembersPost);
                } else {
                    $pagesMembersPost['id'] = $checkExists['id'];
                    if (!empty($checkExists['id']) && $_GET['page_action'] == "appreciate") {
                        delete("pages_likes", "id", $checkExists["id"]);
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
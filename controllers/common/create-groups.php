<?php
$category = getGroupCategories();
$groupPrivacy = [
    "public" => "Public Group",
    "closed" => "Closed Group",
    "secret" => "Secret Group"
];
if (!empty($_POST['submit'])) {
    //echo "<pre>";print_r($_POST);die;
    $createGroups = [
        'group_admin' => $_SESSION['user_id'],
        'group_category' => $_POST['group_category'],
        'group_title' => $_POST['group_title'],
        'slug' => createSlug("groups", $_POST['group_title']),
        'group_description' => $_POST['group_description']
    ];
    if (!empty($_POST['group_title']) && !empty($_POST['group_category']) && !empty($_POST['group_description'])) {
        $groupId = create("groups", $createGroups);
        if (!empty($groupId)) {
            $createGroupMembers = [
                "group_id" => $groupId,
                "user_id" => $_SESSION['user_id'],
                "approved" => 1
            ];
            $groupMembersId = create("groups_members", $createGroupMembers);
            $createGroupAdmins = [
                "group_id" => $groupId,
                "user_id" => $_SESSION['user_id']
            ];
            $groupAdminsId = create("groups_admins", $createGroupAdmins);

            header("location: $page.php");
        }
    } else {
        $error = "All fields are mandatory.";
    }
}
?>
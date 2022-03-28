<?php
$category = getEventsCategories();
$eventPrivacy = [
    "public" => "Public Event",
    "closed" => "Closed Event",
    "secret" => "Secret Event"
];
if (!empty($_POST['submit'])) {
    if (!empty($_POST['event_title']) && !empty($_POST['event_location']) && !empty($_POST['event_start_date']) &&
        !empty($_POST['event_end_date']) && !empty($_POST['event_privacy']) && !empty($_POST['event_category']) &&
        !empty($_POST['event_description'])  && !empty($_FILES['event_cover']['name'])) {
        $currentUser = getLoggedInUserByEmail($_SESSION['email']);
        $file = fileUpload("photos/", $_FILES['event_cover']);
        if (empty($file['error'])) {
            $postData = [
                'event_admin' => $currentUser['user_id'],
                'event_date' => date('Y-m-d H:i:s', time()),
                'event_cover' => $file['file'],
                'event_title' => $_POST['event_title'],
                "slug" => createSlug("events", $_POST['event_title']),
                'event_location' => $_POST['event_location'],
                'event_start_date' => $_POST['event_start_date'],
                'event_end_date' => $_POST['event_end_date'],
                'event_privacy' => $_POST['event_privacy'],
                'event_category' => $_POST['event_category'],
                'event_description' => $_POST['event_description']
            ];
            $eventId = create("events", $postData);

            if (!empty($eventId)) {
                header("location: " . base_url("myevents.php"));
            }
        } else {
            $error = $file['error'];
        }
    } else {
        $error = "All fields are mandatory.";
    }
}
?>
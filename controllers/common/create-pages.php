<?php
$category = getPagesCategories();
if (!empty($_POST['submit'])) {
    $createPage = [
        'page_admin' => $_SESSION['user_id'],
        'page_category' => $_POST['page_category'],
        'page_title' => $_POST['page_title'],
        'slug' => createSlug("pages", $_POST['page_title']),
        'page_description' => $_POST['page_description']
    ];
    if (!empty($_POST['page_title']) && !empty($_POST['page_category']) && !empty($_POST['page_description'])) {
        $file = fileUpload("photos/", $_FILES['page_picture']);
        if (empty($file['error'])) {
            $createPage['page_picture'] = $file['file'];
            $pageId = create("pages", $createPage);
            if (!empty($pageId)) {
                $createPageLikes = [
                    "page_id" => $pageId,
                    "user_id" => $_SESSION['user_id']
                ];
                $pageId = create("pages_likes", $createPageLikes);
                header("location: $page.php");
            }
        }
    } else {
        $error = "All fields are mandatory.";
    }
}
?>
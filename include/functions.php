<?php


/**
 * @param string $table
 * @param string $title
 * @return array|string|string[]|void|null
 */
function createSlug(string $table = "", string $title = "")
{
    $slug = preg_replace("/-$/", "", preg_replace('/[^a-z0-9]+/i', "-", strtolower($title)));
    global $conn;
    $query = "SELECT COUNT(*) AS NumHits FROM $table WHERE  slug  LIKE '$slug%'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = $result->fetch_assoc();
    $numHits = $row['NumHits'];

    return ($numHits > 0) ? ($slug . '-' . $numHits) : $slug;
}

/**
 * @param string $table
 * @param string $field
 * @param string $fieldValue
 */
function delete(string $table = "", string $field = "", string $fieldValue = "")
{
    global $conn;

    $page_query = "DELETE FROM $table WHERE $field='" . mysqli_real_escape_string($conn, $fieldValue) . "'";
    $result = mysqli_query($conn, $page_query) or die(mysqli_error($conn));
}

/**
 * @param string $path
 * @param array $file
 * @return string[]
 */
function fileUpload(string $path = "", array $file = []): array
{
    $target_dir = $path;
    $target_file = $target_dir . basename(time() . "_" . $file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $error = "";
    /*if (isset($_POST["submit"])) {
        $check = getimagesize($file["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $error .= "File is not an image.<br>";
            $uploadOk = 0;
        }
    }*/

    // Check if file already exists
    if (file_exists($target_file)) {
        $error .= "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 500000) {
        $error .= "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $error .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error .= "Sorry, your file was not uploaded.<br>";
        // if everything is ok, try to upload file
    } else {
        if (!move_uploaded_file($file["tmp_name"], $target_file)) {
            $error .= "Sorry, there was an error uploading your file.<br>";
        }
    }

    return [
        "error" => $error,
        "file" => $target_file
    ];
}

/**
 * @return array
 */
function getEventsCategories(): array
{
    global $conn;
    $query = "SELECT * FROM events_categories";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * @param string $table
 * @param array $field
 * @param array $fieldValue
 * @param bool $isOrCondition
 * @return array|false|string[]|null
 */
function checkTableValue(string $table = "", array $field = [], array $fieldValue = [], bool $isOrCondition = false)
{
    global $conn;
    $str = "";
    if ($isOrCondition) {
        foreach ($fieldValue as $key => $val) {
            $str .= " $key='" . mysqli_real_escape_string($conn, $val) . "' OR ";
        }
        $str = substr($str, 0, strlen($str) - 3);
    } else {
        foreach ($fieldValue as $key => $val) {
            $str .= " $key='" . mysqli_real_escape_string($conn, $val) . "' AND ";
        }
        $str = substr($str, 0, strlen($str) - 4);
    }
    $field = implode(",", $field);
    $query = "SELECT $field FROM $table WHERE $str";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param string $table
 * @param array $data
 * @param string $primaryField
 * @return int|string
 */
function update(string $table = "", array $data = [], string $primaryField = "")
{
    global $conn;
    $str = "";
    foreach ($data as $key => $val) {
        $str .= " $key='" . mysqli_real_escape_string($conn, $val) . "', ";
    }
    $str = substr($str, 0, strlen($str) - 2);
    $query = "UPDATE $table SET " . $str . " WHERE $primaryField='" . mysqli_real_escape_string($conn, $data[$primaryField]) . "'";
    if (mysqli_query($conn, $query)) {
        $id = true;
    } else {
        $id = false;
    }
    return $id;
}

/**
 * @param string $table
 * @param array $data
 * @return int|string|void
 */
function create(string $table = "", array $data = [])
{
    global $conn;
    $str = "";
    foreach ($data as $key => $val) {
        $str .= " $key='" . mysqli_real_escape_string($conn, $val) . "', ";
    }
    $str = substr($str, 0, strlen($str) - 2);
    $query = "INSERT INTO $table SET " . $str;
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($result) {
        $id = mysqli_insert_id($conn);
    } else {
        $id = 0;
    }
    return $id;
}

/**
 * @param string $url
 * @return string
 */
function base_url(string $url = ""): string
{
    return SITE_URL.$url;
}

/**
 * @param string $pic
 * @return string
 */
function checkProfilePic(?string $pic = ""): string
{
    $str = SITE_URL.'images/blank-profile.jpg';
    if (!empty($pic)) {
        if (file_exists('./' . $pic)) {
            $str = SITE_URL . $pic;
        }
    }

    return $str;
}

/**
 * @param int $userId
 * @return array
 */
function getAllPages(int $userId = 0)
{
    global $conn;
    $page_query = "SELECT `page_id`, `page_name`, `page_title`, `page_picture` FROM pages WHERE `page_admin`='" . mysqli_real_escape_string($conn, $userId) . "'";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

/**
 * @param int $userId
 * @param string $title
 * @param int $category
 * @param string $desc
 */
function setMyPage(int $userId = 0, string $title = "", int $category = 0, string $desc = "")
{
    global $conn;
    $query = "INSERT INTO pages SET `page_admin`='" . mysqli_real_escape_string($conn, $userId) . "', `page_category`='" . mysqli_real_escape_string($conn, $category) . "', 
    `page_title`='" . mysqli_real_escape_string($conn, $title) . "', `page_description`='" . mysqli_real_escape_string($conn, $desc) . "'";
    if (mysqli_query($conn, $query)) {
        $pageId = mysqli_insert_id($conn);
        setPageLikes($pageId, $userId);
    }
}

/**
 * @param int $pageId
 * @param int $userId
 */
function setPageLikes(int $pageId, int $userId = 0)
{
    global $conn;
    $query = "INSERT INTO pages_likes SET `page_id`='" . mysqli_real_escape_string($conn, $pageId) . "', `user_id`='" . mysqli_real_escape_string($conn, $userId) . "'";

    mysqli_query($conn, $query);
}

/**
 * @param int $pageId
 * @return int|string
 */
function getNumberAppriciate(int $pageId = 0)
{
    global $conn;
    $page_query = "SELECT count(`page_id`) FROM pages_likes WHERE `page_id`='" . mysqli_real_escape_string($conn, $pageId) . "'";
    $result = mysqli_query($conn, $page_query);

    return mysqli_num_rows($result);
}

/**
 * @return array
 */
function getGroupListing()
{
    global $conn;
    $grouplist_query = "SELECT * FROM groups";
    $result = mysqli_query($conn, $grouplist_query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

}

/**
 * @return array
 */
function getMyGroupListing()
{
    global $conn;
    $mygrouplist_query = "SELECT * FROM groups,users where groups.group_admin = users.user_id && users.user_id = '" . $_SESSION['user_id'] . "'";
    $result = mysqli_query($conn, $mygrouplist_query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

}

/**
 * @param string $firstName
 * @param string $lastName
 * @return string
 */
function generateUsername(string $firstName = "", string $lastName = "")
{
    return trim($firstName) . "_" . $lastName . "_" . md5(time() . generateRandomString(10));
}

/**
 * @param int $length
 * @return string
 */
function generateRandomString(int $length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


/**
 * @param string $email
 * @return array|false|string[]|null
 */
function getLoggedInUserByEmail(string $email = "")
{
    global $conn;
    $query = "SELECT `user_picture`, `user_id`, `user_name`, `user_firstname`, `user_lastname`, `user_email` FROM users WHERE `user_email`='" . mysqli_real_escape_string($conn, $email) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getUserFullNameById(int $id = 0)
{
    global $conn;
    $query = "SELECT user_id, `user_firstname`, `user_lastname`, `user_picture` FROM users WHERE `user_id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

?>
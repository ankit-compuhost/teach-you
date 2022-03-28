<?php
include("db.php");

/**
 * @param string $slug
 * @return array|false|string[]|null
 */
function getArticleBySlug(string $slug = "")
{
    global $conn;
    $page_query = "SELECT * FROM posts_articles WHERE slug='" . mysqli_real_escape_string($conn, $slug) . "'";
    $result = mysqli_query($conn, $page_query);

    return mysqli_fetch_assoc($result);
}

/**
 * @param string $title
 * @return array|string|string[]|void|null
 */
function updateSlug(string $title = "")
{
    $slug = preg_replace("/-$/", "", preg_replace('/[^a-z0-9]+/i', "-", strtolower($title)));
    global $conn;
    $query = "SELECT COUNT(*) AS NumHits FROM posts_articles WHERE  slug  LIKE '$slug%'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = $result->fetch_assoc();
    $numHits = $row['NumHits'];

    return ($numHits > 1) ? ($slug . '-' . $numHits) : $slug;
}

/**
 * @param string $table
 * @param array $fields
 * @return array|false|string[]|null
 */
function checkDataAlreadyExists(string $table = "", array $fields = [])
{
    global $conn;
    $str = "";
    $field = [];
    foreach ($fields as $key => $val) {
        $str .= " $key='" . mysqli_real_escape_string($conn, $val) . "' AND ";
        $field[] = $key;
    }
    $str = substr($str, 0, strlen($str) - 4);
    $field = implode(",", $field);
    $query = "SELECT $field FROM $table WHERE $str";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @return array
 */
function getBlogCategories(): array
{
    global $conn;
    $query = "SELECT * FROM blogs_categories";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}


/**
 * @param int $id
 * @return array|false|string[]|null
 */
function getArticleById(int $id = 0)
{
    global $conn;
    $query = "SELECT * FROM posts WHERE `post_id`='" . mysqli_real_escape_string($conn, $id) . "'";
    $result = mysqli_query($conn, $query);

    return mysqli_fetch_assoc($result);
}

/**
 * @return array
 */
function getAllArticle()
{
    global $conn;
    $page_query = "SELECT * FROM posts_articles";
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
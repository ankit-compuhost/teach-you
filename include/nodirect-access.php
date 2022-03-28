<?php
if (empty($_SESSION['email'])) {
    header("location:".SITE_URL);
}
?>
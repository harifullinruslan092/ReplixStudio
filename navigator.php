<?php

require_once __DIR__ . "/modules/auth/utils.php";

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = mysqli_real_escape_string($CONNECTION_LINK, $_GET['page']);
    // $subpage = strstr($page, '/', true);
    // $subpage = ($subpage === false) ? $page : $subpage;
    $result = mysqli_query($CONNECTION_LINK, "SELECT * FROM pages WHERE name='$page'");
    if (mysqli_num_rows($result) == 0) {
        include_once 'templates/page-not-found.php';
    } else {
        $page_name = mysqli_fetch_assoc($result)['name'];

        include_once "templates/" . $page_name . ".php";
    }
} else {
    include_once 'templates/home.php';
}

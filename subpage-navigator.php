<?php

require_once __DIR__ . "/modules/auth/utils.php";

$page = mysqli_real_escape_string($CONNECTION_LINK, $_GET['page']);
if (isset($page)) {
    if (isset($_GET['subpage']) && !empty($_GET['subpage'])) {
        $subpage = mysqli_real_escape_string($CONNECTION_LINK, $_GET['subpage']);
        $result = mysqli_query($CONNECTION_LINK, "SELECT * FROM `subpages` WHERE name='$subpage'");
        if (mysqli_num_rows($result) == 0) {
            include_once 'templates/subpage-not-found.php';
        } else {
            $subpage_name = mysqli_fetch_assoc($result)['name'];
            if ($page == 'dashboard') {
                include_once "modules/dashboard/" . $subpage_name . ".php";
            } else if ($page == 'admin-panel') {
                include_once "modules/adminpanel/" . $subpage_name . ".php";
            } else if ($page == 'games') {
                include_once "modules/games/" . $subpage_name . ".php";
            } else {
                include_once 'templates/home.php';
            }
        }
    } else {
        if ($page == 'dashboard') {
            include_once 'modules/dashboard/about-me.php';
        } else if ($page == 'admin-panel') {
            include_once 'modules/adminpanel/users.php';
        } else {
        }
    }
} else {
    include_once 'templates/home.php';
}
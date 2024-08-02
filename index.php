<?php
require_once __DIR__ . "/modules/auth/utils.php";
require_once __DIR__ . "/modules/handlers/functions.php";
require_once __DIR__ . "/modules/messager/displayMessages.php";
require_once __DIR__ . "/modules/statistics/displayWebsiteStat.php";
require_once __DIR__ . "/modules/dashboard/handlers/displayCurrentUser.php";

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta name="description" content="Replix Studio educational portal ">
    <meta name="author" content="Replix Studio">
    <title>Replix Studio</title>
    <link rel="shortcut icon" href="static/images/icon.png">
    <link rel="stylesheet" href="static/css/styles.css">
    <link rel="stylesheet" href="./static/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="static/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!-- https://fonts.google.com/ -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/templatemo-xtra-blog.css" rel="stylesheet">
    <link href="static/css/support-chat.css" rel="stylesheet">

    <style>
        .badge {
            margin-top: 10px;
            width: 8rem;
            height: 2rem;
            background-color: #332347 !important;

        }

        #messager-dropdown {
            right: -50px !important;
        }

        .badge a {
            color: white;
            font-size: 1.3rem;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .badge a:hover {
            color: #53c5cf
        }

        .join-us-link {
            color: #f7c65c;
        }

        .join-us-link:hover {
            color: #f7c65c;
            text-decoration: underline;
        }

        #web-menu-toggle {
            position: absolute;
            top: 0;
            right: 0px;
            margin: 0px;
            border: 0px;
            color: white;
            /* Adjust this value according to your preference */
        }

        .tm-header {
            position: relative;
        }

        .message-container {
            height: 30px;
            overflow: hidden;
        }

        .message {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .message-field .row:hover {
            background-color: #ddd;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation" id="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <a href="?page=home">
                <div class="tm-site-header">
                    <div class="mb-2 mx-auto logo-container" class="pulse-image">
                        <img id="pulseImage" src="static/images/logo.jpg" alt="replix-logo" width="100%">
                    </div>
            </a>
            <h1 class="text-center color-changing-text" id="changingText">REPLIX STUDIO</h1>
        </div>

        <!-- original menu -->
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <li class="tm-nav-item active" id="home-link">
                    <a href="?page=home" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="tm-nav-item" id="premium-plus-link">
                    <a href="?page=premium-plus" class="tm-nav-link">
                        <i class="fa-solid fa-certificate"></i>
                        Premium Plus
                    </a>
                </li>
                <li class="tm-nav-item" id="community-link">
                    <a href="?page=community" class="tm-nav-link">
                        <i class="fa-solid fa-users"></i>
                        Our Community
                    </a>
                </li>
                <li class="tm-nav-item" id="youtube-link">
                    <a href="?page=youtube" class="tm-nav-link">
                        <i class="fab fa-youtube"></i>
                        YouTube Classes
                    </a>
                </li>
                <li class="tm-nav-item" id="lang-exchange-link">
                    <a href="?page=lang-exchange" class="tm-nav-link">
                        <i class="fa-solid fa-globe"></i>
                        Lang Exchange
                    </a>
                </li>
                <li class="tm-nav-item" id="speaking-club-link">
                    <a href="?page=speaking-club" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Speaking Club
                    </a>
                </li>
                <li class="tm-nav-item" id="speaking-club-link">
                    <a href="?page=tutors" class="tm-nav-link">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Search Tutors
                    </a>
                </li>
                <li class="tm-nav-item" id="games-link">
                    <a href="?page=games" class="tm-nav-link">
                        <i class="fa-solid fa-puzzle-piece"></i>
                        Play Games
                    </a>
                </li>
                <li class="tm-nav-item" id="podcasts-link">
                    <a href="?page=podcasts" class="tm-nav-link">
                        <i class="fa-solid fa-podcast"></i>
                        Podcasts
                    </a>
                </li>
                <li class="tm-nav-item" id="online-store-link">
                    <a href="http://replix-studio.store" class="tm-nav-link" target="_blank">
                        <i class="fas fa-solid fa-cart-plus"></i>
                        Online Store
                    </a>
                </li>
                <li class="tm-nav-item" id="blog-link">
                    <a href="?page=blog" class="tm-nav-link">
                        <i class="fa-solid fa-blog"></i>
                        Replix Blog
                    </a>
                </li>
                <li class="tm-nav-item" id="about-link">
                    <a href="?page=about" class="tm-nav-link">
                        <i class="fa-solid fa-address-card"></i>
                        About Replix
                    </a>
                </li>
                <li class="tm-nav-item" id="contact-link">
                    <a href="?page=contact" class="tm-nav-link">
                        <i class="fa-solid fa-paper-plane"></i>
                        Contact Us
                    </a>
                </li>
            </ul>
        </nav>



        <h4>Follow Us</h4>
        <div class="tm-mb-40 ">
            <div class="icon-container" title="Youtube">
                <a target="_blank" href="https://youtube.com/@replix-english-studio" class="tm-social-link">
                    <i class="fab fa-youtube tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="TikTok">
                <a target="_blank" href="https://tiktok.com/@replix.studio" class="tm-social-link">
                    <i class="fa-brands fa-tiktok tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="Instagram">
                <a target="_blank" href="https://instagram.com/replix.studio" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="Facebook">
                <a target="_blank" href="https://facebook.com/replix.studio" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="X (Twitter)">
                <a target="_blank" href="https://twitter.com/replix_studio" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="Pinterest">
                <a target="_blank" href="https://pinterest.com/replix_studio" class="tm-social-link">
                    <i class="fab fa-pinterest tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="Telegram">
                <a target="_blank" href="https://t.me/replix_english" class="tm-social-link">
                    <i class="fab fa-telegram tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="Gmail">
                <a target="_blank" href="mailto:replix.english@gmail.com" class="tm-social-link">
                    <i class="fab fa-google-plus tm-social-icon pulse-image"></i>
                </a>
            </div>
        </div>
        <h4>Donate Us</h4>
        <div class="tm-mb-55">
            <div class="icon-container" title="Patreon">
                <a target="_blank" href="https://patreon.com/replix_studio" class="tm-social-link">
                    <i class="fab fa-patreon tm-social-icon pulse-image"></i>
                </a>
            </div>
            <div class="icon-container" title="Kickstarter">
                <a target="_blank" href="https://kickstarter.com/profile/replix-studio" class="tm-social-link">
                    <i class="fab fa-kickstarter tm-social-icon pulse-image"></i>
                </a>
            </div>
        </div>
        <h4>Who we are?</h4>
        <p class="pr-5 text-white text-justify">
            <strong>Replix Studio</strong> is an educational platform for English learners.<br>
            We help people worldwide improve their language skills by providing useful resources like video lessons,
            worksheets, and many more.
            <hr style="margin-top:40px !important">
            <a href="?page=signup" class="join-us-link">Join us, challenge your mind!</a>


        </p>
        </div>
    </header>
    <div class="container-fluid header-background" style="width:100% !important;">
        <nav class="tm-up-navigation ">



            <!-- Log in, sign up, logout, dashboard -->
            <div class="row tm-row mb-10 ">
                <div class="col-12 d-flex justify-content-end w-100 ">
                    <?php
                    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                    ?>
                        <div class="icon-container badge text-wrap mr-3">
                            <div class="pulse-image ">
                                <a target="_blank" href="https://www.patreon.com/replix_studio/membership" class="">Subscribe!
                                </a>
                            </div>
                        </div>
                        <div class="icon-container">
                            <a href="?page=login&csrf_token=<?php echo createToken(); ?>" class="tm-social-link transparent-background" title="Log in or Sign up">
                                <i class="fa-solid fa-right-to-bracket tm-social-icon pulse-image"></i>
                            </a>
                        </div>
                    <?php
                    } else {
                        echo '<h5 id="welcome-user" title="Welcome, ' . $current_user['name'] . '!" class=" tm-post-title pt-2 mr-4">' . $current_user['email'] . '</h5>'; ?>
                        <div class="user-menu-wrapper ">
                            <div class="icon-container" style="cursor:pointer">
                                <a id="user-menu" class="tm-social-link transparent-background">
                                    <i class="fa-solid fa-user tm-social-icon pulse-image"></i>
                                </a>
                            </div>
                            <div id="user-dropdown" class="user-dropdown-content ">
                                <?php
                                if (isset($current_user['status']) &&  $current_user['status'] === 1) {
                                    echo ' 
                                    <div class="tm-social-icon">
                                        <a onclick="window.location.href =\'?page=admin-panel\'">
                                            <i class="fa-solid fa-lock mr-2"></i>   
                                            <span>Admin panel</span>                                     
                                                
                                        </a>
                                    </div>
                                    ';
                                }
                                ?>
                                <div class="tm-social-icon">
                                    <a onclick="window.location.href = '?page=newsfeed'">
                                        <i class="fa-solid fa-square-rss mr-2"></i>
                                        <span>Newsfeed</span>
                                    </a>
                                </div>
                                <div class="tm-social-icon">
                                    <a onclick="window.location.href = '?page=chat'">
                                        <i class="fa-brands fa-rocketchat mr-2"></i>
                                        <span>Community chat</span>
                                    </a>
                                </div>
                                <div class="tm-social-icon">
                                    <a onclick="window.location.href = '?page=dashboard&subpage=about-me'">
                                        <i class="fa-solid fa-address-card mr-2"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </div>
                                <div class="tm-social-icon">
                                    <a onclick="window.location.href ='?page=settings'">
                                        <i class="fa-solid fa-gear mr-2"></i>
                                        <span>Settings</span>
                                    </a>
                                </div>
                                <div class="tm-social-icon">
                                    <a onclick="logout();">
                                        <i class="fa-solid fa-right-from-bracket mr-2"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="user-menu-wrapper ">
                            <div class="icon-container" style="position:relative; cursor:pointer;">
                                <?php if ($unreadMessages['num_rows'] > 0) {
                                    echo '<div style="position:absolute; right:10px; top:0; font-weight:bold;">' . $unreadMessages['num_rows'] . '</div>';
                                } ?>

                                <a id="messager" onclick="showMessagerChat();" class="tm-social-link transparent-background " title="<?php echo $unreadMessages['num_rows'] > 0 ? 'You have ' . $unreadMessages['num_rows'] . ' unread messages' : 'Your message box is empty'  ?>">
                                    <i class="fa-solid fa-message tm-social-icon pulse-image"></i>
                                </a>
                            </div>
                            <div id="messager-dropdown" class="user-dropdown-content " style="overflow:auto;">
                                <div class="container">
                                    <div class="row mb-2 ">
                                        <div class="col-7">
                                            <h3><i class="fa-solid fa-envelope mr-2"></i>My messages</h3>
                                        </div>
                                        <div class="col-5" style="text-align:right !important;">
                                            <a href="#" title="Settings"><span><i class="fa-solid fa-gear"></i></span></a>
                                            <a href="#" onclick="openMessager('./messager.php', window.innerWidth-10, window.innerHeight-10); return false;" title="Open Messager"><span><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
                                            <a href="#" title="Write message"><span><i class="fa-solid fa-pen-to-square"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search messages" onkeydown="if(event.key === 'Enter'){event.preventDefault(); setGETParameter('search-message', this.value);}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary" type="button" onclick="setGETParameter('search-message', this.parentNode.previousElementSibling.value);">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                    <button class="btn btn-outline-secondary" type="button" title="Cancel search" onclick="removeGETParameter('search-message');">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php if ($messages) {
                                            foreach ($messages as $m) {
                                                if ($m['user1_id'] == $_SESSION['userID']) {
                                                    $user_id = 'user2_id';
                                                } else {
                                                    $user_id = 'user1_id';
                                                }
                                                if ($C) {
                                                    $query = 'SELECT u.*, ui.*
                                                FROM users u
                                                LEFT JOIN users_info ui ON u.id = ui.users_id
                                                WHERE u.id = ?';
                                                    $res = sqlSelect($C, $query, 'i', $m[$user_id]);
                                                    if ($res && $res->num_rows === 1) {
                                                        $user = $res->fetch_assoc();
                                                    }
                                                }
                                        ?>
                                                <div class="col-12">
                                                    <div class="container message-field">
                                                        <div class="row" style="padding:5px 0px;">
                                                            <div class="col-3">
                                                                <div class="overlay-circle <?php echo $user['gender'] == 1 ? 'male' : ($user['gender'] === 2 ? 'female' : 'no-gender'); ?>">
                                                                    <img src="<?php echo $user['photo_path'] ?>" alt="<?php echo $user['name'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h5><b><?php echo ($user['first_name'] && $user['last_name']) ? $user['first_name'] . ' ' . $user['last_name'] : $user['name'] ?>
                                                                                </b></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row message-container">
                                                                        <div class="col-12 message">
                                                                            <span><?php echo $m['message'] ?></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <blockquote style="font-style: italic; font-size:12pt">
                                                                                <?php echo getTimeDiff($m['updated_at']) . ' ago'; ?>
                                                                            </blockquote>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo '<span class="pl-3 pt-2"><i class="fa-regular fa-face-frown mr-2"></i>Your message box is empty</span>';
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="icon-container">
                        <a href="?page=FAQ" class="tm-social-link transparent-background " title="FAQ">
                            <i class="fa-solid fa-circle-info tm-social-icon pulse-image"></i>
                        </a>
                    </div>
                    <div class="icon-container">
                        <a href="javascript:void(0);" class="tm-social-link transparent-background" title="Need support?" onclick="openChat()">
                            <i class="fa-sharp fa-solid fa-headset tm-social-icon pulse-image"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form id="searchForm" class="form-inline tm-mb-40 tm-search-form">
                        <input class="form-control tm-search-input" type="text" id="searchQuery" placeholder="Search..." aria-label="Search" onkeydown="if(event.key === 'Enter'){event.preventDefault(); performSearch();}">
                        <div class="col-1">
                            <button class="tm-search-button" type="button" title="Run search" onclick="performSearch()">
                                <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                            </button>
                    </form>
                </div>
            </div>

        </nav>
    </div>

    <!-- Navigator php -->
    <div style="min-height:600px">
        <?php
        include 'navigator.php';
        ?>
    </div>


    <footer class="tm-footer">
        <div class="container-fluid" style="height:80px">

            <div class="row tm-row">
                <div class="mt-4 mb-4 col-12">
                    <hr>
                </div>
            </div>


            <!-- Newsletter Section -->
            <div class="row tm-row">
                <div class="mb-4 col-12">
                    <div class="newsletter-section container">
                        <div class="row">
                            <div class="col-5">
                                <h3><i class="fa-regular fa-envelope mr-2"></i>Subscribe our Newsletter</h3>
                                Keep up with our latest updates (FREE)
                            </div>
                            <div class="col-7">
                                <form>
                                    <!-- need captcha !!!!  -->
                                    <?php if ($_SESSION['loggedin']) {
                                        echo '<input type="email" disabled class="newsletter-input" value=' . $current_user['email'] . '                                       
                                        id="newsletter-email">';
                                    } else {
                                        echo '<input type="email"
                                        class="newsletter-input" placeholder="Enter your email" required
                                        id="newsletter-email">';
                                    } ?>
                                    <button type="button" class="newsletter-button" onclick="subscribeNewsLetter()">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row tm-row tm-mb-40">
                <div class="col-md-6 col-12 tm-color-gray">
                    <i class="fa-brands fa-connectdevelop mr-2"></i>Developed by: <a rel="nofollow" target="_parent" href="mailto:replix.english@gmail.com" class="tm-external-link">ReplixStudio</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2023-2024 <i class="fa-regular fa-copyright mr-2 ml-2"></i> Replix Studio
                </div>
            </div>


            <div class="row tm-row mb-2">
                <div class="col-12">
                    <span>
                        <i class="fa-solid fa-chart-simple mr-2"></i>
                        Website statistics:
                    </span>
                </div>
            </div>

            <div class="row tm-row text-center pt-4" style="margin: 0px 10px; border-top:1px solid #999">
                <div class="col-4">
                    <h4 class="tm-color-primary"><i class="fa-solid fa-users mr-2"></i>Replix Community</h4>
                    <p>
                        <a href="?page=community"><span><?php echo $num_users ? $num_users : '0'; ?> &nbsp;
                                users</span></a>
                    </p>
                </div>
                <div class=" col-4">
                    <h4 class="tm-color-primary"><i class="fa-solid fa-graduation-cap mr-2"></i>English Tutors
                    </h4>
                    <p>
                        <a href="?page=tutors"><span>
                                <?php echo $num_tutors ? $num_tutors : '0'; ?>&nbsp; tutors</span></a>
                    </p>
                </div>
                <div class="col-4">
                    <h4 class="tm-color-primary"><i class="fab fa-youtube mr-2"></i>Youtube classes</h4>
                    <p>
                        <a href="?page=youtube"><span>
                                <?php echo $num_classes ? $num_classes : '0'; ?> &nbsp; classes</span></a>
                    </p>
                </div>
                <div class="col-4">
                    <h4 class="tm-color-primary"><i class="fa-solid fa-blog mr-2"></i>Blog articles</h4>
                    <p>
                        <a href="?page=youtube"><span>
                                <?php echo $num_posts ? $num_posts : '0'; ?> &nbsp; articles</span></a>
                    </p>
                </div>
                <div class="col-4">
                    <h4 class="tm-color-primary"><i class="far fa-comments mr-2"></i>Speaking clubs</h4>
                    <p>
                        <a href="?page=speaking-club"><span>
                                <?php echo $num_speaking_rooms ? $num_speaking_rooms : '0'; ?>&nbsp; rooms</span></a>
                    </p>
                </div>
                <div class="col-4">
                    <h4 class="tm-color-primary"><i class="fa-solid fa-puzzle-piece mr-2"></i>Online games</h4>
                    <p>
                        <a href="?page=games"><span>
                                <?php echo $num_games ? $num_games : '0'; ?>&nbsp; games</span></a>
                    </p>
                </div>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <h4 class="tm-color-primary"><i class="fa-solid fa-podcast mr-2"></i>Podcasts</h4>
                    <p>
                        <a href="?page=games"><span>
                                <?php echo $num_podcasts ? $num_podcasts : '0'; ?>&nbsp; podcasts</span></a>
                    </p>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </footer>

    <!-- websockets support chat -->
    <div id="chatbox" class="chatbox">
        <div class="chat-header">
            <span class="close-btn" onclick="closeChat()">×</span>
            <span class="maximize-btn" onclick="toggleMaximize()">☐</span>
            <i class="fa-solid fa-headset mr-2"></i>Chat Support
        </div>
        <div class="chat-body">
            <div id="chat-messages" class="chat-messages">
                <span>We're sorry. <br>
                    Support chat is currently unavailable.<br>
                    To receive support please contact admin via messager
                    or <a href="?page=contact" class="link">contact form</a></span>
                <!-- Chat messages will be displayed here -->
            </div>
            <input onkeydown="if(event.key === 'Enter'){event.preventDefault(); sendMessage('<?php echo $user['id']; ?>','<?php echo $user['name']; ?>');}" type="text" id="user-input" name="message" placeholder="Type your message..." required>
            <button title="Send message" onclick="sendMessage('<?php echo $user['id']; ?>','<?php echo $user['name']; ?>')"><i class="fa-solid fa-paper-plane"></i></button>
        </div>
    </div>
    <script src="static/js/messager.js"></script>
    <script src="static/js/chatbot.js"></script>

    <script src="static/js/templatemo-script.js"></script>
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        showDropDownMenu('user-menu', 'user-dropdown');

        $(document).ready(function() {
            $(".navbar-toggler").on("click", function(e) {
                $(".tm-header").toggleClass("show");
                e.stopPropagation();
            });

            $("html").click(function(e) {
                var header = document.getElementById("tm-header");

                if (!header.contains(e.target)) {
                    $(".tm-header").removeClass("show");
                }
            });

            $("#tm-nav .nav-link").click(function(e) {
                $(".tm-header").removeClass("show");
            });

            $("#web-menu-toggle").on("click", function(e) {
                $(".tm-header").toggleClass("show");
                e.stopPropagation();
            });


        });
    </script>
    <script async src="https://cse.google.com/cse.js?cx=91be3bd6b1b054b6b">
    </script>
</body>

</html>
<?php
include (ROOT_PATH . 'models/User.php');
$user = new User();
if (isset($_SESSION['user_id'])) {
    $user_id = filter_var($_SESSION['user_id'], FILTER_SANITIZE_NUMBER_INT);
    $the_user = $user->getUserById($user_id);


}
?>
<header class="header-profile d-flex justify-content-between align-items-center">
    <img src="img/logo.png" alt="" class="profile__logo">
    <nav class="nav">
        <div class="nav__box">
            <svg class="nav__box-icon">
                <use xlink:href="img/SVG/symbol-defs.svg#icon-envelope-open-o"></use>
            </svg>
            <span class="nav__box-notif">3</span>
        </div>
        <div class="nav__box">
            <svg class="nav__box-icon">
                <use xlink:href="img/SVG/symbol-defs.svg#icon-comments"></use>
            </svg>
            <span class="nav__box-notif">7</span>
        </div>
        <div class="nav__box">
            <svg class="nav__box-icon nav__box-icon--shopping_cart">
                <use xlink:href="img/SVG/symbol-defs.svg#icon-shopping-cart"></use>
            </svg>
            <span class="nav__box-notif">7</span>
        </div>
        <div class="nav__user dropdown">
            <img src="../img/users/<?= $the_user->user_image;?>" alt="user img" class="nav__user-photo">
            <a href="dropdown-toggle" data-toggle="dropdown" class="user-name">
                <span class="nav__user-name carrot">
                    <?= $the_user->user_name ?>&#9660;</span>
                <ul class="nav__user-dropdown dropdown-menu">
                    <li class="nav__user-item">
                        <a href="../php/logout.php" class="nav__user-link">
                            <svg>
                                <use xlink:href="img/SVG/symbol-defs.svg#icon-sign-out"></use>
                                <span>Sign Out</span>
                            </svg>
                        </a>
                    </li>
                </ul>
            </a>
        </div>
        <div class="nav__online">
            <span class="nav_notif u-online"></span>
        </div>
    </nav>
</header>

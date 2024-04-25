<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/controllers/AdminController.php";

session_start();
if (!isset($_SESSION['admin'])) {
    // Redirect to the login page
    header("Location: /tunisietelecom/admin/login");
    exit();
}

$dashboard = new Dashboard(new AdminModel());
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.css"
        />
        <link rel="stylesheet" href="/tunisietelecom/includes/styles/style.css" />
        <title>Admin</title>
    </head>
    <body>
        <header class="header">
            <div
                class="header__logo dflex px-1 justify-content-start align-items-center"
            >
                <i class="header__collapse--btn fas fa-align-left"></i>
                <img
                    height="60px"
                    class="header__logo__img"
                    src="/tunisietelecom/assets/images/logo.png"
                    alt="tunisietelecom"
                />
            </div>
            <div
                class="header__profile px-1 mx-3 dflex justify-content-start align-items-center"
                style="margin-left:950px;"
            >
                <div class="header__profile__imgWrapper mr-1">
                    <img
                        class="header__profile__img"
                        src="/tunisietelecom/assets/avatar.jpg"
                        alt=""
                    />
                </div>
                <p
                    class="header__profile__name text-white text-bold-500 relative"
                >
                    Admin
                </p>
            </div>
        </header>
        <div>
            <span class="header__profile__name--nav">
                <span class="header__profile__name--nav--pointer">
                    <i class="fas fa-sort-up"></i>
                </span>
                <ul class="header__profile__name--nav--list">
                    <li class="header__profile__name--nav--item">
                        <a class="header__profile__name--nav--link" href="dashboard"
                            >Profile</a
                        >
                    </li>
                    <li class="header__profile__name--nav--item">
                        <a class="header__profile__name--nav--link" href="/tunisietelecom/admin/logout">Logout
                            </a>
                    </li>
                </ul>
            </span>
        </div>
        <nav class="nav">
            <div class="nav__wrapper">
                <span class="nav__close">
                    <i class="fas fa-window-close"></i>
                </span>
                <ul class="nav__list">
                    <li class="nav__item">
                        <a class="nav__link nav__active" href="dashboard">
                            <span class="nav__link--span--icon"
                                ><i class="fas fa-home nav__link--icon"> </i
                            ></span>
                            <span class="nav__link--span--navname">
                                Home
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="main">
            <div class="main__sideNav"></div>
            <div class="main__content">
                <div class="home">
                    <h2 class="my-3">Overview Dashboard</h2>
                    <div class="home__cards">
                        <div class="home__cards--item px-2 py-2 card">
                            <p class="home__cards--title">Total Sales</p>
                            <p class="home__cards--count">DT 100</p>
                            <hr />
                        </div>
                        <div class="home__cards--item px-2 py-2 card">
                            <p class="home__cards--title">Total Orders</p>
                            <p class="home__cards--count">100</p>
                            <hr />
                        </div>
                        <div class="home__cards--item px-2 py-2 card">
                            <p class="home__cards--title">Total Customers</p>
                            <p class="home__cards--count">
                                100
                            </p>
                            <hr /> 
                        </div>
                    </div>
                
                </div>
                </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="/tunisietelecom/includes/js/script.js"></script>
    </body>
</html>
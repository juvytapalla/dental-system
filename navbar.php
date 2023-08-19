<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<style>
    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    button {
        cursor: pointer;
        border: none;
        outline: none;
    }

    .header {
        width: 100%;
        background-color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
    }


    /*=============== NAV ===============*/
    .nav {
        height: 56px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav__logo,
    .nav__close,
    .nav__toggle {
        color: #000;
    }

    .nav__logo {
        display: flex;
        align-items: center;
        column-gap: 4px;
        font-weight: 500;
    }

    .nav__logo-img {
        width: 55px;
    }

    .nav__toggle {
        display: inline-flex;
        font-size: 20px;
        cursor: pointer;
    }

    @media screen and (max-width: 770px) {
        .nav__menu {
            position: fixed;
            background-color: #fff;
            top: -100%;
            left: 0;
            width: 100%;
            padding: 64px 0;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
            transition: .4s;
        }
    }

    .nav__list {
        display: flex;
        flex-direction: column;
        align-items: center;
        row-gap: 24px;
    }

    .nav__link {
        color: #000;
        font-weight: 500;
        transition: .3s;
    }

    .nav__link:hover {
        color: #1363DF;
    }

    .nav__close {
        font-size: 32px;
        position: absolute;
        top: 8px;
        right: 16px;
        cursor: pointer;
    }

    /* Show menu */
    .show-menu {
        top: 0;
    }

    /* Change background header */
    .scroll-header {
        box-shadow: 0 1px 4px hsla(0, 4%, 15%, .1);
    }

    /* Active link */
    .active-link {
        color: #0B212F;
    }

    /*=============== BUTTONS ===============*/
    .button {
        display: inline-block;
        background-color: #47B5FF;
        color: #fff;
        padding: 18.5px 44px;
        font-weight: 500;
        border-radius: 48px;
        transition: .3s;
        margin-bottom: 50px;
    }

    .button:hover {
        background-color: #D9d9d9;
    }

    .button1 {
        display: inline-block;
        background-color: #47B5FF;
        color: #fff;
        padding: 15px 30px;
        font-weight: 500;
        border-radius: 48px;
        transition: .3s;
    }

    .button2 {
        display: inline-block;
        background-color: #fff;
        color: #000;
        padding: 12px 30px;
        font-weight: 500;
        border-radius: 48px;
        transition: .3s;
        border: 2px solid #000;
    }

    .button2:hover {
        background-color: #d9d9d9;
    }

    @media screen and (min-width: 770px) {

        .nav {
            height: 80px;
            column-gap: 48px;
        }

        .nav__toggle,
        .nav__close,
        .nav__img {
            display: none;
        }

        .nav__menu {
            margin-left: auto;
        }

        .nav__list {
            flex-direction: row;
            column-gap: 48px;
        }
    }
</style>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">
                <img src="img/logo.png" alt="" class="nav__logo-img"></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#" class="nav__link">Explore Services</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Learn Our Story</a>
                    </li>
                    <li class="nav__item">
                        <a href="login.php" class="button1 button2">Login</a>
                    </li>
                    <li class="nav__item ">
                        <a href="sign_up.php" class="button1">Sign Up</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

            </div>
            <div class="nav__btns">
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </div>

        </nav>
    </header>
</body>

<script>
    /*=============== SHOW MENU ===============*/
    const navMenu = document.getElementById('nav-menu'),
        navToggle = document.getElementById('nav-toggle'),
        navClose = document.getElementById('nav-close')

    /*===== MENU SHOW =====*/
    /* Validate if constant exists */
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('show-menu')
        })
    }

    /*===== MENU HIDDEN =====*/
    /* Validate if constant exists */
    if (navClose) {
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('show-menu')
        })
    }

    /*=============== REMOVE MENU MOBILE ===============*/
    const navLink = document.querySelectorAll('.nav__link')

    function linkAction() {
        const navMenu = document.getElementById('nav-menu')
        // When we click on each nav__link, we remove the show-menu class
        navMenu.classList.remove('show-menu')
    }
    navLink.forEach(n => n.addEventListener('click', linkAction))
</script>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        footer {
            padding: 40px 0;
            background-color: white;
            font-family: 'Roboto', sans-serif;
            background-color: #DFF6FF;
        }

        hr {
            width: 90%;
            border: 0;
            border-bottom: 1px solid #000;
            margin: 20px auto;
        }

        .social {
            text-align: center;
            padding-bottom: 25px;
            color: gray;
        }

        .social a {
            font-size: 24px;
            font-family: 'Roboto', sans-serif;
            color: black;
            border: 1px solid black;
            width: 40px;
            height: auto;
            line-height: 38px;
            display: inline-block;
            text-align: center;
            border-radius: 50px;
            margin: 0 8px;
            opacity: 0.75;
            cursor: pointer;
        }

        .social .bxl-facebook:hover {
            color: blue;
            transform: translateY(-3px);
        }

        .social .bxl-gmail:hover {
            color: red;
            transform: translateY(-3px);
        }

        .social .bx-phone:hover {
            color: gray;
            transform: translateY(-3px);
        }

        footer ul {
            display: flex;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            margin-top: 0;
            padding: 0;
            list-style: none;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 0;
            text-align: center;
        }

        @media screen and (max-width:820px) {
            footer ul {
                flex-direction: column;
                padding-bottom: 20px;
            }
        }

        footer ul li a {
            color: black;
            text-decoration: none;
            opacity: 0.8;
        }

        footer ul li {
            display: inline-block;
            padding: 0 15px;
        }

        footer ul li a:hover {
            opacity: 1;
        }

        footer .copyright {
            margin-top: 25px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
        }
    </style>
</head>

<body>
</body>
<footer>
    <div class="social">
        <a href="#"><i class='bx bx-phone'></i></a>
        <a href="#"><i class='bx bxl-gmail'></i></a>
        <a href="#"><i class='bx bxl-facebook'></i></i></i></a>
    </div>

    <ul class="list">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Explore Services</a>
        </li>
        <li>
            <a href="#">Learn Our Story</a>
        </li>
        <li>
            <a href="#">How It Works</a>
        </li>
        <li>
            <a href="#">Terms of Use</a>
        </li>
        <li>
            <a href="#">Privacy Policy</a>
        </li>
    </ul>
    <hr>
    <p class="copyright"> <i>© MATES 2023 All Rights Reserved</i></p>
</footer>

</html>
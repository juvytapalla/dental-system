<?php require_once 'splash.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0B212F">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/iconn.ico">
    <title>Dental Clinic</title>
</head>

<body>
    <!--==================== NAVBAR ====================-->
    <?php include "navbar.php" ?>
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="img/banner.png" alt="" class="home__img">
                <div class="home__data">
                    <h1 class="home__title">Simplify Dental Visits:<br> Book, Track, and Smile Bright!</h1>
                    <a href="login.php" class="button">Get Started Now!</a>
                </div>
            </div>
        </section>

        <!--==================== BENEFITS ====================-->
        <section class="benefit section container">
            <h2 class="section__title">
                Embrace the future of Dental Care
            </h2>
            <p class="section__description">
                Experience seamless appointments, timely reminders, and secure record access anytime, anywhere.
            </p>

            <div class="benefit__container grid">
                <div class="benefit__content">
                    <img src="img/time.png" alt="" class="benefit__img">
                    <h3 class="benefit__title">Time-Saving Convenience</h3>
                    <p class="benefit__description">No more phone calls, just a smooth online experience</p>
                </div>

                <div class="benefit__content">
                    <img src="img/appo.png" alt="" class="benefit__img">
                    <h3 class="benefit__title">Easy Appointment Management</h3>
                    <p class="benefit__description">Schedule or cancel dental appointments effortlessly.</p>
                </div>

                <div class="benefit__content">
                    <img src="img/bell.png" alt="" class="benefit__img">
                    <h3 class="benefit__title">Timely Reminder Alerts</h3>
                    <p class="benefit__description">Never miss an appointment with our convenient alerts.</p>
                </div>

                <div class="benefit__content">
                    <img src="img/loca.png" alt="" class="benefit__img">
                    <h3 class="benefit__title">Universal Access, Anytime, Anywhere</h3>
                    <p class="benefit__description">Keep track of your oral health progress and milestones in any devices</p>
                </div>
            </div>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="service section container">
            <h2 class="section__title">Discover Our Exceptional Dental Services</h2>
            <p class="section__description">
                Explore our Dental Services that cater to your unique needs and exceed your expectations
            </p>

            <div class="service__container grid">
                <article class="service__card">
                    <img src="img/extraction.jpg" alt="" class="service__img">
                    <h3 class="service__title">Tooth Extraction</h3>
                    <span class="service__descri">Removal of a damaged or problematic tooth.</span>
                </article>

                <article class="service__card">
                    <img src="img/x-ray.jpg" alt="" class="service__img">
                    <h3 class="service__title">X-Ray</h3>
                    <span class="service__descri">Diagnostic imaging to identify hidden dental issues, such as cavities or impacted teeth.</span>
                </article>

                <article class="service__card">
                    <img src="img/fillings.jpg" alt="" class="service__img">
                    <h3 class="service__title">Dental Fillings</h3>
                    <span class="service__descri">Restorative procedure to repair and fill cavities caused by tooth decay.</span>
                </article>

                <article class="service__card">
                    <img src="img/orthodontic.jpg" alt="" class="service__img">
                    <h3 class="service__title">Orthodontics</h3>
                    <span class="service__descri">Dental treatment to correct teeth misalignment and improve bite.</span>
                </article>

                <article class="service__card">
                    <img src="img/dentures.jpg" alt="" class="service__img">
                    <h3 class="service__title">Dentures</h3>
                    <span class="service__descri">Removable replacements for missing teeth and surrounding tissues.</span>
                </article>

                <article class="service__card">
                    <img src="img/cleaning.jpg" alt="" class="service__img">
                    <h3 class="service__title">Dental Cleaning</h3>
                    <span class="service__descri">Professional removal of plaque, tartar, and stains from your teeth.</span>
                </article>
                <a href="#" class="arrw">View All Services <i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </section>

        <!--==================== MEET ====================-->
        <section class="meet section container">
            <h2 class="section__title">Meet Our Dedicated Dentists</h2>
            <p class="section__description">
                Know the caring touch and expertise of our dedicated dentist, ensuring your smile's utmost well-being.
            </p>
            <div class="meet__container grid">
                <div class="benefit__content">
                    <img src="img/Dentist1.png" alt="" class="benefit__img img_meet">
                    <h3 class="benefit__title">Dr. Ipsum Lorem</h3>
                </div>

                <div class="benefit__content">
                    <img src="img/Dentist2.png" alt="" class="benefit__img img_meet">
                    <h3 class="benefit__title">Dr. Dolor Sit Amet </h3>
                </div>

                <div class="benefit__content">
                    <img src="img/Dentist3.png" alt="" class="benefit__img img_meet">
                    <h3 class="benefit__title">Dr. Nulla Pasilli</h3>
                </div>
            </div>
        </section>

        <!--==================== MESSAGE ====================-->
        <section class="message section container">
            <div class="message__container grid">
                <img src="img/message.jpg" alt="" class="img_mess">
                <h2 class="message__title">Send Good <br> Wishes!</h2>
                <button class="button message__button">Sign Up Now!</button>

            </div>

            <div class="message__container grid">
                <h2 class="message__title">Send Good <br> Wishes!</h2>
                <button class="button message__button">Download Now!</button>
                <img src="img/message2.png" alt="" class="img_mess">
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>

</html>
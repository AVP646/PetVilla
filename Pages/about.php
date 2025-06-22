<?php include '../partial/_navbar.php' ?> <!-- Navbar -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        :root {
            --primary-color: #dcd7f8;
            --text-dark: #3f3b57;
            --text-light: #908ca3;
            --white: #ffffff;
            --max-width: 1200px;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .section__container {
            max-width: var(--max-width);
            padding: 5rem 1rem;
            margin: auto;
            
        }

        .section__subheader {
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--text-light);
            text-align: center;
        }

        .section__header {
            font-size: 2.5rem;
            font-weight: 500;
            color: var(--text-dark);
            text-align: center;
            line-height: 3.5rem;
        }

        img {
            display: flex;
            width: 100%;
        }

        a {
            text-decoration: none;
            transition: 0.3s;
        }

        ul {
            list-style: none;
        }

        html,
        body {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .about__row {
            margin-top: 2rem;
            display: flex;
            gap: 2rem;
            flex-direction: column;
            overflow: hidden;
        }

        .about__row:nth-child(3) {
            margin-top: 4rem;
        }

        .about__image {
            flex: 1;
            max-width: 400px;
            margin-inline: auto;
        }

        .about__content {
            flex: 1;
            text-align: center;
        }

        .about__content span {
            margin-inline: auto;
            margin-bottom: 1rem;
            width: 80px;
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100%;
        }

        .about__content span img {
            max-width: 40px;
        }

        .about__row:nth-child(3) .about__content span {
            background-color: #fdf2d9;
        }

        .about__row:nth-child(4) .about__content span {
            background-color: #e8f7fe;
        }

        .about__row:nth-child(5) .about__content span {
            background-color: #fbebf1;
        }

        .about__content h4 {
            max-width: 450px;
            margin-inline: auto;
            margin-bottom: 1rem;
            font-size: 2rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 3rem;
        }

        .about__content p {
            max-width: 450px;
            margin-inline: auto;
            color: var(--text-light);
        }

        @media (width > 768px) {

            .about__row {
                flex-direction: row;
                align-items: center;
            }

            .about__row:nth-child(4) {
                flex-direction: row-reverse;
            }

            .about__image {
                max-width: unset;
                margin-inline: auto;
            }

            .about__content {
                text-align: left;
            }

        }
    </style>

</head>

<body>
    <section class="section__container about__container" id="about">
        <p class="section__subheader">About Us</p>
        <h2 class="section__header">What we can do for you</h2>
        <div class="about__row">
            <div class="about__image">
                <img src="../images/about-1.jpg" alt="about" />
            </div>
            <div class="about__content">
                <span><img src="../images/about-1-icon.png" alt="about-icon" /></span>
                <h4>Let us help you with your pet health</h4>
                <p>
                    Our expert veterinarians are here to provide comprehensive care and
                    guidance to ensure your pet stays in perfect health.
                </p>
            </div>
        </div>
        <div class="about__row">
            <div class="about__image">
                <img src="../images/about-2.jpg" alt="about" />
            </div>
            <div class="about__content">
                <span><img src="../images/about-2-icon.png" alt="about-icon" /></span>
                <h4>Caring personal will take care of your pet</h4>
                <p>
                    Your pet will be in good hands with our compassionate and
                    well-trained staff, who treat every pet like family.
                </p>
            </div>
        </div>
        <div class="about__row">
            <div class="about__image">
                <img src="../images/about-3.jpg" alt="about" />
            </div>
            <div class="about__content">
                <span><img src="../images/about-3-icon.png" alt="about-icon" /></span>
                <h4>Let us groom your precious and loved pet</h4>
                <p>
                    From bathing to styling, we offer professional grooming services to
                    keep your pet looking and feeling their best.
                </p>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        const scrollRevealOption = {
            distance: "50px",
            origin: "bottom",
            duration: 1000,
        };

        ScrollReveal().reveal(
            ".about__row:nth-child(3) .about__image img, .about__row:nth-child(5) .about__image img", {
            ...scrollRevealOption,
            origin: "left",
        }
        );
        ScrollReveal().reveal(".about__row:nth-child(4) .about__image img", {
            ...scrollRevealOption,
            origin: "right",
        });
        ScrollReveal().reveal(".about__content span", {
            ...scrollRevealOption,
            delay: 500,
        });
        ScrollReveal().reveal(".about__content h4", {
            ...scrollRevealOption,
            delay: 1000,
        });
        ScrollReveal().reveal(".about__content p", {
            ...scrollRevealOption,
            delay: 1500,
        });
    </script>
</body>

</html>

<?php include "../partial/_footer.php"; ?>
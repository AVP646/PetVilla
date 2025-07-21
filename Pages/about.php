<?php include 'login_session.php' ?>
<?php include '../partial/_navbar.php' ?> <!-- Navbar -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        :root {
            --primary-color: #dcd7f8;
            --text-dark: #3f3b57;
            --text-light: #908ca3;
            --white: #ffffff;
            --max-width: 100%;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .section__container {
            max-width: var(--max-width);
            padding: 5rem 1rem;
            /* margin: auto; */
            background-color: #E5E0D8;
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
            <div class="about__image"  data-aos="fade-right"  data-aos-duration="1000">
                <img  src="../images/about-1.jpg" alt="about" />
            </div>
            <div class="about__content" data-aos="fade-left"  data-aos-duration="1500">
                <span><img data-aos="fade-up"  data-aos-duration="1100" src="../images/about-1-icon.png" alt="about-icon" /></span>
                <h4>Let us help you with your pet health</h4>
                <p>
                    Our expert veterinarians are here to provide comprehensive care and
                    guidance to ensure your pet stays in perfect health.
                </p>
            </div>
        </div>
        <div class="about__row">
            <div class="about__image" data-aos="fade-left"  data-aos-duration="1000">
                <img src="../images/about-2.webp" alt="about" />
            </div>
            <div class="about__content" data-aos="fade-right"  data-aos-duration="1000">
                <span><img src="../images/about-2-icon.png" alt="about-icon" /></span>
                <h4>Caring personal will take care of your pet</h4>
                <p>
                    Your pet will be in good hands with our compassionate and
                    well-trained staff, who treat every pet like family.
                </p>
            </div>
        </div>
        <div class="about__row" data-aos="fade-right"  data-aos-duration="1000">
            <div class="about__image">
                <img src="../images/about-3.jpg" alt="about" />
            </div>
            <div class="about__content" data-aos="fade-left"  data-aos-duration="1000">
                <span><img src="../images/about-3-icon.png" alt="about-icon" /></span>
                <h4>Let us groom your precious and loved pet</h4>
                <p>
                    From bathing to styling, we offer professional grooming services to
                    keep your pet looking and feeling their best.
                </p>
            </div>
        </div>
    </section>


   
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us 🐾 | PetVilla</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- AOS Animate On Scroll CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: white;
      color: #333;
    }
    .hero {
  /* background: url('https://images.unsplash.com/photo-1558788353-f76d92427f16?ixlib=rb-4.0.3&ixid=M3w5Nzg3fDB8MHxzZWFyY2h8N3x8Y3V0ZSUyMGRvZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=1600&q=80'); */
  /* background:  #E5E0D8; */
      height: 30vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color:black;
      text-shadow: 2px 2px 4px rgba(243, 126, 126, 0.4);
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .section {
      padding: 60px 20px;
    }
    .section h2 {
      font-weight: 700;
      margin-bottom: 20px;
    }
    .team-member {
      text-align: center;
      margin-bottom: 30px;
    }
    .team-member img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 4px solid #ff69b4;
    }
    .btn-main {
      background: #ff69b4;
      color: #fff;
      border-radius: 50px;
      padding: 10px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
      text-decoration: none;
    }
    .btn-main:hover {
      background: #ff85c1;
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- Hero Banner -->
  <div class="hero my-1">
    <h1 data-aos="fade-down">About PetVilla 🐾</h1>
  </div>

  <!-- Our Story Section -->
  <div class="container section">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right">
        <img src="../images/aboutUs.webp" alt="Happy pet" class="img-fluid rounded">
      </div>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left">
        <div>
          <h2>Our Story</h2>
          <p>At PetVilla, we believe pets are family. 🐶🐱🐰 Since day one, our mission has been to bring happiness, care, and the best products for your beloved furry friends.</p>
          <p>From cute Pets to healthy Foods — we are here to make your pets’ lives joyful and full of love.</p>
          <a href="contact.php" class="btn-main mt-3">Contact Us</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Team Section -->
  <div class="container section text-center">
    <h2 data-aos="fade-up">Meet Our Team</h2>
    <div class="row justify-content-center">
      <div class="col-md-4 team-member" data-aos="zoom-in">
        <img src="../images/pankaj" alt="Team Member">
        <h5>Pankaj Mangniya</h5>
        <p>Developer & Pet Lover</p>
      </div>
      
      <div class="col-md-4 team-member" data-aos="zoom-in" data-aos-delay="200">
        <img src="../images/ayush" alt="Team Member">
        <h5>Ayush Yadav</h5>
        <p>Developer & Pet Lover</p>
      </div>
    </div>
  </div>



  <!-- AOS Animation JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000
    });
  </script>
</body>
</html>

<?php include "../partial/_footer.php"; ?>
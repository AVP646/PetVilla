<?php include '../partial/_navbar.php' ?> <!-- Navbar -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PetVilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            font-family: "Poppins", sans-serif;
        }

        .bg-main {
            position: relative;
        }

        .bg-color {
            background: linear-gradient(to right, #ff9468 70%, #ff8961 100%);
            width: 100vw;
            /* height: 650px; */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;

        }

        .slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        #sliderTrack {
            display: flex;
            transition: transform 0.6s ease-in-out;
            width: 300%;
            /* 3 slides */
        }

        .slide-block {
            width: 100vw;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .slide img {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(2px 5px 5px grey);
        }

        .slide-text {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        h2.stroke-heading {
            font-size: 30px;
            font-weight: 600;
            color: black;
            opacity: 0;
            bottom: -20px;
            animation: fadeIn 3s ease forwards;
            position: relative;
        }

        h2.stroke-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 80px;
            height: 6px;
            background-color: red;
            border-radius: 50%;
            transform: rotate(-5deg);
        }

        .slide-text p {
            font-size: 16px;
            color:rgb(71, 69, 69);
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 2s ease forwards;
            animation-delay: 1.5s;
        }

        svg {
            width: 100%;
            height: 150px;
        }

        .animated-text2 {
            font-size: 70px;
            font-family: "Baloo 2", cursive;
            fill: transparent;
            stroke: black;
            stroke-width: 1;
            stroke-dasharray: 400;
            stroke-dashoffset: 400;
            animation: textAnimation 4s ease forwards;
        }

        @keyframes textAnimation {
            to {
                stroke-dashoffset: 0;
                fill: black;
               text-shadow: 2px 2px 5px red;
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                 text-shadow: 2px 2px 5px red;
            }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
                
            }
        }

        .next-btn {
            position: absolute;
            bottom: 20px;
            right: 30px;
            z-index: 10;
        }

        @media (max-width: 1068px) {
            .slide-block {
                flex-direction: column;
                text-align: center;
            }

            .bg-color {
                background: linear-gradient(to right, #ff9468 70%, #ff8961 100%);
                width: 100vw;
                /* height: 890px; */
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            h2.stroke-heading {
                font-size: 30px;
                font-weight: 600;
                color: black;
                text-align: start;
                opacity: 0;
                animation: fadeIn 3s ease forwards;
                position: relative;
            }

        }

        .custom-shape-divider-bottom-1750488578 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1750488578 svg {
            position: relative;
            display: block;
            width: calc(168% + 1.3px);
            height: 140px;
        }

        .custom-shape-divider-bottom-1750488578 .shape-fill {
            fill: #FFFFFF;
        }

        button.next-btn {
            position: relative;
            top: -40px;
            left: 30px;
            outline: none;
            border: none;
            background-color: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(80%);
            padding: 5px 8px;
            border-radius: 20px;
            text-transform: uppercase;
            font-family: "Baloo 2", cursive;
            font-size: 20px;
            filter: drop-shadow(2px 5px 5px grey);
        }

        .arrow {
            width: 30px;
        }
    </style>
</head>

<body>

    <section class="bg-main bg-color">
        <div class="slider-container">
            <div id="sliderTrack">
                <!-- Slide 1 -->
                <div class="slide-block">
                    <div class="slide-text">
                        <h2 class="stroke-heading">Tasty Food</h2>
                        <svg viewBox="0 0 500 150">
                            <text x="0" y="70" class="animated-text2">Fresh Flavoured</text>
                            <text x="0" y="130" class="animated-text2">Dog Food</text>
                        </svg>
                        <p>Sedquis nis eleentum rhoncus sit amet in nisi. Phasellus tmpor.</p>
                    </div>
                    <div class="slide">
                        <img src="../images/pet1.png" alt="Pet 1" />
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide-block">
                    <div class="slide-text">
                        <h2 class="stroke-heading">Yummy & Tasty</h2>
                        <svg viewBox="0 0 500 150">
                            <text x="0" y="70" class="animated-text2">We Make</text>
                            <text x="0" y="130" class="animated-text2">The Best Food</text>
                        </svg>
                        <p>Sedquis nis eleentum rhoncus sit amet in nisi. Phasellus tmpor.</p>
                    </div>
                    <div class="slide">
                        <img src="../images/pet2.png" alt="Pet 2" />
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide-block">
                    <div class="slide-text">
                        <h2 class="stroke-heading">Budget Friendly</h2>
                        <svg viewBox="0 0 500 150">
                            <text x="0" y="70" class="animated-text2">Organic Food &</text>
                            <text x="0" y="130" class="animated-text2">Supplements</text>
                        </svg>
                        <p>Sedquis nis eleentum rhoncus sit amet in nisi. Phasellus tmpor.</p>
                    </div>
                    <div class="slide">
                        <img src="../images/pet3.png" alt="Pet 3" />
                    </div>
                </div>
            </div>

            <!-- Next Button -->
            <button class="next-btn" onclick="goNext()">Next <img src="../images/arrow.png" alt="arrow" class="arrow"></button>
        </div>
        <div class="custom-shape-divider-bottom-1750488578">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <div class="foot">
    <h3>ayush</h3>
    </div>
    <script>
        const sliderTrack = document.getElementById('sliderTrack');
        const totalSlides = sliderTrack.children.length;
        let counter = 0;

        function goNext() {
            counter = (counter + 1) % totalSlides;
            sliderTrack.style.transform = `translateX(-${counter * 100}vw)`;
        }

        setInterval(goNext, 5000);
    </script>

</body>
</html>

<?php include "../partial/_footer.php"; ?>
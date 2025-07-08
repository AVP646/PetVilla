<?php include "../partial/_navbar.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color-scheme: light dark;
            font-family: "Baloo 2", cursive;
        }

        html,
        body {
            width: 100%;
            height: 110%;
            background-color: #dcd7f8;
            overflow-x: hidden;
        }

        .main-contact-c {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            flex-direction: column;
            background-color: #dcd7f8;
        }

        .main-register-container {
            width: 100%;
            max-width: 600px;
            height: auto;
            display: flex;
            justify-content: center;
            background-color: rgba(209, 208, 208, 0.5);
            box-shadow: 2px 2px 3px black;
            border: 1px solid transparent;
            border-radius: 5px;
            flex-direction: column;
            position: relative;
            padding: 20px;
            margin-top:40px;
        }

        .min-box {
            width: 200px;
            height: 100px;
            background-color: rgba(209, 208, 208, 0.5);
            position: absolute;
            right: 0;
            top: 0;
            border-bottom-left-radius: 50px;
            border: 1px solid transparent;
            box-shadow: -1px 2px 5px rgba(54, 53, 53, 0.64);
        }

        @media (max-width: 768px) {
            .min-box {
                width: 180px;
                height: 100px;
            }
        }

        @media (max-width: 576px) {
            .min-box {
                width: 110px;
                height: 80px;
            }
        }

        .register-logo {
            font-size: 35px;
            position: relative;
            fill: transparent;
            stroke: black;
            stroke-dashoffset: 50;
            stroke-dasharray: 50;
            animation: scrollGradient 5s linear infinite;
        }

        @keyframes scrollGradient {
            0% {
                fill: black;
            }

            50% {
                stroke-dashoffset: 0;
            }

            100% {
                fill: black;
            }
        }


        label {
            font-size: large;
        }
    </style>
</head>

<body>
    <div class="main-contact-c ">
        <div class="main-register-container">
            <div class="min-box"></div>
            <svg viewBox="400">
                <text x="49" y="40" class="register-logo">Contact Form</text>
            </svg>

            <form action="./home.php" method="POST" class="w-100">

                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required minlength="6" autocomplete="new-password">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 md-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control p-2" placeholder="Enter Message" required minlength="6" rows="4"></textarea>
                    </div>
                </div>

                <div class="row justify-content-center mb-3 mt-4">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
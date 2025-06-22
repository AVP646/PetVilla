<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
        #footer {
            background: url(../images/footer-bg.webp);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .footer-im{
            transform:rotate(30deg);
            width:50px;
        }
        .footer-title{
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight:500;
            font-size:20px;
        }
        .foot-d{
            margin-top:10px;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight:500;
            font-size:20px;
        }
        .foot-d i{
            padding:8px 8px;
            margin:0 0px;
            border-radius: 50%;
            border:1px solid black;
        }

        .foot-d i:hover{
            font-size:25px;
            transition:0.5s ease;
        }
        #footer-cat{
            position: absolute;
            width:170px;
        }
        #dog-footer{
            position: absolute;
            right:10px;
            width:130px;
        }
    </style>
</head>

<body>
    <!-- this is footer with bootatrp -->

    <div class="container-fluid" id="footer">
        <img src="images/cat-footer.webp" id="footer-cat" alt="">
        <img src="images/dog-footer.webp" id="dog-footer" alt="">
        <div class="container text-center ">
            <div class="row align-items-start">
                <div class="col foot-d">
                    <a class="navbar-brand footer-title" href="index.php"> PetVilla</a>
                    <p>Lorem ipsum dolor</p>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                   <i class="fa-brands fa-youtube"></i>
                </div>

                <div class="col foot-d">
                   <h4>Pages</h4>
                   <h6>Home</h6> 
                   <h6>about us</h6>
                   <h6>Services</h6>
                   <h6>blog</h6>
                   <h6>Shop</h6>
                </div>


                <div class="col foot-d">
                   <h4>Contact info</h4>
                   <h6>California</h6> 
                   <h6>90903909</h6>
                   <h6>hjdhfuhd@dnsj</h6>
                </div>
                
            </div>
        </div>
    </div>



    
</body>

</html>
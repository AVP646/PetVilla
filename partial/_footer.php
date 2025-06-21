<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <style>
        #footer {
            background: url(../images/footer-bg.webp);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        #table {
            background-color: white;
        }
        .nav-im{
            transform:rotate(30deg);
            width:50px;
        }
        .foot-d{
            margin-top:10px;
        }
        .foot-d i{
            padding:10px 10px;
            margin:0 3px;
            border-radius: 50%;
            border:1px solid black;
        }
        #footer-cat{
            position: absolute;
            bottom: 50px;
        }
        #dog-footer{
            position: absolute;
            top: 50px;
        }
    </style>
</head>

<body>
    <!-- this is footer with bootatrp -->

    <div class="container-fluid" id="footer">
        <img src="../images/cat-footer.webp" id="footer-cat" alt="">
        <img src="../images/dog-footer.webp" id="dog-footer" alt="">
        <div class="container text-center ">
            <div class="row align-items-start">
                <div class="col foot-d">
                    <a class="navbar-brand nav-title" href="index.php"><img src="../images/logo.png"  alt="" class="nav-im"> PetVilla</a>
                    <p>Lorem ipsum dolor</p>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                   <i class="fa-brands fa-youtube"></i>
                </div>

                <div class="col foot-d">
                   <h3>Pages</h3>
                   <h6>Home</h6> 
                   <h6>about us</h6>
                   <h6>Services</h6>
                   <h6>blog</h6>
                   <h6>Shop</h6>
                </div>


                <div class="col foot-d">
                   <h3>Contact info</h3>
                   <h6>California</h6> 
                   <h6>90903909</h6>
                   <h6>hjdhfuhd@dnsj</h6>
                </div>
                
            </div>
        </div>
    </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>
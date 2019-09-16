<?php include('Configure.php') ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Volunteer</title>
    <link rel="stylesheet" href="CSS/Stylesheet.css">

</head>
<body>
<!--Header being created with bg image -->
<header style="background-image: url('Image/bernard-hermant-1065742-unsplash.jpg');">
    <!--section for the logo and nav bar-->
    <section>

        <div class="top-container">
            <a href="Home.php"><img src="Image/LOGO.jpeg" alt="logo" width="150px" height="170px" /></a>
        </div>
        <div class="welcome">
            <?php
            if (isset($_SESSION['email'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
            <?php endif ?>
        </div>

        <div class="topnav centerContent" id="myHeader" style="z-index: 1;">
            <a href="Home.php">HOME</a>
            <a href="About us.php">ABOUT US</a>
            <a href="RegisterParent.php">BECOME A FOSTER PARENT</a>
            <a href="Volunteer.php">BECOME A VOLUNTEER</a>
            <a href="Foster.php">FOSTERING IN IRELAND</a>
            <a href="ContactUs.php">CONTACT US</a>

            <?php if (!(isset($_SESSION['email']))) : ?>
                <a href="SignIn.php">SIGN IN</a>
            <?php endif ?>

            <?php if (isset($_SESSION['email'])) : ?>
                <a href="index.php?logout='1'" style="color: white;">SIGN OUT</a>
            <?php endif ?>

            <a href="javascript:void(0);" class="icon" onclick="headerNav()">
                <i class="fa fa-bars"></i>
            </a>

        </div>
    </section>
</header>

<div class="header3">
    <h2>YOUR DETAILS</h2>
</div>
<div class="regi">
    <form method="post" action="Volunteer.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
            <label>First Name:</label>
            <input type="text" name="firstname" required placeholder="Enter your First name" >
        </div>

        <div class="input-group">
            <label>Last Name:</label>
            <input type="text" name="lastname" required placeholder="Enter your Last name">
        </div>

        <div class="input-group">
            <label>E-mail Address:</label>
            <input type="email" name="email" required placeholder="Enter your E-mail Address">
        </div>

        <div class="input-group">
            <label>Contact Number:</label>
            <input type="text" name="tel" required placeholder="Enter your Contact number">
        </div>

        <div class="input-group1">
            <label>Sex:</label>
            <input type="radio" name="sex" value="female">Female
            <input type="radio" name="sex" value="male">Male
            <input type="radio" name="sex" value="other">Other
        </div>


        <div class="input-group">&nbsp;
            <button type="submit" class="btn btn-primary" name="reg_user2">Submit</button>
        </div>

        <p>
            WE WILL GET BACK TO YOU,THANK YOU FOR YOUR INTEREST
        </p>
    </form>
</div>

<p></p>

<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                <!--headin5_amrc-->
                <p class="mb10"> The Irish Independent, 26 April 2016, ‘What’s it like to open your home to a foster child?<br>The Irish Times, 28 April 2015, Fostering: ‘Hard work, heartache and the highest of highs’</p>
                <p><i class="fa fa-location-arrow"></i> 10,South Circular Road, Dublin-08 </p>
                <p><i class="fa fa-phone"></i>  +353-894235707  </p>
                <p><i class="fa fa fa-envelope"></i> Fosterireland@example.com  </p>

            </div>
            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Chairman </h5>
                <!--headin5_amrc-->
                <h4 class="name" >Kamakshi Mehta</h4>
                <p>
                    10,South Circular Road, Dublin-08
                </p>
                <p><i class="fa fa-phone"></i>  +353-894235707  </p>
                <p><i class="fa fa fa-envelope"></i> Fosterireland@example.com  </p>

                <!--footer_ul_amrc ends here-->
            </div>
            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Vice-Chairman </h5>
                <!--headin5_amrc-->
                <h4 class="name">Anish George</h4>
                <p>
                    10,South Circular Road, Dublin-08
                </p>
                <p><i class="fa fa-phone"></i>  +353-9894235799  </p>
                <p><i class="fa fa fa-envelope"></i> Fosterireland@example.com  </p>

                <!--footer_ul_amrc ends here-->
            </div>
            <div class=" col-sm-4 col-md  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                <!--headin5_amrc ends here-->

                <ul class="footer_ul2_amrc">
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>For latest news follow us on Irish news paper <a href="#">https://www.irishnews.com/</a></p></li>
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>For events follow us on Irish time<a href="#">https://www.Irishtime.com/</a></p></li>
                    <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>For development of foster care <a href="#">https://www.DevelopmentIFC.com/</a></p></li>
                </ul>
                <!--footer_ul2_amrc ends here-->
            </div>
        </div>
    </div>

    <!--footer nav -->
    <div class="container">
        <ul class="foote_bottom_ul_amrc">

            <li><a href="Home.php">HOME</a></li>
            <li><a href="About%20us.php">ABOUT US </a></li>
            <li><a href="Foster.php">FOSTERING IN IRELAND </a></li>
            <li><a href="ContactUs.php">CONTACT US</a></li>
            <li><a href="SignIn.php">SIGN IN </a></li>

        </ul>
        <!--footer_bottom_ul_amrc ends here-->
        <p class="text-center">Copyright @2017 | Designed With by <a href="Home.php">FOSTERIRELAND</a></p>

        <ul class="social_footer_ul">
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li> <a href="#" class="fa fa-twitter"></a></li>
            <li> <a href="#" class="fa fa-instagram"></a></li>
            <li> <a href="#" class="fa fa-youtube"></a></li>
            <li> <a href="#" class="fa fa-linkedin"></a></li>
            <li> <a href="#" class="fa fa-google"></a></li>
        </ul>
        <!--social_footer_ul ends here-->
    </div>

</footer>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    function headerNav() {
        var x = document.getElementById("myHeader");
        if (x.className === "topnav centerContent") {
            x.className += " responsive ";
        } else {
            x.className = "topnav centerContent";
        }
    }
</script>

</body>
</html>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us</title>
    <link rel="stylesheet" href="CSS/Stylesheet.css">

</head>
<body>
<!--Header being created with bg image -->
<header style="background-image: url('Image/bernard-hermant-1065742-unsplash.jpg');">
    <!--section for the logo and nav bar-->
    <section>
        <div class="top-container">
            <a href="Home.php"><img src="Image/LOGO.jpeg" alt="top" width="150px" height="170px" /></a>
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
<!-- created a Parallax image/text and passage -->
<section>
    <div id ="parallax-image4">
        <div class=" row h-100">
            <div class="col-md-12 align-self-center">
                <h2 class="text-left"> ABOUT US</h2>
            </div>

        </div>

    </div>
    <div class="container">
        <div style="background-color: oldlace; padding: 50px;">
        <h3> <b>About us</b></h3>
        <p> Irish Foster Care  recruits, assesses, trains and supports foster carers to provide a safe and nurturing environment for children and young people in need of care.
            Our foster carers are assessed to national standards and are approved by a Tusla area Foster Care Committee before any placement is considered.
            Foster care in Ireland is provided by Tusla – Child and Family Agency and by supporting non-statutory fostering agencies such as Foster Care Ireland who work in partnership with Tusla to provide for children in need.  We train, visit, monitor and support our foster carers while working with the Tusla social worker to secure the best outcomes for children.
            Our on-call service operates to support our carers out of hours and at weekends with professional advice and back-up.</p>
    </div>
    </div>
</section>
<!-- Footer being created with all valid info-->
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
<!--java script for the header-->
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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
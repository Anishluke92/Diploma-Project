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
    <title>Home Page</title>
    <link rel="stylesheet" href="CSS/Stylesheet.css">

</head>
<body>


<!--header created with image as background-->


<header style="background-image: url('Image/bernard-hermant-1065742-unsplash.jpg');">
    <!--section that contains logo and nav bar-->
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


<!--parallax starts here! parallax image 1-->
<section>
    <div id ="parallax-image3">
        <div class=" row h-100">
            <!--extra padding to highlight the text-->
            <div class="col-md-12 align-self-center" style="z-index: 0;">
                <h1 class="text-center"> IRISH FOSTER CARE</h1>
            </div>
        </div>
    </div>
    <div class="container">

        <p style="text-align: center">
            <b>We at Irish Foster Care believe that every child needs a Home.The support that foster families provide can make
                a real difference to a child’s life and help them reach their full potential.</b>
        </p>

    </div>
</section>
<!--parallax image2-->
<br>
<section>
    <div id ="parallax-image">
        <div class=" row h-100">
            <div class="col-md-12 align-self-center" style="z-index: 0;">
                <h1 class="text-center"> What is Foster care ?</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <!--extra padding to highlight the text-->
        <div style="background-color: oldlace; padding: 50px;">
            <p>
                Foster care is full-time or part-time substitute care of children outside their own home by
                people other than their biological or adoptive parents or legal guardians.
                Foster care is the preferred option for children who for various reasons cannot live with their birth parents.
                Children come into care if a child protection or welfare concern is identified and it is assessed that their need for protection cannot be met by their parents.   Foster carers look after other people’s children, caring for them on a daily basis. This includes working closely with social workers, parents and other professionals who are involved in the children’s lives.
                Foster carers are expected to support contact with the children’s parents and family.
            </p>
        </div>
        <br><br>
    </div>
</section>
<!--parallax image 3-->
<section>
    <div id ="parallax-image1">
        <div class=" row h-100">
            <div class="col-md-12 align-self-center">
                <h1 class="text-center"> Who are Foster Kids ?</h1>
            </div>

        </div>

    </div>
    <div class="container">
        <!--extra padding to highlight the text-->
        <div style="background-color: oldlace; padding: 50px;">
            <p>
                A Foster kid is a needy child, who is supported or aided by contribution to a specific charity and
                raised by someone who is not his or her natural or adoptive parent.
                The placement of the child is normally arranged through the government or a social service agency.
                ome children are stepping down from residential treatment; some have developmental delays;
                many have suffered abuse; others have never benefited from expectations or structure;
                most have built walls around themselves to keep out the hurt; and all have lost their homes and
                families.

            </p>
        </div>
        <br> <br>
    </div>
</section>
<!--parallax image 4-->
<section>
    <div id ="parallax-image2">
        <div class=" row h-100">
            <div class="col-md-12 align-self-center">
                <h1 class="text-center"> What is Foster parenting ?</h1>
            </div>

        </div>

    </div>
    <div class="container justify-center">
        <!--extra padding to highlight the text-->
        <div style="background-color: oldlace; padding: 50px;">
            <p>
                Foster care is the care of children outside their own home by people other than their parents
                (biological or adoptive) or legal guardians.
                Foster care is the main form of alternative care for
                children in need of care and protection, and is the preferred option for children who cannot live with their parents.
                Foster parents must be at least 21 years old, with past background clearances, and be in good physical health.
                Our most successful foster parents are open-minded, dependable, patient and willing to try
                different parenting styles for children with different needs. Having a flexible schedule,
                being tolerant and demonstrating the ability to work as a member of our team are all important qualities for success.
            </p>
        </div>
        <br><br>
    </div>
</section>
<!-- footer that contains information regarding the foster home , contact details and social media  -->
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

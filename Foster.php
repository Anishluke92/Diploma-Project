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
    <title>Fostering in Ireland</title>
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
<!-- section 1 hold the image in the css-->

<section  class="sec1 col-sm-4 col-md col-lg ">

</section>
<!-- section created for the valid information to be displayed for fostering   -->
<section class="sec2 col-sm-4 col-md col-lg">
    <!--extra padding to high light the text with bg-->
    <div style="background-color: oldlace; padding: 50px;">
        <h2 class="fost">Legislation </h2>
        <p class="INFO">Fostering in Ireland means taking care of someone else’s child in your own home. Often,
            a child cannot live with his or her family either on a short- or long-term basis.
            This could be because of illness in the family, the death of a parent, neglect, abuse or violence in the home.
            In an ideal situation, the child placed in foster care will return to his or her own family as soon as this is possible.
            Foster care in Ireland is governed by the Child Care Act 1991 and the Child Care (Placement of Children in Foster Care) Regulations 1995.
            In addition, the National Standards for Foster Care, 2003 (pdf) have a major role to play in ensuring that the foster care placements are
            adequately supported and that children in foster care are receiving the best possible care.<br><br>
            The Child and Family Agency (CFA) assesses, recruits and trains foster families according to the needs of the area.
            The CFA also places children with foster families who have been recruited and trained by non-statutory agencies such as Foster Care Ireland.
            The CFA is responsible for each child in care but support to the foster family may be provided by the non-statutory agency.
            Each foster child has his or her own social worker who monitors the growth and development of the child with the best interests of the child in mind.
            Each foster family also has its own link social worker, who may have helped assess the family as suitable to foster children and
            who will support the family throughout the foster term. An important part of the social worker’s role is to develop the relationship between the foster child and the foster family and between the foster child and his or her own family.
            <br><br>
            It is important to note that fostering in Ireland, a child differs from adoption because a foster child always remains a permanent part of his or her own family. The CFA is responsible for the child and the foster parents do not have guardianship.

    </div>
    <br>
    <div style="padding: 50px;">
        <p class="INFO">
            Children can be placed in foster care in two ways:
        <ul>
            <li>
                <b>Voluntarily: This happens when a parent or family asks the CFA for help and/or</b>>
            </li>
            <li>
                <b>Court order: This happens when a judge decides that it is in the best interests of the child to be placed in the care of the CFA.</b>
            </li>
        </ul>
        </p>

        <p class="INFO"> When a child is placed in foster care, Tusla the CFA assigns responsibility for the child to a social worker. Based on the child’s needs and circumstances, Tusla makes a decision on the type of fostering that is most suitable for the chill. There are three different types of fostering:
            Young people up to the age of 18 can be fostered.
            Any person or family can apply to the CFA to be assessed as a foster parent or foster family. References, Garda clearance and medical examinations will also be required as part of this process.
            There are no maximum age limits for foster carers; the decision to place a child with a particular foster carer is on the basis of the individual child and their needs and each case is judged on it’s merits.
            The State’s responsibility to safeguard and promote the welfare of children whose parents fail in their duty falls to the Child and Family Agency by virtue of the Child Care Act 1991. The 1991 Act confers both a statutory power and duty upon the Child and Family Agency to protect children and promote their welfare.
            The Child Care (Placement of Children in Foster Care) Regulations 1995 require that a Care Plan for the child is drawn up which sets out the support to be provided to the child and the foster carers and the arrangements for access to the child in foster care by parents or relatives.
            The National Standards for Foster Care, 2003 have a major role to play in ensuring that foster care placements are adequately supported and that children in foster care receive the best possible care
            Get in touch the first step in becoming a foster carer is to contact us. You can complete our online enquiry form or call us by telephone.
        </p>

        <hr>
        <h6> Register your interest to become a Foster parent </h6>
        <a href="RegisterParent.php"> <button type="button" class="btn btn-dark">Application</button></a>
    </div>


</section>
<!-- footer being created -->
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
<!--javascript for the header-->
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
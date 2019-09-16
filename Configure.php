<?php
session_start();

// initializing variables
$firstname = "";
$email    = "";
$lastname ="";
$tel ="";
$address="";
$eircode="";
$errors = array();
$sex ="";
$country="";
$city="";
$relation="";
$fname="";
$msg="";

//Database details to connect
$servername = "localhost";
$username = "root";
$password = "kamakshi1510";

// Create connection
$db = mysqli_connect($servername, $username, $password,"Project",3306)
or die("Connection failed: " . mysqli_connect_error());

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $tel = $_POST['tel'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $country= $_POST['country'];
    $city= $_POST['city'];
    $eircode= $_POST['eircode'];

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if (empty($password_2)) { array_push($errors, "Password is required"); }
    if (empty($sex)) {array_push($errors, "Sex is required");}

    if ($password_1 !== $password_2) {
        array_push($errors, "The two passwords do not match");
    }


    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM Register WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['email'] === $email) {
            array_push($errors, "User already exists");
        }

    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO Register (firstname,lastname, email,password,tel,sex,address,country,city,eircode) 
                  VALUES('$firstname','$lastname', '$email', '$password','$tel','$sex','$address','$country','$city','$eircode')";
        mysqli_query($db, $query);

        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

// LOGIN USER
if (isset($_POST['SignIn_user'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM Register WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);

        $password = md5($password);
        $query1 = "INSERT INTO SignIn(email,password)VALUES('$email', '$password')";
        $results1 = mysqli_query($db, $query1);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

// REGISTER Parent
if (isset($_POST['reg_user1'])) {
    // receive all input values from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $sex = $_POST['sex'];
    $relation = $_POST['relation'];
    $address = $_POST['address'];
    $country= $_POST['country'];
    $city= $_POST['city'];
    $eircode= $_POST['eircode'];

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($sex)) {array_push($errors, "Sex is required");}
    if (empty($relation)) {array_push($errors, "Relationship Status is required");}
    if (empty($tel)) {array_push($errors, "Relationship Status is required");}
    if (empty($address)) {array_push($errors, "Relationship Status is required");}
    if (empty($country)) {array_push($errors, "Relationship Status is required");}
    if (empty($city)){array_push($errors, "Relationship Status is required");}


    if(!empty($email)) {
        $check = " select * from Parent where email = $email";
        $result = mysqli_query($db, $check);
        if ($result) {
            echo 'Data Already exist';
        } else {
            $query1 = "INSERT INTO Parent(firstname,lastname,email,tel,sex,relation,address,country,city,eircode) 
                  VALUES('$firstname','$lastname', '$email','$tel','$sex','$relation','$address','$country','$city','$eircode')";
            mysqli_query($db, $query1);

        }
    }


}

// REGISTER Volunteer
if (isset($_POST['reg_user2'])) {
    // receive all input values from the form
    $firstname = $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $sex = $_POST['sex'];

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array

    if (empty($firstname)) { array_push($errors, "Firstname is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($sex)) {array_push($errors, "Sex is required");}
    if (empty($tel)) {array_push($errors, "Relationship Status is required");}


    if(!empty($email)) {
        $check = " select * from Volunteer where email = $email";
        $result = mysqli_query($db, $check);
        if ($result) {
            echo 'Data Already exist';
        } else {
            $query2 = "INSERT INTO Volunteer(firstname,lastname,email,tel,sex) 
                  VALUES('$firstname','$lastname', '$email','$tel','$sex')";
            mysqli_query($db, $query2);


        }
    }
}

//Contact us
if (isset($_POST['Contact_user'])) {

    // receive all input values from the form
    $fname = $_POST['fname'];
    $email =$_POST['email'];
    $tel = $_POST['tel'];
    $msg = $_POST['msg'];

    if (empty($fname)) { array_push($errors, "Name is required"); }


    $result = "INSERT INTO Contact(fname,email,tel,msg) VALUES ('$fname','$email','$tel','$msg')";
    mysqli_query($db, $result);


}


?>
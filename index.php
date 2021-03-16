<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP COURCES</title>
</head>
<body>

 <!-- From Submition Start -->
<form action="index.php" method="POST">
    <p>

    <label for="firstname"> First Name: </label>
    <input name="firstname" type="text" required>

    </p>
    <p>

    <label for="lastname"> Last Name: </label>
    <input name="lastname" type="text" required>
    
    </p>
    <p>

    <label for="email"> Email: </label>
    <input name="email" type="email" required>
    
    </p>
    <p>

    <label for="mobile"> Phone Number: </label>
    <input name="mobile" type="number">
    
    </p>
    <p>

    <label for="address"> Address: </label>
    <input name="address" type="text" required>
    
    </p>
    <p>

    <label for="gender"> Gender: </label>
    Male: <input name="gender" type="radio" value="male">
    Female: <input name="gender" type="radio" value="female">

    </p>
    <p>
    <input name="submit_btn" type="submit">
    </p>
</form>
 <!-- From Submition End -->

<!-- PHP Code Start -->
<?php
if (isset($_POST['submit_btn'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    if (!empty($firstname)&&!empty($lastname)&&!empty($email)&&!empty($mobile)&&!empty($address)&&!empty($gender)) {

    echo'My First Name '.$firstname.'<br>And Last Name '.$lastname.'<br>My Email '.$email.'<br>Phone Number '.$mobile.'<br> Address '.$address.'<br> Gender '.$gender ;

    }
    else{
        echo " Please Fillup The From. ";
    }
}
?>
<!-- PHP Code Ena -->
</body>
</html>
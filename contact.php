<?php
//connect to db
$db = mysqli_connect('localhost','root','', 'portfolio') or die("Could not connect to database");
//Register users
if(isset($_POST['btn-send'])) {
    $first_name = mysqli_real_escape_string($db, $_POST['name']);
    $second_name = mysqli_real_escape_string($db, $_POST['surname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $contact = mysqli_real_escape_string($db, $_POST['phone']);
    $message = mysqli_real_escape_string($db, $_POST['message']);
    $file = mysqli_real_escape_string($db, $_POST['attachment']);

    $query = "INSERT INTO moore_contact(id,first_name, second_name, email, phone, message, file) VALUES (null, '$first_name','$second_name','$email','$contact','$message','$file')";
    mysqli_query($db, $query);
    header('location:index.php');
}

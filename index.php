<?php
    // Form Validation
    if(isset($_POST['submit'])){
         // Email
        if(empty($_POST['email']) or empty($_POST['username']) or empty($_POST['gender']) or empty($_POST['city']) ){
            $error_message = "All fields must be filled !!! ";
            header("http://localhost/php_assignment/errors.php");
            exit();
        }

        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];

        // Connect to the database
        $conn = mysqli_connect('localhost', 'raghavendra', 'aabbccdd', 'student_details');

        if(!$conn){
            echo "Connection error" . mysqli_connect_error();
        }
        $insert_data = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city' )";
        
        if(!mysqli_query($conn, $insert_data)){
            echo "Data Not Inserted !!!";
        }
        else{
             echo "Data Inserted Successfully !!!"; }
        }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<?php include('form.php'); ?>

</html>
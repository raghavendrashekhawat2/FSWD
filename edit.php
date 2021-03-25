<?php
    $session_id = 0;
    include('templates/header.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $session_id = $_GET['id'];
        include('edit_form.html');
    }
    else{
        echo $session_id;
        if(empty($_POST['email']) or empty($_POST['username']) or empty($_POST['gender']) or empty($_POST['city']) ){
            $error_message = "All fields must be filled !!! ";
            header("http://localhost/php_assignment/errors.php");
            exit();
        }
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];

        $conn = mysqli_connect('localhost', 'raghavendra', 'aabbccdd', 'student_details');
        if(!$conn){
            echo "Connection error" . mysqli_connect_error();
        }
        $update_data = "UPDATE `users` SET `username` = '$username' `email` = '$email' `gender` = 'Male' `city` = '$city' WHERE `users`.`id` = '$session_id' ";
        
        if(!mysqli_query($conn, $update_data)){
            echo "Data Updation Failed :(";
        }
        else{
            echo "Data Updated Successfully !!!"; 
        }
    }
?>

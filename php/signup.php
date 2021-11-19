<?php
    $connection = mysqli_connect('localhost','root', '', 'capstone');
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $checkdata = mysqli_query($connection, "SELECT * FROM userdata WHERE email = '$email'");
    $check = mysqli_no_rows($checkdata);

    if($check > 0){
        echo "Email already exists";
    }
        else{
            $input = mysqli_query($connection, "INSERT INTO userdata (email, id, password) VALUE ('$email', '$id', '$password')";
            if($input){
                header('location:http://192.168.0.110/capstone/login.html');
            }

            else{
                header('location:http://localhost/capstone/signup.html');
            }
        }
?>
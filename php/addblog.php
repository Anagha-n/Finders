<?php
    $connection = mysqli_connect('localhost','root', '', 'capstone');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_POST['img']
        
        $input = mysqli_query($connection, "INSERT INTO research(id, title, description,img) VALUE ('$id', '$title', '$description, '$img");
        if($input){
            header('location:http://localhost/capstone/viweblog.php');
        }

        else{
            header('location:http://localhost/capstone/login.html');
        }
?>
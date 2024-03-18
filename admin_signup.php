<?php 
    // Connect to the database 
    $connect = mysqli_connect('localhost', 'root', '', 'the_garments_club');
    
    $first_name = mysqli_real_escape_string($connect, 'ashesh');
    $middle_name = mysqli_real_escape_string($connect, '');
    $last_name = mysqli_real_escape_string($connect, 'pathak');
    $contact = mysqli_real_escape_string($connect, '0416520533');
    $email = mysqli_real_escape_string($connect, 'asheshPro@gmail.com');
    $password = md5('admin123');
    $user_type = mysqli_real_escape_string($connect, 'admin');

    $fetch_user = " SELECT * FROM users WHERE contact= '$contact' && email = '$email' ";

    $result = mysqli_query($connect, $fetch_user);

    if(mysqli_num_rows($result) > 0){
        $errors[] = "An admin already exists!";
        header("Location: index.php");
    }else{               
        $insert = "INSERT INTO users(first_name, middle_name,last_name,contact,email,password,user_type) VALUES('$first_name', '$middle_name', '$last_name', '$contact', '$email', '$password', '$user_type')";
        mysqli_query($connect, $insert);
        header("Location: index.php");
    }
?>
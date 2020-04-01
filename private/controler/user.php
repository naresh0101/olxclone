<?php 
    ob_start();
    session_start();
   require_once('../initialize.php');
   $action = $_GET['actionis'];
   
   if(is_post_request() and $action == 'register'){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $s = " SELECT * FROM users where email = '$email'";
        $result = mysqli_query($db,$s);
        if($result->num_rows == 0){
            $createuser = " INSERT INTO users (username, email, password) values ('$user','$email','$password')";
            mysqli_query($db,$createuser);
            header('location:' . '../../public/login.php');
            exit;
        }else{
            header('location:' . '../../public/register.php?user=exists');
            echo 'User already exist with this email !!';
        }   
    }

    if(is_post_request() and $action == 'login'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $s = " SELECT * FROM users where email = '$email' && password = '$password' ";
        $result = mysqli_query($db,$s);
        if($result->num_rows == 1){
            $_SESSION['email'] = $email;
            while($row = $result->fetch_assoc()) {
                $_SESSION['username'] = $row["username"];
            }
            header('location:' . '../../public/home.php');
            exit;
        }else{
            header('location:' . '../../public/login.php?validation=error');
        }   
    }

    if(is_get_request() and $action == 'logout'){
        session_destroy();
        header('location:'. '../../public/login.php');
    }
?>
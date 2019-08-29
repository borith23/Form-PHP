<?php
    // user submit
    if ( isset($_POST['btn-login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

       

        if (empty($username) || empty($password)) {
            header('Location: ../messages/error.php');
        } else if ($username == "admin" && $password == "password") {
            header('Location: ../messages/success.php');
        }else if ($username != "admin" && $password != "password") {
            header('Location: ../messages/undefine.php');
        }
    }  

    if ( isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            header('Location: ../register/register.php');
        }
    }

    if ( isset($_POST['back'])) {
        header('Location: ../messages/register.php');
    }
    if (isset($_POST['back_to_login'])) {
        header('Location:../index.php');
    }
    // Submit
    if ( isset($_POST['submit'] )) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $messages = $_POST['messages'];


         // start session
         session_start();
         $_SESSION['name'] = $username;
         $_SESSION['pwd'] = $password;
         $_SESSION['email'] = $email;
         $_SESSION['messages'] = $messages;
        if (empty($username) || empty($password) || empty($email)) {
            header('Location:../messages/not_register.php');
           
        } else {
            header('Location:../messages/suc_register.php');
        }

        
    }
?>
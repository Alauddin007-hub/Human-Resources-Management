<?php 
    $db = new mysqli("localhost","root", "", "hrm_project");

    if(isset($_POST['submit'])) :
        extract($_POST);
        //$password = sha1($password);
        //echo "SELECT name, email, password FROM users WHERE email='$email' AND password = '$password' ";

        $sql = "SELECT  email, password FROM users WHERE email='$email' AND password = '$password' ";
        $result = $db->query($sql);
        //$row = $result->fetch_object();

        
        if($result->num_rows){
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email ;
        //$_SESSION['password'] = $password ;
        header("Location:admin_home.php");
    } else {
        $_SESSION['msg'] = "Your email and password not stored in database";
        header("Location:index.php");
    }
    

    endif;
?>
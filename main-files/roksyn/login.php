<?php 
    $db = new mysqli("localhost","root", "", "hrm_project");

    if(isset($_POST['submit'])) :
        extract($_POST);
        //$password = sha1($password);

        $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password = '$password' ";
        $result = $db->query($sql);
        $row = $result->fetch_object();

        session_start();
        if($result->num_rows>0){
        
        $_SESSION['name'] = $row->name;
        $_SESSION['email'] = $row->email;
        
        header("Location:admin_home.php");
    } else {
        $_SESSION['msg'] = "Your email and password not stored in database";
        header("Location:index.php");
    }
    

    endif;
?>
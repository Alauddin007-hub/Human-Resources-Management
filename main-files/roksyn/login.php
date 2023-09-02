<?php 
    $db = new mysqli("localhost","root", "", "hrm_project");

    if(isset($_POST['submit'])) :
        extract($_POST);
        $password = sha1($password);
        //echo "SELECT email, password FROM users WHERE email='$email' AND password = '$password' ";
        $sql = "SELECT name, email, password FROM users WHERE email='$email' AND password = '$password' ";
        $result = $db->query($sql);
        $row = $result->fetch_object();
    if($result->num_rows){
        
        $_SESSION['name'] = $row->Name ;
        $_SESSION['email'] = $row->Email ;
        header("Location:admin_home.php");
    } else {
        $_SESSION['err'] = "Your email and password not stored in database";
        header("Location:index.php");
    }
    

    endif;
?>
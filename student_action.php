<?php
include ('database/config.php');

if(isset($_POST['register_user'])){

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    

     // sanitize form data 
 

     // generate Key 

     $vkey = md5(time().$user_name);

     //insert into database 

     $query ="INSERT INTO `register`(`name`, `email`, `password`, `verification_code`) VALUES ('$user_name','$user_email','$user_password','$vkey')";

     $query_run = mysqli_query($db_conn,$query);
  

     if($query_run){

      //Send Email

      $to = $user_email;
      $subject = "Email Verification";
      $message = "<a href='http://localhost/registration-login-with-verification-php-mysql/verify.php?vkey= $vkey'>Register Account</a>";
      $headers = "From: algorithmsunlocks@gmail.com \r\n";
      $headers .="MIME-version: 1.0"."\r\n";
      $headers .="Content-type:text/html; charset=UTF-8"."\r\n";

      mail($to,$subject,$message,$headers);


        header('location: thankyou.php');
 


     }else{
        echo "<script>alert('Wrong ')</script>";
        
     }

}



?>
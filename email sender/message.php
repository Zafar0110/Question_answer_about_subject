<?php

$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$website =$_POST['website'];
$msg =$_POST['msg'];
if(!empty($email) && !empty($msg)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver="zafare0900@gmail.com";
        $subject="From: $name <$email>";
        $body="Name: $name\nEmail: $email\nWebsite: $website\n\nMessage: $msg\n\nRegards. \n$name";
        $sender="From: $email";
        if(mail("someone@example.com",$subject,$msg)){
            echo "Message message send successfully";

        }else{
            echo "Message do not be send";
        }

    }else{
        echo "Enter a valid email address";
    }

}else{
    echo "Email and message field is required!";
}


?>
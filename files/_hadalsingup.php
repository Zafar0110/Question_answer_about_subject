<?php
include '_header3.php';
echo "halo zafar";
$showError = "false";
$check=$_SERVER['REQUEST_METHOD'];
 if($check=="PSOT"){
    include '_database.php';
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $qualification=$_POST['qualification'];
    $adres=$_POST['adres'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $existsql="SELECT * FROM `user` WHERE u_email='$email' ";
    $result = mysqli_query($conn, $existsql);
    $numrows=mysqli_num_rows($result);
    if($numrows>0){
        $showError="email al ready exite";
    }
    else{
        if($pass==$cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql ="INSERT INTO `user` (`seril_no`, `u_fname`, `u_lname`, `u_email`, `o_phone`, `u_qualification`, `u_adress`, `u_pasword`, `created`) VALUES ('$fname', '$lname', '$email', '$phone', '$qualification', '$adres', '$hash', current_timestamp())";
            $result=maysqli_query($conn, $sql);
            echo $result;
            if($result){
                $showAlert=true;
                header("Location:/question/main.php?signupsuccess=true");
            }
        }
        else{
            $showError ="password do not match";
            header("Location:/question/main.php?signupsuccess=false&error=$showError");
        }
    }
    header("Location:/question/main.php?signupsuccess=false&error=$showError");

 }

?>


<!-- ; -->
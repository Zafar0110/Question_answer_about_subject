<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>KeepKnow -- thrads</title>
</head>

<body>
    <?php include 'files/_header3.php'; ?>
    <?php include 'files/_database.php'; ?>
    <?php
       $id = $_GET['q_id'];
       
       $sql = "SELECT * FROM `question` WHERE q_id=$id";
       $result = mysqli_query($conn, $sql);
       while($row=mysqli_fetch_assoc($result)){
        
        $title = $row['q_title'];
        $descp = $row['q_desc'];
        echo '<div class="container my-4">
                <div class="jumbotron">
                    <h1 class="display-4" class="font-weight-normal">"'.$title.'"</h1>
                    <p class="lead">[==> '.$descp.'<==]</p>
                    <hr class="my-4"> </p>
                    <p class="font-weight-bold">posted by: Zafar Khan Zafare</p>
                    <h4>Warning by <span class="text-warning">K</span>eep<span class="text-warning">K</span>now:</h4>
                    <p>This is peer to peer Question Section where your concapt is clear.If you have any question about
                        any subject so firstly mention subject name then you ask a question.No spam / Advertising
                        / self-promotion is not allowed. Do not cross post question.Remain respactful of other members at all times.
                        <span class="font-weight-bold">Best wishes.</span><p class="lead">
                        
                    </p>
                </div>

            </div>
        ';

       }
       

    
?>


    
<div class="container">
    <form action=<?php echo $_SERVER['REQUEST_URI']?> METHOD="POST">

       <div class="form-group">
           <label for="text">Give Ansqwer of this Question;</label>
           <textarea class="form-control" id="ans" name="ans" rows="3"></textarea>
       </div>
       <button type="submit" class="btn btn-warning">Submit</button>
   </form>
    </div>
      
    <?php
       
       $method=$_SERVER['REQUEST_METHOD'];
       if($method=='POST'){
        $success=false;
        $anwer=$_POST['ans'];
        
        $sql = "INSERT INTO `answer` (`a_desc`, `q_id`, `time`, `ans_by`) VALUES ('$anwer', '$id', current_timestamp(), '0');";
        $result = mysqli_query($conn, $sql);
        $success=true;
        
    }
        // if($success){
        //     // echo "success";
        //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //                 <strong>Success!</strong> Your Question added Please wait to answer.
        //                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                 <span aria-hidden="true">&times;</span>
        //                 </button>
        //         </div>';
        // }

        
        
    
       
    ?>



    <div class="container">
        <h3 class="py-2">Browse -- Answer</h3>
    </div>

    <?php
       $id = $_GET['q_id'];
       $alert=true;
    //    $noResult = false;
       $sql = "SELECT * FROM `answer` WHERE q_id=$id";
       $result = mysqli_query($conn, $sql);
       while($row=mysqli_fetch_assoc($result)){
        $alert = false;
        $id = $row['q_id'];
        $answer = $row['a_desc'];
        echo'      <div class="container">    
                      <div class="media my-3">
                            <img class="mr-3" src="image/user.png" width="54px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 my-0"><a href="_thrads_ans.php?q_id='.$id.'" class="text-dark">zafar</a></h5>
                                    '.$answer.'
                                </div>
                        </div>
                    </div>';
       }
       if($alert){
        echo '  <div class="container">
                    <div class="jumbotron jumbotron-fluid">
                                <div class="container">
                                    <h1 class="display-4">No Answer</h1>
                                    <p class="lead">no answer found are you be the first person to give answer.</p>
                                </div>
                    </div>
                </div>';
       }
?>
    
        



    <?php include 'files/_foter.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
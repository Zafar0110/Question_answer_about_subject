<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/incon?family=Material+Icons"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Email -- sender</title>
</head>

<body>

<!-- div.alrt. -->
   
<div class="wrapper">
   <header>Send a Massage</header>
   <form action="main.php" method="post">
        <div class="dbl-field">
            <div class="field">
                <input type="text"  name="name" placeholder="Enter your name">
                <i class="fas fa-user"></i>
            </div>
            <div class="field">
                <input type="text" name="email" placeholder="Enter your Email">
                <i class="fas fa-envelope"></i>
            </div>
        </div>
        <div class="dbl-field">
            <div class="field">
                <input type="text" name="phone" placeholder="Enter your Phone">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="field">
                <input type="text" name="website" placeholder="Enter your website">
                <i class="fas fa-globe"></i>
            </div>
            
        </div>
            <div class="message">
                <textarea  name="msg" placeholder="Write a message"></textarea>
                <i class="fas fa-envelope"></i>
            </div>
            <div class="button-are">
                <button type="submit" name="send" >Send Message</button>
                <span>Sending your message...</span>
            </div>
   </form>
</div>




<script src="main.js"></script>

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
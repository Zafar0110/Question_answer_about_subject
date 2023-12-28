<?php

 echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#"> <span class="text-warning">K</span>eep<span class="text-warning">K</span>now</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="main.php?#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php?#" tabindex="-1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Science Subject</a>
                            <a class="dropdown-item" href="#">Arts Subject</a>
                            <a class="dropdown-item" href="#">Other Subject</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn btn-warning text-white my-2 my-sm-0" type="submit">Search</button>
                    <button class="btn btn-outline-warning ml-2 my-sm-0" type="submit" data-toggle="modal" data-target="#singupModal">SingUp</button>
                    <button class="btn btn-outline-warning ml-2 my-sm-0" type="submit" data-toggle="modal" data-target="#loginModal">LongIn</button>
                </form>
            </div>
        </nav>';
include 'files/_login.php';
include 'files/_singup.php';
 
?>
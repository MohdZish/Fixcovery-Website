<?php
  if(!isset($_SESSION)){
    session_start();
}
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="navbar.css">
<script src="postpage.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        [data-toggle="collapse"][aria-expanded="false"] > .js-rotate-if-collapsed
        {
            -webkit-transform:rotate(180deg);
        -webkit-transition-duration: 1s;
        }
    </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>



  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700;800&display=swap" rel="stylesheet">

  <script src="script.js"></script>
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<nav class="navbar navbar-expand-lg fixed-top">

  <button class="navbar-toggler navbar-dark  " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  <img class="navbar-brand" src="Images/Logo/logo.png" onclick="window.location='inddddex.php'"></img>

  <button  type="button" class="btn navbuttons underline d-none d-md-block" href="inddddex.php" onclick="window.location='inddddex.php'">Home</button>

  <div class="nav-item dropdown">
    <button class="btn navbuttons d-none d-md-block" type="button" id="categorymenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Fixes <i class="fas fa-angle-down"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="categorymenu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div>



  <button type="button" class="btn navbuttons underline d-none d-md-block">Ask Question</button>

  <div class="form-inline searcharea d-flex justify-content-center ">
      <input class="form-control d-none d-md-block searchbar" type="search" placeholder="Search for a fix!" aria-label="Search">
  </div>

  <div class="collapse navbar-collapse text-center  identificationtab" id="navbarSupportedContent">
    <ul class="navbar-nav">
    
      <li class="nav-item pr-2">
        <button class="btn btn-outline-light signin d-none d-md-block" onclick="window.location='uploadpost.php'"><i class="fas fa-plus"></i> Upload Post</button>
      </li>
      <?php 
      if(isset($_SESSION['verified']) && $_SESSION['verified'] === true) : 
        if (isset($_SESSION['Auth']['User']['role']) 
    && $_SESSION['Auth']['User']['role'] == 'admin')

        ?>
              <div class="nav-item dropdown">
                  <a href="#"><img src="Images/UserAvatar/example3.png" alt="Avatar" class="avatar" id="useravatardropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"></a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="useravatardropdown">
                    <a class="dropdown-item" onclick="window.location='userpage.php'"  href="#">My Account</a>
                    <a class="dropdown-item" href="#">My posts</a>
                    <a class="dropdown-item" onclick="window.location='logout.php'" href="#">Sign Out</a>
                  </div>
                </div>
                
      <?php else: ?>
            <button type="button" class="btn btn-light signin" href="google.com" onclick="window.location='loginpage.php'"><i class="fas fa-sign-in-alt" ></i> Sign In</button>

      <?php endif; ?>

    </ul>
  </div>
</nav>
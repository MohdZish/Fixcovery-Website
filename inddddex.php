<?php
  session_start();
?>
<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
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

  <link href='https://fonts.googleapis.com/css?family=Merriweather'>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">

  <script src="script.js"></script>
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

<script type="text/javascript">

  window.onload = function () {
    var myNav = document.querySelector("nav") ;
    window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");
    }
}};

    AOS.init({
  duration: 1500,  //FUNCTION FOR  ANIMATION FADE IN WHILE SCROLLING !!!
    });


</script>

  <nav class="navbar navbar-expand-lg fixed-top" id="mynav">

      <button class="navbar-toggler navbar-dark  " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>

      <img class="navbar-brand" src="Images/Logo/logo.png" href="#"></img>

      <button type="button" class="btn navbuttons underline d-none d-md-block">Home</button>

      <div class="nav-item dropdown">
        <button class="btn navbuttons d-none d-md-block" type="button" id="categorymenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fixes <i class="fas fa-angle-down"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="categorymenu">
          <a class="dropdown-item" href="#">Windows</a>
          <a class="dropdown-item" href="#">Linux</a>
          <a class="dropdown-item" href="#">Android</a>
          <a class="dropdown-item" href="#">IOs</a>
        </div>
      </div>



      <button type="button" class="btn navbuttons underline d-none d-md-block">Ask Question</button>

      

      <div class="collapse navbar-collapse text-center  identificationtab" id="navbarSupportedContent">
        <ul class="navbar-nav">
          
          
          <?php 
          if(isset($_SESSION['verified']) && $_SESSION['verified'] === true) : 
            //if (isset($_SESSION['Auth']['User']['role']) && $_SESSION['Auth']['User']['role'] == 'admin')  <-- maybe needed idk

            ?>
                <!--<div class="btn text-light">
                  <i class="far fa-bell  btn-md" ></i> <i class="fas fa-angle-down"></i>
                </div> -->
                <li class="nav-item pr-2">
                  <button onclick="window.location='uploadpost.php'" class="btn btn-outline-light signin d-none d-md-block btn-sm mt-1" href="#"><i class="fas fa-plus"></i> Upload Post</button>
                </li>
                <div class="nav-item dropdown">
                  <img src="Images/UserAvatar/example3.png" alt="Avatar" class="avatar" id="useravatardropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="useravatardropdown">
                  <a class="dropdown-item" onclick="window.location='userpage.php'" href="#">My Account</a>
                  <a class="dropdown-item" href="#">My posts</a>
                  <a class="dropdown-item" onclick="window.location='logout.php'" href="#">Sign Out</a>
                </div>
                </div>
          <?php else: ?>

                <div class="form-inline searcharea d-flex justify-content-center mr-3">
                  <input class="form-control d-none d-md-block searchbar" type="search" placeholder="Search for a fix!" aria-label="Search">
                </div>
                <li class="nav-item pr-2">
                  <button onclick="window.location='uploadpost.php'" class="btn btn-outline-light signin d-none d-md-block " href="#"><i class="fas fa-plus"></i> Upload Post</button>
                </li>
                <button type="button" class="btn btn-light  signin" href="google.com" onclick="window.location='loginpage.php'"><i class="fas fa-sign-in-alt" ></i> Sign In</button>

          <?php endif; ?>

        </ul>
      </div>
    </nav>


    <div class="container-fluid h-100 ">
      <div class="row h-100" >
        <div class="col-lg-6 my-auto" data-aos="fade-right">
            <h1 class="maintext mt-5 ml-3">A Hub To Fix your Daily Tech Bugs.</h1>
            <p class="subtext mb-3 ml-3 mt-3 ">Publish your own articles by fixing your everyday Tech Issues!</p>

            <a href="#" class="btn btn-light mainbtn1 getstarted ml-3 mt-3 " >Start Writing</a>
            <a href="#" class="btn btn-outline-light mainbtn2 getstarted ml-1 mt-3">Ask a Question</a>
        </div>

        <div class="col-lg-6">
                <div class="screen" data-aos="fade-up">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                   <script 
                src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

                <!--<lottie-player  src="https://assets10.lottiefiles.com/packages/lf20_lkkf4xxv.json" background="transparent" class="mainpageanim no-gutters" speed="1" style="transform : scale(1.35);" loop autoplay></lottie-player>-->
            
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid middlelane middlelanetemp ">
       
    </div>

    <div class="container-fluid maincontent mb-6 mt-0" >

      <div data-aos="fade-up" data-aos-once="true"> 
         <h1 class="contenttext mt-5 ml-1">Popular Articles <i class="fas fa-fire"></i></h1>
        <div class="container-fluid mt-5">
        <div class="card-deck">
          <a class="text-decoration-none" href="postpage.html"><div class="card containercards stretched-link  p-0">
                <img class="card-img-top cardimg" src="Images/MainPage/temp.png" alt="Card image cap">
                <div class="card-body sidebarcard ">
                    <h6 class="sidebarcontent">
                      How to fix Windows not genuine error without cmd
                    </h6>

                    <a class="carduserlink">
                      by</a> <a class="" href="http://www.google.com">Username</a> <br>
                    

                    <span class="badge  tag">Windows</span>
                </div>
          </div></a>

          <a class="text-decoration-none" href="postpage.html"><div class="card containercards stretched-link  p-0">
                <img class="card-img-top cardimg" src="Images/MainPage/temp2.jpg" alt="Card image cap">
                <div class="card-body sidebarcard ">
                    <h6 class="sidebarcontent">
                      How to fix Windows not genuine error without cmd
                    </h6>

                    <a class="carduserlink">
                      by</a> <a class="" href="http://www.google.com">Username</a> <br>
                    

                    <span class="badge  tag">Windows</span>
                </div>
          </div></a>

          <a class="text-decoration-none" href="postpage.html"><div class="card containercards stretched-link p-0">
                <img class="card-img-top cardimg" src="Images/MainPage/temp3.png" alt="Card image cap">
                <div class="card-body sidebarcard ">
                    <h6 class="sidebarcontent">
                      How to fix Windows not genuine error without cmd
                    </h6>

                    <a class="carduserlink">
                      by</a> <a class="" href="http://www.google.com">Username</a> <br>
                    

                    <span class="badge  tag">Windows</span>
                </div>
          </div></a>

          <div class="card">
              <div class="card-body sidebarcard">
                <h6 class="sidebar-heading d-flex text-muted sidebarcontent">
                    <span>More Popular Articles... </span>
                  </h6>

                  <ul class="nav innerside">
                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1 " href="postpage.html">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1" href="#">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1" href="#">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1" href="#">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
        </div>
        </div>
      </div>

     
      <div data-aos="fade-up" data-aos-once="true" >

        <h1 class="contenttext mt-5  ml-1">Recent Articles <i class="fas fa-history"></i></h1>

      <div class="container-fluid mt-5 mb-5">
        <div class="card-deck">
          <a class="text-decoration-none" href="postpage.html"><div class="card containercards stretched-link  p-0">
                <img class="card-img-top cardimg" src="Images/MainPage/temp.png" alt="Card image cap">
                <div class="card-body sidebarcard ">
                    <h6 class="sidebarcontent">
                      How to fix Windows not genuine error without cmd
                    </h6>

                    <a class="carduserlink">
                      by</a> <a class="" href="http://www.google.com">Username</a> <br>
                    

                    <span class="badge  tag">Windows</span>
                </div>
          </div></a>

          <a class="text-decoration-none" href="postpage.html"><div class="card containercards stretched-link  p-0">
                <img class="card-img-top cardimg" src="Images/MainPage/temp2.jpg" alt="Card image cap">
                <div class="card-body sidebarcard ">
                    <h6 class="sidebarcontent">
                      How to fix Windows not genuine error without cmd
                    </h6>

                    <a class="carduserlink">
                      by</a> <a class="" href="http://www.google.com">Username</a> <br>
                    

                    <span class="badge  tag">Windows</span>
                </div>
          </div></a>

          <a class="text-decoration-none" href="postpage.html"><div class="card containercards stretched-link p-0">
                <img class="card-img-top cardimg" src="Images/MainPage/temp3.png" alt="Card image cap">
                <div class="card-body sidebarcard ">
                    <h6 class="sidebarcontent">
                      How to fix Windows not genuine error without cmd
                    </h6>

                    <a class="carduserlink">
                      by</a> <a class="" href="http://www.google.com">Username</a> <br>
                    

                    <span class="badge  tag">Windows</span>
                </div>
          </div></a>

          <div class="card">
              <div class="card-body sidebarcard">
                <h6 class="sidebar-heading d-flex text-muted sidebarcontent">
                    <span>More Recent Articles... </span>
                  </h6>

                  <ul class="nav innerside">
                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1 " href="postpage.html">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1" href="#">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1" href="#">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link textstyle1 buttonstyle1" href="#">
                        How to fix Windows not genuine error <i class="fab fa-windows"></i>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
        </div>
        </div>
       </div>

      </div>
    </div>

    <div class="container-fluid middlelane middlelanetemp">
       
    </div>

    <div class="container-fluid maincontent mb-6 mt-0" >

    </div>



</body>
</html>

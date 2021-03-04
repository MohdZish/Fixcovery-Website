<?php 
session_start();
include_once("navbar.php"); ?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="userpage.css">
<link rel="stylesheet" href="ckeditor5/content-styles.css">
</head>

<body>

<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
        </nav>

        <main role="main" class="col-md-8 ck-content">

           <div class=" align-items-center pt-3 pb-1 mb-3 border-bottom">
            <?php 

              $mysqli = new mysqli("localhost","root", "","fixcovery");

              if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
              }
              ?>
              <div class="row">
                
                <div class="col-md-2 text-center mt-4 order-sm-12 ">
                  <img src="Images/UserAvatar/example3.png" class="avatarinpage  float-md-right mx-auto" id="useravatardropdown" >
                </div>
                <div class="col-md-10 order-sm-1">
                  <h1 class="username text-center text-md-left"><?php echo $_SESSION['username']; ?></h1>
                  <p class="lead postsubtitle">
                    I am a professional freelance writer with more than 20 years experience in the technology space. He’s written for Brainstorm, Website Compass, and Business Connections eNewsletter, as well as tech companies including HP, IBM, Intel, Samsung, and Amazon Web Services.
                  </p>
                </div>
              </div>
              
          </div>

          <h1 class="yourarticle pt-3">Your articles</h1>


          <div class="allarticles pt-3">
            <?php

              $query = "SELECT * FROM posts where username='".$_SESSION['username']."'";
              $result = $mysqli->query($query);
              function seoUrl($string) {
    //Lower case everything
                  $string = strtolower($string);
                  //Make alphanumeric (removes all other characters)
                  $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
                  //Clean up multiple dashes or whitespaces
                  $string = preg_replace("/[\s-]+/", " ", $string);
                  //Convert whitespaces and underscore to dash
                  $string = preg_replace("/[\s_]/", "-", $string);
                  return $string;
              }

              if ($result->num_rows > 0) {
                while($row = $result->fetch_array()){ ?>


                  <div class="card shadow-sm  articlecard mb-4">
                    <div class="row no-gutters">
                      <div class="col-md-9">
                        <div class="card-body">
                          <a href="article/<?php echo $row['postid'] . '/'. seoUrl($row['title']);?>"><h5 class="card-title"><?php echo $row['title'] ?></h5></a>
                          <?php echo substr($row['body'], 0, 100); ?>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <img class="  articlecardimg" src="Images/MainPage/temp3.png" alt="sans">
                      </div>
                    </div>
                  </div>


               <?php }} else {?> 

                  <p class="lead postsubtitle">
                    There are no articles yet. Start writing here.
                  </p>

              <?php } $mysqli->close();?> 
         
        </main>

		<div class="container col-md-2 pt-4">

      </div>
    </div>



      </div>
    </div>


<header class="page-header header container-fluid">
</header>

</body>
</html>

<?php include_once("navbar.php"); ?>

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

              <div class="row">
                <div class="col-md-9">
                  <h1 class="username">Username</h1>
                  <p class="lead postsubtitle">
                    This User is a professional freelance writer with more than 20 years experience in the technology space. He’s written for Brainstorm, Website Compass, and Business Connections eNewsletter, as well as tech companies including HP, IBM, Intel, Samsung, and Amazon Web Services.
                  </p>
                </div>
                <div class="col-md-3 mt-4">
                  <img src="Images/UserAvatar/example3.png" class="avatarinpage  float-right" id="useravatardropdown" >
                </div>
              </div>
              
          </div>

          <h1 class="yourarticle pt-3">Your articles</h1>

          <div class="allarticles pt-3">
            <div class="card articlecard">
              <div class="row no-gutters">
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">How to fix windows not genuine error</h5>
                    This User is a professional freelance writer with more than 20 years experience in the technology space. 
                  </div>
                </div>
                <div class="col-md-2">
                  <img class="  articlecardimg" src="Images/MainPage/temp3.png" alt="sans">
                </div>
              </div>
          </div>

          <div class="allarticles pt-3">
            <div class="card articlecard">
              <div class="row no-gutters">
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">How to fix windows not genuine error</h5>
                    This User is a professional freelance writer with more than 20 years experience in the technology space. 
                  </div>
                </div>
                <div class="col-md-2">
                  <img class="  articlecardimg" src="Images/MainPage/temp3.png" alt="sans">
                </div>
              </div>
          </div>

          <?php 

              $mysqli = new mysqli("localhost","root", "","fixcovery");

              if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
              }

              $result = mysqli_query($mysqli, "SELECT * FROM posts WHERE title='How to fix an error'");
              $row = mysqli_fetch_assoc($result);
              
              echo $row['body'];
              $mysqli -> close();
           ?>
         
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

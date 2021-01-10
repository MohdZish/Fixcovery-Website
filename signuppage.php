<?php include('signup.php') ?>

<?php include_once("navbar.php"); ?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="signuppage.css">
</head>

<body>


<div class="container d-flex  align-items-center justify-content-center">
    <div class="card cardbox mt-3 " >
      <div class="maincard row card-body mx-auto">
          <div class=" col-md-5 pt-3">
            <h5 class="card-title text-center mt-3 welcometext">Sign Up</h5>
            <form class="cardleftside mx-4" method="post" action="signuppage.php" name="login">
              <?php include('errors.php'); ?>
                          <div class="form-group pt-1 ">
                              <label for="exampleInputEmail1" class="desctext">Username</label>
                              <input name="username"  class="form-control loginbuttons" value="<?php echo $username; ?>" id="username" placeholder="Enter username">
                           </div>
                           <div class="form-group ">
                              <label for="exampleInputEmail1" class="desctext">Email address</label>
                              <input type="email" name="email"  class="form-control loginbuttons" value="<?php echo $email; ?>" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1" class="desctext">Password</label>
                              <input type="password" name="password_1" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter a Password">
                           </div>

                           <div class="form-group">
                              <label for="exampleInputEmail1" class="desctext">Confirm Password</label>
                              <input type="password" name="password_2" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Re-enter Password">
                           </div>

                           <div class="form-group">
                              <p class="lead leadtext text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
                           <div class="text-center ">
                              <button type="submit" name="reg_user" class=" btn btn-block loginbtn btn-primary tx-tfm">Sign Up</button>
                           </div>

                           <div class="">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>

                           <div class="pb-3">
                                <a class="btn btn-outline-dark w-100" href="/users/googleauth" role="button" >
                                  <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                                  Sign up with Google
                                </a>
                            </div>

                           <div class="form-group">
                              <p class="undertexts text-center">Already have an account? <a href="loginpage.php" id="signup">Login</a></p>
                           </div>
                        </form>

          </div>

          <div class="cardillustration col-md-7">
              <div class="row">
                 <img class=" designcardimage d-none d-sm-block" src="Design/SignUpDesign.png" />
              </div>
            </div>


        
      </div>
    </div>
  </div>





</body>
</html>

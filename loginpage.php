<?php include_once("navbar.php"); ?>
<!doctype html>
<html>
<head>
  <link rel="stylesheet" href="loginpage.css">
</head>

<body>

<div class="container d-flex  align-items-center justify-content-center">
    <div class="card cardbox mt-4 " >
      <div class="maincard row card-body mx-auto">
        <div class="cardillustration col-md-6">
              <div class="row">
                 <img class=" designcardimage d-none d-sm-block" src="Design/SignUpDesign.png" />
              </div>
            </div>


          <div class=" col-md-6 pt-3">
            <h5 class="card-title text-center mt-3 welcometext">Welcome Back</h5>
            <form class="cardleftside mx-4">
                           <div class="form-group pt-1 ">
                              <label for="exampleInputEmail1" class="desctext">Email address</label>
                              <input type="email" name="email"  class="form-control loginbuttons" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1" class="desctext">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="text-center pt-3">
                              <button onclick="login()" class=" btn btn-block loginbtn btn-primary tx-tfm">Login</button>
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
                                  Login with Google
                                </a>
                            </div>

                           <div class="form-group">
                            <p class="undertexts text-center">Forgot Password? <a href="#" id="signup">Reset</a></p>
                              <p class="undertexts text-center">Don't have an account? <a href="signuppage.php" id="signup">Sign up</a></p>
                           </div>
                        </form>

          </div>
            
            


        
      </div>
    </div>
  </div>





</body>
</html>

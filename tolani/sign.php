


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="css/stylie.css">
    <script src="https://kit.fontawesome.com/81280830ae.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
    <nav class="navbar">
        <div class="firstdiv">
            <a href="index.html"  id="logo"> <i class="fa-solid fa-graduation-cap"></i>Cicot Journals</a>
       
        <div class="togglebar" id="togglemenu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="navebar">
            <li class="navy">
                <a href="index.html" class="link">Home</a>
            </li>
            
            <li class="navy">
                <a href="about.html" class="link">About </a>
            </li>
            <li class="navy">
                <a href="publish.php" class="link">Publish</a>
            </li>
            
           
        </ul>
    </div>
    </nav>
   <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="validation.php" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password"  required />
          </div>
          <input type="submit" value="Login" name="submit" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password.php" style="color: #4590ef;">Forgot Password?</a></p>
        </form>


        <form action="registration.php" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="username" name="signup_user"  required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="signup_password"  required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="signup_cpassword" required />
          </div>
          <input type="submit" class="btn" name="signup" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Sign up to download unlimited tech journals from the college
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="images/undraw_login_re_4vu2.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
           Sign in to continue downloading journals from the college
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="images/undraw_shared_workspace_re_3gsu.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

 
      
  
   <script src="js/login.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Author sign in</title>
  <link rel="stylesheet" href="css/styllies.css">
  <script src="https://kit.fontawesome.com/81280830ae.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar">
    <div class="firstdiv">
        <a href="/"  id="logo"> <i class="fa-solid fa-graduation-cap"></i>Cicot Journals</a>
   
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
        
    </ul>
</div>
</nav>
  <section class="flexx">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/undraw_welcome_cats_thqn.svg"alt="Avatar"  id="imge">
      </div>
      <div class="flip-card-back">
        <h1>New researcher?</h1>
        <p> Sign up to enjoy unlimitied tech writings from the college</p>
        <form action="pubreg.php" class="sugnup" method="post">
         
          <div class="input">
              <i class="fa-solid fa-user"></i>
                        <input type="text" name="user" placeholder="Username" required>
                        </div>
                        <div class="input">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password" required>
                    </div>
                    <div class="input">
                      <i class="fa-solid fa-lock"></i>
                      <input type="password" name="cpass" placeholder=" Confirm Password" required>
                  </div>
                <button class="submit">Sign up</button>
             <p class="social"> or sign in with social networks</p>
                <div class="media">
                    <a href="www.facebook.com" class="icon"> <i class="fa-brands fa-facebook"></i></a>
                    <a href="www.twitter.com"class="icon"> <i class="fa-brands fa-twitter"></i></a>
                    <a href="www.instagram.com"class="icon"> <i class="fa-brands fa-instagram"></i></a>
                
                    <a href="www.linkedin.com"class="icon"> <i class="fa-brands fa-linkedin"></i></a>
                    <a href="www.gmail.com"class="icon" > <i class="fa-solid fa-envelope"></i></a>
   </div>
   </form>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="images/undraw_login_re_4vu2.svg" alt="Avatar" id="imge" >
      </div>
      <div class="flip-card-back">
        <h1>Already here?</h1>
        <p> Sign in to enjoy unlimitied tech writings from the college</p>
        <form action="pubval" class="sugnup" method="post">
         
          <div class="input">
              <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="input">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" class="pass" placeholder="Password" required>
                    </div>
                   
                <button class="submit">Sign in</button>
             <p class="social"> or sign up with social networks</p>
                <div class="media">
                    <a href="www.facebook.com" class="icon"> <i class="fa-brands fa-facebook"></i></a>
                    <a href="www.twitter.com"class="icon"> <i class="fa-brands fa-twitter"></i></a>
                    <a href="www.instagram.com"class="icon"> <i class="fa-brands fa-instagram"></i></a>
                
                    <a href="www.linkedin.com"class="icon"> <i class="fa-brands fa-linkedin"></i></a>
                    <a href="www.gmail.com"class="icon" > <i class="fa-solid fa-envelope"></i></a>
   </div>
   </form>
      </div>
      
    </div>
  </div>
</section>
<script src="js/home.js"></script>
</body>
</html>
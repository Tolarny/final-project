<?php 

session_start();
if(!isset($_SESSION['username'])) {
    header('Location: publish.php');
}

?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload page</title>
  <link rel="stylesheet" href="css/styleer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
            <a href="publish.html" class="link">Publish</a>
        </li>
      
        <li class="butt">
            <a href="logout2.php" class="button">Logout</a>

        </li>
    </ul>
</div>
</nav>

<h1 style="color: #0e2749;">Welcome <?php echo $_SESSION['username']; ?></h1>
<section class="bod">
   <div class="wrapper">
    <header>Please upload your file here</header> 
    <form action="home.php" method="post" enctype="multipart/form-data">
            Select PDF File to Upload:
            <input type="file" name="file">
            <input type="submit" name="submitjournal" value="Upload">
        </form>
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
  </div>
</section>
 
  <footer>
    <div class="content">
      <div class="left box">
        <div class="upper">
          <div class="topic">About us</div>
          <p>
              CICOT journals is website for the <br>college of information and communication technology<br> Crescent University Abeokuta

          </p>
        </div>
        <div class="lower">
          <div class="topic">Contact us</div>
          <div class="phone">
            <a href="#"><i class="fas fa-phone-volume"></i>070443367229</a>
          </div>
          <div class="email">
            <a href="#"><i class="fas fa-envelope"></i>motolanijuanid@yahoo.com</a>
          </div>
        </div>
      </div>
      <div class="middle box">
        <div class="topic">Our Services</div>
       
        <div><a href="#">Read</a></div>
        <div><a href="#">Download</a></div>
        <div><a href="#">Review</a></div>
        <div><a href="#">Publish</a></div>
        <div><a href="#">Feedback</a></div>
        <div><a href="#">Contact</a></div>
        
      </div>
      <div class="right box">
        <div class="topic">Subscribe us</div>
        <form action="#">
          <input type="text" placeholder="Enter email address">
          <input type="submit" name="" value="Send">
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </form>
      </div>
    </div>
    <div class="bottom">
      <p>Copyright © 2022 <a href="#">CICOT</a> All rights reserved</p>
    </div>
  </footer>

  <script src="js/script.js"></script>

</body>
</html>
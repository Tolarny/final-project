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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
    <link rel="stylesheet" href="css/styleur.css">
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
       
        <li class="butt">
            <a href="logout.php" class="button">Logout</a>

        </li>
    </ul>
</div>
</nav>

<h1 style="color: #0e2749;">Welcome <?php echo $_SESSION['username']; ?></h1>

<body>  
  
<h2> Welcome to the download page </h2>  
 
<h5>Click on the below text to download pdf file :</h5> 
<!----
<div class="rows"> 
<a href = "Aisha's Manifesto.pdf" download >  
<b>1. Aisha'manifesto </b>  
</a> 
<a href = "Aisha's Manifesto.pdf" download >  
    <b> 2. Aisha's manifesto </b>  
</a> 
    <a href = "CPS 404 Handout (4) (1).pdf" download >  
        <b> 3. CPS 404 handout </b>  
        </a> 
        <a href = "CPS 408.pdf" download >  
            <b> 4. CPS 408 HANDOUT</b>  
            </a> 
            <a href = "CPS 414.pdf" download >  
                <b> 5. Cps 414 handout </b>  
                </a>  
            </div>
            ---->
        
<table>
<thead>
    <th>ID</th>
    <th>Filename</th> 
    <th>Downloads</th> 
</thead>
<tbody>
<?php 
// Database Connection 
$conn = new mysqli('192.168.43.7', 'ummi', 'rootpass', 'userreg');
//Check for connection error
$select = "SELECT * FROM `images`";
$result = $conn->query($select);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['file_name']; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="download.php?file_id=<?php echo $file['id'] ?>" download="">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table> 
<h5> Thank you for downloading with us </h5>  
 
    <script src="js/home.js"></script>
</div>
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
</body>
</html>
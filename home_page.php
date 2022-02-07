<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="home_page.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

</head>
<body>

<div class="header">
  <h1 class="animated fadeInLeftBig">ROYAL<span> &nbsp LIBRARY</span></h1>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>



      <h3><p class="menu_welcome">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></h3>
      <h3> <a href="index_main.html"><p class="logout">Log out</p></a> </h3>
    <?php endif ?>
</div>
<hr>
    
<div class="row">
    <div class="col-sm-3 center-img"><img src="images/book_1.png" title=" Quo vadis
by Henryk Sienkiewicz " >
    </div>
    <div class="col-sm-3 center-img" ><img src="images/book_2.png" title=" Being Mortal
Medicine and What Matters in the End
by Atul Gawande " >
    </div>
    <div class="col-sm-3 center-img" ><img src="images/book_3.png" title=" Drama
by Raina Telgemeier" >
    </div>
     <div class="col-sm-3 center-img" ><img src="images/book_4.png" title=" Cogent science in context
the science wars, argumentation theory, and Habermas
by William Rehg" >
    </div>
  </div>

<div class="row_text">
    <div class="col-sm-3 center-img"><p> Quo vadis
by Henryk Sienkiewicz </p></div>

    <div class="col-sm-3 center-img"><p> Being Mortal
by Atul Gawande </p></div>

    <div class="col-sm-3 center-img"><p> Drama
by Raina Telgemeier  </p></div>

    <div class="col-sm-3 center-img"><p> Cogent science
by William Rehg </p></div>

</div>


<hr>

<div class="row">
    <div class="col-sm-3 center-img"><img src="images/book_5.png" title=" Bride For Strathallane
by Stephanie Howard " ></div>
    <div class="col-sm-3 center-img"><img src="images/book_6.png" title=" Science in a free society
by Paul K. Feyerabend  " ></div>
    <div class="col-sm-3 center-img"><img src="images/book_7.png" title=" IT
A Novel
1st Scribner hardcover edition [4]
by Stephen King " ></div>
    <div class="col-sm-3 center-img"><img src="images/book_8.png" title=" Goethe's Works
illustrated by the best German artists.
by Johann Wolfgang von Goethe " ></div>
  </div>

<div class="row_text">
    <div class="col-sm-3 center-img"><p> Bride For Strathallane
by Stephanie Howard </p></div>
    <div class="col-sm-3 center-img"><p> Science in a free society
by Paul K. Feyerabend </p></div>
    <div class="col-sm-3 center-img"><p> IT
A Novel by Stephen King  </p></div>
    <div class="col-sm-3 center-img" ><p> Goethe's Works by Johann Wolfgang von Goethe </p></div>
    </div>
  </div>

</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="margin-top: 15%;">© 2022 Copyright:
    <a href=""> RoyalLibrary.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>   
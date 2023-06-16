<!doctype html>
<html> 
 <head>  
  <link href="signin.css" type="text/css" rel="stylesheet"> 
</head> 
 <body> 
  <div id="middlebox"> 
    <center>
     DOCTOR
    </center>
    <form action="doctorverify.php" method="POST"> 
      <?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
     <input type="text" class="border" name="email" id="email1" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="pass" id="pass1" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    </form> 
    <br>
    <center> <a href="signupdoctor.html">sign up </a> </center>
   </div> 
 </body>
</html>


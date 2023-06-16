<!doctype html>
<html> 
 <head>  
  <link href="signin.css" type="text/css" rel="stylesheet"> 
</head> 
 <body>  
  <center>
   <div id="middlebox"> 
    <center>
     PATIENT
    </center>
    <form action="patientverify.php" method="POST"> 
      <?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>

     <input type="text" class="border" name="email" id="email2" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="pass" id="pass2" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    
    </form> <br>
   <center> <a href="signup.html">sign up </a></center>
   </div> 
   </center>
 </body>
</html>


<!doctype html>
<html> 
 <head>  
  <link href="signin.css" type="text/css" rel="stylesheet"> 
</head> 
 <body> 
   <div id="middlebox"> 
    <center>
      BLOOD DONAR
    </center>
    <form action="donorverify.php" method="POST"> 
      <?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
     <input type="text" class="border" name="demail" id="email3" placeholder="email"> 
     <br> 
     <input type="password" class="border" name="dpass" id="pass3" placeholder="password"> 
     <br> 
     <button type="submit" name="submit">login</button>
    </form> <br>
    <center><a href="signupdonor.html">sign up </a></center>
   </div> 
   </center>
 </body>
</html>


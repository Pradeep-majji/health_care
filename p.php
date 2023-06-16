
<?php
session_start();
?>
<!doctype html>
<html> 
 <head>
<style>
  body{
    background-image: url("patientindex.jpg");
    opacity: 40;
  }
input[type=button]{
  width: 50%;
   background-color: black;
    color: #15f4ee; 
    padding: 14px 20px; 
    margin: 8px 0; 
    border: 5px solid #15f4ee; 
    border-radius: 100px; 
    cursor: pointer;
    transition:1.5s;
    }
 </style>
 </head> 
 <body> 
  <center> 
   <h1> WELCOME </h1> 
   <div> 
    <form> 
    <?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
    <a href="appointmentgo.php"><input type="button" name="button" value="APPOINTMENT"> </input></a> 
    <a href="consultgo.php"><input type="button" name="button" value="ONLINE CONSULTATION"> </input></a> 
    <a href="patientform.php"><input type="button" name="button" value="HISTORY"> </input></a> 
    </form> 
   </div> 
  </center> 
 </body>
</html>


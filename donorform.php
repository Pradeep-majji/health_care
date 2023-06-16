<!doctype html>
<html> 
 <head> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style> 
 </head> 
 <body> 
 <center> 
     <h1>BLOOD DONOR FORM</h1> 
     <a href="logoutdonor.php" ><button> logout </button></a>
    </center>
  <form action="donation.php" method="POST"> 
   <div class="container"> 
     
    <?php if(isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?> </p>
      <?php } ?>
    <hr> <label>NAME</label> 
    <input type="text" name="name" placeholder="name"  required> 
    <div> <label>blood group : </label>
    <select id="bloodgroup" name="bloodgroup" required>
           <option value="NULL" name="NULL">--SELECT--</option>
           <option value="A-" name="A-">A-negative</option>
           <option value="A+" name="A+">A-Positive</option>
           <option value="B-" name="B-">B-negative</option>
           <option value="B+" name="B+">B-Positive</option>
           <option value="O-" name="O-">O-negative</option>
           <option value="O+" name="O+">O-Positive</option>
           <option value="AB-" name="AB-">AB-negative</option>
           <option value="AB+" name="AB+">AB-Positive</option>
     </Select>
    </div> 
    <div> <label> Gender : </label> 
     <br> 
     <input type="radio" value="Male" name="gender" checked> Male 
     <input type="radio" value="Female" name="gender"> Female 
     <input type="radio" value="Other" name="gender"> Other 
    </div> 
    <div> <label>Hospitals : </label>
    <select id="hospital" name="hospital" required>
           <option value="NULL" name="NULL">--SELECT--</option>
           <option value="abckidney" name="abckidney">abc kidney</option>
           <option value="graceclinic" name="graceclinic">grace clinic</option>
           <option value="hope" name="hope">hope hospital</option>
           <option value="life" name="life">live long hospitals</option>
           
     </Select>
    </div> 
    <label> Phone : </label> 
    <input type="text" name="phone" placeholder="phone no." size="10" required> 
    Current Address : <textarea cols="80" rows="5" placeholder="Current Address" value="address" required>  
</textarea> 
    <label for="email"><b>Email</b></label> 
    <input type="text" placeholder="Enter Email" name="email" required> 
     
     <button type="submit" class="registerbtn" >submit</button> 
   </div> 
  </form> 
 </body>
</html>
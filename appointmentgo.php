<!doctype html>
<html> 
 <head> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: burlywood;  
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
  background-color: red;  
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
     <h1>APPOINTMENT FORM</h1> 
     <a href="logoutpatient.php" ><button> logout </button></a>
    </center>
     
  <form action="appointmentdb.php" method="POST"> 
   <div class="container"> 
     
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
    <div> <label> AVAILABLE DOCTORS : </label>
    <select id="doctor" name="doctor" required>
           <option value="NULL" name="NULL">--SELECT--</option>
           <option value="raju" name="raju">DONOR.Raj [cardiologist]</option>
           <option value="ravi" name="ravi">Dr.Ravi [opthamologist]</option>
           <option value="sam" name="sam">Dr.Sam [Nerphrologist]</option>
           <option value="ram" name="ram">Dr.Ram [Family Medicine]</option>
           
     </Select>
    </div> 
    <label> Phone : </label> 
    <input type="text" name="phone" placeholder="phone no." size="10" required> 
    Current Address : <textarea cols="80" rows="5" placeholder="Current Address" value="address" name="address" required>  
</textarea> 
    <label for="email"><b>Email</b></label> 
    <input type="text" placeholder="Enter Email" name="email" required>

     <label> CAUSE : </label>

    <select id="cause" name="cause" required>
           <option value="NULL" name="NULL">--SELECT--</option>
           <option value="generalcheckup" name="generalcheckup">GENERAL CHECK UP</option>
           <option value="kidney" name="kidney">KIDNEY PROBLEM</option>
           <option value="eye" name="eye">EYE CHECK UP</option>
           <option value="heart" name="heart">HEART DISEASE</option>
           
     </Select>
     
     <button type="submit" class="registerbtn" name="submit" >submit</button> 
   </div> 
  </form> 
 </body>
</html>
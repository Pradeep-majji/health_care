<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#box {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
 border:15px solid green;
 margin: 20px;
 height: 50%;
 width: 50%;
}
</style>
<body>
<center>
<h3>Enter Details :</h3>
</center>
<div align="center" >
  <a href="logoutdoctor.php" ><button> logout </button></a>

</div>

<center>
<div id="box">
  <form action="doctortable.php" method="POST">
    <input type="text" id="name" name="name" placeholder="NAME">
    <input type="text" id="email" name="email" placeholder="EMAIL">
    <label >Specialization:</label>
     <br>
     <select id="Specialization" name="Specialization" required>
        <option value="NULL" name="NULL">--SELECT--</option>
        <option value="generalcheckup" name="generalcheckup">GENERAL CHECK UP</option>
        <option value="kidney" name="kidney">KIDNEY PROBLEM</option>
        <option value="eye" name="eye">EYE CHECK UP</option>
        <option value="heart" name="heart">HEART DISEASE</option>
        
  </Select>

    <input type="submit" value="Submit">
    
  </form>
</div>
</center>

</body>
</html>



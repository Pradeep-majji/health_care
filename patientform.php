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
  <a href="logoutpatient.php" ><button> logout </button></a>

</div>

<center>
<div id="box">
  <form action="patienttable.php" method="POST">
    <input type="text" id="email" name="email" placeholder="EMAIL">

    <input type="submit" value="Submit">
    
  </form>
</div>
</center>

</body>
</html>



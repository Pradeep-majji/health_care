
<!doctype html>
<html> 
 <head> 
  <style>
table {
  border-collapse: collapse;
  border: 1px solid;
  width: 100%;
  
}

th, td {
  border: 1px solid;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  border: 1px solid;
  background-color: #04AA6D;
}
</style> 
 </head> 
 <body> 
 <div align="center" >
  <h2>DETAILS OF PATIENTS:</h2> 
 
  <a href="logout.php" ><button> logout </button></a>

</div>
  <table > 
   <tbody> 
    <tr> 
     <th>name</th> 
     <th>bloodgroup</th>
     <th>gender</th> 
     <th>phone</th>
     <th>email</th> 
     <th>cause</th>  
      
    </tr>
     <?php
     include "connect.php";
     if(isset($_POST['name'])){

    function clear($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    }
     $name = clear($_POST['name']);
     $selectquery=" select name,bloodgroup,gender,phone,email,cause from appointment where availabledoctors='$name'  union select name,bloodgroup,gender,phone,email,cause from consult where availabledoctors='$name' ";
     $query=mysqli_query($conn,$selectquery);
     $nums=mysqli_num_rows($query);
     while($res=mysqli_fetch_array($query)){
     ?>
    <tr> 
     <td><?php echo $res['name']; ?></td>
     <td><?php echo $res['bloodgroup']; ?></td>
     <td><?php echo $res['gender']; ?></td>
     <td><?php echo $res['phone']; ?></td> 
     <td><?php echo $res['email']; ?></td>
     <td><?php echo $res['cause']; ?></td>   
    </tr> 
   <?php 
   } 
   ?> 
   </tbody> 
  </table> 
 </body>
</html>
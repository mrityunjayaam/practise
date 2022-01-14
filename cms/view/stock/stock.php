<?php
// include('../../model/stock/index.php');
include('../../view/navbar.php'); 
include('../../db.php');

 $sql="SELECT * FROM stock INNER JOIN product ON pid= id";

$res=mysqli_query($conn,$sql);
 
      

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
     table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
  float:right;
  margin-top:40px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
} 
</style>
</head>
<body>
    
   <table>
      
       
  <tr>
    <th>S.N</th>
    <th>Product Name</th>
    <th>Quantity</th>
  </tr>
  <?php

  $i=0;
  while($data=mysqli_fetch_assoc($res)){
      $i++;
      ?>
 
  <tr>
    <td><?php echo $i;?> </td>
    <td><?php echo $data['pname'];?></td>
    <td><?php echo $data['quantity'];?></td>
  </tr>
  <?php
  }?>
</table>

</body>
</html>
<?php include('../../view/sidebar.php'); ?>
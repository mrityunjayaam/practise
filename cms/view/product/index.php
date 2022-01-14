<?php
include('../../model/product/index.php');
ProductName();
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
      <th> <a href="add.php">Add Product</a></th>
       </tr>
       
  <tr>
    <th>S.N</th>
    <th>Product Name</th>
    <th>action</th>
  </tr>
  <?php $i=0;
  while($data=mysqli_fetch_assoc($res)){
      $i++;?>
  <tr>
    <td><?php echo $i;?> </td>
    <td><?php echo $data['pname'];?></td>
    <td><a href="edit.php?id= <?php echo $data['id'];?>" >edit</a>|<a href="../../model/product/delete.php?id= <?php echo $data['id'];?>">delete</a></td>
  </tr>
  <?php
  } ?>
</table>

</body>
</html>
<?php include('../../view/sidebar.php'); ?>
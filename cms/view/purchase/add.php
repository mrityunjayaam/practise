<?php
include('../../view/navbar.php');
// include('../../view/sidebar.php'); 
include('../../db.php');
$sql="SELECT * FROM product";
$res=mysqli_query($conn,$sql);
include('../../model/purchase/add.php');



?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contact form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/purchase/add.css"> 
  </head>
  <body>
    <div class=" " >

     
      <form action="../../model/purchase/add.php" method="post">
        <h1>Contact Us</h1>
        <div class="">
        Product:<select name="pname" >
        <?php
      
      while($data=mysqli_fetch_assoc($res)){
      ?>  
        
       
            <option value="<?php echo $data['id']; ?>"><?php echo $data['pname']; ?></option>
             <?php }?>
        </select>
       
        Quantity: <input type="text" name="quantity" >
         rate <input type="text" name="rate" >
         Invoice Number: <input type="text" name="ino" >
         <!-- Date:<input type="date" name="date" > -->
 
        </div>
       
        <button type="submit" name="submit" >Add</button>
      </form>
    </div>
  </body>
</html>
<?php  ?>
<?php ?>
<?php
include('../../model/product/add.php');
if(isset($_POST['submit'])){
    $name=$_POST['pname'];

ProductAdd($name);
}
?>
<style>
.cen{
      float:right;
  margin-top:300px;
  margin-right:500px;
}
</style>
<span class="cen">
<form action="" method="post">
    Product Name: <input type="text" name="pname" id="" value=""><br>
    <input type="submit" value="add" name="submit">
</form>
</span>
<?php include('../../view/sidebar.php'); ?>
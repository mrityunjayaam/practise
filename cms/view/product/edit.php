<?php

include('../../model/product/edit.php');
$id=$_GET['id'];


if(isset($_POST['submit'])){
    $name=$_POST['pname'];
    EditProduct($id,$name);
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
    Product Name: <input type="text" name="pname" id="" value=<?php  $olddata = oldData($id); ?>><br>
    <input type="submit" value="update" name="submit">
</form>
</span>
<?php
include('../sidebar.php');
?>
<?php
session_start();
include('../../view/navbar.php');

include('../../db.php');
$sql= "SELECT * FROM purchase INNER JOIN product ON product.id = purchase.pid ";
$res=mysqli_query($conn,$sql);


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
        
     table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  padding-top:-500px;
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
  <div class="container-fluid bg-dark mt-1 text-white fs-2">
    <?php
    if(!empty($_SESSION['puradd'])){
        echo $_SESSION['puradd'];
        unset($_SESSION['puradd']);
    }
    ?>
  </div>
    <span>
      <div class="container row"></div>
   <table class="table table-dark table-striped w-75 ">
      
       <tr><th><a href="add.php" class=" ">Add Purchase</a></th></tr>
  <tr>
    <th>S.N</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>rate</th>
    <th>invoice number</th>
    <th>date</th>
 
 
 
  <tr>
  <?php
 $i=0;
 while($data = mysqli_fetch_assoc($res)){
$i++;


 ?>
  </tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $data['pname']; ?></td>
    <td><?php echo $data['quantity'];  ?></td>
    <td><?php echo $data['rate'];  ?></td>
    <td><?php echo $data['i_no'];  ?></td>
    <td><?php echo $data['pdate'];  ?></td>
    </tr> 
    <?php } ?>
 

</table>
</span>
</body>
</html>
<?php include('../../view/sidebar.php'); ?>
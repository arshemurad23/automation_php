<?php
include('navbar.php');
?>

<?php
include('sidebar.php');
?>


<?php
include('dbinfo.php');
$qur_add_prd = "select * from product_tbl";
$res_add_prd = mysqli_query($con,$qur_add_prd);
?>


<?php
$qur_aproval = "select * from  test_aproval";
$res_aproval = mysqli_query($con,$qur_aproval);
?>

<?php
$qur_under = "select * from under_test";
$res_under = mysqli_query($con,$qur_under);
?>


<?php
$qur_tes_res = "select * from testing_res";
$res_tes_res = mysqli_query($con,$qur_tes_res);
?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Production Status</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Production</li>
          <li class="breadcrumb-item active">Production Status</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">

    <div class="card">
            <div class="card-body">
              <h5 class="card-title">add Production</h5>
    <table class="table">

  <thead>
    <tr style="textalign:centre">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
  while($add_prd_row = mysqli_fetch_array($res_add_prd)){
   ?>
  <tr>    
  <td><?php echo $add_prd_row['product_id']  ?> </td>
  <td><?php echo $add_prd_row['product_name']  ?> </td>
  <td><?php echo $add_prd_row['product_quantity']  ?> </td>
  <td ><img src="assets/img/<?php echo $add_prd_row['product_img']; ?>" height = "70" width="80"  ></td>

 
      
    </tr>
    <?php
        }
     
  ?> 
  </tbody>
</table>
</div>
</div>


  <!-- table 2 -->

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Approval Production Status</h5>
    <table class="table">

  <thead>
    <tr style="textalign:centre">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
  while($res_aproval_row = mysqli_fetch_array($res_aproval)){
   ?>
  <tr>    
  <td><?php echo$res_aproval_row['product_id']  ?> </td>
  <td><?php echo $res_aproval_row['product_name']  ?> </td>
  <td><?php echo $res_aproval_row['product_quantity']  ?> </td>
  <td ><img src="assets/img/<?php echo $res_aproval_row['product_img']; ?>" height = "70" width="80"  ></td>

  <?php
        }
     
  ?> 
      
    </tr>
  </tbody>
</table>
</div>
</div>

  <!-- table 3 -->
  <div class="card">
            <div class="card-body">
              <h5 class="card-title">Under Testing Production Status</h5>
    <table class="table">

  <thead>
    <tr style="textalign:centre">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
  while($res_under_row = mysqli_fetch_array($res_under)){
   ?>
  <tr>    
  <td><?php echo$res_under_row['product_id']  ?> </td>
  <td><?php echo $res_under_row['product_name']  ?> </td>
  <td><?php echo $res_under_row['product_quantity']  ?> </td>
  <td ><img src="assets/img/<?php echo $res_under_row['product_img']; ?>" height = "70" width="80"  ></td>

  <?php
        }
     
  ?> 
      
    </tr>
  </tbody>
</table>
</div>
</div>

  
  <!-- table 4 -->




<div class="card">
            <div class="card-body">
              <h5 class="card-title">Testing Result Production Status</h5>
    <table class="table">

  <thead>
    <tr style="textalign:centre">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
  while($res_tes_row = mysqli_fetch_array($res_tes_res)){
   ?>
  <tr>    
  <td><?php echo$res_tes_row['product_id']  ?> </td>
  <td><?php echo $res_tes_row['product_name']  ?> </td>
  <td><?php echo $res_tes_row['product_quantity']  ?> </td>
  <td ><img src="assets/img/<?php echo $res_tes_row['product_img']; ?>" height = "70" width="80"  ></td>

  <?php
        }
     
  ?> 
      
    </tr>
  </tbody>
</table>
</div>
</div>





    </section>

  </main><!-- End #main -->

  <?php 
  include('footer.php');
  ?>
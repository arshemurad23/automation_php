<?php
include('navbar.php');
?>

<?php
include('sidebar.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Testing Result</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Production</li>
          <li class="breadcrumb-item active">Testing Result</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">

    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Testing Result</h5>
    <table class="table">
<?php
include('dbinfo.php');
$qry = "select * from testing_res";
$res = mysqli_query($con, $qry);
?>

  <thead>
    <tr style="textalign:centre">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product image</th>
      <th scope="col" style="colspan-2">Product Approval</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_array($res)){
    ?>
    <tr>
      <td><?php echo $row['product_id'] ?></td>
      <td><?php echo $row['product_name'] ?></td>
      <td><?php echo $row['product_quantity'] ?></td>
      <td ><img src="assets/img/<?php echo $row['product_img']; ?>" height = "70" width="80"  ></td>
      <td><a href="del_test_res.php?id=<?php echo $row['product_id']; ?>" class="btn btn-success">Approved</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</div>
    </section>

  </main><!-- End #main -->

  <?php 
  include('footer.php');
  ?>
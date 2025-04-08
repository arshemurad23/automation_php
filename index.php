
<?php
include('navbar.php');
?>

<?php
include('sidebar.php');
?>

<?php
include('dbinfo.php');
$qur_sign = "select * from signup";
$res_sign = mysqli_query($con,$qur_sign);
$sign_count = mysqli_num_rows($res_sign);
?>


<?php
$qur_add_prd = "select * from product_tbl";
$res_add_prd = mysqli_query($con,$qur_add_prd);
$add_prd_count = mysqli_num_rows($res_add_prd);
?>

<?php
$qur_aproval = "select * from  test_aproval";
$res_aproval = mysqli_query($con,$qur_aproval);
$aproval_count = mysqli_num_rows($res_aproval);
?>

<?php
$qur_under = "select * from under_test";
$res_under = mysqli_query($con,$qur_under);
$under_count = mysqli_num_rows($res_under);
?>

<?php
$qur_tes_res = "select * from testing_res";
$res_tes_res = mysqli_query($con,$qur_tes_res);
$tes_res_count = mysqli_num_rows($res_tes_res);
?>

  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Info</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


<section class="section dashboard">


        <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Total sign-up <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-user-plus"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $sign_count ; ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->


         <!-- Sales Card -->
         <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Yea4t5serter</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> Total Product <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-brands fa-product-hunt"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $add_prd_count  +  $aproval_count  +  $under_count  + $tes_res_count ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->    

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Total approval<span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-person-circle-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $aproval_count ?></h6>
                      </div>
                    </div>
                </div>              
              </div>
            </div><!-- End Sales Card -->

          </div>
        </div>
      </div>

      
      <!-- 2 CARD ROW -->
      <!-- 2 CARD ROW -->
      <!-- 2 CARD ROW -->
      <!-- 2 CARD ROW -->


        <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

               <!-- Sales Card -->
           <!-- Customers Card -->
           <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">NOT Approval<span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="text-dark card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo$add_prd_count   +  $under_count  + $tes_res_count ?></h6>
                      </div>
                    </div>
                </div>              
              </div>
            </div><!-- End Sales Card -->

            </div>
                </div>
              </div>

              


  </main><!-- End #main -->



  <?php
  include('footer.php');
  ?>
  
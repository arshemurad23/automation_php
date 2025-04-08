<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Home</span>
    </a>
  </li><!-- End Dashboard Nav -->

  
<!-- productions -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Production</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="add_product.php">
          <i class="bi bi-circle"></i><span>Add Product</span>
        </a>
      </li>
      <li>
        <a href="product_in_production.php">
          <i class="bi bi-circle"></i><span>Product in Production</span>
        </a>
      </li>
      <li>
        <a href="production_status.php">
          <i class="bi bi-circle"></i><span>Product Status</span>
        </a>
      </li>
    </ul>
  </li><!-- End productions Nav -->

  <!-- testing -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Testing</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="testing1.php">
          <i class="bi bi-circle"></i><span>Testing Approval</span>
        </a>
      </li>
      <li>
        <a href="testing2.php">
          <i class="bi bi-circle"></i><span>Under Testing</span>
        </a>
      </li>
      <li>
        <a href="testing3.php">
          <i class="bi bi-circle"></i><span>Testing Result</span>
        </a>
      </li>
    </ul>
  </li><!-- End Testing Nav -->

  
  
  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.php">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

  
</ul>

</aside><!-- End Sidebar-->
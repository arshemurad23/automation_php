<?php

include('dbinfo.php');

$id = $_REQUEST['id'];

$qry = "delete from under_test where product_id = '$id'";
if(mysqli_query($con, $qry)){
    header('location:testing2.php');
}else{
    echo "<script>alert('error')</script>";
}

mysqli_close($con);


?>
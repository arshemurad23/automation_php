<?php

include('dbinfo.php');

if(isset($_POST['add'])){
    $proll = $_POST['id'];
    $pname = $_POST['pname'];
    $pqty = $_POST['qty'];
    $pcost = $_POST['cost'];

if($proll != "" && $pname != "" && $pqty != "" && $pcost != ""){

    $qry = "insert into testing_res values('$proll', '$pname', '$pqty', '$pcost')";
    if(mysqli_query($con, $qry)){
        header('location:testing3.php');
    }else{
        echo "<script>alert('error')</script>";
    }
}else{
    echo "<script>alert('fill the blanks')</script>";
}

}

?>
<?php

include('dbinfo.php');

if(isset($_POST['add'])){

    $pname = $_POST['pname'];
    $pqty = $_POST['qty'];
    $img = $_FILES['img']['name'];

    $tmp_img = $_FILES['img']['tmp_name'];
    $folder = 'assets/img/' . $img ; 
    move_uploaded_file($tmp_img,$folder);


    

if($pname != "" && $pqty != "" &&  $img != ""){

    $qry = "insert into product_tbl values(null, '$pname', '$pqty', '$img')";
    if(mysqli_query($con, $qry)){
        
    
        header('location:product_in_production.php');
    }else{
        echo "<script>alert('error')</script>";
    }
}else{
    echo "<script>alert('fill the blanks')</script>";
}

}

?>
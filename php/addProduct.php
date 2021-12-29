<?php

include './conn.php';



$s_num = $_POST['stock_num'];
$p_desc = $_POST['prod_desc'];
$dimension = $_POST['dimension'];
$p_clr = $_POST['prod_clr'];
$qps = $_POST['qps'];
$spc = $_POST['spc'];
$ipc = $_POST['ipc'];
$c_desc = $_POST['case_desc'];
$cpp = $_POST['cpp'];
$prod_h = $_POST['prod_h'];
$prod_w = $_POST['prod_w'];
// $img = $_POST['p_img'];
$case_cube = $_POST['case_cube'];
$imgName = $_FILES['p_img']['name'];
$tempImg = $_FILES['p_img']['tmp_name'];

$folder = "../product_img/".$imgName;

$sql = "INSERT INTO `ameri_products` (`stock_no`, `img`, `prod_desc`, `dimension`, `color`, `qps`, `spc`, `ipc`, `case_desc`, `case_cube`, `cpp`, `height`, `weight`) VALUES ( '$s_num', '$imgName', '$p_desc', '$dimension', '$p_clr', '$qps', '$spc', '$ipc', '$c_desc', '$case_cube', '$cpp', '$prod_h', '$prod_w')";

$query = mysqli_query($conn, $sql);
if($query){
    if(move_uploaded_file($tempImg, $folder)){
        echo "File inserted";
    }
}

?>
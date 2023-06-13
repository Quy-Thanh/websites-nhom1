<?php
  include("../../configadmin/config.php");
    
    $tennhasanxuat = $_POST['tennhasanxuat'];
    $file_path = basename($_FILES['brandImg']['name']);
 
    // file upload.php xử lý upload file
    $target_dir = "../../image/";
    $target_file = $target_dir . $file_path;

    //upload
    move_uploaded_file($_FILES["brandImg"]["tmp_name"], $target_file);

    if(isset($_POST['submitnhasanxuat'])){
        $sql_themnhasanxuat = "INSERT INTO brands 
        (Name,image)
         VALUES ('$tennhasanxuat','image/$file_path');";
         mysqli_query($myconnect,$sql_themnhasanxuat);

         header('location:../../index.php?action=quanlynhasanxuat&query=hienthi');
    }
    else if(isset($_POST['submitupdate'])){
        $sql_suanhasanxuat = "UPDATE brands SET name ='$tennhasanxuat', image='image/$file_path' 
         WHERE idbrand = $_GET[idbrand]";
         mysqli_query($myconnect,$sql_suanhasanxuat);

         header('location:../../index.php?action=quanlynhasanxuat&query=hienthi');
    }
    else{
        $id = $_GET['idbrand'];
        $sql_deletebrand = "DELETE FROM brands WHERE idbrand = $id";
        mysqli_query($myconnect, $sql_deletebrand);
        header('location:../../index.php?action=quanlynhasanxuat&query=hienthi');
    }
    
?>
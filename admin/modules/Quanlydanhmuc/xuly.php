<?php
    include("../../configadmin/config.php");

    $tendanhmuc = $_POST['tendanhmuc'];
 

    if(isset($_POST['submitdanhmuc'])){
        $sql_themdanhmuc = "INSERT INTO danhmuc 
        (tendanhmuc)
         VALUES ('$tendanhmuc');";
         mysqli_query($myconnect,$sql_themdanhmuc);

         header('location:../../index.php?action=quanlydanhmuc&query=hienthi');
    }
    else if(isset($_POST['submitsuadanhmuc'])){
        $getid = $_GET['iddanhmuc'];
        $sql_suadanhmuc = "UPDATE danhmuc SET tendanhmuc='$tendanhmuc'WHERE iddanhmuc=$getid";

         mysqli_query($myconnect,$sql_suadanhmuc);
         header('location:../../index.php?action=quanlydanhmuc&query=hienthi');
    }
    else{
        $id = $_GET['iddanhmuc'];
        $sql_deletedanhmuc = "DELETE FROM danhmuc WHERE iddanhmuc = $id";
        mysqli_query($myconnect, $sql_deletedanhmuc);
        header('location:../../index.php?action=quanlydanhmuc&query=hienthi');
    }
    
?>
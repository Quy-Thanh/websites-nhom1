<?php 
     include("../../configadmin/config.php");

     if(isset($_POST['submitdonhang'])){
        $getid = $_GET['iddonhang'];
        $sql_suadonhang = "UPDATE orders SET status='chap nhan'WHERE IDOrder =$getid";

         mysqli_query($myconnect,$sql_suadonhang);
         header('location:../../index.php?action=quanlydonhang&query=hienthi');
    }

    else{
        $getid = $_GET['iddonhang'];
        $sql_deletedanhmuc = "DELETE FROM orders WHERE IDOrder = $getid";
        mysqli_query($myconnect, $sql_deletedanhmuc);
        header('location:../../index.php?action=quanlydonhang&query=hienthi');
    }
?>
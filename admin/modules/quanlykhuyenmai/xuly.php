<?php
    include("../../configadmin/config.php");

    $tenkhuyenmai = $_POST['tenkhuyenmai'];
    $giamgia= $_POST['giamgia'];
    $ngaybatdau= $_POST['ngaybatdau'];
    $ngayketthuc= $_POST['ngayketthuc'];

    if(isset($_POST['submitthemkhuyenmai'])){
        $sql_themkhuyenmai = "INSERT INTO khuyenmai 
        (tenkhuyenmai,giamgia,ngaybatdau,ngayketthuc)
         VALUES ('$tenkhuyenmai','$giamgia','$ngaybatdau','$ngayketthuc');";
         mysqli_query($myconnect,$sql_themkhuyenmai);

         header('location:../../index.php?action=quanlykhuyenmai&query=hienthi');
    }
    else if(isset($_POST['submitsuakhuyenmai'])){
        $getid = $_GET['idkhuyenmai'];
        $sql_suakhuyenmai = "UPDATE khuyenmai SET tenkhuyenmai='$tenkhuyenmai', giamgia =$giamgia
        ,ngaybatdau ='$ngaybatdau', ngayketthuc= '$ngayketthuc'
        WHERE idkhuyenmai=$getid";
        
        echo "$sql_suakhuyenmai";
         mysqli_query($myconnect,$sql_suakhuyenmai);
         header('location:../../index.php?action=quanlykhuyenmai&query=hienthi');
         
    }
    else{
        $id = $_GET['idkhuyenmai'];
        $sql_deletekhuyenmai = "DELETE FROM khuyenmai WHERE idkhuyenmai = $id";
        mysqli_query($myconnect, $sql_deletekhuyenmai);
        header('location:../../index.php?action=quanlykhuyenmai&query=hienthi');
    }
    
?>
<?php
    include("../../configadmin/config.php");


    

    if(isset($_POST['submitthemsanpham'])){
        $file_path = basename($_FILES['imagesp']['name']);
 
        // file upload.php xử lý upload file
        $target_dir = "../../image/";
        $target_file = $target_dir . $file_path;
    
        //upload
        move_uploaded_file($_FILES["imagesp"]["tmp_name"], $target_file);

        $name_product = $_POST['nameProduct'];
        $price = $_POST['price'];
        $soluong = $_POST['soluong'];
        $image = 'image/'.$file_path;
        $CPU = $_POST['CPU'];
        $RAM = $_POST['RAM'];
        $Storage = $_POST['Storage'];
        $VGA = $_POST['VGA'];
        $Screen = $_POST['Screen'];
        $danhmuc = $_POST['selectdanhmuc'];
        $nhanhieu =$_POST['selectnhanhieu'];
        $khuyenmai =$_POST['selectkhuyenmai'];
        $description = $_POST['description'];


        $sql_themsp = "INSERT INTO product
        (nameProduct, Price, SoLuong, Image, CPU, RAM, Disk, VGA, Screen, IDDanhMuc ,IDBrand ,IDKhuyenMai ,Description)
         VALUES ('$name_product', '$price',$soluong ,'$image', '$CPU', '$RAM', '$Storage', '$VGA', '$Screen', $danhmuc, $nhanhieu, $khuyenmai, '$description');";
         mysqli_query($myconnect,$sql_themsp);

         echo $sql_themsp;
        header('location:../../index.php?action=quanlysanpham&query=hienthi');

    }
    

    else if(isset($_POST['submitsuasanpham'])){

        $id = $_GET['idproduct'];
        $file_path = basename($_FILES['imagesp']['name']);
 
        // file upload.php xử lý upload file
        $target_dir = "../../image/";
        $target_file = $target_dir . $file_path;
    
        //upload
        move_uploaded_file($_FILES["imagesp"]["tmp_name"], $target_file);

        $name_product = $_POST['nameProduct'];
        $price = $_POST['price'];
        $soluong = $_POST['soluong'];
        $image = 'image/'.$file_path;
        $CPU = $_POST['CPU'];
        $RAM = $_POST['RAM'];
        $Storage = $_POST['Storage'];
        $VGA = $_POST['VGA'];
        $Screen = $_POST['Screen'];
        $danhmuc = $_POST['selectdanhmuc'];
        $nhanhieu =$_POST['selectnhanhieu'];
        $khuyenmaitemp =$_POST['selectkhuyenmai'];
        $description = $_POST['description'];


        $sql_themsp = "UPDATE product
        SET nameProduct = '$name_product', Price = '$price', SoLuong = $soluong , Image='$image', 
        CPU = '$CPU', RAM='$RAM', Disk = '$Storage', VGA = '$VGA', Screen= '$Screen', IDDanhMuc = $danhmuc,IDBrand= $nhanhieu, 
        IDKhuyenMai=$khuyenmai, Description='$description' WHERE idproduct = '$id';";
         mysqli_query($myconnect,$sql_themsp);

         echo $sql_themsp;
        header('location:../../index.php?action=quanlysanpham&query=hienthi');

    }

    else{
        $id = $_GET['idsanpham'];
        $sql_deletesanpham = "DELETE FROM product WHERE idProduct = $id";
        mysqli_query($myconnect, $sql_deletesanpham);
        header('location:../../index.php?action=quanlysanpham&query=hienthi');
    }
?>
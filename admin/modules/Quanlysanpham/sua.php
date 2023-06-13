<h3>Sửa sản phẩm</h3>


<?php
$idproduct = $_GET['idsanpham'];
$sql_hienthisanpham = "Select NameProduct,  Price,  SoLuong, product.Image,CPU, RAM, Disk, VGA, Screen, Tendanhmuc, NameProduct,  Description 
    From product LEFT JOIN brands ON product.IDbrand = brands.IDbrand LEFT JOIN danhmuc ON product.iddanhmuc = danhmuc.iddanhmuc
    WHERE IDProduct='$idproduct'";
$stm_hienthisanpham = mysqli_query($myconnect, $sql_hienthisanpham);
?>
<?php

$sql_hienthidanhmuc = "Select * From DanhMuc";
$stm_hienthidanhmuc = mysqli_query($myconnect, $sql_hienthidanhmuc);
?>
<?php
    
    $sql_hienthibrands = "Select * From brands";
    $stm_hienthibrands = mysqli_query($myconnect,$sql_hienthibrands);
?>
<?php

$sql_hienthikhuyenmai = "Select * From khuyenmai";
$stm_hienthikhuyenmai = mysqli_query($myconnect, $sql_hienthikhuyenmai);
?>


<table border ='1'>
    <form method="POST" enctype="multipart/form-data"  action="modules/quanlysanpham/xuly.php?idproduct=<?php echo $idproduct ?>">
        <?php
            $row = mysqli_fetch_array($stm_hienthisanpham)
        ?>
        <tr>
            <td>Tên sản phẩm: <input type="text" name="nameProduct" value=<?php echo $row[0]; ?>></td>
        </tr>
        <tr>
            <td>Giá: <input type="number" name="price" value=<?php echo $row[1]; ?>></td>
        </tr>
        <tr>
            <td>Số lượng: <input type="number" name="soluong" value=<?php echo $row[2]; ?>></td>
        </tr>
        <tr>
            
            <td>Upload ảnh:<input type="file" name="imagesp" value=<?php echo $row[3]; ?>></td>
        </tr>
        <tr>
            <td>CPU:<input type="text" name="CPU" value=<?php echo $row[4]; ?>></td>
        </tr>
        <tr>
            <td>RAM: <input type="text" name="RAM" value=<?php echo $row[5]; ?>></td>
        </tr>
        <tr>
            <td>Dung lượng ổ cứng:<input type="text" name="Storage" value=<?php echo $row[6]; ?>></td>
        </tr>
        <tr>
            <td>VGA: <input type="text" name="VGA" value=<?php echo $row[7]; ?>></td>
        </tr>
        <tr>
            <td>Màn hình: <input type="text" name="Screen" value=<?php echo $row[8]; ?>></td>
        </tr>
        <tr>
            <td>danh muc: <select name="selectdanhmuc" id="">
                <?php 
                    while($row = mysqli_fetch_array($stm_hienthidanhmuc)){
                ?>
                    <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>

                <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td>Nhãn hiệu: <select name="selectnhanhieu" id="">
                <?php 
                    while($row1 = mysqli_fetch_array($stm_hienthibrands)){
                ?>
                    <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>

                <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td>Khuyến mại: <select name="selectkhuyenmai" id="">
                <?php 
                    while($row2 = mysqli_fetch_array($stm_hienthikhuyenmai)){
                ?>
                    <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>

                <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td>Mô tả sản phẩm: <input type="text" name="description"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submitsuasanpham" value="Sửa" id=""></td>
        </tr>
    </form>
</table>
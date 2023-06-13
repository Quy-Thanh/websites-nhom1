<h3>Sửa danh muc sản phẩm</h3>

<?php
    $iddanhmuc = $_GET['iddanhmuc'];
    $sql_hienthidanhmuc = "Select * From DanhMuc where iDdanhmuc  = $iddanhmuc LIMIT 1";
    $stm_hienthidanhmuc = mysqli_query($myconnect,$sql_hienthidanhmuc);
?>
<table border ='1'>
    <form method="POST" action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'];?>">
        <?php
            while($row = mysqli_fetch_array($stm_hienthidanhmuc)){
        ?>
        <tr>
            <td>Tên danh mục<input type="text" name="tendanhmuc"value=<?php echo $row[1];?> ></td>
        </tr>

        <tr>
            <td><input type="submit" name="submitsuadanhmuc" value="cập nhật" id=""></td>
        </tr>
        <?php } ?>
    </form>
</table>
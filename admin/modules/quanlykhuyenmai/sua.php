<h3>Sửa khuyến mại</h3>

<?php
    $idkhuyenmai = $_GET['idkhuyenmai'];
    $sql_hienthikhuyenmai = "Select * From khuyenmai where idkhuyenmai  = $idkhuyenmai    LIMIT 1";
    $stm_hienthikhuyenmai = mysqli_query($myconnect,$sql_hienthikhuyenmai);
    
?>
<table border ='1'>
    <form method="POST" action="modules/quanlykhuyenmai/xuly.php?idkhuyenmai=<?php echo $idkhuyenmai; ?>">
        <?php
            while($row = mysqli_fetch_array($stm_hienthikhuyenmai)){
               
        ?>
        <tr>
            <td>Tên khuyến mại: <input type="text" name="tenkhuyenmai" value= <?php echo $row[1]?>></td>
        </tr>
        <tr>
            <td>Giảm giá(%): <input type="text" name="giamgia" value= <?php echo $row[2]?>></td>
        </tr>
        <tr>
            <td>Ngày bắt đầu: <input type="date" name="ngaybatdau" value= <?php echo $row[3]?>></td>
        </tr>
        <tr>
            <td>Ngày kết thúc:  <input type="date" name="ngayketthuc" value= <?php echo $row[4]?>></td>
        </tr>
        <tr>
            <td><input type="submit" name="submitsuakhuyenmai" value="sửa" id=""></td>
        </tr>
        <?php }?>
    </form>
</table>
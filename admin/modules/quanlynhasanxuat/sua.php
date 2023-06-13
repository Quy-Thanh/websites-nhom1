<?php
    $idbrand = $_GET['idbrand'];
    $sql_hienthibrands = "Select * From brands where IDBrand = $idbrand LIMIT 1";
    $stm_hienthibrands = mysqli_query($myconnect,$sql_hienthibrands);
?>

<h3>sửa nhà sản xuất</h3>
<table border ='1'>
    <form method="POST" enctype="multipart/form-data" action="modules/quanlynhasanxuat/xuly.php?idbrand=<?php echo $_GET['idbrand'];?>">
        <?php
            while($row = mysqli_fetch_array($stm_hienthibrands)){
        ?>
        <tr>
            <td>Tên nhà sản xuất<input type="text" name="tennhasanxuat"value=<?php echo $row[1];?> ></td>
        </tr>
        <tr>
            <td>
                <div>Up load ảnh:</div>
                <input type="file" name= "brandImg" id="brandImg">
            </td>
            
        </tr>
        <tr>
            <td><input type="submit" name="submitupdate" value="cập nhật" id=""></td>
        </tr>
        <?php } ?>
    </form>
</table>
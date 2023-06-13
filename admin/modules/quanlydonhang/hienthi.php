<?php

$sql_hienthidonhang = "Select * From orders";
$stm_hienthidonhang = mysqli_query($myconnect, $sql_hienthidonhang);
?>



<table border ='1'>
    <thead>
        <th>Tên Người Nhận</th>
        <th>Địa chỉ</th>
        <th>SĐT</th>
        <th>Tình Trạng</th>
        <Th>Thực Hiện</Th>
    </thead>

    <TBody>
        <?php 
            while($row = mysqli_fetch_array($stm_hienthidonhang)){
        ?>
        <form method="POST" action="modules/quanlydonhang/xuly.php?iddonhang=<?php echo $row[0] ?>">
        <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td>
                <div><input type="submit" name="submitdonhang" value="Chấp nhận"></div>
                        <a href="modules/quanlydonhang/xuly.php?iddonhang=<?php echo $row[0] ?>">Xóa</a>
            </td>
        </tr>
        </form>
        <?php } ?>
    </TBody>

</table>


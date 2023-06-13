<?php

$sql_hienthidanhmuc = "Select * From DanhMuc";
$stm_hienthidanhmuc = mysqli_query($myconnect, $sql_hienthidanhmuc);
?>

<div class="content">
    <div style="display: flex; border: 1px;">
        <div style="width: 75%;">
            <h2>Thông tin danh mục</h2>
        </div>
        <div style="display: flex; width: 25%; justify-content: end;">
            <p>
                <button style="border: none; padding: 10px 50px;" class="btn_add">
                    <a href="?action=quanlydanhmuc&query=themdanhmuc">thêm</a>
                </button>
            </p>
        </div>
    </div>
    <div class="table_content">
        <table id="customers">
            <thead>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Thực hiện</th>
            </thead>

            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_row($stm_hienthidanhmuc)) {
                    $i++;
                    ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php echo $row[1]; ?>
                        </td>
                        <td style="text-align: center;">
                            <a href="?action=quanlydanhmuc&query=suadanhmuc&iddanhmuc=<?php echo $row[0] ?>">Sửa</a>|
                            <a href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row[0] ?>">Xóa</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
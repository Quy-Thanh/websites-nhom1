<?php

$sql_hienthikhuyenmai = "Select * From khuyenmai";
$stm_hienthikhuyenmai = mysqli_query($myconnect, $sql_hienthikhuyenmai);
?>

<div class="content">
    <div style="display: flex; border: 1px;">
        <div style="width: 75%;">
            <h2>Thông tin khuyến mại</h2>
        </div>
        <div style="display: flex; width: 25%; justify-content: end;">
            <p>
                <button style="border: none; padding: 10px 50px;" class="btn_add">
                    <a href="?action=quanlykhuyenmai&query=themkhuyenmai">thêm</a>
                </button>
            </p>
        </div>
    </div>
    <div class="table_content">
        <table id="customers">
            <thead>
                <th>STT</th>
                <th>Tên khuyến mại</th>
                <th>giảm giá(%)</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Thực hiện</th>
            </thead>

            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($stm_hienthikhuyenmai)) {
                    $i++;
                    ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php echo $row[1]; ?>
                        </td>
                        <td>
                            <?php echo $row[2]; ?>
                        </td>
                        <td>
                            <?php echo $row[3]; ?>
                        </td>
                        <td>
                            <?php echo $row[4]; ?>
                        </td>
                        <td style="text-align: center;">
                            <a href="?action=quanlykhuyenmai&query=suakhuyenmai&idkhuyenmai=<?php echo $row[0] ?>">Sửa</a>|
                            <a href="modules/quanlykhuyenmai/xuly.php?idkhuyenmai=<?php echo $row[0] ?>">Xóa</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
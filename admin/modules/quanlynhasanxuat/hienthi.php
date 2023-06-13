<?php

$sql_hienthibrands = "Select * From brands";
$stm_hienthibrands = mysqli_query($myconnect, $sql_hienthibrands);
?>

<div class="content">
    <div style="display: flex;">
        <div style="width: 75%;">
            <h2>Thông tin danh mục</h2>
        </div>
        <div style="display: flex; width: 25%; justify-content: end;">
            <p>
                <button style="border: none; padding: 10px 50px;" class="btn_add">
                    <a href="?action=quanlynhasanxuat&query=themnhasanxuat">thêm</a>
                </button>
            </p>
        </div>
    </div>
    <div class="table_content">
        <table id="customers">
            <thead>
                <th>STT</th>
                <th>Tên nhãn hiệu</th>
                <th>Ảnh</th>
                <th>Thực hiện</th>
            </thead>

            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_row($stm_hienthibrands)) {
                    $i++;
                    ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php echo $row[1]; ?>
                        </td>
                        <td><img src="<?php echo $row[2]; ?>" alt="khong tim thay anh" width="100" height="100">
                        </td>
                        <td style="text-align: center;">
                            <a href="?action=quanlynhasanxuat&query=suanhasanxuat&idbrand=<?php echo $row[0] ?>">Sửa</a>|
                            <a href="modules/quanlynhasanxuat/xuly.php?idbrand=<?php echo $row[0] ?>">Xóa</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
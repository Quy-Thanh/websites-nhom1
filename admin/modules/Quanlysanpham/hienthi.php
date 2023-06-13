<?php

$sql_hienthisanpham = "Select IDProduct, Name, Tendanhmuc, NameProduct, Price, SoLuong, product.Image, Description 
    From product LEFT JOIN brands ON product.IDbrand = brands.IDbrand LEFT JOIN danhmuc ON product.iddanhmuc = danhmuc.iddanhmuc";
$stm_hienthisanpham = mysqli_query($myconnect, $sql_hienthisanpham);
?>

<?php
?>
<div class="content">
    <div style="display: flex;">
        <div style="width: 75%;">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div style="display: flex; width: 25%; justify-content: end;">
            <p>
                <button style="border: none; padding: 10px 50px;" class="btn_add">
                    <a style="text-decoration: none;" href="?action=quanlysanpham&query=themsanpham">thêm</a>
                </button>
            </p>
        </div>
    </div>
    <div class="table_content">
        <table id="customers">
            <thead>
                <th>STT</th>
                <th>Nhà sản xuất</th>
                <th>danh mục</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Mô tả sản phẩm</th>
                <th>thực hiện</th>
            </thead>

            <tbody>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($stm_hienthisanpham)) {
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
                        <td>
                            <?php echo $row[5]; ?>
                        </td>
                        <td><img src="<?php echo $row[6]; ?>" alt="hinh anh"></td>
                        <td>
                            <?php echo $row[7]; ?>
                        </td>


                        <td style="text-align: center;">
                            <a href="?action=quanlysanpham&query=suasanpham&idsanpham=<?php echo $row[0] ?>">Sửa</a>|
                            <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row[0] ?>">Xóa</a>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</div>
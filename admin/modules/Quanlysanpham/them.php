<div class="them">
    <h3>Thêm sản phẩm</h3>
    <div class="them1">
        <?php

        $sql_hienthidanhmuc = "Select * From DanhMuc";
        $stm_hienthidanhmuc = mysqli_query($myconnect, $sql_hienthidanhmuc);
        ?>
        <?php

        $sql_hienthibrands = "Select * From brands";
        $stm_hienthibrands = mysqli_query($myconnect, $sql_hienthibrands);
        ?>
        <?php

        $sql_hienthikhuyenmai = "Select * From khuyenmai";
        $stm_hienthikhuyenmai = mysqli_query($myconnect, $sql_hienthikhuyenmai);
        ?>


        <div class="form_iii">
            <form method="POST" enctype="multipart/form-data" action="modules/quanlysanpham/xuly.php">


                <label>Tên sản phẩm:</label>
                <input type="text" name="nameProduct">


                <label>Giá:</label>
                <input type="number" name="price">


                <label>Số lượng:</label>
                <input type="number" name="soluong">



                <label>Upload ảnh:</label>
                <input type="file" name="imagesp">


                <label>CPU:</label>
                <input type="text" name="CPU">


                <label>RAM:</label>
                <input type="text" name="RAM">


                <label>Dung lượng ổ cứng:</label>
                <input type="text" name="Storage">


                <label>VGA:</label>
                <input type="text" name="VGA">


                <label>Màn hình:</label>
                <input type="text" name="Screen">


                <label>danh muc: <select name="selectdanhmuc
                " id="">
                        <?php
                        while ($row = mysqli_fetch_array($stm_hienthidanhmuc)) {
                            ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>

                        <?php } ?>
                    </select></label>


                <label>Nhãn hiệu: <select name="selectnhanhieu
                " id="">
                        <?php
                        while ($row1 = mysqli_fetch_array($stm_hienthibrands)) {
                            ?>
                            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>

                        <?php } ?>
                    </select></label>


                <label>Khuyến mại: <select name="selectkhuyenmai
                " id="">
                        <?php
                        while ($row2 = mysqli_fetch_array($stm_hienthikhuyenmai)) {
                            ?>
                            <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>

                        <?php } ?>
                    </select></label>


                <label>Mô tả sản phẩm:</label>
                <input type="text" name="description">


                <label></label>
                <input type="submit" name="submitthemsanpham" value="thêm" id="">

            </form>
        </div>
    </div>
</div>
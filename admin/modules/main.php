<div style="width: 100%; position: relative">
    <?php
    include("modules/dashboard.php");
    ?>

    <div class="main_content">
        <div class="tab_content">
            <?php
            if (isset($_GET['action']) && isset($_GET['query'])) {
                $temp = $_GET['action'];
                $query = $_GET['query'];
            } else {
                $temp = '';
                $quey = '';
            }


            //quan ly san pham
            if ($temp == 'quanlysanpham' && $query == 'hienthi') {
                include("modules/QuanLysanpham/hienthi.php");
            } else if ($temp == 'quanlysanpham' && $query == 'themsanpham') {
                include("modules/quanlysanpham/them.php");
            } else if ($temp == 'quanlysanpham' && $query == 'suasanpham') {
                include("modules/quanlysanpham/sua.php");
            }

            //quan ly danh muc
            if ($temp == 'quanlydanhmuc' && $query == 'hienthi') {
                include("modules/Quanlydanhmuc/hienthi.php");
            } else if ($temp == 'quanlydanhmuc' && $query == 'themdanhmuc') {
                include("modules/Quanlydanhmuc/them.php");
            } else if ($temp == 'quanlydanhmuc' && $query == 'suadanhmuc') {
                include('modules/Quanlydanhmuc/sua.php');
            }

            //quan ly nha san xuat
            if ($temp == 'quanlynhasanxuat' && $query == 'hienthi') {
                include("modules/Quanlynhasanxuat/hienthi.php");
            } else if ($temp == 'quanlynhasanxuat' && $query == 'themnhasanxuat') {
                include("modules/Quanlynhasanxuat/them.php");
            } else if ($temp == 'quanlynhasanxuat' && $query == 'suanhasanxuat') {
                include("modules/Quanlynhasanxuat/sua.php");
            }


            //quan ly khuyen mai
            if ($temp == 'quanlykhuyenmai' && $query == 'hienthi') {
                include("modules/quanlykhuyenmai/hienthi.php");
            } else if ($temp == 'quanlykhuyenmai' && $query == 'themkhuyenmai') {
                include("modules/quanlykhuyenmai/them.php");
            } else if ($temp == 'quanlykhuyenmai' && $query == 'suakhuyenmai') {
                include("modules/quanlykhuyenmai/sua.php");
            }



                //quanly don hang
            if ($temp == 'quanlydonhang' && $query == 'hienthi') {
                include("modules/quanlydonhang/hienthi.php");
            }
                    ?>
            



        </div>
    </div>

</div>
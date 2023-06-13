<div style="text-align: center; color: #2aaef6; font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <h3>Laptop Hoang Nguyen</h3>
</div>

<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header('location:login.php');
    };
?>


<div style="text-align: center;">
    <h3>SHOP N1</h3>

    <div>
    <div class="logout">
            <li><a href="index.php?dangxuat=1">Đăng xuất: <?php if(isset($_SESSION['dangnhap'])) echo $_SESSION['dangnhap'];?></a></li>
        </div>
    </div>
</div>
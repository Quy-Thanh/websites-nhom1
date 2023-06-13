<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập admin</title>
    <style type="text/css">
        body{
            background: #f2f2f2;
        }

        .wrapper-login{
            width: 15%;
            margin: 0 auto;
        }

        table.table-login{
            width: 100%;
        }

        table.table-login tr td{
            padding: 5px;
        }

    </style>
</head>

<?php
    session_start();
    include("configadmin/config.php");

    if(isset($_POST['dangnhap'])){
        $username = $_POST['username'];
        echo"$username";
        $password = $_POST['password'];
        $sql = "SELECT * FROM taikhoan WHERE user ='$username' AND password ='$password' AND IDrole =1";

        $stm = mysqli_query($myconnect,$sql);
        $count = mysqli_num_rows($stm);

        if($count >0){
            $_SESSION['dangnhap'] = $username;
            header("Location:index.php");
        }else{
            echo '<script>aleart("Tai khoan hoac mat khau khong dung!")</script>';
            header("Location:login.php");
        }
    }
?>
<body>
    <div class="wrapper-login">

    <form action="" method="POST">
     <table class="table-login" border ='1' style="text-align: center; border-collapse: collapse;">
            <tr>
                <td colspan="2">ĐĂNG NHẬP ADMIN</td>
            </tr>
            <tr>
                <td>Tai khoản: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name = "password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
        </table>

    </form>
        
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/admin_style.css">
    <title>Laptop</title>


</head>


<?php
    session_start();
    // if(!isset($_SESSION['dangnhap'])){
    //     header("Location:login.php");
    // }
?>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    .btn_add {
        background-color: #323a47;
        border-radius: 5px;

    }

    .btn_add a {
        color: #fff;
        text-decoration: none;
    }

    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        color: #8490a8;
        border-radius: 5px;
    }

    .content {
        margin: 0 100px;
        padding: 60px 200px;
    }

    .main_content {
        background-color: #f4f6f8;
        width: 100%;
    }


    .table_content {
        background-color: #fff;
        box-shadow: 0 2px 4px hsla(0, 0%, 66%, .25);
        padding: 20px;
        padding-top: 50px 20px;
        width: 940px;
        margin-bottom: 100px;
    }

    .left_bar {
        position: fixed;
        bottom: 0;
        box-sizing: border-box;
        z-index: 1050;
        top: 0;
        width: 20rem;
    }

    .content_right {
        margin: 0;
    }

    .top_bar {
        background: #fff;
        box-shadow: 0 2px 4px hsla(0, 0%, 66%, .25);
        height: 50px;
        position: fixed;
        z-index: 1049;
        width: 100%;
    }

    #customers thead {
        font-size: 15px;
        color: #000;
        font-weight: 500;

    }

    #customers td,
    #customers th {
        border-bottom: #b7c1d5 solid 1px;
        padding: 8px;
    }

    #customers tbody tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
    }

    .them {
        padding: 50px 0;
        width: 100%;
    }

    .them1 {
        display: flex;
        width: 1600px;
        justify-content: center;
    }

    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #323a47;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form_iii {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 50px 200px 0;
    }
</style>


<body style="padding: 0; margin: 0;">
    <div style="display: flex; float: left;">
        <div style="background-color: #323a47;" class="left_bar">
            <?php
            include("modules/header.php");
            include("modules/menu.php");
            ?>
        </div>
        <div style="display: flex; padding-left: 20rem;" class="content_right">
            <?php
            include("configadmin/config.php");
            include("modules/main.php");
            ?>
        </div>
    </div>
</body>

</html>
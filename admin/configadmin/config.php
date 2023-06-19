<?php
    $myconnect = new mysqli("localhost", "root", "12345678","websites-nhom1");

    if($myconnect -> connect_errno){

        echo "ket noi database Loi:" .$myconnect ->connect_error;
        exit();
    }
?>
<?php
    $myconnect = new mysqli("localhost", "root", "","shoplaptopn1");

    if($myconnect -> connect_errno){

        echo "ket noi database Loi:" .$myconnect ->connect_error;
        exit();
    }
?>
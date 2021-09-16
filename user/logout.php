<?php


    //开启session
    session_start();
    //撤销session
    session_unset();
    session_destroy();
    //跳转到login.php
    header("refresh:3;url=/");
?>
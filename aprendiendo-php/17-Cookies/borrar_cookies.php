<?php

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
}

if($_COOKIE['unyear']){
    unset($_COOKIE['unyear']);
    setcookie('unyear','',time()-100);
}

header('location:ver_cookies.php');
?>
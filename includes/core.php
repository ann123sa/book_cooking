<?php
session_start();
$link = new mysqli('localhost', 'root', '', 'book');
function redirect($url = false)
{
    if($url){
        header("Location: " . $url);
    }else{
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
?>
<?php
ob_start();
session_start();

if(isset($_SESSION['mobi']))
{
    unset($_SESSION['mobi']);
    header("Location: index.html");
}
?>
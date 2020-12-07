<?php
session_start();
$_SESSION[$_POST[t_productID]] = $_POST[valText];
?>
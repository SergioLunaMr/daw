<?php
/*
author: Sergio Luna Martín
date: 20/10/2023
*/
session_start();
session_unset();
session_destroy();
header("Location: index.php");
?>

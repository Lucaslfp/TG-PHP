<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=museu", "root", "");
if ($pdo) 
    echo "<script>console.log('conectou');</script>";
else 
    echo "<script>console.log('falha');</script>";
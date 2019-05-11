<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=museu", "root", "");
}
catch (PDOException $e) {
    echo "ERRO: " . $e;
}
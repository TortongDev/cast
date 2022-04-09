<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=cast;",'root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
        echo "Connection is false :" .$err.getMessage();
    }
?>
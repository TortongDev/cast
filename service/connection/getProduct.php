<?php

require_once "index.php";

$arrd = array(
    'status'=>1
);
try {
    $stmt   = $conn->prepare("select * from products where status=:status");
    $stmt->execute($arrd);

    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dd = array(
        'res' => $result
    );
    echo json_encode($dd);

} catch (PDOException $err) {
    echo "error : ".$err.getMessage();
}
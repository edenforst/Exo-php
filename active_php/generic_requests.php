<?php
include_once('./db.php');

function queryAll($db, $tableName){
    $sql = "SELECT * FROM $tableName";
    $request = $db->prepare($sql);
    // $request->bindValue(':tableName', $tableName);
    $request->execute();
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


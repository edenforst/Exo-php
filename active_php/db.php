<?php
/**
 *  get DB, returns a PDO object
 */
function getDb(){


    try {
        $db = new PDO("mysql:host=" . HOST . ";port=" . PORT . ";dbname=" . DBNAME, DBUSER, DBPASSWORD);
    } catch (PDOException $e) {
        print($e->getMessage());
    }
    

    return $db;
}
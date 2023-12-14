<?php

require('./db.php');
require_once('./generic_requests.php');
require_once('./constants.php');

$db = getDb();



if (!function_exists('queryAllActivite')) {
    function queryAllActivite(){
        global $db;
        $result = queryAll($db, ACTIVITE_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllClient')) {
    function queryAllClient(){
        global $db;
        $result = queryAll($db, CLIENT_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllCollaborateur')) {
    function queryAllCollaborateur(){
        global $db;
        $result = queryAll($db, COLLABORATEUR_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllContact')) {
    function queryAllContact(){
        global $db;
        $result = queryAll($db, CONTACT_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllContrat')) {
    function queryAllContrat(){
        global $db;
        $result = queryAll($db, CONTRAT_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllDocument')) {
    function queryAlldocument(){
        global $db;
        $result = queryAll($db, DOCUMENT_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllEtape')) {
    function queryAllEtape(){
        global $db;
        $result = queryAll($db, ETAPE_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllFonction')) {
    function queryAllFonction(){
        global $db;
        $result = queryAll($db, FONCTION_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllIntervention')) {
    function queryAllIntervention(){
        global $db;
        $result = queryAll($db, INTERVENTION_TABLE_NAME);
        return $result;
    }
}

if (!function_exists('queryAllProjet')) {
    function queryAllProjet(){
        global $db;
        $result = queryAll($db, PROJET_TABLE_NAME);
        return $result;
    }
}

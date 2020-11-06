<?php
const servername = "proj-mysql.uopnet.plymouth.ac.uk";
CONST username = "COMP2001_JChurchill";
CONST password = "VmrR185+";
CONST database = "COMP2001_JChurchill";

function getConnection(){
    $dataSourceName = 'mysql:dbname='.database.';host='.servername;
    $dbConnection = null;
    try {
        $dbConnection = new PDO($dataSourceName, username, password);
    } catch (PDOException $err){
        echo 'Connection failed: ',$err->getMessage();
    }
    return$dbConnection;
}

function getAll($tablename){
    $statement = getConnection()->prepare("SELECT * FROM ".$tablename);
    $statement->execute();
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $resultSet;
}

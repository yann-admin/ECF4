<?php
    const DBHOST = 'db';
    const DBUSER = 'user';
    const DBPASS = 'password';
    const DBNAME = 'cefiidev1500';
    //const DBSERVER = 'localhost';

    
    try{
        $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME ;
        $db = new PDO($dsn, DBUSER, DBPASS);


        $sql = "CREATE TABLE IF NOT EXISTS creation (
        id_creation INT (4) UNSIGNED AUTO_INCREMENT PRIMARY key,
        title TEXT (150) NOT NULL,
        description TEXT (150) NOT NULL,
        created_at TEXT (150) NOT NULL,
        picture TEXT (150) )";

        //echo $db;
        //echo $sql;    

        $db->exec($sql);

    }catch (PDOException $e){
        echo " $e . erreur";
    }
?>
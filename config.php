<!-- This snippet was made by Glori4n(https://glori4n.com) as an exercise -->

<?php

    $dsn = "mysql:dbname=custom;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

    } catch(PDOException $e) {
        echo "Failed: ".$e->getMessage();
    }

?>
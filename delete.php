<!-- This snippet was made by Glori4n(https://glori4n.com) as an exercise -->

<?php
session_start();

if(isset($_SESSION["id"]) && !empty($_SESSION["id"])){

    require 'config.php';

    if(isset($_GET["id"])){

        $id = addslashes($_GET["id"]);
        $sql = "DELETE FROM users WHERE id = '$id'";
        $pdo->query($sql);

        header('Location: list.php');

    }else{
    header('Location: index.php');
    }

}else{
    header("Location: login.php");
}

?>
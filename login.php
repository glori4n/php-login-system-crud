<!-- This snippet was made by Glori4n(https://glori4n.com) as an exercise -->

<?php 
session_start();

if(!isset($_SESSION["id"]) && empty($_SESSION["id"])){
    
    if(isset($_POST["submit"])){
        

        $email = addslashes($_POST["email"]);
        $password = md5(addslashes($_POST["password"]));   
        
        require 'config.php';

        $sql = $pdo->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
        
        if($sql->rowCount() > 0){
    
            $data = $sql->fetch();
            $_SESSION["id"] = $data["id"];
            header("Location: index.php");

        }else{
            echo "Incorrect password, please try again.";
        }
    }

?>

    <h2>Please login before you can access the system:</h2>

    <form method="POST">
        <label>E-mail:</label>
        <input type="email" name="email">
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>

<?php

}else{
    echo "<h1> You are already logged in.</h1>";
    echo "<a href='logout.php'>Click here to log out</a>";
    header("Refresh:3; url=list.php");
}

?>
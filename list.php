<!-- This snippet was made by Glori4n(https://glori4n.com) as an exercise -->

<?php
session_start();

echo "<div style='text-align:center'><a href='logout.php'>Logout</a></div>";

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    require 'config.php';
    $sql = "SELECT * FROM users";
    $sql = $pdo->query($sql);
    
?>

<table width="100%">
    <tr>
    <th>Name</th>
    <th>E-mail</th>
    <th>Actions</th>
    </tr>
    <?php
    if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $user){
        echo "<tr>";
        echo "<td style='text-align:center'>".$user["name"]."</td>";
        echo "<td style='text-align:center'>".$user["email"]."</td>";
        echo '<td style="text-align:center"><a href="edit.php?id='.$user["id"].'">Edit</a> - <a href="delete.php?id='.$user["id"].'">Delete</a>';
        echo "</tr>";
    }
    }else{
    echo "There are no registered users.";
    }
?>
</table>
<br>
<h2 style="text-align:center"><a href="add.php">Add new user</a></h2>

<?php

}else{
    header("Location: login.php");
}

?>
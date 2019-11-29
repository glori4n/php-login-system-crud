<!-- This snippet was made by Glori4n(https://glori4n.com) as an exercise -->

<?php
session_start();

$_SESSION["id"] = null;
echo "<h1> You were logged out.</h1>";
header("Refresh:2; url=index.php");
?>
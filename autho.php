<?php

$ps = $_POST['psky'];

if($ps == "qwerty")
{
 header("Location: home.php");	
}
else
{
 header("Location: authx.php");
}
?>

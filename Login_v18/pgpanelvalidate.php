<?php

if(isset($_POST['pgrec']))
{
header("Location:/Partner Recommender/Login_v18/pgshow.php");
}
else if(isset($_POST['pgrev']))
{
header("Location:/Partner Recommender/pgreviewshow.php");
}
else if(isset($_POST['pgroom']))
{
header("Location:/Partner Recommender/registerroom.php");
}
?>
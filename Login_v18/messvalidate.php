<?php

if(isset($_POST['rev']))
{

 header("Location:/Partner Recommender/messtable.php");
}
else if(isset($_POST['rec']))

 header("Location:/Partner Recommender/Login_v18/foodtable.php");
else if(isset($_POST['reg']))

 header("Location:/Partner Recommender/registerfood.php");
?>
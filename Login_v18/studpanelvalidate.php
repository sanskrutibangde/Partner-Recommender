<?php
if(isset($_POST['pgroom']))
{
header("Location:/Partner Recommender/Login_v18/pgshow.php");
}
if(isset($_POST['mess']))
{
header("Location:/Partner Recommender/Login_v18/messshow.php");
}
if(isset($_POST['partnerrecommend']))
{
 header("Location:/Partner Recommender/form.php");
}
if(isset($_POST['reviews']))
{
header("Location:/Partner Recommender/Login_v18/reviewpanel.html");
}
?>
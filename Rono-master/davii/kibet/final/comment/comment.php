<?php
include("db.php");
if(isset($_POST['submit']))
{
	$name=$_POST['namename'];
	$client=$_POST['client'];
	$message=$_POST['message'];
	$insert=mysql_query("insert into commenttable(name,client,message)values('$name','$client','$message')")or die(mysql_error());
	header("Location:index.php");
	}
?>
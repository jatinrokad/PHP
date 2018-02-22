<?php
	$con = @mysql_connect('localhost','root','') or die(mysql_error());
	$database = @mysql_select_db('simple-website') or die(mysql_error());
?>
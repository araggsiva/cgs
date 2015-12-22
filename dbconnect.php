<?php
if(!mysql_connect("mysql11.000webhost.com","a9779819_cgs","cgs123"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("a9779819_cgs"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>
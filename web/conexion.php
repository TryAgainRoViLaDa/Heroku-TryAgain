<?php

function conectar()
{
	$user="id16927528_tryagain_";
	$pass="zlpF{3Lgj}AB%$0)";
	$server="localhost";
	$db="id16927528_tryagain";
	$con=new mysqli($server, $user, $pass, $db) or die ("Error al conectar a la base de datos");

	return $con;
}

?>
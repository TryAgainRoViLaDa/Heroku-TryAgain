<?php

function conectar()
{
	//$user="id16927528_tryagain_";
	//$pass="zlpF{3Lgj}AB%$0)";
	//$server="localhost";
	//$db="id16927528_tryagain";
	$con=new mysqli("localhost", "id16927528_tryagain_", "zlpF{3Lgj}AB%$0)", "id16927528_tryagain") or die ("Error al conectar a la base de datos");

	return $con;
}

?>
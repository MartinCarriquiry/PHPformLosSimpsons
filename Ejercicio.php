<?php

	$pregunta1 = $_POST['PreguntaUno'];
	$pregunta2 = $_POST['PreguntaDos'];
	$pregunta3 = $_POST['PreguntaTres'];
	$pregunta4 = $_POST['PreguntaCuatro'];
	$pregunta5 = $_POST['PreguntaCinco'];

	$mensaje = "";

	$puntos = 0;

	if($pregunta1 == "v")
	{
		$puntos = $puntos + 3;
	}


	if($pregunta2 == "v")
	{
		$puntos = $puntos + 3;
	}


	if($pregunta3 == "f")
	{
		$puntos = $puntos + 3;
	}


	if($pregunta4 == "f")
	{
		$puntos = $puntos + 3;
	}


	if($pregunta5 == "f")
	{
		$puntos = $puntos + 3;
	}

	if(($puntos == 3) || ($puntos == 6))
	{
		$mensaje = "Te falta ver mas capitulos de los simpsons";
	}else if (($puntos == 9) || ($puntos == 12))
	{
		$mensaje = "Eres fanático de los Simpsons";
	}else if ($puntos == 15)
	{
		$mensaje = "Genial! Eres muy fanático de los Simpsons";
	}

	echo "Resultado: $puntos <br> $mensaje <br>";
	

?>
<?php
	if(isset($_POST["num"]))
	{
		$cad=str_split($_POST["num"]);
		for($i=0;$i<count($cad);$i++)
		{
			$car=$cad[$i];
			$a=ord($car);
			$c=$a-7;
			$b=chr($c);
			$cad[$i]=$b;
			$cadad=array_slice($cad,2,2);
		}
		foreach($cadad as $e)
			echo $e;
		echo'<br/><a href="opc.php">Regresar a inicio</a>';
		echo'<br/><a href="Hash1.html">Regresar</a>';
		setcookie("HSM","deonx34");
	}
	else
		echo'Primero ingresa una cadena';
?>

<?php
	$cadad=array();
	if(isset($_POST["num"]))
	{
		$cad=str_split($_POST["num"]);
		for($i=0;$i<count($cad);$i++)
		{
			$car=$cad[$i];
			$a=ord($car);
			$cadad[$i]=$a;
			if($i>0)
			{
				$b=$i-1;
				$cadad[$i]=($a+$cadad[$b]);
			}
		}
			echo $cadad[count($cad)-1];
			echo'<br/><a href="opc.php">Regresar a inicio</a>';
			echo'<br/><a href="Hash2.html">Regresar</a>';
			setcookie("HSM","deonx34");
	}
	else
		echo'Primero ingresa una cadena';
?>

<?php
	if(isset($_POST["num"]) && isset($_POST["lla"]))
	{
		$lla=$_POST["lla"];
		$cad=$_POST["num"];
		$n=strlen($lla);
		$m=strlen($cad);
		if(isset($_POST["check"]))
		{
			if($n==$m)
			{
				$cu=$_POST["num"];
				$cu1=substr($cad,0,$m-2);
				$cu2=substr($cad,$m-2);
				echo $cu2.$cu1;
			}
			if($n<$m)
			{
				$cu=substr($cad,0,$m-1);
				$cu2=substr($cad,$m-1);
				$cif=$cu2.$cu;
				echo $cif;
			}
			if($n>$m)
			{
				$cu1=substr($cad,2,$m-2);
				$cu2=substr($cad,0,2);
				$cif=$cu1.$cu2;
				echo $cif;
			}
		}
		else
		{
			if($n==$m)
			{
				$cu=$_POST["num"];
				$cu1=substr($cad,0,2);
				$cu2=substr($cad,2);
				echo $cu2.$cu1;
			}
			if($n<$m)
			{
				$cu=substr($cad,0,1);
				$cu2=substr($cad,1);
				$cif=$cu2.$cu;
				echo $cif;
			}
			if($n>$m)
			{
				$cu1=substr($cad,0,$m-2);
				$cu2=substr($cad,$m-2);
				$cif=$cu2.$cu1;
				echo $cif;
			}
		}
		echo'<br/><a href="opc.php">Regresar a inicio</a>';
		echo'<br/><a href="Cifra3.html">Regresar</a>';
		setcookie("HSM","deonx34");
	}
	else
		echo'Primero mete la cadena y la llave';
?>

<?php
	if(isset($_POST["num"]) && isset($_POST["lla"]))
	{
		if(isset($_POST["check"]))
		{
			$cu=$_POST["num"];
			$cu1=substr($cu,0,3);
			$cu2=substr($cu,3,3);
			$cu3=substr($cu,6,3);
			echo $cu2.$cu3.$cu1;
		}else{
			$lla=str_split($_POST["lla"]);
			$cad=str_split($_POST["num"]);
			$cif=array();
			$a=0;
			$n=count($lla);
			$m=count($cad);
			if($n==$m)
			{
				for($a=0;$a<$n;$a++)
				{
					$cif[$a]=$lla[$a]^$cad[$a];
					var_dump($cif[$a]);
				}
				foreach($cif as $b)
					echo $b;
				echo'<br/><a href="opc.php">Regresar a inicio</a>';
				echo'<br/><a href="Cifra2.html">Regresar</a>';
				setcookie("HSM","deonx34");
			}
			else
				echo'No son de la misma longitud';
		}
	}
	else
		echo'Primero mete la cadena y la llave';
?>

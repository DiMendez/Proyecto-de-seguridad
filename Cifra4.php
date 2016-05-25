<?php
	if(isset($_POST["num"]) && isset($_POST["lla"]))
		{
			$lla=$_POST["lla"];
			$cad=str_split($_POST["num"]);
			$priv='Dim';
			$n=strlen($lla);
			$m=count($cad);
			if(isset($_POST["check"]))
			{
				for($i=0;$i<$m;$i++)
				{
					$car=$cad[$i];
					$a=ord($car);
					$c=$a+($n-strlen($priv));
					$d=utf8_encode($c);
					$b=chr($d);
					$cad[$i]=$b;
				}
				foreach($cad as $e)
					echo $e;
			}
			else
			{
				for($i=0;$i<$m;$i++)
				{
					$car=$cad[$i];
					$a=ord($car);
					$c=$a-($n-strlen($priv));
					$b=chr($c);
					$cad[$i]=$b;
				}
				foreach($cad as $e)
					echo $e;
			}
			echo'<br/><a href="opc.php">Regresar a inicio</a>';
			echo'<br/><a href="Cifra4.html">Regresar</a>';
			setcookie("HSM","deonx34");
		}
		else
			echo'Primero mete la cadena y la llave';
?>

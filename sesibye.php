<?php
	if(isset($_COOKIE["HSM"]))
	{
		$lla='rupa';
		$cad=str_split($_COOKIE["HSM"]);
		$n=strlen($lla);
		$m=count($cad);
		for($i=0;$i<$m;$i++)
		{
			$car=$cad[$i];
			$a=ord($car);
			$c=$a+($n-3);
			$d=utf8_encode($c);
			$b=chr($d);
			$cad[$i]=$b;
		}
		if($cad[2]=='u'&&$cad[3]=='i'&&$cad[4]=='m')
		{
			session_abort();
			echo'Bye';
			echo'<a href="Seguridad.php">Inicio</a>';
		}
	}
?>

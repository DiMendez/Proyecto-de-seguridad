<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Seguridad</title>
	</head>
	<body>
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
				if($cad[2]=='u'&&$cad[3]=='v'&&$cad[4]=='a')
				{
					echo'	<form method="POST" action="sesi.php">
							Usuario:<input type="text" name="usuario"/><br/>
							Contraseña:<input type="password" name="contra"/>
							<input type="submit" value="Enviar"/>
						</form>';
					setcookie("HSM","", time() - 3600);
					setcookie("HSM","25onxjs");
				}
				else
					echo'Cuidado';
			}
			else
				echo'Cuidado';
		?>
	</body>
</html>




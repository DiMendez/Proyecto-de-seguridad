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
			include'usus.php';
			$ua=count($u);
			$x=0;
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
				if($cad[2]=='p'&&$cad[3]=='o'&&$cad[4]=='y')
				{
					$enlace=mysqli_connect("127.0.0.1","root","MOOKAD00","SEG");  //Aqui va tu contraseña Dany
					if(!$enlace)
					{
						echo 'No se pudo conectar';
						mysqli_connect_error();
					}
					else
					{
						if(isset($_POST["usuario"]))
						{
							$usua=htmlentities( $_POST["usuario"] );
							$usuario=mysqli_real_escape_string ($enlace , $usua );
							$usu=mysqli_query($enlace,"SELECT USU FROM USUARIOS WHERE USU='".$usua."';");
							if (!$usu)
							{
								if(isset($_POST["contra"]))
								{
									$contra=htmlentities( $_POST["contra"] );
									$contra=mysqli_real_escape_string ($enlace ,$contras);
								$cont=mysqli_query($enlace,"SELECT HSP FROM USUARIOS WHERE HSP='AS".$contra."SA'");
									if(!$cont)
									{
						$usu=mysqli_query($enlace,"INSERT INTO USUARIOS (USU,HSP) VALUES('".$usuario."','AS".$cont."SA'");
										echo'Listo, estás registrad@. Regresa al inicio y entra';
										echo'<br/><a href="Seguridad.php">Inicio</a>';
									}
									else
										echo'ah no';
								}
							}
							else
								echo'El usuario ya existe, elige otro';
						}
						mysqli_close($enlace);
					}
					setcookie("HSM","", time() - 3600);
					setcookie("HSM","45thldm");
				}
				else
					echo'Cuidado1';
			}
			else
				echo'Cuidado2';
		?>
	</body>
</html>

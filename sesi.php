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
							$usu=mysqli_query($enlace,"SELECT USU FROM USUARIOS WHERE USU='".$usuario."';");
							if ($usu)
							{
								if(isset($_POST["contra"]))
								{
									$contras=htmlentities($_POST["contra"]);
									$contra=mysqli_real_escape_string ($enlace ,$contras);
								$cont=mysql_query($enlace,"SELECT HSP FROM USUARIOS WHERE HSP='AS".$contra."SA'");
									if ($cont)
									{
										session_start();
										$_SESSION["Usu"]=$usu;
										echo'BIENVENIDO '.$_SESSION["Usu"].'<br/>';
										echo'<a href="Cifra.html">Práctica 1 de cifra</a><br/>';
										echo'<a href="Cifra2.html">Práctica 2 de cifra</a><br/>';
										echo'<a href="Cifra3.html">Práctica 3 de cifra</a><br/>';
										echo'<a href="Cifra4.html">Práctica 4 de cifra</a><br/>';
										echo'<a href="Hash1.html">Práctica 1 de Hash</a><br/>';
										echo'<a href="Hash2.html">Práctica 2 de Hash</a><br/>';
										echo'<a href="Iso.html">Práctica de ISBN</a><br/>';
										echo'<a href="visa.html">Verificación de VISA</a><br/>';
										echo'<a href="curp.html">Verificación de CURP</a>';
										echo'<br/><a href="sesibye.php">Cerrar sesión</a>';
									}
									else
										echo'Consulta no válida';
								}
								else
									echo'No me engañes';
							}
							else
								echo'Consulta no válida 1';
														
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

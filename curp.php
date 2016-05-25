<?php
	if(isset($_POST["nom"]))
	{
		$a=4;
		$b=0;
		$e=0;
		$c=0;
		$l=0;
		$letras=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','Ñ','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$nome=htmlentities( $_POST["nom"] );
		$nom=str_split($nome);
		$curp[3]=$nom[0];
		if(isset($_POST["apat"]))
		{
			$apate=htmlentities( $_POST["apat"] );
			$apat=str_split($apate);
			$curp[0]=$apat[0];
			if($apat[1]=='a' || $apat[1]=='e' || $apat[1]=='i' || $apat[1]=='o' || $apat[1]=='u')
				$curp[1]=$apat[1];
			else
				if($apat[2]=='a' || $apat[2]=='e' || $apat[2]=='i' || $apat[2]=='o' || $apat[2]=='u')
					$curp[1]=$apat[2];
				else
					if($apat[3]=='a' || $apat[3]=='e' || $apat[3]=='i' || $apat[3]=='o' || $apat[3]=='u')
						$curp[1]=$apat[3];
			if(isset($_POST["amat"]))
			{
				$amate=htmlentities( $_POST["amat"] );
				$amat=str_split($amate);
				$curp[2]=$amat[0];
				if(isset($_POST["fecha"]))
				{
					
					$fech=htmlentities( $_POST["fecha"] );
					$fecha=str_split($fech);
					for($n=0;$n<6;$n++)
					{
						if(is_numeric($fecha[$n]))
						{
							$curp[$a]=$fecha[$n];
							$a++;
						}
						else
							echo'NO';
					}
					if(isset($_POST["fm"]))
					{
						$curp[10]=$_POST["fm"];
						if(isset($_POST["ciu"]))
						{
							$ciu=htmlentities( $_POST["ciu"] );
							$ciudad=str_split($ciu);
							$curp[11]=$ciudad[0];
							$curp[12]=$ciudad[1];
							if(isset($_POST["curp"]))
							{								
								$curu=htmlentities( $_POST["curp"] );
								$cur=str_split($curu);
								$curp[13]=$cur[13];
								$curp[14]=$cur[14];
								$curp[15]=$cur[15];
								if(($curp[4]<=9)&&($curp[5]<=9))
									$curp[16]=0;
								else
									$curp[16]='A';
								$curpi = array_map("strtoupper", $curp);
								for($g=0;$g<16;$g++)
								{
									for($b=0;$b<35;$b++)
									{
										if($letras[$b]==$curpi[$e])
											$curpa[$e]=$b;
									}
									$e++;
								}
								for($n=18;$n>=3;$n--)
								{
									$miu[$c]=$n*$curpa[$c];
									if($c>0)
										$f=$f+$miu[$c];
									else
										$f=$miu[$c];
									$c++;
								}
								$curp[17]=$f%10;
								for($g=0;$g<16;$g++)
								{
									if($curpi[$g]==$cur[$g])
										$l++;
								}
								if($l==16)
									echo'El curp es Correctamente correcto';
								else
									echo'creo que no';
								echo'<br/><a href="opc.php">Regresar a inicio</a>';
								echo'<br/><a href="curp.html">Regresar</a>';
								setcookie("HSM","deonx34");
							}
							else
								echo'Falta el curp';
							
						}
						else
							echo'No tienes sexo?';
					}
					else
						echo'No tienes sexo?';
				}
				else
					echo'Falta Fecha';
			}
			else
				echo'Falta Ape Mat';
		}
		else
			echo'Falta Ape Pat';
	}
	else
		echo'Ingresa nombre';
?>

<?php
	$cadad=array();
	$a=2;
	$c=0;
	$e=0;
	if(isset($_POST["num"]))
	{
		$cada=htmlentities( $_POST["num"] );
		$cad=str_split($cada);
		if(isset($_POST["iso"]))
		{
			if($_POST["iso"]==10)
			{
				for($n=1;$n<9;$n++)
				{
					$b=$cad[$n-1]+($a*$cad[$n]);
					$cad[$n]=$b;
					$a++;
				}
				if ($cad[8]%11==$cad[9]%11)
					echo'Es Correcto';
				else
					echo'creo que esta mal';
			}
			if($_POST["iso"]==13)
			{
				for($n=0;$n<12;$n++)
				{
					$b=$n%2;
					if($b==1)
					{
						$miu[$c]=3*$cad[$n];
						if($c>0)
							$f=$f+$miu[$c];
						else
							$f=$miu[$c];
						$c++;
					}
					else
					{
						$d[$e]=$cad[$n];
						if($e>0)
							$g=$g+$d[$e];
						else
							$g=$d[$e];
						$e++;
					}
				}
				$res=10-($f+$g)%10;
				if($res==$cad[12])
					echo 'es correcto';
				else
					echo' nop';
				echo'<br/><a href="opc.php">Regresar a inicio</a>';
				echo'<br/><a href="Iso.html">Regresar</a>';
				setcookie("HSM","deonx34");
			}
		}
		else
			echo'Falta algo';
	}
	else
		echo'Primero ingresa una cadena';
?>

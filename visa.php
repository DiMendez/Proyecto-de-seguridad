<?php
	if(isset($_POST["visa"]))
	{
		$cade=htmlentities( $_POST["visa"] );
		$cad=str_split($cade);
		$e=0;
		$c=0;
		$mau=0;
		function modulo($a)
		{
			$r=$a-(10*floor($a/10));
			return $r;
		}
		if($cad[0]==4)
		{
			for($n=0;$n<15;$n++)
			{
				$b=$n%2;
				if($b==0)
				{
					$miu[$c]=2*$cad[$n];
					if($miu[$c]>=10)
						$mau++;
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
			$res=-($f+$g)-$mau;
			$re=modulo($res);
			if($re==$cad[15])
				echo 'Es correcto';
			else
				echo' Es incorrecto';
			echo'<br/><a href="opc.php">Regresar</a>';
			echo'<br/><a href="visa.html">Regresar</a>';
			setcookie("HSM","deonx34");
		}
		else
			echo'Es incorrecto';
	}
	else
		echo 'Falta visa';
?>

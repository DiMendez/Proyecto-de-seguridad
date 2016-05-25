<?php
			if(isset($_POST["num"]))
			{
				$cu=htmlentities( $_POST["num"] );
				if(isset($_POST["check"]))
				{
					$cu1=substr($cu,0,3);
					$cu2=substr($cu,3,3);
					$cu3=substr($cu,6,3);
					echo $cu2.$cu3.$cu1;
				}else{
					$cu1=substr($cu,0,3);
					$cu2=substr($cu,3,3);
					$cu3=substr($cu,6,3);
					echo $cu3.$cu1.$cu2;
				}
				echo'<br/><a href="opc.php">Regresar a inicio</a>';
				echo'<br/><a href="Cifra.html">Regresar</a>';
				setcookie("HSM","deonx34");
			}
			else
				echo'Primero mete el numero de cuenta';
		
	
?>

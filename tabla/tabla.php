<!DOCTYPE html>
<meta charset="utf-8">
<html>
<body>
	
    <table>
		<?php 						//empty -> dice si est� vac�o
			$num = "";
			if(empty($_GET["numero"])||$_GET["numero"]<0 ||!is_numeric($_GET["numero"])|| is_float($_GET["numero"])){ //isset -> dice si est� lleno
												
				echo "Hay que introducir un n�mero entero mayor que 0";
			}else{
				
				$num = $_GET["numero"];
				
			}
			
						    	
	    	for ($i=0; $i < $num; $i++) { 
	    	echo'<tr>
	    			<td>hh</td>
	    		</tr>';
	    	}
     	?>
     </table>
</body>
</html>
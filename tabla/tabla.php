<html>
<body>
	
    <table>
		<?php 
			$num = "";
			if(empty($_GET["numero"])||$_GET["numero"]<0){ //isset -> dice si está lleno
				$num =2;				//empty -> dice si está vacío
				echo "Hay que introducir un número mayor que 0";
			}else{
				
				$num = $_GET["numero"];
				
			}
			if(is_numeric($_GET["numero"])){
				$num = $_GET["numero"];
			}else{
				echo "Hay que introducir un número";
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
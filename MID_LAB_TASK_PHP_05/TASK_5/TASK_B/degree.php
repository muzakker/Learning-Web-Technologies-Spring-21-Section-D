<?php

	if(isset($_POST['submit'])){
		$deg = $_POST['degree'];
		
		if(empty($deg)){
				echo "null submission...";
			}else{
				$n = count($deg);
				
				echo "<b>DEGREE: </b>";
				for($i = 0; $i < $n; $i++){
					echo $deg[$i]." ";
				}
			}
	}

?>

<!DOCTYPE html>
<html>

<head>
    <title>HTML Form using PHP</title>
</head>

<body>    
    <form method="POST" action="#">
        <fieldset style="width:300px">  
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
			<input type="checkbox" name="degree[]" value="HSC"> HSC
			<input type="checkbox" name="degree[]" value="BSc"> BSc
			<input type="checkbox" name="degree[]" value="MSc"> MSc
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
    </form>
</body>

</html>
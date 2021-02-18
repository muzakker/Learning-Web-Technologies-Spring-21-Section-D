<!DOCTYPE html>
<html>

<head>
    <title>HTML Form using PHP</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset style="width:300px">
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodGroup" >
				<option value="A+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "A+"){ 
							echo "selected";
					}
				}?>
				>A+</option>
				<option value="A-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "A-"){ 
							echo "selected";
					}
				}
				?>
				>A-</option>
				<option value="B+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "B+"){ 
							echo "selected";
					}
				}?>
				>B+</option>
				<option value="B-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "B-"){ 
							echo "selected";
					}
				}?>
				>B-</option>
				<option value="AB+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "AB+"){ 
							echo "selected";
					}
				}?>
				>AB+</option>
				<option value="AB-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "AB-"){ 
							echo "selected";
					}
				}?>
				>AB-</option>
				<option value="O+"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "O+"){ 
							echo "selected";
					}
				}?>
				>O+</option>
				<option value="O-"
				<?php
				if(isset($_POST['submit'])){
					if($_POST["bloodGroup"] == "O-"){ 
							echo "selected";
					}
				}?>
				>O-</option>
			</select>
			<hr>
			<input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>
    </form>    
</body>

</html>
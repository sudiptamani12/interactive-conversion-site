<!doctype html>  
	<html>
	<head>
		<meta charset ="utf-8">
		<title>Converter</title>
		<style>
		#abc{
			color: red;
		}
		#head1{
			color: red;
		}
			
		</style>

	    <body>
	    	

	 <div style = "position: absolute; top: 50%; left: 50%; transform: translate(-49%, -49%);"> 
	 	 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	
		<fieldset>
			<p id="head1"> Page 1: [Home]</p>

		<p id="head1"> Conversion site</p>
		 <a href="http://localhost/a1/Home.php" target="_blank">Home</a>
		  <a href="http://localhost/a1/conversion_rate.php" target="_blank">Converstion Rate</a>

		  <a href="http://localhost/a1/History.php" target="_blank">History</a>

<br>
		
	<label for="converter" id="abc">Converter: </label>
	<br>
	<select id="converter" name="converter"> 
	
			<option value="feet to inch">feet to inch</option>
			<option value="inch to feet">inch to feet</option>
			
		</select>
		<br><br>
		<label for="comment">Value :</label>
			<textarea id="comment" name="comment" rows="2" cols="8"></textarea>
			<br>
			<br>
			<label for="comment1">Result :</label>
			<textarea id="comment" name="comment" rows="2" cols="8"></textarea>
			<br>
		</fieldset>
		<br>
			<input type="Submit" value="submit">
			
</form>


</div>
</body>
</html>
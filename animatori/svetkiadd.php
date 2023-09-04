<?php
	include "PHP/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

	<title>Svetkijums.lv</title>
</head>
<style type="text/css">

</style>
<body>

<div class="Svetkijums">
	<div class="header">
		<h1 class="nos">Svētki Jums</h1>
		<img src="image/logo.png" class="logo">
	</div>
	<div class="content">
		<div class="rkjosla">	
			<?php
				include "PHP/navigation.php";
				include "PHP/user.php";
			?> 
		</div>
		<br><br><br><br>
		<hr>
		<div class="ievadl">
			
				<h2 class="nosauk">Svētki</h2>
				<?php
					include "PHP/Funkc/svetkif.php";
				?>
			
			<br>
				<div class="pogas">
				<form method="POST" action="svetki.php">
				<?php
					if (isset($_POST['piev'])) 
					{
						echo "<input type='submit' name='pievienot' value='Pievienot' class='poga'>";
					}
					elseif (isset($_POST['redig'])) 
					{
						echo "<input type='hidden' name='edit_id' value='". $row['SvetkiID'] ."'>";
						echo "<a href='./svetki.php'><input type='submit' name='apstr' value='Apstiprināt' class='poga'></a>";
					}
				?>	
				<input type="submit" name="atcelt" value="Atcelt" class="poga">
				</form>
			</div>
		</div>					
	</div>			
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<?php
include "PHP/connection.php";
?>
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
				include "PHP/usersnav.php";
				include "PHP/user.php";
			?> 
		</div>
		<br><br><br><br>
		<?php
			include "PHP/hrstyle.php";
		?>
		<div class="info">
			<form action="admin.php" method="post">
				<div class="datl">
					<p>Lietotājvārds</p> 
					<input type="text" name="name" class="ievade"><br>
					<p>E-pasts</p> 
					<input type="text" name="name" class="ievade"><br>
					<p>Parole</p>
					<input type="text" name="password" class="ievade"><br>
					<p>Atkārtot Paroli</p>
					<input type="text" name="secpassword" class="ievade"><br>
					<input type="submit" value="Iesniegt" class="iesni">
				</div>
				<div class="datr">
					<p>Foto</p>
					<div class="foto">
						<img src="" class="port">
						<input type="button" name="iesni" value="Izvēlēties foto">
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>

</body>
</html>
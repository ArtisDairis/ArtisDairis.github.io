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
			
				<h2 class="nosauk">Klienti</h2>
			<form method="POST" action="klienti.html">
				<div class="lauki">			
					<div class="le">
						<p>Aprīkojuma ID</p>
						<input type="text" name="aprid" class="ievade">
						<p>Organizatora ID</p>
						<input type="text" name="orgid" class="ievade">
						<p>Žanra ID</p>
						<input type="text" name="zanid" class="ievade">
					</div>
				</div>
			
			<br>
				<div class="pogas">
					<input type="submit" name="pievienot" value="Pievienot" class="poga">
					<input type="button" name="atcelt" value="Atcelt" class="poga">
				</div>
			</form>
		</div>
	</div>			
</div>

</body>
</html>
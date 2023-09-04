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
		<?php
			include "PHP/hrstyle.php";
		?>
		<div class="tabula">
			<div class="tabl">
				<a href="aprikojumsadd.php"><input type="button" value="Pievienot" class="butl"></a>
				<input type="text" name="fpec" placeholder="Filtrēt pēc" class="ievade">
				<input type="text" name="fpecnos" placeholder="Nosaukums" class="ievade">
				<input type="button" name="filtret" value="Filtrēt" class="butl">

				<input type="text" name="mpec" placeholder="Meklēt pēc" class="ievade">
				<input type="text" name="mpecnos" placeholder="Nosaukums" class="ievade">
				<input type="button" name="meklet" value="Meklēt" class="butl">

				<input type="button" name="dzest" value="Dzēst" class="butl">
			</div>
			<div class="tabr">
				<?php
					include "PHP/Tables/aprikojumsp.php";
				?>
			</div>			
		</div>
	</div>
</div>

</body>
</html>
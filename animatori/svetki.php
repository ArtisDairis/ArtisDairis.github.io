<?php
include "PHP/connection.php";
session_start();
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
				<form method="post" action="svetkiadd.php">
					<input type="submit" name='piev' value="Pievienot" class="butl">
				</form>
				<br>
				<form method="POST" action="svetki.php">
					<select name="fpec" class="ievade" style="width: 270px">
					    <option value="nul">Nav vērtības</option>
					    <option value="SvetkiID">ID</option>
					    <option value="ZanrsID">Žanra ID</option>
					    <option value="KlientaID">Klienta ID</option>
					    <option value="KopSum">Kopējā summa</option>
					    <option value="Datums">Datums</option>
					    <option value="Laiks">Laiks</option>
					    <option value="Adrese">Adrese</option>
					</select>
					<input type="text" name="fpecnos" placeholder="Nosaukums" class="ievade">
					<input type="submit" name="filtret" value="Filtrēt" class="butl">
				</form>
				<br>
				<form method="POST" action="svetki.php">
					<select name="mpec" class="ievade" style="width: 270px">
					    <option value="nul">Nav vērtības</option>
					    <option value="SvetkiID">ID</option>
					    <option value="ZanrsID">Žanra ID</option>
					    <option value="KlientaID">Klienta ID</option>
					    <option value="KopSum">Kopējā summa</option>
					    <option value="Datums">Datums</option>
					    <option value="Laiks">Laiks</option>
					    <option value="Adrese">Adrese</option>
					</select>
					<input type="text" name="mpecnos" placeholder="Nosaukums" class="ievade">
					<input type="submit" name="meklet" value="Meklēt" class="butl">
				</form>
				<form method="POST" action="svetki.php">
					<input type="submit" name="atcelt" value="Atcelt" class="butl">
				</form>
			</div>
			<div class="tabr">
				<?php
					include "PHP/Tables/svetkip.php";
					include "PHP/Funkc/Delete/svetkid.php";
				?>

			</div>			
		</div>
	</div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<?php
include "PHP/connection.php";
include "PHP/auth.php";
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
		<div class="logint">
			<form method="post">
				<div class="ievd">
				<p>Lietotājvārds</p> 
				<input type="text" name="name" class="ievade" value=""><br>
				<p>Parole</p>
				<input type="password" name="password" class="ievade" value=""><br>
				<input type="submit" name="iesniegt" value="Iesniegt" class="iesn">
				</div>
			</form>
		</div>

		
		<div class="jaunumi">
			<div class="jaun">
				<img src="" class="jaunf">
				<div class="jaunr">
					<h1>Nosaukums</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<input type="button" name="talak" value="Apskatīt" class="apsk">
				</div>
			</div>
			<div class="jaun">
				<img src="" class="jaunf">
				<div class="jaunr">
					<h1>Nosaukums</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<input type="button" name="talak" value="Apskatīt" class="apsk">
				</div>
			</div>
			<div class="jaun">
				<img src="" class="jaunf">
				<div class="jaunr">
					<h1>Nosaukums</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<input type="button" name="talak" value="Apskatīt" class="apsk">
				</div>
			</div>
			<div class="jaun">
				<img src="" class="jaunf">
				<div class="jaunr">
					<h1>Nosaukums</h1>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<input type="button" name="talak" value="Apskatīt" class="apsk">
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
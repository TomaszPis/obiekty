<!DOCTYPE html>
<head>
</head>
<body>
<?php $ja->przedstaw_sie(); ?>

<form action="" method="post">
	<br>
	Zmień rok mi urodzenia <br>
	<input type="number" name="add_age">
	<input type="submit" name="action" value="Dodaj rok">
</form>
<br>
<span style="color: <?php echo $color; ?>;"><?php echo $error; ?></span>
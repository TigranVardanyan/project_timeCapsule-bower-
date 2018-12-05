<!DOCTYPE html>
<html lang="en">
<?php require_once('head.php') ?>
<body>
<div class="wrapper">
	<?php 
	$result = $pdo->query('select * from coltext');

	while( $row = $result->fetch(PDO::FETCH_ASSOC) ) {
		echo "<p style='font-size:".$row['fsize']."px''>";
		echo $row['text'];
		echo "</p>";
	}
	 ?>
</div>
<div class="submit">
	<form class="forma" action="logic/action.php" method="get">
		<input class="inputText" type="text" name="myText" maxlength="22">
		<button class="submit" type="submit">Submit</button>
	</form>
</div>


</body>
</html>
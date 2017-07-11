<?php
	include 'db.php';
	$db = Db::getInstance();
	$db->query("SELECT * FROM testing");
	$tests = $db->fetch_all();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<table class="table">
		<tbody>
		<?php foreach ($tests as $test):?>
		<tr>
			<td><?php echo $test['id'];?></td>
			<td><?php echo $test['test'];?></td>
			<td><?php echo $test['date'];?></td>
			<td></td>
		</tr>
			</tbody>
		<?php endforeach;?>
	</table>
	</div>
</body>
</html>

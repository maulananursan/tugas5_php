<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3></h3>
	<?php 
	$input11="Ayo";
	$input12="Bersama";
	$input21="Belajar";
	$input22="Bersama";

	?>
	<h2>Operator String</h2>
	<table border = '1'>
		<tr>
		<td>Input 1</td>
		<td>Input 2</td>
		<td>Hasil</td>
		</tr>

		<tr>
			<td><?php echo $input11 ?></td>
			<td><?php echo $input21 ?></td>
			<td><?php echo $input11." ".$input21; ?></td>
		</tr>
		<tr>
			<td><?php echo $input21 ?></td>
			<td><?php echo $input22 ?></td>
			<td><?php echo $input21." ".$input22; ?></td>
		</tr>
	</table>
	<p>Gabungan : Ayo Belajar Bersama NIOMIC :)</p>
</body>
</html>

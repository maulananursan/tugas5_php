<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Tabel Logika</p>

	<table border = '1'>
		<tr>
		<td>Input True</td>
		<td>Input 2</td>
		<td>AND</td>
		<td>OR</td>
		</tr>

		<tr>
			<td>false</td>
			<td>false</td>
			<td><?php echo ''.printf(false && false); ?></td>
			<td><?php echo ''.printf(false || false); ?></td>
		</tr>
		<tr>
			<td>false</td>
			<td>true</td>
			<td><?php echo ''.printf(false && true); ?></td>
			<td><?php printf(false || true); ?></td>
		</tr>
		<tr>
			<td>true</td>
			<td>false</td>
			<td><?php echo ''.printf(true && false); ?></td>
			<td><?php printf(true || false); ?></td>
		</tr>
		<tr>
			<td>true</td>
			<td>true</td>
			<td><?php printf(true && true); ?></td>
			<td><?php printf(true || true); ?></td>
		</tr>

</table>

</body>
</html>

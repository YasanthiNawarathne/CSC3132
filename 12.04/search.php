

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

require_once '../11_20/ConnectDB.php';
require_once 'myFun.php';

?>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
	<table >
		<tr >
			<td>Name: </td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Search"></td>
		</tr>

	</table>

</form>
<?php

if (isset($_GET['name']) && $_GET['name'] != '') {
	SearchName($_GET['name'],$connect);
}

?>
</body>
</html>

<?php
$data = simplexml_load_file ( '../database.xml' );
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$from = ( string ) $_POST ["from"];
$id = $_POST ["id"];
$chosenOne = $_POST ["chosenTest"];
$right = $_POST ["right"];
$results = $data->kid [$id]->results;

if ($from == 'tests') {
	$results->$chosenTest = $right;
}
?>
<table>
		<tr>
			<td>Add</td>
			<td>Sub</td>
			<td>Mult</td>
			<td>Div</td>
		</tr>
		<tr>
			<td> <?php echo($results->add) ?> </td>
			<td> <?php echo($results->sub) ?> </td>
			<td> <?php echo($results->mult) ?> </td>
			<td> <?php echo($results->div) ?> </td>
		</tr>

	</table>

</body>
</html>
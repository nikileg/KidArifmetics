<html>
<head>
<title>Тесты</title>
<meta charsel="UTF-8" />
<style>
body {
	background: #c7b39b url(../desk.jpg);
	background-size: 100%;
	color: AAAA00;
}

span {
	color: #ffffff;
	font-size: 150%;
}

.prim {
	margin: 20%;
}

}
P {
	color: #dddd00;
	font-size: 200%;
}

h1 {
	color: #dddd00;
}
</style>
</head>
<body>
	<div align="center" class="prim">
		<h1 align="center">
			<em> А вот и примеры! <br> Будь внимательным!
			</em>
		</h1>
		<span id="span"> </span> <br>
		<p align="center">
			<em> Впиши ответ</em>
		</p>
		<input type="text" id="text"> <br> <br>
		<button id="ok">Ok!</button>
		
		<form action="../results/index.php" method="post">
			<input type="text" id="right" name="right" hidden> </span> <br> <span id="total" hidden> </span>
			</br>
			<button id="submit" type="submit"> Done!</button>

			<input type="hidden" name="from" value="tests"> </br> <input
				type="hidden" name="id" value=<?php echo("'".$_POST['id']."'") ?>> </br>
			<input type="hidden" name="chosenTest"
				value=<?php echo("'".$_POST['chosenTest']."'") ?>> </br>
		</form>
	
		<?php
		$chosenOne = $_POST ["chosenTest"];
		switch ($chosenOne) {
			case "add" :
				{
					?>
					<script src="addition.js">									
					</script>				
					<?php
				}
				break;
			case "sub" :
				{
					?>
					<script src="substraction.js">									
					</script>				
					<?php
				}
				break;
			case "mult" :
				{
					?>
					<script src="multiplication.js">									
					</script>				
					<?php
				}
				break;
			case "div" :
				{
					?>
					<script src="division.js">									
					</script>				
					<?php
				}
				break;
		}
		?>
		</div>
</body>
</html>

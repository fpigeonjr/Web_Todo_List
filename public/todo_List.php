<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pigeon ToDo List</title>
</head>
<body>
	<h1>TODO List</h1>
	<ul>
		<li>Milk</li>
		<li>Walk the dog</li>
		<li>Pick up kids</li>
	</ul>
	<h2>Input New Todo Items</h2>
	<form method="GET">
		<label for="item_num">Item Number: </label>
        <input id="item_num" name="item_num" type="text" placeholder="Todo Number">
        <br>
        <label for="task">Task</label>
        <input id="task" name="task" type="text" placeholder="Add Todo Item">
        <br>        
        <button type="submit">Add Item</button>
	</form>
	<?php
		var_dump($_GET);
		var_dump($_POST);
	?>
</body>
</html>
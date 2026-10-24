<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
<body>
	<h1>Переменные и вывод</h1>

	<?php
    $name = 'Андрей';
    $age = 20;

    echo ("Меня зовут: $name"), PHP_EOL;
    echo ("Мне $age лет\n"), PHP_EOL;
    echo 'Тип переменной name: ', gettype($name), PHP_EOL;
    echo 'Тип переменной age: ', gettype($age),PHP_EOL;
    unset($name, $age);
	?>
    
</body>
</html>
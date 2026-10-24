<?php
$bmw = [
    'model' => 'X5',
    'speed, km/h' => 120,
    'doors' => 5,
    'year' => '2006'
];

$toyota = [
    'model' => 'Carina',
    'speed, km/h' => 130,
    'doors' => 4,
    'year' => '2007'
];

$opel = [
    'model' => 'Corsa',
    'speed, km/h' => 140,
    'doors' => 5,
    'year' => '2007'
];

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Массивы</title>
</head>
<body>
	<h1>Массивы</h1>
	<?php
    echo "bmw - {$bmw['model']} - {$bmw['speed, km/h']} - {$bmw['doors']} - {$bmw['year']}", PHP_EOL;
    echo "toyota - {$toyota['model']} - {$toyota['speed, km/h']} - {$toyota['doors']} - {$toyota['year']}", PHP_EOL;
	echo "opel - {$opel['model']} - {$opel['speed, km/h']} - {$opel['doors']} - {$opel['year']}", PHP_EOL;
	/*
	ЗАДАНИЕ 2
	- С помощью подстановки в строку выведите значения всех трёх массивов в виде: name - model - speed - doors -year,  например: bmw - x5 - 120 - 5 - 2006
	*/
	?>

</body>
</html>
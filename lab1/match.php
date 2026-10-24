<?php
$day = 27;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция switch</title>
</head>
<body>
	<h1>Конструкция switch</h1>
	<?php
    $result = match (true) {
         $day >= 1 and $day <= 5 => 'Это рабочий день',
         $day == 6 or $day == 7 => 'Это выходной день',
         default => 'Неизвестный день',
    };
    echo $result; 
	?>

</body>
</html>
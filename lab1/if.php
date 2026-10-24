<?php

$age = 47;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкции if-elseif-else</title>
</head>
<body>
	<h1>Конструкции if-elseif-else</h1>
	<?php
    if (18 <= $age and $age <= 59){
      echo 'Вам ещё работать и работать';
    }
    elseif (1 <= $age and  $age <= 17){
        echo 'Вам ещё рано работать';
    }
    elseif ( $age < 1){
        echo 'Неизвестный возраст';
    }
    else{
        echo 'Вам пора на пенсию';
    }
	?>
 
</body>
</html>

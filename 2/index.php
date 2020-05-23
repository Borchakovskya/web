<?php

// Отправляем правильную кодировку.
header('Content-Type: text/html; charset=UTF-8');

// Выводим все полученные через POST параметры.
// если запрос 2-5) сделан правильно, то можно будет увидеть
// отправленный комментарий в ответе веб-сервера.
print_r($_POST);

print('Борчаковская Александра');

?>

<html>
<head>
	<title>Задание 2</title>
</head>
<body>
	<br>
	<img src="images/1.png"><br>
	<img src="images/2.png"><br>
	<img src="images/3.png"><br>
	<img src="images/4.png"><br>
	<img src="images/5.png"><br>
	<img src="images/6.png"><br>
	<img src="images/7.png">
</body>
</html>

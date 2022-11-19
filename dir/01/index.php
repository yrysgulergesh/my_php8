<?php

/*
PHP - это серверный скриптовый язык программирования с открытым исходным кодом. 
PHP специально сконструирован для веб-разработок с возможностью внедрения кода в HTMl.
Примеры использования PHP:
- Обработка форм
- Автоматическая генерация html стр.
 */

/*
Переменная - это временное хранилище, контайнер, в котором можно хранить какое-либо значение.
Регистрозависимы $name и $Name - разные переменные
 */

$userName; //Camel case
$user_name; //Snake case

$name = "Jack";
$century=20;

echo $name, "<br>";
echo 'Hello word! <br>';
echo 'Hello $name <br>';
echo "Hello $name <br>";
echo 'Сумма чисел: 3 + 2 = '. 3+2 . "<br>";
echo "$name was born in the {$century}th century<br>";  


$century=30;
echo "name - ", $name, " century - ", $century, "<br>";

?>

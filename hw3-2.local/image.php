<?php

include_once __DIR__ . '/array.php';    //Подключаем массив

?>

<!--Выводим изображение по id с помощью метода GET-->
<img src="/images/<?php echo $images[$_GET['id']];?>" width=100% /><br>
<a href="/index.php"><= На главную страницу</a>      <!--Возвращение на главную страницу-->

<html>
	<head>
		<title>PHP-1</title>

    </head>
	<body>
		<h1>PHP</h1>
		<h2>3 урок</h2>

        <h2>Массивы</h2>
        <h4>Домашняя работа</h4>
        <h5>1.	Напишите программу-калькулятор <br>
            1).	Форма для ввода двух чисел, выбора знака операции и кнопка "равно"<br>
            2).	Данные пусть передаются методом GET из формы (да, можно и так!) на скрипт, который их примет и выведет выражение и его результат<br>
            3).	* Попробуйте улучшить программу. Пусть данные отправляются на ту же страницу на PHP, введенные числа останутся в input-ах, а результат появится после кнопки "равно"
        </h5>

        <h4>Калькулятор</h4>
        <form action="/calc.php" method="get">

            <?php
            $count1 = $_GET['count1'];  //Обозначаем переменные
            $count2 = $_GET['count2'];
            $proc = $_GET['proc'];
            ?>

            Первое число:
            <input type="number" step="any" name="count1" value="<?php echo $count1; //чтобы после нажатия на кнопку "Равно", введённые значения осталаись?>"><br><br>

            Операция:
            <select name="proc" >

                <option value="+" <?php if ($proc == '+') {echo 'selected';} //чтобы после нажатия на кнопку "Равно", выбранная операция осталась?> >+</option>
                <option value="-" <?php if ($proc == '-') {echo 'selected';}?> >-</option>
                <option value="*" <?php if ($proc == '*') {echo 'selected';}?> >*</option>
                <option value="/" <?php if ($proc == '/') {echo 'selected';}?> >/</option>
            </select>
            <br><br>
            Второе число:
            <input type="number" step="any" name="count2" value="<?php echo $count2; //чтобы после нажатия на кнопку "Равно", введённые значения осталаись?>"<br><br><br>

            <button type="submit">Равно</button>


            <?php

            if ($count1 == '') {
                echo 'ВВЕДИТЕ ПЕРВОЕ ЧИСЛО';    // Проверка на введение первого числа
            }
            elseif ($count2 == '') {
                echo 'ВВЕДИТЕ ВТОРОЕ ЧИСЛО';    // Проверка на введение второго числа
            }
            elseif ($count2 == 0 && $proc == '/') {
                echo 'Делить на ноль нельзя!';  // Проверка деления на ноль. Делить на ноль нельзя!
            }
            else {
                // echo $count1 . ' ' . $proc . ' ' . $count2 . ' = ';
                //выбор арифметического оператора
                switch ($proc) {
                    case '+':
                        echo $count1 + $count2;
                        break;
                    case '-':
                        echo $count1 - $count2;
                        break;
                    case '*':
                        echo $count1 * $count2;
                        break;
                    case '/':
                        echo $count1 / $count2;
                        break;
                }
            }
            ?>

    </form>

	</body>
</html>
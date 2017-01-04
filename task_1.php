<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task_1</title>
</head>

<body>
    <div class="bl lft">
        <h3>Завдання 1</h3>
        <p>У форму вводиться число N. Знайти всі досконалі числа до N. Досконале
            число - це таке число, що дорівнює сумі всіх своїх дільників, крім 
            себе самого. Наприклад, число 6 є досконалим, тому що крім себе 
            самого ділиться на числа 1, 2 і 3, які в сумі дають 6.</p>
    </div>
    <div class="bl rt">
        <div class="bl up">
            <form name="test" action="task_1.php" method="post">
                <p>Введіть число</p>
                <p>
                    <input type="number" name="perfectNum" placeholder="6">
                </p>
                <input type="submit" name="done" value="Надіслати">



            </form>
           
        </div>

        <div class="bl down">
<?php
if (isset($_POST["done"])){
   if ($_POST["perfectNum"] == ""){
     echo "Спробуйте ввести число у форму. <a href= 'task_1.php'> Змінити</a> ";}
   else  {
    $Perfect_Num = $_POST["perfectNum"];
    for ($n = 1; $n < $Perfect_Num; $n++)
    if (is_perfect($n))
         echo "<p>Значення:$n</p><br/>";
    
}
    
}

     
 

set_time_limit(3600);
 
function is_perfect($number) {
    for ($n = 2; $n <= sqrt($number); $n++) {
        if (!($number % $n)) {
            $d += $n;
            if ($n <> $number / $n)
                $d += $number / $n;
        }
    }
    return ++$d == $number;
}
 





?>
        </div>
    </div>
</body>

</html>
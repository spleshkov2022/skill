<?php 
$a = 'Мои знания на';
$b = 100;
$c ='%';
?>

<?php 
	$price = 18;

	if(($price >= 15) && ($price <= 20)) {
		echo 'Это число находится между 15 и 20';
	}
?>
</br>
</br>
<?php
	$start = microtime(true);
	usleep(100); // Функция, которая откладывает время выполнения программы 100 микросекунд
	$n = 10;
	for ($i = 1; $i <= $n; $i++) {
		$factorial = $i * $n;
	}
	echo "Факториал 10 равен $factorial";
	echo '<br>';
	echo 'Время выполнения скрипта: ' . round(microtime(true) - $start, 4) . ' секунд';
	
?>
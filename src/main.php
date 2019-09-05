<?php
	require_once("greeting.php");
	require_once("greeting2.php");
$rem = new greeting();
$rem->name = 'レム';
$rem->word = 'おはよう';

echo $rem->say();


$g2 = new greeting2();
$g2->name = 'ラム';
$g2->word = 'おはよう';

echo $g2->say();

	if (1) {
echo "test";
}
?>

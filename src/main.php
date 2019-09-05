<?php
	require_once("greeting.php");
$rem = new greeting();
$rem->name = 'レム';
$rem->word = 'おはよう';

echo $rem->say();

	if (1) {
echo "test";
}
?>

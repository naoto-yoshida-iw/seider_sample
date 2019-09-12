<?php
	require_once("greeting.php");
require_once("greeting2.php");
require_once("greeting3.php");
$rem = new greeting();
$rem->name = 'レム';
$rem->word = 'おはよう';

echo $rem->say();


$g2 = new greeting2\Greeting2();
$g2->name = 'ラム';
$g2->word = 'おはよう';

echo $g2->say();

$g3 = new greeting3\Greeting3();
$g3->name = '炭治郎';
$g3->word = 'おはよう';

echo $g3->say();
if (1) {
    echo "test";
}
?>

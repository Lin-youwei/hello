<?php

function __autoload($class) {
	//echo $class."<br>";
	include str_replace('\\', '/', $class) . '.php';
}
include 'Common/Functions.php';

$user = new Model\User();
$firend = new Model\Friend();

echo "sdasda";
$ruser = new ReflectionClass(get_class($user));
//echo ($ruser);die;

// foreach (get_object_vars($user) as $key => $value) {

// 	echo $key . '=>' . $value . PHP_EOL;
// 	//echo get_class_methods(get_class($user));
// }
// print_r(get_class_methods(get_class($user)));

// $user->info();die;
// function fstatic() {
// 	static $a = 1;

// 	$a *= 2;
// 	echo $a;
// }
// fstatic();
// fstatic();
// fstatic();

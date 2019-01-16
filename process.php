<?php
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$n = $fn . " " . $ln;
$e = $_POST['email'];
$j = $_POST['title'];
$s = $_POST['supervisor'];
$dr = $_POST['directReport'];

$a = array(
	"firstName" => $fn,
	"lastName" => $ln,
    "fullName" => $n,
    "email" => $e,
    "jobTitle" => $j,
    "supervisor" => $s,
    "directReport" => $dr
);

$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location:../index.php');
?>


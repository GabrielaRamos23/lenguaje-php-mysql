<?php
$gabriela = new mysqli("localhost","root","","dba");
if ($gabriela) {
	echo "Hi, fine";
} else{
	echo "hello, bad";
}
?>
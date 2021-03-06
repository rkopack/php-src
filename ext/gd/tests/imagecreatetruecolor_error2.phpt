--TEST--
Testing imagecreatetruecolor(): error on out of bound parameters
--CREDITS--
Rafael Dohms <rdohms [at] gmail [dot] com>
--SKIPIF--
<?php
	if (!extension_loaded("gd")) die("skip GD not present");
	if (!function_exists("imagecreatetruecolor")) die("skip GD Version not compatible");
?>
--FILE--
<?php
$image = imagecreatetruecolor(-1, 30);
$image = imagecreatetruecolor(30, -1);
?>
--EXPECTF--
Warning: imagecreatetruecolor(): Invalid image dimensions in %s on line %d

Warning: imagecreatetruecolor(): Invalid image dimensions in %s on line %d

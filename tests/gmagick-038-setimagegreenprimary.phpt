--TEST--
Set, get imagegreenprimary
--SKIPIF--
<?php
/* $Id: gmagick-038-setimagegreenprimary.phpt 280206 2009-05-09 18:22:48Z vito $ */
if(!extension_loaded('gmagick')) die('skip');
?>
--FILE--
<?php
$gm = new Gmagick();
$gm->read("magick:rose");
print_r($gm->setImageGreenPrimary(0.2, 0.2)->getImageGreenPrimary());
?>
--EXPECTF--
Array
(
    [x] => 0.2
    [y] => 0.2
)
<?php
require_once 'XML/Wddx.php';

$o = new StdClass;
$o->x = "vvvv";
$ar = array(
    'a' => 1,
    'b' => "TESTING \n 123\n",
    'c' => $o,
    'd' => array('x','y','z')
);


//$ar = '1';
print_r($ar);
$wddx = XML_Wddx::serialize($ar);
print_r($wddx);
print_R(wddx_deserialize($wddx));
print_R(XML_Wddx::deserialize($wddx));


$big = XML_Wddx::deserialize(file_get_contents(dirname(__FILE__) .'/validate.wddx'));
print_r($big[0]);
$big = wddx_deserialize(file_get_contents(dirname(__FILE__) .'/validate.wddx'));
print_r($big[0]);

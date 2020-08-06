<?php

include("gmap-class.php");



///////// how to call the function for map //////
$renderMap = RenderMap::create();

$data = array(
	'type' => '1',
	'address' => 'Gatways of India, Mumbai',
	'width' => "80%", // Optional 
	'height' => "40%" // Optional
);

// $data = array(
// 	'type' => '2',
// 	'latitude' => '12.106369',
// 	'longitude'  => '73.012584',
// 'width' => "80%", // Optional 
// 'height' => "40%" // Optional
// );

$renderMap->drawMapbyAddress($data);

}

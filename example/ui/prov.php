<?php
$term = @$_GET['term'];
$data = array('ID'=>array(array("v"=>"1","l"=>"Bali"),array("v"=>"2","l"=>"Banten"),array("v"=>"3","l"=>"Bengkulu"),array("v"=>"4","l"=>"DKI Jakarta"),array("v"=>"5","l"=>"Gorontalo"),array("v"=>"6","l"=>"Indonesia (general)"),array("v"=>"7","l"=>"Irian Jaya Barat"),array("v"=>"8","l"=>"Jambi"),array("v"=>"9","l"=>"Jawa Barat"),array("v"=>"10","l"=>"Jawa Tengah"),array("v"=>"11","l"=>"Jawa Timur"),array("v"=>"12","l"=>"Kalimantan Barat"),array("v"=>"13","l"=>"Kalimantan Selatan"),array("v"=>"14","l"=>"Kalimantan Tengah"),array("v"=>"15","l"=>"Kalimantan Timur"),array("v"=>"16","l"=>"Kepulauan Bangka Belitung"),array("v"=>"17","l"=>"Kepulauan Riau"),array("v"=>"18","l"=>"Lampung"),array("v"=>"19","l"=>"Maluku Utara"),array("v"=>"20","l"=>"Maluku"),array("v"=>"21","l"=>"Nangroe Aceh Darussalam"),array("v"=>"22","l"=>"Nusa Tenggara Barat"),array("v"=>"23","l"=>"Nusa Tenggara Timur"),array("v"=>"24","l"=>"Papua (Irian jaya)"),array("v"=>"25","l"=>"Riau"),array("v"=>"26","l"=>"Sulawesi Barat"),array("v"=>"27","l"=>"Sulawesi Selatan"),array("v"=>"28","l"=>"Sulawesi Tengah"),array("v"=>"29","l"=>"Sulawesi Tenggara"),array("v"=>"30","l"=>"Sulawesi Utara"),array("v"=>"31","l"=>"Sumatera Barat"),array("v"=>"32","l"=>"Sumatera Selatan"),array("v"=>"33","l"=>"Sumatera Utara"),array("v"=>"34","l"=>"Yogyakarta")));
$arr = array();

$res = @$data[$term];
if(!is_array($res))
$res = array();
echo json_encode($res);


?>
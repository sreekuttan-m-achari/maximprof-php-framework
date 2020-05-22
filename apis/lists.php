<?php
require_once '../autoload.php';

$type = $_GET['type'] ?? '';

//debug($_GET);

switch ($type) {
case 'days':
	get_days_list();
	break;

default:
	$results = ['title' => "Maximprof Framework", 'version' => '2.13'];
	json_api_response($results);
	break;
}

function get_days_list() {

	$results = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

	json_api_response($results);

}

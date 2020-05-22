<?php
if(function config('local') == 'local'){

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

}

function config($key) {

	$site_name = 'Maximprof Framework';
	$env = 'local';

	$conf_array = array(
		'site_name' => $site_name,
		'env' => $env,
		'send_mail' => true,
	);

	return $conf_array[$key] ?? null;

}

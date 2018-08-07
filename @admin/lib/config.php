<?php if(!defined('_lib')) die("Error");

	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	$config_url=$_SERVER["SERVER_NAME"].'';	
	if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
		$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header('HTTP/1.1 301 Moved Permanently');
		header('Location: ' . $redirect);
		exit();
	}
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'dongd782_user';
	$config['database']['password'] = 'Eo3h;0+GZ;Cv';
	$config['database']['database'] = 'dongd782_data';
	$config['database']['refix'] = 'table_';
	
	$ip_host = '112.213.89.41';
	$mail_host = 'shop@dongduoc18.com';
	$pass_mail = 'CCo~fux7~#84';

	$config['lang']=array(''=>'Tiếng Việt');#Danh sách ngôn ngữ hỗ trợ
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');

?>
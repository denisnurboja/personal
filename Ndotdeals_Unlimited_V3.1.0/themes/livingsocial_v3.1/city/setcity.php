<?php ob_start(); ?>
<?php
/******************************************
* @Created on March, 2011 * @Package: Ndotdeals unlimited v2.2
* @Author: NDOT
* @URL : http://www.NDOT.in
********************************************/

require_once($_SERVER['DOCUMENT_ROOT'].'/system/includes/library.inc.php');
if($_REQUEST['cityid']!='')
{
	session_start();
	$_SESSION['defaultcityId'] = $_REQUEST['cityid'];
	$_SESSION['defaultcityname'] = $_REQUEST['cityname'];
	$_SESSION['default_city_url'] = $_REQUEST['city_url'];

	//$city_name = friendlyURL($_SESSION['defaultcityname']);
	$lang = $_SESSION["site_language"];
	if($lang)
	{
			include(DOCUMENT_ROOT."/system/language/".$lang.".php");
	}
	else
	{
			include(DOCUMENT_ROOT."/system/language/en.php");
	}
 
	set_response_mes(1,$language['city_changed']); 	
	url_redirect(DOCROOT.$_SESSION['default_city_url'].'/');

}
?>
<?php ob_flush(); ?>
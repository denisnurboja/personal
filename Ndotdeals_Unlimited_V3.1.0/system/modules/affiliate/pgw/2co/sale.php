<?php
/********************************************
 * @Created on March, 2011 * @Package: Ndotdeals unlimited v2.2 
 * @Author: NDOT
 * @URL : http://www.ndot.in
 ********************************************/

//$include_path = dirname(__FILE__);

require_once('../../includes/config.inc.php');
require_once('../../classes/Xp.php');
require_once('../../includes/variables.inc.php');
/*
$text = "order: ".$_GET['OrderID']."\ntotal: ".$_GET['TotalCost']."\nproduct: ".$_GET['ProductID']."\ncookie[xp]: ".$_COOKIE['xp']."\n";
	
$f = fopen("file.txt", "w");
fwrite($f, $text);
fclose($f);
*/

/*unset($data);
unset($xp);
unset($merchant);
unset($vip);
*/

//$data = $_POST;

//$vip = $data['vip'];//need check for paypal

$aff = $gXpDb->checkByUID($_COOKIE['xp']);
/*
include($include_path.'/includes/merchants.inc.php');

for($i=0; $i<count($merchants); $i++)
{
	if(strstr($vref, $merchants[$i]['name']))
	{
		$amount = $data[$merchants[$i]['amount']];
		$order_number = $data[$merchants[$i]['order_number']];
		$name = $merchants[$i]['name'];
		break;
	}
}
*/
//merchant identification ends
/*
if(count($affs))
{
	$xp = $affs[0]['aff_id'];
}
*/
/*
if($xp)
{

	if($amount>0)
	{
		*/
if($aff)
{		
		$gXpDb->addSale($aff['aff_id'], $_GET['TotalCost'], $_COOKIE['xp'], $_GET['OrderID'], '2CheckOut');
		$gXpDb->addAffiliateSale($aff['aff_id']);

		$tpl = $gXpDb->getEmailTemplateByKey('admin_new_sale');
		$subject = $tpl['subject'];
		$body = $tpl['body'].$tpl['footer'];
		$body = stripslashes($body);

		$body = str_replace('{your_sitename}',$gXpDb->mConfig['site'],$body);
		$body = str_replace('{your_sitename_link}',$gXpDb->mConfig['xpurl'],$body);
		
		$gXpDb->mMailer->sendEmail($gXpDb->mConfig['site_email'], $subject, $body, $gXpDb->mConfig['site_email'], $gXpDb->mConfig['site_email']);
}
/*
	}
}
*/

?>

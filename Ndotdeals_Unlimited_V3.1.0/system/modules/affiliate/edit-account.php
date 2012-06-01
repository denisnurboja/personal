<?php
/********************************************
 * @Created on March, 2011 * @Package: Ndotdeals unlimited v2.2 
 * @Author: NDOT
 * @URL : http://www.ndot.in
 ********************************************/

$gProtected = TRUE; 

require_once('header.php');

$form = $gXpDb->getAffiliateInfo($aff);

if ($_POST['edit'])
{

	/** magic quotes stripping **/
	$tmp = get_magic_quotes_gpc() ? array_map('stripslashes', $_POST) : $_POST;

	unset($temp);
	$temp['firstname']	= addslashes($tmp['firstname']);
	$temp['lastname']	= addslashes($tmp['lastname']);
	$temp['taxid']		= addslashes($tmp['taxid']);
	$temp['check']		= addslashes($tmp['check']);
	$temp['country']	= addslashes($tmp['country']);
	$temp['company']	= addslashes($tmp['company']);
	$temp['url']		= addslashes($tmp['url']);
	$temp['address']	= addslashes($tmp['address']);
	$temp['zip']		= addslashes($tmp['zip']);
	$temp['city']		= addslashes($tmp['city']);
	$temp['state']		= addslashes($tmp['state']);
	$temp['phone']		= addslashes($tmp['phone']);

	foreach($temp as $key=>$value)
	{
		if(empty($value))
		{
			$error = true;
			$msg .= "<li>".sprintf($gXpLang['msg_please_correct'], $key)."</li>";
		}
	}

	$temp['fax']	  = addslashes($tmp['fax']);
	$temp['email']	  = addslashes($tmp['email']);
	$temp['paypal_email']	  = addslashes($tmp['paypal_email']);
	/** check email **/
	if (!valid_email($_POST['email']))
	{
		$error = true;
		$msg .= "<li>{$gXpLang['error_email_incorrect']}</li>";
	}
	
	/** check email **/
	if (!valid_email($_POST['paypal_email']))
	{
		$error = true;
		$msg .= "<li>{$gXpLang['error_email_incorrect']}</li>";
	}
	
	/** check password **/
	if($tmp['password'] && $tmp['password2'])
	{
		if ($tmp['password'] != $tmp['password2'])
		{
			$error = true;
			$msg .= "<li>{$gXpLang['error_password_match']}</li>";
		}
		else
		{
			$temp['password'] = md5($tmp['password']);
			aff_passwd_changed($temp['password']);
		}
	}
	elseif(!$tmp['password'] && !$tmp['password2'])
	{
		//$temp['password'] = $tmp['password'];
	}
	else
	{
		$error = true;
		$msg .= "<li>{$gXpLang['error_password_match']}</li>";
	}
	
	if (!$error)
	{
		
		$gXpDb->editAffiliateAccount($temp);
		$msg .= "<li>".$gXpLang['msg_your_account_modified']."</li>";
	}

	$form = $tmp;

	$msgstyle = $error?'error':'notify';
	
	$msg = "<ul class=\"{$msgstyle}\">{$msg}</ul>";
}

$tpl = 'edit-account.tpl';

$title = $gXpLang['site_title'].' - '.$gXpLang['edit_account'];
$description = $gXpLang['desc_edit_account'];
$keywords = $gXpLang['keyword_edit_account'];

$gXpSmarty->assign_by_ref('description', $description);
$gXpSmarty->assign_by_ref('keywords', $keywords);

$gXpSmarty->assign_by_ref('title', $title);
$gXpSmarty->assign_by_ref('form', $form);
$gXpSmarty->assign_by_ref('msg', $msg);

$gXpSmarty->display("edit-account.tpl");

?>

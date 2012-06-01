<?php
/********************************************
 * @Created on March, 2011 * @Package: Ndotdeals unlimited v2.2 
 * @Author: NDOT
 * @URL : http://www.ndot.in
 ********************************************/

require_once('./init.php');
require_once('header.php');
$gPage = $gXpLang['manage_payment'];
$gPath = '<a href="'.$gXpConfig['xpurl'].'admin/pay-affiliates.php">pay-affiliates</a>&nbsp;&#187;&nbsp;manage-payout';
$gDesc = $gXpLang['commission_details'];

unset($id);
$id = $_GET['id'];

if($_POST['task'] == 'archive')
{
	$r_min = 000000001;
	$r_max = 999999999;
	$uid = mt_rand($r_min, $r_max);

	$data['uid'] = $uid;
	$data['aff_id'] = sql($_POST['id']);
	$data['sales'] = sql($_POST['sales']);
	$data['commission'] = sql($_POST['commission']);

	$gXpAdmin->insertPayment($data);

	$sales = $gXpAdmin->getSales($_POST['id']);
	

	for($i=0;$i<count($sales);$i++)
	{
		$gXpAdmin->archiveSales($sales[$i], $uid);
	}

	$gXpAdmin->deleteSales($_POST['id']);

	//$msg .= $gXpLang['payment_success_archived'];
	set_response_mes(1, $gXpLang['payment_success_archived']); 
	header("Location: pay-affiliates.php");
}
elseif($_POST['task'] == 'cancel')
{
	header("Location: pay-affiliates.php");
}

$buttons = array(
0 => array('name'=>'archive','img'=> $gXpConfig['xpurl'].'admin/images/edit_f2.gif', 'text' => $gXpLang['archive_payment']),
1 => array('name'=>'cancel','img'=> $gXpConfig['xpurl'].'admin/images/cancel_f2.gif', 'text' => $gXpLang['cancel']),
);



$account = $gXpAdmin->getAffiliateById($id);
$commission = $gXpAdmin->getAccountToBePaid($id);
$FRaising = $gXpAdmin->getRaisingFund($id);
//print_r($FRaising);
if($FRaising>1)
{
$sales = $gXpAdmin->getSales($id);

        for($i=0;$i<=count($sales);$i++)
        {
              $com[] = $sales[$i]['payout']; 
        }
        $Commis = array_sum($com);
        
        for($i=0;$i<=count($FRaising);$i++)
        {
                $Ramount[] = $FRaising[$i]['raising_amount']; 
        }
        $Commis = array_sum($com);
        $new_Ramount = array_sum($Ramount);
              /*  $Commis = $new_com -$new_Ramount ;*/
}
else
{
$sales = $gXpAdmin->getSales($id);
}

?>
<script type="text/javascript">
$(document).ready(function(){ 
$(".toggleul_9").slideToggle(); 
document.getElementById("left_menubutton_9").src = "<?php echo DOCROOT; ?>site-admin/images/minus_but.png"; 
});
</script>
<br />
	
<form action="manage-payment.php" method="post" name="adminForm">

		<table class="admintable">
		<tbody><tr>
			<td valign="top" width="60%">
				<table class="adminform">
				<tbody>
				<tr>
					<th colspan="2"><?php echo $gXpLang['affiliate_info']; ?></th>
				</tr>
				<tr>
					<td width="100"><?php echo $gXpLang['affiliate']; ?> ID:</td>
					<td width="85%"><?php echo $account['id'];?></td>
				</tr>
				<tr>
					<td><?php echo $gXpLang['username']; ?>:</td>
					<td>
						<?php echo $account['username'];?>
					</td>
				</tr>
				<tr>
					<td><?php echo $gXpLang['first_name']; ?>:</td>
					<td><?php echo $account['firstname'];?></td>
				</tr>
				<tr>
					<td><?php echo $gXpLang['last_name']; ?>:</td>
					<td><?php echo $account['lastname'];?></td>
				</tr>
				<tr>
					<td><?php echo $gXpLang['phone']; ?>:</td>
					<td><?php echo $account['phone'];?></td>
				</tr>
				<tr>
					<td><?php echo $gXpLang['fax']; ?>:</td>
					<td><?php echo $account['fax'];?></td>
				</tr>
				<tr>
					<td><?php echo $gXpLang['federal_tax']; ?>:</td>
					<td><?php echo $account['taxid'];?></td>
				</tr>

				<tr>
					<td colspan="2">&nbsp;
					</td>
				</tr>

				<tr>
					<th colspan="2"><?php echo $gXpLang['billing_address']; ?></th>
				</tr>
				<tr>
					<td colspan="2"><?php echo $account['firstname'].' '.$account['lastname'];?></td>
					<!--					<td><input class="inputbox" name="fax" size="40" value="<?php echo $account['fax'];?>" type="text" ></td>-->
				</tr>
				<tr>
					<td colspan="2"><?php echo $account['address'];?></td>
				</tr>
				<tr>
					<td colspan="2"><?php echo $account['city'].', '.$account['state'].' - '.$account['zip'].', '.$account['country'];?></td>
				</tr>
				

				<tr>
					<td colspan="2">&nbsp;
					</td>
				</tr>
				</tbody></table>
			</td>
			<td valign="top" width="40%">

		<table class="adminform">
			<tbody>
				<tr>
					<th colspan="2"><?php echo $gXpLang['commissions']; ?></th>
				</tr>
				<tr>
					<td><?php echo $gXpLang['commission']; ?>:</td>
					<td><?php echo format(($commission['Total']*$gXpConfig['payout_percent'])/100);?></td>
				</tr>
				<?php if($new_Ramount){?>
				<tr>
					<td><?php echo 'Raised Fund'; ?>:</td>
					<td><?php echo $new_Ramount;?></td>
				</tr>
				<tr>
					<td><?php echo 'Commission Balance'; ?>:</td>
					<td><?php echo $Commis;?></td>
				</tr>
				<?php } ?>
				<tr>
					<td><?php echo $gXpLang['number_sales']; ?>:</td>
					<td><?php echo $commission['Sales'];?></td>
				</tr>
				<tr style="font-weight: bold;">					
					<th colspan="2"><?php echo $gXpLang['sales_this_payment']; ?>:</th>
				</tr>
				<tr><td colspan=2>
					<div style="height:<?php echo (count($sales)>15? 300: count($sales)*18);?>px;width: auto; overflow: auto;">
						<table class="adminform">
						<tbody>
						<?php
						for($i=0;$i<count($sales);$i++)
						{
							echo "<tr><td>{$sales[$i]['date']}</td><td>{$sales[$i]['payment']}</td></tr>";
							$sale[] = $sales[$i]['payment'];
						}
						$sales_amount = array_sum($sale);
						
						?>
						</tbody>
						</table>
					</div>
				</td></tr>
				<tr style="font-weight: bold;">
					<td><?php echo $gXpLang['earned_commission']; ?>:</td>
					<td><?php if($Commis){echo $Commis;}else{echo format(($commission['Total']*$gXpConfig['payout_percent'])/100);}?></td>
				</tr>
			</tbody>
		</table>

		</td>
		</tr>
		</tbody></table>

		<input name="id" value="<?php echo $_GET['id'];?>" type="hidden" />
		<input name="sales" value="<?php echo $commission['Total'];?>" type="hidden" />
		<input name="commission" value="<?php  if(!$Commis) { echo ($commission['Total']*$gXpConfig['payout_percent'])/100; }else { echo $Commis; }?>" type="hidden" />

		<input name="task" value="" type="hidden" />
</form>
			<table style="width: 100%;">
				<tr>
					<td style="text-align: center;">
					<?php
					if ( $account['paypal_email'] )
					{
					        if($Commis){
					                          $Com = $Commis;
					                }
					                else
					                {
					                          $Com = format(($commission['Total']*$gXpConfig['payout_percent'])/100);
					                }
					?>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target=_blank>
							<input type="hidden" name="no_note" value="1" />
							<input type="hidden" name="amount" value="<?php echo $Com;?>" />
							<input type="hidden" name="item_number" value="<?php echo $account['id'];?>_Affiliate_Payment_<?php echo date("Y-m-d");?>"/>
							<input type="hidden" name="notify_url" value="paypal_ipn.php"/>
							<input type="hidden" name="return" value="<?php echo DOCROOT_A; ?>/admin/paypal_done.php"/>
							<input type="hidden" name="item_name" value="<?php echo $sales_amount;?>_sales_amount on <?php echo $gXpConfig['site'];?> Affiliate Payment"/>
							<input type="hidden" name="business" value="<?php echo $account['paypal_email'];?>">
							<input type="hidden" name="cmd" value="_xclick"/>
							<input type="submit" name="submit" value="Paypal"/>
						</form>
					<? 
					}
					else
					{
					?>
						<font color="#CC0000"><?php echo $gXpLang['PayPal_payment_not_available']; ?></font>
					<?php

					}
					?>
					</td>
				</tr>
</table>
	<!--main part ends-->
	
<?php
require_once('footer.php');
?>

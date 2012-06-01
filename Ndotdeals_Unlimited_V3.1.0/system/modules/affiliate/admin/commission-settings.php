<?php
/********************************************
 * @Created on March, 2011 * @Package: Ndotdeals unlimited v2.2 
 * @Author: NDOT
 * @URL : http://www.ndot.in
 ********************************************/

require_once('./init.php');

$gDesc = $gXpLang['manage_commission_settings'];
$gPage = $gXpLang['commission_settings'];
$gPath = 'commission-settings';

require_once('header.php');
$buttons = array(
				0 => array('name'=>'save','img'=> $gXpConfig['xpurl'].'admin/images/save_f2.gif', 'text' => $gXpLang['save']),
				);

unset($id);
$id = $_GET['id'];

unset($level);

if($_GET['delete'])
{
	$gXpAdmin->deletePayLevel($_GET['delete']);
	//$msg = $gXpLang['msg_payout_level_deleted'];
	set_response_mes(1, $gXpLang['msg_payout_level_deleted']); 
	header("Location: commission-settings.php");
}

if($_POST['task'] == 'save')
{
	foreach($_POST as $key=>$value)
	{
		if( strstr($key,'amt_') )
		{
			$num = substr($key,4);
			$level[$num] = $value;
		}
	}

	for($i=1; $i<=count($level);$i++)
	{
		$gXpAdmin->savePaylevel($i, $level[$i]);
	}
	//$msg = $gXpLang['msg_changes_success_saved'];
	set_response_mes(1, $gXpLang['msg_changes_success_saved']); 
	header("Location: commission-settings.php");
}
elseif($_POST['task'] == 'cancel')
{
	header("Location: index.php");
}
elseif($_POST['task'] == 'add')
{
	$gXpAdmin->addPayLevel($_POST['level'], $_POST['percent']);
	//$msg = $gXpLang['msg_new_payout_level_added'];
	set_response_mes(1, $gXpLang['msg_new_payout_level_added']); 
	header("Location: commission-settings.php");
	
}


$paylevels = $gXpAdmin->getPayLevels();
?>	

<script type="text/javascript">
$(document).ready(function(){ 
$(".toggleul_7").slideToggle(); 
document.getElementById("left_menubutton_7").src = "<?php echo DOCROOT; ?>site-admin/images/minus_but.png"; 
});
</script>


<?php print_box($error, $msg);?>

		<div style="text-align: center; font-size: 13px; font-weight: bold; padding-bottom: 10px;"><?php echo $gXpLang['commissions_settings_percentage']; ?></div>

		<table class="admintable" cellpadding="0" cellspacing="2">
		<tr>
			<td width="40%">
			
				<form action="commission-settings.php" method="post" name="adminForm">
				<fieldset class="field" style="margin-left:10px;">         
                                        <legend class="legend">PAY LEVEL</legend>
					<table cellpadding="0" cellspacing="0" style="width: 100%; text-align: center;">

						<tr>
							<th><?php echo $gXpLang['pay_level']; ?></th>
							<th><span class="fl" ><?php echo $gXpLang['payout_amount']; ?></span></th>
							<th><?php echo $gXpLang['action']; ?></th>
						</tr>
						<tr class="row0">
							<td style="width: 27%; padding: 2px;"><?php echo $gXpLang['default_level']; ?></td>
							<td>
                                <span style="padding:2px 4px 2px 2px; border: 1px solid #A5ACB2; background:#ffffff;margin-top:5px;float:left;"><?php echo $gXpConfig['payout_percent']; ?>.00</span>
                                <span style="margin-left:5px;float:left;line-height:30px;">%</span>
                            </td>
							<td></td>
						</tr>
						<?php
						for($i=0;$i<count($paylevels);$i++)
						{
						?>
						<tr class="row<?php echo ($i%2? 0:1);?>">
							<td style="width: 27%; padding: 5px;"><?php echo $gXpLang['level']; ?> <?php echo $paylevels[$i]['level'];?></td>
							<td align="left"><input name="amt_<?php echo $paylevels[$i]['level'];?>" type="text" size="3" value="<?php echo $paylevels[$i]['amt'];?>"/>%</td>
							<td><a href="commission-settings.php?delete=<?php echo $paylevels[$i]['id'];?>" ><?php echo $gXpLang['small_delete']; ?></a></td>
						</tr>
						<?php
						}
						?>
					</table>
					</fieldset>

					<input name="id" value="<?php echo $_GET['id'];?>" type="hidden" />
					<input name="sales" value="<?php echo $commission['Total'];?>" type="hidden" />
					<input name="commission" value="<?php echo ($commission['Total']*$gXpConfig['payout_percent'])/100;?>" type="hidden" />
					<input name="task" value="" type="hidden" />
	
				</form>

			<fieldset class="field" style="margin-left:10px;">         
                        <legend class="legend">COMMISSION SETTING</legend>
				<table class="adminform" style="width: 100%; padding: 0; margin: 0;" cellpadding="0" cellspacing="0">
				
				<tr>
					<th colspan="3"><?php echo $gXpLang['add_payout_level']; ?></th>
				</tr>
				<tr>
					<td colspan="3">
					
						<form action="commission-settings.php" method="post">
						
						<table cellpadding="0" cellspacing="0" style="width: 100%; padding: 0; margin: 0;">
							<tr class="row0">
								<td style="width: 27%; padding: 5px;"><?php echo $gXpLang['payout_level']; ?></td>
								<td>
									<select name="level">
									<?php
									$max = $gXpAdmin->getMaxPaylevel();
									for($i = ++$max;$i<16;$i++)
									{
										echo '<option value="'.$i.'">'.$i.'</option>';
									}
									?>
									</select>
								</td>
							</tr>
							<tr class="row1">
								<td style="padding: 5px;"><?php echo $gXpLang['payout_percentage']; ?></td>
								<td>
									<select name="percent">
									<?php
									$max_percent = $gXpAdmin->getMaxPercent();
									for($i = 1;$i<101;$i++)
									{
										$selected = ($i == $max_percent + 10) ? 'selected' : '' ;
										echo '<option value="'.$i.'" '.$selected.'>'.$i.'%</option>';
									}
									?>
									</select>
								</td>
							</tr></fieldset>
							<tr>
								<td colspan="2">&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="hidden" name="task" value="add" />
									<input type="submit" value="<?php echo $gXpLang['add']; ?>"/>
								</td>
							</tr>
						</table>
						</form>
					</td>
				</tr>
		</table>
		</td>
		
		<!--<td style="width: 60%; vertical-align: top; padding: 0;">

		<table class="adminform" cellpadding="0" cellspacing="0">
			
				<tr>
					<th colspan="2"><?php echo $gXpLang['additional_info']; ?></th>
				</tr>
				<tr>
					<td><?php echo $gXpLang['info_payout_percentage']; ?>
					</td>
				</tr>
			
		</table>

		</td>-->
		</tr>
		</table>

	<!--main part ends-->
	
<?php
require_once('footer.php');	
?>

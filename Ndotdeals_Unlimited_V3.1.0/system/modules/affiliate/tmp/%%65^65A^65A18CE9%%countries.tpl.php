<?php /* Smarty version 2.6.14, created on 2012-04-11 11:08:23
         compiled from countries.tpl */ ?>
<?php if ($_POST['country']): ?>
	<?php $this->assign('country_data', $_POST['country']); ?>
<?php else: ?>
	<?php $this->assign('country_data', $this->_tpl_vars['aff']['country']); ?>
<?php endif; ?>
<select name="country"><option value=""><?php echo $this->_tpl_vars['lang']['please_select']; ?>
</option><option value="1" <?php if ($this->_tpl_vars['country_data'] == 1): ?>selected="selected"<?php endif; ?>>Afghanistan</option><option value="2" <?php if ($this->_tpl_vars['country_data'] == 2): ?>selected="selected"<?php endif; ?>>Albania</option><option value="3" <?php if ($this->_tpl_vars['country_data'] == 3): ?>selected="selected"<?php endif; ?>>Algeria</option><option value="4" <?php if ($this->_tpl_vars['country_data'] == 4): ?>selected="selected"<?php endif; ?>>American Samoa</option><option value="5" <?php if ($this->_tpl_vars['country_data'] == 5): ?>selected="selected"<?php endif; ?>>Andorra</option><option value="6" <?php if ($this->_tpl_vars['country_data'] == 6): ?>selected="selected"<?php endif; ?>>Angola</option><option value="7" <?php if ($this->_tpl_vars['country_data'] == 7): ?>selected="selected"<?php endif; ?>>Anguilla</option><option value="8" <?php if ($this->_tpl_vars['country_data'] == 8): ?>selected="selected"<?php endif; ?>>Antarctica</option><option value="9" <?php if ($this->_tpl_vars['country_data'] == 9): ?>selected="selected"<?php endif; ?>>Antigua and Barbuda</option><option value="10" <?php if ($this->_tpl_vars['country_data'] == 10): ?>selected="selected"<?php endif; ?>>Argentina</option><option value="11" <?php if ($this->_tpl_vars['country_data'] == 11): ?>selected="selected"<?php endif; ?>>Armenia</option><option value="12" <?php if ($this->_tpl_vars['country_data'] == 12): ?>selected="selected"<?php endif; ?>>Aruba</option><option value="13" <?php if ($this->_tpl_vars['country_data'] == 13): ?>selected="selected"<?php endif; ?>>Australia</option><option value="14" <?php if ($this->_tpl_vars['country_data'] == 14): ?>selected="selected"<?php endif; ?>>Austria</option><option value="15" <?php if ($this->_tpl_vars['country_data'] == 15): ?>selected="selected"<?php endif; ?>>Azerbaijan</option><option value="16" <?php if ($this->_tpl_vars['country_data'] == 16): ?>selected="selected"<?php endif; ?>>Bahamas</option><option value="17" <?php if ($this->_tpl_vars['country_data'] == 17): ?>selected="selected"<?php endif; ?>>Bahrain</option><option value="18" <?php if ($this->_tpl_vars['country_data'] == 18): ?>selected="selected"<?php endif; ?>>Bangladesh</option><option value="19" <?php if ($this->_tpl_vars['country_data'] == 19): ?>selected="selected"<?php endif; ?>>Barbados</option><option value="20" <?php if ($this->_tpl_vars['country_data'] == 20): ?>selected="selected"<?php endif; ?>>Belarus</option><option value="21" <?php if ($this->_tpl_vars['country_data'] == 21): ?>selected="selected"<?php endif; ?>>Belgium</option><option value="22" <?php if ($this->_tpl_vars['country_data'] == 22): ?>selected="selected"<?php endif; ?>>Belize</option><option value="23" <?php if ($this->_tpl_vars['country_data'] == 23): ?>selected="selected"<?php endif; ?>>Benin</option><option value="24" <?php if ($this->_tpl_vars['country_data'] == 24): ?>selected="selected"<?php endif; ?>>Bermuda</option><option value="25" <?php if ($this->_tpl_vars['country_data'] == 25): ?>selected="selected"<?php endif; ?>>Bhutan</option><option value="26" <?php if ($this->_tpl_vars['country_data'] == 26): ?>selected="selected"<?php endif; ?>>Bolivia</option><option value="27" <?php if ($this->_tpl_vars['country_data'] == 27): ?>selected="selected"<?php endif; ?>>Bosnia and Herzegowina</option><option value="28" <?php if ($this->_tpl_vars['country_data'] == 28): ?>selected="selected"<?php endif; ?>>Botswana</option><option value="29" <?php if ($this->_tpl_vars['country_data'] == 29): ?>selected="selected"<?php endif; ?>>Bouvet Island</option><option value="30" <?php if ($this->_tpl_vars['country_data'] == 30): ?>selected="selected"<?php endif; ?>>Brazil</option><option value="31" <?php if ($this->_tpl_vars['country_data'] == 31): ?>selected="selected"<?php endif; ?>>British Indian Ocean Territory</option><option value="32" <?php if ($this->_tpl_vars['country_data'] == 32): ?>selected="selected"<?php endif; ?>>Brunei Darussalam</option><option value="33" <?php if ($this->_tpl_vars['country_data'] == 33): ?>selected="selected"<?php endif; ?>>Bulgaria</option><option value="34" <?php if ($this->_tpl_vars['country_data'] == 34): ?>selected="selected"<?php endif; ?>>Burkina Faso</option><option value="35" <?php if ($this->_tpl_vars['country_data'] == 35): ?>selected="selected"<?php endif; ?>>Burundi</option><option value="36" <?php if ($this->_tpl_vars['country_data'] == 36): ?>selected="selected"<?php endif; ?>>Cambodia</option><option value="37" <?php if ($this->_tpl_vars['country_data'] == 37): ?>selected="selected"<?php endif; ?>>Cameroon</option><option value="38" <?php if ($this->_tpl_vars['country_data'] == 38): ?>selected="selected"<?php endif; ?>>Canada</option><option value="39" <?php if ($this->_tpl_vars['country_data'] == 39): ?>selected="selected"<?php endif; ?>>Cape Verde</option><option value="40" <?php if ($this->_tpl_vars['country_data'] == 40): ?>selected="selected"<?php endif; ?>>Cayman Islands</option><option value="41" <?php if ($this->_tpl_vars['country_data'] == 41): ?>selected="selected"<?php endif; ?>>Central African Republic</option><option value="42" <?php if ($this->_tpl_vars['country_data'] == 42): ?>selected="selected"<?php endif; ?>>Chad</option><option value="43" <?php if ($this->_tpl_vars['country_data'] == 43): ?>selected="selected"<?php endif; ?>>Chile</option><option value="44" <?php if ($this->_tpl_vars['country_data'] == 44): ?>selected="selected"<?php endif; ?>>China</option><option value="45" <?php if ($this->_tpl_vars['country_data'] == 45): ?>selected="selected"<?php endif; ?>>Christmas Island</option><option value="46" <?php if ($this->_tpl_vars['country_data'] == 46): ?>selected="selected"<?php endif; ?>>Cocos (Keeling) Islands</option><option value="47" <?php if ($this->_tpl_vars['country_data'] == 47): ?>selected="selected"<?php endif; ?>>Colombia</option><option value="48" <?php if ($this->_tpl_vars['country_data'] == 48): ?>selected="selected"<?php endif; ?>>Comoros</option><option value="49" <?php if ($this->_tpl_vars['country_data'] == 49): ?>selected="selected"<?php endif; ?>>Congo</option><option value="50" <?php if ($this->_tpl_vars['country_data'] == 50): ?>selected="selected"<?php endif; ?>>Cook Islands</option><option value="51" <?php if ($this->_tpl_vars['country_data'] == 51): ?>selected="selected"<?php endif; ?>>Costa Rica</option><option value="52" <?php if ($this->_tpl_vars['country_data'] == 52): ?>selected="selected"<?php endif; ?>>Cote D'Ivoire</option><option value="53" <?php if ($this->_tpl_vars['country_data'] == 53): ?>selected="selected"<?php endif; ?>>Croatia</option><option value="54" <?php if ($this->_tpl_vars['country_data'] == 54): ?>selected="selected"<?php endif; ?>>Cuba</option><option value="55" <?php if ($this->_tpl_vars['country_data'] == 55): ?>selected="selected"<?php endif; ?>>Cyprus</option><option value="56" <?php if ($this->_tpl_vars['country_data'] == 56): ?>selected="selected"<?php endif; ?>>Czech Republic</option><option value="57" <?php if ($this->_tpl_vars['country_data'] == 57): ?>selected="selected"<?php endif; ?>>Denmark</option><option value="58" <?php if ($this->_tpl_vars['country_data'] == 58): ?>selected="selected"<?php endif; ?>>Djibouti</option><option value="59" <?php if ($this->_tpl_vars['country_data'] == 59): ?>selected="selected"<?php endif; ?>>Dominica</option><option value="60" <?php if ($this->_tpl_vars['country_data'] == 60): ?>selected="selected"<?php endif; ?>>Dominican Republic</option><option value="61" <?php if ($this->_tpl_vars['country_data'] == 61): ?>selected="selected"<?php endif; ?>>East Timor</option><option value="62" <?php if ($this->_tpl_vars['country_data'] == 62): ?>selected="selected"<?php endif; ?>>Ecuador</option><option value="63" <?php if ($this->_tpl_vars['country_data'] == 63): ?>selected="selected"<?php endif; ?>>Egypt</option><option value="64" <?php if ($this->_tpl_vars['country_data'] == 64): ?>selected="selected"<?php endif; ?>>El Salvador</option><option value="65" <?php if ($this->_tpl_vars['country_data'] == 65): ?>selected="selected"<?php endif; ?>>Equatorial Guinea</option><option value="66" <?php if ($this->_tpl_vars['country_data'] == 66): ?>selected="selected"<?php endif; ?>>Eritrea</option><option value="67" <?php if ($this->_tpl_vars['country_data'] == 67): ?>selected="selected"<?php endif; ?>>Estonia</option><option value="68" <?php if ($this->_tpl_vars['country_data'] == 68): ?>selected="selected"<?php endif; ?>>Ethiopia</option><option value="69" <?php if ($this->_tpl_vars['country_data'] == 69): ?>selected="selected"<?php endif; ?>>Falkland Islands (Malvinas)</option><option value="70" <?php if ($this->_tpl_vars['country_data'] == 70): ?>selected="selected"<?php endif; ?>>Faroe Islands</option><option value="71" <?php if ($this->_tpl_vars['country_data'] == 71): ?>selected="selected"<?php endif; ?>>Fiji</option><option value="72" <?php if ($this->_tpl_vars['country_data'] == 72): ?>selected="selected"<?php endif; ?>>Finland</option><option value="73" <?php if ($this->_tpl_vars['country_data'] == 73): ?>selected="selected"<?php endif; ?>>France</option><option value="74" <?php if ($this->_tpl_vars['country_data'] == 74): ?>selected="selected"<?php endif; ?>>France, Metropolitan</option><option value="75" <?php if ($this->_tpl_vars['country_data'] == 75): ?>selected="selected"<?php endif; ?>>French Guiana</option><option value="76" <?php if ($this->_tpl_vars['country_data'] == 76): ?>selected="selected"<?php endif; ?>>French Polynesia</option><option value="77" <?php if ($this->_tpl_vars['country_data'] == 77): ?>selected="selected"<?php endif; ?>>French Southern Territories</option><option value="78" <?php if ($this->_tpl_vars['country_data'] == 78): ?>selected="selected"<?php endif; ?>>Gabon</option><option value="79" <?php if ($this->_tpl_vars['country_data'] == 79): ?>selected="selected"<?php endif; ?>>Gambia</option><option value="80" <?php if ($this->_tpl_vars['country_data'] == 80): ?>selected="selected"<?php endif; ?>>Georgia</option><option value="81" <?php if ($this->_tpl_vars['country_data'] == 81): ?>selected="selected"<?php endif; ?>>Germany</option><option value="82" <?php if ($this->_tpl_vars['country_data'] == 82): ?>selected="selected"<?php endif; ?>>Ghana</option><option value="83" <?php if ($this->_tpl_vars['country_data'] == 83): ?>selected="selected"<?php endif; ?>>Gibraltar</option><option value="84" <?php if ($this->_tpl_vars['country_data'] == 84): ?>selected="selected"<?php endif; ?>>Greece</option><option value="85" <?php if ($this->_tpl_vars['country_data'] == 85): ?>selected="selected"<?php endif; ?>>Greenland</option><option value="86" <?php if ($this->_tpl_vars['country_data'] == 86): ?>selected="selected"<?php endif; ?>>Grenada</option><option value="87" <?php if ($this->_tpl_vars['country_data'] == 87): ?>selected="selected"<?php endif; ?>>Guadeloupe</option><option value="88" <?php if ($this->_tpl_vars['country_data'] == 88): ?>selected="selected"<?php endif; ?>>Guam</option><option value="89" <?php if ($this->_tpl_vars['country_data'] == 89): ?>selected="selected"<?php endif; ?>>Guatemala</option><option value="90" <?php if ($this->_tpl_vars['country_data'] == 90): ?>selected="selected"<?php endif; ?>>Guinea</option><option value="91" <?php if ($this->_tpl_vars['country_data'] == 91): ?>selected="selected"<?php endif; ?>>Guinea-bissau</option><option value="92" <?php if ($this->_tpl_vars['country_data'] == 92): ?>selected="selected"<?php endif; ?>>Guyana</option><option value="93" <?php if ($this->_tpl_vars['country_data'] == 93): ?>selected="selected"<?php endif; ?>>Haiti</option><option value="94" <?php if ($this->_tpl_vars['country_data'] == 94): ?>selected="selected"<?php endif; ?>>Heard and Mc Donald Islands</option><option value="95" <?php if ($this->_tpl_vars['country_data'] == 95): ?>selected="selected"<?php endif; ?>>Honduras</option><option value="96" <?php if ($this->_tpl_vars['country_data'] == 96): ?>selected="selected"<?php endif; ?>>Hong Kong</option><option value="97" <?php if ($this->_tpl_vars['country_data'] == 97): ?>selected="selected"<?php endif; ?>>Hungary</option><option value="98" <?php if ($this->_tpl_vars['country_data'] == 98): ?>selected="selected"<?php endif; ?>>Iceland</option><option value="99" <?php if ($this->_tpl_vars['country_data'] == 99): ?>selected="selected"<?php endif; ?>>India</option><option value="100" <?php if ($this->_tpl_vars['country_data'] == 100): ?>selected="selected"<?php endif; ?>>Indonesia</option><option value="101" <?php if ($this->_tpl_vars['country_data'] == 101): ?>selected="selected"<?php endif; ?>>Iran (Islamic Republic of)</option><option value="102" <?php if ($this->_tpl_vars['country_data'] == 102): ?>selected="selected"<?php endif; ?>>Iraq</option><option value="103" <?php if ($this->_tpl_vars['country_data'] == 103): ?>selected="selected"<?php endif; ?>>Ireland</option><option value="104" <?php if ($this->_tpl_vars['country_data'] == 104): ?>selected="selected"<?php endif; ?>>Israel</option><option value="105" <?php if ($this->_tpl_vars['country_data'] == 105): ?>selected="selected"<?php endif; ?>>Italy</option><option value="106" <?php if ($this->_tpl_vars['country_data'] == 106): ?>selected="selected"<?php endif; ?>>Jamaica</option><option value="107" <?php if ($this->_tpl_vars['country_data'] == 107): ?>selected="selected"<?php endif; ?>>Japan</option><option value="108" <?php if ($this->_tpl_vars['country_data'] == 108): ?>selected="selected"<?php endif; ?>>Jordan</option><option value="109" <?php if ($this->_tpl_vars['country_data'] == 109): ?>selected="selected"<?php endif; ?>>Kazakhstan</option><option value="110" <?php if ($this->_tpl_vars['country_data'] == 110): ?>selected="selected"<?php endif; ?>>Kenya</option><option value="111" <?php if ($this->_tpl_vars['country_data'] == 111): ?>selected="selected"<?php endif; ?>>Kiribati</option><option value="112" <?php if ($this->_tpl_vars['country_data'] == 112): ?>selected="selected"<?php endif; ?>>Korea, Democratic People's Republic of</option><option value="113" <?php if ($this->_tpl_vars['country_data'] == 113): ?>selected="selected"<?php endif; ?>>Korea, Republic of</option><option value="114" <?php if ($this->_tpl_vars['country_data'] == 114): ?>selected="selected"<?php endif; ?>>Kuwait</option><option value="115" <?php if ($this->_tpl_vars['country_data'] == 115): ?>selected="selected"<?php endif; ?>>Kyrgyzstan</option><option value="116" <?php if ($this->_tpl_vars['country_data'] == 116): ?>selected="selected"<?php endif; ?>>Lao People's Democratic Republic</option><option value="117" <?php if ($this->_tpl_vars['country_data'] == 117): ?>selected="selected"<?php endif; ?>>Latvia</option><option value="118" <?php if ($this->_tpl_vars['country_data'] == 118): ?>selected="selected"<?php endif; ?>>Lebanon</option><option value="119" <?php if ($this->_tpl_vars['country_data'] == 119): ?>selected="selected"<?php endif; ?>>Lesotho</option><option value="120" <?php if ($this->_tpl_vars['country_data'] == 120): ?>selected="selected"<?php endif; ?>>Liberia</option><option value="121" <?php if ($this->_tpl_vars['country_data'] == 121): ?>selected="selected"<?php endif; ?>>Libyan Arab Jamahiriya</option><option value="122" <?php if ($this->_tpl_vars['country_data'] == 122): ?>selected="selected"<?php endif; ?>>Liechtenstein</option><option value="123" <?php if ($this->_tpl_vars['country_data'] == 123): ?>selected="selected"<?php endif; ?>>Lithuania</option><option value="124" <?php if ($this->_tpl_vars['country_data'] == 124): ?>selected="selected"<?php endif; ?>>Luxembourg</option><option value="125" <?php if ($this->_tpl_vars['country_data'] == 125): ?>selected="selected"<?php endif; ?>>Macau</option><option value="126" <?php if ($this->_tpl_vars['country_data'] == 126): ?>selected="selected"<?php endif; ?>>Macedonia, The Former Yugoslav Republic of</option><option value="127" <?php if ($this->_tpl_vars['country_data'] == 127): ?>selected="selected"<?php endif; ?>>Madagascar</option><option value="128" <?php if ($this->_tpl_vars['country_data'] == 128): ?>selected="selected"<?php endif; ?>>Malawi</option><option value="129" <?php if ($this->_tpl_vars['country_data'] == 129): ?>selected="selected"<?php endif; ?>>Malaysia</option><option value="130" <?php if ($this->_tpl_vars['country_data'] == 130): ?>selected="selected"<?php endif; ?>>Maldives</option><option value="131" <?php if ($this->_tpl_vars['country_data'] == 131): ?>selected="selected"<?php endif; ?>>Mali</option><option value="132" <?php if ($this->_tpl_vars['country_data'] == 132): ?>selected="selected"<?php endif; ?>>Malta</option><option value="133" <?php if ($this->_tpl_vars['country_data'] == 133): ?>selected="selected"<?php endif; ?>>Marshall Islands</option><option value="134" <?php if ($this->_tpl_vars['country_data'] == 134): ?>selected="selected"<?php endif; ?>>Martinique</option><option value="135" <?php if ($this->_tpl_vars['country_data'] == 135): ?>selected="selected"<?php endif; ?>>Mauritania</option><option value="136" <?php if ($this->_tpl_vars['country_data'] == 136): ?>selected="selected"<?php endif; ?>>Mauritius</option><option value="137" <?php if ($this->_tpl_vars['country_data'] == 137): ?>selected="selected"<?php endif; ?>>Mayotte</option><option value="138" <?php if ($this->_tpl_vars['country_data'] == 138): ?>selected="selected"<?php endif; ?>>Mexico</option><option value="139" <?php if ($this->_tpl_vars['country_data'] == 139): ?>selected="selected"<?php endif; ?>>Micronesia, Federated States of</option><option value="140" <?php if ($this->_tpl_vars['country_data'] == 140): ?>selected="selected"<?php endif; ?>>Moldova, Republic of</option><option value="141" <?php if ($this->_tpl_vars['country_data'] == 141): ?>selected="selected"<?php endif; ?>>Monaco</option><option value="142" <?php if ($this->_tpl_vars['country_data'] == 142): ?>selected="selected"<?php endif; ?>>Mongolia</option><option value="143" <?php if ($this->_tpl_vars['country_data'] == 143): ?>selected="selected"<?php endif; ?>>Montserrat</option><option value="144" <?php if ($this->_tpl_vars['country_data'] == 144): ?>selected="selected"<?php endif; ?>>Morocco</option><option value="145" <?php if ($this->_tpl_vars['country_data'] == 145): ?>selected="selected"<?php endif; ?>>Mozambique</option><option value="146" <?php if ($this->_tpl_vars['country_data'] == 146): ?>selected="selected"<?php endif; ?>>Myanmar</option><option value="147" <?php if ($this->_tpl_vars['country_data'] == 147): ?>selected="selected"<?php endif; ?>>Namibia</option><option value="148" <?php if ($this->_tpl_vars['country_data'] == 148): ?>selected="selected"<?php endif; ?>>Nauru</option><option value="149" <?php if ($this->_tpl_vars['country_data'] == 149): ?>selected="selected"<?php endif; ?>>Nepal</option><option value="150" <?php if ($this->_tpl_vars['country_data'] == 150): ?>selected="selected"<?php endif; ?>>Netherlands</option><option value="151" <?php if ($this->_tpl_vars['country_data'] == 151): ?>selected="selected"<?php endif; ?>>Netherlands Antilles</option><option value="152" <?php if ($this->_tpl_vars['country_data'] == 152): ?>selected="selected"<?php endif; ?>>New Caledonia</option><option value="153" <?php if ($this->_tpl_vars['country_data'] == 153): ?>selected="selected"<?php endif; ?>>New Zealand</option><option value="154" <?php if ($this->_tpl_vars['country_data'] == 154): ?>selected="selected"<?php endif; ?>>Nicaragua</option><option value="155" <?php if ($this->_tpl_vars['country_data'] == 155): ?>selected="selected"<?php endif; ?>>Niger</option><option value="156" <?php if ($this->_tpl_vars['country_data'] == 156): ?>selected="selected"<?php endif; ?>>Nigeria</option><option value="157" <?php if ($this->_tpl_vars['country_data'] == 157): ?>selected="selected"<?php endif; ?>>Niue</option><option value="158" <?php if ($this->_tpl_vars['country_data'] == 158): ?>selected="selected"<?php endif; ?>>Norfolk Island</option><option value="159" <?php if ($this->_tpl_vars['country_data'] == 159): ?>selected="selected"<?php endif; ?>>Northern Mariana Islands</option><option value="160" <?php if ($this->_tpl_vars['country_data'] == 160): ?>selected="selected"<?php endif; ?>>Norway</option><option value="161" <?php if ($this->_tpl_vars['country_data'] == 161): ?>selected="selected"<?php endif; ?>>Oman</option><option value="162" <?php if ($this->_tpl_vars['country_data'] == 162): ?>selected="selected"<?php endif; ?>>Pakistan</option><option value="163" <?php if ($this->_tpl_vars['country_data'] == 163): ?>selected="selected"<?php endif; ?>>Palau</option><option value="164" <?php if ($this->_tpl_vars['country_data'] == 164): ?>selected="selected"<?php endif; ?>>Panama</option><option value="165" <?php if ($this->_tpl_vars['country_data'] == 165): ?>selected="selected"<?php endif; ?>>Papua New Guinea</option><option value="166" <?php if ($this->_tpl_vars['country_data'] == 166): ?>selected="selected"<?php endif; ?>>Paraguay</option><option value="167" <?php if ($this->_tpl_vars['country_data'] == 167): ?>selected="selected"<?php endif; ?>>Peru</option><option value="168" <?php if ($this->_tpl_vars['country_data'] == 168): ?>selected="selected"<?php endif; ?>>Philippines</option><option value="169" <?php if ($this->_tpl_vars['country_data'] == 169): ?>selected="selected"<?php endif; ?>>Pitcairn</option><option value="170" <?php if ($this->_tpl_vars['country_data'] == 170): ?>selected="selected"<?php endif; ?>>Poland</option><option value="171" <?php if ($this->_tpl_vars['country_data'] == 171): ?>selected="selected"<?php endif; ?>>Portugal</option><option value="172" <?php if ($this->_tpl_vars['country_data'] == 172): ?>selected="selected"<?php endif; ?>>Puerto Rico</option><option value="173" <?php if ($this->_tpl_vars['country_data'] == 173): ?>selected="selected"<?php endif; ?>>Qatar</option><option value="174" <?php if ($this->_tpl_vars['country_data'] == 174): ?>selected="selected"<?php endif; ?>>Reunion</option><option value="175" <?php if ($this->_tpl_vars['country_data'] == 175): ?>selected="selected"<?php endif; ?>>Romania</option><option value="176" <?php if ($this->_tpl_vars['country_data'] == 176): ?>selected="selected"<?php endif; ?>>Russian Federation</option><option value="177" <?php if ($this->_tpl_vars['country_data'] == 177): ?>selected="selected"<?php endif; ?>>Rwanda</option><option value="178" <?php if ($this->_tpl_vars['country_data'] == 178): ?>selected="selected"<?php endif; ?>>Saint Kitts and Nevis</option><option value="179" <?php if ($this->_tpl_vars['country_data'] == 179): ?>selected="selected"<?php endif; ?>>Saint Lucia</option><option value="180" <?php if ($this->_tpl_vars['country_data'] == 180): ?>selected="selected"<?php endif; ?>>Saint Vincent and the Grenadines</option><option value="181" <?php if ($this->_tpl_vars['country_data'] == 181): ?>selected="selected"<?php endif; ?>>Samoa</option><option value="182" <?php if ($this->_tpl_vars['country_data'] == 182): ?>selected="selected"<?php endif; ?>>San Marino</option><option value="183" <?php if ($this->_tpl_vars['country_data'] == 183): ?>selected="selected"<?php endif; ?>>Sao Tome and Principe</option><option value="184" <?php if ($this->_tpl_vars['country_data'] == 184): ?>selected="selected"<?php endif; ?>>Saudi Arabia</option><option value="185" <?php if ($this->_tpl_vars['country_data'] == 185): ?>selected="selected"<?php endif; ?>>Senegal</option><option value="186" <?php if ($this->_tpl_vars['country_data'] == 186): ?>selected="selected"<?php endif; ?>>Seychelles</option><option value="187" <?php if ($this->_tpl_vars['country_data'] == 187): ?>selected="selected"<?php endif; ?>>Sierra Leone</option><option value="188" <?php if ($this->_tpl_vars['country_data'] == 188): ?>selected="selected"<?php endif; ?>>Singapore</option><option value="189" <?php if ($this->_tpl_vars['country_data'] == 189): ?>selected="selected"<?php endif; ?>>Slovakia (Slovak Republic)</option><option value="190" <?php if ($this->_tpl_vars['country_data'] == 190): ?>selected="selected"<?php endif; ?>>Slovenia</option><option value="191" <?php if ($this->_tpl_vars['country_data'] == 191): ?>selected="selected"<?php endif; ?>>Solomon Islands</option><option value="192" <?php if ($this->_tpl_vars['country_data'] == 192): ?>selected="selected"<?php endif; ?>>Somalia</option><option value="193" <?php if ($this->_tpl_vars['country_data'] == 193): ?>selected="selected"<?php endif; ?>>South Africa</option><option value="194" <?php if ($this->_tpl_vars['country_data'] == 194): ?>selected="selected"<?php endif; ?>>South Georgia and the South Sandwich Islands</option><option value="195" <?php if ($this->_tpl_vars['country_data'] == 195): ?>selected="selected"<?php endif; ?>>Spain</option><option value="196" <?php if ($this->_tpl_vars['country_data'] == 196): ?>selected="selected"<?php endif; ?>>Sri Lanka</option><option value="197" <?php if ($this->_tpl_vars['country_data'] == 197): ?>selected="selected"<?php endif; ?>>St. Helena</option><option value="198" <?php if ($this->_tpl_vars['country_data'] == 198): ?>selected="selected"<?php endif; ?>>St. Pierre and Miquelon</option><option value="199" <?php if ($this->_tpl_vars['country_data'] == 199): ?>selected="selected"<?php endif; ?>>Sudan</option><option value="200" <?php if ($this->_tpl_vars['country_data'] == 200): ?>selected="selected"<?php endif; ?>>Suriname</option><option value="201" <?php if ($this->_tpl_vars['country_data'] == 201): ?>selected="selected"<?php endif; ?>>Svalbard and Jan Mayen Islands</option><option value="202" <?php if ($this->_tpl_vars['country_data'] == 202): ?>selected="selected"<?php endif; ?>>Swaziland</option><option value="203" <?php if ($this->_tpl_vars['country_data'] == 203): ?>selected="selected"<?php endif; ?>>Sweden</option><option value="204" <?php if ($this->_tpl_vars['country_data'] == 204): ?>selected="selected"<?php endif; ?>>Switzerland</option><option value="205" <?php if ($this->_tpl_vars['country_data'] == 205): ?>selected="selected"<?php endif; ?>>Syrian Arab Republic</option><option value="206" <?php if ($this->_tpl_vars['country_data'] == 206): ?>selected="selected"<?php endif; ?>>Taiwan</option><option value="207" <?php if ($this->_tpl_vars['country_data'] == 207): ?>selected="selected"<?php endif; ?>>Tajikistan</option><option value="208" <?php if ($this->_tpl_vars['country_data'] == 208): ?>selected="selected"<?php endif; ?>>Tanzania, United Republic of</option><option value="209" <?php if ($this->_tpl_vars['country_data'] == 209): ?>selected="selected"<?php endif; ?>>Thailand</option><option value="210" <?php if ($this->_tpl_vars['country_data'] == 210): ?>selected="selected"<?php endif; ?>>Togo</option><option value="211" <?php if ($this->_tpl_vars['country_data'] == 211): ?>selected="selected"<?php endif; ?>>Tokelau</option><option value="212" <?php if ($this->_tpl_vars['country_data'] == 212): ?>selected="selected"<?php endif; ?>>Tonga</option><option value="213" <?php if ($this->_tpl_vars['country_data'] == 213): ?>selected="selected"<?php endif; ?>>Trinidad and Tobago</option><option value="214" <?php if ($this->_tpl_vars['country_data'] == 214): ?>selected="selected"<?php endif; ?>>Tunisia</option><option value="215" <?php if ($this->_tpl_vars['country_data'] == 215): ?>selected="selected"<?php endif; ?>>Turkey</option><option value="216" <?php if ($this->_tpl_vars['country_data'] == 216): ?>selected="selected"<?php endif; ?>>Turkmenistan</option><option value="217" <?php if ($this->_tpl_vars['country_data'] == 217): ?>selected="selected"<?php endif; ?>>Turks and Caicos Islands</option><option value="218" <?php if ($this->_tpl_vars['country_data'] == 218): ?>selected="selected"<?php endif; ?>>Tuvalu</option><option value="219" <?php if ($this->_tpl_vars['country_data'] == 219): ?>selected="selected"<?php endif; ?>>Uganda</option><option value="220" <?php if ($this->_tpl_vars['country_data'] == 220): ?>selected="selected"<?php endif; ?>>Ukraine</option><option value="221" <?php if ($this->_tpl_vars['country_data'] == 221): ?>selected="selected"<?php endif; ?>>United Arab Emirates</option><option value="222" <?php if ($this->_tpl_vars['country_data'] == 222): ?>selected="selected"<?php endif; ?>>United Kingdom</option><option value="223" <?php if ($this->_tpl_vars['country_data'] == 223): ?>selected="selected"<?php endif; ?>>United States</option><option value="224" <?php if ($this->_tpl_vars['country_data'] == 224): ?>selected="selected"<?php endif; ?>>United States Minor Outlying Islands</option><option value="225" <?php if ($this->_tpl_vars['country_data'] == 225): ?>selected="selected"<?php endif; ?>>Uruguay</option><option value="226" <?php if ($this->_tpl_vars['country_data'] == 226): ?>selected="selected"<?php endif; ?>>Uzbekistan</option><option value="227" <?php if ($this->_tpl_vars['country_data'] == 227): ?>selected="selected"<?php endif; ?>>Vanuatu</option><option value="228" <?php if ($this->_tpl_vars['country_data'] == 228): ?>selected="selected"<?php endif; ?>>Vatican City State (Holy See)</option><option value="229" <?php if ($this->_tpl_vars['country_data'] == 229): ?>selected="selected"<?php endif; ?>>Venezuela</option><option value="230" <?php if ($this->_tpl_vars['country_data'] == 230): ?>selected="selected"<?php endif; ?>>Viet Nam</option><option value="231" <?php if ($this->_tpl_vars['country_data'] == 231): ?>selected="selected"<?php endif; ?>>Virgin Islands (British)</option><option value="232" <?php if ($this->_tpl_vars['country_data'] == 232): ?>selected="selected"<?php endif; ?>>Virgin Islands (U.S.)</option><option value="233" <?php if ($this->_tpl_vars['country_data'] == 233): ?>selected="selected"<?php endif; ?>>Wallis and Futuna Islands</option><option value="234" <?php if ($this->_tpl_vars['country_data'] == 234): ?>selected="selected"<?php endif; ?>>Western Sahara</option><option value="235" <?php if ($this->_tpl_vars['country_data'] == 235): ?>selected="selected"<?php endif; ?>>Yemen</option><option value="236" <?php if ($this->_tpl_vars['country_data'] == 236): ?>selected="selected"<?php endif; ?>>Yugoslavia</option><option value="237" <?php if ($this->_tpl_vars['country_data'] == 237): ?>selected="selected"<?php endif; ?>>Zaire</option><option value="238" <?php if ($this->_tpl_vars['country_data'] == 238): ?>selected="selected"<?php endif; ?>>Zambia</option><option value="239" <?php if ($this->_tpl_vars['country_data'] == 239): ?>selected="selected"<?php endif; ?>>Zimbabwe</option></select>&nbsp;

<!--<span class="inputRequirement">*</span>-->
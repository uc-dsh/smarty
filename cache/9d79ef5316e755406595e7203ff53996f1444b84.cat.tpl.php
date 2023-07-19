<?php
/* Smarty version 4.3.1, created on 2023-07-19 17:48:41
  from 'C:\xampp\htdocs\UCERTIFY\smarty\cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b7d4a158fc38_63632260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c849d93d76ca6d6981ac4db74bd76e4922b88a8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\cat.tpl',
      1 => 1689769120,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_64b7d4a158fc38_63632260 (Smarty_Internal_Template $_smarty_tpl) {
?>

















<select name="Time_Hour">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05" selected="selected">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select name="Time_Minute">
<option value="00">00</option>
<option value="05">05</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
<option value="35">35</option>
<option value="40">40</option>
<option value="45" selected="selected">45</option>
<option value="50">50</option>
<option value="55">55</option>
</select>
<select name="Time_Second">
<option value="00">00</option>
<option value="05">05</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
<option value="35">35</option>
<option value="40" selected="selected">40</option>
<option value="45">45</option>
<option value="50">50</option>
<option value="55">55</option>
</select>
<select name="Time_Meridian">
<option value="am">AM</option>
<option value="pm" selected="selected">PM</option>
</select>
<?php }
}

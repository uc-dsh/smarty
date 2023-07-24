<?php
/* Smarty version 4.3.1, created on 2023-07-24 10:14:29
  from 'C:\xampp\htdocs\UCERTIFY\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64be01ad906915_08585175',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7b013fc4cf5e55c34150a5ba5160ecbe3998a4a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\templates\\index.tpl',
      1 => 1690173868,
      2 => 'file',
    ),
    'ede7ac3e22c7bb90d281317b670491fc6288f68c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\templates\\404.tpl',
      1 => 1689942791,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_64be01ad906915_08585175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo smarty_modifier_date_format(time(),"%a %d %b, %Y %r");?>




























<?php echo $_smarty_tpl->tpl_vars['getData']->value;?>

<?php }
}

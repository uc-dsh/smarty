<?php
/* Smarty version 4.3.1, created on 2023-07-24 09:36:56
  from 'C:\xampp\htdocs\UCERTIFY\smarty\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bdf8e0885974_73801926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a451f8f4aacf335869afef2663615854f7d6cac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\index.tpl',
      1 => 1690171457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test.tpl' => 1,
  ),
),false)) {
function content_64bdf8e0885974_73801926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '64869337064bdf8e07ffd66_02585491';
echo smarty_modifier_date_format(time(),"%a %d %b, %Y");?>



























<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:test.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('var1'=>'value'), 0, false);
$_smarty_tpl->assign('name', ob_get_clean());
}
}

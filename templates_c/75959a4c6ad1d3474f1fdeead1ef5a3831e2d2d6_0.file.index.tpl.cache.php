<?php
/* Smarty version 4.3.1, created on 2023-07-24 09:42:43
  from 'C:\xampp\htdocs\UCERTIFY\smarty\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bdfa3bb5a4a3_75252866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75959a4c6ad1d3474f1fdeead1ef5a3831e2d2d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\template\\index.tpl',
      1 => 1690171457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test.tpl' => 1,
  ),
),false)) {
function content_64bdfa3bb5a4a3_75252866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '60388554564bdfa3bb01d42_83975179';
echo smarty_modifier_date_format(time(),"%a %d %b, %Y");?>



























<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:test.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('var1'=>'value'), 0, false);
$_smarty_tpl->assign('name', ob_get_clean());
}
}

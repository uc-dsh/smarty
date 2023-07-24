<?php
/* Smarty version 4.3.1, created on 2023-07-24 09:38:03
  from 'C:\xampp\htdocs\UCERTIFY\smarty\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bdf9234d9301_38987472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2d3308d741bfc5ca8fd63a02c431c6cf4642c36' => 
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
function content_64bdf9234d9301_38987472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '39164835764bdf92346d189_62694548';
echo smarty_modifier_date_format(time(),"%a %d %b, %Y");?>



























<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:test.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('var1'=>'value'), 0, false);
$_smarty_tpl->assign('name', ob_get_clean());
}
}

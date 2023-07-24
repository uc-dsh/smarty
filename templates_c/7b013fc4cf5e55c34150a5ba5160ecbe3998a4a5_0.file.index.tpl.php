<?php
/* Smarty version 4.3.1, created on 2023-07-24 09:52:29
  from 'C:\xampp\htdocs\UCERTIFY\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64bdfc85ed2446_23722814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b013fc4cf5e55c34150a5ba5160ecbe3998a4a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\templates\\index.tpl',
      1 => 1690172221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test.tpl' => 1,
  ),
),false)) {
function content_64bdfc85ed2446_23722814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo smarty_modifier_date_format(time(),"%a %d %b, %Y");?>



























<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:test.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var1'=>'value'), 0, false);
$_smarty_tpl->assign('name', ob_get_clean());
}
}

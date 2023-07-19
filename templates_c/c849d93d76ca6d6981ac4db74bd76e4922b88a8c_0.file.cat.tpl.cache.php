<?php
/* Smarty version 4.3.1, created on 2023-07-19 08:10:32
  from 'C:\xampp\htdocs\UCERTIFY\smarty\cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b77e586c3f06_04715883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c849d93d76ca6d6981ac4db74bd76e4922b88a8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\cat.tpl',
      1 => 1689747027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b77e586c3f06_04715883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),));
$_smarty_tpl->compiled->nocache_hash = '211887552164b77e58641595_80477481';
echo smarty_modifier_date_format(time(),"%a %d %b, %Y");?>

<br />
<style>
    td {
        padding: 5px 10px;
        background: rgb(248, 251, 252);
    }

    th {
        padding: 5px 10px;
        background: rgb(222, 237, 255);
    }

    table {
        width: 50%;
        text-align: center;
    }
</style>
<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['movies']->value,'cols'=>2,'table_attr'=>'border="0"'),$_smarty_tpl);
}
}

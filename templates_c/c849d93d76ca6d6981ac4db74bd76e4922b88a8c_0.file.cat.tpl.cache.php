<?php
/* Smarty version 4.3.1, created on 2023-07-19 07:07:48
  from 'C:\xampp\htdocs\UCERTIFY\smarty\cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b76fa4170270_83095202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c849d93d76ca6d6981ac4db74bd76e4922b88a8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\cat.tpl',
      1 => 1689743267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b76fa4170270_83095202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '143245740864b76fa40f6287_10889545';
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
<table border="1">
    <thead>
        <tr>
            <th>Sr. no.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php $_smarty_tpl->_assignInScope('count', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?><tr><td><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value["email"];?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}

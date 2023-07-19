<?php
/* Smarty version 4.3.1, created on 2023-07-19 11:55:42
  from 'C:\xampp\htdocs\UCERTIFY\smarty\cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b7b31e705450_55323106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c849d93d76ca6d6981ac4db74bd76e4922b88a8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\cat.tpl',
      1 => 1689760536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b7b31e705450_55323106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
$_smarty_tpl->compiled->nocache_hash = '25440576164b7b31e66e018_89546990';
?>










<table>
    <thead>
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DbUsers']->value, 'User');
$_smarty_tpl->tpl_vars['User']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['User']->value) {
$_smarty_tpl->tpl_vars['User']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['User']->value["username"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['User']->value["email"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['User']->value["age"];?>
 y.</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>



<?php echo smarty_function_html_checkboxes(array('options'=>$_smarty_tpl->tpl_vars['userCheckbox']->value,'name'=>"users",'labels'=>true,'label_ids'=>true,'separator'=>"<br />"),$_smarty_tpl);
}
}

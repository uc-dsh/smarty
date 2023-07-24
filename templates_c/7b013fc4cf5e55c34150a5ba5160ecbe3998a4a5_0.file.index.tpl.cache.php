<?php
/* Smarty version 4.3.1, created on 2023-07-24 11:55:48
  from 'C:\xampp\htdocs\UCERTIFY\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64be196ca8e6e6_87235756',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7b013fc4cf5e55c34150a5ba5160ecbe3998a4a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\templates\\index.tpl',
      1 => 1690179947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test.tpl' => 1,
  ),
),false)) {
function content_64be196ca8e6e6_87235756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\templates_c\\7b013fc4cf5e55c34150a5ba5160ecbe3998a4a5_0.file.index.tpl.cache.php',
    'uid' => '7b013fc4cf5e55c34150a5ba5160ecbe3998a4a5',
    'call_name' => 'smarty_template_function_menu_103881460264be196c963e63_24601523',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\vendor\\smarty\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
echo '/*%%SmartyNocache:103881460264be196c963e63_24601523%%*/<?php $_smarty_tpl->_checkPlugins(array(0=>array(\'file\'=>\'C:\\\\xampp\\\\htdocs\\\\UCERTIFY\\\\smarty\\\\vendor\\\\smarty\\\\smarty\\\\libs\\\\plugins\\\\modifier.date_format.php\',\'function\'=>\'smarty_modifier_date_format\',),));
?>/*/%%SmartyNocache:103881460264be196c963e63_24601523%%*/';
echo '<!--This is post comment-->';
$_smarty_tpl->compiled->nocache_hash = '103881460264be196c963e63_24601523';
echo '/*%%SmartyNocache:103881460264be196c963e63_24601523%%*/<?php echo smarty_modifier_date_format(time(),"%a %d %b, %Y %r");?>
/*/%%SmartyNocache:103881460264be196c963e63_24601523%%*/';?>



























<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:test.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('var1'=>'value'), 0, false);
$_smarty_tpl->assign('name', ob_get_clean());
?>

    <?php echo '/*%%SmartyNocache:103881460264be196c963e63_24601523%%*/<?php echo nl2br((string) call_user_func_array($_smarty_tpl->registered_plugins[ \'modifier\' ][ \'capitalize\' ][ 0 ], array( preg_replace("%(?<!\\\\\\\\)\'%", "\\\'", (string)($_smarty_tpl->tpl_vars[\'getData\']->value).("<h1>\'Hi this is data</h1>")) )), (bool) 1);?>
/*/%%SmartyNocache:103881460264be196c963e63_24601523%%*/';?>


<?php echo smarty_function_mailto(array('address'=>"dilshad.ahmed@ucertify.com",'encode'=>'javascript_charcode','subject'=>'Hello'),$_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('title', array("1",2,3));?>
The Text is <?php echo $_smarty_tpl->tpl_vars['title']->value[0];?>

<br />
<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2'=>array("hii","this","is","data"))),'item4'));?>



<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), false);
}
echo '<!--This is post comment-->';
/* smarty_template_function_menu_103881460264be196c963e63_24601523 */
if (!function_exists('smarty_template_function_menu_103881460264be196c963e63_24601523')) {
function smarty_template_function_menu_103881460264be196c963e63_24601523(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
$__foreach_entry_0_saved = $_smarty_tpl->tpl_vars['entry'];
?>
            <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
                <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), false);?>

            <?php } else { ?>
                <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
            <?php }?>

        <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}}
/*/ smarty_template_function_menu_103881460264be196c963e63_24601523 */
}

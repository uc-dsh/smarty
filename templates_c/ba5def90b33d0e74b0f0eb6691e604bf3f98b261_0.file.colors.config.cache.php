<?php
/* Smarty version 4.3.1, created on 2023-07-20 17:27:29
  from 'C:\xampp\htdocs\UCERTIFY\smarty\config\colors.config' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b92129309d22_97873882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5def90b33d0e74b0f0eb6691e604bf3f98b261' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\smarty\\config\\colors.config',
      1 => 1689854181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b92129309d22_97873882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '54200614864b92129301ac8_12741192';
?>
# global variables
pageTitle = "Main Menu"
bodyBgColor = #000000
tableBgColor = #000000
rowBgColor = #00ff00

[Customer]
pageTitle = "Customer Info"

[Login]
pageTitle = "Login"
focus = "username"
Intro = """This is a value that spans more
           than one line. you must enclose
           it in triple quotes."""

# hidden section
[.Database]
host=my.example.com
db=ADDRESSBOOK
user=php-user
pass=foobar<?php }
}

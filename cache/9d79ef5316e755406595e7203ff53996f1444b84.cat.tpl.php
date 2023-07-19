<?php
/* Smarty version 4.3.1, created on 2023-07-19 11:55:42
  from 'C:\xampp\htdocs\UCERTIFY\smarty\cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b7b31e8e7e14_55538337',
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
  'cache_lifetime' => 3600,
),true)) {
function content_64b7b31e8e7e14_55538337 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <tr>
                <td>AliceBrown</td>
                <td>alice.brown@example.com</td>
                <td>30 y.</td>
            </tr>
                    <tr>
                <td>BobJohnson</td>
                <td>bob.johnson@example.com</td>
                <td>22 y.</td>
            </tr>
                    <tr>
                <td>JaneSmith</td>
                <td>jane.smith@example.com</td>
                <td>35 y.</td>
            </tr>
                    <tr>
                <td>JohnDoe</td>
                <td>john.doe@example.com</td>
                <td>28 y.</td>
            </tr>
            </tbody>
</table>



<label for="users_4"><input type="checkbox" name="users[]" value="4" id="users_4" />AliceBrown</label><br />
<label for="users_3"><input type="checkbox" name="users[]" value="3" id="users_3" />BobJohnson</label><br />
<label for="users_2"><input type="checkbox" name="users[]" value="2" id="users_2" />JaneSmith</label><br />
<label for="users_1"><input type="checkbox" name="users[]" value="1" id="users_1" />JohnDoe</label><br /><?php }
}

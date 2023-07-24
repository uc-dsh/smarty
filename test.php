<?php
require_once("./inc/load.php");
$data = $smarty->createData();
$data->assign('foo', 'bar');
$tpl = $smarty->createTemplate('test.tpl', $data);
$tpl->display();
?>
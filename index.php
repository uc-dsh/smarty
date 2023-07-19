<?php
require_once("./inc/load.php");
$smarty->assign("users", array(
    array("name" => "User 1", "email" => "user1@mail.com", "dob" => "12-34-9843"),
    array("name" => "User 2", "email" => "user2@mail.com", "dob" => "12-34-9843"),
    array("name" => "User 3", "email" => "user3@mail.com", "dob" => "12-34-9843")
));

$select_users = sql("SELECT * FROM tbl_user ORDER BY id DESC");
if (!$select_users) {
    $select_users = array();
}
$smarty->assign("DbUsers", $select_users);

$smarty->assign("movies", array("movie 1", "movie 2", "movie 3"));

$smarty->display('cat.tpl');
?>
<link href="./assets/css/style.css" rel="stylesheet" />
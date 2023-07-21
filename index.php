<?php
require_once("./inc/load.php");

$smarty->assign("users", array(
    array("name" => "User 1", "email" => "user1@mail.com", "dob" => "12-34-9843"),
    array("name" => "User 2", "email" => "user2@mail.com", "dob" => "12-34-9843"),
    array("name" => "User 3", "email" => "user3@mail.com", "dob" => "12-34-9843")
));

$select_users = sql("SELECT * FROM tbl_user ORDER BY id DESC");
$userOptions = array();
if ($select_users) {
    foreach ($select_users as $data) {
        $userOptions[$data["id"]] = $data["username"];
    }
} else {
    $select_users = array();
}

$smarty->assign("DbUsers", $select_users);
$smarty->assign("userCheckbox", $userOptions);
$smarty->assign("movies", array("movie 1", "movie 2", "movie 3"));
$text = "this is some text so that it can measure my speed ";


$smarty->display('file:index.tpl');
?>
<link href="./assets/css/style.css" rel="stylesheet" />
<?php
date_default_timezone_set('Asia/Kolkata');
require_once("./vendor/autoload.php");
$smarty = new Smarty();
$smarty->caching = true;
$smarty->force_compile = true;
// $smarty->debugging = true;
// $smarty->debugging_ctrl = "URL";
$smarty->default_template_handler_func = "my_default_template_handler_func";

function my_default_template_handler_func($type, $name, &$content, &$modified, Smarty $smarty) {
    return "./404.tpl";
}


$conn = new mysqli("localhost", "root", "", "smarty");
if ($conn->connect_errno) {
    echo "Unable to connect with database";
    die();
}


function sql($query)
{
    global $conn;
    $result = $conn->query($query);
    $response = array();
    if (mysqli_num_rows($result)) {
        while ($data = mysqli_fetch_assoc($result)) {
            array_push($response, $data);
        }
        return $response;
    }
    return false;
}

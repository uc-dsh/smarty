<?php
require_once("./vendor/autoload.php");
$smarty = new Smarty();
$smarty->caching = true;

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

<?php
date_default_timezone_set('Asia/Kolkata');
require_once("./vendor/autoload.php");
require_once("./extends/modifier.capital.php");

function addPostHandler($tplSource, Smarty_Internal_Template $template)
{
    return "<?php echo '<!--This is post comment-->'; ?>" . $tplSource;
}

$smarty = new Smarty();
$smarty->caching = true;
$smarty->registerPlugin("modifier", "capitalize", 'smarty_modifier_capital' , false);
$smarty->setTemplateDir(array("tempDir" => "./templates/"));
$smarty->registerFilter("post", "addPostHandler");
// $smarty->debugging = true;
// $smarty->debugging_ctrl = "URL";
$notFoundFile = "templates/404.tpl";
$smarty->default_template_handler_func = "NotFound404";

function NotFound404()
{
    global $notFoundFile;
    return $notFoundFile;
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

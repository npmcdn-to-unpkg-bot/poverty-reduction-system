<?php
//$_POST = json_decode(file_get_contents('php://input'), true);
$response=array();
    $response["success"]=-1;

if (isset($_POST["project_id"])&&isset($_POST["pk"])  ){
//    session_start();
//if (!isset($_SESSION["session_name"])){
//    echo 'NOSESSIO';
//}
//else{
    // reaching from current directory to _user_info
    require_once __DIR__ . '/user_info.php';
    
    $user=new UserInfo();
//    $pk="delta";
//    $module="./food_sustenance";
    echo $user->module_users($_POST["pk"],$_POST["project_id"]);
//}
}
else
echo json_encode($response);
?>

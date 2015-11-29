<?php
session_start();
require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/feedback_model.php" );


$result = array();

$user_id=$_REQUEST['g_username'];
$pwd=$_REQUEST['g_pwd'];
$user = new admin();

$result=$user->adm_signin($user_id,$pwd);

if(isset($result['user_id']))
{
    $rsult["success"] = TRUE;
    $rsult["id"] =$result['user_id'];
	$_SESSION['fdk_user_name']=$result['user_name'];
	$_SESSION['fdk_user_id']=$result['user_id'];
}
else{
	$rsult["success"] = FALSE;
    $rsult["id"] =0;
}
print(json_encode($rsult));

?>

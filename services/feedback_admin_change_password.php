<?php

require_once( "../src/model/feedback_model.php" );
// require_once( "connection.php" );
session_start();
$user = new admin();
//$SC -> print_param('user_id (bigint),oldpassword(character varying),passwor_val(character varying)');
$g_user_id=$_SESSION['fdk_user_id'];
$old_g_pwd=$_REQUEST['old_g_pswd'];
$new_g_pwd=$_REQUEST['new_g_pswd'];

//$g_user_id=1;
//$old_g_pwd="admin@123";
//$new_g_pwd="admin";
$new_g_pwd=md5($new_g_pwd);
$old_g_pwd=md5($old_g_pwd);

$result=$user->admin_password_update($g_user_id,$old_g_pwd,$new_g_pwd);

 //$SC -> clear_param($result);
 
print(json_encode($result));
?>
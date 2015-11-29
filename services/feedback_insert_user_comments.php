<?php

require_once( "../src/model/dbmodel.php" );
require_once( "../src/model/feedback_model.php" );
// require_once( "connection.php" );
$SC = new DBModel();
$bl= new admin();
//$SC -> print_param('email(bigint),comment_type (bigint),comments(character varying)');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $param = $_POST;
} else {
    $param = $_GET;

}
//echo "<script type='text/javascript'>alert('$param');</script>";
//print_r($param);
//only for live
//$b_id_str=$param['b_id'];
//$c_ids_str=$param['c_id'];
//$owner_id_str=$param['owner_id'];
////print_r($param['c_id']);
//$owner_ids = str_replace(array('/', '\\'), '', $owner_id_str);
//$b_ids = str_replace(array('/', '\\'), '', $b_id_str);
//$c_ids = str_replace(array('/', '\\'), '', $c_ids_str);
//$param['c_id']=$c_ids;
//$param['b_id']=$b_ids;
//$param['owner_id']=$owner_ids;
//print_r($param);
//$result=$bl->site_owner_register($param);
$results=array();
$results=$bl->insert_user_comments($param);
 // print_r($results);
$SC -> clear_param($results);
print(json_encode($results));
?>

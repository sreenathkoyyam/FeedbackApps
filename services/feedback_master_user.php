<?php

require_once( "../src/model/feedback_model.php" );



$user = new admin();

$result=$user->master_user_get();

if(count($result)>0)
{

$retval = array( 'status_value' => 1,'status_text' => 'TRUE','total_count' => count($result), 'data' => $result);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
    }
print(json_encode($retval));

?>

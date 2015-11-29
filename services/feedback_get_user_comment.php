<?php

require_once( "../src/model/feedback_model.php" );



$user = new admin();
$cmnt_id=$_REQUEST['cmnt_id'];
$user_name='';
$user_type=0;

$result=$user->user_comments_get($cmnt_id,$user_name,$user_type);
//print_r($result);
if(count($result)>0)
{
 if($result[0]['comment_type']==1){$result[0]['comment_type']='+VE';}
                    else{$result[0]['comment_type']='-VE';}
$retval = array( 'status_value' => 1,'status_text' => 'TRUE','total_count' => count($result), 'data' => $result);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
    }
    ob_end_clean();
print(json_encode($retval));
?>

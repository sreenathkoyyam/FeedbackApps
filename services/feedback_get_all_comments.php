<?php

require_once( "../src/model/feedback_model.php" );



$user = new admin();
$cmnt_id=$_REQUEST['cmnt_id'];
$user_name=$_REQUEST['feedback_user'];
$user_type=$_REQUEST['user_type'];
//$user_name="Sreenath.Kunhikrishnan@in.tesco.com";
//$cmnt_id=0;
//$user_type=0;

//        echo $cmnt_id;  echo $user_name;   echo $user_type;
$result=$user->user_comments_get($cmnt_id,$user_name,$user_type);

if(count($result)>0)
{
   
		$data=$result;
 		$page=1;
                 $comments_type='';
  		foreach ($data as $final)
                { 
                    
                    if($final['comment_type']==1){$comments_type='+ve';}
                    else{$comments_type='-ve';}
      		$entry = array('id'=>$final['comment_id'],
	        	'cell'=>array(
	            		'user_email'=>$final['user_email'],
	            		'user_comment'=>$final['user_comment'],
	             		'comment_type'=>$comments_type,
	        	),
    		);
    		$jsonData[] = $entry;
		}
	$retval = array( 'status_value' => 1,'status_text' => 'TRUE','page'=>$page,'total' =>  count($result), 'rows'=>$jsonData);

}
else
    {
    $retval = array( 'status_value' => 0,'status_text' => 'FALSE');
        
    }
ob_end_clean();
print(json_encode($retval));

?>

<?php
require_once( "../src/model/feedback_model.php" );
// output headers so that the file is downloaded rather than displayed


header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$output = fopen('php://output', 'w');
       
$user = new admin();


// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
// fetch the data.

$result=$user->user_comments_export($output);

fclose($output);

return $result;
  



 


?>
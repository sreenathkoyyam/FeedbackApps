<?php

require_once( "dbmodel.php" );

// ============================================================
//
// ==============================================================
class admin extends DBModel {

    // ==========================================================
    // Eros:test bl
    // ============================================================
    public function adj_test($parameter) {
        // print_r($parameter);
        $storedProcedure = 'adj_get_brand_name';
        $this->dbmodel = new DBModel();
        $retrieval = $this->dbmodel->call_dbFunction($storedProcedure, $parameter);

        $i = 0;
        $data = array();
        while ($row = mysql_fetch_array($retrieval)) {
            $data[$i]['id'] = $row['id'];
            $data[$i]['b_category_name'] = $row['b_category_name'];

            $i++;
        }
        $retrieval = $this->dbmodel->make_result($data);

        return $retrieval;
    }

    // ==========================================================
    // sreenath886@gmail.com:for admin_login
    // ============================================================
    public function adm_signin($user_id, $pwd) {
        $pwds = md5($pwd);
        $database = Mysql_Database::getInstance();
        $query = mysql_query("select g.fbk_user_id,g.fbk_user_name from feedback_userlist g where g.fbk_user_email  =   '" . $user_id . "' and g.access_pwd = '" . $pwds . "' and is_admin=1 AND g.is_active=1");
        //print_r($query);
        $data = array();
        while ($row = mysql_fetch_array($query)) {
            $data['user_id'] = $row[0];
            $data['user_name'] = $row[1];
        }
//print_r($data);
        return $data;
    }

    // ==========================================================
    // sreenath886@gmail.com:master_user_get
    // ============================================================


    public function master_user_get() {
        $database = Mysql_Database::getInstance();
        $query = mysql_query("select b.fbk_user_id,b.fbk_user_name,b.fbk_user_email from feedback_userlist b");
        //print_r($query);
        $i = 0;
        while ($row = mysql_fetch_array($query)) {
            $data[$i]['user_id'] = $row['fbk_user_id'];
            $data[$i]['user_name'] = $row['fbk_user_name'];
            $data[$i]['user_email'] = $row['fbk_user_email'];

            $i++;
        }
        //print_r($data[0]);
        return $data;
    }

    // ==========================================================
    // sreenath886@gmail.com:for inserting feedback
    // ============================================================
    public function insert_user_comments($param) {
        $email = $param['email'];
        $comment_type = $param['comment_type'];
        $comments = $param['comments'];
        $database = Mysql_Database::getInstance();
//    $query = mysql_query("select b.user_id,b.user_name from feedback_userlist b"); 
        $query = "INSERT INTO feedback_usercomments (user_email,user_comment,comment_type,created_on) VALUES ($email,$comments,$comment_type,now());";
        //print_r($query);
        $res = mysql_query($query);


        $data = array();
        if (isset($res)) {
            $data[0]['status_value'] = 1;
        } else {
            $data[0]['status_value'] = 0;
        }

        $retrieval = $this->make_result($data);
        return $retrieval;
    }

    public function user_comments_get($id, $user_name, $user_type) {
        //echo '999999999999999';
        //echo $id;  echo $user_name;   echo $user_type;
        $database = Mysql_Database::getInstance();
        if ($id == 0) {
            if ($user_name == 'Select a Person' && $user_type >= 1) {
                $qry = "select b.comment_id,b.user_email,b.user_comment,b.comment_type from feedback_usercomments b where b.comment_type='" . $user_type . "'";
                $query = mysql_query($qry);
            } elseif ($user_name != '' && $user_type == 0) {
               $qry = "select b.comment_id,b.user_email,b.user_comment,b.comment_type from feedback_usercomments b where b.user_email='" . $user_name . "'";
                $query = mysql_query($qry);
            } elseif ($user_name != '' && $user_type >= 1) {
                
                $qry = "select b.comment_id,b.user_email,b.user_comment,b.comment_type from feedback_usercomments b where b.user_email='" . $user_name . "' and  b.comment_type='" . $user_type . "'";
                $query = mysql_query($qry);
            } else {
                
                $qry = "select b.comment_id,b.user_email,b.user_comment,b.comment_type from feedback_usercomments b";
            $query = mysql_query($qry);
                
            }
        } else {
            $qry="select b.comment_id,b.user_email,b.user_comment,b.comment_type from feedback_usercomments b  where b.comment_id='" . $id . "' ";
        $query = mysql_query($qry);
            
        }
//

    // print_r($qry);
    $i=0;
    while($row=mysql_fetch_array($query)){
         $data[$i]['comment_id'] = $row['comment_id'];
         $data[$i]['user_email'] = $row['user_email'];
         $data[$i]['user_comment'] = $row['user_comment'];
          $data[$i]['comment_type'] = $row['comment_type'];
        
        $i++;
        }
 //print_r($data[0]);
    return $data;
    }
    
     // ==========================================================
    // sreenath886@gmail.com:master_user_get
    // ============================================================


    public function admin_password_update($g_user_id,$old_g_pwd,$new_g_pwd) {
        $database = Mysql_Database::getInstance();
        //$date = date('m/d/Y h:i:s a', time());
        
    $qry="UPDATE feedback_userlist SET access_pwd = '" . $new_g_pwd . "',updated_on =now()  WHERE access_pwd='" . $old_g_pwd . "' and fbk_user_id=" . $g_user_id . " ";
       //  $qry="UPDATE feedback_userlist SET access_pwd = '" . $new_g_pwd . "',updated_on =now()  WHERE  fbk_user_id=" . $g_user_id . " ";
       //echo $old_g_pwd;        echo '********';
       // echo $new_g_pwd;        echo '********';
       $qry2 = "select g.access_pwd from feedback_userlist g where fbk_user_id=" . $g_user_id . " "; 
        $query = mysql_query($qry2);
        while($row=mysql_fetch_array($query)){
         $access = $row['access_pwd'];
         
        }
        
         if($old_g_pwd==$access) {
            // echo '----------';
             $res = mysql_query($qry);
          $data = array();
             
            $data[0]['status_value'] = 1;
        } else {
           // echo '======';
            $data[0]['status_value'] = 0;
        }

        $retrieval = $this->make_result($data);
        return $retrieval;
    
       
    }
    
      // ==========================================================
    // sreenath886@gmail.com:comment export to csv
    // ============================================================


    public function user_comments_export($output) {
      
        
        fputcsv($output, array('User Email', 'User Comment','Comment Type', 'Created On'));

        $database = Mysql_Database::getInstance();
        //$date = date('m/d/Y h:i:s a', time());
       $rows = mysql_query('SELECT user_email,user_comment,comment_type,created_on FROM feedback_usercomments');
     
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows))
{
  
    if($row['comment_type'] == 1)
    {
        $row['comment_type'] = "Positive";
    }
 else {
    $row['comment_type'] = "Negative";    
    }
  //  print_r($row);
  fputcsv($output, $row); 
}
 //
    }

}

?>


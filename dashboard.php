

<link href="css/style.css" rel="stylesheet" /> 
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />

<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/flexigrid.js"></script>
<link rel="stylesheet" type="text/css" href="css/flexigrid.css" />

<script type="text/javascript" src="js/fscript.js"></script>
   <script src="js/alert/jquery.alerts.js" type="text/javascript" ></script>
        <link rel="stylesheet" type="text/css" href="js/alert/jquery.alerts.css"> 
<script>
    $(document).ready(function() {
        // alert(23); 
        user_get();
        site_owner();
        $('#pwd_change').hide();
        //$('#home_div').hide();
        


    });</script>
<?php
//$profile_viewer_uid = "<script language=javascript>document.write(profile_viewer_uid);</script>";
//// echo "**************************************************";
//// echo $profile_viewer_uid;
//?>
<style>
    .filer_combos
                {
       width: 176px;
    margin-left: 52px;
    height: 35px;
    color: #555;
    padding: 8px;
    }</style>
</head>
<body>
    <div class="container_12">
        <?php include 'inc/header.php'; ?>

        <div class="grid_10" id="new_cust_grid" style="width: 1023px;
             margin-left: 301px;
             margin-top: -160px;">
            <div  class="box round first" style=" min-height: 450px;  height: auto;"  >
                
                 <div id="pwd_change">
                     <h2>Settings</h2>
                                <fieldset id="" style="font-weight: bold;border: 1px solid #E6F0F3; border-radius: 3px;height: 425px; width: 45%; margin-left: 3%;">
                                
                                  <legend style="color: #2E5E79;">Change Password</legend>

                                    <div style="    margin-left: 27px; height: 317px;">
                                        
                                        <br>
                                        <p><label id="psw_error" style="color: red;display: none;"> * Please fill the mandatory fields</label> </p>
                                        <div>Current Password *</div>
                                        <div>  <input type="text" class="text-input_dash" id="old_g_pswd" name="email" style="margin-left: 1px;width:88%;margin-top: -1px;" /></div>
                                        <div>New Password *</div> 
                                        <div> <input type="text" class="text-input_dash" id="new_g_pswd" name="email" style="margin-left: 1px;width:88%;margin-top: -1px;" /></div>
                                         <div style="width:200px;"><input type="button" id="change_pwd" onclick="change_pwd()"  name="my_upload" value="Save"  class="status"/></div>
                                   


                                    </div>   




                                </fieldset>
  
                                
                                
                            </div>
                <fieldset id="sub2"   >
                    <h2>User Comments</h2>
                    <div class="dash_block">
                        <div id="grid_div" class="reg" style="width:100%;  margin: 0 auto;font-size:13px !important;">
                            <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 91%; margin: 0 auto; margin-left:3%;float: left;">
                                <legend style="color: #2E5E79;font-weight: bold;">Comments Details :</legend>

                                <!--comment grid filters-->
                                
                                   <div style="height: 10%">
                                    
                                    </div>
                                
                                <div style=" margin-left: -26px;margin-top: -13px;">
                                    
                                    <select id="feedback_user" name="state" class="filer_combos"  >
                                        <option style="display: flex;" value="Select a Person">Select a Person</option>
                                                </select>
                                     <select name="usertype" id="user_type" class="text-selsct_dash">
                                        <option value="0">Select Type</option>
                                        <option value="1">+VE</option>
                                        <option value="2">-VE</option>
                                    </select>

                                    <div style="width:200px; margin-left: 374px;margin-top: -48px;"><input type="button" id="user_search" onclick="comment_filter()"  name="my_upload" value="Save"  class="status"/></div>
                                    <div style="width:200px;margin-left: 540px; margin-top: -48px;">   <input type="button" onclick="clearBtn();" id="clr" value="Clear" class="status" />
                                    </div></div>
                                <!--comment grid -->   
                                <div id="avail_table" style=" margin-left: 26px;">
                                    <table id='site_owners'></table>
                                </div><br>

<!--							<table style=" margin: 0 auto; margin-top: 30px; margin-bottom: 30px;">
                            <input type="text" name="owner_id" id="owner_id" value="0" style="display: none;"/>

                                                                                      <tr>
                                      <td>First Name*</td>
                                      <td style="width:10px;">:</td>
                                      <td><input type="text" class="text-input_dash" name="f_name" id="f_name" /></td>
                              </tr>
                              <tr>
                                      <td style="padding-top: 20px;">Last Name</td>
                                      <td>:</td>
                                      <td><input type="text" class="text-input_dash" name="l_name" id="l_name"  /></td>
                              </tr>
                              
                              
                              
                      </table>-->

                            </fieldset>

                            <!-- 						2nd field set -->
                            <!--   <fieldset id="customer_step2" style="display: none;">
                  
                                      
                  
                  
                                                              
                                                      <fieldset style="border: 1px solid #E6F0F3; border-radius: 3px; width: 40%; height: auto; margin: 0 auto; float: left; margin-left: 5%;">
                                                                      <legend style="color: #2E5E79;">Picture Upload :</legend>
                                                      
                                                                 <div style="margin: 0 auto; height: auto;"> <form style="margin:0 auto; margin-top: 30px; margin-bottom: 30px;" id="upload" method="post" action="services/upload.php" enctype="multipart/form-data">
                                                                              <div id="drop">Drop Here
                                                                                                              <a>Browse</a>
                                                                                      <input type="file" name="upl" multiple />
                                                                              </div>
                                                                              <ul></ul>
                                                                 </div>
                                                              </fieldset> 
                                                              
                                                                          </fieldset> -->

                            <div id="userview_div"  >

                                <fieldset style="font-weight: bold;border: 1px solid #E6F0F3; border-radius: 3px; width: 37%; margin-left: 56%;margin-top: -35%;float: left;">
                                    <legend style="color: #2E5E79;">FEEDBACK DETAILS :</legend>

                                    <div style="    margin-left: 27px; height: 317px;">

                                        <div>USER EMAIL:</div>
                                        <div>  <input type="text" class="text-input_dash" id="u_email" name="email" style="margin-left: 1px;width:88%;margin-top: -1px;" /></div>
                                        <div>FEEDBACK TYPE:</div> 
                                        <div> <input type="text" class="text-input_dash" id="c_type" name="email" style="margin-left: 1px;width:88%;margin-top: -1px;" /></div>
                                        <div>MESSAGE:</div> 
                                        <div> <textarea   name="message" value="Your Message"  id="user_cmnt" style="width: 308px;height: 182px;" ></textarea></div>




                                    </div>   




                                </fieldset>



                            </div>
                            
                          
                            









                        </div>  


                    </div>
                     
                            
            </div>
        </div>



        <div id="site_info">
            <p>
               Copyright By BackPacker @ All Rights Reserved.
            </p>
        </div>
</body>
</html>

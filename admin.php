
<?php include 'inc/libs.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
      <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding"> 

 
        <title>Feedback</title>
   
        <style type="text/css">
            * {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            
            body {
                margin: 0;
                pading: 0;
                color: #fff;
                background: repeat #1b1b1b;
                font-size: 14px;
                text-shadow: #050505 0 -1px 0;
                font-weight: bold;
            }
            
            li {
                list-style: none;
            }
            
          
            
            #login-wrapper {
                margin: 0 0 0 -160px;
                width: 320px;
                text-align: center;
                z-index: 99;
                position: absolute;
                top: 0;
                left: 50%;
            }
            
            #login-top {
                height: 120px;
                padding-top: 140px;
                text-align: center;
            }
            
            label {
                width: 70px;
                float: left;
                padding: 8px;
                line-height: 14px;
                margin-top: -4px;
            }
            
            input.text-input {
                width: 200px;
                float: right;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                background: #fff;
                border: solid 1px transparent;
                color: #555;
                padding: 8px;
                font-size: 13px;
            }
            
            input.button {
                float: right;
                padding: 6px 10px;
                color: #fff;
                font-size: 14px;
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#a4d04a), to(#459300));
                text-shadow: #050505 0 -1px 0;
                background-color: #459300;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                border: solid 1px transparent;
                font-weight: bold;
                cursor: pointer;
                letter-spacing: 1px;
            }
            
            input.button:hover {
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#a4d04a), to(#a4d04a), color-stop(80%, #76b226));
                text-shadow: #050505 0 -1px 2px;
                background-color: #a4d04a;
                color: #fff;
            }
            
            div.error {
                padding: 8px;
                background: rgba(52, 4, 0, 0.4);
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                border-radius: 8px;
                border: solid 1px transparent;
                margin: 6px 0;
            }
            #site_info {
       color: #fff;
    background: #204562;
    border-top: 1px solid #1d3b53;
    padding-left: 20px;
    /* margin-top: 574px; */
    height: 44px;
    line-height: 35px;
    /* margin-bottom: 0px; */
    font-weight: normal;
    margin-top: 484px;
}
            
     #admin_header {
    color: #fff;
    background: #204562;
    border-top: 1px solid #1d3b53;
    padding-left: 20px;
    
   /*margin-top: 602px;*/
   height: 40px;
   line-height: 35px;
    margin-bottom: 0px;
    font-weight: normal;
            }
            
            #error_message
            {  
    width: 350px;
    margin-top: 5px;
    color: red;
    display: none;
    margin-bottom: 5px;
            }
        </style>        
    </head>
  
    <body id="login">
        <div id="admin_header">
           <!--<h3 style="color: #fff;">Feedback Dashboard</h3>      </div>-->
        <div id="login-wrapper" class="png_bg">
            <div id="login-top">
                 <!--<div>FEEDBACK APP CONSOLE </div>-->
                <img src="css/images/dashboard-logo.png" alt="feedback Dashboard" title="Powered By Sreenath">         
            </div>
            
            <div id="login-content">
                                <form >                    
                    <p>
                        <label>Username</label>
                        <input name="username" id="username"  class="text-input" type="text">
                    </p>
                    <br style="clear: both;">
                    <p>
                        <label>Password</label>
                        <input name="password" id="password"  class="text-input" type="password">
                    </p>
                    <br style="clear: both;">
                          <label id="error_message" ></label>
                     
                    <p>
                        <input class="button" value="Sign In" onclick="sign_in();" type="button">
                    </p>
                      
                </form>
            </div>
        </div>
        <div id="dummy"></div>
        <div id="dummy2"></div>
  
        <div id="admin_header" style="margin-top: 678px;margin-left: -20px;">
           
                Copyright By BackPacker @ All Rights Reserved.
                </div>
</body></html>
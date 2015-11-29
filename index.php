<?php include 'inc/libs.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Feedback Form</title>
        
 <link rel="stylesheet" href="css/fstyle.css" type="text/css" media="all"></link>
	<!--[if IE]><script>
	$(document).ready(function() { 

$("#form_wrap").addClass('hide');

})

</script><![endif]-->
         

</head>
<body>
	<div id="wrap">
		<h1>Send a Feedback</h1>
		<div id='form_wrap'>
                    <div class="cmnt_form">
                    <!--<form action="" name="cmment_form" method="post">-->
				<p>Hello,<label id="error" style="color: red;display: none;"> * Please fill the mandatory fields</label> </p>
<!--                                <div> 
                                 <label for="name">Name: </label>
				<input type="text" name="name" value="" id="name" />
                                </div>-->
                                <label for="email">Email* </label>
                                <div style="height: 10%">
                                    
                                    <select id="feedback_user" name="state" class="combos"  id="feedback_user" onchange=""  >
                                        <option style="display: flex;">Select a Person</option>
                                                </select></div>
                                 <div>
                                     <label for="email">Feedback Type* </label></div>
                                
                                <div class="example">
     
                                    <input id="radio1" type="radio" id="cmnt_type" name="radios" value="1" checked="checked"><label for="radio1"><span><span></span></span>+VE</label>
      
      
        <input id="radio2" type="radio" id="cmnt_type" name="radios" value="2"><label for="radio2"><span><span></span></span>-VE</label>
      
      </div>
                             <br>
                                
				<div>
                                    
                                 <label for="email">Your Message * </label>
				<textarea   name="message" value="Your Message"  id="user_cmnt" ></textarea>
					
				</div>
                                <div><input type="submit" onclick="insert_user_comments()" name ="submit" value="Now, I send, thanks!" /></div>
			</div>
		</div>
	</div>
</body>
</html>
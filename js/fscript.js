/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
 Created on : Oct 28, 2015, 4:22:48 PM
 Author     : Sreenath Koyyam
 */
//Eros:category get
function alertit()
{
    alert(123);
}

function user_get()
{
    // // alert(123)
    // // var id="null";
    $.ajax({
        dataType: "json",
        type: "POST",
        data: "",
        url: 'services/feedback_master_user.php',
        success: function(response) {
            var total_count = response.total_count;

            if (response.status_value == 1) {
                // alert(total_count)
                var rec_s = new Array();
                for (var i = 0; i < total_count; i++)
                {
                    //alert(response.data[i].user_email);
                    $('#feedback_user').append(
                            $('<option></option>').val(response.data[i].user_email).html(response.data[i].user_name));

                }
            }
        }
    });
}




function insert_user_comments()
{
    var axes = 1;
    //alert($('#feedback_user').val());
    if ($('#feedback_user').val() == '' || $('#feedback_user').val() == 'Select a Person')
    {
        axes = 0;
        Errror_msg = "Please Select a Person"
        // alert(axes);
    }
    else if ($('[name=radios]:checked').val() == '')
    {

        axes = 0;
        // $('#l_name').val()=null; 
        Errror_msg = "Please Select a Comment Type"
    }
    else if ($('#user_cmnt').val() == '')
    {
        axes = 0;
        Errror_msg = "Please Enter Some Comments"
    }
//alert(axes);
    if (axes == 1)
    {

        // alert($('[name=radios]:checked').html())
        $.ajax({
            dataType: "json",
            type: "POST",
            data: {
                email: "'" + $('#feedback_user').val() + "'",
                comment_type: "'" + $('[name=radios]:checked').val() + "'",
                comments: "'" + $('#user_cmnt').val() + "'",
            },
            url: 'services/feedback_insert_user_comments.php',
            success: function(response) {
                //alert(1);
                var text = "Submitted your Feedback Succesfully"
                // jAlert(text, 'Message'); 

                jAlert(text, 'Message', function(r) {

                    window.location.assign("index.php")
                });
            }

            // alert(99)
            // alert(id);

        });


    }
    else {

        $('#error').show();
    }
}

//sign in

function sign_in() {

 $('#error_message').empty();
    if ($('#username').val() == "" && $('#password').val() == "")
    {
       // $('#error_message').empty();
        $('#error_message').append("Please enter username and password");
        
        //$('#error_message').show();
        //alert("Please enter the username and password");
    }
    else if ($('#username').val() == "")
    {

       
        $('#error_message').append("Please enter username");
       // $('#error_message').show();
    }
    else if ($('#password').val() == "")
    {

        //$('#error_message').empty();
        $('#error_message').append("Please enter password");
       // $('#error_message').show();
    }
    else {
        $.ajax({
            dataType: "json",
            type: "POST",
            data: {
                g_username: $('#username').val(),
                g_pwd: $('#password').val()
            },
            url: 'services/feedback_admn_login.php',
            success: function(response) {
                var id = response.id;
                if (id > 0) {
                    window.location.assign("dashboard.php")
                }
                else {
                    var text = "Invalid Username/Password!"
                    jAlert(text, 'Message', function(r) {

                        window.location.assign("admin.php")
                    });
                    $('#username').val("");
                    $('#password').val("");
                }
            }
        });
    }
    $('#error_message').show();
}

function site_owner()
{

    var cmnt_id = 0;
    var feedback_user = '';
    //alert(123);
    $("#site_owners").flexigrid({
        url: 'services/feedback_get_all_comments.php',
        dataType: 'json',
        type: "POST",
        params: [{name: 'user_type', value: 0}, {name: 'cmnt_id', value: cmnt_id}, {name: 'feedback_user', value: feedback_user}],
        colModel: [
            {display: 'User Name', name: 'user_email', index: 'user_email', width: 176, sortable: true, align: 'center'},
//						{display: 'Comment', name :'user_comment',index:'user_comment', width : 135, sortable : true, align: 'center'},
            {display: 'Comment Type', name: 'comment_type', index: 'user_email', width: 135, sortable: true, align: 'center'},
            {display: 'Comment View', name: 'option', index: 'option', width: 135, sortable: true, align: 'center'}
        ],
        sortname: "Comments Details",
        sortorder: "asc",
        usepager: true,
        title: 'Customer Details',
        useRp: true,
        rp: 15,
        multiSelect: true,
        showTableToggleBtn: false,
        width: 500,
        resizable: false,
        height: 260,
        preProcess: insertLink,
    });

// 		 	jQuery('#site_owners').flexOptions({
//				url :  "services/feedback_get_all_comments.php",
//                                params : [{
//                                        name : 'user_type',
//						value : 1,
//						name : 'cmnt_id',
//						value : cmnt_id,
//                                                name : 'feedback_user',
//						value : feedback_user,
//                                                
//						}]
//				
//			}).flexReload();
}

function insertLink(data)
{
    //alert(data.rows[i].id );
    for (i = 0; i < data.rows.length; i++)
    {
        data.rows[i].cell['option'] = "<a class='bold' style='color:green;cursor:pointer' onclick = comment_view(" + data.rows[i].id + ")>View</a>";

    }
    return data;
}

function comment_view(id) {

    //$('#grid_div').hide();
    //$('#userview_div').show();



    $.ajax({
        dataType: "json",
        type: "POST",
        data: {
            cmnt_id: "" + id + "",
        },
        url: 'services/feedback_get_user_comment.php',
        success: function(response) {
            // alert(23);

            var total_count = response.total_count;
            var owner_id = response.data[0]['owner_id'];
            //alert(owner_id);
            if (response.status_value == 1) {

                $('#u_email').val(response.data[0]['user_email']);
                $('#c_type').val(response.data[0]['comment_type']);
                $('#user_cmnt').val(response.data[0]['user_comment']);
            }
        }
    });


}

function comment_filter() {
    var user_type = $('#user_type').val();
    var feedback_user = $('#feedback_user').val();
    //alert(feedback_user);
    if (user_type == 0 && feedback_user === 'Select a Person')
    {

        var text = "Please select one Filter Option";
        jAlert(text, 'Message');

    }
    else
    {
        var cmnt_id = 0;
        // var feedback_user='';
        jQuery('#site_owners').flexOptions({
            url: "services/feedback_get_all_comments.php",
            params: [{name: 'user_type', value: $('#user_type').val()}, {name: 'cmnt_id', value: cmnt_id}, {name: 'feedback_user', value: $('#feedback_user').val()}],
        }).flexReload();

    }
}

function change_pwd() {

    var pwd_axes = 1;
    //alert($('#feedback_user').val());
    if ($('#old_g_pswd').val() == '' || $('#new_g_pswd').val() == '')
    {
        pwd_axes = 0;
        // Errror_msg = "Please Select a Person"
        // alert(axes);
    }



    //$('#grid_div').hide();
    //$('#userview_div').show();psw_error

//alert(pwd_axes);
    if (pwd_axes == 1)
    {
        $.ajax({
            dataType: "json",
            type: "POST",
            data: {
                old_g_pswd: $('#old_g_pswd').val(),
                new_g_pswd: $('#new_g_pswd').val()
            },
            url: 'services/feedback_admin_change_password.php',
            success: function(response) {


//            var total_count = response.total_count;
                var status_value = response.data[0]['status_value'];
                // alert(status_value);
                if (status_value == 1) {
                    var text = "Password Updated Successfully";
                } else
                {
                    var text = "Your Current Password is Wrong! ";
                }

                jAlert(text, 'Message');
                $('#psw_error').hide();
            }

        });

    }
    else
    {
        $('#psw_error').show();
    }


}

function home_reload() {
    // alert(1);
    $('#sub2').show();
    $('#pwd_change').hide();

}
function admin_pswd_update() {
    // alert(1);

    //alert(1);
    $('#sub2').hide();
    $('#pwd_change').show();


}
function clearBtn() {
    location.reload();
// 	$('#user_type').val(0);
//        $('#feedback_user').val('');
//	$("#site_owners").flexigrid.flexReload();

}

function comment_export()
{
    // // alert(123)
    // // var id="null";
    $.ajax({
        dataType: "json",
        type: "POST",
        data: "",
        url: 'services/feedback_csv_export.php',
        success: function(response) {
            //var total_count = response.total_count;

           
        }
    });
}


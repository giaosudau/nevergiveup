<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>UIT Social Network</title>
        <link rel="stylesheet" href="../../css/style.css" type="text/css" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" >
            $(document).ready(function()
            {
                $("#btnLogin").click(function()
                {                    
                    var username= $("#usernamelogin").val();
                    var password=$("#passwordlogin").val();
                    var remember = $("#rememberlogin").is(':checked'); 
                    
                    if(name=='' || username=='' || password=='' || gender=='')
                    {
                        $('.success').fadeOut(200).hide();
                        $('.error').fadeOut(200).show();
                    }
                    var dataString = 'usernamelogin='+ username 
                        + '&passwordlogin=' + password 
                        + '&rememberlogin=' + remember;
                    
                    
                    $.ajax
                    ({
                        type: "POST",
                        url: "homepage",
                        data: dataString,
                        cache: false,
                        success: function(html)
                        {
                            $('.success').fadeIn(200).show();
                            $('.error').fadeOut(200).hide();
                            window.location.replace("../status/");
                            //alert(html);
                        }
                       
                    });
                });
                $("#btnRegister").click(function(){
                    var username = $("#username").val();
                    var password = $("#password").val();
                    var passwordre = $("repassword").val();
                    var firstname = $("#firstname").val();
                    var lastname = $("#lastname").val();
                    var email = $("#email").val();
                    var dataString = 'firstname=' + firstname + '&lastname='+ lastname 
                        + '&password=' + password + '&username=' 
                        + username + '&email=' + email;   
                    $.ajax
                    ({
                        type: "POST",
                        url: "homepage",
                        data: dataString,
                        cache: false,
                        success: function(html)
                        {
                            alert(html);
                            
                        }
                    });
                });
                
            });

                    
        </script>
    </head>

    <body>
        <div align="center" id="login">
            <form action="" method="post" name="frmLogin" class="Login">
                <table width="960px" align="center">
                    <tr>
                        <td rowspan="3" width="404"><label id="lbbanner"><b>UIT SOCIAL NETWORK</b></label></td>
                        <td width="216"><label>Username:</label></td>
                        <td width="324">Password:</td>
                    </tr>
                    <tr>
                        <td><input type="text" witdth="200px" id ="usernamelogin" name="usernamelogin" /></td>
                        <td><input type="password" width="200px" id="passwordlogin" name="passwordlogin" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox" id="rememberlogin" name="checkRemember" />&nbsp;Remember me!
                            <input type="button" value="Log in" id="btnLogin" name="Login"/></td>
                        <td colspan="2" align="right"></td>
                        <span class="error" style="display:none"> Please Enter Valid Data</span>
                        <span class="success" style="display:none"> Login Successfully</span>

                    </tr>
                    <tr>

                    </tr>
                </table>
            </form>
            <div id="content">
                <form action="" method="post" name="frmRegister" class="Register">
                    <table>
                        <tr>
                            <td rowspan="14"><img src="../../images/homepage_map.png" /></td>
                        </tr>
                        <tr>
                            <td><label id="lbwhere">Where are <b>you</b>?</label></td>
                        </tr>
                        <tr>
                            <td><label>First Name:</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="firstname" name="txtFirstname" size="35" maxlength="45" /></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                        </tr>
                        <tr>
                            <td><input type="text" id="lastname" name="txtLastname" size="35" maxlength="45" /></td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                        </tr>
                        <tr>
                            <td><input type="text" id ="username"name="txtUsername" size="35" maxlength="45" /></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                        </tr>
                        <tr>
                            <td><input type="text" id ="email" name="txtEmail" size="35" maxlength="45" /></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                        </tr>
                        <tr>
                            <td><input type="password" id ="password" name="txtPassword" size="35" maxlength="45" /></td>
                        </tr>
                        <tr>
                            <td>Password Repeat:</td>
                        </tr>
                        <tr>
                            <td><input type="password" id="repassword" name="txtRePassword" size="35" maxlength="45" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right"><input type="button" value="Register" id="btnRegister" /></td>
                        </tr>
                        <tr>
                            <td><label style="visibility:hidden">con trong</label></td>
                        </tr>
                    </table>

                </form>
            </div>




    </body>
</html>

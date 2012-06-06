<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/js/jquery.js');
$cs->registerScriptFile($baseUrl . '/js/jquery.elastic.js');
$cs->registerCssFile($baseUrl . '/css/style.css');
$cs->registerCssFile($baseUrl . '/css/notification.css');
$cs->registerScriptFile($baseUrl . '/js/bday-picker.min.js');
$cs->registerScriptFile($baseUrl . '/js/jquery_notification_v.1.js');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <title>UIT Social Network</title>       <script type="text/javascript" >            
            // Birthday Picker Using Jquery Plugin bday-picker
             
            $(document).ready(function(){
                $("#birthdaypicker").birthdaypicker({});
        
            });
            
            // ajax login
            
            $(document).ready(function()
            {
                $("#btnLogin").click(function()
                {                    
                    var email= $("#emaillogin").val();
                    var password=$("#passwordlogin").val();
                    var remember = $("#rememberlogin").is(':checked'); 
                    
                    //                    if(name=='' || username=='' || password=='' || gender=='')
                    //                    {
                    //                        $('.success').fadeOut(200).hide();
                    //                        $('.error').fadeOut(200).show();
                    //                    }
                    var dataString = 'emaillogin='+ email 
                        + '&passwordlogin=' + password 
                        + '&rememberlogin=' + remember;
                    
                    
                    $.ajax
                    ({
                        type: "POST",
                        url: "/nevergiveup/index.php/site/indexlogin",
                        data: dataString,
                        cache: false,
                        success: function(html)
                        {
                            // $('.success').fadeIn(200).show();
                            //  $('.error').fadeOut(200).hide();
                            // window.location.replace("../status/");
                          
                            
                            if(html=='SUCCESS'){                                
                                window.location.replace("/nevergiveup/index.php/status/");
                            }
                            else{
                                showNotification({
                                    message: html,
                                    type: "error"
                                });
                            }                       
                            
                            
                            
                            
                        }
                       
                    });
                });
                
                // ajax register
                
                $("#btnRegister").click(function(){
                    var password = $("#password_register").val();                   
                    var firstname = $("#firstname").val();
                    var lastname = $("#lastname").val();
                    var email = $("#email_register").val();
                    var passwordrepeat = $("#repeat_password").val();
                    var sex = $("#sex").val();
                    var birthmonth = $(".birth-month").val();
                    var birthday = $(".birth-day").val();
                    var birthyear = $(".birth-year").val();
                    var dataString = 'firstname=' + firstname 
                        + '&lastname='+ lastname + "&sex=" + sex 
                        + '&password_register=' + password
                        + '&password_repeat='+ passwordrepeat 
                        + '&dob='+ birthyear + "/" + birthmonth + "/" + birthday
                        + '&email_register=' + email;   
                    $.ajax
                    ({
                        type: "POST",
                        url: "/nevergiveup/index.php/site/indexregister",
                        data: dataString,
                        cache: false,
                        success: function(html)
                        {
                            if(html == "SUCCESS"){
                                window.location.replace("/nevergiveup/index.php/status/");
                            }
                            else{
                                obj = JSON && JSON.parse(html) 
                                    || $.parseJSON(html);
                                showNotification({
                                    message: obj.username + " " + obj.email 
                                        + " " + obj.password ,
                                    type: "error"
                                });
                            }
                            
                             
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
                        <td width="216"><label>Email:</label></td>
                        <td width="324">Password:</td>
                    </tr>
                    <tr>
<!--                        <td><input type="text" class="field_container" witdth="200px" id ="usernamelogin" name="usernamelogin" /></td>-->
                        <td><input type="text" class ="field_container" width="200px" id ="emaillogin" name="emaillogin" /></td>
                        <td><input type="password" class="field_container" width="200px" id="passwordlogin" name="passwordlogin" /></td>
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
<!--                    <table>
                        <tr>
                            <td rowspan="14"><img src="<?php
$baseUrl = Yii::app()->baseUrl;
echo $baseUrl . '/images/homepage_map.png'
?>" /></td>
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
                    </table>-->



                    <table cellspacing="0" cellpadding="1" class="uiGrid editor">                       

                        <tbody>
                            <tr>
                                <td rowspan="14"><img src="<?php
                    $baseUrl = Yii::app()->baseUrl;
                    echo $baseUrl . '/images/homepage_map.png'
?>" /></td>

                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="firstname">First Name:</label>
                                </td>
                                <td>
                                    <div class="field_container">
                                        <input type="text" name="firstname" id="firstname" class="inputtext">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="lastname">Last Name:</label>
                                </td>
                                <td>
                                    <div class="field_container">
                                        <input type="text" name="lastname" id="lastname" class="inputtext">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">
                                    <label for="reg_email__">Your Email:</label>
                                </td>
                                <td>
                                    <div class="field_container">
                                        <input type="text" name="email_register" id="email_register" class="inputtext">
                                    </div>
                                </td>
                            </tr>
<!--                            <tr>
                                <td class="label">
                                    <label for="reg_email_confirmation__">Re-enter Email:</label>
                                </td><td><div class="field_container">
                                        <input type="text" name="reg_email_confirmation__" id="reg_email_confirmation__" class="inputtext">
                                    </div>
                                </td>
                            </tr>-->
                            <tr>
                                <td class="label">
                                    <label for="reg_passwd__">New Password:</label>
                                </td>
                                <td>
                                    <div class="field_container">
                                        <input type="password" value="" name="password_register" id="password_register" class="inputtext">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="label">
                                    <label for="reg_passwd__">Repeat Password:</label>
                                </td>
                                <td>
                                    <div class="field_container">
                                        <input type="password" value="" name="repeat_password" id="repeat_password" class="inputtext">
                                    </div>
                                </td>
                            </tr>
                            <tr>


                                <tr>                    
                                    <td class="label">I am:
                                    </td>
                                    <td>
                                        <div class="field_container">
                                            <div class="hidden_elem" style="display:none">
                                                <select><option></option><option></option></select>
                                                <select><option></option><option></option></select>
                                            </div>
                                            <select id="sex" name="sex" class="select">
                                                <option value="0">Select Sex:</option>
                                                <option value="1">Female</option><option value="2">Male</option>
                                            </select>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class="label" >Birthday:
                                    </td>
                                    <td id ="birthdaypicker">
                                        <!--                                    <fieldset>
                                                                                <div class="field_container"> 
                                                                                    <select class="" id="birth-month" name="birth[month]">
                                                                                        <option value="-1">Month:</option>
                                                                                        <option value="1">January</option>
                                                                                        <option value="2">February</option>
                                                                                        <option value="3">March</option>
                                                                                        <option value="4">April</option>
                                                                                        <option value="5">May</option>
                                                                                        <option value="6">June</option>
                                                                                        <option value="7">July</option>
                                                                                        <option value="8">August</option>
                                                                                        <option value="9">September</option>
                                                                                        <option value="10">October</option>
                                                                                        <option value="11">November</option>
                                                                                        <option value="12">December</option> 
                                                                                    </select>                                             
                                                                                    <select class="birth-day" name="birth[day]">
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="8">8</option>
                                                                                        <option value="9">9</option>
                                                                                        <option value="10">10</option>
                                                                                        <option value="11">11</option>
                                                                                        <option value="12">12</option>
                                                                                        <option value="13">13</option>
                                                                                        <option value="14">14</option>
                                                                                        <option value="15">15</option>
                                                                                        <option value="16">16</option>
                                                                                        <option value="17">17</option>
                                                                                        <option value="18">18</option>
                                                                                        <option value="19">19</option>
                                                                                        <option value="20">20</option>
                                                                                        <option value="21">21</option>
                                                                                        <option value="22">22</option>
                                                                                        <option value="23">23</option>
                                                                                        <option value="24">24</option>
                                                                                        <option value="25">25</option>
                                                                                        <option value="26">26</option>
                                                                                        <option value="27">27</option>
                                                                                        <option value="28">28</option>
                                                                                        <option value="29">29</option>
                                                                                        <option value="30">30</option>
                                                                                        <option value="31">31</option> 
                                                                                    </select> 
                                                                                    <select class="" id="birth-year"   name="birth[year]">                                            <option value="-1">Year:</option>
                                                                                        <option value="2012">2012</option>
                                                                                        <option value="2011">2011</option>
                                                                                        <option value="2010">2010</option>
                                                                                        <option value="2009">2009</option>
                                                                                        <option value="2008">2008</option>
                                                                                        <option value="2007">2007</option>
                                                                                        <option value="2006">2006</option>
                                                                                        <option value="2005">2005</option>
                                                                                        <option value="2004">2004</option>
                                                                                        <option value="2003">2003</option>
                                                                                        <option value="2002">2002</option>
                                                                                        <option value="2001">2001</option>
                                                                                        <option value="2000">2000</option>
                                                                                        <option value="1999">1999</option>
                                                                                        <option value="1998">1998</option>
                                                                                        <option value="1997">1997</option>
                                                                                        <option value="1996">1996</option>
                                                                                        <option value="1995">1995</option>
                                                                                        <option value="1994">1994</option>
                                                                                        <option value="1993">1993</option>
                                                                                        <option value="1992">1992</option>
                                                                                        <option value="1991">1991</option>
                                                                                        <option value="1990">1990</option>
                                                                                        <option value="1989">1989</option>
                                                                                        <option value="1988">1988</option>
                                                                                        <option value="1987">1987</option>
                                                                                        <option value="1986">1986</option>
                                                                                        <option value="1985">1985</option
                                                                                        <option value="1984">1984</option>
                                                                                        <option value="1983">1983</option>
                                                                                        <option value="1982">1982</option>
                                                                                        <option value="1981">1981</option>
                                                                                        <option value="1980">1980</option>
                                                                                        <option value="1979">1979</option>
                                                                                        <option value="1978">1978</option>
                                                                                        <option value="1977">1977</option>
                                                                                        <option value="1976">1976</option>
                                                                                        <option value="1975">1975</option>
                                                                                        <option value="1974">1974</option>
                                                                                        <option value="1973">1973</option>
                                                                                        <option value="1972">1972</option>
                                                                                        <option value="1971">1971</option>
                                                                                        <option value="1970">1970</option>
                                                                                        <option value="1969">1969</option>
                                                                                        <option value="1968">1968</option>                                            
                                                                                        <option value="1967">1967</option>
                                                                                        <option value="1966">1966</option>
                                                                                        <option value="1965">1965</option>
                                                                                        <option value="1964">1964</option>
                                                                                        <option value="1963">1963</option>
                                                                                        <option value="1962">1962</option>
                                                                                        <option value="1961">1961</option>
                                                                                        <option value="1960">1960</option>
                                                                                        <option value="1959">1959</option>
                                                                                        <option value="1958">1958</option>
                                                                                        <option value="1957">1957</option>
                                                                                        <option value="1956">1956</option>
                                                                                        <option value="1955">1955</option>
                                                                                        <option value="1954">1954</option>
                                                                                        <option value="1953">1953</option>
                                                                                        <option value="1952">1952</option>
                                                                                    </select>
                                                                                </div>
                                                                            </fieldset>-->




                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">

                                        <span class="btn_regis">
                                            <input id="btnRegister" type="button" value="Sign Up" name="" tabindex="12">
                                        </span>

                                    </td>





                                </tr>




                        </tbody>


                    </table>




                </form>
            </div>




    </body>
</html>

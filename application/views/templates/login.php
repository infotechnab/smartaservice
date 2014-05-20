
<div id="login">
    <div id="outerBorder">
        <div class="loginLeft">
            <?php echo form_open(); ?>
            <table border="0" width="100%">

                <tr style="text-align: center">
                    <td><h3>Existing Customer?</h3> </td>
                </tr>

                <tr style="text-align: center">
                    <td><input type="email" placeholder="Email" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr style="text-align: center">
                    <td><input type="password" placeholder="Password" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr style="text-align: center">
                    <td><input type="submit" value="Sign In" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle" /></td>
                </tr>
                <tr style="text-align: center">
                    <td><p>Forgot Password?</p></td>
                </tr>
            </table>
            <?php form_close(); ?>
        </div>
        <div class="vertical-line">
            <div class="number" id='verticalOr'>OR</div>  
        </div>
        <div class="loginLeft">
            
            <table border="0" width="100%">
                <tr style="text-align: center">
                    <td><h3>Don't have an account yet?</h3></td>
                </tr>
                <tr style="text-align: center">
                    <td> Register with or</td>
                </tr>
                <tr style="text-align: center">
                    <td> go to checkout as new customer</td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr style="text-align: center">
                    <td><b><div class="updateBtnStyle" style="background:black; width: 20%; text-align: center; margin: 0 auto 0 auto;"><?php echo anchor('view/registeruser', 'Continue') ?></div></b></td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr> <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr><td></td></tr>

                <tr style="text-align: center">
                    <td><hr id="nav"/><div class="number" id="two">OR</div></td>
                </tr>
                <tr style="text-align: center">
                    <td><p>Or use your social account</p></td>
                </tr>             
            </table>
            <?php ?>
            <div style="margin: 0 auto 0 auto;text-align: center;">
                <input type="submit" value="Continue Shopping" style="font-size: 20px;font-weight: bold;padding: 5px; width: 80px; width: auto;" class="updateBtnStyle" />
            </div>
        </div>    





        <div class="clear"></div>
    </div> 
</div> 
</div> 
</div> 







<!-- facebook checking -->

<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>

<script src="//connect.facebook.net/en_US/all.js"></script>

<script type="text/javascript">

    // Initialize the Facebook JavaScript SDK
    FB.init({
        appId: '798589833503780',
        xfbml: true,
        status: true,
        cookie: true
    });
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            // the user is logged in and has authenticated your
            // app, and response.authResponse supplies
            // the user's ID, a valid access token, a signed
            // request, and the time the access token 
            // and signed request each expire
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
            //alert(accessToken);
        } else if (response.status === 'not_authorized') {
            // the user is logged in to Facebook, 
            // but has not authenticated your app
        } else {
            // the user isn't logged in to Facebook.
        }
    });
    // Check if the current user is logged in and has authorized the app
    FB.getLoginStatus(checkLoginStatus);

    // Login in the current user via Facebook and ask for email permission
    function authUser() {
        FB.login(checkLoginStatus, {scope: 'email'});
    }

    // Check the result of the user status and display login button if necessary
    function checkLoginStatus(response) {
        if (response && response.status == 'connected') {
            //alert('User is authorized');

            // Hide the login button
            document.getElementById('loginButton').style.display = 'none';


            // Now Personalize the User Experience
            console.log('Access Token: ' + response.authResponse.accessToken);
        } else {
            // alert('User is not authorized');

            // Display the login button
            document.getElementById('loginButton').style.display = 'block';
            document.getElementById('subformDiv').style.display = 'none';
        }
    }


</script>

<?php
// Remember to copy files from the SDK's src/ directory to a
// directory in your application on the server, such as php-sdk/
require_once('facebook.php');

$config = array(
    'appId' => '798589833503780',
    'secret' => '7ac0fd031862d9cfad8e81a133438920',
);
?>

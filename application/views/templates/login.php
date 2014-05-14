<div id="contentBackground">
                <div id='contentWrapper'>
                    <div id="login">
                        <div id="outerBorder">
                            <div class="loginLeft">
                                <table width="200" style="margin-left:auto;margin-right:auto">
                                    
                                        <tr style="text-align: center;">
                                            <td><h3>Existing Customer?</h3></td>
                                        </tr>
                                        <tr>
                                            <td><input type="email" placeholder="Email" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                                        </tr>
                                       <tr>
                                           <td><input type="password" placeholder="Password" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <td><input type="submit" value="Sign In" style="padding: 5px; width: 80px;" /></td>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <td><p>Forgot Password?</p></td>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <td><p>Or use your social account</p></td>
                                        </tr>
                                        <tr>
                                            <td> <div class="fb-login-button" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></div></td>
                                        </tr>
                                    
                                </table>
                    </div>
                            
                            <div class="vertical-line">
                            <div class="number" id='verticalOr'>OR</div>  
        </div>
        
                                <div class="loginLeft">
                                    <table width="250" style="margin-left:auto;margin-right:auto">
                                 
                                        <tr>
                                            <td><h3>Don't have an account yet?</h3></td>
                                        </tr>
                                        
                                        
                                        <tr><td></td></tr>
                                        
                                   
                                </table>
                                    
                                    
                                 <hr id="nav">
    <div id="mainNav">
        
        
        <div class="number" id="two" style="margin-left: 30%;">OR</div>
        
        
    </div>   
                                </div>
                             
                        </div>
                        <div class="clear"></div>
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
      
      // Check if the current user is logged in and has authorized the app
      FB.getLoginStatus(checkLoginStatus);
      
      // Login in the current user via Facebook and ask for email permission
      function authUser() {
        FB.login(checkLoginStatus, {scope:'email'});
      }
      
      // Check the result of the user status and display login button if necessary
      function checkLoginStatus(response) {
        if(response && response.status == 'connected') {
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
?>
 
 
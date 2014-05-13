<div id="contentBackground">
                <div id='contentWrapper'>
                    <div id="login">
                        <div id="outerBorder">
                            <div class="loginLeft">
                                <table width="200" style="margin-left:auto;margin-right:auto">
                                    <tabledata>
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
                                    </tabledata>
                                </table>
                                
                               
                                
                                
                                
                                
                            </div>
                            
                            <div class="vertical-line">
                            <div class="number" id='verticalOr'>OR</div>  
        </div>
        
       <!-- <div class="number" id="two" style="margin-left: 50%;">OR</div> -->
        
        
              
                                <div class="loginLeft">
                                    <table width="200" style="margin-left:auto;margin-right:auto">
                                    <tabledata>
                                        <tr>
                                            <td><h3>Don't have an account yet?</h3></td>
                                        </tr>
                                        <tr>
                                            <td><input type="email" placeholder="Email" size="40"  required/></td>
                                        </tr>
                                       <tr>
                                           <td><input type="password" placeholder="Password" size="40" required/></td>
                                        </tr>
                                        
                                        <tr><td></td></tr>
                                        
                                    </tabledata>
                                </table>
                                    
                                    
                                 <hr id="nav">
    <div id="mainNav">
        
        
        <div class="number" id="two" style="margin-left: 30%;">OR</div>
        
        
    </div>   
                                </div>
                             <div class="clear"> </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                     <div class="clear"> </div>

                </div> 

            </div>



<!-- facebook checking -->

<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '798589833503780',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });
  FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    console.log('Logged in.');
  }
  else {
    FB.login();
  }
});

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>

<iframe src="https://www.facebook.com/plugins/registration?
             client_id=798589833503780&
             redirect_uri=http://www.salyani.com.np">
</iframe>
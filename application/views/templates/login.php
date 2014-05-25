
<div id="login">
    <div id="outerBorder">
        <div class="loginLeft">
            <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>
            <?php echo form_open('cartdetails/login'); ?>
            <table border="0" width="100%">

                <tr style="text-align: center">
                    <td><h3>Existing Customer?</h3> </td>
                </tr>

                <tr style="text-align: center">
                    <td><input name="email" type="email" placeholder="Email" size="35" class="placeholder" required/></td>
                </tr>
                <tr style="text-align: center">
                    <td><input name="pass" type="password" placeholder="Password" size="35" class="placeholder" required/></td> 
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                <tr style="text-align: center">
                    <td><input type="submit" value="Sign In" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle" /></td>
                </tr>
                <tr style="text-align: center">
                    <td><a href="view/forgotPassword"><p>Forgot Password?</p></a></td>
                </tr>
            </table>
            <?php form_close(); ?>
        </div>
        <div class="vertical-line">
            <div class="number" id='verticalOr'>OR</div>  
        </div>
        <div class="loginLeft">
            <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>
            
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
                    <td><b><div class="updateBtnStyle" style="background:black; width: 28%; text-align: center; margin: 0 auto 0 auto;"><?php echo anchor('view/registeruser', 'Continue') ?></div></b></td>
                </tr>
               
                             
            </table>
            <?php ?>
           
        </div>    
        <div class="clear"></div>




        
    </div> 
</div> 
<div class="clear"></div>
</div> 
</div> 







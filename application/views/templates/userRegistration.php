
<div id="register">
    <?php echo form_open_multipart('view/adduser'); ?>
    <table border="0" width="100%">
        
        <tr style="text-align: center">
            <td><input type="text" name="user_name" placeholder="User Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="('user_fname" placeholder="First Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="user_lname" placeholder="Last Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="user_address" placeholder="Address" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="user_contact" placeholder="Contact Number" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="email" name="user_email" placeholder="Email" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="password" name="user_pass" placeholder="Password" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
        </tr>
         <tr style="text-align: center">
            <td><input type="password" name="user_repass" placeholder="Retype Password" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
        </tr>
        <tr style="text-align: center">
            <td><input type="submit" value="Register" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
        </tr>

    </table>
    <?php echo form_close(); ?>
</div> 
</div> 
</div> 



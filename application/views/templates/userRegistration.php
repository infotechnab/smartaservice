
<div id="register">
    <?php echo form_open_multipart('bnw/adduser'); ?>
    <table border="0" width="100%">
        
        <tr style="text-align: center">
            <td><input type="text" name="name" placeholder="User Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="fname" placeholder="First Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="lname" placeholder="Last Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="address" placeholder="Address" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="contact" placeholder="Contact Number" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="email" name="email" placeholder="Email" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="password" placeholder="Password" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
        </tr>
        <tr style="text-align: center">
            <td><input type="submit" value="Register" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
        </tr>




    </table>
    <?php form_close(); ?>
</div> 
</div> 
</div> 



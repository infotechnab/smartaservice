
<div id="register">
    <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>
    <?php echo form_open('view/adduser'); ?>
    <table border="0" width="100%">
        
        <tr style="text-align: center">
            <td><input type="text" name="u_name" placeholder="User Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="u_fname" placeholder="First Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="u_lname" placeholder="Last Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="u_address" placeholder="Address" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="u_contact" placeholder="Contact Number" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="email" name="u_email" placeholder="Email" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="password" name="u_pass" placeholder="Password" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
        </tr>
         <tr style="text-align: center">
            <td><input type="password" name="u_repass" placeholder="Retype Password" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
        </tr>
        <tr style="text-align: center">
            <td><input type="submit" value="Register" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
        </tr>

    </table>
    <?php echo form_close(); ?>
</div> 
</div> 
</div> 



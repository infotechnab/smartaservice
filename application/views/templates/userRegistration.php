
<div id="register">
    <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>
    <?php echo form_open('view/adduser'); ?>
    <table align="center" border="0" width="50%">
               <tr>
                    <td colspan="2"><h3 style="margin: 0px 0px 10px 0px; padding: 2px;">Personal Details</h3></td>
                    
                </tr>
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">User Name</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="u_name" placeholder="User Name" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                    <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                </tr>
                <tr >
                    <td><input type="text" name="u_fname" placeholder="First Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    <td><input type="text" name="u_lname" placeholder="Last Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="street_address" placeholder="Street Address" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="Town_address" placeholder="Town/ City" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>

                </tr>
                <tr>
                    <td><input type="text" name="District_address" placeholder="District/ State" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    <td><input type="text" name="Country" placeholder="Country" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="u_contact" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">Email</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email" name="u_email" placeholder="Email" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">Password</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="u_pass" placeholder="Password" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="u_repass" placeholder="Retype Password" size="48" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td> 
                </tr>
                <tr>
                    <td colspan="2"><input type="radio" name="pickup" onclick="handleClick(this);" value="pickup">Pick Up</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="radio" name="pickup" onclick="handleClick(this);" value="shipSame">Ship to above address</td>
                </tr>
                <td id='shipenable'colspan="2"><input type="radio"  name="pickup" onclick="handleClick(this);" value="shipDifferent">Ship to different Address</td>
                </tr>
                <tr style="text-align: center">
                    <td colspan="2"><input type="submit" value="Register" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                </tr>

            </table>
    <?php echo form_close(); ?>
</div> 
</div> 
</div>
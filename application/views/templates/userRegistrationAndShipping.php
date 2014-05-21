<?php
if(!empty($detail))
{
foreach ($detail as $userdetail)
{
    $username = $userdetail->user_name;
    $fname = $userdetail->user_fname;
    $lname = $userdetail->user_lname;
    $email = $userdetail->user_email;
    $contact = $userdetail->contact;
    $address = $userdetail->address;
    $city = $userdetail->city;
    $state = $userdetail->state;
    $zip = $userdetail->zip;
    $country = $userdetail->country;
}
?>


<div id="login">
    <div id="outerBorder">
        <div class="RegisterLeft">

            <table border="0" width="50%">
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">User Name</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="u_name" value="<?php echo $username;?>" placeholder="User Name" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                    <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                </tr>
                <tr >
                    <td><input type="text" name="u_fname" value="<?php echo $fname; ?>" placeholder="First Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    <td><input type="text" name="u_lname" value="<?php echo $lname;?>" placeholder="Last Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="street_address" value="<?php echo $address; ?>" placeholder="Street Address" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="Town_address" value="<?php echo $city; ?>" placeholder="Town/ City" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>

                </tr>
                <tr>
                    <td><input type="text" name="District_address" value="<?php echo $state; ?>" placeholder="District/ State" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    <td><input type="text" name="Country" value="<?php echo $country; ?>" placeholder="Country" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="u_contact" value="<?php echo $contact; ?>" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email" name="u_email" value="<?php echo $email; ?>" placeholder="Email" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
               
                <tr>
                    <td colspan="2"><input type="radio" name="pickup" value="pickup">Pick Up</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="radio" name="pickup" value="shipSame">Ship to above address</td>
                </tr>
                <td colspan="2"><input type="radio" name="pickup" value="shipDifferent">Ship to different Address</td>
                </tr>
                <tr style="text-align: center">
                    <td colspan="2"><input type="submit" value="Register" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                </tr>

            </table>

        </div>

        <div class="loginLeft">

            <table border="0" width="50%">

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
                    <td colspan="2"><input type="text" name="u_contact" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email" name="u_email" placeholder="Email" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
               

                <tr style="text-align: center">
                    <td><input type="submit" value="Submit" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                </tr>

            </table>

        </div>    





        <div class="clear"></div>
    </div> 
</div> 
</div> 
</div> 

<?php } else { ?>


<div id="login">
    <div id="outerBorder">
        <div class="RegisterLeft">

            <table border="0" width="50%">
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">User Name</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="u_name"  placeholder="User Name" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                    <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                </tr>
                <tr >
                    <td><input type="text" name="u_fname"  placeholder="First Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    <td><input type="text" name="u_lname"  placeholder="Last Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="street_address"  placeholder="Street Address" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="Town_address"  placeholder="Town/ City" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>

                </tr>
                <tr>
                    <td><input type="text" name="District_address"  placeholder="District/ State" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    <td><input type="text" name="Country"  placeholder="Country" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="u_contact"  placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email" name="u_email"  placeholder="Email" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
               
                <tr>
                    <td colspan="2"><input type="radio" name="pickup" value="pickup">Pick Up</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="radio" name="pickup" value="shipSame">Ship to above address</td>
                </tr>
                <td colspan="2"><input type="radio" name="pickup" value="shipDifferent">Ship to different Address</td>
                </tr>
                <tr style="text-align: center">
                    <td colspan="2"><input type="submit" value="Register" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                </tr>

            </table>

        </div>

        <div class="loginLeft">

            <table border="0" width="50%">

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
                    <td colspan="2"><input type="text" name="u_contact" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email" name="u_email" placeholder="Email" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                </tr>
               

                <tr style="text-align: center">
                    <td><input type="submit" value="Submit" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                </tr>

            </table>

        </div>    





        <div class="clear"></div>
    </div> 
</div> 
</div> 
</div> 

<?php } ?>

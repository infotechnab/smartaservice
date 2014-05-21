<script>
var currentValue = 0;
function handleClick(pickup) {
    ('Old value: ' + currentValue);
    ('New value: ' + pickup.value);
    currentValue = pickup.value;
    //alert(currentValue)
                if(pickup.value==="shipDifferent"){

           document.getElementById('RegisterRight').style.display = 'block';    

            }
            else
            {
                document.getElementById('RegisterRight').style.display = 'none'; 
            }
}
</script>
<div id="login">
    <div id="outerBorder">
        <div id="RegisterLeft">

            <table align="center" border="0" width="50%">
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

        </div>

        <div id='RegisterRight'>

            <table align="center" border="0" width="50%">

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
               

                

            </table>

        </div>    





        <div class="clear"></div>
    </div> 
</div> 
</div> 
</div> 









<div id="register">
    <?php echo form_open_multipart('view/adduser'); ?>
    <table border="0" width="100%">
        
        <tr style="text-align: center">
            <td><input type="text" name="receiver_name" placeholder="Receiver's Name" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        
        <tr style="text-align: center">
            <td><input type="text" name="receiver_address" placeholder=" Shipping Address" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>
        <tr style="text-align: center">
            <td><input type="text" name="Receiver_contact" placeholder=" Receiver's Contact Number" size="35" style="box-shadow: inset 0px  #888, inset 0px  #888; outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
        </tr>

        <tr style="text-align: center">
            <td><input type="submit" value="Submit" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
        </tr>

    </table>
    <?php echo form_close(); ?>
</div> 
</div> 
</div> 



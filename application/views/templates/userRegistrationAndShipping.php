  <?php
$this->load->helper('currency');
?>
<?php
   if(!empty($shiping))
   {
 foreach ($shiping as $scost)
 {
     $cost = $scost->price;
 }
   }else
   {
       $cost = 0;
   }
?>

<script>
    
    $(document).ready(function(){
        $(function(){
             var shiping = parseInt("<?php echo $cost; ?>");
           $('#cost').html(shiping);
            ship(shiping);
        });
        $('.ship').click(function(){
            var shiping = parseInt("<?php echo $cost; ?>");
           $('#cost').html(shiping);
            ship(shiping);
            
        });
       $('.pick').click(function(){
            var shiping = parseInt(" 0 ");
            $('#cost').html(shiping);
            //alert('pick');
            ship(shiping);
        });
        
        $('#register').click(function(){
          //  alert('work');
            //$('#table_register').css("display","block");
            $('#table_register').toggle();
           // alert('sdfdf');
        });
        
    });
    
    
    function ship(shiping){
        
        var price = parseInt("<?php echo $this->cart->total();?>");
    var total = price + shiping;
   // alert(shiping);
      $('#test').html(total);
}

//document.getElementById("test").innerHTML = total;
</script>
<style>
    .register{
        display: block;
    }
</style>
        <?php
if (!empty($detail)) {
    // die("entdfdfer");
    foreach ($detail as $userdetail) {
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
    
    echo form_open_multipart('cartdetails/login_insert_cart_item');
    ?>
 <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>
    
    <div id="login">
        <div id="outerBorder">
           
            <div id="RegisterLeft">

                <table align="center" border="0" width="50%">
                    <tr>
                        <td colspan="2"><h3 style="margin: 0px 0px 10px 0px; padding: 2px;">Personal Details</h3></td>

                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">User Name</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="u_name" value="<?php echo $username; ?>" placeholder="User Name" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    </tr>
                    <tr>
                        <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                        <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                    </tr>
                    <tr >
                        <td><input type="text" name="u_fname" value="<?php echo $fname; ?>" placeholder="First Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                        <td><input type="text" name="u_lname" value="<?php echo $lname; ?>" placeholder="Last Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" value="<?php echo $address; ?>" name="street_address" placeholder="Street Address" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="Town_address" value="<?php echo $city; ?>" placeholder="Town/ City" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="District_address" value="<?php echo $state; ?>" placeholder="District/ State" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                        <td><input type="text" name="zip" value="<?php echo $zip; ?>" placeholder="zip" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" value="<?php echo $country; ?>" placeholder="Country" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
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
                        <td colspan="2"><input type="text" name="u_email" value="<?php echo $email; ?>" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
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
                        <td colspan="2"><input type="submit" value="Continue" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                    </tr>

                </table>

            </div>

            <div id="RegisterRight">

                <table border="0" width="50%">

                    <tr>
                        <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                        <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                    </tr>
                    <tr >
                        <td><input type="text" name="s_fname" placeholder="First Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                        <td><input type="text" name="s_lname" placeholder="Last Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_address" placeholder="Street Address" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="c_city" placeholder="Town/ City" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="s_state" placeholder="District/ State" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                        <td><input type="text" name="s_zip" placeholder="zip" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" placeholder="Country" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_contact" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Email</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="s_email" placeholder="Email" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>

                </table>

            </div>    


<?php echo form_close(); ?>


            <div class="clear"></div>
        </div> 
    </div> 

    </div> 
    </div> 

<?php } else {
    
    if(isset($error))
    {
        echo $error;
    }
     echo form_open('cartdetails/insert_cart_item');
    ?>
 <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>

    <div id="login">
        <div id="outerBorder">
             <div id="topRegister">
                <p><input type="checkbox" id="register" value="=1" name="register"/>Register</p>
                <div id="table_register" style="display: none;" >
                <table  border="0" width="30%" >
                   <tr>
                        <td><p style="margin: 0px; padding: 2px;">User Name</p></td>
                        <td><p style="margin: 0px; padding: 2px;">Email</p></td>
                         <td><p style="margin: 0px; padding: 2px;">Password</p></td>
                    </tr>
                    <tr>
                        <td ><input type="text" name="u_name" placeholder="User Name" size="30" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                        <td ><input type="email" name="u_email" placeholder="Email" size="30" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                        <td ><input type="password" name="u_pass" placeholder="Password" size="30" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr> 
                </table>
                </div>
            </div>
            <div id="RegisterLeft">

                <table align="center" border="0" width="50%">
                    <tr>
                        <td colspan="2"><h3 style="margin: 0px 0px 10px 0px; padding: 2px;">Personal Details</h3></td>

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
                        <td><input type="text" name="zip" placeholder="zip" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" placeholder="Country" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="u_contact" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" required/></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="radio" name="pickup" onclick="handleClick(this);" class="pick" value="pickup">Pick Up</td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="radio" name="pickup" onclick="handleClick(this);"  value="shipSame">Ship to above address</td>
                    </tr>
                    <td id='shipenable' colspan="2"><input type="radio"  name="pickup" class="ship" onclick="handleClick(this);" value="shipDifferent">Ship to different Address</td>
                    </tr>
                    <tr style="text-align: center">
                        <td colspan="2"><input type="submit" value="Register" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                    </tr>

                </table>

            </div>

            <div id="RegisterRight">

                <table border="0" width="50%">
<tr>
                        <td colspan="2"><h3 style="margin: 0px 0px 10px 0px; padding: 2px;">Shipping Details</h3></td>

                    </tr>
                    <tr>
                        <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                        <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                    </tr>
                    <tr >
                        <td><input type="text" name="s_fname" placeholder="First Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                        <td><input type="text" name="s_lname" placeholder="Last Name" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_address" placeholder="Street Address" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="c_city" placeholder="Town/ City" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="s_state" placeholder="District/ State" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                        <td><input type="text" name="s_zip" placeholder="zip" size="20" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" placeholder="Country" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_contact" placeholder="Contact Number" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Email</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="s_email" placeholder="Email" size="48" style="outline: none; border: 1px solid #dddddd; padding: 10px; border-radius: 5px;" /></td>
                    </tr>

                </table>

            </div>  
            
            <?php if ($this->cart->contents()) {  ?>
<div id="total_item"><h4>Total: <?php echo $this->cart->total_items(); ?> items</h4></div>
<table width="97%" style="margin: 0px 0px 10px 12px;">
                    <tr>
                        <th class="hide" width='55px'></th>
                        <th style="text-align: left; padding: 0px 0px 0px 15px;">Name</th>
                        <th>Qty</th>
                        <th></th>
                        <th>Price</th>
                        
                        <th> </th>
                    </tr>
                    <?php if ($cart = $this->cart->contents()) { ?>
                        <?php foreach ($cart as $item) { ?>                                      
                       
                            <tr>

                                <td class="hide"><img class="hide" src="<?php echo base_url().'content/uploads//images/'.$item['image1']; ?>" height="50" width="50"> </td>

                                

                                <td style="padding: 0px 0px 0px 10px;"><?php echo $item['name']; ?> </td>
                                <td style="text-align: center;"><?php echo $item['qty'] ?></td>
                                <td>x</td>
                                <td style="text-align: center;"><?php get_currency($item['price']); ?></td>
                            <td style="text-align: center;"></td>
                            </tr>
                            
                        <?php }
                    } ?>
                            <tr >
                        <td style="padding: 0px 0px 0px 15px; border-top: 1px solid #222;"><b>Total</b>:</td>
                        <td class="hide"></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: center; border-top: 1px solid #222;"> <b><?php get_currency($this->cart->total()); ?></b></td>
                        
                    </tr>
                   
                </table>
<?php }

else { ?>
<div id="total_item"><h4>Your cart is empty</h4></div>
    <?php }  
    ?>

            <div class="clear"></div>
        </div> 
    </div>

            <div id="order_summary">
                <table width="100%">
                    <tr class='amt_summary'>
                        <td class='txtright' width='50%'>Total: </td>
                        <td><b><?php get_currency($this->cart->total()); ?></b></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Shipping Cost:</td>
                        <td id="cost"></td>
                        
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Discount:</td>
                        <td></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Total:</td>
                        <td id="test">   </td>
                    </tr>
                </table>
             
            </div>
            </div>
    </div> 
    </div> 


<?php echo form_close(); ?>



<?php } ?>
<script>
        var currentValue = 0;
        function handleClick(pickup) {
            ('Old value: ' + currentValue);
            ('New value: ' + pickup.value);
            currentValue = pickup.value;
            
            if (pickup.value === "shipDifferent") {

                document.getElementById('RegisterRight').style.display = 'block';

            }
            else
            {
                document.getElementById('RegisterRight').style.display = 'none';
            }
        }
    </script>
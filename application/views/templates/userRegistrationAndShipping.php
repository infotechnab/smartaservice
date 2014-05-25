<?php
$this->load->helper('currency');
if (!empty($shiping)) {
    foreach ($shiping as $scost) {
        $cost = $scost->price;
    }
} else {
    $cost = 0;
}
if ($cart = $this->cart->contents()) {
    foreach ($cart as $item) {

        if (isset($item['shiping']) == 'enabled') {
            $shiping_cost = TRUE;
            echo "shipping is enabled";
        }
    }
}
?>

<script>

    $(document).ready(function() {
        $(function() {
            var shiping = parseInt("<?php
if (isset($shiping_cost) == true) {
    echo $cost;
} else {
    $cost = 0;
}
?>");
            $('#cost').html(shiping);
            ship(shiping);
        });
        $('.ship').click(function() {
            var shiping = parseInt("<?php echo $cost; ?>");
            $('#cost').html(shiping);
            ship(shiping);

        });
        $('.pick').click(function() {
            var shiping = parseInt(" 0 ");
            $('#cost').html(shiping);
            //alert('pick');
            ship(shiping);
        });

        $('#continueRegister').click(function() {
            //  alert('work');
            //$('#table_register').css("display","block");
            $('#table_register').toggle();
            // alert('sdfdf');
        });
    });
    function ship(shiping) {
        var price = parseInt("<?php echo $this->cart->total(); ?>");
        var total = price + shiping;
        // alert(shiping);
        $('#test').html(total);
        
    }

    //document.getElementById("test").innerHTML = total;
</script>

<script>
    var base_url = '<?php echo base_url(); ?>';
    $(document).ready(function() {
        $('.checkkey').click(function() {
            var key = $('#couponkey').val();
            var subtotal = parseInt("<?php echo $this->cart->total(); ?>");
            // var dataString = 'id=' + key;
            //alert('sdfdsf');
            $.ajax({
                type: "POST",
                url: base_url + 'index.php/bnw/checkcoupon',
                data: {
                    'coupon' : key,
                    'subtotal' : subtotal
                },
                success: function(msgs)
                {
                    $("#nfcoupon").html(msgs);
                    disrate();
                }
                
            });
        });

        $('#showcoupon').click(function() {
            $('#coupontext').toggle();
        });

    });

    function disrate(){
    
        var shiping = parseInt("<?php
if (isset($shiping_cost) == true) {
    echo $cost;
} else {
    $cost = 0;
}
?>");
        var price = parseInt("<?php echo $this->cart->total(); ?>");
        var total = price + shiping;
       
        if(rate>0)
        {
            var dis = total * parseInt(rate)/100;
            var grandtotal = total - dis;
            // var price = rate+'%';
            $('#rate').html(rate+'%');
            $('#test').html(grandtotal);
        }
        else
        {
            rate = 0;
            $('#rate').html(rate+'%');
            $('#test').html(total);
        }
           
       
          
    }

</script>
<style>
    .register{
        display: block;
    }
    #showcoupon{
        cursor: pointer;
    }
</style>
<?php
if (!empty($detail)) {

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
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        echo validation_errors();
        ?> </p>

    <div id="login">
        <div id="leftRegister">
            <div id="RegisterLeft">

                <table border="0" width="77%">
                    <tr>
                        <td colspan="2"><h3 style="margin: 0px 0px 10px 0px; padding: 2px;">Personal Details</h3></td>

                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">User Name</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="u_name" value="<?php echo $username; ?>" placeholder="User Name" size="47" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                        <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                    </tr>
                    <tr >
                        <td><input type="text" name="u_fname" value="<?php echo $fname; ?>" placeholder="First Name" size="20" class="placeholder" required/></td>
                        <td><input type="text" name="u_lname" value="<?php echo $lname; ?>" placeholder="Last Name" size="20" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" value="<?php echo $address; ?>" name="street_address" size="47" placeholder="Street Address" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="Town_address" value="<?php echo $city; ?>" placeholder="Town/ City" size="47" class="placeholder" required/></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="District_address" value="<?php echo $state; ?>" placeholder="State" size="20" class="placeholder" required/></td>
                        <td><input type="text" name="zip" value="<?php echo $zip; ?>" placeholder="Post Code" size="20" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" value="<?php echo $country; ?>" placeholder="Country" size="47" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="u_contact" placeholder="Contact Number" size="47" class="placeholder" required/></td> 
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Email</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="u_email" value="<?php echo $email; ?>" placeholder="Contact Number" size="47" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="pickup" onclick="handleClick(this);" value="pickup">Pick Up</td>
                        <td id='shipenable'><input type="radio"  name="pickup" onclick="handleClick(this);" value="shipDifferent">Ship to different Address</td>
                    </tr>

                    <tr style="text-align: center">
                        <td colspan="2"><input id="registeres" type="submit" value="Continue" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                    </tr>

                </table>

            </div>

            <div id="RegisterRight">

                <table border="0" width="68%">

                    <tr>
                        <td><p style="margin: 0px; padding: 2px;">First Name</p></td>
                        <td><p style="margin: 0px; padding: 2px;">Last Name</p></td>
                    </tr>
                    <tr >
                        <td><input type="text" name="s_fname" placeholder="First Name" size="20" class="placeholder" /></td>
                        <td><input type="text" name="s_lname" placeholder="Last Name" size="20" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_address" placeholder="Street Address" size="47" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="c_city" placeholder="Town/ City" size="47" class="placeholder" /></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="s_state" placeholder="District/ State" size="20" class="placeholder" /></td>
                        <td><input type="text" name="s_zip" placeholder="zip" size="20" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" placeholder="Country" size="47" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_contact" placeholder="Contact Number" size="47" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Email</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="s_email" placeholder="Email" size="47" class="placeholder" /></td>
                    </tr>
                    <tr style="text-align: center">
                        <td colspan="2"><input id="registereslast" type="submit" value="Continue" style="padding: 5px; width: 80px; background-color: black;" class="updateBtnStyle"/></td>
                    </tr>

                </table>

            </div>    
            <?php echo form_close(); ?>
        </div> 
        <div id="verticalline" style="width: 1px; min-height: 460px; background-color: #222; float: left;"></div>
        <div id="RegisterLeftCart">
            <?php if ($this->cart->contents()) { ?>
                <h3 style="margin: 0px 0px 10px 10px; padding: 2px;">Cart Details</h3>
                <div id="total_item"><h4 style="margin: 0px 0px 5px 0px">Total: <?php echo $this->cart->total_items(); ?> items</h4></div>
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
                                <td class="hide"><img class="hide" src="<?php echo base_url() . 'content/uploads//images/' . $item['image1']; ?>" height="50" width="50"> </td>
                                <td style="padding: 0px 0px 0px 10px;"><?php echo $item['name']; ?> </td>
                                <td style="text-align: center;"><?php echo $item['qty'] ?></td>
                                <td>x</td>
                                <td style="text-align: center;"><?php get_currency($item['price']); ?></td>
                                <td style="text-align: center;"></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    <tr>
                        <td style="padding: 0px 0px 0px 15px; border-top: 1px solid #222;"><b>Total</b>:</td>
                        <td style="padding: 0px 0px 0px 15px; border-top: 1px solid #222;" class="hide"></td>
                        <td style="padding: 0px 0px 0px 15px; border-top: 1px solid #222;"></td>
                        <td style="padding: 0px 0px 0px 15px; border-top: 1px solid #222;"></td>
                        <td style="text-align: center; border-top: 1px solid #222;"> <b><?php get_currency($this->cart->total()); ?></b></td>
                    </tr>
                </table>
            <?php } else {
                ?>
                <div id="total_item"><h4>Your cart is empty</h4></div>
            <?php }
            ?>
            <h3 style="margin: 10px 0px 10px 10px; padding: 2px;">Payment Details</h3>
            <div id="coupontext" style="width: 96%; margin: 0px; padding: 2%;">
                <div id="nfcoupon"></div>
                <table>
                    <tr>
                        <td><input class="placeholder" size="22" type="text" name="couponkey" id="couponkey" placeholder="Type your key here" /></td>
                        <td><input type="button" class="checkkey" value="Apply Coupon" style="padding: 5px; width: 100%; background-color: black;" class="updateBtnStyle" /></td>
                    </tr>
                </table>
            </div>
            <div id="order_summary">
                <table width="100%">
                    <tr class='amt_summary'>
                        <td class='txtright' width='50%'><span>Sub-total:</span> </td>
                        <td><b><?php get_currency($this->cart->total()); ?></b></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Shipping Cost:</td>
                        <td id="cost"></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Discount:</td>
                        <td id="rate"></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'><b>Grand Total:</b></td>
                        <td id="test">   </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clear"></div>       
    </div>
    </div>
    <div class="clear"></div>    
    </div>
    <!-- if logged in the above view works but 
    if clicked in continue the following view works -->
    <?php
} else {
    if (isset($error)) {
        echo $error;
    }
    echo form_open('cartdetails/insert_cart_item');
    ?>
    <p id="sucessmsg">
        <?php
        if ($this->session->flashdata('message')) {
            echo $this->session->flashdata('message');
        }
        echo validation_errors();
        ?> </p>
    <div id="login">
        <div id="leftRegister">
            
            <div id="RegisterLeft">
                <table border="0" width="77%">
                    <tr>
                        <td colspan="2"><h3 style="margin: 0px 0px 10px 0px; padding: 2px;">Personal Details</h3></td>

                    </tr>

                    <tr>
                         <td colspan="2"><p style="margin: 0px; padding: 2px;">Full Name</p></td>
                    </tr>
                    <tr >
                        <td><input type="text" name="u_fname" placeholder="First Name" size="20" class="placeholder" required/></td>
                        <td><input type="text" name="u_lname" placeholder="Last Name" size="20" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="street_address" placeholder="Street Address" size="47" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="Town_address" placeholder="Town/ City" size="47" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="District_address" placeholder=" State" size="20" class="placeholder" required/></td>
                        <td><input type="text" name="zip" placeholder="Post Code" size="20" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" placeholder="Country" size="47" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="u_contact" placeholder="Contact Number" size="47" class="placeholder" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Delivery Options</p></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="pickup" onclick="handleClick(this);" class="pick" value="pickup" checked>Right to my address</td>
                        <td id='shipenable' colspan="2">
                            <input type="radio"  name="pickup" class="ship" onclick="handleClick(this);" value="shipDifferent">To different address</td>
                    </tr>
                    
                </table>
            </div>   
            <div id="RegisterRight">
                <table border="0" width="68%">
                    <tr>
                        <td colspan="2"><h3 style="margin: 0px 0px 10px 0px; padding: 2px;">Shipping Details</h3></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Full Name</p></td>
                        
                    </tr>
                    <tr>
                        <td><input type="text" name="s_fname" placeholder="First Name" size="20" class="placeholder" /></td>
                        <td><input type="text" name="s_lname" placeholder="Last Name" size="20" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Address</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_address" placeholder="Street Address" size="47" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="c_city" placeholder="Town/ City" size="47" class="placeholder" /></td>

                    </tr>
                    <tr>
                        <td><input type="text" name="s_state" placeholder="District/ State" size="20" class="placeholder" /></td>
                        <td><input type="text" name="s_zip" placeholder="zip" size="20" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="country" placeholder="Country" size="47" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Contact Number</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="s_contact" placeholder="Contact Number" size="47" class="placeholder" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p style="margin: 0px; padding: 2px;">Email</p></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="s_email" placeholder="Email" size="47" class="placeholder" /></td>
                    </tr>
                    
                </table>
            </div> 
            
            <div id="RegisterLeft">
                <h3 style="margin: 0px 0px 10px 0px; padding: 2px; float: left; width: 55%">User Registration (Optional)</h3>
                <span href="" id="continueRegister">Register</span>
                
                <div class="clear"></div>
                <p>Register yourself you are returning user. </p>
                <div id="table_register" style="display: none;" >
                    <table border="0" width="77%" >
                        <tr>
                        <td colspan="2"></td>

                    </tr>
                        <tr>
                            <td colspan="2"><p style="margin: 0px; padding: 2px;">User Name</p></td>
                        </tr>
                        <tr>
                            <td colspan="2" ><input type="text" name="u_name" placeholder="User Name" size="47" class="placeholder" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p style="margin: 0px; padding: 2px;">Email</p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="email" name="u_email" placeholder="Email" size="47" class="placeholder" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><p style="margin: 0px; padding: 2px;">Password</p></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="u_pass" placeholder="Password"  class="placeholder" /></td>
                            <td ><input type="password" name="u_pass" placeholder="Confirm Password"  class="placeholder" /></td>
                        </tr> 
                         
                    </table>
                </div>
            </div>
        </div>
        <div id="verticalline" style="width: 1px; min-height: 460px; background-color: #222; float: left;"></div>
        <div id="RegisterLeftCart">
            <?php if ($this->cart->contents()) { ?>
                <div id="total_item"><h4 style="margin: 0px 0px 5px 0px">Total: <?php echo $this->cart->total_items(); ?> items</h4></div>
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
                                <td class="hide"><img class="hide" src="<?php echo base_url() . 'content/uploads//images/' . $item['image1']; ?>" height="50" width="50"> </td>
                                <td style="padding: 0px 0px 0px 10px;"><?php echo $item['name']; ?> </td>
                                <td style="text-align: center;"><?php echo $item['qty'] ?></td>
                                <td>x</td>
                                <td style="text-align: center;"><?php get_currency($item['price']); ?></td>
                                <td style="text-align: center;"></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    <tr>
                        <td style="padding: 0px 0px 0px 15px; border-top: 1px solid #222;"><b>Total</b>:</td>
                        <td class="hide"></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: center; border-top: 1px solid #222;"> <b><?php get_currency($this->cart->total()); ?></b></td>

                    </tr>

                </table>
            <?php } else {
                ?>
                <div id="total_item"><h4>Your cart is empty</h4></div>
            <?php }
            ?>

            <h4>Cart Summary</h4>
            <div id="coupontext" style="width: 96%; margin: 0px; padding: 2%;">
                <div id="nfcoupon"></div>
                <table>
                    <tr>
                        <td><input class="placeholder" size="22" type="text" name="couponkey" id="couponkey" placeholder="Type your key here" /></td>
                        <td><input type="button" class="checkkey"  value="Apply Coupon" style="padding: 5px; width: 100%; background-color: black;" class="updateBtnStyle" /></td>
                    </tr>
                </table>


            </div>
            <div id="order_summary">
                <table width="100%">
                    <tr class='amt_summary'>
                        <td class='txtright' width='50%'>Total: </td>
                        <td><b><?php get_currency($this->cart->total()); ?></b></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Shipping Cost:</td>
                        <td id="cost"><?php
        if (isset($shiping_cost) == TRUE) {
            echo $cost;
        } else {
            '0';
        }
            ?></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Discount:</td>
                        <td id="rate"></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Total:</td>
                        <td id="test">   </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clear"></div>
    </div> 
    </div>
    <div class="clear"></div>
    </div>
    <?php echo form_close(); ?>
<?php } ?>
<script>
    var currentValue = 0;
    function handleClick(pickup) {
        ('Old value:' + currentValue);
        ('New value:' + pickup.value);
        currentValue = pickup.value;
        if (pickup.value === "shipDifferent") {

            document.getElementById('RegisterRight').style.display = 'block';
            document.getElementById('registeres').style.display = 'none';
            document.getElementById('registereslast').style.display = 'block';
        }
        else
        {
            document.getElementById('RegisterRight').style.display = 'none';
            document.getElementById('registeres').style.display = 'block';
            document.getElementById('registereslast').style.display = 'none';
        }
    }
</script>
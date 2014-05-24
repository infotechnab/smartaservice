<?php
$this->load->helper('currency');
?>

<script>
    $(document).ready(function() {
        $(".updateQuantity").keyup(function() {                //for sub Total

            var price = $(this).parent().next().find('span.priceTag').text();
            var subTotal = $(this).val() * price;
            if (isNaN(subTotal))
                subTotal = 0;
            //assign subTotal to the td
            $(this).parent().next().next().html(subTotal);
        });

        $('.cart tr').each(function() {
            var qty = $(this).find('input.updateQuantity').val();
            var price = $(this).find('span.priceTag').text();
            var sub_total = (qty * price);
            $(this).find('.sub_total_price').html(sub_total);
        }); //END .each

    });


</script>


<div id="msg" style="background: white; width: 98%; padding: 10px 0px 5px 10px; margin: 0px 0px 10px 0px; float: left;">   
       
            <div style="text-align: right;"><a href="<?php echo base_url() . 'index.php/view' ?>" id="continue_shop">Continue Shooping</a></div>
            <div><h2>Your Shopping Cart - <?php echo $this->cart->total_items(); ?> 
                    <?php if ($this->cart->total_items() == '0' || $this->cart->total_items() == '1') {
                        echo 'item';
                    } else {
                        echo 'items';
                    } ?></h2></div>
            </div>
 <div id="cartDetailsContent">
            <div id="cart_detail">
<?php if ($this->cart->contents()) { ?>

                
                    <table width='100%' class="cart">
                        <tr class="forTopBorder">
                            <th class="hide">Image</th>
                            <th style="margin: 0px; padding: 0px;">Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Sub-Total</th>
                            <th>Remove</th>
                        </tr>
    <?php if ($cart = $this->cart->contents()) { ?>
        <?php foreach ($cart as $item) { ?>   

            <?php echo form_open('cartDetails/update'); ?>
                                <tr class='forTopBorder'>
                                    <td class="hide"><img class="hide" src="<?php echo base_url() . 'content/uploads/images/' . $item['image1']; ?>" height="50" width="50"> </td>
                                    <td><?php echo $item['name']; ?> </td>
                                    <td><input type="text" value="<?php echo $item['qty'] ?>" id="update_qty" size="3" name="item_qnt_<?php echo $item['id']; ?>" class="updateQuantity"> 
                                        <input type="hidden" value="<?php echo $item['rowid']; ?>" name="item_row_<?php echo $item['id']; ?>">
                                    </td>
                                    <td> <?php get_currency($item['price']); ?></td>
                                    <td class="sub_total_price"></td>
                                    <td><a href="<?php echo base_url(); ?>index.php/cartDetails/remove/<?php echo $item['rowid']; ?>"><div id="closeSymbol">X</div></a></td>
                                    <?php
                                    //
                                    // echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
                                    //echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
                                    //echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
                                    //echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
                                    ?>
                                </tr>




        <?php }
    }
    ?>
                        <tr class='forTopBorder'>
                            <td><input type="submit" class="updateBtnStyle" value="Update Cart"></td>
                            <td></td>
                            <td></td>
                            <td><b>Total</b>:</td>
                            <td> <b><?php get_currency($this->cart->total()); ?></b></td>
                            <td></td>
                        </tr>
    <?php echo form_close(); ?>
                        <tr class='forTopBorder'>
                            <td colspan="2"><b><?php echo anchor('cartDetails/clear', 'Empty Your Cart') ?></b></td>

                            <td colspan="2"> </td>

                        </tr>
                    </table>

<?php } else {
    ?>

                    <div id="cart_items"><h3>Your cart is empty</h3></div>

<?php }
?>
                    

            </div>
</div>

            <div id="cartDetailsSidebar">
            <div id="order_summary">
                <table width="100%">
                    <tr class='amt_summary'>
                        <td class='txtright' width='50%'>Total: </td>
                        <td><b><?php get_currency($this->cart->total()); ?></b></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Shipping Cost:</td>
                        <td></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Discount:</td>
                        <td></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Total:</td>
                        <td></td>
                    </tr>
                </table>
                <div id="order_checkout"  class="updateBtnStyle">
<?php echo anchor('view/login', 'Pay Now') ?></div>
            </div>
            </div>

        
       

    </div>
 <div class="clear"></div>
</div>

 






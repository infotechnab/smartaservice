  <?php
$this->load->helper('currency');
?>


<script>
    $(document).ready(function(){
      
    });
    
    
</script>


<div id="contentBackground">
    <div id='contentWrapper'>
       
 <div id="cart_detail">
     <div style="text-align: right;"><a href="<?php echo base_url().'index.php/view' ?>" id="continue_shop">Continue Shooping</a></div>
     <div><h2>Your Shopping Cart - <?php echo $this->cart->total_items(); ?> 
             <?php if($this->cart->total_items()=='0' || $this->cart->total_items()=='1') { echo 'item'; } else { echo 'items'; } ?></h2></div>
     
    <?php if ($this->cart->contents()) {  ?>
         
         <div id="cart_items">
                <table width='100%' cellpadding='15px'>
                    <tr class="forTopBorder">
                        <th width='8%'></th>
                        <th width='35%'>Name</th>
                        <th width='5%'>Qty</th>
                        <th width='18%'>Price</th>
                        <th width='9%'>Sub-Total</th>
                        <th width='2%'> </th>
                    </tr>
                    <?php if ($cart = $this->cart->contents()) { ?>
                        <?php foreach ($cart as $item) { ?>                                      

                            <tr class='forTopBorder'>
                                <td><img src="<?php echo base_url().'content/images/'.$item['image1']; ?>" height="50px" width="50px"> </td>
                                <td><?php echo $item['name']; ?> </td>
                                <td><input type="text" value="<?php echo $item['qty'] ?>" id="update_qty" size="3"></td>
                                <td> <?php get_currency($item['price']); ?></td>
                                <td>sdf </td>
                                <td><div id="closeSymbol"><?php echo anchor('cartDetails/remove/' . $item['rowid'], 'X') ?></div></td>
                                
                            </tr>
                            



                        <?php }
                    } ?>
                    <tr class='forTopBorder'>
                        <td><input type="button" id="updateCartBtn" class="updateBtnStyle" value='Update Cart'></td>
                        <td></td>
                        <td></td>
                        <td><b>Total</b>:</td>
                        <td> <b><?php get_currency($this->cart->total()); ?></b></td>
                        <td></td>
                    </tr>
                    <tr class='forTopBorder'>
                        <td colspan="2"><b><?php echo anchor('cartDetails/clear', 'Empty Your Cart') ?></b></td>

                        <td colspan="2"> </td>

                    </tr>
                </table>
             
<?php }

else { ?>
             <div id="cart_items"><h3>Your cart is empty</h3></div>
    <?php }
    ?>
         </div>
         <div id="order_summary">
    <table width="100%">
        <tr class='amt_summary'>
            <td class='txtright' width='50%'>Total:</td>
            <td></td>
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
             <div id="order_checkout"  class="updateBtnStyle"><?php echo anchor('cartDetails/checkout', 'Check Out') ?></div>
         </div>
 <div class="clear"></div>
 </div>
          
    
</div>
        </div>
    </div>

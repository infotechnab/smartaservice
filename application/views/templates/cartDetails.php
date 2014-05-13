 <link rel="stylesheet" href="<?php echo base_url() . "content/styles/cartDetailsStyle.css"; ?>">     
<div id="contentBackground">
    <div id='contentWrapper'>
       
 <div id="cart_detail">
     <div style="text-align: right;"><a href="<?php echo base_url().'index.php/view' ?>" id="continue_shop">Continue Shooping</a></div>
     <div><h2>Your Shopping Cart</h2></div>
     
    <?php if ($this->cart->contents()) {  ?>
         <div id="total_item"><?php echo $this->cart->total_items(); ?></div>
         <div id="cart_items">
                <table width='100%'>
                    <tr id="forTopBorder">
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th> </th>
                    </tr>
                    <?php if ($cart = $this->cart->contents()) { ?>
                        <?php foreach ($cart as $item) { ?>                                      

                            <tr id='forTopBorder'>
                                <td><?php echo $item['name']; ?> </td>
                                <td><?php echo $item['qty'] ?></td>
                                <td><?php echo $item['price'] ?></td>
                                <td><?php echo anchor('view/remove/' . $item['rowid'], 'X') ?></td>
                            </tr>
                            



                        <?php }
                    } ?>
                    <tr id='forTopBorder'>
                        <td><b>Total</b>:</td>
                        <td></td>
                        <td> <b><?php echo $this->cart->total(); ?></b></td>
                        <td></td>
                    </tr>
                    <tr id='forTopBorder'>
                        <td colspan="2"><b><?php echo anchor('view/clear', 'Clear') ?></b></td>

                        <td colspan="2"> <b>Check Out</b></td>

                    </tr>
                </table>
             
<?php }

else { ?>
    <h3>Your cart is empty</h3>
    <?php }
    ?>
         </div>
         <div id="order_summary">
    <table width="100%">
        <tr>
            <td class='txtright'>Sub Total:</td>
            <td></td>
        </tr>
         <tr>
            <td class='txtright'>Shipping Cost:</td>
            <td></td>
        </tr>
         <tr>
            <td class='txtright'>Discount:</td>
            <td></td>
        </tr>
         <tr>
            <td class='txtright'>Total:</td>
            <td></td>
        </tr>
    </table>
         </div>
 
 </div>
    
    
</div>
        </div>
    </div>

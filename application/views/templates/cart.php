  <?php
$this->load->helper('currency');
?>


<?php if ($this->cart->contents()) {  ?>
<div id="total_item"><h4>Total: <?php echo $this->cart->total_items(); ?> items</h4></div>
                <table width="100%">
                    <tr>
                        <th width='55px'></th>
                        <th style="text-align: left; padding: 0px 0px 0px 15px;">Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th> </th>
                    </tr>
                    <?php if ($cart = $this->cart->contents()) { ?>
                        <?php foreach ($cart as $item) { ?>                                      

                            <tr>
                                <td><img src="<?php echo base_url().'content/images/'.$item['image1']; ?>" height="50px" width="50px"> </td>
                                <td style="padding: 0px 0px 0px 15px;"><?php echo $item['name']; ?> </td>
                                <td style="text-align: center;"><?php echo $item['qty'] ?></td>
                                <td style="text-align: center;"><?php get_currency($item['price']); ?></td>
                                <td style="text-align: center;"><div id="closeSymbol"><?php echo anchor('view/remove/' . $item['rowid'], 'X') ?></div></td>
                            </tr>
                            
                        <?php }
                    } ?>
                            <tr >
                        <td style="padding: 0px 0px 0px 15px; border-top: 1px solid #222;"><b>Total</b>:</td>
                        <td></td>
                        <td></td>
                        <td style="text-align: center; border-top: 1px solid #222;"> <b><?php get_currency($this->cart->total()); ?></b></td>
                        
                    </tr>
                    <tr style="margin-top:20px;">
                        <td colspan="2" style="text-align: center;"><b><div class="updateBtnStyle" style="background: black;"><?php echo anchor('view/clear', 'Clear') ?></div></b></td>
                        <td> &nbsp;</td>
                        <td colspan="2" style="text-align: center;"> <b><div class="updateBtnStyle" style="background:black;"><?php echo anchor('view/cart_details', 'Check Out') ?></div></b></td>

                    </tr>
                </table>
<?php }

else { ?>
<div id="total_item"><h4>Your cart is empty</h4></div>
    <?php }
    ?>
   </div>
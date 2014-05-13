<?php if ($this->cart->contents()) {  ?>
         <div id="total_item"><?php echo $this->cart->total_items(); ?></div>
                <table width="100%">
                    <tr>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th> </th>
                    </tr>
                    <?php if ($cart = $this->cart->contents()) { ?>
                        <?php foreach ($cart as $item) { ?>                                      

                            <tr>
                                <td><?php echo $item['name']; ?> </td>
                                <td><?php echo $item['qty'] ?></td>
                                <td><?php echo $item['price'] ?></td>
                                <td><?php echo anchor('view/remove/' . $item['rowid'], 'X') ?></td>
                            </tr>
                            <tr id="temp">

                            </tr>



                        <?php }
                    } ?>
                    <tr>
                        <td><b>Total</b>:</td>
                        <td></td>
                        <td> <b><?php echo $this->cart->total(); ?></b></td>
                        <td></td>
                    </tr>
                    <tr style="text-align: center; background: #cccccc;">
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
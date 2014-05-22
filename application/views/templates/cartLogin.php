  <?php
$this->load->helper('currency');
?>
<?php
   
 foreach ($shiping as $scost)
 {
     $cost = $scost->price;
 }
?>

<script>
    $(function(){
        var price = parseInt("<?php echo $this->cart->total();?>");

    var shiping = parseInt("<?php echo $cost; ?>");

var total = price + shiping;
      $('#test').html(total);
});

document.getElementById("test").innerHTML = total;
</script>

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

<div id="cartDetailsSidebar">
            <div id="order_summary">
                <table width="100%">
                    <tr class='amt_summary'>
                        <td class='txtright' width='50%'>Total: </td>
                        <td><b><?php get_currency($this->cart->total()); ?></b></td>
                    </tr>
                    <tr class='amt_summary'>
                        <td class='txtright'>Shipping Cost:</td>
                        <td><?php echo $cost; ?></td>
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
                <div id="order_checkout"  class="updateBtnStyle">
<?php //echo anchor('view/login', 'Pay Now') ?>
                </div>
            </div>
            </div>
   </div>
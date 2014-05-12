 <div id="contentBackground">
                <div id='contentWrapper'>
                    <div id='content'>
                        <div class='contentHeader'>
                            <h2>Featured Products</h2>  
                        </div>
                        <div class='contentContainer'>
                            <!-- now by default from details -->
                            <div class='contentContainerDetails'>
       <?php $data=array("image"=>'image', "title"=>'This is title', "details"=>'This jacket is best suited for moderate climatic condition. This is wind proof jacket and easy to wear.', "price"=>'RS. 500/-'); ?>   
            <div id='detailsImage'>
                             <img src="<?php echo base_url() . "content/images/raincoat.png"; ?>"/>   
            </div>  
            
            <div id="detailsDetail">
                <h2>Venture Jacket</h2> 
                <p> <?php echo $data['details']; ?> </p> 
                
            </div>
            
            <div class='contentContainerFooterLeft'>
                <h4> Price: <?php echo $data['price']; ?></h4>
            </div>
            <div class="redColouredDiv" id='contentContainerFooterRight'><p>Buy Now</p></div>
            
        </div>
                            <div class='clear'></div>
                            <!-- details view closed -->
                        </div>
                        <div class='contentHeader'>
                           <h2>Recent Products</h2>   
                        </div>
                        
                        <?php foreach($product_info as $product)
                        {?>
                        <div class='contentContainerBox'>
                            <?php echo form_open('view/add'); ?>
                            <div class='contentContainerHeader'><?php echo $product->name; ?></div>
                            <div class='contentContainerImage'>
                             <img src="<?php echo base_url() . "content/images/raincoat.png"; ?>"/>   
                            </div>
                            

                            <div class='contentContainerFooterLeft'></div>
                            <div class='contentContainerFooterRight'></div>

                            <div class='contentContainerFooterLeft'></div>
                            <div class="redColouredDiv" id='contentContainerFooterRight'>
                                <?php echo form_hidden('id',$product->id); ?>
                                <?php echo form_submit('action','Add To Cart'); ?>
                            </div>
                        <?php echo form_close(); ?>
                           
                        </div>
                        
                        <?php } ?>
                        
                        

                    </div>  
                    
                    <!-- left side content closed here -->
                    
                    <div id='sidebar'>
                        <div class="redColouredDiv" id='sidebarContent'>
                            <div id="sideBarImage"><img src="<?php echo base_url() . "content/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
                           <h3>Shopping Cart</h3>
                           <div id="total_item"><?php echo $this->cart->total_items(); ?></div>
                        </div>
                        <div class='sidebarContentNext'>
                        <table width="100%">
                            <tr>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th> </th>
                        
                         <?php if($cart = $this->cart->contents()) {?>
                         <?php foreach($cart as $item) { ?>
                                                
                        
                            <tr>
                                <td><?php echo $item['name']; ?> </td>
                                <td><input type="text" size="3" value="<?php echo $item['qty'] ?>" name="quantity"></td>
                         <td><?php echo $item['price'] ?></td>
                         <td><?php echo anchor('view/remove/'.$item['rowid'],'X') ?></td>
                            </tr>
                            
                       
                        
                         <?php } } ?>
                            <tr>
                                <td><b>Total</b>:</td>
                                <td></td>
                                <td> <b><?php echo $this->cart->total();  ?></b></td>
                                <td></td>
                            </tr>
                            <tr style="text-align: center; background: #cccccc;">
                                <td colspan="2"><b><?php echo anchor('view/clear','Clear') ?></b></td>
                                
                                <td colspan="2"> <b>Check Out</b></td>
                                
                            </tr>
                             </table>
                        </div>
                        <div class="redColouredDiv" id='sidebarContent'><h3>Popular Posts</h3></div>
                        <?php for($i=0; $i<4; $i++)
                        {?>
                        <div class='sidebarContentNext'></div>
                      
                        <?php } ?>
                        
                        <div class="redColouredDiv" id='sidebarContent'><h3>Sponsors</h3></div>
                        <?php for($i=0; $i<4; $i++)
                        {?>
                        <div class='sidebarContentNext'></div>
                      
                        <?php } ?>

                    </div>  
 <div class="clear"> </div>

                </div> 

            </div>
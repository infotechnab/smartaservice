 <div id="contentBackground">
                <div id='contentWrapper'>
                    <div id='content'>
                        <div class='contentHeader'>
                            
                        </div>
                        <div class='contentContainer'>
                            
                        </div>
                        <div class='contentHeader'>
                            
                        </div>
                        
                        <?php foreach($product_info as $product)
                        {?>
                        <div class='contentContainerBox'>
                            <?php echo form_open('addTOCart/add'); ?>
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
                        </div>
                         <?php if($cart = $this->cart->contents()) {?>
                        echo print_r($cart);
                        <div class='sidebarContentNext'></div>
                      
                        <?php } ?>
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
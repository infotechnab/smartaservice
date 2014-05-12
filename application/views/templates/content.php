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
                            <div class='contentContainerHeader'><?php echo $product->name; ?></div>
                            <div class='contentContainerImage'>
                             <img src="<?php echo base_url() . "content/images/raincoat.png"; ?>"/>   
                            </div>
                            

                            <div class='contentContainerFooterLeft'><P>Details</p></div>
                            <div class='contentContainerFooterRight'><?php form_submit('action','Add to Cart');  ?></div>

                            <div class='contentContainerFooterLeft'></div>
                            <div class="redColouredDiv" id='contentContainerFooterRight'><p>Details</p></div>

                           
                        </div>
                        
                        <?php } ?>
                        
                        

                    </div>  
                    
                    <!-- left side content closed here -->
                    
                    <div id='sidebar'>
                        <div class="redColouredDiv" id='sidebarContent'>
                            <div id="sideBarImage"><img src="<?php echo base_url() . "contents/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
                           <h3>Shopping Cart</h3>
                        </div>
                         <?php for($i=0; $i<2; $i++)
                        {?>
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
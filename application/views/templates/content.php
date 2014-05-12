 <div id="contentBackground">
                <div id='contentWrapper'>
                    <div id='content'>
                        <div class='contentHeader'>
                            
                        </div>
                        <div class='contentContainer'>
                            
                        </div>
                        <div class='contentHeader'>
                            
                        </div>
                        
                        <?php foreach($product_info as $products)
                        {?>
                        <div class='contentContainerBox'>
                            <div class='contentContainerHeader'><?php echo $product->name; ?></div>
                            <div class='contentContainerImage'>
                             <img src="<?php echo base_url() . "contents/images/raincoat.png"; ?>"/>   
                            </div>
                            
                            <div class='contentContainerFooterLeft'>Details</div>
                            <div class='contentContainerFooterRight'><?php form_submit('action','Add to Cart');  ?></div>
                           
                        </div>
                        
                        <?php } ?>
                        
                        

                    </div>  
                    
                    <!-- left side content closed here -->
                    
                    <div id='sidebar'>
                        <div class='sidebarContent'></div>
                        <div class='sidebarContentNext'></div>
                        <div class='sidebarContentNext'></div>
                        <div class='sidebarContentNext'></div>
                        <div class='sidebarContentNext'></div>
                        <div class='sidebarContentNext'></div>
                        
                        

                    </div>  
 <div class="clear"> </div>

                </div> 

            </div>
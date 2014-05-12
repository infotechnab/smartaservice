 <div id="contentBackground">
                <div id='contentWrapper'>
                    <div id='content'>
                        <div class='contentHeader'>
                            
                        </div>
                        <div class='contentContainer'>
                            
                        </div>
                        <div class='contentHeader'>
                            
                        </div>
                        
                        <?php for($i=0; $i<9; $i++)
                        {?>
                        <div class='contentContainerBox'>
                            <div class='contentContainerHeader'></div>
                            <div class='contentContainerImage'>
                             <img src="<?php echo base_url() . "contents/images/raincoat.png"; ?>"/>   
                            </div>
                            
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

                    </div>  
 <div class="clear"> </div>

                </div> 

            </div>
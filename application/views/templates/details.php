<div id="contentBackground">
    
    <div id='contentWrapper'>
        <div class='contentHeader'>

            </div>
        <div class="clear"></div>
        <div id='content'>
            
            
            <div class='contentContainer'>
                            
            </div>

        </div>

        <!-- detail content closed here-->
        <!-- sidebar starts now-->
        <div id='sidebar'>
            <div class="redColouredDiv" id='sidebarContent'>
                <div id="sideBarImage"><img src="<?php echo base_url() . "contents/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
                <h3>Shopping Cart</h3>
            </div>
            <?php for ($i = 0; $i < 2; $i++) {
                ?>
                <div class='sidebarContentNext'></div>

            <?php } ?>
            <div class="redColouredDiv" id='sidebarContent'><h3>Popular Posts</h3></div>
            <?php for ($i = 0; $i < 4; $i++) {
                ?>
                <div class='sidebarContentNext'></div>

            <?php } ?>

            <div class="redColouredDiv" id='sidebarContent'><h3>Sponsors</h3></div>
            <?php for ($i = 0; $i < 1; $i++) {
                ?>
                <div class='sidebarContentNext'></div>

            <?php } ?>

        </div>  
        <!-- sidebar is closed now-->

        <div class="clear"> </div>

    </div> 

</div>
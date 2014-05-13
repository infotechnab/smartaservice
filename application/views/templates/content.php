
<script src="<?php echo base_url() . 'content/jquery.js'; ?>" type="text/javascript"></script>

<script>
    var base_url = "http://localhost/smartaservice/";
    $(document).ready(function() {
        //alert ("sajdfa");
        $(".addToCart").click(function() {
            var id = $(this).val();
            //alert(id);
            var dataString = 'itemid=' + id;
            $.ajax({
                type: "POST",
                url: base_url + 'index.php/view/add',
                data: dataString,
                success: function(msgs)
                {

                    $("#shopping_cart").html(msgs);


                },
                complete: function() {

                }
            });
        });

    });

</script>



<div id="contentBackground">
    <div id='contentWrapper'>
        <div id='content'>
            <div class='contentHeader'>

            </div>
            <div class='contentContainer'>

            </div>
            <div class='contentHeader'>

            </div>
            <div id="itemContent">
            <?php foreach ($product_info as $product) {
                ?>
                <div class='contentContainerBox'>

                    <div class='contentContainerHeader'><?php echo $product->name; ?></div>
                    <div class='contentContainerImage'>
                        <img src="<?php echo base_url() . "content/images/raincoat.png"; ?>"/>   
                    </div>


                    <div class='contentContainerFooterLeft'></div>
                    <div class='contentContainerFooterRight'></div>

                    <div class='contentContainerFooterLeft'><span>Rs.<?php echo $product->price; ?></span></div>
                    <div class="redColouredDiv" id='contentContainerFooterRight'>




                        
                        <input type="button" value="<?php echo $product->id ?>" class="addToCart" id="addToCartBtn">  
                        
                            
 
                        </div>

                    </div>
            

               
            <?php } ?>
            </div>

        </div>

        </div>  

        <!-- left side content closed here -->
   
        <div id='sidebar'>
            <div class="redColouredDiv" id='sidebarContent'>
                <div id="sideBarImage"><img src="<?php echo base_url() . "content/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
                <h3>Shopping Cart</h3>
            </div>
                <div class='sidebarContentNext' id="shopping_cart">
                    
                
       

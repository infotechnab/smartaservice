

 <?php
$this->load->helper('currency');
?>


<script>
    var base_url = "http://localhost/smartaservice/";
    $(document).ready(function() {
       //adding item to the cart...
        $(".addToCart").click(function() {
           $(this).parent().parent().parent().css({ opacity: 0.3 });
            var id = $(this).val();
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
                  $(".contentContainerBox").css({  opacity: 1.0 });
                }
            });
            
        });

    });

</script>


          
            
            
            <div class='contentHeader'>
                 <h3>Recent products</h3>

            </div>
            <div id="itemContent">
            <?php foreach ($product_info as $product) {
                
                ?>
                <div class='contentContainerBox'>

                    <div class='contentContainerHeader'><a href='<?php echo base_url() . "index.php/view/details/". $product->id ?>'><h3><?php echo $product->name; ?></h3></div>
                    <div class='contentContainerImage'>
                        <img src="<?php echo base_url() . "content/images/".$product->image1; ?>" alt="No images" height="150" width="130"/>   
                    </div></a>

                        <div class="contentContainerBottom"> 
                            <div class='contentContainerFooterLeft'><h4><?php get_currency($product->price); ?></h4></div>
                    <div class="redColouredDiv" class='contentContainerFooterRight'>

                        <input type="button" value="<?php echo $product->id ?>" class="addToCart" id="addToCartBtn">  
                        
                            
 
                        </div>
                        </div>

                    </div>
            

               
            <?php } ?>
            </div>


        </div>

        

        <!-- left side content closed here -->
   
        <div id='sidebar'>
            <div class="redColouredDiv" id='sidebarContent'>
                <div id="sideBarImage"><img src="<?php echo base_url() . "content/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
                <h3>Shopping Cart</h3>
            </div>
                <div class='cartItems' id="shopping_cart">
                    
    
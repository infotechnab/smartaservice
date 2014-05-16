

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




<<<<<<< HEAD
=======
            </div>
            <div class='contentContainer'>
                <!-- from here the details starts and it must be replaced by slider-->
                <div class="containerss">
                <?php foreach($featureItem as $f_item){ ?>
                <div class="slider_main">
            <div id="detailsImageLarge">
                <img src="<?php echo base_url() . "content/images/".$f_item->image1; ?>" height="340" width="300" alt="image not found"/>   
            </div>  
            
                    <div id="detailsDetail">
                <h2><?php echo $f_item->name; ?></h2>
                <p> <?php echo $f_item->summary; ?> </p> 
                
            </div>
            
            
               <div class='contentContainerFooterLeft' style="width:90px;"><h4><?php get_currency($f_item->price); ?></h4></div>
                             <div class="redColouredDiv" class='contentContainerFooterRight' style="width: 80px;">

                        <input type="button" value="<?php ?>" class="addToCart" id="addToCartBtn">
            
                             </div>
                </div>
                <div class="clear"></div>
                
                <?php } ?>
                </div>
                <!-- here the details ends-->
                  
                

            </div>
>>>>>>> f23e5b32556a59600922221b211a7cdbc93a460f
          
            
            
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
                    
    
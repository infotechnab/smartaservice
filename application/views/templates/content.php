
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
                <h2>Featured products</h2>

            </div>
            <div class='contentContainer'>
                <!-- from here the details starts and it must be replaced by slider-->
                
       <?php $data=array("image"=>'image', "title"=>'Venture Jacket', "details"=>'This jacket is the best suited for moderate climatic condition. This is wind proof jacket and made in indonesia by jack and jones company. It protects you from wind while travelling in bike not only that it also orotects from rain too.', "price"=>'RS. 500/-'); ?>   
            <div id='detailsImage'>
                             <img src="<?php echo base_url() . "content/images/raincoat.png"; ?>"/>   
            </div>  
            
            <div id="detailsDetail">
                <h2><?php echo $data['title']; ?></h2>
                <p> <?php echo $data['details']; ?> </p> 
                
            </div>
            
            
                <h4> Price: <?php echo $data['price']; ?></h4>
          
            <div class="redColouredDiv" id='contentContainerFooterRight'><p>Buy Now</p></div>
            
        
                
                
                <!-- here the details ends-->
                  <div class="clear"></div>
                

            </div>
          
            
            
            <div class='contentHeader'>
                 <h2>Recent products</h2>

            </div>
            <div id="itemContent">
            <?php foreach ($product_info as $product) {
                ?>
                <div class='contentContainerBox'>

                    <div class='contentContainerHeader'><h3><?php echo $product->name; ?></h3></div>
                    <div class='contentContainerImage'>
                        <img src="<?php echo base_url() . "content/images/raincoat.png"; ?>"/>   
                    </div>

                    <div class='contentContainerFooterLeft'><h4>Rs.<?php echo $product->price; ?></h4></div>
                    <div class="redColouredDiv" id='contentContainerFooterRight'>

                        <input type="button" value="<?php echo $product->id ?>" class="addToCart" id="addToCartBtn">  
                        
                            
 
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
                <div class='sidebarContentNext' id="shopping_cart">
                    
    
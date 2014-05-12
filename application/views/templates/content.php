<<<<<<< HEAD
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




                        <div style="background-color: red; width: 100px;" id="addToCartDiv" >
                            <input type="button" value="<?php echo $product->id ?>" class="addToCart">  
                            <img style="width: 80px;" src="<?php echo base_url() . "content/images/shopping-cart-icon-614x460.png" ?>" alt="cart image" />
>>>>>>> working add to cart
=======
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
                           
>>>>>>> f98e7988ec3cf9109c35e75122633c1e4eab6030
                        </div>

                    </div>


                </div>

            <?php } ?>



        </div>  

        <!-- left side content closed here -->
   
        <div id='sidebar'>
            <div class="redColouredDiv" id='sidebarContent'>
                <div id="sideBarImage"><img src="<?php echo base_url() . "content/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
                <h3>Shopping Cart</h3>
            </div>
                <div class='sidebarContentNext' id="shopping_cart">
                    
                
       



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
        <div class='contentHeaderDetails'>
            <p>Current location</p>
        </div>

        <div id='content'>
            <?php
            if (!empty($product)) {
               
                foreach ($product as $productDet) {
                    ?>
                    <div class='contentContainerDetails'>
                        <div id='detailLargeImage'>
                            <div id='detailsImageLarge'>
                                <img src="<?php echo base_url() . "content/images/" . $productDet->image1; ?>" alt="<?php echo $productDet->name; ?>"/>   
                            </div>  

                            <div id="detailsDetail">
                                <h2><?php echo $productDet->name; ?></h2>
                                <p> <?php echo $productDet->name; ?> </p> 

                            </div>


                            <h4> Price: <?php echo $productDet->price; ?></h4>

                            <div class="redColouredDiv" id='contentContainerFooterRight'><p>Buy Now</p></div>   
                            
                        </div>

                        <div id='detailsImage'>
                            <img src="<?php echo base_url() . "content/images/" . $productDet->image2; ?>" alt="<?php echo $productDet->name; ?>"/>   
                        </div>
                      <div class="clear"></div>
                    </div>
                <?php
                }
            } else {
                ?><div class='contentContainerDetails'> <?php echo '<h3>This page does not contain any content.</h3>'; ?> </div> 
<?php }
?>



        </div>



        <!-- left side details content closed here -->

        <div id='sidebar'>
            <div class="redColouredDiv" id='sidebarContent'>
                <div id="sideBarImage"><img src="<?php echo base_url() . "content/images/shopping-cart-icon-614x460.png"; ?>"/> </div>   
                <h3>Shopping Cart</h3>
            </div>
            <div class='sidebarContentNext' id="shopping_cart">


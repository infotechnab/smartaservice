
  <?php
$this->load->helper('currency');
?>
<script src="<?php echo base_url() . 'content/jquery.js'; ?>" type="text/javascript"></script>
<style type="text/css">
    /* popup_box DIV-Styles*/
    #popup_box { 
        display:none; /* Hide the DIV */
        position:fixed;  
        _position:absolute; /* hack for internet explorer 6 */  
        height:800px;  
        width:600px;  
        background:#FFFFFF;  
        left: 300px;
        top: 50px;
        z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
        margin-left: 15px;  

        /* additional features, can be omitted */
        border:2px solid #ff0000;  	
        padding:25px;  
        font-size:15px;  
        -moz-box-shadow: 0 0 5px #ff0000;
        -webkit-box-shadow: 0 0 5px #ff0000;
        box-shadow: 0 0 5px #ff0000;

    }
    a{  
        cursor: pointer;  
        text-decoration:none;  
    } 

    /* This is for the positioning of the Close Link */
    #popupBoxClose {
        font-size:20px;  
        line-height:15px;  
        right:5px;  
        top:5px;  
        position:absolute;  
        color:#6fa5e2;  
        font-weight:500;  	
    }</style>
<script type="text/javascript">

    $(document).ready( function() {
        // When site loaded, load the Popupbox First
        $('.srcimage').click(function(){
            $('#popup_box').fadeIn(2500);
            var srcimg = $(this).attr('src');
			
            $("#pqr").attr({
                src: srcimg
			
            });
            $('#popup_box').css({"display":"Block"});
			
            //$('#pqr').fadeIn(3000);
            $('#detailsImage').css({"opacity":".3"});
			
        });
		
        $('#popupBoxClose').click( function() {
            unloadPopupBox();
        });
		
        function unloadPopupBox() {	// TO Unload the Popupbox
            $('#popup_box').fadeOut("slow");
            $("#detailsImage").css({ // this is just for style		
                "opacity": "1"  
            }); 
        }		
		
		
		
        /**********************************************************/
		
    });
	
	
</script>
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
                                <img src="<?php echo base_url() . "content/images/" . $productDet->image1; ?>" alt="no images"/>   
                            </div>  

                            <div id="detailsDetail">
                                <h2><?php echo $productDet->name; ?></h2>
                                <p> <?php echo $productDet->name; ?> </p> 

                            </div>
                           
                            <div class='contentContainerFooterLeft' style="width:90px;"><h4><?php get_currency(500); ?></h4></div>
                             <div class="redColouredDiv" id='contentContainerFooterRight' style="width: 8px;">

                        <input type="button" value="<?php ?>" class="addToCart" id="addToCartBtn">  
                        
                            
 
                        </div>

                          
                            
                        </div>

                        <div id='detailsImage'>
                            <img class="srcimage" src="<?php echo base_url() . "content/images/" . $productDet->image1; ?>" alt="no images found"/>   
                        </div>
                        <div id='detailsImage'>
                            <img src="<?php echo base_url() . "content/images/" . $productDet->image2; ?>" alt="no images found"/>   
                        </div>
                        <div id='detailsImage'>
                            <img src="<?php echo base_url() . "content/images/" . $productDet->image3; ?>" alt="no images found"/>   
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


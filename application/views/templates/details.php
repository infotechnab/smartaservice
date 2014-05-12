<div id="contentBackground">
    
    <div id='contentWrapper'>
        <div class='contentHeaderDetails'>
            <p>Current location</p>
        </div>
        
        <div id='content'>
            
            
        <div class='contentContainerDetails'>
       <?php $data=array("image"=>'image', "title"=>'This is title', "details"=>'The details of tyhe clothing goes here', "price"=>'RS. 500/-'); ?>   
            <div id='detailsImage'>
                             <img src="<?php echo base_url() . "content/images/raincoat.png"; ?>"/>   
            </div>  
            
            <div id="detailsDetail">
                <p> <?php echo $data['details']; ?> </p> 
                
            </div>
            
            <div class='contentContainerFooterLeft'>
                <h4> Price: <?php echo $data['price']; ?></h4>
            </div>
            <div class="redColouredDiv" id='contentContainerFooterRight'><p>Buy Now</p></div>
            
        </div>

        </div>

        <!-- detail content closed here-->
        
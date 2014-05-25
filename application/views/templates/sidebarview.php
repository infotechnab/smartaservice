<?php foreach ($category as $catList) {
    $category_id = $catList->id; ?>
<div class="redColouredDiv" id='sidebarContent'><h3><?php echo $catList->category_name;?></h3></div>
            <?php $catProduct = $this->productmodel->get_product($category_id);
 foreach ($catProduct as $product_list) {
                ?>
                <div class='sidebarContentNext'>
                    <table>
                        <tr>
                            <td><img src="<?php echo base_url().'content/uploads/images/'.$product_list->image1; ?>" width="50" height="50" /></td>
                            <td><b><?php echo $product_list->name;  ?></b></td>
                            <td><b><?php echo $product_list->price; ?></b></td>
                        </tr>
                    </table>
                    
                </div>

<?php } } ?>
<div class="redColouredDiv" id='sidebarContent'><h3>Popular Post</h3></div>
            <?php for ($i = 0; $i < 4; $i++) {
                ?>
                <div class='sidebarContentNext'></div>

<?php } ?>

            <div class="redColouredDiv" id='sidebarContent'><h3>Sponsors</h3></div>
            <?php for ($i = 0; $i < 4; $i++) {
                ?>
                <div class='sidebarContentNext'></div>

<?php } ?>

        </div>  
       
 </div> 
 <div class="clear"> </div>
</div>
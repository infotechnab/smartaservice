<div class="rightSide">
   <div id="body">
    <p id="sucessmsg">
  <?php echo $this->session->flashdata('message'); ?>
    </p>
    <h2>All Product</h2>
     <hr class="hr-gradient"/>
    
    
    <?php
    
    
         if(!empty($query)){
             ?>
        <table border="1" cellpadding="10">
        <tr>
            
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            
           
            <th>First Image</th>
            <th>Second Image</th>
            <th>Third Image</th>
            <th>Action</th>
        </tr>
        <?php
            foreach ($query as $data){
            ?>
          <tr>
            <td><?php echo $data->name ?></td>
            <td><?php echo $data->summary; ?></td>
            <td><?php echo $data->price ?></td>
            <td><img src="<?php echo base_url()."content/images/".$data->image1; ?>" width="50px" height="50px" alt="Image not set!" /></td>
             <td><img src="<?php echo base_url()."content/images/".$data->image2; ?>" width="50px" height="50px" alt="Image not set!" /></td>
            <td><img src="<?php echo base_url()."content/images/".$data->image3; ?>" width="50px" height="50px" alt="Image not set!"/></td>
             
            <td><?php echo anchor('bnw/editproduct/'.$data->id,'Edit'); ?> / 
            <?php echo anchor('bnw/delProduct/'.$data->id,'Delete'); ?></td>
        </tr>
            <?php    
            }
        }
        else{
            echo '<h3>Sorry product are not available</h3>';
        }
            
    ?>
    </table>
    <?php  echo $links; ?>
</div>
    
    
</div>
<div class="clear"></div>
</div>
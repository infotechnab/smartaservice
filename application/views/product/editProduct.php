
<div class="rightSide">
  
    <?php
 if(isset($error))
  {
     echo $error;
  }
        if(!empty($query)){
            foreach ($query as $data){
            $id = $data->id;
            $name= $data->name;
            $description = $data->description;
            $price= $data->price;
            $cateID = $data->category;
           
            $first_image= $data->image1;
            $second_image = $data->image2;
            $third_image = $data->image3;
            $shipping= $data->shiping;
            $like= $data->like;
            $share= $data->share;
           
            //$listOfCategory = $this->dbmodel->get_list_of_category();
       } ?>
        <div class="titleArea">
     <h2>Edit Product</h2>
<hr class="hr-gradient"/>   
    </div> 
<!--    <div id="forLeftPage">-->
 
  <?php echo validation_errors(); ?>
 
  <p id="sucessmsg">
  <?php echo $this->session->flashdata('message'); ?>
    </p>
  <?php echo form_open_multipart('bnw/updateproduct');?>
  <p>Name:<br />
      <input type="hidden" name="id" value="<?php echo $id; ?>" >
      <input type="text" name="pName" value="<?php echo $name; ?>" />
  </p>
  <p>Description:<br />
  <textarea name="pdescription" id="area1" rows="5" cols="50" style="resize:none;">
      <?php echo $description; ?></textarea>
  </p>
  <p> Price : <br/>
            <input type="text" name="price" value="<?php echo $price; ?>" />

  </p>
  
  <p> Select Category : <br/>
     
     <select name="pCategory">
         <?php foreach ($category as $catName)
         {?>
         <option value="<?php echo $catName->id; ?>" <?php if($catName->id == $cateID) echo"selected"; ?> ><?php echo $catName->category_name; ?></option>
         <?php } ?>
     </select>
     
 </p>
 
       <div style="height: 180px;"> 
  <div class="product_image_div">
     <div style="width:85px; height: 85px;">
      <img src="<?php echo base_url()."content/uploads/images/".$first_image; ?>" width="80" height="80" alt="Image not set!" />
     </div>
      <a href="<?php echo base_url();?>index.php/bnw/productImgdelete/?id=<?php echo $id; ?>&&image=<?php echo "image1"; ?> " id="<?php echo $id; ?>" class="delbutton">
        <img src="<?php echo base_url();?>content/uploads/images/delete.png" id="close"/>
      </a>
       
      <input type="hidden" name="firstImg" value="<?php echo $first_image ?>" />
      <div>
      <input type="file" name="myfile" id="file" />
</div> 
  </div> 
  

 

<div class="product_image_div" >
    <div style="width:85px; height: 85px;">
    <img src="<?php echo base_url()."content/uploads/images/".$second_image; ?>" width="80" height="80" alt="Image not set!" />
    </div>
             <a href="<?php echo base_url();?>index.php/bnw/productImgdelete/?id=<?php echo $id; ?>&&image=<?php echo "image2"; ?> " id="<?php echo $id; ?>" class="delbutton">
        <img src="<?php echo base_url();?>content/uploads/images/delete.png" id="close"/></a>
    <input type="hidden" name="secondImg" value="<?php echo $second_image ?>" />
    <div><input type="file" name="myfileTwo" id="file" /></div>
</div> 
 


<div class="product_image_div">
    <div style="width:85px; height: 85px;">
        <img src="<?php echo base_url()."content/uploads/images/".$third_image; ?>" width="80" height="80" alt="Image not set!" />
    </div>
    
         <a href="<?php echo base_url();?>index.php/bnw/productImgdelete/?id=<?php echo $id; ?>&&image=<?php echo "image3"; ?> " id="<?php echo $id; ?>" class="delbutton">
        <img src="<?php echo base_url();?>content/uploads/images/delete.png" id="close"/></a>
        
    <input type="hidden" name="thirdImg" value="<?php echo $third_image ?>" />
    <div><input type="file" name="myfileThree" id="file" /></div>
</div> 
 
  </div>
<div class="clear"></div>
 <p>
     <input type="checkbox" value="1" name="checkMe" <?php if($shipping=='enabled') echo 'checked' ;?> /> Enable shipping charge </p>
 <p>
     <input type="checkbox" value="1" name="enableLike" <?php if($like=='enabled') echo 'checked' ;?> /> Enable facebook like </p>
 <p>
     <input type="checkbox" value="1" name="enableShare" <?php if($share=='enabled') echo 'checked' ;?> /> Enable facebook share </p>

    <input type="submit" value="Submit" />
  <?php echo form_close();?>
    
<p><b>Note:</b> Max file size: 500KB, Max Width: 1024px, Max Height: 768px </p>
     <?php    }
    else {
    echo " <b> Content not found! </b> ";    
    }
     
    ?>
  
  
</div>
<div class="clear"></div>
</div>
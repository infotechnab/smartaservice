<div class="rightSide">
 <h2>Add new Product</h2>
 <hr class="hr-gradient"/>

  <?php echo validation_errors(); ?>
<p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
    </p>
  <?php echo form_open_multipart('bnw/addproduct');?>
      
    <input type="hidden" name="qty" value="1" />
 <p>Name:<br />
      <input type="text" name="pName" /> </p>
 <p> Description : <br/>
<textarea name="pDescription" id="area1" cols="50" rows="5" ><?php echo set_value('pDescription'); ?></textarea> </p>
 <p>Price:<br />
      <input type="number" name="pPrice" min="1" /> </p>

 <p> Select Category : <br/>
     
     <select name="pCategory">
         <?php foreach ($category as $catName)
         {?>
         <option value="<?php echo $catName->id; ?>"><?php echo $catName->category_name; ?></option>
         <?php } ?>
     </select>
     
 </p>
 <p> Image 1 : <br/> <input type="file" name="myfile" id="file" /> </p>
 <p> Image 2 : <br/> <input type="file" name="myfileTwo" id="file" /> </p>
 <p> Image 3 : <br/> <input type="file" name="myfileThree" id="file" /> </p>
  <p>
     <input type="checkbox" value="1" name="checkMe"  /> Enable shipping charge </p>
  <p><input type="checkbox" value="1" name="enableLike" checked /> Enable facebook like </p>
  <p><input type="checkbox" value="1" name="enableShare" checked /> Enable facebook share </p>
 <input type="submit" value="Submit" />
  <?php echo form_close();?>
 
 <p><b>Note:</b> Max file size: 500KB, Max Width: 1024px, Max Height: 768px </p>
 </div>
<div class="clear"></div>
</div>
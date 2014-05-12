<div class="rightSide">
 <h2>Add new Product</h2>
 <hr class="hr-gradient"/>
<?php
echo" this menu is under construction! <br/>
    thank you for visit."
?>
  <?php echo validation_errors(); ?>
<p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
    </p>
  <?php echo form_open_multipart('bnw/addproduct');?>
      
    <input type="hidden" name="qty" value="1" />
 <p>Name:<br />
      <input type="text" name="pName" /> </p>
 
 <p>Price:<br />
      <input type="text" name="pPrice" /> </p>
 <p> Image 1 : <br/> <input type="file" name="myfile" id="file" /> </p>
 <p> Image 2 : <br/> <input type="file" name="myfileTwo" id="file" /> </p>
 <p> Image 3 : <br/> <input type="file" name="myfileThree" id="file" /> </p>
 
 <input type="submit" value="Submit" />
  <?php echo form_close();?>
 </div>
<div class="clear"></div>
</div>
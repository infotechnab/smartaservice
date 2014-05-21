<div class="rightSide">
 <?php 

    

 ?>

 <?php echo validation_errors();
  if(isset($error))
  {
      echo $error;
  }
  ?>

    


<h2> Shipping Setting</h2>
<hr class="hr-gradient"/>

<?php echo form_open_multipart('bnw/shippingupdate');?>


<p>Shipping Charges:
<input type="text" name="shipping_charge" size="2" value="<?php  ?>" required/> %</p>




 <input type="submit" value="Submit" />
  <?php echo form_close();?>
 
 
 
 
 
 
 
 
</div>

<div class="clear"></div>
</div>
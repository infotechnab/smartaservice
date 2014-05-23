<div class="rightSide">
 <h2>Coupon</h2>
 <hr class="hr-gradient"/>

  <?php echo validation_errors(); ?>
<p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
    </p>
    <div>
        <?php echo form_open(); ?>
        <p>Coupon Key : <br/>
            <input type="text" name="copon" placeholder="coupon key" required  />
        <input type="button" value="Generate Coupon" id="createCopon" /> <br/>
        </p>
        <p>Rate : <br/>
            <input type="text" name="rate" placeholder="discount price" required /> <br/>
        </p>
        <p>Coupon Expire Date : <br/>
            <input type="text" name="date" placeholder="expire date" /> <br/>
        </p>
        
        <input type="submit" value="Create Copon" />
        <?php echo form_close(); ?>
    </div>
 </div>
<div class="clear"></div>
</div>

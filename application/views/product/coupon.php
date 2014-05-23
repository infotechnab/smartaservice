<script>
    var base_url = '<?php echo base_url(); ?>';
    $(document).ready(function(){
        $('#createCopon').click(function(){
            //alert('work');
            var dataString = 'id='+1;
            $.ajax({
                type: "POST",
                url: base_url + 'index.php/bnw/getcoupon',
                data: dataString,
                success: function(msgs)
                {
                    $("#key").html(msgs);
                }
            });
        });
    });

</script>

<div class="rightSide">
 <h2>Coupon</h2>
 <hr class="hr-gradient"/>

  <?php echo validation_errors(); ?>
<p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
    </p>
    <div>
        <?php echo form_open(); ?>
       
             <p>Coupon Key : <br/> </p>
             <div id="key"></div>
        <input type="button" value="Generate Coupon" id="createCopon" /> <br/>
             
       
        <p>Rate : <br/>
            <input type="text" name="rate" placeholder="discount rate" required /><span> %</span> <br/>
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

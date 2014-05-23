
<script>

        $(document).ready(function(){
            $('#checkkey').click(function(){
               var key = $('#couponkey').val(); 
               
                  var dataString = 'id='+key;
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
        <input type="text" name="couponkey" id="couponkey" placeholder="type your key here" /> <br/>
        <input type="button" id="checkkey" value="Apply Coupon" />
  

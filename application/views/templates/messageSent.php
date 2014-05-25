 <?php if(isset($query)){
            foreach ($query as $data){
            $to = $data->user_email;
           $token = $data->user_auth_key; 
       }
        }
    ?>
</div>
<div id="contentBackground">
        <div id="forgotpass">
            <p>click the following link to reset your password <a style="color: #000;" href="<?php echo base_url();?>index.php/view/resetPassword?id=<?php echo $to; ?>&&resetPassword=<?php echo $token; ?>">RESET PASSWORD</a></p>
        </div>
    </div>
</div>


  
            
    
    
   



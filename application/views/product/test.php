<div class="rightSide">
   <div id="body">
    <p id="sucessmsg">
  <?php echo $this->session->flashdata('message'); ?>
    </p>
    <h2>All Product Order </h2>
     <hr class="hr-gradient"/>
    
    
    <?php
    
    
         if(!empty($query)){
             ?>
        <table border="1" cellpadding="10">
        <tr>
            <th>Oder ID</th>
            <th>Order Detail</th>
            <th>Price</th>
            <th>User Detail</th>
            <th>Action</th>
        </tr>
        <?php
            foreach ($query as $data){
            ?>
          <tr>
            <td><?php $pid = $data->o_id ;
                   echo $pid;
                   ?>
            </td>
            <td><?php $oderDetail = $this->dbmodel->get_all_product_orderID($pid);
                 
                 foreach ($oderDetail as $orders){ ?>
                        <li> <?php echo $orders->o_id; ?>  </li>
                        <li> <?php echo $orders->p_id; ?>  </li>
                        <li> <?php echo $orders->qty; ?>  </li>
                <?php  } ?>
        </td>
            <td><?php //echo $data->price ?></td>
            <td><?php //$oid =  $data->o_id;
            
          //  echo $oDate;
            ?></td>
             <td><?php 
            
             //echo $userName; ?></td>
             <td><?php 
            
            // echo $deliver_address;
             ?></td>
            <td><?php echo anchor('bnw/delProductOrder/'.$data->od_id,'Delete'); ?></td>
        </tr>
            <?php    
            }
        }
        else{
            echo '<h3>Sorry product are not available</h3>';
        }
            
    ?>
    </table>
    <?php // echo $links; ?>
</div>
    
    
</div>
<div class="clear"></div>
</div>

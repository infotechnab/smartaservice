<!DOCTYPE html>
<html lang="en">
    <head>
        <?php if ($meta)
{
    $i=0;
    foreach ($meta as $data)
    {        
       $meta_data[$i] = $data->value;
       $i++;      
    }
 }
                     ?>
        <meta charset="utf-8">
         <?php foreach ($headertitle as $header) {
                   $title = $header->description ;
             echo $title; }?>
        <title>
            <?php 
            if(isset($pageTitle))
            {
                echo $pageTitle."-".$title;
            } 
            else{
               echo $pageTitle = $title;
            }
            ?>
        </title>

        <script src="<?php echo base_url() . 'content/jquery.js'; ?>" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" media="only screen" href="<?php echo base_url() . "content/uploads/styles/styles.css"; ?>" type="text/css">     
       <link rel="shortcut icon" href="<?php echo base_url().'content/uploads/images/'. $meta_data[4]; ?>" type="image/x-icon">
        
        <link rel="shortcut icon" href="<?php echo base_url() . "content/uploads/images/favicon1.jpg"; ?>" type="image/x-icon"> 
        <script src="<?php echo base_url() . 'content/uploads/scripts/jquery-placeholder.js'; ?>" type="text/javascript"></script>

        
        
        <meta name="title" content="Smart Access Services">
        <meta name="description" content="Smart Access Services">
        <meta name="keywords" content="Shopping cart, Cart, Jackek, Smart Access Services">
    </head>
    
    <body>
        <div id="container">
            <div id="headerBackground">
                <div id="headerContent">
                     <?php foreach ($headerlogo as $header) {
                    ?>
                    <div id="headerLogo">
                        <img src="<?php echo base_url().'content/uploads/images/'.$header->description ; ?>" alt="Smartaservices logo"/>
                    </div>
                     <?php } ?>
                    
                    <?php foreach ($headerdescription as $header) {
                    ?>
                    <div id="headerLogoContent">
                        <h1><?php echo $header->description ; ?></h1>
                    </div>
                    <?php } ?>  
                    <div class="clear"></div>
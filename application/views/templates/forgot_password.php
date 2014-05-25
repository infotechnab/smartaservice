<div id="contentBackground">
    <div id='contentWrapper'>
        <div>
            <p id="sucessmsg">
                                    <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
                                echo validation_errors(); ?> </p>
            <?php echo form_open('view/authenticate_user'); ?>
            <input type="email" class="placeholder" name="email" size="35"/>
            <input type="submit" id="submitMe" value="Reset My Password">
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
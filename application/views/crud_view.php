<br>
<br>
<div class="container">


<?php $this->load->helper('form'); ?>
 
<?php echo form_open('crud'); ?>
 
    <p>
    	State:
        <?php echo form_input('state'); ?>
    </p>
 
    <p>City:
        <?php echo form_input('city'); ?>
    </p>
 
    <p>
        <?php echo form_submit('submit', 'Submit'); ?>
    </p>
 
<?php echo form_close(); ?>

</div>


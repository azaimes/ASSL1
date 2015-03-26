<?php $this->load->helper('form'); ?>
 
<h1>CodeIgniter CRUD Tutorial Example</h1>
 
<?php echo form_open('crud/update/'.$id); ?>
 
    <p>
        <?php echo form_input('title'); ?>
    </p>
 
    <p>
        <?php echo form_textarea('content'); ?>
    </p>
 
    <p>
        <?php echo form_submit('submit', 'Submit'); ?>
    </p>
 
<?php echo form_close(); ?>
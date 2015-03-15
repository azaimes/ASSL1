<br>
<br>
<div class="container">
    <div class="row">
        <div class="pull-right well">
             <?php echo validation_errors('<p class="error">'); ?>
             <?php echo form_open("user/registration"); ?>
              <form role="form">
                <div class="form-group">
                  <label for="user_name">User Name:</label><br>
                  <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
                </div>
                <div class="form_group">
                  <label for="email_address">Your Email:</label><br>
                  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
                </div>
                <div class="from_group">
                  <label for="password">Password:</label><br>
                  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                </div>
                <div class="form_group">
                  <label for="con_password">Confirm Password:</label><br>
                  <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
                </div>
                <br>
              <button type="submit" class="btn btn-default"> Submit </button>
              </form>
             <?php echo form_close(); ?>

             
            </div>
    </div>
  </div>
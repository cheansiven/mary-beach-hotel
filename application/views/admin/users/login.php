<?php include_once('application/views/admin/header.php'); ?>

<div class="col-md-6 well well-sm blog-center">
    <?php $attr_form = array('id' => 'login-form', 'class' => 'form', 'role' => 'form');  ?>
    <?php echo form_open('admin/users/login', $attr_form); ?>
    
    <div class="form-group">
        <p> <?php echo form_label('Email Address: ', 'email');  ?> 
        <?php echo form_input('email', set_value('email'), 'id="email" class="form-control" autofocus');  ?> </p>
    </div>
    <div class="form-group">
        <p> <?php echo form_label('Password: ', 'password');  ?> 
        <?php echo form_password('password', set_value('password'), 'id="login-password" class="form-control" autofocus');  ?> </p>
    </div>

    <p>I've <a href="#">forgotten my password</a>.</p>
    <?php echo form_submit('submit', 'Login', 'class="btn btn-default"'); ?>
    <?php if(validation_errors() != false){?>
    <div class="error-box round" style="margin-bottom: 0px !important; padding-top:30px; color: #F00 !important;  font-size: 15px;"> <?php echo validation_errors(); ?> </div>
    <?php }?>
    
    <br/>
    <div class="information-box round">Just click on the "LOG IN" button to continue, no login information required.</div>
    <?php echo form_close(); ?> </div>
</div>

<?php include_once('application/views/admin/footer.php'); ?>
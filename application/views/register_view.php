<h2>Register</h2>

<?php if (validation_errors()): ?>
    <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>

<div class="col-xs-12">
    <?php echo form_open('users/register', ['class' => 'form-horizontal']); ?>

    <div class="form-group">
        <?php echo form_label('First Name'); ?>
        <?php echo form_input(['class' => 'form-control', 'name' => 'first_name', 'placeholder' => 'Your first name']); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Last Name'); ?>
        <?php echo form_input(['class' => 'form-control', 'name' => 'last_name', 'placeholder' => 'Your last name']); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Email'); ?>
        <?php echo form_input(['class' => 'form-control', 'name' => 'email', 'placeholder' => 'Your best email']); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Username'); ?>
        <?php echo form_input(['class' => 'form-control', 'name' => 'username', 'placeholder' => 'Your username']); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Password'); ?>
        <?php echo form_password(['class' => 'form-control', 'name' => 'password', 'placeholder' => 'Chose a password']); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Confirm Password'); ?>
        <?php echo form_password(['class' => 'form-control', 'name' => 'confirm_password', 'placeholder' => 'Re-enter your password']); ?>
    </div>
    <div class="form-group">
        <?php echo form_submit(['class' => 'btn btn-primary', 'name' => 'submit', 'value' => 'Register']); ?>
    </div>
    <?php echo form_close(); ?>
</div>
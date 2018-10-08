<?php //This is  the main view located under views/layouts/main.php             ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title; ?></title>
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>

        <script src="<?php echo base_url('assets/jquery-2.2.4.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <h2>Login</h2>
                    <?php
                    if ($this->session->flashdata('errors')):
                        echo '<div class="alert alert-danger">';
                        echo $this->session->flashdata('errors');
                        echo '</div>';
                    endif;
                    ?>
                    <!-- Basic HTML way of declaring the login form. Same code has been replicated using CodeIgniter below -->
                    <!-- <form action="/home" method="post" class="form-horizontal">
    
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" placeholder="Username" name="username" />
                        </div>
    
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="Password" name="password" />
                        </div>
                        
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" type="password" placeholder="Confirm Password" name="confirm_password" />
                        </div>
    
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Login" />
                        </div>
                    </form> -->


                    <div class="col-xs-12">
                        <?php
                        /*
                         * CodeIgniter way of decalring HTML form and form controls 
                         * This method is recomended and secured
                         */
                        ?>

                        <?php echo form_open('users/login', ['class' => 'form-horizontal']); ?>

                        <div class="form-group">
                            <?php echo form_label('Username'); ?>
                            <?php echo form_input(['placeholder' => 'Username', 'name' => 'username', 'class' => 'form-control']); ?>
                        </div>

                        <div class="form-group">
                            <?php echo form_label('Password'); ?>
                            <?php echo form_password(['placeholder' => 'Password', 'name' => 'password', 'class' => 'form-control']); ?>
                        </div>

                        <div class="form-group">
                            <?php echo form_label('Confirm Password'); ?>
                            <?php echo form_password(['placeholder' => 'Confirm Password', 'name' => 'confirm_password', 'class' => 'form-control']); ?>
                        </div>

                        <div class="form-group">
                            <?php echo form_submit(['value' => 'Login', 'name' => 'submit', 'class' => 'btn btn-primary']); ?>
                        </div>

                        <?php echo form_close(); ?>
                    </div>

                </div>
                <div class="col-sm-9">
                    <?php
                    //The $main_view variable is sent from the controller
                    $this->load->view($main_view);
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
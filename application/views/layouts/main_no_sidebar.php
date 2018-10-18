<?php //This is  the main view located under views/layouts/main_no_sidebar.php              ?>
<?php $this->load->view('layouts/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <?php
            //The $main_view variable is sent from the controller
            $this->load->view($main_view);
            ?>
        </div>
    </div>
</div>
<?php $this->load->view('layouts/footer'); 
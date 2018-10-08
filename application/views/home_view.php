<!-- This is  the home view located under views/home_view.php  -->
<?php
if ($this->session->flashdata('user_registered')):
    echo $this->session->flashdata('user_registered');
endif;
?>
<?php
if ($this->session->flashdata('registration_failed')):
    echo $this->session->flashdata('registration_failed');
endif;
?>

<h1>This is the home view</h1>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
 <!-- <meta charset="UTF-8">-->
 <!--<title><?php echo $page_title; ?></title>-->


 <title>Home</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/coin-slider.css');?>"/>

 <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>

 <script type="text/javascript" src="assets/js/cufon-yui.js"></script>
 <script type="text/javascript" src="assets/js/cufon-georgia.js"></script>
 <script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="assets/js/script.js"></script>
 <script type="text/javascript" src="assets/js/coin-slider.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>


 <script src="<?php echo base_url('assets/jquery-2.2.4.min.js'); ?>" type="text/javascript"></script>
 <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

</head>
<body>
    <div class="header">
        <div class="header_resize">
            <div class="menu_nav">
                <ul>
                    <li class="active"><a href="<?php echo base_url ('/Home');?>"><span>Home</span></a></li>
                    <li><a href="support.html"><span>About Us</span></a></li>
                    <li><a href="<?php echo base_url ('/Course_selection');?>"><span>Courses</span></a></li>
                    <li><a href="<?php echo base_url ('/Register');?>"><span>Register</span></a></li>
                    <li><a href="contact.html"><span>Contact Us</span></a></li>
                </ul>
            </div>
            <div class="logo">
                <h1><a href="index.html">Learning<span>Portal</span></a></h1>
            </div>

        </div>
    </div>
</body>
</html>


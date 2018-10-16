<html>
<head>
  <title>Course Selection</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .box
  {
    width:100%;
    max-width: 650px;
    margin:0 auto;
  }
</style>
</head>
<body>
 <div class="container box">
  <br />
  <br />
  <h3 align="center">Make your choice to access the lesson tutorial(s)</h3>
  <br />
  <div class="form-group">
   <select name="subject" id="subject" class="form-control input-lg">
    <option value="">Select the Subject</option>
    <?php
    foreach($subjects as $row)
    {
     echo '<option value="'.$row->subID.'">'.$row->sub_desc.'</option>';
   }
   ?>
 </select>
</div>
<br />
<div class="form-group">
 <select name="module" id="module" class="form-control input-lg">
  <option value="">Select the Module</option>
</select>
</div>
<br />
<div class="form-group">
 <select name="lesson" id="lesson" class="form-control input-lg">
  <option value="">Select the Lesson_A</option>
</select>
</div>
</div>
</body>
</html>
<script>
  $(document).ready(function()
  {
   $('#subject').change(function(){
    var subID = $('#subject').val();
    if(subID != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>Course_selection/fetch_modules",
      method:"POST",
      data:{subID:subID},
      success:function(data)
      {
       $('#module').html(data);
       $('#lesson').html('<option value="">Select Lesson_B</option>');
     }
   });
   }
   else
   {
     $('#module').html('<option value="">Select Module_C</option>');
     $('#lesson').html('<option value="">Select Lesson_C</option>');
   }
 });

   $('#module').change(function(){
    var moduleID = $('#module').val();
    if(moduleID != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>Course_selection/fetch_lessons",
      method:"POST",
      data:{moduleID:moduleID},
      success:function(data)
      {
       $('#lesson').html(data);
     }
   });
   }
   else
   {
     $('#lesson').html('<option value="">Select Lesson_d</option>');
   }
 });

 });
</script>

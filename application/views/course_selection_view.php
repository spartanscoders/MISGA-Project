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
  <div class="container">
    <div class="row">        
      <?php $this->load->view('layouts/header');?>       
    </div>
  </div>
  <div class="container box">
    <br /><br />
    <h3 align="center">Make your choice to access the lesson tutorial(s)</h3>
    <br />
    <div class="form-group">
     <select name="level" id="level" class="form-control input-lg">
      <option value="">Select the Level</option>
      <?php
      foreach($levels as $row)
      {
       echo '<option value="'.$row->levelID.'">'.$row->level_desc.'</option>';
     }
     ?>
   </select>
 </div>
 <br />
 <div class="form-group">
   <select name="subject" id="subject" class="form-control input-lg">
    <option value="">Select the Subject</option>
  </select>
</div>
<br />

<div class="form-group">
 <select name="module" id="module" class="form-control input-lg">
  <option value="">Select the Module</option>
</select>
</div>
<br />
     <form action="view" method="get">
<div class="form-group">
 <select name="lesson" id="lesson" class="form-control input-lg">
  <option value="">Select the Lesson</option>
</select>
    <button type="submit" >View Lesson</button>
</div>
     </form>
</div>

</body>
</html>
<script>
  
  $(document).ready(function()
  {
   $('#level').change(function(){
    var levelID = $('#level').val();
    if(levelID != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>Course_selection/fetch_subjects",
      method:"POST",
      data:{levelID:levelID},
      success:function(data)
      {
       $('#subject').html(data);
       $('#module').html('<option value="">Select Module</option>');
       $('#lesson').html('<option value="">Select Lesson</option>');
     }
   });
   }
   else
   {
     $('#subject').html('<option value="">Select Subject</option>');
     $('#module').html('<option value="">Select Module</option>');
     $('#lesson').html('<option value="">Select Lesson</option>');
   }
 });


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
       $('#lesson').html('<option value="">Select Lesson</option>');
     }
   });
   }
   else
   {
     $('#module').html('<option value="">Select Module</option>');
     $('#lesson').html('<option value="">Select Lesson</option>');
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
           $('#lesson').html('<option value="">Select Lesson</option>');
         }
       });

      });
    </script>


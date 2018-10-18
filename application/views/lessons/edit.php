<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('lessons/edit/'.$lessons_item['lessonID']); ?>
<table>
    <tr>
        <td><label for="lesson_desc">Lesson Title</label></td>
        <td><input type="input" name="lesson_desc" value="<?php echo $lessons_item['lesson_desc'] ?>" /></td>
    </tr>
    <tr>
        <td><label for="objectives">Objectives</label></td>
        <td>

            <textarea name="objectives" id="editor1" rows="10" cols="80">
               <?php echo $lessons_item['objectives'] ?>
            </textarea>


        </td>
        <td>
    </tr>
    <tr>

        <td><label for="objectives">Video URL</label></td>
        <td>  <video width="400" controls>
                <source src="<?php echo base_url('uploads/'.$lessons_item['vid_url']); ?>" type=video/mp4>
                Your browser does not support HTML5 video.
            </video>
            <input type='file' name='videofile' size='20' /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Update Lession" /></td>
    </tr>
</table>
</form>
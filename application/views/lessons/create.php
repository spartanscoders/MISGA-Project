<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('lessons/create'); ?>
<table>
    <tr>
        <td><label for="title">Title</label></td>
        <td><input type="input" name="title" /></td>
    </tr>
    <td><textarea name="text"></textarea></td>

    <tr>
        <td><label for="text">Text</label></td> </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Create lessons item" /></td>
    </tr>
</table>
</form>

<div class="container box">
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Title</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    <?php foreach ($lessons as $lessons_item): ?>
        <tr>
            <td><?php echo $lessons_item['lessonID']; ?></td>
            <td><?php echo $lessons_item['lesson_desc']; ?></td>
            <td>
                <a href="<?php echo site_url('lessons/'.$lessons_item['lessonID']); ?>">View</a> |
                <a href="<?php echo site_url('lessons/edit/'.$lessons_item['lessonID']); ?>">Edit</a> |
                <a href="<?php echo site_url('lessons/delete/'.$lessons_item['lessonID']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</div>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php //echo form_open('/News/create'); ?>
<form action="http://test.ci.com/index.php/News/create" method="post" accept-charset="utf-8">
<label for="title">Title</label>
<input type="input" name="title" /><br />

<label for="text">Text</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="Create news item" />

</form>
<?php
$title = 'Add Task';

ob_start();
require 'nav.php';
?>

<div class="container">

    <h1><?php echo $title ?></h1>
    <?php
    if (isset($error_message)) {
        echo "<p class='message_error'>$error_message</p>";
    }

    if (isset($confirm_message)) {
        echo "<p class='message_ok'>$confirm_message</p>";
    }
    ?>

    <form method="post">
        <label for="project">
            <span>Project:</span>
            <strong><abbr title="required">*</abbr></strong>
        </label>
        <select name="project" id="project" required>
            <option value="">Select a project</option>
            <?php foreach ($projects as $project) { ?>
            <option value="<?php echo $project['id'] ?>"><?php echo escape($project['title']) ?></option>
            <?php } ?>
        </select>
        <label for="title">
            <span>Title:</span>
            <strong><abbr title="required">*</abbr></strong>
        </label>
        <input type="text" placeholder="New task" name="title" id="title" required>
        <label for="date">
            <span>Date:</span>
            <strong><abbr title="required">*</abbr></strong>
        </label>
        <input type="date" name="date" id="date" required>
        <label for="time">
            <span>Time:</span>
            <strong><abbr title="required">*</abbr></strong>
        </label>
        <input type="number" name="time" id="time" required>

        <input type="submit" name="submit" value="Add">
    </form>
</div>


<?php
$content = ob_get_clean();
include 'layout.php';
?>

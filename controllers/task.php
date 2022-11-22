<?php
require_once "../model/model.php";
require "common.php";

$projects = get_all_projects();

if (isset($_POST['submit'])) {
    $id = trim($_POST['project']);
    $title = trim($_POST['title']);
    $date = trim($_POST['date']);
    $time = trim($_POST['time']);

    if (empty($id) || empty($title) || empty($date) || empty($time)) {
        $error_message = "One or more fields empty";
    } else {

        if (titleExists("tasks", $title)) {
            $error_message = "I'm sorry, but looks like " . escape($title) . " already exists";
        } else {
            header('Refresh:4; url=task_list.php');
            add_task($id, $title, $date, $time);
            $confirm_message = escape($title) . ' added successfully';
        }
    }
}

require "../views/task.php";

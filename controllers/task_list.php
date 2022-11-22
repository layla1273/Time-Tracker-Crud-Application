<?php
require_once "../model/model.php";

$tasks = get_all_tasks();
$taskCount = get_all_tasks_count();

require "../views/task_list.php";

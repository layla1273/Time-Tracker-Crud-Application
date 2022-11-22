<?php
require_once "../model/model.php";
require "common.php";

$filter = "all";

if (!empty($_GET['filter'])) {
    $filter = explode(":", $_GET['filter']); // convert input into an array
}

$tasks = get_all_tasks($filter);
$projects = get_all_projects();

require "../views/reports.php";

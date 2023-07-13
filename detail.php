<?php

require_once 'funcs.php';
require_once 'model.php';

$id = $_GET['id'];
$db_connect = db_connect();
$result = get_post_by_id($id, $db_connect);

require_once 'templates/detail.php';

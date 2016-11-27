<?php
require('database.php');

if (!isset($_GET['id'])) {
	die("");
}

$id = $_GET['id'];
$data = getAnswers($id);
echo json_encode($data, JSON_HEX_APOS);
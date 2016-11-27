<?php
require('database.php');

if (!isset($_GET['qID'])) {
	die("");
}

$qID = $_GET['qID'];
$data = getAnswers($qID);
echo json_encode($data, JSON_HEX_APOS);
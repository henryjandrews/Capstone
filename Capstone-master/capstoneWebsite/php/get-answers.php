<?php
// connects javascript to database.php uses post/get to send questionID
// to getAnswers php function to return answers on a question view page

require('database.php');

if (!isset($_GET['qID'])) {
	die("");
}

$qID = $_GET['qID'];
$data = getAnswers($qID);
echo json_encode($data, JSON_HEX_APOS);
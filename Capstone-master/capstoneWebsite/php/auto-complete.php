<?php
// connects javascript to php, used post/get to send a keyword
// in order to populate the dropdown menu when asking a question

require('database.php');

if (!isset($_GET['keyword'])) {
	die("");
}

$keyword = $_GET['keyword'];
$data = searchForKeyword($keyword);
echo json_encode($data, JSON_HEX_APOS);
<?php
require('database.php');


if (!isset($_GET['num'])) {
	die("");
}

$howMany = $_GET['num'];
$data = getPopularQuestions($howMany);
echo json_encode($data, JSON_HEX_APOS);
<?php
// php function to connect javascript/php, uses post/get to send a keyword
// to the askQuestion php function to post a question into the database

require('database.php');

if (!isset($_GET['keyword'])) {
	die("");
}

$keyword = $_GET['keyword'];
askQuestion($keyword);
<?php
require('database.php');

if (!isset($_GET['pos']) || !isset($_GET['aID'])) {
	die("");
}

$pos = $_GET['pos'];
$aID = $_GET['aID'];
echo updateScore($pos, $aID);

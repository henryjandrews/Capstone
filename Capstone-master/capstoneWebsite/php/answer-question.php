<?php
require('database.php');

if (!isset($_GET['qID']) || !isset($_GET['aText'])) {
	die("");
}

$qID = $_GET['qID'];
$aText = $_GET['aText'];
echo postAnswer($qID, $aText);

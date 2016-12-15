<?php
// This function connects the javascript to the php functions in database.php
// uses POST/GET to pull questionID and answer text from a given question page
// and then calls postAnswer to add the answer to the database

require('database.php');

if (!isset($_GET['qID']) || !isset($_GET['aText'])) {
	die("");
}

$qID = $_GET['qID'];
$aText = $_GET['aText'];
echo postAnswer($qID, $aText);

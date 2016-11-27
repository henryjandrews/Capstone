<?php
require('database.php');

if (!isset($_GET['aID'])) {
	die("");
}

$aID = $_GET['aID'];
echo positiveScore($aID);

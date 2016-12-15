<?php
// function call for the downvote button, uses post/get for the
// answer id 

require('database.php');

if (!isset($_GET['aID'])) {
	die("");
}

$aID = $_GET['aID'];
echo negativeScore($aID);

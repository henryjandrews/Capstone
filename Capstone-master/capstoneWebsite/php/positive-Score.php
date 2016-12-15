<?php
// function call for the upvote button, uses post/get for the
// answer id

require('database.php');

if (!isset($_GET['aID'])) {
	die("");
}

$aID = $_GET['aID'];
echo positiveScore($aID);

<?php
// checks and returns for a questionID 

if (!isset($_GET['question'])) {
	die("");
}

$question = $_GET['question'];
echo $question;
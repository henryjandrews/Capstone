<?php

if (!isset($_GET['question'])) {
	die("");
}

$question = $_GET['question'];
echo $question;
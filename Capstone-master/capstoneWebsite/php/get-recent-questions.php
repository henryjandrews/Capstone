<?php
// connects javascript to php, returns 5 most recent questions
// for the main page

require('database.php');

$data = getRecentQuestions(5);
echo json_encode($data, JSON_HEX_APOS);
<?php
// connects javascript to php, returns 5 most popular questions
// for the main page

require('database.php');

$data = getPopularQuestions(5);
echo json_encode($data, JSON_HEX_APOS);
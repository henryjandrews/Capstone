<?php
// connects javascript to php, returns 25 most popular questions
// for the "get more popular questions" page

require('database.php');

$data = getPopularQuestions(25);
echo json_encode($data, JSON_HEX_APOS);
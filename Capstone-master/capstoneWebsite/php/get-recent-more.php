<?php
// connects javascript to php, returns 25 most recent questions
// for the "more recent questions" page

require('database.php');

$data = getRecentQuestions(25);
echo json_encode($data, JSON_HEX_APOS);
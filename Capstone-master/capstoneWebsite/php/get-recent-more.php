<?php
require('database.php');

$data = getRecentQuestions(25);
echo json_encode($data, JSON_HEX_APOS);
<?php
require('database.php');

$data = getRecentQuestions(5);
echo json_encode($data, JSON_HEX_APOS);
<?php
require('database.php');

$data = getRecentQuestions();
echo json_encode($data, JSON_HEX_APOS);
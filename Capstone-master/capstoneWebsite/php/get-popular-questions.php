<?php
require('database.php');

$data = getPopularQuestions();
echo json_encode($data, JSON_HEX_APOS);
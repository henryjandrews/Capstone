<?php
require('database.php');


$data = getPopularQuestions(5);
echo json_encode($data, JSON_HEX_APOS);
<?php
require('database.php');


$data = getPopularQuestions(25);
echo json_encode($data, JSON_HEX_APOS);
<?php
// We will use PDO to execute database stuff. 
// This will return the connection to the database and set the parameter
// to tell PDO to raise errors when something bad happens
function getDbConnection() {
$servername = "keybank.cwdefzhbyz8e.us-east-1.rds.amazonaws.com:3307";
$username = "keybank";
$password = "liamcse449";
	try{
      $db = new PDO("mysql:host=keybank.cwdefzhbyz8e.us-east-1.rds.amazonaws.com:3307;dbname=mydb", "keybank", "liamcse449");
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      return $db;
  	}
  	catch(PDOException $e){
  	   echo "getDBConnection failed: " . $e->getMessage();
  	}
}

// This is the 'search' function that will return all possible rows starting with the keyword sent by the user
function searchForKeyword($keyword) {
  
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT Question_text FROM mydb.Question WHERE Question_text LIKE ? LIMIT 10");

    $keyword = '%' . $keyword . '%';
    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();
  
    $results = array();
    
    if ($isQueryOk) {
      $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
     
    } else {
      
      trigger_error('Error executing query.', E_USER_ERROR);
    }

    $db = null; 
    return $results;
}

// This is the 'askQuestion' function that will add a new question to the DB
function askQuestion($keyword) {
  
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO `mydb`.`Question` (`Question_text`) VALUES (?)");

    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();
    
    $results = array();

    if ($isQueryOk) {
      $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } else {
      trigger_error('Error executing statement.', E_USER_ERROR);
    }

    $db = null; 
    return $results;
}

function getAnswers($qID) {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT `Answer`.`Answer_text` FROM `mydb`.`Answer` JOIN `mydb`.`Has_answer`
              ON `Answer`.`AnswerID` = `Has_answer`.`AnswerID` WHERE `Has_answer`.`QuestionID` = ? LIMIT 5");
    $stmt->bindParam(1, $qID, PDO::PARAM_INT);

    $isQueryOk = $stmt->execute();

    $results = array();

    if($isQueryOk) {
        $results = $stmt->fetchAll(PDO::FETCH_COLUMN);
    } else {
        trigger_error('Error executing query: ', E_USER_ERROR);
    }

    $db = null;
    return $results;
}

function postAnswer($qID, $aText) {
    $db = getDbConnection();
    $stmt = $db->prepare("START TRANSACTION; INSERT INTO `mydb`.`Answer` (`Answer_Text`)
            VALUES (?); INSERT INTO `mydb.`Has_answer` (`QuestionID`, `AnswerID`) VALUES (?, @AnswerID = LAST_INSERT_ID()); COMMIT;");
    $stmt->bindParam(1, $aText, PDO::PARAM_STR, 100);
    $stmt->bindParam(2, $qID, PDO::PARAM_INT);

    $isQueryOk = $stmt->execute();

    $db = null;

    if($isQueryOk) {
        return true;
    } else {
        return false;
    }
}
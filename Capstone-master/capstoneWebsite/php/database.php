<?php
// We will use PDO to execute database stuff. 
// This will return the connection to the database and set the parameter
// to tell PDO to raise errors when something bad happens

// Establishes and returns database connection
function getDbConnection() {
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
// this is the look-ahead type feature
//
// $keyword is whatever string is currently in the search bar
// returns an array of text and questionIDs -> used to populate the drop down menu of questions
function searchForKeyword($keyword) {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT Question_text, QuestionID FROM mydb.Question WHERE Question_text LIKE ? LIMIT 10");

    $keyword = '%' . $keyword . '%';
    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();
    $results = array();

    if ($isQueryOk) {
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    } else {
      trigger_error('Error executing query.', E_USER_ERROR);
    }

    $db = null; 
    return $results;
}

// This is the 'askQuestion' function that will add a new question to the DB
//
// $keyword is the string of whatever is in the search bar when submitted
// returns true if query worked, false otherwise
function askQuestion($keyword) {
    $keyword = formatString($keyword);
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO `mydb`.`Question` (`Question_text`) VALUES (?)");

    $stmt->bindParam(1, $keyword, PDO::PARAM_STR, 100);

    $isQueryOk = $stmt->execute();

    $db = null;

    if ($isQueryOk) {
      return true;
    } else {
      return false;
    }
}

// This populates a 'question' view page with answers to a given question
//
// qID is passed from a POST/GET
// returns an array of answer text, score, time, and answerID
function getAnswers($qID) {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT `Answer`.`Answer_text`, `Answer`.`Score`, `Answer`.`time`, `Answer`.`AnswerID` FROM `mydb`.`Answer` JOIN `mydb`.`Has_Answer`
              ON `Answer`.`AnswerID` = `Has_Answer`.`AnswerID` WHERE `Has_Answer`.`QuestionID` = ? ORDER BY `score` DESC");
    $stmt->bindParam(1, $qID, PDO::PARAM_INT);

    $isQueryOk = $stmt->execute();

    $results = array();

    if($isQueryOk) {
        $results = $stmt->fetchAll();
    } else {
        trigger_error('Error executing query: ', E_USER_ERROR);
    }

    $db = null;
    return $results;
}

// This allows a user to post a 'new answer' to a given question
//
// qID is passed from a POST/GET and is the ID of the question to respond to
// aText is passed from the text box
// returns true if the query worked, false otherwise
function postAnswer($qID, $aText) {
    $aText = formatString($aText);
    $db = getDbConnection();
    $stmt = $db->prepare("START TRANSACTION; INSERT INTO `mydb`.`Answer` (`Answer_Text`, `time`)
            VALUES (?, now()); 
            SET @lastID := last_insert_id();
            INSERT INTO `mydb`.`Has_Answer` (`QuestionID`, `AnswerID`) VALUES (?, @lastID); COMMIT;");
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

// Function that changes the positive score in the database when
// the up arrow is pressed on an answer
//
// $aID is the ID of the answer to be upvoted
// returns true if query worked, false otherwise
function positiveScore($aID) {
    $db = getDBConnection();
    $stmt = $db->prepare("UPDATE `mydb`.`Answer` SET `Answer`.`Positive_Score` = `Answer`.`Positive_Score` + 1 WHERE AnswerID = ?");
    $stmt->bindParam(1, $aID, PDO::PARAM_INT);

    $isQueryOk = $stmt->execute();

    $db = null;

    if($isQueryOk) {
        return true;
    } else {
        return false;
    }
}

// Function that changes the negative score in the database
// when the down arrow is pressed on an answer
//
// $aID is the ID number of the answer to be downvoted
// returns true if the query worked, false otherwise
function negativeScore($aID) {
    $db = getDBConnection();
    $stmt = $db->prepare("UPDATE `mydb`.`Answer` SET `Answer`.`Negative_Score` = `Answer`.`Negative_Score` + 1 WHERE AnswerID = ?");
    $stmt->bindParam(1, $aID, PDO::PARAM_INT);

    $isQueryOk = $stmt->execute();

    $db = null;

    if($isQueryOk) {
        return true;
    } else {
        return false;
    }
}

// Returns X number of top answered questions for the front page and the
// "More popular questions" page.
//
// $howMany is the number of popular questions you want
// returns an array of question text, questionID, and time
function getPopularQuestions($howMany) {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT Question.Question_text, Question.QuestionID, Question.timeposted FROM mydb.Question 
	JOIN mydb.Has_Answer ON Question.QuestionID = Has_Answer.QuestionID 
    GROUP BY Question.QuestionID ORDER BY COUNT(Has_Answer.AnswerID) DESC LIMIT ?;");
    $stmt->bindParam(1, $howMany, PDO::PARAM_INT);

    $isQueryOk = $stmt->execute();

    $results = array();

    if ($isQueryOk) {
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    } else {
        trigger_error('Error executing query.', E_USER_ERROR);
    }

    $db = null;
    return $results;
}

// Returns the X number of most recently asked questions for the main page
// and the "More recent questions" page
//
// $howMany is the number of recent questions you want
// returns an array of question text, questionID, and time
function getRecentQuestions($howMany) {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT Question.Question_text, Question.QuestionID, Question.timeposted 
    FROM mydb.Question ORDER BY Question.timeposted DESC LIMIT ?;");
    $stmt->bindParam(1, $howMany, PDO::PARAM_INT);

    $isQueryOk = $stmt->execute();

    $results = array();

    if ($isQueryOk) {
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    } else {
        trigger_error('Error executing query.', E_USER_ERROR);
    }

    $db = null;
    return $results;
}

// This function is used to format any questions or answers submitted
// from the javascript. It will cap the first letter of a sentence.
//
// takes in a sentence as a string and returns the formatted string
function formatString($sentence) {
    $toFormat = ucfirst(strtolower($sentence));
    $toFormat = preg_replace_callback('/[.!?] .*?\w/',
        create_function('$matches', 'return strtoupper($matches[0]);'), $toFormat);
    return $toFormat;
}
<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';


$app = new \Slim\App;

// Routes
$app->group('/api', function () use ($app) {
 
    // Version group
    $app->group('/v1', function () use ($app) {
		$app->get('/students', 'getStudents');
        $app->get('/student/{Student_ID}', 'getStudent');
        $app->get('/awards', 'getAwards');
        $app->get('/award/{Award_ID}', 'getStudent_award');
        
	});
});

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$corsOptions = array(
    "origin" => "*",
    "exposeHeaders" => array("Content-Type", "X-Requested-With", "X-authentication", "X-client"),
    "allowMethods" => array('GET', 'POST', 'PUT', 'DELETE', 'OPTIONS')
);
$cors = new \CorsSlim\CorsSlim($corsOptions);
 
$app->add($cors);

$app->run();

// Connect Database Code
function getConnection() {
    $dbhost="103.86.50.206";
    $dbuser="buu_profile";
    $dbpass="buu999";
    $dbname="profile_db";
    $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->query("set names utf8");
    return $dbh;
}

function getStudents($request, $response) {
    $sql = "SELECT Student_ID, Prefix, Student_Name_TH, Student_Lname_TH, Course, Entry_Years, Status_Name, Faculty.Faculty_Name 
    FROM Student
    left join Faculty on Faculty.Faculty_ID = Student.Faculty_ID
    left join Status on Status.Status_ID = Student.Status_ID";
    try {
        $db = getConnection();

        $result = null;

        $stmt = $db->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        if($result){
            return $response->withJson(array('status' => 'true','result'=>$result),200);
        }else{
            return $response->withJson(array('status' => 'Student Not Found'),422);
        }
        $db=null;
               
    }
    catch(\PDOException $ex){
        return $response->withJson(array('error' => $ex->getMessage()),422);
    }

}


function getStudent($request, $response) {
    $Student_ID = 0;;
    $Student_ID =  $request->getAttribute('Student_ID');
    try {
        $db = getConnection();
        $sql = "SELECT * FROM Student 
        left join Academic_Adviser on Academic_Adviser.Teacher_ID = Student.Teacher_ID
        left join Workplace on Workplace.Workplace_ID = Student.Workplace_ID
        left join Faculty on Faculty.Faculty_ID = Student.Faculty_ID
        left join Status on Status.Status_ID = Student.Status_ID
        WHERE Student_ID=:Student_ID";
        $stmt = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $values = array(
            ':Student_ID' => $Student_ID
        );
        $stmt->execute($values);
        $result = $stmt->fetchObject();

        if($result){
            return $response->withJson(array('status' => 'true','result'=>$result),200);
        }else{
            return $response->withJson(array('status' => 'Student Not Found'),422);
        }
        $db=null;

    } catch(PDOException $ex) {
      return $response->withJson(array('error' => $ex->getMessage()),422);
    }
    }

    function getAwards($request, $response) {
        try {
            
            $db = getConnection();
            $sql = "SELECT * FROM Award";
            
    
            $result = null;
    
            $stmt = $db->query($sql);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if($result){
                return $response->withJson(array('status' => 'true','result'=>$result),200);
            }else{
                return $response->withJson(array('status' => 'Award Not Found'),422);
            }
            $db=null;
                   
        }
        catch(PDOException $ex){
            return $response->withJson(array('error' => $ex->getMessage()),422);
        }
    
    }

    function getStudent_award($request, $response) {
        $Award_ID = 0;;
        $Award_ID =  $request->getAttribute('Award_ID');
        try {
            $db = getConnection();
            $sql = "SELECT Award_has_Student.*, Student.Prefix , Student.Student_NameTH , Student.Student_LNameTH FROM Award_has_Student 
            left join Student on Student.Student_ID = Award_has_Student.Student_ID
            WHERE Award_has_Student.Award_ID=:Award_ID";
            $stmt = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $values = array(
                ':Award_ID' => $Award_ID
            );
            $stmt->execute($values);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    
            if($result){
                return $response->withJson(array('status' => 'true','result'=>$result),200);
            }else{
                return $response->withJson(array('status' => 'Student Not Found'),422);
            }
            $db=null;
    
        } catch(PDOException $ex) {
          return $response->withJson(array('error' => $ex->getMessage()),422);
        }
        }


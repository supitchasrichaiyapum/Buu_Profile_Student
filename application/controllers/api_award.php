<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../config/autoload.php';


$app = new \Slim\App;

// Routes
$app->group('/api', function () use ($app) {
 
    // Version group
    $app->group('/v1', function () use ($app) {
		$app->get('/subjects', 'getSubjects');
		$app->get('/subjects/{id}', 'getSubject');
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
    return $dbh;
}

function getAward($request, $response) {
    $sql = "SELECT * FROM Award";
    try {
        $db = getConnection();

        $result = null;

        $stmt = $db->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        if($result){
            return $response->withJson(array('status' => 'true','result'=>$result),200);
        }else{
            return $response->withJson(array('status' => 'Subject Not Found'),422);
        }
        $db=null;
               
    }
    catch(\PDOException $ex){
        return $response->withJson(array('error' => $ex->getMessage()),422);
    }

}


// function getSubject($request, $response) {
//     $sub_id = 0;;
//     $sub_id =  $request->getAttribute('id');
//     try {
//         $db = getConnection();
//         $sql = "SELECT * FROM subjects WHERE sub_id=:sub_id";
//         $stmt = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//         $values = array(
//             ':sub_id' => $sub_id
//         );
//         $stmt->execute($values);
//         $result = $stmt->fetchObject();

//         if($result){
//             return $response->withJson(array('status' => 'true','result'=>$result),200);
//         }else{
//             return $response->withJson(array('status' => 'Subject Not Found'),422);
//         }
//         $db=null;

//     } catch(PDOException $e) {
//       return $response->withJson(array('error' => $ex->getMessage()),422);
//     }
    // }



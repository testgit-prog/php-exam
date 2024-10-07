<?php 

  header("Content-Type: application/json");
  include_once 'config.php';
  
  
  function sendResponse($status_code, $response) {
    http_response_code($status_code);
    echo json_encode($response);
  }
  
  $request_method = $_SERVER["REQUEST_METHOD"];
  $input = json_decode(file_get_contents("php://input"), true);
  
  switch ($request_method) {
    case 'GET':
     		if ($_GET['view'] == "user") {
               getUser($connection);
			}
			if ($_GET['view'] == "users") {
               getUsers($connection);
			}
			if ($_GET['view'] == "company") {
               getCompany($connection);
			}
			if ($_GET['view'] == "article") {
               getArticle($connection);
			}
			if ($_GET['view'] == "article_by_id") {
				getArticleByID($connection,$_GET['id']);
			}
			if ($_GET['view'] == "company_by_id") {
				getCompanyByID($connection,$_GET['id']);
			}
			if ($_GET['view'] == "user_by_id") {
				getUserByID($connection,$_GET['id']);
			}

        break;
    case 'POST':
           createUser($connection, $input);
           createCompany($connection, $input);
           createArticle($connection, $input);
        break;
    case 'PUT':
        if (isset($_GET['id'])) {
            updateArticle($connection, $_GET['id'], $input);
        } else {
            sendResponse(400, ["message" => "Article ID is required"]);
        }
		
		if (isset($_GET['company-id'])) {
            updateCompany($connection, $_GET['company-id'], $input);
        } else {
            sendResponse(400, ["message" => "Company ID is required"]);
        }
		
		if (isset($_GET['user-id'])) {
            updateUser($connection, $_GET['user-id'], $input);
        } else {
            sendResponse(400, ["message" => "User ID is required"]);
        }
        break;
    case 'DELETE':
        if (isset($_GET['id'])) {
            deleteUser($connection, $_GET['id']);
        } else {
            sendResponse(400, ["message" => "User ID is required"]);
        }
        break;
    default:
        sendResponse(405, ["message" => "Method Not Allowed"]);
        break;
}


function createUser($connection, $input) {
    if (!isset($input['firstname']) || !isset($input['lastname'])) {
        sendResponse(400, ["message" => "Firstname and Lastname are required"]);
        return;
    }
    $query = "INSERT INTO user (firstname, lastname, type, status) VALUES (:firstname, :lastname, :type, :status)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":firstname", $input['firstname']);
    $stmt->bindParam(":lastname", $input['lastname']);
    $stmt->bindParam(":type", $input['type']);
    $stmt->bindParam(":status", $input['status']);
    if ($stmt->execute()) {
        sendResponse(201, ["message" => "User created successfully"]);
    } else {
        sendResponse(500, ["message" => "Failed to create user"]);
    }
}


function createCompany($connection, $input) {
    if (!isset($input['logo']) || !isset($input['name'])) {
        sendResponse(400, ["message" => "Logo and Name are required"]);
        return;
    }
    $query = "INSERT INTO company (logo, name, status) VALUES (:logo, :name, :status)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":logo", $input['logo']);
    $stmt->bindParam(":name", $input['name']);
    $stmt->bindParam(":status", $input['status']);
    if ($stmt->execute()) {
        sendResponse(201, ["message" => "Company created successfully"]);
    } else {
        sendResponse(500, ["message" => "Failed to create company"]);
    }
}


function createArticle($connection, $input) {
    if (!isset($input['image']) || !isset($input['title'])) {
        sendResponse(400, ["message" => "image and title are required"]);
        return;
    }
    $query = "INSERT INTO article (image, title, link, date, content, status) VALUES (:image, :title, :link, :date, :content, :status)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":image", $input['image']);
    $stmt->bindParam(":title", $input['title']);
    $stmt->bindParam(":link", $input['link']);
    $stmt->bindParam(":date", $input['date']);
    $stmt->bindParam(":content", $input['content']);
    $stmt->bindParam(":status", $input['status']);
    if ($stmt->execute()) {
        sendResponse(201, ["message" => "Article created successfully"]);
    } else {
        sendResponse(500, ["message" => "Failed to create article"]);
    }
}


function getUser($connection) {
    $query = "SELECT * FROM user where status ='Active'";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    sendResponse(200, $users);
}

function getUsers($connection) {
    $query = "SELECT * FROM user";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    sendResponse(200, $users);
}

function getUserByID($connection,$id) {
    $query = "SELECT * FROM user where id=".$id;
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    sendResponse(200, $user);
}

function getCompany($connection) {
    $query = "SELECT * FROM company";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $company = $stmt->fetchAll(PDO::FETCH_ASSOC);
    sendResponse(200, $company);
}

function getCompanyByID($connection,$id) {
    $query = "SELECT * FROM company where id=".$id;
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $company = $stmt->fetchAll(PDO::FETCH_ASSOC);
    sendResponse(200, $company);
}

function getArticle($connection) {
    $query = "SELECT * FROM article";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
    sendResponse(200, $article);
}

function getArticleByID($connection,$id) {
    $query = "SELECT * FROM article where id=".$id;
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
    sendResponse(200, $article);
}

function updateArticle($connection, $id, $input) {
    $query = "UPDATE article SET image = :image, title = :title, link = :link, content = :content, status = :status WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":image", $input['image']);
    $stmt->bindParam(":title", $input['title']);
    $stmt->bindParam(":link", $input['link']);
    $stmt->bindParam(":content", $input['content']);
    $stmt->bindParam(":status", $input['status']);
    if ($stmt->execute()) {
        sendResponse(200, ["message" => "Article updated successfully"]);
    } else {
        sendResponse(500, ["message" => "Failed to update article"]);
    }
}


function updateCompany($connection, $id, $input) {
    $query = "UPDATE company SET logo = :logo, name = :name, status = :status WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":logo", $input['logo']);
    $stmt->bindParam(":name", $input['name']);
    $stmt->bindParam(":status", $input['status']);
    if ($stmt->execute()) {
        sendResponse(200, ["message" => "Company updated successfully"]);
    } else {
        sendResponse(500, ["message" => "Failed to update company"]);
    }
}

function updateUser($connection, $id, $input) {
    $query = "UPDATE user SET firstname = :firstname, lastname = :lastname, type = :type, status = :status WHERE id = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":firstname", $input['firstname']);
    $stmt->bindParam(":lastname", $input['lastname']);
    $stmt->bindParam(":type", $input['type']);
    $stmt->bindParam(":status", $input['status']);
    if ($stmt->execute()) {
        sendResponse(200, ["message" => "User updated successfully"]);
    } else {
        sendResponse(500, ["message" => "Failed to update company"]);
    }
}

?>
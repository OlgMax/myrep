<?php
require_once 'vendor/autoload.php';
use \Core\Router;
use Lib\DB\Connector;
/*$router = new Router();
$router->run();*/
$connector = new Connector();
$conn = $connector->getConnect();
$stmt = $conn->prepare("INSERT INTO posts(subject, detail, author_id) VALUES('title post', 'description post', 5)");
$stmt = $conn->prepare("INSERT INTO users(user_name, surname, age) VALUES('Ivan', 'Ivanov', 25)");
$stmt = $conn->prepare("INSERT INTO contacts(email, phone, city) VALUES('some@mail.com', '123456', 'Dnepr')");
$stmt = $conn->prepare("UPDATE posts SET subject='some subject' WHERE author_id=2");
$stmt = $conn->prepare("UPDATE users SET user_name='Bob' WHERE id=1");
$stmt = $conn->prepare("DELETE FROM contacts WHERE id = 3");
$stmt = $conn->prepare("DELETE FROM posts WHERE detail = 'description post'");
$stmt->execute();

try
{
    $stmt = "SELECT email, phone, city FROM contacts";
    $res = $conn->query($stmt);
    if ($res->rowCount() > 0) {
        $row = $res->fetch();
        echo $row['email'];
        echo $row['phone'];
        echo $row['city'];
        }
}
catch (PDOException $e)
{
    die("ERROR: Could not able to execute $stmt. ".$e->getMessage());
}






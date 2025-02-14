<?php
include __DIR__ . '/src/Framework/Database.php';

use Framework\Database;

$db = new Database('mysql', [
  'host' => 'localhost',
  'port' => 3307,
  'dbname' => 'phpiggy'
], 'root', '');


//Normal queries
// $search = "Hats";
// $query = "SELECT * FROM products WHERE name=:name";
// // $query = "SELECT * FROM products";

// // $stmt = $db->connection->query($query, PDO::FETCH_ASSOC); // execute inmediately
// $stmt = $db->connection->prepare($query); // DONT EXECUTE INMEDIATELY to prevent injections.

// $stmt->bindValue('name', $search, PDO::PARAM_STR); //check the type of value before execite

// $stmt->execute();

// $stmt->execute([
//   'name' => $search
// ]);




//SQL Transactions are used when you need to execute more than one query, and one depends on the other.

// try {
//   //code...
//   $db->connection->beginTransaction();// Creat a translation and gruup the queries

//   $db->connection->query("INSERT INTO products VALUES(99, 'Gloves')");

//   $search = "Hats";
//   $query = "SELECT * FROM products WHERE name=:name";
//   $stmt = $db->connection->prepare($query);
//   $stmt->bindValue('name', $search, PDO::PARAM_STR);
//   $stmt->execute();

//   var_dump($stmt->fetchAll(PDO::FETCH_OBJ));

//   $db->connection->commit();// Commit the changes if they are successful

// } catch (Exception $e) {
//   if($db->connection->inTransaction()){
//     $db->connection->rollBack();// Revert the changes if a query or transaction fails\
//   }
//   echo "Transaction failed";
// }


$sqlFile = file_get_contents("./database.sql");
$db->query($sqlFile);


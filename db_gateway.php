<?php

// require_once 'config.php';

// class DatabaseGateway
// {
//     public  $error    = '';

//     private function dbConnect()
//     {
//         try {

//             $pdo = new PDO("mysql:host=" . DB_HOST  . ";dbname=" . DB_NAME, DB_USER, DB_USER);
//             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//             return $pdo;
//         } catch (PDOException $e) {
//             $this->error = $e->getMessage();
//         }
//     }

//     public function query($sql, $data = [])
//     {
//         try {

//             $pdo  = $this->dbConnect();

//             if ($this->error != '') {
//                 return $this->error;
//             }

//             $stmt = $pdo->prepare($sql);

//             if (!empty($data)) {
//                 foreach ($data as $key => &$val) {
//                     $stmt->bindParam($key, $val);
//                 }
//             }

//             $stmt->execute();
//             $response = [];

//             while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
//                 $response[] = $row;
//             }

//             $pdo = null;

//             return $response;
//         } catch (PDOException $e) {
//             $this->error = $e->getMessage();
//         }
//     }

//     public function executeTransaction($sql, $data)
//     {
//         try {
//             $pdo = $this->dbConnect();

//             if ($this->error != '') {
//                 return $this->error;
//             }

//             try {
//                 $stmt = $pdo->prepare($sql);
//                 $stmt->execute($data);
//             } catch (PDOException $e) {
//                 $this->error = $e->getMessage();
//             }
//         } catch (PDOException $e) {
//             $this->error =  $e->getMessage();
//         }
//     }
// }




// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

// $pass="123456";
// echo password_hash($pass,PASSWORD_BCRYPT  );
<?php
$host = "db";                 // اسم خدمة MySQL في docker-compose
$dbname = "studentssystem";
$user = "testuser";
$pass = "test1234";

try {
    $db = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// $host = "127.0.0.1";
// $port = "3307";           
// $dbname = "studentssystem";
// $user = "testuser";
// $pass = "test1234";

// try {
//     $db = new PDO(
//         "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
//         $user,
//         $pass
//     );
    
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//     // echo "تم الاتصال بقاعدة البيانات بنجاح!";
// } catch (PDOException $e) {
//     die("Database connection failed: " . $e->getMessage());
// }


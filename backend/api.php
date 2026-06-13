<?php

$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');


    $conn = @new mysqli($host, $user, $pass, $dbname);

    if (!$conn->connect_error) {
        $connected = true;
        break;
    }

    sleep(2);
}

if (!$connected) {
    die("Database connection failed");
}

header('Content-Type: application/json');

$response = [
    "status" => "success",
    "message" => "Connected to MySQL successfully",
    "reg_id" => "REG12345"
];

echo json_encode($response);
?>

<?php

    include_once '../db/db_conn.php';

    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $result = $conn->query("SHOW TABLES LIKE 'tbl_regusers'");
    if ($result->num_rows === 0) {
        echo json_encode(['error' => 'ERROR: Users table does not exist.']);
        exit;
    }

    $firstName_reg = $_POST['firstName'];
    $lastName_reg = $_POST['lastName'];
    $email_reg = $_POST['email_reg'];
    $password_reg = $_POST['password_reg'];

    if(empty($firstName_reg) || empty($lastName_reg) || empty($email_reg) || empty($password_reg)) {
        echo json_encode (['message' => 'error', 'error' => 'All fields are required']);
        exit;   
    }

    if(!filter_var($email_reg, FILTER_VALIDATE_EMAIL)) {
        echo json_encode (['message' => 'error', 'error' => 'Invalid email address']);
        exit;
    }

    $result = $conn->prepare("SELECT * FROM tbl_regusers WHERE email = ?");
    $result->bind_param("s", $email_reg);
    $result->execute();

    $email_result = $result->get_result();
    if ($email_result->num_rows > 0) {
        echo json_encode(['message' => 'error', 'error' => 'Email already exists.']);
        exit;
    }

    $hashed_password = password_hash($password_reg, PASSWORD_BCRYPT);
    
    $current_date = date('Y-m-d H:i:s');
    $stmt = $conn->prepare("INSERT INTO tbl_regusers (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
   
    if (!$stmt) {
        echo json_encode(['message' => 'error', 'error' => 'Prepare failed: ' . $conn->error]);
        exit;
    }

    $stmt->bind_param("ssss", $firstName_reg, $lastName_reg, $email_reg, $hashed_password);

    if (!$stmt->execute()) {
        echo json_encode(['message' => 'error', 'error' => $stmt->error]);
    } else {
        echo json_encode(['message' => 'SUCCESSFUL']);
    }


    $stmt->close();
    $conn->close();
<?php
    include_once '../db/db_conn.php';

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];

        $stmt = $conn->prepare("SELECT * FROM tbl_regusers WHERE email = ?");
        if ($stmt === false) {
            echo json_encode(['status' => 'error', 'message' => 'Database prepare statement failed']);
            exit;
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Email found', 'showModal' => true]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Email not found']);
        }

        $stmt->close();
        $conn->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Email not provided']);
    }
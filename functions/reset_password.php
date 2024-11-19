<?php
    include_once '../db/db_conn.php';

    if (isset($_POST['email']) && isset($_POST['newpassword']) && !empty($_POST['email']) && !empty($_POST['newpassword'])) {
        $email = $_POST['email'];
        $newpassword = $_POST['newpassword'];

        $hashed_password = password_hash($newpassword, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("UPDATE tbl_regusers SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashed_password, $email);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Password has been changed successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update password.']);
        }

        $stmt->close();
        $conn->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
        exit;
    }
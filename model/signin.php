<?php
    include_once 'connectDb.php';

    $registrationSuccess = false;
    $emailExistsMessage = '';

    if(isset($_POST['login'])){
        $conn = connectDb();
        $name = $_POST['HoVaTen'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Kiểm tra định dạng email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<p style="color: red;">Email không hợp lệ.</p>';
            $registrationSuccess = false;
        } else {
            $checkEmailSql = "SELECT COUNT(*) FROM users WHERE email = :email";
            $checkEmailStmt = $conn->prepare($checkEmailSql);
            $checkEmailStmt->bindParam(':email', $email);
            $checkEmailStmt->execute();
            $emailExists = $checkEmailStmt->fetchColumn();

            if($emailExists > 0){
                $emailExistsMessage = '<p style="color: red;">Email đã tồn tại.</p>';
                $registrationSuccess = false;
            } else {
                $insertSql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
                $stmt = $conn->prepare($insertSql);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                
                if($stmt->execute()){
                    $registrationSuccess = true;
                } else {
                    $registrationSuccess = false;
                }
            }
        }
    }
?>

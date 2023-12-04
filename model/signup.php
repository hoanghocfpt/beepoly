<?php
include_once 'connectDb.php';

function loginUser($email, $password) {
    $conn = connectDb();

    // Sanitize input to prevent SQL injection
    $email = htmlspecialchars(strip_tags($email));
    $password = htmlspecialchars(strip_tags($password));

    // Query to check if the email and password match
    $loginSql = "SELECT * FROM users WHERE email = :email AND password = :password";
    $loginStmt = $conn->prepare($loginSql);
    $loginStmt->bindParam(':email', $email);
    $loginStmt->bindParam(':password', $password);
    $loginStmt->execute();

    // Fetch the user from the database
    $user = $loginStmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Login successful
        return array('success' => true, 'user' => $user);
    } else {
        // Login failed
        return array('success' => false, 'message' => 'Tài khoản hoặc mật khẩu không đúng.');
    }
}

// Check if the login form is submitted
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginResult = loginUser($email, $password);

    if ($loginResult['success']) {
        // Login successful, you can perform further actions here
        echo 'Đăng nhập thành công!';
    } else {
        // Login failed, display error message
        echo '<p id="loginerror" style="color: red;">' . $loginResult['message'] . '</p>';
    }
}
?>

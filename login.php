<?php
session_start();
include 'includes/db.php';

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['userid'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM students WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['student_id'] = $id;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid credentials.";
        }
    } else {
        $error = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/97ebdf5864.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Student Login</h2>
        <?php if ($error): ?>
            <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="userid" required>
                <label>Email</label>
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="form-group">
                <input type="password" name="password" required>
                <label>Password</label>
                <i class="fa-solid fa-lock"></i>
            </div>

            <p><input type="checkbox"> Remember Me <a href="#">Forgot Password?</a></p>
            <input id="btn" type="submit" value="Login">

            <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>

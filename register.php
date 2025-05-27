<?php
include 'includes/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $college = $_POST['college'];
    $roll = $_POST['roll'];
    $userid = $_POST['userid'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO students (full_name, email, mobile, college, roll, userid, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $full_name, $email, $mobile, $college, $roll, $userid, $password);


    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/97ebdf5864.js" crossorigin="anonymous"></script>


    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url('images/Library-Img.jpg') no-repeat center center;
    background-size: cover;
}


.container{
    width: 450px;
    height: 700px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: rgba(0,0,0,0.5);
    border-radius: 35px;
    border: 3px solid rgba(255,255,255,0.3);
    backdrop-filter: blur(10px);
    box-shadow: 0 0 30px rgba(0,0,0,0.5);
}

h2{
    color: #fff;
    font-size: 25px;
    text-transform: uppercase;
    padding: 25px ;
  
}

.form-group{
    position: relative;
    background-color: brown;
    width: 350px;
    margin: 17px;
    border-radius: 9px;
    font-size: 12px;
}

.form-group input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1.2em;
    color: #fff;
    padding: 0 30px 0 10px;
}

.form-group label{
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    font-size: 1.3em;
    color: #ffff;
    transition: 0.5s;
}

input:focus ~ label,
input:valid ~ label
{
    top: -8px;
}

.form-group i{
    position: absolute;
    top:50%;
    right: 20px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1.2em;
}

p{
    text-align: center;
    color: #fff;
    padding: 10px 0;
}

p>a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    
}

p a:hover{
    text-decoration: underline;
    font-style: italic;
}

#btn{
    width: 90%;
    height: 45px;
    border-right: 10px;
    border-radius: 80px;
    border: none;
    font-size: 1.5em;
    font-weight: 600;
    margin: 10px;
    cursor: pointer;
    transition: 0.5s;
}

#btn:hover{
    background: green;
    color:#fff;
}
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Register</h2>
        <form method="post" action="register.php">
            <div class="form-group">
                <input type="text" name="name" required>
                <label>Full Name</label>
                <i class="fa-solid fa-person"></i>
            </div>
            <div class="form-group">
                <input type="email" name="email" required>
                <label>Email ID</label>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="form-group">
                <input type="text" name="mobile" required>
                <label>Mobile No</label>
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="form-group">
                <input type="text" name="college" required>
                <label>College Name</label>
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div class="form-group">
                <input type="text" name="roll" required>
                <label>Roll Number</label>
                <i class="fa-solid fa-pen"></i>
            </div>
            <div class="form-group">
                <input type="text" name="userid" required>
                <label>User ID</label>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form-group">
                <input type="password" name="password" required>
                <label>Password</label>
                <i class="fa-solid fa-lock"></i>
            </div>
            <p><input type="checkbox"> Remember Me <a href="#">Reset Password</a></p>
            <input id="btn" type="submit" value="Submit">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>

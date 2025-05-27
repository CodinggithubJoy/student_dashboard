<?php
session_start();
// You can fetch user count, subjects, etc., from DB if needed.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 250px;
            background-color: #2e2e2e;
            color: white;
            padding: 20px 0;
        }

        .sidebar h3 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
            color: #ccc;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: block;
            padding: 15px 30px;
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .sidebar a:hover {
            background-color: #444;
        }

        .main-content {
            flex-grow: 1;
            padding: 30px;
        }

        .main-content h1 {
            font-size: 24px;
            margin-bottom: 25px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            border-radius: 10px;
            color: white;
            font-size: 18px;
        }

        .card i {
            font-size: 32px;
        }

        .card span {
            font-size: 26px;
            font-weight: bold;
            display: block;
        }

        .blue { background-color: #3498db; }
        .red { background-color: #e74c3c; }
        .orange { background-color: #f39c12; }
        .green { background-color: #27ae60; }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3>MAIN CATEGORY</h3>
        <a href="#"><i class="fa fa-dashboard"></i> Dashboard</a>
        <h3>APPEARANCE</h3>
        <a href="#"><i class="fa fa-users"></i> Student Classes</a>
        <a href="#"><i class="fa fa-book"></i> Subjects</a>
        <a href="#"><i class="fa fa-user-graduate"></i> Students</a>
        <a href="#"><i class="fa fa-chart-line"></i> Result</a>
        <a href="#"><i class="fa fa-bullhorn"></i> Notices</a>
        <a href="#"><i class="fa fa-lock"></i> Admin Change Password</a>
      <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>

    </div>

    <div class="main-content">
        <h1>Dashboard</h1>
        <div class="cards">
            <div class="card blue">
                <div>
                    <div>Regd Users</div>
                    <span>6</span>
                </div>
                <i class="fa fa-users"></i>
            </div>
            <div class="card red">
                <div>
                    <div>Subjects Listed</div>
                    <span>7</span>
                </div>
                <i class="fa fa-ticket-alt"></i>
            </div>
            <div class="card orange">
                <div>
                    <div>Total classes listed</div>
                    <span>8</span>
                </div>
                <i class="fa fa-university"></i>
            </div>
            <div class="card green">
                <div>
                    <div>Results Declared</div>
                    <span>5</span>
                </div>
                <i class="fa fa-file-alt"></i>
            </div>
        </div>
    </div>
    <!-- <script>
        const myTimeout = setTimeout(myGreeting, 1000);

function myGreeting() {
  alert("Your exam will start at 28.05.2025!!");
}

function myStopFunction() {
  clearTimeout(myTimeout);
}
    </script> -->
</body>
</html>

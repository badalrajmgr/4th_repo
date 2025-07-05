<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "registered_user");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errorMessage = "";

// Handle login request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['uname']);
    $password = trim($_POST['psw']);

    if (empty($username) || empty($password)) {
        $errorMessage = "All fields are required.";
    } else {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    }
        if ($result && $result->num_rows === 1) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {

                $_SESSION['username'] = $row['username'];
                
                header("Location: ./index.php");
                exit();
            } else {
                $errorMessage = "Invalid password.";
            }
        } else {
            $errorMessage = "No account found with that username.";
        }

        $stmt->close();
    }


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LoginPage / CiaoLaguno</title>
    <link rel="stylesheet" href="../css/login.css"/>
</head>
<body>

<form action="" method="POST">
    <div class="form-parent-container">    
        <div class="form-child-container">
            <div class="LOGIN"> LOGIN </div>

            <div class="userPass">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <div class="login-btn">
                    <button type="submit">LOGIN</button>
                </div>
                <hr>

                <div>Don't have an account? <a id="register" href="register.php">Register</a></div>
            </div>

            <div style="padding-top:20px;">
                <div style="float:left;">
                    <input type="checkbox" checked="checked" name="remember" id="checkbox">
                    <label for="checkbox">Remember me</label>
                </div>
                <div style="float:right">
                    <a href="#" id="forgot-password">Forgot Password?</a>
                </div>
            </div>

            <!-- Display error message -->
            <?php if (!empty($errorMessage)): ?>
                <div style="color:red; margin-top:20px;">
                    <?php echo htmlspecialchars($errorMessage); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</form>

<script src="../index.js"></script>
</body>
</html>

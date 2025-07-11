<?php
session_start();

// Database connection
$conn = new mysqli("sql107.infinityfree.com","if0_39404242","yKfHz8n9jz1Y7","if0_39404242_registered_user");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["uname"]);
    $password = trim($_POST["psw"]);

    if (empty($username) || empty($password)) {
        $errorMessage = "Both fields are required.";
    } else {
        // Check if username already exists
        $checkStmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $checkStmt->bind_param("s", $username);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $errorMessage = "Username already taken.";
        } else {

            //
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            //

            $insertStmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $insertStmt->bind_param("ss", $username, $hashedPassword);
            
            if ($insertStmt->execute()) {
                $successMessage = "Registration successful! You can now <a href='./loginPage.php'>Login</a>";
            } else {
                $errorMessage = "Registration failed. Please try again.";
            }

            $insertStmt->close();
        }

        $checkStmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register / CiaoLaguno</title>
    <link rel="stylesheet" href="../css/register.css"/>
</head>
<body>

<form method="POST" action="">
    <div class="form-parent-container">	
        <div class="form-child-container">
            <div class="SIGNUP"> SIGN UP </div>

            <div class="userPass">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <div class="signup-btn">
                    <button type="submit">SIGN UP</button>
                </div>
                <hr>
            </div>

            <div style="padding-top:20px;">
                <input type="checkbox" checked="checked" name="remember" id="checkbox">
                <label for="checkbox">Remember me</label>
            </div>

            <!-- Show messages -->
            <?php if (!empty($errorMessage)): ?>
                <div style="color: red; margin-top: 20px;"><?php echo $errorMessage; ?></div>
            <?php endif; ?>

            <?php if (!empty($successMessage)): ?>
                <div style="color: green; margin-top: 20px;"><?php echo $successMessage; ?></div>
            <?php endif; ?>

        </div>
    </div>
</form>

<script src="../index.js"></script>
</body>
</html>

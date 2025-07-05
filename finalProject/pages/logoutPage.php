<?php
session_start();

// Destroy all session data
$_SESSION = [];
session_destroy();

// Optional: Remove session cookie as well (recommended)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect user back to login page
header("Location: ./loginPage.php");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>logoutPage</title>
</head>
<body>
  
</body>
</html>
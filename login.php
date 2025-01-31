<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "root"; // replace with your MySQL username
    $password = ""; // replace with your MySQL password
    $dbname = "loginDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user input from form
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and execute SQL query
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists in the database
    if ($result->num_rows > 0) {
        // Set session variables
        $_SESSION['loggedIn'] = true;
        $_SESSION['username'] = $user;

        // Redirect to home page or wherever you want
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/stylesheets/login.css">
</head>

<body>
    <div class="box">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="wrapp">
                <h1>Log In</h1>
                <div class="inputbox">
                    <input type="text" name="username" placeholder="UserName" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember Me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">LogIn</button>
                <div class="register">
                    <p style="color: rgb(255, 255, 255);">Don't have an account?
                        <a href="#">Register Here</a>
                    </p>
                </div>
                <?php if (isset($error)) { ?>
                    <div class="error" style="color: red;">
                        <p><?php echo $error; ?></p>
                    </div>
                <?php } ?>
            </div>
        </form>
    </div>
</body>

</html>
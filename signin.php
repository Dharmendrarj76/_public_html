<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="path/to/slick.css"> <!-- Include Slick Carousel CSS -->
    <link rel="stylesheet" href="path/to/slick-theme.css"> <!-- Include Slick Carousel Theme CSS -->
    <link rel="stylesheet" href="path/to/magnific-popup.css">
    <link rel="stylesheet" href="./src/main.css">
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="path/to/magnific-popup.css">

     <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('https://raw.githubusercontent.com/Hashtechieofficial/Form-/main/background6.jpg') no-repeat;
    background-position: center;
    background-size: cover;
    margin: 0;
}

h2 {
    font-size: 2em;
    color: #fff;
    text-align: center;
}

form {
    width: 400px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    flex-direction: column;
    align-items: left;
    padding: 20px;
}

label {
    color: #fff;
    font-size: 1em;
    margin: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

label ion-icon {
    margin-right: 10px; /* Adjust the margin as needed */
}

input {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px 0;
    border: none;
    border-bottom: 2px solid #fff;
    background: transparent;
    color: #fff;
    outline: none;
}

ion-icon {
    color: #fff;
    font-size: 1.2em;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 40px;
    background: #fff;
    color: #000;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    margin-top: 15px;
    transition: background 0.3s;
}

button:hover {
    background: #eee;
}
    </style>

	 <title>Login</title>
	 </head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
         <!-- Display Incorrect password message -->
        <?php
        if (isset($userNotFound) && $userNotFound) {
            echo '<p style="color: red;">Incorrect password</p>';
        }
        ?>
         <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>
 
	 
<?php
$servername = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Assuming you have a users table with columns 'username', 'password_hash'
    $sql = "SELECT * FROM signup WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // User found, verify the password
            $user = $result->fetch_assoc();

            // Verify password using password_hash
            if (password_verify($password, $user['password_hash'])) {
                // Password is correct, redirect to streams.php
               // Assuming $username is the username you want to pass
header("Location: http://www.easyflex.site/streams.php?username=" . urlencode($username));
exit();
            } else {
                // Incorrect password
                echo "Incorrect password";
            }
        } else {
            // User not found
            echo "User not found";
        }

        $stmt->close();
    } else {
        echo 'Error preparing statement: ' . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
	 </body>
</html>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
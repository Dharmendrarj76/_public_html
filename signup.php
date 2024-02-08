<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <title>Signup</title>
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
</head>
<body>
   

    <form action="" method="post" enctype="multipart/form-data">
        <label for="username">
            Username
            <ion-icon name="person-outline"></ion-icon>
        </label>
        <input type="text" name="username" required>

        <label for="email">
            Email
            <ion-icon name="mail-outline"></ion-icon>
        </label>
        <input type="email" name="email" required>

        <label for="password">
            Password
            <ion-icon name="lock-closed-outline"></ion-icon>
        </label>
        <input type="password" name="password" required>

        <label for="profilePicture">
            Profile Picture
            <ion-icon name="image-outline"></ion-icon>
        </label>
        <input type="file" name="profilePicture" accept="image/jpeg, image/png" required>

        <button type="submit" name="signup">Sign Up</button>
    </form>
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
    // Retrieve and sanitize form data
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Handle the profile picture
    if (isset($_FILES['profilePicture']) && $_FILES['profilePicture']['error'] === UPLOAD_ERR_OK) {
        $imagePath = $_FILES['profilePicture']['tmp_name'];

        // Set the target directory for storing user profile pictures
        $targetDirectory = 'userpictures/';

        // Create the target directory if it doesn't exist
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }

        // Generate a unique filename for the profile picture
        $targetFileName = $targetDirectory . uniqid('profile_pic_') . '.jpg';

        // Move the uploaded file to the target directory
        move_uploaded_file($imagePath, $targetFileName);

        // Store the file path in the database
        $imageData = $targetFileName;
    } else {
        // Set a default image path if no profile picture is provided
        $defaultImagePath = 'userpictures/default.jpg';
        $imageData = $defaultImagePath;
    }

    // Insert user data into the database
    $stmt = $conn->prepare("INSERT INTO signup (username, email, password_hash, profile_picture) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $password, $imageData);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Display a success message
        echo "User signed up successfully! Redirecting to signin.php...";

        // Redirect to signin.php after a delay
        header("refresh:3;url=signin.php");
        exit();
    } else {
        echo "Error signing up. Please try again.";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="shortcut icon" href="/assets/favicon.ico">
  <link rel="stylesheet" href="./src/main.css">
  <script src="./src/main.js"></script>
      <style>    
      body {
    background-image: url('https://www.easyflex.site/back.png');
    background-repeat: repeat;
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
     overflow: hidden; /* Hide body overflow to prevent double scrollbars */
}
      
      
      .menu-container {
            background-color: transparent;
            
            justify-content: flex-end; /* Align menu items to the right */
            align-items: center; /* Center menu items vertically */
            padding: 10px;
        }

        .menu-item {
            margin-left: 20px;
            color: #E51058;
            text-decoration: none;
            font-size: 12px;
            transition: color 0.3s;
        }

        .menu-item i {
            margin-right: 5px;
        }

        
       @import url(https://fonts.googleapis.com/css?family=Open+Sans);


.search-box {
    position: fixed;
    top: 50px; /* Adjust the top position as needed */
    right: 10px; /* Adjust the right position as needed */
    width: 25%;
}

.btn-search {
    width: 60px;
    height: 20px;
    border-style: none;
    font-size: 12px;
    font-weight: bold;
    outline: none;
    cursor: pointer;
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    color: #ffffff;
    background-color: #E51058;
    border-radius: 15px;
    pointer-events: auto;
    z-index: 1; /* Ensure the button is above other elements */
}

.btn-search::before {
    content: 'Search';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    z-index: 2; /* Ensure the text is above other elements */
}

.btn-search i {
    visibility: hidden;
}


.input-search {
    height: 10px;
    width: 82%;
    border-style: none;
    padding: 10px;
    font-size: 14px;
    letter-spacing: 2px;
    outline: none;
    border-bottom: 1px solid #000;
    transition: border-bottom 0.5s ease-in-out;
    background-color: transparent;
    padding-right: 40px;
    color: #E51058;
    position: relative;
}

.input-search::placeholder {
    color: #E51058;
    font-size: 18px;
    letter-spacing: 2px;
    font-weight: 100;
}

.input-search::after {
    content: '\f002'; /* Font Awesome search icon */
    font-family: 'Font Awesome 5 Free';
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    color: rgba(0, 0, 0, 0.6); /* Light black color */
    font-size: 18px;
}

/* Optional: Style for the main content when sidebar is open */
.content-with-sidebar {
  margin-left: 250px;
}

.box1 {
    width: 390px;
    height: 100%;
    flex-shrink: 0; /* Prevent box1 from shrinking */
     position: absolute;
    top: 0;
    left: 0;
    
}

.box1 {
    position: relative;
}



           .box2 {
            flex-grow: 1;
            height: 100%;
            overflow-y: auto; /* Enable vertical scrolling for box2 */
            background-color: #fffff;
            padding: 20px; /* Adjust padding as needed */
        }
        .container {
  position: relative;
  font-family: Arial;
}
.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: transprent;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}


  .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #000000;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            color: white;
        }

        .sidebar.open {
            width: 350px; /* Adjust the width as needed */
        }

        .close-btn {
            position: absolute;
            top: 0;
            right: 10px;
            font-size: 36px;
            margin-left: 50px;
             color: #E51058;
            cursor: pointer;
        }

        /* Main content styles */
        .main-content {
            margin-left: 0;
            transition: margin-left 0.5s;
        }

        .main-content.open {
            margin-left: 350px; /* Adjust the width to match the sidebar width */
        }

        /* Button to open the sidebar */
        .open-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 30px;
            cursor: pointer;
            z-index: 1;
        }
.drop-zone {
    max-width: 100px;
    height: 130px;
    display: flex;
    flex-direction: column;
    align-items: center; 
    justify-content: center; 
    text-align: center;
    font-family: "Quicksand", sans-serif;
    font-weight: 500;
    font-size: 15px;
    cursor: pointer;
    color: white;
    border: 1px solid white; 
    border-radius: 10px;
    position: relative; 
       margin-left: 70px;
}


.drop-zone::before {
    content: "+";
    font-size: 15px;
    color: pink; 
    display: block; 
}


.drop-zone p {
    margin: 10px 0 0;
}

.drop-zone--over {
    border-style: solid;
}

.drop-zone__input {
    display: none;
}

.drop-zone__thumb {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    overflow: hidden;
    background-color: #cccccc;
    background-size: cover;
    position: relative;
}

.drop-zone__thumb::after {
    content: attr(data-label);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 5px 0;
    color: #ffffff;
    background: rgba(0, 0, 0, 0.75);
    font-size: 15px;
    text-align: center;
}
.input {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #CCC;
    color: #ffffff;
    box-sizing: border-box;
    font-family: 'Arvo';
    font-size: 20px;
    height: 50px;
    margin: 0;
    padding: 10px 0px;
    width: 250px;
    position: relative;
    outline: none;
}

.input::placeholder {
    color: #ffffff;
}

.input:focus::placeholder {
    color: #ffffff;
}


.input:focus + .underline {
    transform: scaleX(1);
    background-color: #ffffff;
}

.underline {
    background-color: transparent;
    display: inline-block;
    height: 2px;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease-in-out;
}


.create-button,
.cancel-button {
    background-color: transparent;
    color: #E51058;
    border: none;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px; /* Adjust the margin as needed */
    padding: 5px 10px;
    transition: background-color 0.3s, color 0.3s;
}

.create-button:hover,
.cancel-button:hover {
    background-color: #E51058;
    color: #ffffff;
}



       .menu-item-input {
            width: 50%;
            border: none; /* Remove default border */
            border-bottom: 1px solid #C2C1C1; /* Add underline with desired color */
            background-color: #D5D5D5; /* Transparent background */
            outline: none; /* Remove the outline when focused */
            border-radius: 15px;
            
        }

        /* Add styles for the input field when it's focused */
        .menu-item-input:focus {
            background-color: #D5D5D5;
        }
        
        .menu-item-button {
            width: 80px; /* Adjust the width as needed */
            height: 25px;
            border: none; /* Remove default border */
            background-color: #ED1653; /* Set background color */
            text-align: center;
            color: white; /* Set text color to white */
            border-radius: 10px; /* Set outer border radius */
            cursor: pointer;
            font-size: 14px; /* Adjust the font size as needed */
            margin: 0 5px; /* Add margin to separate the buttons */
        }
        
        
         .img {
      width: 70px;
      height: 80px;
      border:2px solid #fff;
      background: url(img\thumbnail.jpg) no-repeat;
      box-shadow: 10px 10px 5px #ccc;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      -khtml-box-shadow: 10px 10px 5px #ccc;
    }
    
   .tags-input-wrapper {
            border: 1px solid #ccc;
            padding: 5px;
            display: inline-block;
        }
        .tag {
            background-color: #f2f2f2;
            margin: 5px;
            padding: 3px;
            border-radius: 3px;
            display: inline-block;
        }
        
         

        #label {
            display: block;
            font-size: 10px;
            margin-bottom: 8px;
            color: #E51058;
        }

        #input[type="file"] {
            display: none;
        }

        #input[type="submit."] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 10px;
        }

        #input[type="submit."]:hover {
            background-color: #45a049;
        }
       
       #create-group-form {
    display: none;
    
} 
#group-name {
        background-color: #ffffff; /* Set the background color to white */
    }
      .toggle-select-btn, .delete-btn {
        margin-bottom: 10px;
        cursor: pointer;
        padding: 8px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
    }

    .toggle-checkbox {
        display: none;
    }
    .delete-btn {
    background-color: transparent;
    color: #E51058;
    border: none;
    cursor: pointer;
    font-size: 16px;
    margin-left: 20px; /* Adjust margin as needed */
    transition: color 0.3s;
}
.toggle-select-btn {
    margin-bottom: 10px;
    cursor: pointer;
    padding: 8px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 5px;
}

.toggle-checkbox {
    display: none;
}

.custom-button {
    color: #E51058;
    text-decoration: none;
    font-size: 12px;
    transition: color 0.3s;
    background-color: transparent;
    justify-content: flex-end;
    align-items: center;
    padding: 10px;
    border: 1px solid #E51058;
    border-radius: 5px;
    cursor: pointer;
}

.custom-button:hover {
    color: #FFF;
    background-color: #E51058;
}

.custom-button[style*="display: none;"] {
    display: none
}
   .submitRename {
        display: inline-block;
        padding: 10px 15px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }

    .submitRename:hover {
        background-color: #45a049;
    }
    .progress-bar {
            width: 0;
            height: 20px;
            background-color: #E51058;
            color: white;
            text-align: center;
            line-height: 20px;
            border-radius: 5px;
            transition: width 0.3s ease;
        }
 </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
    <span class="close-btn" onclick="closeSidebar()">&times;</span>
    <!-- Add your sidebar content here -->
    <br><br><br><br>
      <h4 style="color: #ffffff;">creating the asset</h4>
      
    <br>
<?php
// Replace with your actual database credentials
$servername = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Check if the 'stream_id' is provided in the form data
if (isset($_GET['stream_id'])) {
    $stream_id = $_GET['stream_id'];
} else {
    echo "Stream ID not provided.";
    exit; // You can add additional error handling as needed
}

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    for ($i = 0; $i < count($_FILES['pdfFile']['name']); $i++) {
        $pdfFileName = $_FILES['pdfFile']['name'][$i];
        $pdfTmpName = $_FILES['pdfFile']['tmp_name'][$i];
        $pdfSize = $_FILES['pdfFile']['size'][$i];

        $pdfFileType = strtolower(pathinfo($pdfFileName, PATHINFO_EXTENSION));
        if ($pdfFileType != "pdf") {
            echo "Only PDF files are allowed.";
            exit();
        }
        
     // Define where you want to store the PDF files on your server
        $uploadDirectory = "uploads/";
        $pdfPath = $uploadDirectory . $pdfFileName;

        if (move_uploaded_file($pdfTmpName, $pdfPath)) {
            // Generate a unique thumbnail name based on asset name
            $thumbnailName = pathinfo($pdfFileName, PATHINFO_FILENAME) . "_thumbnail.png";

            $imagick = new Imagick();
            $imagick->readImage($pdfPath . '[0]'); // Read the first page of the PDF
            $imagick->setImageFormat('png'); // Set the output format to PNG
            $imagick->thumbnailImage(200, 200, true, true); // Resize the thumbnail if needed
            $imagick->writeImage($uploadDirectory . $thumbnailName); // Save the thumbnail to the specified folder

            // Fetch the asset name from the form
            $assetName = isset($_POST['assetName']) && !empty($_POST['assetName']) ? $_POST['assetName'] : pathinfo($pdfFileName, PATHINFO_FILENAME);

            // Insert PDF, unique thumbnail paths, and PDF path into the database
            $pdfPathForDatabase = $pdfPath; // Store the PDF path
            $sql = "INSERT INTO assets (asset_name, thumbnail_path, pdf_path, upload_date, stream_id) VALUES (?, ?, ?, NOW(), ?)";
            $stmt = $conn->prepare($sql);

            // Create separate variables for the thumbnail and PDF paths
            $thumbnailFullPath = $uploadDirectory . $thumbnailName;

            // Bind the parameters including the asset name
            $stmt->bind_param("sssi", $assetName, $thumbnailFullPath, $pdfPathForDatabase, $stream_id);

            // Execute the statement
            if ($stmt->execute()) {
                // Group inserted successfully
                echo "Asset uploded successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error: Unable to move uploaded file.";
        }
    }
}

// Function to fetch the stream_id (replace this with your logic)
function getCurrentStream() {
    // Replace this with your logic to determine the current stream
    // For example, you can fetch it from the database, session, or any other source
    // Return the stream_id as needed
}
?>

<form method="post" enctype="multipart/form-data" id="uploadForm">
            <br>
            <div class="drop-zone" onclick="document.getElementById('pdfFile').click()">
                <span class="drop-zone__prompt" id="file-name-display">Drop files here or click to upload</span>
        <input type="file" name="pdfFile[]" id="pdfFile" class="drop-zone__input" accept=".pdf" onchange="displayFileName()" multiple required>
    </div>
            <br><br>
            <div class="form-group">
                <label for="department_name" style="color: pink;"></label>
                <input class="input" placeholder="Enter asset name Here" type="text" name="assetName">
            </div>
            <br><br>
             <div class="form-group" id="progressContainer" style="display: none;">
        <div id="progressBar" class="progress-bar"></div>
        <div id="progressText" class="progress-text"></div>
    </div>
            <br>
            <div class="form-group">
                <button class="create-button" type="submit" name="submit" onclick="uploadFiles()">Submit</button>
                <button class="cancel-button" onclick="cancelAndCloseSidebar()">Cancel</button>
            </div>
            <br>
            <div class="line"></div>
        </form>
    </div>

<div class="main-content" id="main-content">
   
   
</div>
<script>
function displayFileName() {
    // Display the selected file names
    const input = document.getElementById('pdfFile');
    const prompt = document.getElementById('file-name-display');
    prompt.textContent = input.files.length > 0 ? input.files.length + ' files selected' : 'Drop files here or click to upload';
}

function uploadFiles() {
    const form = document.getElementById('uploadForm');
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');
    const progressContainer = document.getElementById('progressContainer');

    const xhr = new XMLHttpRequest();
    const formData = new FormData(form);

    xhr.open('POST', form.action, true);

    xhr.upload.onprogress = function (event) {
        if (event.lengthComputable) {
            const percent = (event.loaded / event.total) * 100;
            progressBar.style.width = percent + '%';
            progressText.textContent = 'Uploading: ' + percent.toFixed(2) + '%';
        }
    };

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Successful upload
                progressText.textContent = 'Upload complete!';
            } else {
                // Upload failed, handle error
                progressText.textContent = 'Upload failed. Retry or check the console for details.';
                console.error(xhr.responseText);
            }
        }
    };

    xhr.send(formData);
    progressContainer.style.display = 'block'; // Show the progress bar
}
    </script>

<style>
    .image-container {
        position: relative;
        display: inline-block;
    }

    .stream-image {
        height: 632px;
        width: 400px;
    }

   .stream-name {
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 0;
    text-decoration: none;
    border-radius: 15px;
    background-color: rgba(255, 255, 255, 0.2); /* Adjust the alpha value for background transparency */
    border: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(1px); /* Adjust the blur value for the glass effect */
    color: rgba(255, 255, 255, 0.8);
    font-size: 30px;
    letter-spacing: 2px;
    cursor: pointer;
    text-transform: uppercase;
    box-shadow: 0 4px 6px rgba(255, 255, 255, 0.1); /* Add a subtle box shadow for a light effect */
}
    .rename-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .rename-input {
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #ED1653;
        margin-bottom: 10px;
    }

    .submit-button {
        padding: 10px;
        background-color: #ED1653;
        color: #ffffff;
        border: none;
        cursor: pointer;
        border-radius: 10px;
    }
    
.top-left-button {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 10px;
    color: #B8B7B7; 
    border: none;
    cursor: pointer;
    border-radius: 5px;
    backdrop-filter: blur(1px) brightness(1.2); /* Adjust blur and brightness for a light glass effect */
    background-color: rgba(255, 255, 255, 0.2); /* Adjust the alpha value for background transparency */
}

   .top-right-buttons {
    position: absolute;
    top: 20px;
    right: 20px;
    display: flex;
    gap: 10px;
    border-radius: 5px;
}

.top-right-button {
    padding: 10px;
    color: #B8B7B7; /* Change to a dark color for better visibility */
    border: none;
    cursor: pointer;
    border-radius: 5px;
    backdrop-filter: blur(8px) brightness(1.2); /* Adjust blur and brightness for a light glass effect */
    background-color: rgba(255, 255, 255, 0.2); /* Adjust the alpha value for background transparency */
}

/* Add these styles to your existing stylesheet or create a new one */
#progressContainer {
    position: relative;
    width: 100%;
    height: 20px;
    background-color: #f0f0f0; /* Background color of the progress container */
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 15px;
}

#progressBar {
    height: 100%;
    width: 0;
    background-color: #4caf50; /* Color of the progress bar */
    border-radius: 5px;
    transition: width 0.3s ease-in-out;
}

#progressText {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #000000; /* Color of the progress text */
}
</style>
<?php
// Your database connection code should be here once, not duplicated.
$servername = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get stream_id from the URL
$stream_id = $_GET['stream_id'];

// Define a variable to store the update message
$updateMessage = '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if delete button is clicked
    if (isset($_POST['delete_stream'])) {
        // Delete the stream from the database
        $delete_sql = "DELETE FROM streams WHERE stream_id = ?";
        $delete_stmt = $conn->prepare($delete_sql);

        if ($delete_stmt) {
            $delete_stmt->bind_param("i", $stream_id);
            if ($delete_stmt->execute()) {
                // Successfully deleted the stream
                $delete_stmt->close(); // Close the delete statement
                $conn->close(); // Close the connection
                echo '<script>window.location.href = "/streams.php";</script>';
                exit;
            } else {
                $updateMessage = "Error deleting stream: " . $delete_stmt->error;
            }
        } else {
            $updateMessage = "Error: " . $conn->error;
        }
    }

    // Handle renaming here if needed
    if (isset($_POST['new_stream_name'])) {
        $new_stream_name = $_POST['new_stream_name'];

        // Update the stream name in the database
        $update_sql = "UPDATE streams SET stream_name = ? WHERE stream_id = ?";
        $update_stmt = $conn->prepare($update_sql);

        if ($update_stmt) {
            $update_stmt->bind_param("si", $new_stream_name, $stream_id);
            if ($update_stmt->execute()) {
                // Successfully updated the stream name
                $updateMessage = 'Stream name updated successfully!';
            } else {
                $updateMessage = "Error updating stream name: " . $update_stmt->error;
            }

            $update_stmt->close();
        } else {
            $updateMessage = "Error: " . $conn->error;
        }
    }
}

// Retrieve the corresponding image_path from the database
$sql = "SELECT image_path, stream_name FROM streams WHERE stream_id = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("i", $stream_id);
    if ($stmt->execute()) {
        $stmt->bind_result($image_path, $stream_name);

        // Check if a row was found
        if ($stmt->fetch()) {
            // Display the image, stream name, and buttons
            echo '<div class="image-container">';
            echo '  <img src="' . $image_path . '" alt="Stream Image" class="stream-image">';
            echo '  <div class="stream-name">' . $stream_name . '</div>';
            
            // Display the update message if available
            if (!empty($updateMessage)) {
                echo '<div class="update-message" id="updateMessage">' . $updateMessage . '</div>';
                echo '<script>setTimeout(function() { document.getElementById("updateMessage").style.display = "none"; }, 3000);</script>';
            }

            echo '  <button class="top-left-button" onclick="goBack()">Back</button>';
            echo '  <div class="top-right-buttons">';
            echo '    <button class="top-right-button" onclick="toggleRenameForm()">Rename</button>';
            echo '    <form method="post" onsubmit="return confirm(\'Are you sure you want to delete this stream?\');">';
            echo '      <input type="hidden" name="delete_stream" value="1">';
            echo '      <button type="submit" class="top-right-button">Delete Stream</button>';
            echo '    </form>';
            echo '  </div>';

            // Display the form initially as hidden
            echo '  <div id="rename-form" class="rename-form" style="display:none;">';
            echo '    <form method="post">';
            echo '      <input type="text" name="new_stream_name" class="rename-input" placeholder="Enter new stream name" required>';
            echo '      <button type="submit" class="submit-button">Submit</button>';
            echo '    </form>';
            echo '  </div>';

            echo '</div>';
        } else {
            echo "Stream not found.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<script>
    console.log("JavaScript code loaded");

    function toggleRenameForm() {
        console.log("Toggle Rename Form");
        // Toggle the display property of the rename form
        var renameForm = document.getElementById('rename-form');
        renameForm.style.display = (renameForm.style.display === 'none' || renameForm.style.display === '') ? 'block' : 'none';
    }
</script>
 <div class="box2">
<div class="search-box">
    <input type="text" class="input-search" placeholder="Search..." oninput="updateSearchQuery()">
    <button class="btn-search" onclick="updateSearchResults()">
        <i class="fas fa-search"></i>
    </button>
    <div id="search-results"></div>
</div>
<br>
<br>

<script>
function updateSearchResults() {
    var searchQuery = document.querySelector('.input-search').value;

    // Detect if the search query includes '@group' or '@asset'
    var searchType = 'all'; // Default to searching both groups and assets
    if (searchQuery.toLowerCase().includes('@group')) {
        searchType = 'group';
        // Remove '@group' from the search query
        searchQuery = searchQuery.replace(/@group/g, '').trim();
    } else if (searchQuery.toLowerCase().includes('@asset')) {
        searchType = 'asset';
        // Remove '@asset' from the search query
        searchQuery = searchQuery.replace(/@asset/g, '').trim();
    }

    // Get the dynamic stream ID from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var streamID = urlParams.get('stream_id');

    // Build the URL for the new page (details_search.php) with dynamic stream ID
    var newPageURL = 'details_search.php?type=' + searchType + '&query=' + encodeURIComponent(searchQuery) + '&stream_id=' + streamID;

    // Redirect to the new page
    window.location.href = newPageURL;
}
</script>
<script>
// Function to open the sidebar
function openSidebar() {
    document.getElementById("sidebar").style.width = "350px"; // Adjust the width as needed
}

// Function to close the sidebar
function closeSidebar() {
    document.getElementById("sidebar").style.width = "0";
}

// Function to toggle the sidebar
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    if (sidebar.style.width === "0px" || sidebar.style.width === "") {
        openSidebar();
    } else {
        closeSidebar();
    }
}
</script>
  
      <div class="menu-container">
             <a href="#" class="menu-item" id="add-group-button" onclick="showInputField()"><i class="fas fa-users"></i> ADD GROUP</a>
            <a href="#" class="menu-item" id="addAssetButton" onclick="openSidebar()"><i class="fas fa-plus"></i> ADD ASSET</a>
          <a href="#" class="menu-item" id="edit-rename-button" onclick="showRenameFields()"><i class="fas fa-pencil-alt"></i> RENAME</a>
            <a href="#" class="menu-item" id="toggleSelect"><i class="fas fa-trash"></i> DELETE</a>
            <a href="#" class="menu-item"><i class="fas fa-copy"></i> COPY</a>
            <a href="#" class="menu-item"><i class="fas fa-arrows-alt"></i> MOVE</a>
            <a href="#" class="menu-item"><i class="fas fa-cogs"></i> MANAGE SOURCE</a>
 <form id="create-group-form" method="post" action="">
    <input type="hidden" name="stream_id" value="<?php echo $_GET['stream_id']; ?>">
    <input type="text" name="group" id="group-name" class="menu-item-input" style="width: 50%;" placeholder="Group Name" required>
  <button type="submit" class="menu-item-button" name="create">Create</button>
    <button type="button" onclick="cancelGroup()" class="menu-item-button">Cancel</button>
</form>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {
    // Replace with your actual database credentials
    $servername = 'localhost';
    $username = 'u785001360_root';
    $password = 'Easyflex@12345';
    $dbname = 'u785001360_easyflex';

    // Check if the 'stream_id' is provided in the form data
    if (isset($_GET['stream_id'])) {
        $stream_id = $_GET['stream_id'];
    } else {
        echo "Stream ID not provided.";
        exit; // You can add additional error handling as needed
    }

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the group name input
    $group_name = mysqli_real_escape_string($conn, $_POST["group"]);

    // Use a prepared statement to insert the new group
    $sql = "INSERT INTO Groups (stream_id, Group_Name) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("is", $stream_id, $group_name);

        if ($stmt->execute()) {
            // Group inserted successfully
            echo "Group inserted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
<?php
// Replace with your actual database credentials
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if perform_action button is clicked
    if (isset($_POST['perform_action'])) {
        // Check if selected groups data is present
        if (isset($_POST['selected_groups']) && !empty($_POST['selected_groups'])) {
            // Loop through each selected group
            foreach ($_POST['selected_groups'] as $groupID) {
                // Check if new group name is set and not empty
                if (isset($_POST['group_name'][$groupID]) && !empty(trim($_POST['group_name'][$groupID]))) {
                    $newGroupName = trim($_POST['group_name'][$groupID]);
                    // Update group name in database
                    $updateGroupQuery = "UPDATE Groups SET Group_Name = '$newGroupName' WHERE Group_ID = $groupID";
                    if ($conn->query($updateGroupQuery) === TRUE) {
                        echo "Group name updated successfully!";
                    } else {
                        echo "Error updating group name: " . $conn->error;
                    }
                }
            }
        }
        // Check if selected assets data is present
        if (isset($_POST['selected_assets']) && !empty($_POST['selected_assets'])) {
            // Loop through each selected asset
            foreach ($_POST['selected_assets'] as $assetID) {
                // Check if new asset name is set and not empty
                if (isset($_POST['asset_name'][$assetID]) && !empty(trim($_POST['asset_name'][$assetID]))) {
                    $newAssetName = trim($_POST['asset_name'][$assetID]);
                    // Update asset name in database
                    $updateAssetQuery = "UPDATE assets SET asset_name = '$newAssetName' WHERE asset_id = $assetID";
                    if ($conn->query($updateAssetQuery) === TRUE) {
                        echo "Asset name updated successfully!";
                    } else {
                        echo "Error updating asset name: " . $conn->error;
                    }
                }
            }
        }
    }
}

// Close the database connection
$conn->close();
?>

<form id="selectForm" method="post" action="delete_handler.php">
    
    <table id="asset-table" class="table table-striped">
        <thead>
        <tr>
            <th>File Name</th>
            <th>Details</th>
            <th>Views</th>
            <th>Shares</th>
            <th>Downloads</th>
            <th>Time Spent</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Replace with your actual database credentials
        $servername = 'localhost';
        $username = 'u785001360_root';
        $password = 'Easyflex@12345';
        $dbname = 'u785001360_easyflex';

        // Get the stream ID from the URL
        if (isset($_GET['stream_id'])) {
            $streamID = $_GET['stream_id'];
        } else {
            echo "Stream ID not provided.";
            exit;
        }

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve data from the "Groups" table for the specified stream
        $sqlGroups = "SELECT Group_ID, Group_Name FROM Groups WHERE stream_id = $streamID AND Parent_Group_ID IS NULL"; // Filter for main groups
        $resultGroups = $conn->query($sqlGroups);

      // Retrieve data from the "assets" table for the specified stream
$sqlAssets = "SELECT asset_id, asset_name, thumbnail_path, upload_date, stream_id, group_id FROM assets WHERE stream_id = $streamID AND (group_id IS NULL OR group_id = 0)";
$resultAssets = $conn->query($sqlAssets);
        
        // Output main groups data
        echo "<h2></h2>";
        if ($resultGroups->num_rows > 0) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th></th><th></th></tr></thead>";
            echo "<tbody>";
                     while ($rowGroups = $resultGroups->fetch_assoc()) {
                    $groupName = $rowGroups["Group_Name"];
                    $groupID = $rowGroups["Group_ID"];

                    echo "<tr>";
                    echo "<td>";
                    echo '<a href="group_details.php?stream_id=' . $streamID . '&group_id=' . $groupID . '">';
                    echo '<img src="https://www.easyflex.site/thumbnail.jpg" width="60" height="70" style="border-radius: 10px; margin-right: 15px;" >';
                    echo "<span class='group-name' data-group-id='$groupID'>$groupName</span>";
                    echo "<input type='text' class='group-name-input' data-group-id='$groupID' style='display:none;' />";
                    echo '</a>';
                    echo "</td>";
                    echo "<td><input type='checkbox' class='group-checkbox toggle-checkbox' name='selected_groups[]' value='$groupID'></td>";
                    echo "<td><a href='#' class='rename-group-button' data-group-id='$groupID'><i class='fas fa-pencil-alt'></i></a></td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            } else {
                echo "<tr><td colspan='7'>No main groups found for this stream.</td></tr>";
            }

            // Output assets data
            if ($resultAssets->num_rows > 0) {
                echo "<tbody>";
                while ($rowAssets = $resultAssets->fetch_assoc()) {
                    $assetID = $rowAssets["asset_id"];
                    $assetName = $rowAssets["asset_name"];
                    $thumbnailPath = $rowAssets["thumbnail_path"];
                    $uploadDate = $rowAssets["upload_date"];
                    $streamID = $rowAssets["stream_id"];

                    echo "<tr>";
                    echo "<td><img src='$thumbnailPath' alt='Asset Thumbnail' width='50' height='60' class='img' style='border-radius: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);'></td>";
                    echo "<td><a href='pdf_viewer.php?stream_id=$streamID&asset_id=$assetID' target='_blank'>";
                    echo "<span class='asset-name' data-asset-id='$assetID'>$assetName</span>";
                    echo "<input type='text' class='asset-name-input' data-asset-id='$assetID' style='display:none;' />";
                    echo "</a></td>";
                    echo "<td>$uploadDate</td>";
                    echo "<td><input type='checkbox' class='asset-checkbox toggle-checkbox' name='selected_assets[]' value='$assetID'></td>";
                    echo "<td><a href='#' class='rename-asset-button' data-asset-id='$assetID'><i class='fas fa-pencil-alt'></i></a></td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            } else {
                echo "<tr><td colspan='7'>No assets found for this stream.</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
    <button type="submit" name="perform_action" class="custom-button">Delete</button>
  a

</form>
<script>
// Function to show edit rename buttons
function showEditRenameButtons() {
    editRenameButtons.forEach(button => {
        button.style.display = 'inline-block';
    });
}

// Function to hide edit rename buttons
function hideEditRenameButtons() {
    editRenameButtons.forEach(button => {
        button.style.display = 'none';
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const thumbnailLinks = document.querySelectorAll('.thumbnail-link');
    const renameGroupButtons = document.querySelectorAll('.rename-group-button');
    const renameAssetButtons = document.querySelectorAll('.rename-asset-button');
    const submitRenameButton = document.querySelector('.submitRename');
    const editRenameButtons = document.querySelectorAll('.edit-rename-button'); // Select edit rename buttons

    let renameActive = false;
    let selectForm = document.getElementById('selectForm'); // Declare selectForm in the outer scope

    if (!selectForm) {
        console.error('Form element not found.');
        return;
    }

    // Initially hide edit rename buttons
    editRenameButtons.forEach(button => {
        button.style.display = 'none';
    });

    function showRenameFields(event, type) {
        event.preventDefault();
        event.stopPropagation();

        renameActive = true;

        const buttons = (type === 'group') ? renameGroupButtons : renameAssetButtons;

        buttons.forEach(button => {
            const id = button.getAttribute(`data-${type}-id`);
            const nameSpan = document.querySelector(`.${type}-name[data-${type}-id='${id}']`);
            const nameInput = document.querySelector(`.${type}-name-input[data-${type}-id='${id}']`);

            toggleFieldVisibility(nameSpan, nameInput);
        });

        thumbnailLinks.forEach(link => {
            link.style.pointerEvents = 'none';
        });

        submitRenameButton.style.display = 'inline-block';

        // Hide edit rename buttons when renameActive is true
        hideEditRenameButtons();
    }

    // Function to hide edit rename buttons
    function hideEditRenameButtons() {
        editRenameButtons.forEach(button => {
            button.style.display = 'none';
        });
    }

    function thumbnailClickHandler(event) {
        if (renameActive) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            const type = this.getAttribute('data-type');
            const id = this.getAttribute('data-id');

            if (type === 'group') {
                window.location.href = 'group_details.php?stream_id=<?php echo $streamID; ?>&group_id=' + id;
            } else if (type === 'asset') {
                window.open('pdf_viewer.php?stream_id=<?php echo $streamID; ?>&asset_id=' + id, '_blank');
            }
        }
    }

    thumbnailLinks.forEach(link => {
        link.addEventListener('click', thumbnailClickHandler);
    });

    function toggleFieldVisibility(nameSpan, nameInput) {
        if (nameSpan.style.display === 'none') {
            nameSpan.style.display = 'inline-block';
            nameInput.style.display = 'none';
        } else {
            nameSpan.style.display = 'none';
            nameInput.style.display = 'inline-block';
            nameInput.value = nameSpan.textContent;
            nameInput.focus();
        }
    }

    const inputFields = document.querySelectorAll('.group-name-input, .asset-name-input');
    inputFields.forEach(input => {
        input.addEventListener('mousedown', function (event) {
            event.stopPropagation();
        });
    });

    document.addEventListener('click', function (event) {
        if (renameActive) {
            event.preventDefault();
            event.stopPropagation();
        }
    });

    renameGroupButtons.forEach(button => {
        button.addEventListener('click', (event) => showRenameFields(event, 'group'));
    });

    renameAssetButtons.forEach(button => {
        button.addEventListener('click', (event) => showRenameFields(event, 'asset'));
    });

    const renameNavbarButton = document.getElementById('edit-rename-button');
    if (renameNavbarButton) {
        renameNavbarButton.addEventListener('click', (event) => {
            showRenameFields(event, 'group');
            hideEditRenameButtons(); // Hide edit rename buttons when rename button is clicked
        });
    }

    if (submitRenameButton) {
        submitRenameButton.addEventListener('click', function () {
            const renameInputs = document.querySelectorAll('.group-name-input:visible, .asset-name-input:visible');
            renameInputs.forEach(input => {
                input.style.display = 'none';
            });

            const renameButtons = document.querySelectorAll('.rename-group-button:visible, .rename-asset-button:visible');
            renameButtons.forEach(button => {
                button.style.display = 'inline-block';
            });

            const submitButton = document.querySelector('button[name="perform_action"]');
            if (submitButton) {
                submitButton.style.display = 'inline-block';
                selectForm.submit();
            }

            this.style.display = 'none';
        });
    }
});
</script>
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const deleteButton = document.querySelector('.custom-button'); // Change to use class selector
    const toggleSelectButton = document.getElementById("toggleSelect");

    // Function to update the Delete button visibility
    function updateDeleteButtonVisibility() {
        const selectedCheckboxes = document.querySelectorAll('.toggle-checkbox:checked');
        if (selectedCheckboxes.length > 0) {
            deleteButton.style.display = 'block';
        } else {
            deleteButton.style.display = 'none';
        }
    }

    document.querySelectorAll('.toggle-checkbox').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            // Update the Delete button visibility on checkbox change
            updateDeleteButtonVisibility();
        });
    });

    toggleSelectButton.addEventListener("click", function () {
        const checkboxes = document.querySelectorAll('.toggle-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.style.display = checkbox.style.display === 'none' ? 'block' : 'none';
        });

        // Update the Delete button visibility after toggling checkboxes
        updateDeleteButtonVisibility();
    });

    // Initial update of the Delete button visibility
    updateDeleteButtonVisibility();
});
</script>


</body>
<script>
document.getElementById("add-group-button").addEventListener("click", function() {
    var groupForm = document.getElementById("create-group-form");
    groupForm.style.display = "block";
});

function cancelGroup() {
    document.getElementById("group-name").value = "";
    document.getElementById("create-group-form").style.display = "none";
}
</script>
 <script src="script.js"></script>
 <script>
    function openSidebar() {
        document.getElementById("sidebar").classList.add("open");
        document.getElementById("main-content").classList.add("open");
    }

    function closeSidebar() {
        document.getElementById("sidebar").classList.remove("open");
        document.getElementById("main-content").classList.remove("open");
    }
</script>

<script>
    function displayFileName() {
        var input = document.getElementById('pdfFile');
        var fileName = input.files[0].name;
        document.getElementById('file-name-display').innerText = fileName;
    }
</script>
<script>
// Function to close the sidebar
function closeSidebar() {
    document.getElementById("sidebar").classList.remove("open");
    document.getElementById("main-content").classList.remove("open");
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
function goBack() {
    window.history.back();
}
</script>
</html>
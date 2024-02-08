<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
<link rel="stylesheet" href="path/to/your-custom-css.css">
</head>
<style>
    body {
        background-color: #fff;
    }

    .bg-custom-2 {
        background-color: #ED1653;
        color: white;
    }

    .menu-item {
        margin-right: 20px;
        color: white;
        text-decoration: none;
        font-size: 12px;
        transition: color 0.3s;
    }

    /* Sidebar styles */
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #F0F0F0;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    /* Sidebar content styles (you can adjust the width here) */
    .sidebar-content {
        width: 350px;
        padding: 20px;
    }

    /* Close button styles */
    .close-btn {
        position: absolute;
        top: 30px;
        right: 25px;
        font-size: 30px;
        transition: 0.3s;
        cursor: pointer;
    }

    .close-btn:hover {
        color: #000;
    }
 .tags-input-wrapper {
        background: transparent;
        padding: 10px;
        border-radius: 4px;
        max-width: 400px;
        border: 1px solid #ccc;
    }

    .tags-input-wrapper input {
        border: none;
        background: transparent;
        outline: none;
        width: 140px;
        margin-left: 8px;
    }

    .tags-input-wrapper .tag {
        display: inline-block;
        background-color: #fa0e7e;
        color: white;
        border-radius: 40px;
        padding: 0px 3px 0px 7px;
        margin-right: 5px;
        margin-bottom: 5px;
        box-shadow: 0 5px 15px -2px rgba(250, 14, 126, .7);
    }

    .tags-input-wrapper .tag a {
        margin: 0 7px 3px;
        display: inline-block;
        cursor: pointer;
    }
    
    /* Analytics Sidebar styles */
.analyticsSidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 2;
    top: 0;
    right: -350px; /* Initially hidden to the right */
    background-color: #F0F0F0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

/* Add any other styles for the sidebar content as needed */
.analyticsSidebarContent {
    padding: 20px;
}

/* Close button styles */
.analyticsSidebar .close-btn {
    position: absolute;
    top: 30px;
    right: 25px;
    font-size: 30px;
    transition: 0.3s;
    cursor: pointer;
}

.analyticsSidebar .close-btn:hover {
    color: #000;
}
* Add any other styles for the sidebar content as needed */
.analytics-sidebar .analyticsSidebarContent {
    padding: 20px;
}

/* Add this CSS to style the menu bar inside the "ANALYTICS" sidebar */
.analytics-menu {
    padding: 20px;
}

/* Style each menu item */
.analytics-menu .menu-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    cursor: pointer;
}

/* Style the menu icon (adjust icon size and color as needed) */
.analytics-menu .menu-item .menu-icon {
    font-size: 20px; /* Adjust the icon size */
    margin-right: 10px;
    color: #333; /* Icon color */
}

/* Style the menu text (adjust font size and color as needed) */
.analytics-menu .menu-item .menu-text {
    font-size: 16px; /* Adjust the font size */
    color: #333; /* Text color */
}

/* Change icon colors on hover (optional) */
.analytics-menu .menu-item:hover .menu-icon {
    color: #007BFF; /* Change to your desired hover color */
}

/* Change text colors on hover (optional) */
.analytics-menu .menu-item:hover .menu-text {
    color: #007BFF; /* Change to your desired hover color */
}


#emailSidebar {
    display: none;
    width: 400px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    background-color: white;
    padding: 10px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    overflow-y: auto; /* Add this to enable vertical scrolling if needed */
    
}

#emailSidebar h2 {
    margin-top: 0;
}
#emailSidebar label {
    display: block;
    margin-bottom: 5px;
    color: #333; /* Set label text color */
}

#emailSidebar input[type='text'],
#emailSidebar input[type='email'],
#emailSidebar textarea,
#emailSidebar input[type='file'] {
    width: calc(100% - 30px); /* Adjusted width, considering padding */
    padding: 8px;
    border: none;
    border-bottom: 2px solid#343434; /* Set underline color */
    margin-bottom: 15px;
    box-sizing: border-box;
    transition: border-bottom 0.3s;
}

#emailSidebar textarea {
    width: calc(100% - 30px); /* Adjusted width, considering padding */
    padding: 8px;
    margin-bottom: 5px; /* Reduced margin to half */
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    resize: vertical;
}

#emailSidebar input[type='file'] {
    padding: 8px;
    cursor: pointer; /* Added cursor style */
}

#emailSidebar input[type='submit'] {
    background-color: #E51058;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#emailSidebar button {
    background-color: #f44336;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    padding: 8px;
    color: white;
}

#emailSidebar button i {
    font-size: 16px;
}

#emailSidebar input[type='submit']:hover,
#emailSidebar button:hover {
    background-color: #E51058;
}

#emailSidebar input[type='file']:hover {
    border-bottom: 2px solid #00bcd4; /* Set underline color on hover for file input */
}

#emailSidebar form .email-buttons {
    display: flex;
    justify-content: space-between;
}
#emailSidebar input:focus,
#emailSidebar textarea:focus {
    outline: none;
}
</style>

<body>
<nav class="navbar navbar-dark fixed-top bg-custom-2">
    <div class="container">
        <a href="#" class="menu-item" onclick="openEmailSidebar()">
    <i class='fas fa-share'></i> Shares
</a>

       <a href="download.php?stream_id=<?php echo $streamID; ?>&asset_id=<?php echo $assetID; ?>" class="menu-item">
            <i class="fas fa-download"></i> DOWNLOAD PDF
        </a>
        <a href="#" class="menu-item" id="edit-rename-button">
            <i class="fas fa-link"></i> GENERATE LINK
        </a>
      <a href="#" class="menu-item" id="analytics-button" onclick="openAnalyticsSidebar()">
    <i class="fas fa-chart-bar"></i> ANALYTICS
</a>

        <a href="#" class="menu-item" id="three-dots-button" onclick="toggleSidebar()">
            <i class="fas fa-ellipsis-h"></i>
        </a>
    </div>
</nav>

<div id="sidebar" class="sidebar">
    <a href="#" class="close-btn" onclick="closeSidebar()">&times;</a>
    <p></p>
   <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Replace with your actual database credentials
 $hostname = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Check if the 'stream_id' and 'asset_id' are provided in the URL
if (isset($_GET['stream_id']) && isset($_GET['asset_id'])) {
    $streamID = $_GET['stream_id'];
    $assetID = $_GET['asset_id'];
} else {
    echo "Stream ID and Asset ID not provided.";
    exit;
}

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the thumbnail path for the PDF
if (isset($_GET['stream_id']) && isset($_GET['asset_id'])) {
    $streamID = $_GET['stream_id'];
    $assetID = $_GET['asset_id'];

    // Connect to your database and fetch the thumbnail path
    $conn = new mysqli($hostname, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT thumbnail_path FROM assets WHERE asset_id = ? AND stream_id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ii", $assetID, $streamID);

        if ($stmt->execute()) {
            $stmt->bind_result($thumbnailPath);

            if ($stmt->fetch()) {
                // Display the thumbnail in the sidebar with custom width, height, and border radius
                echo '<img src="' . $thumbnailPath . '" alt="Thumbnail" style="width: 140px; height: 140px; border-radius: 20px;" />';
            }
        }

        $stmt->close();
    }

    $conn->close();
}
?>


     
        <div id="tagForm">
            <form action="" method="POST">
                <input type="hidden" name="stream_id" value="<?php echo $streamID; ?>">
                <input type="hidden" name="asset_id" value="<?php echo $assetID; ?>">
                <label for="tags">Tags Input</label>
                <input type="text" name="tags" id="tags" required>
                <input type="submit" value="Add Tags" name="submit"> <!-- This is your submit button -->
            </form>
        </div>
<?php
// Replace with your actual database credentials
$hostname = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $assetID = $_POST['asset_id'];
    $tags = $_POST['tags'];

    // Process tags (split by commas or spaces)
    $tagsArray = array_unique(array_filter(preg_split('/[, ]+/', $tags))); // Remove duplicates and empty tags

     foreach ($tagsArray as $tag) {
        $tag = trim($tag); // Remove extra spaces

        // Check if the tag already exists in the tags table
        $tagID = getTagID($conn, $tag);

        if ($tagID === false) {
            // If the tag doesn't exist, insert it
            $tagID = insertTag($conn, $tag);
        }
        // Associate the asset with the tag using the asset_id and tag_id
        // Associate the asset with the tag using the asset_id and tag_id
        associateAssetWithTag($conn, $assetID, $tagID);
    }

    echo "Tags added to the asset successfully!";
} else {
    echo "Invalid request.";
}

// Function to get tag ID from the tags table
function getTagID($conn, $tag) {
    $sql = "SELECT tag_id FROM tags WHERE tag_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tag);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['tag_id'];
    } else {
        return false;
    }
}

// Function to insert a new tag into the tags table
function insertTag($conn, $tag) {
    $sql = "INSERT INTO tags (tag_name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tag);

    if ($stmt->execute()) {
        return $stmt->insert_id;
    } else {
        return false;
    }
}

// Function to associate an asset with a tag in a separate table (asset_tags)
function associateAssetWithTag($conn, $assetID, $tagID) {
    $sql = "INSERT INTO asset_tags (asset_id, tag_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $assetID, $tagID);

    $stmt->execute();
}
?>


</div>
</div>

<div id='emailSidebar' style='display: none;'>
    <br><br><br>
    <button onclick="closeEmailSidebar()">
        <i class="fas fa-times"></i> <!-- X icon -->
    </button>
    
   

     <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="cc">CC:</label>
        <input type="email" id="cc" name="cc">

        <label for="bcc">BCC:</label>
        <input type="email" id="bcc" name="bcc">

        <label for="message">Your Message:</label>
          <textarea id="message" name="message" rows="4" style="font-size: 12px;" required>
            Hello there,
            Here's a collection of assets exclusively personalized for you! Hope you find this material useful.
            I'd love to hear what you think about them. Please feel free to get in touch at any time.
        </textarea>

        <label for="attachment">File Attachment:</label>
        <input type="file" id="attachment" name="attachment">

        <input type="submit" value="Send">
    </form>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $recipientEmail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = $_POST["message"];

    // Sender settings
    $from = "admin@easyflex.site"; // Replace with your email address

    // Add CC and BCC if provided
    $cc = !empty($_POST["cc"]) ? $_POST["cc"] : null;
    $bcc = !empty($_POST["bcc"]) ? $_POST["bcc"] : null;

    // Handle file upload
    $attachment = $_FILES['attachment'];
    $file_name = $attachment['name'];
    $file_tmp = $attachment['tmp_name'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com'; // Replace with your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'admin@easyflex.site';
        $mail->Password   = 'Admin@123';
        $mail->SMTPSecure = 'SSL'; // TLS ya SSL ka use karein
        $mail->Port       = 587; // SMTP server ka port
 
        // Recipients
        $mail->setFrom($from, 'Easyflex');

        // Set recipient dynamically from the form field
        $mail->addAddress($recipientEmail);

        // Add CC and BCC
        if ($cc !== null) {
            $mail->addCC($cc);
        }
        if ($bcc !== null) {
            $mail->addBCC($bcc);
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = "No Subject"; // You can modify this if you have a subject field in your form
        $mail->Body    = $message;

        // Database connection settings
         $hostname = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

        // Create a database connection
        $conn = new mysqli($hostname, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Assuming you have already retrieved the file name from the database
        $streamID = $_GET['stream_id']; // Assuming you have a stream ID in your form
        $assetID = $_GET['asset_id']; // Assuming you have an asset ID in your form

        $sql = "SELECT pdf_path FROM assets WHERE asset_id = ? AND stream_id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ii", $assetID, $streamID);
            if ($stmt->execute()) {
                $stmt->bind_result($pdfPath);

                // Check if a row was found
                if ($stmt->fetch()) {
                    // Build the path to the file
                    $file_path_from_db = "uploads/" . basename($pdfPath);

                    // Attach file
                    $mail->addAttachment($file_path_from_db, basename($file_path_from_db));

                    // Debugging statements
                    var_dump($file_path_from_db);
                    var_dump($mail->ErrorInfo);
                } else {
                    echo "Asset not found for the given Stream ID and Asset ID.";
                }
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();

        // Send email
        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
}
?>
</div>




<div id="analyticsSidebar" class="sidebar">
    <a href="#" class="close-btn" onclick="closeAnalyticsSidebar()">&times;</a>
    <div id="analyticsSidebarContent">
        <!-- Add your analytics content here -->
        <h2>Analytics</h2>
         <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Replace with your actual database credentials
 $hostname = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Check if the 'stream_id' and 'asset_id' are provided in the URL
if (isset($_GET['stream_id']) && isset($_GET['asset_id'])) {
    $streamID = $_GET['stream_id'];
    $assetID = $_GET['asset_id'];
} else {
    echo "Stream ID and Asset ID not provided.";
    exit;
}

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the thumbnail path for the PDF
if (isset($_GET['stream_id']) && isset($_GET['asset_id'])) {
    $streamID = $_GET['stream_id'];
    $assetID = $_GET['asset_id'];

    // Connect to your database and fetch the thumbnail path
    $conn = new mysqli($hostname, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT thumbnail_path FROM assets WHERE asset_id = ? AND stream_id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ii", $assetID, $streamID);

        if ($stmt->execute()) {
            $stmt->bind_result($thumbnailPath);

            if ($stmt->fetch()) {
                // Display the thumbnail in the sidebar with custom width, height, and border radius
                echo '<img src="' . $thumbnailPath . '" alt="Thumbnail" style="width: 170px; height: 160px; border-radius: 20px;" />';
                
            }
        }

        $stmt->close();
    }

    $conn->close();
}
?>


    </div>
     <div class="analytics-menu">
<?php
// Replace with your actual database credentials
 $hostname = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';
// Retrieve 'stream_id' and 'Group_ID' from the URL
$streamID = isset($_GET['stream_id']) ? $_GET['stream_id'] : null;
$groupID = isset($_GET['Group_ID']) ? $_GET['Group_ID'] : null;

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform a database query to retrieve records based on 'stream_id' and 'Group_ID' (including null)
if ($groupID === null) {
    $sql = "SELECT stream_id, Group_ID, SUM(duration) AS total_duration FROM pdf_analytics WHERE stream_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $streamID);
} else {
    $sql = "SELECT stream_id, Group_ID, SUM(duration) AS total_duration FROM pdf_analytics WHERE stream_id = ? AND Group_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $streamID, $groupID);
}
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalDuration = $row['total_duration'];
    $streamID = $row['stream_id'];
    $groupID = $row['Group_ID'];
} else {
    $totalDuration = 0;
    $streamID = "N/A";
    $groupID = "N/A";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
<div class="menu-item">
        <span class="menu-icon">
            <!-- You can use font icons or SVG icons for each option -->
            <i class="fas fa-eye"></i> <!-- Font Awesome eye icon -->
        </span>
        <span class="menu-text">Views</span>
    </div>
    <div class="menu-item">
        <span class="menu-icon">
            <i class="fas fa-download"></i> <!-- Font Awesome download icon -->
        </span>
        <span class="menu-text">Downloads</span>
    </div>
     <div class='menu-item' id='shareButton'>
        <span class='menu-icon'>
            <i class='fas fa-share'></i>
        </span>
        <span class='menu-text'>Shares</span>
    </div>

    <div class="menu-item">
        <span class="menu-icon">
            <i class="far fa-clock"></i> <!-- Font Awesome clock icon -->
        </span>
        <span class="menu-text">Duration: <?php echo $totalDuration; ?> seconds</span>
    </div>
</div>
    </div>


 
 <div id="pdfContainer">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        // Replace with your actual database credentials
      $hostname = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

        // Check if the 'stream_id' and 'asset_id' are provided in the URL
        if (isset($_GET['stream_id']) && isset($_GET['asset_id'])) {
            $streamID = $_GET['stream_id'];
            $assetID = $_GET['asset_id'];
        } else {
            echo "Stream ID and Asset ID not provided.";
            exit;
        }

        // Create a database connection
        $conn = new mysqli($hostname, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve the PDF path based on the asset_id and stream_id
        $sql = "SELECT pdf_path FROM assets WHERE asset_id = ? AND stream_id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ii", $assetID, $streamID);
            if ($stmt->execute()) {
                $stmt->bind_result($pdfPath);

                // Check if a row was found
                if ($stmt->fetch()) {
                    // Display the PDF file
                    echo "<iframe id='pdfViewer' src='$pdfPath?#toolbar=0&navpanes=0' width='100%' height='800' style='border: none; background-color: transparent;'></iframe>
                    <input type='hidden' id='startTime' value=''>";
                } else {
                    echo "Asset not found for the given Stream ID and Asset ID.";
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
    </div>
 
   </div>

 

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
 <script>
   

    (function () {
        "use strict";

        // Plugin Constructor
        var TagsInput = function (opts) {
            this.options = Object.assign(TagsInput.defaults, opts);
            this.init();
        }

        // Initialize the plugin
        TagsInput.prototype.init = function (opts) {
            this.options = opts ? Object.assign(this.options, opts) : this.options;

            if (this.initialized)
                this.destroy();

            if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                console.error("tags-input couldn't find an element with the specified ID");
                return this;
            }

            this.arr = [];
            this.wrapper = document.createElement('div');
            this.input = document.createElement('input');
            init(this);
            initEvents(this);

            this.initialized = true;
            return this;
        }

        // Add Tags
        TagsInput.prototype.addTag = function (string) {

            if (this.anyErrors(string))
                return;

            this.arr.push(string);
            var tagInput = this;

            var tag = document.createElement('span');
            tag.className = this.options.tagClass;
            tag.innerText = string;

            var closeIcon = document.createElement('a');
            closeIcon.innerHTML = '&times';

            // Delete the tag when the icon is clicked
            closeIcon.addEventListener('click', function (e) {
                e.preventDefault();
                var tag = this.parentNode;

                for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                    if (tagInput.wrapper.childNodes[i] == tag)
                        tagInput.deleteTag(tag, i);
                }
            });

            tag.appendChild(closeIcon);
            this.wrapper.insertBefore(tag, this.input);
            this.orignal_input.value = this.arr.join(',');

            return this;
        }

        // Delete Tags
        TagsInput.prototype.deleteTag = function (tag, i) {
            tag.remove();
            this.arr.splice(i, 1);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }

        // Make sure the input string has no errors with the plugin
        TagsInput.prototype.anyErrors = function (string) {
            if (this.options.max != null && this.arr.length >= this.options.max) {
                console.log('Max tags limit reached');
                return true;
            }

            if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                console.log('Duplicate found: "' + string + '"');
                return true;
            }

            return false;
        }

        // Add tags programmatically
        TagsInput.prototype.addData = function (array) {
            var plugin = this;

            array.forEach(function (string) {
                plugin.addTag(string);
            });
            return this;
        }

        // Get the Input String
        TagsInput.prototype.getInputString = function () {
            return this.arr.join(',');
        }

        // Destroy the plugin
        TagsInput.prototype.destroy = function () {
            this.orignal_input.removeAttribute('hidden');

            delete this.orignal_input;
            var self = this;

            Object.keys(this).forEach(function (key) {
                if (self[key] instanceof HTMLElement)
                    self[key].remove();

                if (key != 'options')
                    delete self[key];
            });

            this.initialized = false;
        }

        // Private function to initialize the tag input plugin
        function init(tags) {
            tags.wrapper.append(tags.input);
            tags.wrapper.classList.add(tags.options.wrapperClass);
            tags.orignal_input.setAttribute('hidden', 'true');
            tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
        }

        // Initialize the Events
        function initEvents(tags) {
            tags.wrapper.addEventListener('click', function () {
                tags.input.focus();
            });

            tags.input.addEventListener('keydown', function (e) {
                var str = tags.input.value.trim();

                if ([9, 13, 188].indexOf(e.keyCode) >= 0) {
                    e.preventDefault();
                    tags.input.value = "";
                    if (str !== "")
                        tags.addTag(str);
                }
            });
        }

        // Set All the Default Values
        TagsInput.defaults = {
            selector: 'tags',
            wrapperClass: 'tags-input-wrapper',
            tagClass: 'tag',
            max: null,
            duplicate: false
        };

        window.TagsInput = TagsInput;
    })();

    var tagInput1 = new TagsInput({
        selector: 'tags',
        duplicate: false,
        max: 10
    });
    tagInput1.addData(['PHP', 'JavaScript', 'CSS']);
</script>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
    var pdfViewer = document.getElementById("pdfViewer");
    var startTimeField = document.getElementById("startTime");
    var currentPage = 1; // Initialize the current page to 1

    // Retrieve values from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var assetID = urlParams.get("asset_id");
    var streamID = urlParams.get("stream_id");
    var groupID = urlParams.get("Group_ID");

    pdfViewer.onload = function() {
        startTimeField.value = Date.now();
    };

    pdfViewer.addEventListener("pagerendered", function(event) {
        // Get the current page number from the rendered page
        var pageNumber = event.detail.pageNumber;
        
        // Update the current page number
        currentPage = pageNumber;
    });

    window.addEventListener("beforeunload", function() {
        if (startTimeField.value !== "") {
            var endTime = Date.now();
            var startTime = parseInt(startTimeField.value, 10);
            var duration = (endTime - startTime) / 1000;

            // Send data to the server using AJAX with the correct page number and retrieved values
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "save_pdf_analytics.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var data = "asset_id=" + assetID + "&page_number=" + currentPage + "&start_time=" + startTime + "&end_time=" + endTime + "&duration=" + duration + "&stream_id=" + streamID + "&Group_ID=" + groupID;
            xhr.send(data);
        }
    });
});
</script> 
<input type="hidden" id="startTime" value="">
<script>
    // Function to open the "ANALYTICS" sidebar
function openAnalyticsSidebar() {
    document.getElementById("analyticsSidebar").style.width = "350px"; // Adjust the width as needed
}

// Function to close the "ANALYTICS" sidebar
function closeAnalyticsSidebar() {
    document.getElementById("analyticsSidebar").style.width = "0";
}
</script>
<script>
    // Your existing script

    // Function to open the email sidebar
    function openEmailSidebar() {
        document.getElementById('emailSidebar').style.display = 'block';
    }

    // Function to close the email sidebar
    function closeEmailSidebar() {
        document.getElementById('emailSidebar').style.display = 'none';
    }

    // Your other existing script
</script>

</body>
</html>


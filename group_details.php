<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="./src/main.css">
<style>
    body {
        background-image: url('https://www.easyflex.site/back.png');
        background-repeat: repeat;
        margin: 0;
        padding: 0;
        height: 100vh;
    }

    .group-name {
        font-size: 50px;
        
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;
        width: 50%;
        
        
    }
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

        .thumbnail {
            margin-bottom: 10px;
        }
     
     
    .menu-bar {
        background: transparent;
        padding: 130px;
    }

    .menu-bar a {
        text-decoration: none;
        color: #E51058;
        margin-right: 15px;
        font-weight: bold;
        font-size: 12px;
    }

    .menu-bar a:hover {
        text-decoration: underline;
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
    .create-button,
    .cancel-button {
        background-color: transparent;
        color: pink;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        padding: 5px 10px;
        transition: background-color 0.3s, color 0.3s;
    }

    .create-button:hover,
    .cancel-button:hover {
        background-color: #DE3163;
        color: white;
    }
  .table {
            width: 80%; /* Set the desired width (e.g., 50%) */
            border-collapse: collapse;
             margin: 0 auto; /* Center the table horizontally */
        }

        .th, td {
           
            padding: 8px;
        }
    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #111;
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
    font-size: 14px;
    text-align: center;
}

.input {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #CCC;
    color: #ffffff;
    box-sizing: border-box;
    font-family: 'Arvo';
    font-size: 18px;
    height: 50px;
    margin: 0;
    padding: 10px 0px;
    width: 300px;
    position: relative;
    outline: none;
    margin-left: 10px;
}

.input::placeholder {
    color: #ffffff;
}

.input:focus::placeholder {
    color: #ffffff;
}


.input:focus + .underline {
    transform: scaleX(1);
    background-color: #DE3163;
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
       margin-left: 40px;
}

.create-button:hover,
.cancel-button:hover {
    
    color: white;
    
}
.line {
    width: 300px;
    height: 1px;
    background-color: white;
    margin-left: 10px;
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
</style>
</head>
<body>
 <div class="sidebar" id="sidebar">
        <span class="close-btn" onclick="closeSidebar()">&times;</span>
        <!-- Add your sidebar content here -->
        <br><br><br><br>
        <h2 style="color: white;">Add New Asset</h2>
        <br>
<?php
// Include your database connection configuration here
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

// Extract group_id and stream_id from the URL
if (isset($_GET['group_id']) && isset($_GET['stream_id'])) {
    $group_id = $_GET['group_id'];
    $stream_id = $_GET['stream_id'];
} else {
    echo "Group ID or Stream ID not provided in the URL.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Retrieve form data
    $pdfFileName = $_FILES['pdfFile']['name'];
    $pdfTmpName = $_FILES['pdfFile']['tmp_name'];
    $pdfSize = $_FILES['pdfFile']['size'];

    // Check for valid PDF file type (optional)
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

        // Process tags (split by commas or spaces)
        $tags = preg_split('/[, ]+/', $_POST['tags']);
        $tagsArray = array_unique(array_filter($tags)); // Remove duplicates and empty tags

        $imagick = new Imagick();
        $imagick->readImage($pdfPath . '[0]'); // Read the first page of the PDF
        $imagick->setImageFormat('png'); // Set the output format to PNG
        $imagick->thumbnailImage(200, 200, true, true); // Resize the thumbnail if needed
        $imagick->writeImage($uploadDirectory . $thumbnailName); // Save the thumbnail to the specified folder

        // Insert PDF, unique thumbnail paths, stream_id, group_id, and PDF path into the database
        $pdfPathForDatabase = $pdfPath; // Store the PDF path
        $thumbnailFullPath = $uploadDirectory . $thumbnailName; // Full path for thumbnail
        $sql = "INSERT INTO assets (asset_name, thumbnail_path, pdf_path, upload_date, stream_id, Group_ID) VALUES (?, ?, ?, NOW(), ?, ?)";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ssssi", $pdfFileName, $thumbnailFullPath, $pdfPathForDatabase, $stream_id, $group_id);

        if ($stmt->execute()) {
            // Get the asset ID of the newly inserted asset
            $assetID = $stmt->insert_id;

            // Insert tags into the asset_tags table
            foreach ($tagsArray as $tag) {
                $tag = trim($tag); // Remove extra spaces
                // Check if the tag already exists in the tags table or insert it if not
                $tagID = getTagID($conn, $tag);
                if ($tagID === false) {
                    $tagID = insertTag($conn, $tag);
                }

                // Associate the asset with the tag
                associateAssetWithTag($conn, $assetID, $tagID);
            }

            echo "PDF file uploaded successfully!";
            $stmt->close();
        } else {
            echo "Error inserting data into the database: " . $stmt->error;
        }
    } else {
        echo "Error uploading the PDF file.";
    }

    $conn->close();
}
?>
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="drop-zone">
        <label for="pdfFile" class="drop-zone__prompt">Drop file here or click to upload</label>
       <input type="file" name="pdfFile[]" id="pdfFile" class="drop-zone__input" accept=".pdf" onchange="displayFileNames()" multiple required>
    </div>
    <br><br>
    <div class="form-group">
        <label for="asset_name" style="color: pink;"></label>
        <input class="input" placeholder="Enter Asset Name" type="text" name="asset_name" required>
    </div>
    <br><br><br><br>

    <!-- Hidden input fields for stream_id and group_id -->
    <input type="hidden" name="stream_id" value="<?php echo $stream_id; ?>">
    <input type="hidden" name="group_id" value="<?php echo $group_id; ?>">

    <div class="form-group">
        <button class="create-button" type="submit" name="submit">Submit</button>
        <button class="cancel-button" onclick="closeSidebar()">Cancel</button>
    </div>
    <br>
    <div class="line"></div>
</form>
    
<?php
// Include your database connection configuration here
$servername = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Check if 'stream_id' and 'group_id' are provided in the URL
if (isset($_GET['stream_id']) && isset($_GET['group_id'])) {
    $stream_id = $_GET['stream_id'];
    $group_id = $_GET['group_id'];
} else {
    echo "Stream ID or Group ID not provided.";
    exit;
}

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to recursively create groups
function createGroup($conn, $stream_id, $parent_group_id) {
    // Check if the form has been submitted to create a new group
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {
        // Retrieve the group name from the form
        $group_name = mysqli_real_escape_string($conn, $_POST["group"]);

        // Insert the new group into the Groups table
        $sql = "INSERT INTO Groups (stream_id, Group_Name, Parent_Group_ID) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("iss", $stream_id, $group_name, $parent_group_id);

            if ($stmt->execute()) {
                // Group inserted successfully

                // Use JavaScript for redirection
                echo '<script>window.location.href = window.location.href;</script>';
exit;
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Display the form to create a new group
   

    // Retrieve sub-groups of the current group
    $sql = "SELECT Group_ID, Group_Name FROM Groups WHERE stream_id = ? AND Parent_Group_ID = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ii", $stream_id, $parent_group_id);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            // Recursively call the function for sub-groups
            createGroup($conn, $stream_id, $row['Group_ID']);
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    echo '</div>';
}

// Call the function to start the recursive process for sub-groups
createGroup($conn, $stream_id, $group_id);

// Close the database connection
$conn->close();
?>


<div class="search-box">
    <input type="text" class="input-search" placeholder="Search..." oninput="updateSearchQuery()">
    <button class="btn-search" onclick="updateSearchResults()">
        <i class="fas fa-search"></i>
    </button>
    <div id="search-results"></div>
</div>
<script>
function updateSearchResults() {
    var searchQuery = document.querySelector('.input-search').value;

    // Get the dynamic stream ID from the URL
    var urlParams = new URLSearchParams(window.location.search);
    var streamID = urlParams.get('stream_id');
    var groupID = urlParams.get('group_id'); // Get the group ID if available

    // Determine the search type based on the presence of '@group' or '@asset' in the search query
    var searchType = 'all';
    if (searchQuery.toLowerCase().includes('@group')) {
        searchType = 'group';
        // Remove '@group' from the search query
        searchQuery = searchQuery.replace(/@group/g, '').trim();
    } else if (searchQuery.toLowerCase().includes('@asset')) {
        searchType = 'asset';
        // Remove '@asset' from the search query
        searchQuery = searchQuery.replace(/@asset/g, '').trim();
    }

    // Build the URL for the new page (search_groups_details.php) with dynamic stream ID, search type, and query
    var newPageURL = 'search_groups_details.php?type=' + searchType + '&query=' + encodeURIComponent(searchQuery) + '&stream_id=' + streamID;

    // Add group ID to the URL if available
    if (groupID !== null) {
        newPageURL += '&group_id=' + groupID;
    }

    // Redirect to the new page
    window.location.href = newPageURL;
}
</script>



        <div class="menu-bar">
        <a href="#" class="menu-item" onclick="showInputField()"><i class="fas fa-users"></i> ADD GROUP</a>
        <a href="#" class="menu-item" id="addAssetButton" onclick="openSidebar()"><i class="fas fa-plus"></i> ADD ASSET</a>
        <a href="#"><i class="fas fa-pencil-alt"></i> RENAME</a>
         <a href="#" class="menu-item" id="toggleSelect"><i class="fas fa-trash"></i> DELETE</a>
        <a href="#"><i class="fas fa-copy"></i> COPY</a>
        <a href="#"><i class="fas fa-arrows-alt"></i> MOVE</a>
        <a href="#"><i class="fas fa-cogs"></i> MANAGE SOURCE</a>
   <form id="create-group-form" method="post" action="">
    <input type="hidden" name="stream_id" value="<?php echo $_GET['stream_id']; ?>">
    <input type="hidden" name="parent_group_id" value="<?php echo $_GET['group_id']; ?>">
    <input type="text" name="group" id="group-name" class="menu-item-input" style="width: 50%; border-radius: 15px;" placeholder="Enter Group Name">

    <button type="submit" class="menu-item-button" name="create">Create</button>
    <button type="button" onclick="cancelGroup()" class="menu-item-button">Cancel</button>
</form>

    </div>
 

 
 
<form id="selectForm2" method="post" action="delete_handler1.php">

    <div class="table-container">
        <table id="asset-table" class="table table-striped">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Select</th>
                </tr>
            </thead>
            <tbody>
                <?php
                ini_set('display_errors', 1);
                error_reporting(E_ALL);

                // Include your database connection configuration here
                $servername = 'localhost';
                $username = 'u785001360_root';
                $password = 'Easyflex@12345';
                $dbname = 'u785001360_easyflex';

                // Create a database connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Check if 'stream_id' is provided in the URL
                if (isset($_GET['stream_id'])) {
                    $stream_id = $_GET['stream_id'];
                } else {
                    echo "Stream ID not provided.";
                    exit;
                }

                // Check if 'group_id' is provided in the URL
                $group_id = isset($_GET['group_id']) ? $_GET['group_id'] : null;

                // Function to recursively display groups and assets for a specific group
                function displayGroupsAndAssets($conn, $stream_id, $parent_group_id = null, $depth = 0)
                {
                    // Fetch and display the groups
                    $sqlGroups = "SELECT Group_ID, Group_Name FROM Groups WHERE stream_id = ? AND Parent_Group_ID " . ($parent_group_id === null ? "IS NULL" : "= ?");
                    $stmtGroups = $conn->prepare($sqlGroups);

                    if ($parent_group_id !== null) {
                        $stmtGroups->bind_param("ii", $stream_id, $parent_group_id);
                    } else {
                        $stmtGroups->bind_param("i", $stream_id);
                    }

                    $stmtGroups->execute();
                    $resultGroups = $stmtGroups->get_result();

                    while ($rowGroups = $resultGroups->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>Group</td>";
                        echo '<td><img src="https://www.easyflex.site/thumbnail.jpg" alt="Group Thumbnail" width="50" height="60" class="img" style="border-radius: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);"><a href="?stream_id=' . $stream_id . '&group_id=' . $rowGroups['Group_ID'] . '">' . $rowGroups['Group_Name'] . "</a></td>";
                        echo "<td>Group Details</td>";
                        echo "<td><input type='checkbox' class='group-checkbox toggle-checkbox' name='selected_groups[]' value='{$rowGroups['Group_ID']}'></td>";
                        echo "</tr>";

                        // Recursively call the function for sub-groups
                        displayGroupsAndAssets($conn, $stream_id, $rowGroups['Group_ID'], $depth + 1);
                    }

                    // Retrieve data from the "assets" table for the specified stream and Group
                    $sqlAssets = "SELECT asset_id, asset_name, thumbnail_path, upload_date, stream_id, pdf_path, Group_ID FROM assets WHERE stream_id = ? AND Group_ID " . ($parent_group_id === null ? "IS NULL" : "= ?");
                    $stmtAssets = $conn->prepare($sqlAssets);
                    $stmtAssets->bind_param("ii", $stream_id, $parent_group_id);
                    $stmtAssets->execute();
                    $resultAssets = $stmtAssets->get_result();

                    while ($rowAssets = $resultAssets->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>Asset</td>";
                        echo '<td><img src="' . $rowAssets["thumbnail_path"] . '" alt="Asset Thumbnail" width="50" height="60" class="img" style="border-radius: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);"><a href="pdf_viewer.php?stream_id=' . $rowAssets["stream_id"] . '&group_id=' . $rowAssets["Group_ID"] . '&asset_id=' . $rowAssets["asset_id"] . '" target="_blank">' . $rowAssets["asset_name"] . '</a></td>';
                        echo "<td>Asset Details</td>";
                        echo "<td><input type='checkbox' class='asset-checkbox toggle-checkbox' name='selected_assets[]' value='{$rowAssets["asset_id"]}'></td>";
                        echo "</tr>";
                    }
                }

                // Call the function to start displaying groups and assets
                displayGroupsAndAssets($conn, $stream_id, $group_id);

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

   <button type="submit" name="perform_action" class="custom-button">Delete</button>

</form>

<script>
    document.getElementById("toggleSelect").addEventListener("click", function () {
        const checkboxes = document.querySelectorAll('.toggle-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.style.display = checkbox.style.display === 'none' ? 'block' : 'none';
        });
    });
</script>


    </div>
      
   <?php

?>



    
    
<script>
    function showInputField() {
        var groupForm = document.getElementById("create-group-form");
        groupForm.style.display = "block";
    }

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
   document.addEventListener('contextmenu', function (e) {
      e.preventDefault();
   });
</script>
</body>
</html>
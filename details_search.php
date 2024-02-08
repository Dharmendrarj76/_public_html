<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Streams Results</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    	<style>
body {
    margin: 0;
    padding: 50; /* You might want to add units like pixels (e.g., padding: 50px;) */
    background-image: url('https://www.easyflex.site/back.png');
    background-repeat: repeat;
}

.search-box {
    position: absolute;
    top: 80px; /* Adjust the top position as needed */
    left: 30%;
    transform: translateX(-50%);
    width: 50%;
}
.btn-search {
    width: 50px;
    height: 50px;
    border-style: none;
    font-size: 12px;
    font-weight: bold;
    outline: none;
    cursor: pointer;
    border-radius: 50%;
    position: absolute;
    right: 10px; /* Adjust the right position as needed */
    top: 50%; /* Center the button vertically */
    transform: translateY(-50%);
    color: #E51058; /* Change to your desired color */
    background-color: transparent;
    pointer-events: painted;
}

.btn-search::before {
    content: 'Search';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #E51058;
}

.btn-search i {
    visibility: hidden;
}

.input-search {
    height: 40px;
    width: 100%; /* Occupy 100% of the parent container's width */
    border-style: none;
    padding: 10px;
    font-size: 14px;
    letter-spacing: 2px;
    outline: none;
    border-bottom: 1px solid #E51058; /* Underline effect */
    transition: border-bottom 0.5s ease-in-out;
    background-color: transparent;
    padding-right: 40px;
    color: #E51058; /* Change to your desired color */
}

.input-search::placeholder {
    color: #E51058;
    font-size: 18px;
    letter-spacing: 2px;
    font-weight: 100;
}

.back-button {
	
	color: #000;
	padding: 10px 20px;
	border: none;
	cursor: pointer;
	display: flex;
	align-items: center;
	gap: 5px;
	
	
}


/* Section styling */
        .section {
            width: 80%; /* Adjust the width of the sections as needed */
            margin: 0 auto; /* Center the sections horizontally */
            background-color: #fff; /* Background color of the sections */
            padding: 20px; /* Adjust the padding of the sections as needed */
            border-radius: 10px; /* Optional: Add border radius for a rounded look */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add box shadow for a subtle effect */
            margin-top: 150px; /* Adjust the top margin of the sections as needed */
            position: relative;
        }
</style>
</head>
<body>
<div class="search-box">
    <input type="text" class="input-search" placeholder="" oninput="updateSearchQuery()">
    <button class="btn-search" onclick="redirectToSearch()"> <!-- Updated onclick event -->
        <i class="fas fa-search"></i>
    </button>
    <div id="search-results"></div>
</div>

<button class="back-button" onclick="goBack()">
    <i class="fa fa-chevron-left" aria-hidden="true"></i> Back
</button>
<h1>Search</h1>
<div class="space-below-search-box"></div>


<?php
// Replace with your actual database credentials
$servername = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Get the stream ID from the URL
if (isset($_GET['stream_id'])) {
    $streamID = $_GET['stream_id'];

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Initialize search conditions
    $searchType = isset($_GET['type']) ? $_GET['type'] : 'all';
    $searchQuery = isset($_GET['query']) ? $_GET['query'] : '';

    // Retrieve data based on search conditions
    $sqlGroups = "SELECT Group_ID, Group_Name FROM Groups WHERE stream_id = $streamID AND Parent_Group_ID IS NULL AND Group_Name LIKE '%$searchQuery%'";
    $resultGroups = $conn->query($sqlGroups);

    $sqlAssets = "SELECT asset_id, asset_name, thumbnail_path, stream_id FROM assets WHERE stream_id = $streamID AND asset_name LIKE '%$searchQuery%'";
    $resultAssets = $conn->query($sqlAssets);

    // Display results
    ?>
    <div class="section">
        <h2>Search Results</h2>
        <?php
        // Check if there are any matching groups or assets
        if (($resultGroups->num_rows > 0) || ($resultAssets->num_rows > 0)) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th></th></tr></thead>";
            echo "<tbody>";

            // Display matching groups
            while ($rowGroups = $resultGroups->fetch_assoc()) {
                $groupName = $rowGroups["Group_Name"];
                $groupID = $rowGroups["Group_ID"];

                echo "<tr>";
                echo "<td>";
                echo '<a href="group_details.php?stream_id=' . $streamID . '&group_id=' . $groupID . '">';
                echo '<img src="https://www.easyflex.site/thumbnail.jpg" width="60" height="70" style="border-radius: 10px; margin-right: 15px;" >';
                echo "<span class='group-name' data-group-id='$groupID'>$groupName</span>";
                echo "</a>";
                echo "</td>";
                echo "</tr>";
            }

            // Display matching assets
            while ($rowAssets = $resultAssets->fetch_assoc()) {
                $assetID = $rowAssets["asset_id"];
                $assetName = $rowAssets["asset_name"];
                $thumbnailPath = $rowAssets["thumbnail_path"];
                $streamID = $rowAssets["stream_id"];

                echo "<tr>";
                echo "<td><img src='$thumbnailPath' alt='Asset Thumbnail' width='50' height='60' class='img' style='border-radius: 10px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);'></td>";
                echo "<td><a href='pdf_viewer.php?stream_id=$streamID&asset_id=$assetID' target='_blank'>";
                echo "<span class='asset-name' data-asset-id='$assetID'>$assetName</span>";
                echo "</a></td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>No results found for the search query.</p>";
        }
        ?>
    </div>

    <?php

    // Close the database connection
    $conn->close();
} else {
    echo "Stream ID not provided.";
    exit;
}
?>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<!-- Add your additional HTML content or include scripts here -->

</body>
</html>
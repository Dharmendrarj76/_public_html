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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

   
	<style>
	body {
    margin: 0;
    padding: 50;
    background-image: url('https://www.easyflex.site/back.png');
    background-repeat: repeat;
}


  
.navbar {
    position: absolute;
    top: 100px; /* Adjust the top position based on your design */
    width: 100%;
    background-color: transparent;
    text-align: right;
    max-width: 100%;
    padding: 0;
    z-index: 2; /* Ensure the navbar appears above other elements */
      font-family: 'User Thoma', sans-serif;
}

.navbar button {
    background: none;
    border: none;
    cursor: pointer;
    color: #E51058; /* Set text color to #DE3163 */
    font-size: 17px;
    margin: 5px;
    padding: 5px;
}

.navbar button i {
    margin-right: 5px;
}

.navbar button:hover {
    background-color: #DE3163;
    color: white;
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

/* Optional: Style for the main content when sidebar is open */
.content-with-sidebar {
  margin-left: 250px;
}
.sidebar-menu {
    width: 50px;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    background: #E51058;
    box-shadow: 0px 0px 19px rgba(0, 0, 0, 0.06);
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    z-index: 999; /* Set a lower z-index for the sidebar to keep it behind the navbar */
}

.main-menu {
    margin-block-start: 0;
    margin-block-end: 0;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}


.menu-item {
    list-style: none;
    position: relative;
    width: 85px;
    height: 65px;
}

.menu-txt {
    opacity: 0;
    width: 0px;
    min-width: 0px;
    overflow: hidden;
    transition: 300ms linear;
    transition-delay: 250ms;
    display: flex;
    align-items: center;
    position: relative;
    top: 2px;
    white-space: nowrap;
    overflow: hidden;
}

.menu-a {
    padding: 35px 33.5px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}

.menu-icon {
    display: block;
    font-size: 1.5rem;
    color: #f1f1f1;
    position: relative;
    z-index: 100;
    transition: 400ms;
}

.menu-item:hover .menu-txt {
    opacity: 1;
    width: 100%;
    min-width: 40px;
    padding: 0px 20px;
    transition-delay: 0s;
    color: #4c4c4c;
}

.menu-txt-hld {
    position: absolute;
    z-index: 99;
    background: rgba(255, 255, 255, 0);
    border: 1px solid rgba(0, 0, 0, 0);
    border-radius: 38px;
    font-size: .94rem;
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0);
    padding: 9.5px 8px;
    transition: 250ms linear;
    display: flex;
    align-items: center;
    left: 20px;
    transition-delay: 300ms;
}

.menu-item:hover .menu-txt-hld {
    box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.07);
    background: rgb(255, 255, 255);
    border: 1px solid rgba(0, 0, 0, 0.05);
    transition-delay: 0ms;
}
.active .menu-icon {
    color: #03A9F4;
}


.sidebar {
            height: 100%;
            width: 350px;
            position: fixed;
            top: 0;
            left: -350px; /* Initially hidden off the screen */
            background-color: #000000;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 1; /* Lower z-index when closed */
        }

        .sidebar.open {
            left: 0; /* Open the sidebar by moving it to the left */
            z-index: 2; /* Higher z-index when open to appear above background */
        }
.content {
    padding: 20px;
    margin-left: 0px;
}

.content button {
    background: none;
    border: none;
    cursor: pointer;
    color: white;
    font-size: 16px;
}

.content button i {
    margin-right: 5px;
       margin-left: 20px;
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


.recently-added-carousel {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
   
  
}

.wrapper {
    width: 100%;
    padding-top: 10px;
    text-align: center;
}

.carousel {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 50px;
     flex-direction: row-reverse;
   
}

        .stream-container {
            margin: 10px;
            position: relative;
            width: 200px; /* Adjust the width as needed */
            height: 200px; /* Adjust the height as needed */
            overflow: hidden;
        }

        .stream-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.4s;
        }

        .stream-container:hover img {
            opacity: 0.4;
        }

        .stream-container p {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #000;
            font-size: 20px;
            text-align: center;
            z-index: 2;
              transition: transform 0.4s, color 0.3s;
        }

         .stream-container:hover p {
            transform: translate(-50%, -50%) scale(1.5);
            color:#191970; /* Change hover text color */
        }


.slick-slide {
    margin: 10px;
}


.slick-slide img {
    width: 250px;
    height: 320px;
    border: 2px solid #fff;
    border-radius: 20px;
    transition: transform 0.3s ease;
}

/* Additional styling for slick-prev and slick-next */
.slick-prev,
.slick-next {
    font-size: 24px;
    color: white;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    cursor: pointer;
}

.slick-prev {
    left: 10px;
}

.slick-next {
    right: 10px;
}

.profile-box {
    position: absolute;
    top: 0px;
    right: 90px;
    display: flex;
    align-items: center;
    background-color: rgba(255, 255, 255, 0); /* Full transparency */
    border-radius: 20px;
    padding: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0);
    z-index: 1;
}

.profile-image {
    width: 60px;
    height: 60px;
    background-color: #ccc;
    border-radius: 50%;
    margin-right: 20px; /* margin-right instead of margin-left for spacing */
    overflow: hidden; /* Ensures that the image doesn't overflow the circle */
}

.profile-image img {
    width: 100%;
    height: auto;
    display: block; /* Fixes some spacing issues */
}

.welcome-message {
    margin-left: auto; /* Push the text to the right */
    text-align: left; /* Align the text to the right */
}

.company-logo {
    width: 150px;
    height: 150px;
    background-image: url('https://www.easyflex.site/Easyflex-logo.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
  
    margin-left: 40px;
    position: absolute;
    top: 0px;
    left: 10px;
    z-index: 1;
    transform: translateX(-25%);
}





	</style>
</head>
<body>
 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<br>
<br>
<div class="wrapper">
    <div class="company-logo"></div>

 <?php
 error_reporting(E_ALL);
ini_set('display_errors', 1);
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

// Retrieve the username from the URL
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Assuming you have a users table with columns 'user_id', 'username', 'profile_picture'
    $sql = "SELECT * FROM signup WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Set up profile box HTML with base64 encoded image
            echo '
                <div class="profile-box">
                    <div class="profile-image">
                        <img src="' . $user['profile_picture'] . '" alt="Profile Image">
                    </div>
                    <div class="profile-info">
                        <p>Welcome,</p>
                        <p>' . $user['username'] . '</p>
                    </div>
                </div>
            ';
        } else {
            echo "User not found";
        }

        $stmt->close();
    } else {
        echo 'Error preparing statement: ' . $conn->error;
    }
} else {
    echo "Username parameter not provided";
}

// Close the database connection
$conn->close();
?>


</div>
  <div class="search-box">
    <button class="btn-search" onclick="redirectToSearch()"> <!-- Updated onclick event -->
        <i class="fas fa-search"></i>
    </button>
    <input type="text" class="input-search"  placeholder="Search..."  oninput="updateSearchQuery()">
    <div id="search-results"></div>
</div>

<!-- Include Font Awesome for the search icon -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>



  <script src="script.js"></script>
    <div class="navbar">
         <a href="#" onclick="openSidebar()"><button><i class="fas fa-plus"></i> Add</button></a>
       <a href="#" onclick="editStream(<?php echo $stream_id; ?>)"><button><i class="fas fa-edit"></i> </button></a>
         <a href="#"><button><i class="fas fa-copy"></i></button>
         <a href="#"><button><i class="fas fa-cogs"></i></button>
    </div>
    </div>
  <script>
      function openSidebar() {
  const sidebar = document.querySelector('.sidebar');
  const navbar = document.querySelector('.navbar');

  if (sidebar.style.width === '250px') {
    sidebar.style.width = '0';
    navbar.style.marginLeft = '0';
  } else {
    sidebar.style.width = '250px';
    navbar.style.marginLeft = '250px';
  }
}
  </script> 


<script>
function editStream(stream_id) {
    // Show the edit form for the given stream_id
    var editForm = document.getElementById("edit-form-" + stream_id);
    if (editForm) {
        editForm.style.display = "block";
    }
}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<br><br><br><br>
<div class="carousel">
    <?php
    $servername = 'localhost';
    $username = 'u785001360_root';
    $password = 'Easyflex@12345';
    $dbname = 'u785001360_easyflex';
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT stream_id, stream_name, thumbnail_path, upload_date, image_path FROM streams";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $stream_id = $row['stream_id'];
            $stream_name = $row['stream_name'];
            $thumbnail_path = $row['thumbnail_path'];
            $image_path = $row['image_path'];

            echo '<div class="stream-container">
                      <a href="details.php?stream_id=' . $stream_id . '">
                          <img src="' . $image_path . '" alt="Stream Image">
                          <p id="stream-name-' . $stream_id . '">' . $stream_name . '</p>
                      </a>
                      <form id="edit-form-' . $stream_id . '" style="display: none;">
                          <input type="text" id="edited-stream-name-' . $stream_id . '" value="' . $stream_name . '">
                          <button type="button" onclick="saveStreamName(' . $stream_id . ')">Save</button>
                      </form>
                  </div>';
        }
    } else {
        echo "No streams found in the database.";
    }

    $conn->close();
    ?>
</div>
</div>

<script>
   function saveStreamName(stream_id) {
        // Get the edited stream name from the input field
        var editedStreamName = document.getElementById("edited-stream-name-" + stream_id).value;

        // Send an AJAX request to update the stream name in the database
        // You'll need a PHP script to handle the database update

        // Once the update is successful, you can update the displayed name if needed
        var streamNameElement = document.getElementById("stream-name-" + stream_id);
        if (streamNameElement) {
            streamNameElement.textContent = editedStreamName;
        }

        // Hide the edit form
        var editForm = document.getElementById("edit-form-" + stream_id);
        if (editForm) {
            editForm.style.display = "none";
        }
    }

    function editStream(stream_id) {
        // Show the edit form for the given stream_id
        var editForm = document.getElementById("edit-form-" + stream_id);
        if (editForm) {
            editForm.style.display = "block";
        }
    }
</script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
     $(document).ready(function () {
    $('.carousel').slick({
        slidesToShow: 4,
        centerMode: true,
        prevArrow: '<button type="button" class="slick-prev" style="color: #E51058;"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next" style="color: #E51058;"><i class="fas fa-arrow-right"></i></button>',
    });
});
    </script>
       
          
 
	
	    <!-- Add the sidebar content with the id "mySidebar" -->
  <div class="sidebar" id="mySidebar">
    <br><br><br><br>
      <h2 style="color: white;">Create New Stream</h2>
       <form method="post" enctype="multipart/form-data">
    <br>
    
    <div class="drop-zone">
        <span class="drop-zone__prompt">Drop file here or click to upload</span>
<input type="file" name="uploadedFile" class="drop-zone__input" accept=".jpeg, .jpg, .png">
        </div>
    
     <br><br>
    <div class="form-group">
        <label for="department_name" style="color: pink;"></label>
        <input class="input" placeholder="Enter a stream name Here" type="text" name="stream_name" required>
    </div>
    <br><br><br><br><br><br>
    
    <div class="form-group">
        <button class="create-button" type="submit" name="submit">Submit</button>
        <button class="cancel-button" onclick="closeSidebar()">Cancel</button>
    </div>
    <br>
    <div class="line"></div>
</form>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = 'localhost';
$username = 'u785001360_root';
$password = 'Easyflex@12345';
$dbname = 'u785001360_easyflex';

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Get the uploaded file information
    $fileName = $_FILES['uploadedFile']['name'];
    $fileTmpName = $_FILES['uploadedFile']['tmp_name'];

    // Check for valid file types (JPEG, JPG, PNG)
    $allowedFileTypes = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!empty($fileName)) {
        if (!in_array($fileExtension, $allowedFileTypes)) {
            echo "Only JPEG, JPG, and PNG files are allowed.";
            exit();
        }

        // Define where you want to store the files on your server
        $uploadDirectory = "uploads/";

        // Generate a unique name for the file
        $uniqueName = uniqid();
        $filePath = $uploadDirectory . $uniqueName . '.' . $fileExtension;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($fileTmpName, $filePath)) {
            // Image uploaded successfully
        } else {
            echo "Error uploading the file.";
            exit();
        }
    } else {
        // No image uploaded, use the default image path
        $filePath = "https://www.easyflex.site/thumbnail.jpg";
    }

    // Insert data into the "streams" table
    $streamName = $_POST['stream_name'];
    $sql = "INSERT INTO streams (stream_name, image_path, upload_date) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $streamName, $filePath);

    if ($stmt->execute()) {
        // Data inserted successfully, so use JavaScript to redirect to the same page
        echo '<script>window.location = "'.$_SERVER['PHP_SELF'].'";</script>';
        exit;
    } else {
        echo "Error inserting data into the database.";
    }

    $stmt->close();
}

$conn->close();
?>


 <script src="./src/main.js"></script>
	<script>
 function openSidebar() {
        var sidebar = document.getElementById("mySidebar");
        if (sidebar.style.left === "-500px") {
            sidebar.style.left = "0";
        } else {
            sidebar.style.left = "-500px";
        }
    }

    function closeSidebar() {
        var sidebar = document.getElementById("mySidebar");
        sidebar.style.left = "-500px";
    }


document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

 function handleFormSubmission() {
        // Add your form submission logic here, and if successful:
        // Close the sidebar and display the main content
        closeSidebar();
        showMainContent(); // You can implement this function to display your main content
    }
    
     

   
</script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
 <script>
     

        function logout() {
            // Use AJAX to call the logout.php script
            $.ajax({
                type: "POST",
                url: "logout.php", // Replace with the correct path to logout.php
                success: function(response) {
                    // Check the response, and if successful, redirect to signin.php
                    if (response.trim() === "success") {
                        window.location.href = "signin.php";
                    } else {
                        // Handle errors if needed
                        console.error("Logout failed:", response);
                    }
                },
                error: function(error) {
                    // Handle errors if AJAX request fails
                    console.error("AJAX request failed:", error);
                }
            });
        }
    </script>
   
 <script>
function updateSearchQuery() {
    // Update the search query without performing AJAX request
    var query = document.querySelector('.input-search').value;
    document.getElementById("search-results").innerHTML = "";
}

function redirectToSearch() {
    var query = document.querySelector('.input-search').value.trim(); // Trim to remove leading/trailing spaces

    // Check if the search query is not empty before redirecting
    if (query !== "") {
        // Redirect the user to the search_streams.php page with the search query
        window.location.href = "search_streams.php?query=" + query;

        // Clear the search input field after redirection
        document.querySelector('.input-search').value = "";
    }
}
</script>
</body>

</html>

<?php
// Start session
session_start();

// Include database configuration
require_once('config.php');

// Store the current URL for later use (if needed)
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

// If the user is not logged in, redirect them to the login page
if (!isset($_SESSION["un"])) {
    header("Location: login.php");
    exit(); // Ensure no further code runs after redirection
}

// Retrieve the logged-in username from session (if needed later)
if (isset($_SESSION['un'])) {
    $username = $_SESSION['un'];
}

// Check if a search query is set in the URL
if (isset($_GET['query'])) {
    // Get and sanitize the search query
    $search_query = htmlspecialchars($_GET['query']);

    // Prepare the SQL query to search for users based on their name
    $sql = "SELECT * FROM user WHERE name LIKE ?";

    // Prepare the statement to prevent SQL injection
    if ($stmt = $con->prepare($sql)) {
        // Use a wildcard search
        $like_query = "%" . $search_query . "%";
        $stmt->bind_param("s", $like_query); // Only one parameter for name
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if results were found
        if ($result->num_rows > 0) {
            // Start the table structure
            // Fetch results and output each row
            while ($row = $result->fetch_assoc()) {
                header("Location: profile.php?user=" . htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'));

               exit(); 
            }

            echo "</table>";
        } else {
            // No results found
            echo "<p>No results found for '" . htmlspecialchars($search_query) . "'</p>";
        }

        // Close the prepared statement
        $stmt->close();
    } 
} else {
    // No search query provided
    echo "Enter user handle.";
}

// Close the database connection
$con->close();
?>

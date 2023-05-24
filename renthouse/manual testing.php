
register

<?php
// Set the registration data
$username = 'your_username';
$email = 'your_email@example.com';
$password = 'your_password';

// Initialize cURL
$ch = curl_init();

// Set the cURL options
curl_setopt($ch, CURLOPT_URL, 'https://www.example.com/register');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'username' => $username,
    'email' => $email,
    'password' => $password,
    'confirm_password' => $password
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects if any

// Execute the cURL request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Close cURL
curl_close($ch);

// Verify the registration response
if ($httpCode == 200 && strpos($response, 'Registration successful!') !== false) {
    echo "Registration successful!";
} else {
    echo "Registration failed!";
}
?>





//contact

<?php
// Simulate form submission
$_POST['submit'] = true;
$_POST['name'] = 'John Doe';
$_POST['email'] = 'test@example.com';
$_POST['message'] = 'This is a test message';

ob_start();
include 'contact-us.php'; // Replace 'your_file_name.php' with the actual file name containing the code
$output = ob_get_clean();

// Assert that the email was sent successfully
if (strpos($output, 'Mail Sent.') !== false) {
    echo "Test Passed: Mail Sent successfully.\n";
} else {
    echo "Test Failed: Mail not sent.\n";
}

// Assert the email headers and content
if (
    isset($GLOBALS['headers']) &&
    isset($GLOBALS['headers2']) &&
    isset($GLOBALS['message']) &&
    isset($GLOBALS['message2']) &&
    strpos($GLOBALS['headers'], 'From:test@example.com') !== false &&
    strpos($GLOBALS['headers2'], 'From:') !== false &&
    strpos($GLOBALS['message'], 'John Doe wrote the following:') !== false &&
    strpos($GLOBALS['message'], 'This is a test message') !== false &&
    strpos($GLOBALS['message2'], 'Here is a copy of your message John Doe') !== false &&
    strpos($GLOBALS['message2'], 'This is a test message') !== false
) {
    echo "Test Passed: Email headers and content are correct.\n";
} else {
    echo "Test Failed: Email headers or content are incorrect.\n";
}
?>




//search

<?php
// Set the search query
$searchQuery = 'example search query';

// Set the search URL with the query string
$searchUrl = 'http://localhost/renthouse/search-property.php?search_property=' . urlencode($searchQuery); // Replace with the actual URL of your search functionality

// Perform the HTTP request and get the response
$response = file_get_contents($searchUrl);

// Verify the search response
if ($response !== false && strpos($response, 'Searched Properties') !== false) {
    echo "Search successful!";
} else {
    echo "Search failed!";
}
?>



//add

<?php
// Retrieve the data from the form or request parameters
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

// Perform validation on the input data
if (empty($name) || empty($description) || empty($price)) {
    echo "Please fill in all the required fields.";
} else {
    // Perform the "add" operation, such as inserting the data into a database
    // Example code to insert the data into a MySQL database
    $connection = mysqli_connect('localhost', 'username', 'password', 'database_name');
    
    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
    $result = mysqli_query($connection, $sql);
    
    if ($result) {
        echo "Data added successfully!";
    } else {
        echo "Failed to add data.";
    }
    
    // Close the database connection
    mysqli_close($connection);
}
?>




delete

<?php
// Retrieve the ID of the record to delete
$id = $_GET['id'];

// Perform validation on the ID
if (empty($id)) {
    echo "Invalid ID provided.";
} else {
    // Perform the "delete" operation, such as removing the record from a database
    // Example code to delete the record from a MySQL database
    $connection = mysqli_connect('localhost', 'username', 'password', 'database_name');
    
    $sql = "DELETE FROM products WHERE id = $id";
    $result = mysqli_query($connection, $sql);
    
    if ($result) {
        echo "Record deleted successfully!";
    } else {
        echo "Failed to delete record.";
    }
    
    // Close the database connection
    mysqli_close($connection);
}
?>




edit

<?php
// Retrieve the data from the form or request parameters
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

// Perform validation on the input data
if (empty($id) || empty($name) || empty($description) || empty($price)) {
    echo "Please fill in all the required fields.";
} else {
    // Perform the "edit" operation, such as updating the data in a database
    // Example code to update the data in a MySQL database
    $connection = mysqli_connect('localhost', 'username', 'password', 'database_name');

    $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "Data updated successfully!";
    } else {
        echo "Failed to update data.";
    }

    // Close the database connection
    mysqli_close($connection);
}
?>




display


<?php
// Retrieve the data from a database
$connection = mysqli_connect('localhost', 'username', 'password', 'database_name');

$sql = "SELECT * FROM products";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // Display the retrieved data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Description: " . $row['description'] . "<br>";
        echo "Price: " . $row['price'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No data found.";
}

// Close the database connection
mysqli_close($connection);
?>





<?php 
require_once 'testconnect.php';

// Assuming you have a table named `messages` with columns `name`, `message`, and `imagePath`
$stmt = $conn->prepare('SELECT * FROM `messages`');
$stmt->execute();

// Fetching results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Loop through the results and do something with them
foreach ($results as $row) {
    $name = $row['name'];
    $message = $row['message'];
    $imagePath = $row['imagePath'];

    // Do something with the retrieved data, for example, echo it
    echo "
    
    <div class='msg1'>
    <h4>$name</h4>
    <p>$message</p>
    <img src='$imagePath' class='textIMG'/>
    </div>
    
    ";

    echo  "<hr>";
}
<?php
// Example static search results
$results = array(
    array('title' => 'Chocolate Cupcakes', 'description' => 'Chocolate Cupcakes with Chocolate Cream'),
    array('title' => 'Choc Chip Biscuit', 'description' => 'Biscuit with Choc Chip'),
    array('title' => 'Chocolate Cake', 'description' => 'Chocolate Cake with White Sweat Cream and Cherry On Top'),
    // Add more results as needed
);

// Return results as JSON
header('Content-Type: application/json');
echo json_encode($results);
?>

<!-- search.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Search Results</title>
</head>

<body>
  <div id="searchResults"></div>
</body>

</html>

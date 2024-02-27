<?php
// Perform your search logic here (query the database, etc.)

// Example static search results
$results = array(
    array('title' => 'Chocolate Cupcakes', 'description' => 'Chocolate Cupcakes with Chocolate Cream'),
    array('title' => 'Choc Chip Biscuit', 'description' => 'Biscuit with Choc Chip'),
    array('title' => 'Chocolate Cake', 'description' => 'Chocolate Cake with White Sweat Cream and Cherry On Top'),
    // Add more results as needed
);

// Return results as JSON
echo json_encode($results);
?>

<?php
require_once('../db/connection.php');

function get_location($species) {
    // This function should call an actual API to get location data.
    return '37.7749,-122.4194'; // Dummy coordinates
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $species = file_get_contents('php://input');
    $location = get_location($species);

    header('Content-Type: application/json');
    echo json_encode(['location' => $location]);
}
?>

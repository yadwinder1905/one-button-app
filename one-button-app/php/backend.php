<?php

require_once 'db_connection.php';

if (isset($_GET['action']) && $_GET['action'] == 'increment') {
    
    $sql = "UPDATE counter SET value = value + 1";
    $result = mysqli_query($connection, $sql);
    
    if ($result) {
        echo "Counter updated successfully!";
    } else {
        echo "Error updating counter: " . mysqli_error($connection);
    }
}

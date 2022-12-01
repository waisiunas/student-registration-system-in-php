<?php require_once './database/connection.php'; ?>

<?php

if (isset ($_GET['id']) && !empty ($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
} else {
    header('Location: ./show_registrations.php');
}

$sql = "DELETE FROM `registration` WHERE `id` = $id";

if ($conn->query($sql)) {
    header('Location: ./show_registrations.php');
} else {
    echo 'Registration has failed to delete';
}
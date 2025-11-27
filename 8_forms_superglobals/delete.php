<?php

if (isset($_GET["id"])) {
    $contactsFile = "contacts.json";
    // Decode as associative array
    $contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];

    // Remove matching contact
    $contacts = array_filter($contacts, fn($c) => $c["id"] != $_GET["id"]);

    // Save back
    file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
    echo "Contact Deleted!";
}
<?php

require_once '../include/config.php';

// Haalt het menu op
$getProducts = 'SELECT * FROM yachtzoek ORDER BY prijs';

// Variabel query wordt aangemaakt
$query = $conn->query($getProducts);
// Fetch wordt aangeroepen
$query->setFetchMode(PDO::FETCH_ASSOC);


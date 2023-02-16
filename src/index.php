<?php

// Load the magic spells from the CSV file
$spells = array();
$handle = fopen("magic.csv", "r");
if ($handle) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $spells[] = array(
            'name' => $data[0],
            'type' => $data[1],
            'description' => $data[2],
        );
    }
    fclose($handle);
}

// Check if there is a spell in the GET request
$spell = $_GET['spell'] ?? '';
if (!$spell) {
    // If there is no spell, return a random spell from the CSV
    $randomIndex = array_rand($spells);
    $retspell = $spells[$randomIndex]['name'];
}

// Get the description of the spell
$description = '';
foreach ($spells as $s) {
    if (strtolower($s['name']) === strtolower($spell)) {
        $description = $s['description'];
        break;
    }
}

// Return the description of the spell
if (!$spell) {
    echo $retspell;
} else {
    if ($description) {
        echo $description;
    }
    else {
        http_response_code(404);
        echo json_encode(['error' => 'Spell not found']);
    }
}
echo $spell;


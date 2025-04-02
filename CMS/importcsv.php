<?php
$directory = __DIR__ . "/pagesDE"; // Original pages directory
$translatedDir = __DIR__ . "/translated_pages"; // Folder for translated pages
$csvFile = "translations.csv";

// Load translations into an array
$translations = [];
if (($handle = fopen($csvFile, "r")) !== false) {
    fgetcsv($handle); // Skip header row
    while (($row = fgetcsv($handle)) !== false) {
        $translations[$row[0]] = $row[4]; // Map id => translated_text
    }
    fclose($handle);
}

// Ensure translated pages directory exists
if (!is_dir($translatedDir)) {
    mkdir($translatedDir, 0777, true);
}

// Replace text dynamically
$files = glob("$directory/*.php");
foreach ($files as $file) {
    $html = file_get_contents($file);
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    $tags = ["h1", "p", "span", "a", "button"];
    foreach ($tags as $tag) {
        $elements = $dom->getElementsByTagName($tag);
        foreach ($elements as $index => $element) {
            $id = pathinfo($file, PATHINFO_FILENAME) . "_{$tag}_{$index}";
            if (isset($translations[$id]) && !empty($translations[$id])) {
                $element->nodeValue = $translations[$id];
            }
        }
    }

    // Save the updated page
    $newHTML = $dom->saveHTML();
    file_put_contents("$translatedDir/" . basename($file), $newHTML);
}

echo "Translation applied! Translated pages saved in /translated_pages.";
?>

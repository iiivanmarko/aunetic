<?php
$directory = __DIR__ . "/pagesDE"; // Directory with original PHP pages
$outputCSV = "translations.csv"; // CSV file to store translations

$files = glob("$directory/*.php");
$data = [["id", "page", "tag", "original_text", "translated_text"]]; // CSV header

foreach ($files as $file) {
    $html = file_get_contents($file);
    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // Avoid errors from malformed HTML
    $dom->loadHTML($html);
    libxml_clear_errors();

    $tags = ["h1", "p", "span", "a", "button"]; // Add other tags if needed
    foreach ($tags as $tag) {
        $elements = $dom->getElementsByTagName($tag);
        foreach ($elements as $index => $element) {
            $text = trim($element->nodeValue);
            if (!empty($text)) {
                $id = pathinfo($file, PATHINFO_FILENAME) . "_{$tag}_{$index}";
                $data[] = [$id, basename($file), $tag, $text, ""]; // Leave translation empty for now
            }
        }
    }
}

// Save to CSV
$fp = fopen($outputCSV, "w");
foreach ($data as $row) {
    fputcsv($fp, $row);
}
fclose($fp);

echo "Text extracted and saved to translations.csv!";
?>

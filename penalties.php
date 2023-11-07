<?php
require 'vendor/autoload.php'; // Include the PhpSpreadsheet library

// Create a new Spreadsheet object
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('https://raw.githubusercontent.com/hyegunn/pre-enrollment.io/main/penalties.xlsx'); // Update with the actual URL of your Excel file

// Get the first worksheet in the Excel file
$worksheet = $spreadsheet->getActiveSheet();

// Get the data from the worksheet
$data = $worksheet->toArray();

// HTML header and layout
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Penalty List</title>';
echo '<style>';
echo 'table { border-collapse: collapse; width: 50%; }';
echo 'table, th, td { border: 1px solid black; }';
echo 'th, td { padding: 10px; text-align: left; }';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Penalty List</h1>';

// Display the data in an HTML table
echo '<table>';
foreach ($data as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

// HTML footer
echo '</body>';
echo '</html>';
?>

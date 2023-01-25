<?php
$url = 'https://raw.githubusercontent.com/Hatakasy/was-it-free/main/dataBackup.json';

$json = file_get_contents($url);
$obj = json_decode($json, true);

foreach ($obj["Data"] as $e) {
    
    echo ("<tr>
        <td>" . $e["name"] . "</td>
        <td>" . $e["date"] . "</td>
        <td>" . $e["site"] . "</td>
        </tr>"
    );
}

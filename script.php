<?php
$url = 'https://pastebin.com/raw/1Nhr4740';

$json = file_get_contents($url);
$obj = json_decode($json, true);

foreach ($obj["Data"] as $e) {
    $gName = $e["name"];
    $gDate = $e["date"];
    $gSite = $e["site"];

    echo ("<tr>
        <td>" . $gName . "</td>
        <td>" . $gDate . "</td>
        <td>" . $gSite . "</td>
        </tr>"
    );
}

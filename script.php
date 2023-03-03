<?php
$url = getenv('GAMES_URL'); //replit secret

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

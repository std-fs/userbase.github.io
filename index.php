<?php
$user32 = 'Sidhsksjsjsh';
$src = 'Anime-Dungeon-Fighter';
$url = "https://api.github.com/repos/$user32/$src/contents";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

echo '<table border="1">';
echo '<tr><th>Name</th><th>Type</th><th>Size</th></tr>';

foreach ($data as $file) {
    echo '<tr>';
    echo '<td><a href="' . $file['html_url'] . '">' . $file['name'] . '</a></td>';
    echo '<td>' . $file['type'] . '</td>';
    echo '<td>' . $file['size'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>

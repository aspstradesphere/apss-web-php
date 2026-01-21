<?php
$host = 'localhost';
$db = 'apss_database';
$user = 'root';
$pass = 'ssingh84';

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);

$stmt = $pdo->prepare("SELECT option_value FROM wp_options WHERE option_name = 'fluentmail-settings'");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    file_put_contents('smtp_debug.json', $row['option_value']);
    echo "Saved to smtp_debug.json";
} else {
    echo "Not found";
}
?>
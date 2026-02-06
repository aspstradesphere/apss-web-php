<?php
// test_email.php
require_once 'includes/SimpleSMTP.php';

$host = 'smtp.hostinger.com';
$port = 465;
$user = 'sujit.singh@apsstradesphere.com';
$pass = 'Ssingh@84';

echo "Testing SMTP Connection to $host:$port...\n";
echo "User: $user\n";

try {
    $smtp = new SimpleSMTP($host, $port, $user, $pass);
    echo "Authentication Successful!\n";

    if ($smtp->send('sales@apsstradesphere.com', 'Test Email from Localhost', 'This is a test.', 'Test Script')) {
        echo "Email Sent Successfully!\n";
    } else {
        echo "Email Sending Failed.\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "Trace: " . $e->getTraceAsString() . "\n";
}
?>
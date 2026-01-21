<?php
echo "OpenSSL enabled: " . (extension_loaded('openssl') ? 'Yes' : 'No') . "\n";
echo "Stream Transports: " . implode(', ', stream_get_transports()) . "\n";
?>
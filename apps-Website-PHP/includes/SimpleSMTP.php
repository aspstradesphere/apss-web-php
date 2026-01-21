<?php
class SimpleSMTP
{
    private $host;
    private $port;
    private $user;
    private $pass;
    private $debugFile;

    public function __construct($host, $port, $user, $pass)
    {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->pass = $pass;
        $this->debugFile = __DIR__ . '/../smtp_log.txt';
    }

    private function log($msg)
    {
        $timestamp = date('Y-m-d H:i:s');
        file_put_contents($this->debugFile, "[$timestamp] $msg" . PHP_EOL, FILE_APPEND);
    }

    public function send($to, $subject, $body, $fromName = 'Website Contact')
    {
        $this->log("--- START EMAIL SEND ---");
        $this->log("To: $to | Subject: $subject");

        $prefix = '';
        if ($this->port == 465) {
            if (extension_loaded('openssl')) {
                $prefix = 'ssl://';
            } else {
                $this->log("WARNING: OpenSSL extension missing. Cannot use SSL on 465.");
            }
        }

        $socket = @fsockopen($prefix . $this->host, $this->port, $errno, $errstr, 15);

        if (!$socket) {
            $this->log("Connect Failed: $errstr ($errno)");
            if ($this->port == 465) {
                $this->log("Retrying on 587...");
                $socket = @fsockopen($this->host, 587, $errno, $errstr, 15);
            }
        }

        if (!$socket) {
            $this->log("FATAL: All connection attempts failed.");
            return false;
        }

        if (!$this->readResponse($socket, "220"))
            return false; // Welcome

        $this->sendCommand($socket, "HELO " . gethostname());

        // AUTH
        $this->sendCommand($socket, "AUTH LOGIN");
        $this->sendCommand($socket, base64_encode($this->user));

        if (!$this->sendCommand($socket, base64_encode($this->pass), "235")) {
            $this->log("AUTH FAILED: Password rejected or sync error.");
            return false;
        }

        $this->sendCommand($socket, "MAIL FROM: <{$this->user}>");
        $this->sendCommand($socket, "RCPT TO: <$to>");

        $this->sendCommand($socket, "DATA", "354");

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: $fromName <{$this->user}>\r\n";
        $headers .= "Reply-To: $fromName <{$this->user}>\r\n";
        $headers .= "Subject: $subject\r\n";
        $headers .= "X-Mailer: SimpleSMTP/PHP\r\n";

        fwrite($socket, "$headers\r\n$body\r\n.\r\n");
        if (!$this->readResponse($socket, "250")) {
            $this->log("DATA send failed.");
            return false;
        }

        $this->sendCommand($socket, "QUIT");
        fclose($socket);

        $this->log("--- EMAIL SENT SUCCESSFULLY ---");
        return true;
    }

    private function sendCommand($socket, $cmd, $expectedCode = null)
    {
        fwrite($socket, $cmd . "\r\n");
        return $this->readResponse($socket, $expectedCode);
    }

    private function readResponse($socket, $expectedCode = null)
    {
        $response = fgets($socket, 515);
        $this->log("SERVER: " . trim($response));

        if ($expectedCode) {
            if (substr($response, 0, 3) !== $expectedCode) {
                $this->log("ERROR: Expected $expectedCode, got " . substr($response, 0, 3));
                return false;
            }
        }
        return true;
    }
}
?>
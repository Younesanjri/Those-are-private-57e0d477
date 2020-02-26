<?php
class MyLogger {
    private function logWithTime($message) {
		$t = time();
		$t=date("Y-m-d H:i:s",$t);
        print($t . $message);
    }

    public function error($message) {
        $this->logWithTime("| ERROR: " . $message);
    }

    public function info($message) {
        $this->logWithTime("| INFO: " . $message);
    }

    public function debug($message) {
        $this->logWithTime("| DEBUG: " . $message);
    }

    public function warning($message) {
        $this->logWithTime("| WARNING: " . $message);
    }
}

$logger = new MyLogger();

$logger->error("test")
?>
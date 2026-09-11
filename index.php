<?php

class Job {
    public function task() {
        for ($i = 0; $i < 10; $i++) {
            echo "Task is done!" . $i . "\n";
        }
    }
}

class ConsoleLogger {
    public function log($message) {
        echo $message . "\n";
    }
}


class NothingLogger {
    public function log($message) {
        // Do nothing
    }
}

class FileLogger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

$job = new Job();
$logger = new FileLogger();
$job->task();

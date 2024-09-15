<?php

interface LoggingInterface {   //LoggerInterface defines the log method that all loggers must implement.
    
    public function log(string $message): void;

}

?>
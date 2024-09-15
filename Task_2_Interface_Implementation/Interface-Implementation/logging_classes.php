<?php

require 'logging_interface.php';

class ConsoleLogger implements LoggingInterface {  //ConsoleLogger prints the message to the console.

    public function log(string $message): void {

        echo "Logged to console: $message\n";

    }

}

class FileLogger implements LoggingInterface {  //FileLogger appends the message to a specified file.
    
    private string $filename;

    public function __construct(string $filename) {
       
        $this->filename = $filename;
   
    }

    public function log(string $message): void {
       
        file_put_contents($this->filename, $message . PHP_EOL, FILE_APPEND);

        echo "Logged to file: $message\n";
  
    }
}

class DatabaseLogger implements LoggingInterface {  //DatabaseLogger inserts the message into a database table.
   
    private $pdo;

    public function __construct($pdo) {
        
        $this->pdo = $pdo;

    } 
  
    public function log(string $message): void {
   
        $stmt = $this->pdo->prepare("INSERT INTO logs (message) VALUES (:message)");

        $stmt->execute(['message' => $message]);
        
        echo "Logged to database: $message\n";
  
    }

}

?>





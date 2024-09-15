<?php

require 'logging_interface.php';

require 'logging_classes.php';

$consoleLogger = new ConsoleLogger();

$fileLogger = new FileLogger('my_log.txt');

$databaseLogger = new DatabaseLogger($pdo);  //Need database connection to implement

$consoleLogger->log('This is a console log.');

$fileLogger->log('This is a file log.');

$databaseLogger->log('This is a database log.');

?>
<?php

require __DIR__ . "/../vendor/autoload.php";

/**
 * SEND QUEUE
 */
$emailQueue = new \Source\Supports\Email();
$emailQueue->sendQueue();

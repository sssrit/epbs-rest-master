<?php

require_once('Response.php');

$response = new Response();
$response->setSuccess(true);
$response->setHttpStatusCode(200);
$response->addMessage("Testomg 1");
$response->addMessage("Testomg 2");

$response->send();


?>
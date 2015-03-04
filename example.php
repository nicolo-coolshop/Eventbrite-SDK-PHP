<?php

require_once 'vendor/autoload.php';

use Eventbrite\Configurations\Configuration;
use Eventbrite\Controllers\APIController;

$config = require_once 'config.php';

Configuration::baseUri('https://www.eventbriteapi.com');
Configuration::token($config['oAuth']);

$api = new APIController();
$events = $api->retrieveUserOwnedEvents($config['userId']);

echo "<pre>";
print_r($events);

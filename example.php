<?php

require_once 'vendor/autoload.php';

use Eventbrite\Configurations\Configuration;
use Eventbrite\Calls\User;
use Eventbrite\Calls\Event;

$config = require_once 'config.php';

Configuration::baseUri('https://www.eventbriteapi.com');
Configuration::token($config['oAuth']);

/*
User examples
*/
$user = new User();

// $data = $user->getOwnEvents($config['userId']);
// $data = $user->getOwnDetail();
// $data = $user->getOwnOrder($config['userId']);
// $data = $user->getOrderDetails(331687978);
// $data = $user->getOrderDetails($config['userId']);
// $data = $user->getOwnEventsAttendees($config['userId']);
// $data = $user->getVenue($config['userId']);

/*
Event examples
*/
$event = new Event();

// $data = $event->getSearch(['locationAddress' => 'Sofia, Bulgaria', 'locationWithin' => '50km']);
// $data = $event->getCategoriesList();
// $data = $event->getDetails('15237119635');
// $data = $event->getAttendees('15237119635');

echo "<pre>";
print_r($data);

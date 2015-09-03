<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = 'your_bot_api_key';
$BOT_NAME = 'namebot';

try {
    // create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY,$BOT_NAME);

    // here you can set some command specified parameters, for example, google geocode/timezone api key for date command:
    $telegram->setCommandConfig('date', array('google_api_key'=>'your_google_api_key_here'));

    // handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}